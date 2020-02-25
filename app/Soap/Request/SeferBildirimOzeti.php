<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use SoapClient;

class SeferBildirimOzeti
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $seferBilgileri = null;
    public $yukListesi = array();
    public function __construct(WsUser $user, Sefer $sefer)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->seferBildirimOzeti(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'uetdsSeferReferansNo' => $sefer->uetdsSeferReferansNo
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->seferBilgileri = isset($res->return->seferBilgileri) ? new SeferBilgileri($res->return->seferBilgileri) : null;
        $this->yukListesi = isset($res->return->yukListesi) ?  $this->setArray($res->return->yukListesi) : array();
    }


    private function setArray($arr)
    {
        $temp = array();

        if (gettype($arr) == 'object') {
            array_push($temp,new Yuk($arr));
        }else{
            foreach ($arr as $val) {
                array_push($temp, new Yuk($val));
            }
        }
        return $temp;
    }
}

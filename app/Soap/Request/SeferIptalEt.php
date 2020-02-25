<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\IptalTuru;
use App\Soap\Model\Sefer;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBilgileriInput;
use SoapClient;

class SeferIptalEt
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public function __construct(WsUser $user,IptalTuru $iptalTuru, Sefer $sefer,string $aciklama)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->seferIptalEt(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            "uetdsSeferReferansNo" => $sefer->uetdsSeferReferansNo ,
            "iptalTurKodu" =>$iptalTuru->kodu ,
            "iptalAciklama" => $aciklama
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
    }


    private function setArray($arr){
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp,new Yuk($val));
        }
        return $temp;
    }



}

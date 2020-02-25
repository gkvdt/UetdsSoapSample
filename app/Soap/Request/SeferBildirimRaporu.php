<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class SeferBildirimRaporu
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $sonucPdf = null;

    public function __construct(WsUser $user,Sefer $sefer)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->seferBildirimRaporu(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'uetdsSeferReferansNo' => $sefer->uetdsSeferReferansNo
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->sonucPdf = $res->return->sonucPdf;

    }


    private function setArray($arr){
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp,new Yuk($val));
        }
        return $temp;
    }



}

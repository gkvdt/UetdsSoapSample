<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\IptalTuru;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBilgileriInput;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class YukIptalEtV2
{

    public $sonucKodu = null;
    public $sonucMesaji = null;

    public function __construct(WsUser $user,Yuk $yuk,IptalTuru $iptalTuru)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->yukIptalEtV2(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'uetdsYukReferansNo' => $yuk->uetdsYukReferansNo,
            'iptalTurKodu'=> $iptalTuru->kodu
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

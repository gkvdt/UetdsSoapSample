<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\UetdsEsyaSonuc;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBilgileriInput;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class SefereYukEkle
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $uetdsEsyaSonuc = array();

    public function __construct(WsUser $user,YukBilgileriInput $yukBilgileriInput,Sefer $sefer)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->sefereYukEkle(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'uetdsSeferReferansNo'=> $sefer->uetdsSeferReferansNo,
            'yukBilgileriListInput' => $yukBilgileriInput->getValues()
        ));
    
        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->uetdsEsyaSonuc = new UetdsEsyaSonuc($res->return->uetdsEsyaSonuc);
    }


    private function setArray($arr){
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp,new Yuk($val));
        }
        return $temp;
    }



}

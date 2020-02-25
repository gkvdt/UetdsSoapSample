<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\WsUser;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class ParamYukTuru
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $yukTuruListe = array();
    public function __construct(WsUser $user,TasimaTuruKodu $tasimaTuruKodu)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->paramYukTuru(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'tasimaTuruKodu' => $tasimaTuruKodu->kod
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->yukTuruListe = $this->setArray($res->return->yukTurListesi);


    }


    private function setArray($arr){
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp,new YukTuru($val));
        }
        return $temp;
    }



}

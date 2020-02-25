<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\WsUser;
use App\Soap\Model\YukBirimi;
use SoapClient;

class ParamYukBirimi
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $yukBirimListe = array();
    public function __construct(WsUser $user,TasimaTuruKodu $tasimaTuruKodu)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->paramYukBirimi(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'tasimaTuruKodu' => $tasimaTuruKodu->kod
        ));
        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->yukBirimListe = $this->setArray($res->return->paramYukBirimiListesi);


    }


    private function setArray($arr){
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp,new TehlikeliMaddeTasimaSekli($val));
        }
        return $temp;
    }



}

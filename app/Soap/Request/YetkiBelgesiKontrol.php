<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Arac;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\SeferBilgileriInput;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class YetkiBelgesiKontrol
{

    public $sonucKodu = null;
    public $sonucMesaji = null;

    public $unetNo;
    public $firmaUnvan;
    public $belgeTuru;
    public $belgeNo;
    public $belgeGecerlilikTarihi;



    public function __construct(WsUser $user, Arac $arac)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->yetkiBelgesiKontrol(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'plaka' => $arac->plaka,
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->unetNo = $res->return->unetNo;
        $this->firmaUnvan = $res->return->firmaUnvan;
        $this->belgeTuru = $res->return->belgeTuru;
        $this->belgeNo = $res->return->belgeNo;
        $this->belgeGecerlilikTarihi = $res->return->belgeGecerlilikTarihi;
    }


    private function setArray($arr)
    {
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp, new Yuk($val));
        }
        return $temp;
    }
}

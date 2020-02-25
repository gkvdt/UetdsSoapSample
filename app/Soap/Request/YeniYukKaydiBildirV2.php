<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Sefer;
use App\Soap\Model\SeferBilgileri;
use App\Soap\Model\SeferBilgileriInput;
use App\Soap\Model\TasimaTuruKodu;
use App\Soap\Model\TehlikeliMaddeTasimaSekli;
use App\Soap\Model\UetdsEsyaSonuc;
use App\Soap\Model\WsUser;
use App\Soap\Model\Yuk;
use App\Soap\Model\YukBirimi;
use App\Soap\Model\YukTuru;
use SoapClient;

class YeniYukKaydiBildirV2
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $uetdsSeferReferansNo;
    public $firmaSeferNo;
    public $uetdsEsyaSonuc= array();
    /**
     * 
     * @param $yukBilgileriListInput List<YukBilgileriInput>
     * 
     */
    public function __construct(WsUser $user, SeferBilgileriInput $seferBilgileriInput, $yukBilgileriListInput)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];



        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->yeniYukKaydiBildirV2(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'seferBilgileriInput' => $seferBilgileriInput->getValues(),
            'yukBilgileriListInput' => $yukBilgileriListInput
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->uetdsSeferReferansNo = $res->return->uetdsSeferReferansNo;
        $this->firmaSeferNo = isset($res->return->firmaSeferNo) ? $res->return->firmaSeferNo : null;
        $this->uetdsEsyaSonuc = new UetdsEsyaSonuc($res->return->uetdsEsyaSonuc);
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

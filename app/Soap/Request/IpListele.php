<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Connection;
use App\Soap\Model\Ip;
use App\Soap\Model\WsUser;
use SoapClient;
use stdClass;

class IpListele
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public $ipListesi = array();
    public function __construct(WsUser $user)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->ipListele(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
        ));

        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
        $this->ipListesi = $this->setArray($res->return->ipListesi);
    }

    private function setArray($arr)
    {
        $temp = array();
        foreach ($arr as $val) {
            array_push($temp, new Ip($val));
        }
        return $temp;
    }
}

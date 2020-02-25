<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Ip;
use App\Soap\Model\WsUser;
use SoapClient;

class IpSil
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public function __construct(WsUser $user,$ipId)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->ipSil(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'ipId'=>$ipId
        ));
        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
    }



}

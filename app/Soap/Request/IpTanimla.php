<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Ip;
use App\Soap\Model\WsUser;
use SoapClient;

class IpTanimla
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public function __construct(WsUser $user,Ip $ip)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->ipTanimla(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'ipBaslangic'=> $ip->ipBaslangic,
            'ipBitis' => $ip->ipBitis
        ));
        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
    }



}

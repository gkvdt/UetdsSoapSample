<?php

namespace App\Soap\Request;

use App\Soap\Config;
use App\Soap\Model\Ip;
use App\Soap\Model\User;
use App\Soap\Model\WsUser;
use SoapClient;

class MeslekiYeterlilikSorgula
{

    public $sonucKodu = null;
    public $sonucMesaji = null;
    public function __construct(WsUser $user,User $u)
    {
        $authData = [
            'login'          => $user->kullaniciAdi,
            'password'       => $user->sifre
        ];
        $req = new SoapClient(Config::getApiUri(), $authData);
        $res = $req->meslekiYeterlilikSorgula(array(
            'wsuser' => [
                'kullaniciAdi' => $user->kullaniciAdi,
                'sifre' => $user->sifre
            ],
            'kimlikNo'=> $u->kimlikNo
        ));
        $this->sonucKodu = $res->return->sonucKodu;
        $this->sonucMesaji = $res->return->sonucMesaji;
    }



}

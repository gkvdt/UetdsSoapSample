<?php

namespace App\Soap\Model;

class Ip
{

    public $id;
    public $ipBaslangic;
    public $ipBitis;

    public function __construct($ip=null)
    {
        $this->id = isset($ip->id) ? $ip->id : null ;
        $this->ipBaslangic = isset($ip->ipBaslangic) ? $ip->ipBaslangic : null ;
        $this->ipBitis = isset($ip->ipBitis) ? $ip->ipBitis : null ;
    }
   
}

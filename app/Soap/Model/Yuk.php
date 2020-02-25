<?php

namespace App\Soap\Model;

class Yuk
{
    public $uetdsYukReferansNo;
    public $durum;
    public $firmaYukNo;


    public function __construct($params)
    {
        $this->uetdsYukReferansNo = isset($params->uetdsYukReferansNo) ? $params->uetdsYukReferansNo : null;
        $this->durum = isset($params->durum) ? $params->durum : null;
        $this->firmaYukNo = isset($params->firmaYukNo) ? $params->firmaYukNo : null;
    }
}

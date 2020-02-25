<?php

namespace App\Soap\Model;

class UetdsEsyaSonuc
{

    public $sira;
    public $sonucKodu;
    public $sonucMesaji;
    public $uetdsYukReferansNo;
    public $firmaYukNo;

    public function __construct($params)
    {
        $this->sira = isset($params->sira) ? $params->sira : null;
        $this->sonucKodu = isset($params->sonucKodu) ? $params->sonucKodu : null;
        $this->sonucMesaji = isset($params->sonucMesaji) ? $params->sonucMesaji : null;
        $this->uetdsYukReferansNo = isset($params->uetdsYukReferansNo) ? $params->uetdsYukReferansNo : null;
        $this->firmaYukNo = isset($params->firmaYukNo) ? $params->firmaYukNo : null;
    }
}

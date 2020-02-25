<?php

namespace App\Soap\Model;

class TehlikeliMaddeTasimaSekli
{

    public $aciklama;
    public $kodu;

    public function __construct($params)
    {
        $this->aciklama = $params->aciklama;
        $this->kodu = $params->kodu;
    }
}

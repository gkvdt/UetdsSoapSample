<?php

namespace App\Soap\Model;

class IptalTuru
{

    public $aciklama;
    public $kodu;

    public function __construct($data)
    {
        $this->aciklama = isset($data->aciklama) ? $data->aciklama : null;
        $this->kodu     = isset($data->kodu) ? $data->kodu : null;
    }
}

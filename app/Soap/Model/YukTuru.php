<?php

namespace App\Soap\Model;

class YukTuru
{

    public $id;
    public $adi;


    public function __construct($params) {
        $this->id = $params->id;
        $this->adi = $params->adi;
    }
}

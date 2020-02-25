<?php

namespace App\Soap\Model;

class User
{

    public $kimlikNo;


    public function __construct($kimlikNo)
    {
        $this->kimlikNo = $kimlikNo;
    }
}

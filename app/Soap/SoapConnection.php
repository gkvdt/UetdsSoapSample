<?php

namespace App\Soap;

use Exception;
use SoapClient;

class Connection
{

    private static $con = null;

    public static function getConnection($authData)
    {
        if (!self::$con) {

            self::$con = $this->makeConnection($authData);
        }
        return self::$con;
    }


    private function makeConnection($authData)
    {
        try {
            new SoapClient(Config::getApiUri());
            return new SoapClient(Config::getApiUri(), $authData);
        } catch (Exception $e) {
            return $this->makeConnection($authData);
        }
    }
}

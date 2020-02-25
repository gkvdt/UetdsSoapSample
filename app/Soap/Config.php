<?php 

namespace App\Soap;

class Config{

    public static function getApiUri(){
        return env('UETDS_API',"https://servis.turkiye.gov.tr/services/g2g/kdgm/test/uetdsesya?wsdl");
    }

}
<?php

namespace App\Services;
use App\Services\AlquilerHour;
use App\Services\AlquilerDay;
use App\Services\AlquilerWeek;

class AlquilerFactory {
    public static function getAlquiler($tipo) {
 
        if ($tipo==="hour") {
               return new AlquilerHour();
        }
        else{
            if($tipo==="day")
            {
                return new AlquilerDay();
            }
           else {
                return new AlquilerWeek();
           }
        }
 
    }
}

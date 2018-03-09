<?php

namespace App\services;
use App\Services\Alquiler;

class AlquilerWeek extends Alquiler{

    public function getImporteType() {
        return $this->getTime()*5; 
    }
}
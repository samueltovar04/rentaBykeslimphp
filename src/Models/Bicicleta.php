<?php

namespace App\Models;

class Bicicleta {
    private $modelo="";
    private $id=0;
    private $status='A';

    public function __construct($m , $i) {
        $this->modelo = $m;
        $this->id = $i;
    }
    

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
  
    public function toString() {
        return "Bicicleta{" . "modelo=". $this->modelo. ", id=". $this->id. ", status=". $this->status. '}';
    }
    
}
<?php
namespace App\Models;

class Persona {
    private $name="";
    private $dni=0;
    private $sexo='M';
   
    public function __construct($n,$id) {
        $this->name = $n;
        $this->dni = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
  
    public function toString() {
        return "Persona{" . "name=" . $this->name .", dni=" . $this->dni . ", sexo=" . $this->sexo . '}';
    }
    
}

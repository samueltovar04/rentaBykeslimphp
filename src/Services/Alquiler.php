<?php
namespace App\Services;
use App\Models\Persona as Persona;
use App\Models\Bicicleta as Bicicleta;

abstract class Alquiler {
    private $id;
    private $time;
    private $type;
    private $importe;
    private $importeOrigin;
    private $descuento;
    
    private $cliente;
    private $bike;

    public function getDescuento() {
        return $this->descuento;
    }

    public function setDescuento($descuento) {

        $this->descuento =(($descuento/100)*($this->getTime()*5));
    }

    
    public  function aplicaDescuento(){
       $this->setImporte($this->getImporte() - $this->getDescuento());
    }
   
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function setImporte($importe) {
        $this->importe = $importe;
    }

    public function setImporteOrigin($importe) {
        $this->importeOrigin = $importe;
    }
    public function getImporteOrigin() {
       return $this->importeOrigin;
    }
    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente(Persona $cliente) {
        $this->cliente = $cliente;
    }

    public function getBike() {
        return $this->bike;
    }

    public function setBike(Bicicleta $bike) {
        $this->bike = $bike;
    }
    
    public function getId() {
    return $this->id;
    }
    public function setId($id) {
    	$this->id = $id;
    }
    public function getTime() {
    return $this->time;
    }
    public function setTime($time) {
    $this->time = $time;
    }

    public function toString() {
        return "Alquiler{" . "id=" . $this->id . ", time=" . $this->time . ", type=" . $this->type . ", descuento=".$this->getDescuento().", importe=" . $this->importe .", pago sin descuento=".$this->importeOrigin. ", cliente=" . $this->cliente->toString() . ", bike=" . $this->bike->toString() . '}';
    }

 

    abstract function getImporteType();
    
   
    
}
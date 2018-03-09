<?php

namespace App\Dao;

use App\Models\Persona;
use App\Dao\PersonaDao;
use App\Helpers\ArrayList;

class PersonaDaoImpl implements PersonaDao {
  private $employeeList;
  public function __construct() {
    $this->employeeList = new ArrayList();
    $this->employeeList->add(new Persona("Luis", 0));
    $this->employeeList->add(new Persona("Ana", 1));
  }

  public function delete(App\Models\Persona $cliente) {
    $this->employeeList->remove($cliente->getDni());
    echo("Persona: No " . $cliente->getDni()
        . ", deleted from database");
  }
  public function toString(){
    return $this->employeeList->toString();
  }

  public function getAll() {
    foreach ($this->employeeList->all() as  $value) {
     $data[] =[
     "name"=> $value->getName(),
     "dni" => $value->getDni(),
     "sexo"=> $value->getSexo()];
    }
    return $data;
  }

  public function get($rollNo) {
    return $this->employeeList->get($rollNo);
  }

  public function updateCliente(App\Models\Persona $emp) {
    $this->employeeList->get($emp->getDni())->setName($emp->getName());
    echo("Persona:No " . $emp->getDni(). ", updated in the database");
  }

}
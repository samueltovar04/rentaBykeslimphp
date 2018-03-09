<?php

namespace App\Dao;

use App\Models\Bicicleta;
use App\Dao\BicicletaDao;
use App\Helpers\ArrayList;

class BicicletaDaoImpl implements BicicletaDao {
  private $bikeList;
  public function __construct() {
    $this->bikeList = new ArrayList();
    $this->bikeList->add(new Bicicleta("Mounter", 0));
    $this->bikeList->add(new Bicicleta("Classic", 1));
    $this->bikeList->add(new Bicicleta("A", 2));
    $this->bikeList->add(new Bicicleta("B", 3));
  }

  public function delete(App\Models\Bicicleta $bike) {
    $this->bikeList->remove($bike->getId());
    echo("Bicicleta: No " . $bike->getId(). ", deleted from database");
  }

  public function getAll() {
  	foreach ($this->bikeList as $b) {
  		$data[] = $b->toString();
  	}
    return $data;
  }

  public function get($rollNo) {
    return $this->bikeList->get($rollNo);
  }

  public function updateBicicleta(App\Models\Bicicleta $b) {
    $bikeList->get($b->getId())->setModelo($b->getModelo());
    echo("Persona:No " .$b->getId(). ", updated in the database");
  }

}
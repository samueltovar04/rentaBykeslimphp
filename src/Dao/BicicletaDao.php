<?php

namespace App\Dao;
use App\Models\Bicicleta;

interface BicicletaDao {
  public function getAll();

  public function get($id);

  public function updateBicicleta(App\Models\Bicicleta $bike);

  public function delete(App\Models\Bicicleta $bike);
}
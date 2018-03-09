<?php

namespace App\Dao;
use App\Models\Persona;

interface PersonaDao {
  public function getAll();

  public function get($id);

  public function updateCliente(App\Models\Persona $cliente);

  public function delete(App\Models\Persona $cliente);
}
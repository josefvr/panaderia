<?php

include_once 'db.php';

class Panaderia extends DB{

  function obtenerPanaderia(){

    $query = $this->connect()->query('SELECT * FROM panaderia');

    return $query;

  }
  
}

?>
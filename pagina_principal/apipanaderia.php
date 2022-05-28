<?php

  include_once 'panaderia.php';

  class ApiPanaderia{

    function getAll(){

      $panaderia = new Panaderia();
      $panaderias = array();
      $panaderias["items"] = array();

      $res = $panaderia->obtenerPanaderia();

      if($res->rowCount()){

        while($row = $res->fetch(PDO::FETCH_ASSOC)){

          $item = array(

            "imagen" => $row['imagen'],
            "nombre_pan" => $row['nombre_pan'],
            "precio" => $row['precio'],
            "promocion" => $row['promocion']

          );

          array_push($panaderias["items"], $item);

        }

        echo json_encode($panaderias);

      }

      else{

        echo json_encode(array('mensaje' => 'No hay elementos registrados'));

      }

    }

  }

?>
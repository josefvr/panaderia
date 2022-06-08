<?php

  // echo 'Información: '. file_get_contents('php://');
  header("Content-Type: application/json");
  include_once("../clases/class-pan.php");
  switch($_SERVER['REQUEST_METHOD']){
    case 'POST': //guardar
      $_POST = json_decode(file_get_contents('php://input'), true);
      // echo "Guardar el pan, informacion:". json_encode($_POST);
      $pan = new Pan($_POST["nombrePan"],$_POST["precio"],$_POST["promocion"]);
      $pan->guardarPan();
      $resultado["mensaje"] = "Guardar pan, informacion: ". json_encode($_POST);
      echo json_encode($resultado);
    break;

    case 'GET': //obtener
      // echo "Parametro GET: ".$_GET['parametro'];
      // if(isset($_GET['id']))
      //   echo "Retornar el pan con el id: ". $_GET['id'];
      // else
      //   echo "Retormar todos los pans";
      if(isset($_GET['id'])){
        // $resultado["mensaje"] = "Retornar el pan con el id: ". $_GET['id'];
        // echo json_encode($resultado);
        Pan::obtenerPan($_GET['id']);
      }
      else{
        Pan::obtenerPan();
        // $resultado["mensaje"] = "Retormar todos los pans";
        // echo json_encode($resultado);
      }
    break;
    
    case 'PUT': //actualizar
      $_PUT = json_decode(file_get_contents('php://input'), true);
      $pan = new pan($_PUT['nombrePan'],$_PUT['precio'],$_PUT['promocion']);
      $pan->actualizarPan($_GET['id']);
      // echo "Actualizar un pan con el id: " .$_GET['id'];
      // echo ", Información a actualizar: " .json_encode($_PUT);
      $resultado["mensaje"] = "Actualizar pan con el id: " .$_GET['id']. ", Información a actualizar: " .json_encode($_PUT);
      echo json_encode($resultado);
    break;

    case 'DELETE':
      // echo 'Eliminar un pan con el id: ' .$_GET['id'];
      Pan::eliminarPan($_GET['id']);
      $resultado["mensaje"] = "Eliminar pan con el id: " .$_GET['id'];
      echo json_encode($resultado);
    break;
    
  }

?>
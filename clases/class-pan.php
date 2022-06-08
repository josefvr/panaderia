<?php

  class Pan{

    private $nombrePan;
    private $precio;
    private $promocion;

    public function __construct($nombrePan,$precio,$promocion){

      $this->nombrePan=$nombrePan;
      $this->precio=$precio;
      $this->promocion=$promocion;

    }

    public function getNombrePan(){

      return $this->nombrePan();

    }

    public function setNombrePan(){

      $this->nombrePan=$nombrePan;

      return $this;

    }

    public function getPrecio(){

      return $this->precio();

    }

    public function setPrecio(){

      $this->precio=$precio;

      return $this;

    }

    public function getPromocion(){

      return $this->promocion();

    }

    public function setPromocion(){

      $this->promocion=$promocion;

      return $this;

    }

    public function __toString(){

      return $this->nombre . " " . $this->precio . " (" . $this->promocion . ")";

    }
    
    public function guardarPan(){

      $contenidoArchivo = file_get_contents("../data/pan.json");
      $panes = json_decode($contenidoArchivo, true);
      $panes[] = array(
        "nombrePan"=>$this->nombrePan,
        "precio"=>$this->precio,
        "promocion"=>$this->promocion,
      );

      $archivo = fopen("../data/pan.json","w");
      fwrite($archivo, json_encode($panes));
      fclose($archivo);

    }

    public static function obtenerPan($indice){

      $contenidoArchivo = file_get_contents("../data/pan.json");
      $panes = json_decode($contenidoArchivo, true);
      echo json_encode($panes[$indice]);

    }

    public function actualizarPan($indice){

      $contenidoArchivo = file_get_contents("../data/pan.json");
      $panes = json_decode($contenidoArchivo, true);
      // $pan = $panes[$indice];
      $pan = array(
        'nombrePan'=>$this->nombrePan,
        'precio'=>$this->precio,
        'promocion'=>$this->promocion,
      );
      $panes[$indice] = $pan;
      $archivo = fopen('../data/pan.json','w');
      fwrite($archivo, json_encode($panes));
      fclose($archivo);
      // echo json_encode();

    }

    public static function eliminarPan($indice){

      $contenidoArchivo = file_get_contents("../data/pan.json");
      $panes = json_decode($contenidoArchivo, true);
      array_splice($panes, $indice, 1);
      $archivo = fopen('../data/pan.json','w');
      fwrite($archivo, json_encode($panes));
      fclose($archivo);

    }

  }

?>
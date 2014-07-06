<?php

require_once('dbi.result.class.php');
require_once('dbi.class.php');

class modelo {

    private $db;
    public $mensaje;
    public $msgTitle;
    public $msgTipo;
    public $datos = "";
    public $json;
    public $estatus;

    public function __construct() {
        
    }

    public function listar() {
        $this->db = new db;
        $modelos = $this->db->query("SELECT * FROM v_modelos")or die("asd");


        if ($modelos->num_rows == 0) {
            $this->mensaje = "No se encontraron ciudades...";
            $this->msgTipo = "aviso";
            $this->estatus = false;
            $this->json = json_encode($this);
            return $this->estatus;
        }
       
            $this->datos = $modelos->all();
        
        return $this->datos;
        //$this->datos = $modelos->all();
        $this->mensaje = "Se mostraron los ciudades correctamente...";
        $this->msgTipo = "ok";
        $this->estatus = true;
        $this->json = json_encode($this);
        return $this->estatus;
    }

}

 /*$persona =  new modelo;
  $persona->listar();
  foreach ($persona->datos as $datos){
  print_r($datos);
  }*/
//echo "<textarea>".print_r($persona->datos,true)."</textarea>"; 
?>

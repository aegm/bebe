<?php

require_once('dbi.result.class.php');
require_once('dbi.class.php');

class articulos {

    private $db;
    public $mensaje;
    public $msgTitle;
    public $msgTipo;
    public $datos = "";
    public $json;
    public $estatus;

    public function __construct() {
        
    }

    public function listar($codigo, $cat, $subcat, $img, $descrip, $talla, $existencia, $codigoalt, $costo, $preciopub) {
        $this->db = new db;
        $sql = "INSERT INTO articulossss (CodigoArticulo, CodigoEmpresa,CodigoLineas,CodigoUnidad,CodigoProv,CodigoModenas,CodigoImpuestos,
                                            CodigoAlterno,Descripcion,Inventario,Activo,FechaAlta,FechaCambio,PrecioProv,
                                            DescProv,CostoReal,CostoUltimo,PrecioPublico,Existencia,Imagen1,Tipo, Talla,
                                            Color,Modelo,CodigoModelo,TipoArticulo,Marca,CodigoTalla,CodigoMarca,CodigoColor)
                                            VALUES ($codigo,'003',CodigoLineas)";
        $modelos = $this->db->query($sql)or die("asd");


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

/* $persona =  new modelo;
  $persona->listar();
  foreach ($persona->datos as $datos){
  print_r($datos);
  } */
//echo "<textarea>".print_r($persona->datos,true)."</textarea>"; 
?>

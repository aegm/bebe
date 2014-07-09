<?php

require_once('dbi.result.class.php');

//require_once('dbi.class.php');

class articulos {

    private $db;
    public $id;
    public $mensaje;
    public $msgTitle;
    public $msgTipo;
    public $datos = "";
    public $json;
    public $estatus;

    public function __construct() {
        
    }
    
    public function getId($id){
        //return $this->id;
    }
    public function lastInsertId(){
        $this->db = new db;
        $sql = "select MAX(CodigoArticulo + 1 )codarticulo from articulos";
        $consulta  = $this->db->query($sql);
        $datos = $consulta->fetch_assoc();
        return $this->id = $datos['codarticulo'];
    }
    public function setArticulos($codigo, $cat, $subcat, $img, $descrip, $talla, $existencia, $codigoalt, $costo, $preciopub) {
        $this->db = new db;
        

        foreach ($talla as $value) {
            $alterno = $codigoalt[$value];
            $pcosto = $costo[$value];
            $ppub = $preciopub[$value];
            $exis = $existencia[$value];
            die("INSERT INTO articulos (CodigoArticulo, CodigoEmpresa,CodigoLineas,CodigoUnidad,CodigoProv,
                                                 CodigoMonedas,CodigoImpuestos,CodigoAlterno,Descripcion,
                                                 Inventario,Activo,FechaAlta,FechaCambio,PrecioProv,
                                                 DescProv,CostoReal,CostoUltimo,PrecioPublico,Existencia,Imagen1,Tipo,CodigoModelo,
                                                 TipoArticulo,Marca,CodigoTalla,CodigoMarca,CodigoColor)
                                         VALUES ($codigo,'003','1','PZA','1','1','2','$alterno','$descrip','1','1',
                                                 curdate(),curdate(),'$pcosto','0','$pcosto','$pcosto',
                                                 '$ppub','$exis','$img','CP','$cat','Ropa','S/M','23','1','$subcat')")or die("asd");


            if ($this->db->errno) {
                if ($this->db->errno == 1062) {
                    $this->msgTipo = "error";
                    $this->mensaje = "El usuario o la cedula ya existe, por favor elija otro";
                    $this->estatus = false;
                    $this->json = json_encode($this);
                    return $this->estatus;
                } else {
                    if ($this->db->errno == 1146) {
                        $this->mensaje = "esa tabla no existe";
                        $this->msgTipo = "error";
                        $this->estatus = false;
                    } else {
                        $this->mensaje = "No te pudimos registrar en este momento, por favor intenta mas tarde... Disculpe las molestias causadas.";
                        $this->msgTipo = "error";
                        $this->estatus = false;
                    }
                }
            }
        }
    }

}

/* $persona =  new modelo;
  $persona->listar();
  foreach ($persona->datos as $datos){
  print_r($datos);
  } */
//echo "<textarea>".print_r($persona->datos,true)."</textarea>"; 
?>

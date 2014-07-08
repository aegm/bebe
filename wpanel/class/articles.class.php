<?php

class articles {

    private $db;
    public $id;
    public $mensaje;
    public $msgTipo;
    public $msgTitle;
    public $datos = "";
    public $json = "";
    public $estatus;

    public function lastInsertId() {
        $this->db = new db;
        $sql = "SELECT max(CodigoArticulo) + 1  AS id from articulos";
        $datos = $this->db->query($sql);

        $id = $datos->fetch_assoc();
        return $this->id = $id['id'];
    }

    public function setArticles($codigo, $cat, $subCat, $img, $desc, $talla, $existencia, $codAlt, $costo, $precioPub) {

        $this->db = new db;
        $sql = "SELECT max(CodigoArticulo) + 1  AS id from articusslos";
        $datos = $this->db->query($sql);

        if (is_array($talla)) {
            foreach ($talla as $idx) {
                // $sql = "select * from marcas";
                $sql = "INSERT INTO articulossss (CodigoArticulo, CodigoEmpresa,CodigoLineas,CodigoUnidad,CodigoProv,
                                               CodigoModenas,CodigoImpuestos,
                                               CodigoAlterno,Descripcion,Inventario,Activo,FechaAlta,FechaCambio,PrecioProv,
                                               DescProv,CostoReal,CostoUltimo,PrecioPublico,Existencia,Imagen1,Tipo, Talla,
                                               Color,Modelo,CodigoModelo,TipoArticulo,Marca,CodigoTalla,CodigoMarca,CodigoColor)
                                       VALUES ($codigo,'003',CodigoLineas)";


                $resul = $this->db->query($sql)or die($this->db->errno($sql));
            }
            //var_dump($resul);
        }
        $this->db->commit();
        $this->db->query("UNLOCK TABLES");
    }

}

<?php
require '../config.php';
require 'class/modelo.class.php';
require 'class/color.class.php';
require 'class/talla.class.php';
$modelos = new modelo;
$colores = new color;
$tallas = new talla;

$models = $modelos->listar();
$color = $colores->listar();
$talla = $tallas->listar();


//die();
?>
<!DOCTYPE html>
<html lang="Es-es">
    <head>
        <meta charset="UTF-8">
        <!--Boostrap css-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/style.css" type="text/css">
        <title>Administrar Articulos</title>

    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <small>
                            <i class="fa fa-tachometer"></i>
                            Beebee Admin
                        </small>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Usuarios</a></li>
                        <li><a href="#">Marcas</a></li>
                        <li class="active"><a href="#">Articulos</a></li>

                    </ul>
                    <!--ul class="nav nav-sidebar">
                        <li><a href="">Nav item</a></li>
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                        <li><a href="">More navigation</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                    </ul-->
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Articulos</h1>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2><strong>Forma Basica</strong> Articulos</h2>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Empresa</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">Empresa de prueba</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="select">Categoria</label>
                                            <div class="col-md-9">
                                                <?php
                                                ?>
                                                <select id="slt_cat" name="slt_cat" class="form-control" size="1">
                                                    <option value="0">Selecciona</option>
                                                    <?php
                                                    foreach ($models as $campos => $values) {
                                                        ?>
                                                        <option required='required' value="<?php echo $values['CodigoModelo']; ?>"><?php echo $values['Descripcion']; ?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="select">Sub-Categoria</label>
                                            <div class="col-md-9">
                                                <?php
                                                ?>
                                                <select id="slt_sub_cat" name="slt_sub_cat" class="form-control" size="1">
                                                    <option value="0">Selecciona</option>
                                                    <?php
                                                    foreach ($color as $campos => $values) {
                                                        ?>
                                                        <option required='required' value="<?php echo $values['CodigoColor']; ?>"><?php echo $values['Descripcion']; ?></option>
                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label class="col-md-3 control-label" for="text-input">Costo</label>
                                            <div class="col-md-9">
                                                <input type="text" id="text-input" required="required" id="txt_costo" name="txt_costo" class="form-control" placeholder="00">
                                                <span class="fa fa-asterisk form-control-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="select">Talla</label>
                                            <div class="col-md-9">
                                                <?php
                                                ?>
                                                <select id="slt_talla" name="slt_talla" class="form-control" size="1">
                                                    <option value="0">Selecciona</option>
                                                    <?php
                                                    foreach ($talla as $campos => $values) {
                                                        ?>
                                                        <option required='required' value="<?php
                                                        echo $values['CodigoTalla'] . '/' . $values['Descripcion'];
                                                        ;
                                                        ?>"><?php echo $values['Descripcion']; ?></option>
                                                                <?php
                                                            }
                                                            ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="textarea-input">Descripcion</label>
                                            <div class="col-md-9">
                                                <textarea id="text_descripcion" name="text_descripcion" rows="9" class="form-control" placeholder="Content.." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 194px;"></textarea>
                                            </div>
                                        </div>
                                        <div id="inv" class="row">

                                        </div>
                                    </form>
                                </div>

                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Guardar</button>
                                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Limpiar</button>
                                </div>	
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php
// put your code here
        ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--Boostrap Js-->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $(function() {
                    var cat = $('#slt_cat'),
                            subCat = $('#slt_sub_cat'),
                            costo = $('#txt_costo'),
                            talla = $('#slt_talla'),
                            existencia = $('#txt_existencia'),
                            descripcion = $('#text_descripcion'),
                            min, max, n, bValid;
                    function listarInventario(array) {
                        bValid = true;
                        var corrida = array,
                                cantidad = corrida.split("-");
                        var min = parseInt(cantidad[0]);
                        var max = parseInt(cantidad[1]);
                        for (n = min; n <= max; n++) {
                            verificaTalla(n);
                            if (bValid) {
                                var html = '<div id="talla" title="' + n + '" class="col-md-12">';
                                html += '<div class="form-group col-md-2">'
                                html += '<input class="form-control" value="' + n + '">';
                                html += '</div>';
                                html += '<div class="form-group col-md-2">'
                                html += '<input class="form-control" placeholder="Existencia" value="">';
                                html += '</div>';
                                html += '<div class="form-group col-md-3">'
                                html += '<input class="form-control" placeholder="Codigo Alterno" value="">';
                                html += '</div>';
                                html += '<div class="form-group col-md-2">'
                                html += '<input class="form-control" placeholder="Costo" value="">';
                                html += '</div>';
                                html += '<div class="form-group col-md-3">'
                                html += '<input class="form-control" placeholder="Precio al Publico" value="">';
                                html += '</div>';
                                html += '</div>';
                                $('#inv').append(html);
                            } else {
                                alert("disculpe esta talla ya fue agrega en la corrida " + array);
                                return false;
                            }

                        }
                    }

                    function verificaTalla(n) {
                        $("#inv div[id *= 'talla']").each(function(index, element) {
                            if ($(element).text == "") {
                                bValid = true;
                            } else {
                                if ($(element).attr('title') == n) {
                                    bValid = false;
                                }
                            }
                        });

                    }

                    $('#slt_talla').on('change', function(event) {
                        event.preventDefault();
                        var array = talla.val().split("/");
                        var htmlString = $(this).html();
                        //Le Pasamos el orden de la corrida de tallas
                        listarInventario(array[1]);
                    });
                });
            })
        </script>    
    </body>
</html>

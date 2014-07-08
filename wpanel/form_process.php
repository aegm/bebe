<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "<textarea>".print_r($_REQUEST['txt_talla'])."</textarea>"; 
require '../config.php';
require_once 'class/dbi.class.php';
require_once 'class/articles.class.php';
switch ($_POST['form']){
    case 'agregar-articulo':
        $articles = new articles;
        $articles->setArticles($_POST['txt_codigo'],$_POST['slt_cat'],$_POST['slt_sub_cat'],$_POST['txt_img'],$_POST['text_descripcion'],$_POST['txt_talla'],$_POST['txt_existencia'],$_POST['txt_cod_alterno'],$_POST['txt_costo'],$_POST['txt_precio_pub']);
     
    break;
}



<?php if (!isset($_SESSION)) {
  session_start();
}?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexionzapatos = "profitsportclub.com";
$database_conexionzapatos = "zapatos";
$username_conexionzapatos = "root";
$password_conexionzapatos = "alfonso1";
$conexionzapatos = mysql_pconnect($hostname_conexionzapatos, $username_conexionzapatos, $password_conexionzapatos) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
if (is_file("includes/funciones.php")){
	include("includes/funciones.php");
}
else
{
	include("../includes/funciones.php");
	}
?>
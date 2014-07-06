<?php
/****************************************** CONFIGURACION DEL SISTEMA *******************************************/

define('PORCENTAJE_APROBACION','70');
define('GRUPO_SUPERADMIN','1');
define('GRUPO_ADMIN','2');
define('GRUPO_ADMIN2','3');
define('GRUPO_AFILIADOR','4');
define('GRUPO_PROFESOR','5');
define('GRUPO_ESTUDIANTE','6');
define('FECHA_CORTE','08/01');

/****************************************** CONFIGURACION GENERAL DEL SITIO *******************************************/
/** cambia el root del apache. **/
define('ROOT_DIR',dirname(__FILE__).'/');
define('ROOT_URL','/');

/** activa los tipos de erroes del servidor **/
ini_set('error_report', E_ALL);
error_reporting(E_ALL);

/** SMTP **/
define("SMTP","localhost");

/** determina la zona horaria del servidor web para el manejo de fecha y hora **/
ini_set("date.timezone", "America/Caracas");

/** Nombre del sistema **/
define("NOMBRE","Washington School");

/** Titulo que antepone el titulo en todas las paginas **/
define("PRE_TITULO","Washington School - ");

/** variable de session **/
//define("SISTEMA","wc");

/** Activa o deactiva la consola para programar. **/
define('CONSOLA', true);

/** Activa o deactiva el mantenimiento de la pagina. **/
define('MANTENIMIENTO', false);

/** DNS fuera del mantenimiento, cuando el mantenimiento esta activado. **/
define('DNS_MANTENIMIENTO', 'taurus.sytes.net');

/** DNS del lugar de desarrollo, activa opciones para el desarrollo. **/
define('DNS_DESARROLLO', 'taurus.sytes.net');

/** DNS del lugar de desarrollo, Para desactivar indexaccion de los buscadores. **/
define('DNS_NO_INDEX', 'taurus.sytes.net');

/** Activa el Google Analytics **/
define('GOOGLE_ANALYTICS', true);

/*********************************************** MYSQL BASE DE DATOS ***************************************************/

/** El nombre de tu base de datos **/
define("DB_NAME","fashion");

/** Tu nombre de usuario de MySQL **/
define('DB_USER', 'root');

/** Tu contraseÃ±a de MySQL **/
define('DB_PASS', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) **/
define('DB_HOST', 'localhost');

/** Puerto de conexiÃ³n del servidor Mysql. **/
define("DB_PORT","3306");

/** CodificaciÃ³n de caracteres para la base de datos. **/
define('DB_CHARSET', 'utf8');

/****************************************************** URLS **********************************************************/

/** libreria de fechas de jquery **/
define('URL_UI_FECHAS', "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/i18n/jquery.ui.datepicker-es.js");
?>
<?php
/**
* Este archivo es el encargado de conectar la página web con la base de datos.
*/

define('BD_HOST','localhost');
define('BD_USR','informatica');
define('BD_PASS','Informatica2021');
define('BD_NAME','sindicatura');

$connect = new mysqli(BD_HOST, BD_USR, BD_PASS, BD_NAME);
if(!$connect){
	echo 'Error: No se pudo conectar a MySQL.'.PHP_EOL;
	echo 'errno de depuración: '.mysqli_connect_errno().PHP_EOL;
	echo 'error de depuración: '.mysqli_connect_error().PHP_EOL;
	exit;
}
mysqli_query($connect,'SET NAMES "utf8"');

// VARIABLES PARA PAGINADOR.
$pag = 1;
$noReg = 25;
?>

<?php
require 'connect.php';

session_start();

if (!isset($_SESSION['area'])) { $area = null; }
else { $area = $_SESSION['area']; }

// Separa la URI en un arreglo utilizando las diagonales (/) como separador.
$aux = substr($_SERVER['REQUEST_URI'], strlen('/'));
if( substr($aux, -1) == '/'){ $aux = substr($aux, 0, -1); }
$url_array = explode('/', $aux);

// VALORES A UTILIZAR.
if (isset($url_array[0])) { $parametro_1 = $url_array[0]; }
else { $parametro_1 = null; }

if (isset($url_array[1])) { $parametro_2 = $url_array[1]; }
else { $parametro_2 = null; }

if (isset($url_array[2])) { $parametro_3 = $url_array[2]; }
else { $parametro_3 = null; }

if (isset($url_array[3])) { $parametro_4 = $url_array[3]; }
else { $parametro_4 = null; }

if (isset($url_array[4])) { $parametro_5 = $url_array[4]; }
else { $parametro_5 = null; }

if (isset($url_array[5])) { $parametro_6 = $url_array[5]; }
else { $parametro_6 = null; }

/* URI DE LA SECCIÓN. */
$seccion = $_SERVER['REQUEST_URI'];

switch ($area) {
  case 'Catastro':
    switch ($seccion) {
      case '/':
        include_once 'inicio_catastro.php';
    		break;

      case '/levantar_ticket':
        include_once 'levantar_ticket.php';
        break;

      case '/logout':
        include_once 'logout.php';
        break;

    	default:
        include_once '404.php';
    		break;
    }
    break;

  case 'Informática':
		switch ($seccion) {
      case '/':
        include_once 'inicio_informatica.php';
				break;

      case '/revisar_tickets':
        include_once 'revisar_tickets.php';
        break;

      case '/logout':
        include_once 'logout.php';
        break;

			default:
        include_once '404.php';
				break;
		}
    break;


  default:
    include_once 'login.php';
    break;
}
?>

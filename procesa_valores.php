<?php
require_once('Privnote.php');    
$obj = new Privnote();

$valor = $_POST["valores"];        // Recibimos valores de textarea

$valore = chop($valor);    // Elimina saltos de linea y espacio, pero solo al final de la cadena

$valores = nl2br($valore);         // Agregamos los saltos de linea <br />

$array_datos_ingreso = explode("<br />", $valores);    // Creamos array con los datos recibidos

//las siguientes 2 linea son para experimentar y hay que eliminar
$string= "<br />";
echo implode($string, $array_datos_ingreso). "<br />";


//saco el numero de elementos
$longitud = count($array_datos_ingreso);

//Recorro todos los elementos

$numero = 1;
$link_Privnote = "";
$array_datos_salida = array();
for($i=0; $i<$longitud; $i++)
      {
      //saco cada fila y la convierto en un enlace privnote
      $numero += $i;    //inicializo con 1
      echo "cuenta{$numero}: ". $obj->note($array_datos_ingreso[$i]);
      //$array_datos_salida[$i]= explode("<br />", $link_Privnote); 
	  //echo $array_datos[$i];
	  echo "<br>";
      }

/*$longitud_Arreglo_Salida= count($array_datos_salida);
//Recorro todos los elementos del rreglo de salida
for($j=1; $j<$longitud_Arreglo_Salida; $j++)
      {
      //saco el valor de cada elemento
	  echo $array_datos_salida[$j];
	  echo "<br>";
      }
*/





?>
<?php
/*1. Crea un archivo PHP que haga lo siguiente:
○ Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().
○ Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).
○ Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.
○ Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.
○ Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.*/
$nombre="Juca";
$apellido1="dorado";
$apellido2="lopez";
$edad=21;
$altura=1.66;
$soltero = true;

var_dump($nombre);
echo"</br></br>";
echo"</br></br>";

var_dump($edad);
echo"</br></br>";

var_dump($altura);
echo"</br></br>";
echo"</br></br>";

$aPersona=["nombre"=>"JUCA ","apellidos"=>"DoradoLopez ","edad"=>21]; 
var_dump($aPersona);
echo"</br></br>";
echo"</br></br>";

define('NOMBRE_CURSO', "Programacion PHP");
echo NOMBRE_CURSO;
echo"</br></br>";
echo"</br></br>";

$tipo= Null;
if (is_null($tipo)){
    echo " suputamadre";
}
echo"</br></br>";
$numero1 =4;
$numero2 =6;

$resultado= $numero1+$numero2;
echo $resultado;
echo"</br></br>";


echo"</br></br>";


echo"</br></br>";
?>
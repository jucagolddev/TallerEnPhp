<?php
/*1. Crea un archivo PHP que haga lo siguiente:
○ Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump()..*/

$nombre="Juan Carlos";
$apellido1="Dorado";
$apellido2="Lopez";
$cuidad="Utrera"
$edad=21;
$altura=1.66;
$soltero = true;

var_dump($nombre, $apellido1, $apellido2);
echo"</br></br>";
echo"</br></br>";

var_dump($edad);
echo"</br></br>";
echo"</br></br>";

var_dump($altura);
echo"</br></br>";
echo"</br></br>";

var_dump($ciudad);
echo"</br></br>";
echo"</br></br>";

var_dump($edad);
echo"</br></br>";
echo"</br></br>";

var_dump($soltero);
echo"</br></br>";
echo"</br></br>";

/*○ Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).*/
$aPersona=["nombre"=>"JUCA ","apellidos"=>"DoradoLopez ","edad"=>21, "ciudad"=>"Utrera"]; 
var_dump($aPersona);
echo"</br></br>";
echo"</br></br>";

/*○ Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.*/
define('NOMBRE_CURSO', "Programacion PHP");
echo NOMBRE_CURSO;
echo"</br></br>";
echo"</br></br>";

/*○ Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.*/
function sumarElementos(array $numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}
$miArray = [5, 10, 2, 8.5, 3];
$resultado = sumarElementos($miArray);

echo "El array es: [" . implode(", ", $miArray) . "]\n";
echo "La suma de sus elementos es: " . $resultado . "\n";

/*○ Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.*/
$tipo= Null;
if (is_null($tipo)){
    echo " suputamadre";
}
?>


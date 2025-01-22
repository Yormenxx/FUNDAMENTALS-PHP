<?php 
$programmingArray  =["python", "javascript","java"];

echo $programmingArray[0];
echo $programmingArray[1];
echo $programmingArray[2];
//isset nos ayuda a identifcar una variable que no sea nulll
var_dump(isset($programmingArray[1]));


echo "<pre>";
print_r ($programmingArray) ;
echo "</pre>";


echo count($programmingArray);


//agregar elemento
$programmingArray[] = "c++";


echo "<pre>";
print_r ($programmingArray) ;
echo "</pre>";

//agregar elementos con metodos
array_push($programmingArray,"go" ,"c");


echo "<pre>";
print_r ($programmingArray) ;
echo "</pre>";


$pythonVersion = [

    "python1" => "v1.1",
    "python2" => "v1.2"


];


echo "<pre>";
print_r ($pythonVersion);
echo "</pre>";



$persona = [
    "nombre" => "juan",
    "apellido" => "guti",
    "edad" => 22
];
//ingresar a los valores

echo "Nombre: " . $persona["nombre"] . "</br>";
echo "Apellido: " . $persona["apellido"] . "</br>";
echo "Edad: " . $persona["edad"] . "</br>" ;

//modificar valor

$persona["edad"] = 33;
echo "Edad: " . $persona["edad"] . "</br>" ;


$persona["telefono"] = "555-1234";
echo "Teléfono: " . $persona["telefono"] . "<br>";


//array indexado multidimensional
$array_indexado = array(
    array(1, 2, 3),
    array(4, 5, 6), 
    array(7, 8, 9)  
);


echo "<pre>";
print_r($array_indexado);
echo "</pre>";













?>
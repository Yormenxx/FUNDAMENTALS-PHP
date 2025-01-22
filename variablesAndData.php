

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
<h1>Hello world</h1>
<?php
    echo "hello world \n";

    $name  = "juan";
    $age  =10;

    echo "Hola" . $name . " tu edad es: " . $age;

    $price  = 19.99;
    $is_logged_in  =true;
    $data  = null;

?>
    
</body>
</html>

<?php

    echo "Hello" . "</br>";
    print("hallo with print  </br>");

    //Varaible por valor
    // $z = 1;
    // $y=$z;
    // $z=4;
    // echo $y

    //Variable por referencia
    $z = 1;
    $y=&$z;
    $z=4;
    echo $y . "</br>";

    $name2 ="Ana";
    echo "Hello {$name2}" ."</br>";

    //CONSTANTES
    //Por convencion se usa el nombre de la constante en mayusculas
    define("STATUS","paid");
    echo STATUS ."</br>";

    const STATUS2 ="no paid";
    echo STATUS2 ."</br>";
    //tambien existen constantes predefinidas
    echo PHP_OS ."</br>";
    echo PHP_VERSION ."</br>";


    //TIPOS ESCALARES
    #bool => tru / false
    $completed  =true;
    #int => 1,2,3,4 no decimal
    $score  =10;
    #float => 12.5 12.4
    $price = 13.66;
    #String =>  "Hello world"
    $greeting = "hello there" ;
    //gettype return el tipo de dato
    echo gettype($completed) ."</br>";
    //var_dump devuelve informacion de la variable
    echo var_dump($completed) ."</br>";
    echo var_dump($price) ."</br>";


    //Array 
    $companies = [1,2,3,4,5];
    //con echo no funciona por que php lo trata como un array
    print_r($companies) ;

    /*
        EN TIEMPO DE EJECUCION PHP INFIERE EL TIPO DE DATOS , SIN EMBARGO SE PUEDE
        EQUIVOCAR PARA SER MÁS ESTRICTOS USAMOS 
        declare(strict_types=1)
    */





?>
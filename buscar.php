<?php

//incluye el archivo
include("conexion.php");

//Por cuestiones de seguridad si convienen saber como se envian los parametros..
/* 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    #$serie = $_POST["serie"];
    $serie = $_GET["serie"];
}else{
    $serie = "no se paso por GET";
}
*/

//Enmascara tanto GET como POST
$serie = $_REQUEST["serie"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id="encabezado">
        <h1>Tipos de Billetes</h1>
        <hr>
    </header>
    <main id="contenido">
        
    </main>
</body>
</html>




<?php
$serie_anterior = $_POST["serie_anterior"];
$valor_anterior = $_POST["valor_anterior"];

$serie = $_POST["serie"];
$valor = $_POST["valor"];
$cantidad = $_POST["cantidad"];

//echo $serie_anterior ." ". $valor_anterior ." ". $serie ." ". $valor . " " . $cantidad;
require("conexion.php");

$conexion = new mysqli($host, $usuario, $contrasena, $bd);
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: ". $conexion->connect_error);
}

$sql = "UPDATE billete
        SET
            serie='$serie',
            valor=$valor,
            cantidad=$cantidad
        WHERE
            serie='$serie_anterior' AND
            valor=$valor_anterior";

//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion de modificacion</title>
</head>
<body>
    <header id="encabezado">
        <h1>Confirmacion de modificacion</h1>
    </header>
    <main id="contenido">

    <?php
    $result = $conexion->query($sql);
    if($result === TRUE){
        ?>

        <p>Se modifico con exito el registro</p>
        <p><a href="modificar.php">Ver registros de billetes</a></p>

        <?php
    }else{
        ?>

<p>No se pudo modificar el registro seleccionado</p>
        <?php
    }
    ?>

    </main>
    
</body>
</html>
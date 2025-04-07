<?php
require("conexion.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $serie = $_POST["serie"];
    $valor = $_POST["valor"];
    $cantidad = $_POST["cantidad"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de billetes</title>
</head>
<body>
    <header id="encabezado">
        <h1>Alta de billetes</h1>
        <hr>
        <p>
        <?php
           //echo "Serie=".$serie." Valor=".$valor." Cantidad=".$cantidad;

        $conexion = new mysqli($host,$usuario,$contrasena,$bd);

        if($conexion->connect_error){
            die("Error al conectar la base de datos". $conexion->connect_error);
        }

        $consulta = "INSERT INTO billete VALUES ('$serie', $valor, $cantidad);";
        //echo $consulta;
        $resultado = $conexion->query($consulta);
        //echo "".$resultado;

        if($resultado === TRUE) {
            //$resultado = $conexion->affected_rows;
            //echo "Se insertaron ".$resultado." registros";
            echo "Registro dado de alta";
        }
        ?>

        </p>
    </header>
</body>
</html>
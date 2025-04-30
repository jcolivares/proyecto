<?php
$serie = $_POST["serie"];
$valor = $_POST["valor"];

require("conexion.php");

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {
    die("Error en la conexion". $conexion->connect_error);
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billete eliminado</title>
</head>
<body>
    <header id="encabezado">
        <h1>Billete eliminado con exito</h1>
    </header>
    <main id="contenido">
        <h1>Billete: <?=$serie;?> Valor: <?=$valor;?></h1>
        <?php
        $sql = "DELETE FROM billete
                WHERE serie='$serie' AND
                    valor=$valor"; 
                    
        //echo $sql
        $result = $conexion->query($sql);
        if($result === "FALSE"){
            echo "<p>No se pudo borrar con exito</p>";
        }
        ?>
    </main>
</body>
</html>
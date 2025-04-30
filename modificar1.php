<?php
$serie_anterior = $_GET["serie"];
$valor_anterior = $_GET["valor"];

require("conexion.php");

$conexion = new mysqli($host, $usuario, $contrasena, $bd);
if ($conexion->connect_error) {
    die("Error al conectarse a la base de datos". $conexion->connect_error);
}

$sql = "SELECT 
            * 
        FROM
            billete
        WHERE
            serie='$serie_anterior' AND
            valor=$valor_anterior";    

//echo $sql;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion de Billetes</title>
</head>
<body>
    <header id="encabezado">
        <h1>Modificacion de billetes</h1>
    </header>
    <main id="contenido">
        <h2>Valores del billete</h2>
        <?php
//echo "serie=". $serie ." valor=". $valor ."";
$result = $conexion->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
?>

<form action="modificar2.php" method="post">
    <input type="hidden" name="serie_anterior" value="<?=$serie_anterior;?>">
    <input type="hidden" name="valor_anterior" value="<?=$valor_anterior;?>">
    <label for="serie">Serie del billete:</label>
    <input type="text" name="serie" value="<?=$row["serie"];?>">
    <br>
    <label for="valor">Valor: </label>
    <input type="number" name="valor" value="<?=$row["valor"];?>" min="50" max="1000">
    <br>
    <label for="cantidad">Cantidad: </label>
    <input type="number" name="cantidad" value="<?=$row["cantidad"];?>" min="0">
    <br>
    <button type="submit">Modificar</button>
</form>

<?php
}else{    
        ?>
        <p>No hay registros de billetes a modificar</p>
<?php
}//else
?>
    </main>
    
</body>
</html>
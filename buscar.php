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
    <title>Tipos de billetes</title>
</head>
<body>
    <header id="encabezado">
        <h1>Tipos de Billetes</h1>
        <hr>
    </header>
    <main id="contenido">
        <?php
        //Creamos la conexion a la base de datos
        $conexion = mysqli_connect($host,$usuario, $contrasena,  $bd);
        
        if($conexion->connect_error){
            die("Error en la conexion a la base de datos". $conexion->connect_error);
        }

        //echo "Conexion exitoso";
        $query = "SELECT * FROM billete WHERE valor=".$serie;
        $resultado = $conexion->query($query);

        //echo "Numero de filas que cumplen:".$resultado->num_rows;
        if($resultado->num_rows > 0){
            //echo "Consulta exitosa";
            ?>

            <table>
                <thead>
                    <th>Serie</th>
                    <th>Valor</th>
                    <th>Cantidad</th>
                </thead>
            <?php
            while($row = $resultado->fetch_assoc()){
                
            ?>

<tr>
                <td><?=$row["serie"];?></td>
                <td><?=$row["valor"];?></td>
                <td><?=$row["cantidad"];?></td>
</tr>
            
            <?php
            }//while
            ?>
</table>
            <?php
        }else{
            echo "No hay resultados de la consultado";
        }
        ?>
    </main>
</body>
</html>




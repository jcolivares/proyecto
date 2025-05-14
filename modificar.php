<?php
require("conexion.php");

$conexion = new mysqli($host, $usuario, $contrasena, $bd);
if($conexion->connect_error) {
    die("Error al conectar a la base de datos". $conexion->connect_error); 
}

$sql = "SELECT 
            * 
        FROM 
            billete
        ORDER BY serie, valor ASC
";
//echo $sql;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header id="encabezado">
        <h1>Modificacion de billetes</h1>

        <?php
        //echo $sql;
        $result = $conexion->query($sql);
    
        if($result->num_rows == 0){
        ?>
        
        <p>No existen billetes!!!</p>
       
       <?php
        }else{

        ?>
        <p>Selecciona el billete a modificar:</p>
    </header>
    <table>
        <thead>
        <tr>
                <th>Serie</th>
                <th>Valor</th>
                <th>Cantidad</th>
            </tr>
        </thead>

    <?php
    while($row = $result->fetch_assoc()){
        $serie = $row["serie"];
        $valor = $row["valor"];
        $cantidad = $row["cantidad"];
    ?>    
        
        <tr>    
            <td><a href="modificar1.php?serie=<?=$serie;?>&valor=<?=$valor;?>"><?=$serie;?></a></td>
            <td><a href="modificar1.php?serie=<?=$serie;?>&valor=<?=$valor;?>"><?=$valor;?></a></td>
            <td><a href="modificar1.php?serie=<?=$serie;?>&valor=<?=$valor;?>"><?=$cantidad;?></a></td>
        </tr>
        
            
            <?php
            }//while
    ?>


            
        </tbody>
    </table>

    <?php
    }//else

    //cerrar conexión
    $conexion->close();
    ?>
    
</body>
</html>
<?php
$serie = $_POST["serie"];

if(!isset($serie) || $serie=="")
    die("No se paso valor de serie de billete a eliminar");

if(strlen($serie)!=2)
    die("La cadena no tiene la longitud dada");

require("conexion.php");

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if($conexion->connect_error){
    die("Error al conectar la base de datos:". $conexion->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de eliminacion de PHP</title>
    <script>
        function validar(){
            return window.confirm("Deseas eliminar este registro?")
        }
    </script>
</head>
<body>
    <header id="encabezado">
        <h1>Eliminar billetes</h1>
        <?php
        $sql = "SELECT 
                    * 
                FROM 
                    billete 
                where 
                    serie='$serie'
                ORDER BY serie, valor";
        //echo $sql;
        
        $result = $conexion->query($sql);
        if($result->num_rows == 0){
            ?>
            <h2>No existe billetes a eliminar con la serie <?=$serie;?></h2>
        <?php
        }else{
        ?>
        <form action="eliminar2.php" method="post" onsubmit="return validar();">
            <input type="hidden" name="serie" value="<?=$serie;?>">
            <table>
                <thead>
                    <tr>
                        <th>Serie</th>
                        <th>Valor</th>
                        <th>Catidad</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
        <?php
        while($row = $result->fetch_assoc()){ 
        ?>
        <td><?=$row["serie"];?></td>
        <td><?=$row["valor"];?></td>
        <td><?=$row["cantidad"];?></td>
        <td><input type="radio" name="valor" id="" value="<?=$row["valor"];?>"></td>
        </tr>
        <?php
        
        }//while
        ?>
        </tbody>
        </table>
        <input type="submit" value="Estas realemnte seguro que deseas eliminar este billete?">
    </form>
        <?php
    }//else   
    
    //Cerrar conexión
    $conexion->close();
        ?>
        
                
    </header>
</body>
</html>
<?php
session_start();

if(isset($_SESSION['logeado'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="alta.php">Dar de alta billetes</a></p>

    <?php
    if($_SESSION['logeado']==1){
    ?>

    <p><a href="eliminar.php">Eliminar billetes</a></p>
    <p><a href="modificar.php">Modioficar billetes</a></p>

<?php
}
    ?>
    
    <p>La fecha del sistema:
        <?php
        echo date("Y-m-d h:m:s");
        ?>
    </p>
    <p><a href="cerrar.php">Cerrar sesion</a></p>
    <hr>
   <!--<form action="buscar.php" method="get">--> 
    <form action="buscar.php" method="post">  
        <label for="serie">No. de serie</label>
        <input type="text" name="serie" id="serie" placeholder="Coloca el seriado de tu billete">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
<?php
}else{
    //redirrecionar al inicio
    header("Location: index.php?error=2");
}
?>
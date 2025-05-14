<?php
session_start();

$u = $_POST["usuario"];
$contra = $_POST["contra"];

//$usuario = $_GET["usuario"];
//$contra = $_GET["contra"];

require("conexion.php");
$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if($conexion->connect_error){
    die("Error al conectarse a la base de datos");
}

$sql = "SELECT * FROM usuarios WHERE nombre='$u' AND contra=md5('$contra')";
//die($sql);

$resultado = $conexion->query($sql);

if($resultado->num_rows==1){
    $fila = $resultado->fetch_assoc();
    $_SESSION["logeado"]=$fila['rol'];

    header("Location: opciones.php");
}else{
    //No coinciden los usuarios y passowrds
    $error=1;
    header("Location: index.php?error=".$error);
}

//cerrar la conexion
$conexion->close();
?>
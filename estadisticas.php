<?php
$tipo = $_GET["tipo"];

if(!isset($tipo)) {
    $tipo = "todos";
} 

if ($tipo!="uno"){
    $tipo="todos";
}

require("conexion.php");
$conexion = new mysqli($host, $usuario, $contrasena, $bd);
$mensaje = "";


if($tipo=="todos"){
    //Consulta a la base de datos para todos
    $sql = "SELECT * FROM temperaturas";

    $resultado = $conexion->query($sql);

    //testear resultado
    $cantidad = $resultado->num_rows;
    if($cantidad==0){
        $mensaje = '{"error": "no hay datos"}';
    }else{
        $mensaje = '{ "temperaturas": [';
        for($i=0; $i<$cantidad; $i++){
            $fila=$resultado->fetch_assoc();
            $mensaje.='{"id":'. $fila['id']. ', "ciudad": "' . $fila['ciudad']. '", ';
            $mensaje.='"mes": '. $fila['mes']. ', "temperatura":'. $fila['temperatura']. '}';

            if($i!= ($cantidad-1)){
                $mensaje.=",";
            }
        }

        $mensaje.="]}";
    }
}else{
    //regresar en construcción
    $mensaje = '{"error": "En construcción..."}';
}

//imprimir resultado
echo $mensaje;

//cerrar conexion
$conexion->close();
?>
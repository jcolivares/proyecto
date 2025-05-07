<?php
session_start();

$id = session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos Sistema X</title>
</head>
<body>
    <header id="encabezado">
        <h1>Bienvenidos Sistemas X</h1>
        <p>Sesion:<?=$id;?></p>
        <hr>
    </header>
    <main id="contenido">
        <?php
        if(!isset($_SESSION["logeado"])){
        ?>
        <form action="acceso.php" id="login" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" required>
            <br>
            <label for="contra">Password: </label>
            <input type="password" name="contra" id="">
            <br>
            <button type="submit">Entrar</button>
        </form>

        <?php
}
        ?>
    </main>
</body>
</html>
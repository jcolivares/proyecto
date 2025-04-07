<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La fecha del sistema:
        <?php
        echo date("Y-m-d h:m:s");
        ?>
    </p>
    <hr>
   <!--<form action="buscar.php" method="get">--> 
    <form action="buscar.php" method="post">  
        <label for="serie">No. de serie</label>
        <input type="text" name="serie" id="serie" placeholder="Coloca el seriado de tu billete">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
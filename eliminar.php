<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar billetes</title>
</head>
<body>
    <header>
        <h1>Eliminar billetes</h1>
    </header>
    <main>
        <form action="eliminar1.php" method="post">
            <label for="serie">Serie del billete:</label>
            <input type="text" name="serie" placeholder="Coloca aqui las dos letras del numero de serie" size="2" maxlength="2" minlength="2" required>
            <br>
            <input type="submit" value="Eliminar">
        </form>
    </main>
</body>
</html>
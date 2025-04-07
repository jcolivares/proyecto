<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Billetes</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <header id="encabezado">
        <h1>Registro de Billetes</h1>
    </header>
    <main id="contenido">
        <form action="registrar.php" method="post">
            <div class="form-floating">
                <input type="text" name="serie" class="form-control">
                <label for="serie">Serie</label>
            </div>
            <div class="form-floating">
                <input type="number" name="valor">
                <label for="valor">Valor</label>
            </div>
            <div class="form-floating">
                <input type="number" name="cantidad">
                <label for="cantidad">Cantidad</label>
            </div>
            <div class="form-floatting">
                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                <p class="btn btn-success">Presioname</p>
                <button type="reset" class="btn btn-danger btn-sm">Limpiar</button>
            </div>
        </form>
    </main>
</body>
</html>
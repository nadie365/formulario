<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<form action="formulario.php" method="POST" class="" enctype="multipart/form-data">
    <div class="row text-center">
    
        <div class="col-6">
            <label for="nombre" class="form-floating">Nombre:</label>
            <input type="text" name="nombre" id="nombre"  class="" >
        </div>
    
        <div class="col-6">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="" >
        </div>

        <div class="col-6">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" class="" >
        </div>
    
        <div class="col-6">
            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date" name="fecha" id="fecha" class="" >
        </div>
    
        <div class="col-6">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" class="" >
        </div>
    
        <div class="col-6">
            <label for="trabajo">Trabajo:</label>
            <input type="text" name="trabajo" id="trabajo" class="" >
        </div>
    
        <div class="col-6">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" class="" >
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Enviar</button>            
        </div>

        <div>
            <input type="file" name="imagen" id="imagen">
        </div>
    </div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
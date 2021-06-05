<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["titulo"];?></title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <h2><?php echo $data ["titulo"];?></h2>
    <form action="" id="nuevo" name="nuevo" method="POST" action="" autocomplete="off">
        <div class="space"> 
            <label for="placa">Placa: <input type="text" id="placa" name="placa"></label>
        </div>
        <div class="space"> 
            <label for="marca">Marca: <input type="text" id="marca" name="marca"></label>
        </div>
        <div class="space"> 
            <label for="modelo">Modelo: <input type="text" id="modelo" name="modelo"></label>
        </div>
        <div class="space"> 
            <label for="anio">Año: <input type="text" id="anio" name="anio"></label>
        </div>
        <div class="space"> 
            <label for="color">Color: <input type="text" id="color" name="color"></label>
        </div>
        <input type="submit" value="Guardar" class="add-button" name="guardad" id="guardar">
    </form>
</body>
</html>
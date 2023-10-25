<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        
        <h2>Bienvenido</h2>
        
        <p>Inicia el registro de ventas</p>

        <div class="input-container" >
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Producto">
            <img img class="input-icon" src="img/paquete.png" alt="Producto">
        </div>
       
        <div class="input-wrapper">
            <input type="number" name="precio" placeholder="Precio">
            <img img class="input-icon" src="img/billete-de-banco.png" alt="Precio">
        </div>
       
        <div class="input-wrapper">
            <input type="number" name="cantidad" placeholder="Cantidad Vendida">
            <img img class="input-icon" src="img/cajas.png" alt="Cantidad Vendida">
        </div>
       
        <div class="input-wrapper">
            <input type="number" name="recibido" placeholder="Cantidad Recibida">
            <img img class="input-icon" src="img/mano.png" alt="Cantidad Recibida">
        </div>
        </div>
       
        <input class="btn" type="submit" name="registrar" value="Enviar">
    </form>

    <?php
        include("registrar.php");
    ?>

</body>
</html>




<?php

include("conexion.php");

if(isset($_POST["registrar"])){
    if(
    strlen( $_POST["name"]) >= 1 &&
    strlen( $_POST["precio"]) >= 1 &&
    strlen( $_POST["cantidad"]) >= 1 &&
    strlen( $_POST["recibido"]) >= 1 &&
    ) {
        $name = trim($_POST[name]);
        $precio = trim($_POST[precio]);
        $cantidad = trim($_POST[cantidad]);
        $recibido = trim($_POST[recibido]);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(Nombre_Del_Producto,Precio_Del_Producto,Cantidad_Vendidad, Monto_Recibido)
            VALUES('$name', '$precio', '$cantidad', '$recibido', '$fecha')";
            $resultado = mysqli_query($conexion, $consulta);
            if($resultado){
                ?>
                <h3 class="success">La venta se ha registrado con exito!</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
              }
            }else{
                ?>
                <h3 class="error">Llena todos los campos</h3>
                <?php
            }
    }

?>
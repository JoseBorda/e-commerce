<?php
include ("./database/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>Mini e-commerce</title>
</head>
<body>
    <form action="../admin/admin.login.php" method="post">
        <!-- <img src="./imagenes/gif1.gif" alt="Imagen random" class="imagengif"> -->
        <div class="container-login">
            <div class="container-main">Usuario: </div><br>
            <div class="container-input"><input type="text" name="login_user" id="login_user" class="form-input"></div><br>
            <div class="container-main">Contrasenha: </div><br>
            <div class="container-input"><input type="password" name="login_password" id="login_password" class="form-input"></div>
            <div class="container-button"><input type="submit" value="Iniciar Sesion" class="button-primary"></div>
        </div>
    </form>

     <!-- <p class="primer">Cuadro 1</p>
     <p class="segundo">Cuadro 2</p>
     <p class="tercero">Cuadro 3</p>
     <p class="cuarto">Cuadro 4</p>
     <img src="" alt="" class="quinto"> -->
</body>
</html>
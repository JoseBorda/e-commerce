<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Mini e-commerce</title>
</head>
<body>
    <form action="../admin/admin.login.php" method="post">
        <div class="container-login">
            <div class="container-main">
                Usuario: <input type="text" name="login_user" id="login_user">
            </div>
            <div class="container-main">
                Contrasenha: <input type="password" name="login_password" id="login_password">
            </div>
            <div class="container-button">
                <input type="submit" value="Iniciar Sesion">
            </div>
        </div>
    </form>
</body>
</html>
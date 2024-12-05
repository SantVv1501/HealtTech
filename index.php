<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="http://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" type="text/css" href="Css/css/all.min.css">
</head>
<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location: Controlador/LoginController.php');
}
else{
    session_destroy();

?>
<body>
    <img class="wave" src="img/login_2.jpg" alt="">
    <div class="contenedor" >
        <div class="img">
            <img src="" alt="">
        </div>
        <div class="contenido-login">
            <form action="Controlador/LoginController.php" method="post">
                <img src="img/yael.jpg" alt="">
                <h2>Login</h2>
                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user" ></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contrasña</h5>
                        <input type="password" name="pass" class="input">
                    </div>
                </div>
                <a href="">Create Warpiece</a>
                <input type="submit" class="btn" value="Iniciar Sesion">
            </form>
        </div>
    </div>
</body>
<script class="js/login.js"></script>
</html>
<?php
}
?>

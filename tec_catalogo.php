<?php
session_start();
if($_SESSION['us_tipo']==2){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico</title>
</head>
<body>
    <h1>Hola Tecnico</h1>
    <a href="../Controlador/Logaut.php" >Cerrar session</a>
</body>
</html>
<?php
}
else{
    header('Location: ../index.php');
}
?>
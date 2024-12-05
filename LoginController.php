<?php
include_once '../modelo/Usuario.php';
session_start();
$user=$_POST['user'];
$pass=$_POST['pass']; 
$usuario = new Usuario();



//Control de acceso y direccionamiento de errores, redirecciona ala pagina de inicio
if(!empty($_SESSION['us_tipo'])){
    //session_destroy();
    switch ($_SESSION['us_tipo']) {
        case 1:
            header('Location: ../Vista/adm_catalogo.php');
            break;
        
        case 2:
            header('Location: ../Vista/tec_catalogo.php');
            break;
    }

}
else{
    $usuario->Loguearse($user,$pass);
    if(!empty($usuario->objetos)){
        foreach($usuario->objetos as $objeto){
            $_SESSION['usuario']=$objeto->id_usuario;
            $_SESSION['us_tipo']=$objeto->us_tipo;
            $_SESSION['nombre_us']=$objeto->nombre_us;
        }
        switch ($_SESSION['us_tipo']) {
            case 1:
                header('Location: ../Vista/adm_catalogo.php');
                break;
            
            case 2:
                header('Location: ../Vista/tec_catalogo.php');
                break;
        } 
    }
    else{
        header('Location: ../index.php');
    }
}

?>
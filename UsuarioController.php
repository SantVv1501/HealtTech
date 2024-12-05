<?php 
include_once '../Modelo/Usuario.php';
$usuario = new Usuario();
if($_POST['funcion']=='buscar_usuario'){
    $json=array();
    $usuario->obtener_datos($_POST['dato']);
    foreach ($usuario->objetos as $objeto) {
        $json[]=array(
            //Contiene todos los datos de la tabla que debe contener
            'nombre' =>$objeto->nombre_us,
            'apellidos' =>$objeto->apellidos_us,
            'edad' =>$objeto->edad,
            'dni' =>$objeto->dni_us,
            'tipo' =>$objeto->nombre_tipo,
            'telefono' =>$objeto->telefono_us,
            'domicilio' =>$objeto->domicilio_us,
            'correo' =>$objeto->correo_us,
            'sexo' =>$objeto->sexo_us,
            'adicional' =>$objeto->adicional_us
        );
    }
    $jsonstring = json_encode($json[0]);//Codigica el json
    echo $jsonstring;
}
if($_POST['funcion']=='capturar_datos'){
    $json=array();
    $id_usuario=$_POST['id_usuario'];
    $usuario->obtener_datos($id_usuario);
    foreach ($usuario->objetos as $objeto) {
        $json[]=array(
            //Contiene todos los datos de la tabla que debe contener
            'telefono' =>$objeto->telefono_us,
            'domicilio' =>$objeto->domicilio_us,
            'correo' =>$objeto->correo_us,
            'sexo' =>$objeto->sexo_us,
            'adicional' =>$objeto->adicional_us
        );
    }
    $jsonstring = json_encode($json[0]);//Codigica el json
    echo $jsonstring;
}
if($_POST['funcion']=='editar_usuario'){
    $id_usuario=$_POST['id_usuario'];
    $telefono=$_POST['telefono'];
    $domicilio=$_POST['domicilio'];
    $correo=$_POST['correo'];
    $sexo=$_POST['sexo'];
    $adicional=$_POST['adicional'];
    $usuario->editar($id_usuario,$telefono,$domicilio,$correo,$sexo,$adicional);
    echo 'editado';
}
if($_POST['funcion']=='cambiar_contra'){
    $id_usuario=$_POST['id_usuario'];
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $usuario->cambiar_contra($id_usuario,$oldpass,$newpass);
}

?>
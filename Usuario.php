<?php
include_once 'Conexion.php';

class Usuario {
    var $objetos;
    
    public function __construct() {
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    function Loguearse($dni, $pass) {
        $sql = "SELECT * FROM usuario inner join tipo_us on us_tipo = id_tipo_us where dni_us = :dni AND contrasena_us = :pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni' => $dni, ':pass' => $pass));
        
        // Aquí se asigna el resultado de la consulta a la propiedad objetos
        $this->objetos = $query->fetchAll();
        
        return $this->objetos;
    }
    function obtener_datos($id) {
        $sql = "SELECT * FROM usuario join tipo_us on us_tipo=id_tipo_us and id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id' => $id));
        
        // Aquí se asigna el resultado de la consulta a la propiedad objetos
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
    function editar($id_usuario,$telefono,$domicilio,$correo,$sexo,$adicional){
        $sql = "UPDATE usuario SET telefono_us=:telefono, domicilio_us=:domicilio,correo_us=:correo,sexo_us=:sexo,adicional_us=:adicional where id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':telefono'=>$telefono,":domicilio"=>$domicilio,":correo"=>$correo,":sexo"=>$sexo,":adicional"=>$adicional));
    }
    /*
    function cambiar_contra($id_usuario,$funcion,$oldpass,$newpass){
        $sql = "SELECT * FROM usuario where id_usuario=:id and contrasena_us=:oldpass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':oldpass'=>$oldpass));
        $this->objetos = $query->fetchall();
        if(!empty($this->objetos)){
            $sql="UPDATE usuario SET contrasena_us=:newpass where id_usuario=:id";
            $query=$this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_usuario,':newpass'=$newpass));
            echo 'update':
        }
        else{
            echo 'noupdate';
        }
    }*/
}
?> 
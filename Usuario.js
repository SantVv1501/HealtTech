$(document).ready(function(){
    var funcion='';
    var id_usuario = $('#id_usuario').val();
    var edit =false;
    //función para capturar los datos de todo el usuario logiado 
    buscar_usuario(id_usuario);
    function buscar_usuario(dato) {
        funcion='buscar_usuario';
        $.post('../Controlador/UsuarioController.php',{dato,funcion},(response)=>{
            //Lee variables locales
            //console.log(response); para poder ver la respuesta
            let nombre ='';
            let apellidos ='';
            let edad ='';
            let dni ='';
            let tipo ='';
            let telefono ='';
            let domicilio ='';
            let correo ='';
            let sexo ='';
            let adicional ='';
            //parse analisa el json del response y extrae todos los atributos 
            const usuario = JSON.parse(response);
            //vamos a concatenar 
            nombre+=`${usuario.nombre}`;
            apellidos+=`${usuario.apellidos}`;
            edad+=`${usuario.edad}`;
            dni+=`${usuario.dni}`;
            tipo+=`${usuario.tipo}`;
            telefono+=`${usuario.telefono}`;
            domicilio+=`${usuario.domicilio}`;
            correo+=`${usuario.correo}`;
            sexo+=`${usuario.sexo}`;
            adicional+=`${usuario.adicional}`;
            $('#nombre_us').html(nombre);
            $('#apellidos_us').html(apellidos);
            $('#edad').html(edad);
            $('#dni_us').html(dni);
            $('#us_tipo').html(tipo);
            $('#telefono_us').html(telefono);
            $('#domicilio_us').html(domicilio);
            $('#correo_us').html(correo);
            $('#sexo_us').html(sexo);
            $('#adicional_us').html(adicional);
        })
    }
    //.on captura los click de una clase 
    $(document).on('click','.edit',(e)=>{
        funcion = 'capturar_datos';
        edit=true;
        $.post('../Controlador/UsuarioController.php',{funcion,id_usuario},(response)=>{
            
            const usuario = JSON.parse(response);
            $('#telefono').val(usuario.telefono);
            $('#domicilio').val(usuario.domicilio);
            $('#correo').val(usuario.correo);
            $('#sexo').val(usuario.sexo);
            $('#adicional').val(usuario.adicional);
        })
    });
    //Solo analizaremos una parte del codigo 
    $('#form-usuario').submit(e=>{
        if(edit==true){
            let telefono=$('#telefono').val();
            let domicilio=$('#domicilio').val();
            let correo=$('#correo').val();
            let sexo=$('#sexo').val();
            let adicional=$('#adicional').val();
            funcion='editar_usuario';
            $.post('../Controlador/UsuarioController.php',{id_usuario,funcion,telefono,domicilio,correo,sexo,adicional},(response)=>{
                if(response='editado'){
                    $('#editado').hide('slow');
                    $('#editado').show(1000);
                    $('#editado').hide(2000);
                    $('#form-usuario').trigger('reset');
                }
                edit=false;
                buscar_usuario(id_usuario);                    
            })
        }
        else{
            $('#noeditado').hide('slow');
            $('#noeditado').show(1000);
            $('#noeditado').hide(2000);
            $('#form-usuario').trigger('reset');
        }
        e.preventDefault();//quitar el refres
    });

    $('#form-pass').submit(e=>{
        let oldpass=$('#oldpass').val();
        let newpass=$('#newpass').val();
        funcion='cambiar_contra';
        $.post('../Controlador/UsuarioController.php',{id_usuario,funcion,oldpass,newpass},(response)=>{
            console.log(response);
        })
        e.preventDefault();
    })
})
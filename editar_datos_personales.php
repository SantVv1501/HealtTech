<?php
session_start();
if($_SESSION['us_tipo']==1){
    include_once 'layouts/header.php';
?>
  <title>Adm |  Editar datos</title>
  <!-- Tell the browser to be responsive to screen width -->
<?php
    include_once 'layouts/nav.php'
?>
<!-- Modal -->
<div class="modal fade" id="cambiocontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <img src="../img/yael.jpg" class="profile-user-img img-fluid rounded-circle" alt="Profile Image">
        </div>
        <div class="text-center">
            <b>
                <?php
                    echo $_SESSION['nombre_us'];   
                ?>
            </b>
        </div>
        <form id="form-pass">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input id="oldpass" type="password" class="form-control" placeholder="Ingrese password actual">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input id="newpass" type="text" class="form-control" placeholder="Ingrese password nueva">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn bg-gradient-primary">Guardar</button>
            </form>
        </div>
    </div>
  </div>
</div>
     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Datos personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../Vista/adm_catalogo.php">Tienda</a></li>
              <li class="breadcrumb-item active">Datos personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Codigo nuevo por el videio-->
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3" >
                        <div class="card  card-outline" style="background-color: #7BE495; border-color: #CFF4D2;">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img src="../img/yael.jpg" class="profile-user-img img-fluid img-circle">
                                </div>
                                <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario']?>" >
                                <h3 id="nombre_us" class="profile-username text-center " style="color:#0B7300">Nombre</h3>
                                    <p id="apellidos_us" class="text-muted text-center">Apellidos</p>
                                <ul class="list-group list-group-unbordered mb-3 " >
                                    <li class="list-group-item" >
                                        <b style="color:#0B7300 ">Edad</b><a id ="edad"class="float-right">20</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b style="color:#0B7300">DNI</b><a id="dni_us" class="float-right">20</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b style="color:#0B7300">Tipo de usuario</b>
                                        <span id="us_tipo" class="float-right badge badge-primary">Administrador</span>
                                    </li>
                                    <button data-toggle="modal" data-target="#cambiocontra" type="button" class="btn btn-bloack btn-outline-warning bnt-sm">Cambiar password</button>
                                </ul>
                            </div>
                        </div>
                        <div class="card" style="background-color: #7BE495; border-color: #CFF4D2;">
                            <div class="card-header">
                                <h3 class="card-title" style="color:#0B7300">Sobre mi</h3>
                            </div>
                            <div class="card-body">
                                <strong style="color:#0B7300">
                                    <i  class="fas fa-phone mr-1">Telefono</i>
                                </strong>
                                <p id="telefono_us"class="text-muted">3454535</p>
                                <strong style="color:#0B7300">
                                    <i class="fas fa-map-marker-alt mr-1">Domicilio</i>
                                </strong>
                                <p id="domicilio_us"class="text-muted">3454535</p>
                                <strong style="color:#0B7300">
                                <i class="fas fa-at mr-1">Correo</i>
                                </strong>
                                <p id="correo_us"class="text-muted">3454535</p>
                                <strong style="color:#0B7300">
                                <i class="fas fa-smile-wink mr-1">Sexo</i>
                                </strong>
                                <p id="sexo_us"class="text-muted">3454535</p>
                                <strong style="color:#0B7300">
                                <i class="fas fa-pencil-alt mr-1">Informacion adicional</i>
                                </strong>
                                <p id="adicional_us" class="text-muted">3454535</p>
                                <button class="edit  btn btn-block bg-gradient-danger">Editar</button>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted" >Click en el boton si desea editar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" >
                        <div class="card"  style="background-color: #7BE495; border-color: #CFF4D2;">
                            <div class="card-header">
                                <h3 class="card-title "  style="color:#0B7300 ">Editar datos personales</h3>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-suceess text-center" id="editado" style="display:none;">
                                    <span><i class="fas fa-check m-1">Editado</i></span>
                                </div>
                                <div class="alert alert-danger text-center" id="noeditado" style="display:none;">
                                    <span><i class="fas fa-times m-1">Edicion deshabilitada</i></span>
                                </div> 
                                <form id='form-usuario' class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm2 col-form-label"  style="color:#0B7300 ">Telefono</label>
                                        <div class="col-sm-10 ml-auto">
                                            <input type="number" id="telefono" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domicilio" class="col-sm2 col-form-label"  style="color:#0B7300 ">Domicilio</label>
                                        <div class="col-sm-10 ml-auto">
                                            <input type="text" id="domicilio" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="correo" class="col-sm2 col-form-label"  style="color:#0B7300 ">Correo</label>
                                        <div class="col-sm-10 ml-auto">
                                            <input type="text" id="correo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sexo" class="col-sm2 col-form-label"  style="color:#0B7300 ">Sexo</label>
                                        <div class="col-sm-10 ml-auto">
                                            <input type="text" id="sexo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="adicional" class="col-sm2 col-form-label"  style="color:#0B7300 ">Informacion adicional</label>
                                        <div class="col-sm-10 ml-auto">
                                            <textarea  id="adicional" class="form-control" cols="30" rows="19"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10 float-right">
                                            <button class="btn btn-block btn-outline-success">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include_once 'layouts/footer.php';
}
else{
    header('Location: ../index.php');
}
?>
<script src="../js/Usuario.js"></script>
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
<div class="modal fade" id="Crearusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card" style="background-color: #329D9C; border-color: #CFF4D2;">
        <div class="car-header m+2">
            <h3 class="card-title">Crear usuario</h3>
            <button data-dismiss="modal" aria-laber="close" class="close m-1" >
                <span aria-hidden="true" >&times;</span>
            </button>
        </div>
        <div class="card-body">
            <form id="form-crear">
                <div class="form-group">
                    <label for="nombre">
                        Nombres
                    </label>
                    <input id="nombre"type="text" class="form-control" placeholder="Ingrese nombre" require>
                    </div>
                <div class="form-group">
                    <label for="apellido">
                        Apellidos
                    </label>
                    <input id="apellido"type="text" class="form-control" placeholder="Ingrese apellido" require>
                    </div>
                <div class="form-group">
                    <label for="edad">
                        Fecha de nacimiento
                    </label>
                    <input id="edad"type="date" class="form-control" placeholder="Ingresa edad" require>
                    </div>
                <div class="form-group">
                    <label for="dni">
                        DNI
                    </label>
                    <input id="dni"type="text" class="form-control" placeholder="Ingrese DNI" require>
                    </div>
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>
                    <input id="password"type="password" class="form-control" placeholder="Ingrese password" require>
                    </div>
           
        </div>
         <div class="card-footer">
            <button type="submit" class="btn bg-gradient-primary float-right">Guardar</button>
            <button type="botton" data-dismiss="modal" class="btn btn-outline-secondary float-right ">Close</button>
            </form>
        </div>
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
            <h1>Gestion Usuarios<button type="button" data-toggle="modal" data-target="#Crearusuario"class="btn bg-gradient-primary ml-3">Crear usuario</button></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../Vista/adm_catalogo.php">Tienda</a></li>
              <li class="breadcrumb-item active">Gestion usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Codigo nuevo por el videio-->
    <section>
        <div class="container-fluid">
            <div class="card " style="background-color: #7BE495; border-color: #CFF4D2;">
                <div class="card-header">
                    <h3 class="card-title">Buscar usuario</h3>
                    <div class="input-group">
                        <input type="text" id="buscar" class="form-control float-left" placeholder="Ingrese nombre de usuario">
                        <div class="input-group-append"><button class="btn btn-default"><i class="fas fa-search"></i></button></div>
                    </div>
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

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
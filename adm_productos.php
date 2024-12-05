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
   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../Vista/adm_catalogo.php">Tienda</a></li>
              <li class="breadcrumb-item active">Productos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="categories">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Producto 1 -->
            <div class="col">
                <div class="card">
                    <img id="producto" src="../img/producto_1.jpg" class="card-img-top" alt="Skinny Jeans">
                    <div class="card-body text-center">
                    <div class="card-body">
                            <strong style="color:#205072">
                            <i  class="fas fa-tag mr-2">Nombre</i>
                            </strong>
                            <p id="telefono_us"class="text-muted">PT 382L</p>
                            <strong style="color:#205072">
                                <i  class="fas fa-tint">Concentración</i>
                            </strong>
                            <p id="domicilio_us"class="text-muted">99%-99.5%</p>
                            <strong style="color:#205072">
                            <i class="fas fa-plus-circle">Adicional</i>
                            </strong>
                            <p id="correo_us"class="text-muted">Regulador,vaso hunificador ,Nasal y carrito</p>
                            <strong style="color:#205072">
                            <i  class="fas fa-flask">laboratorio</i>
                            </strong>
                            <p id="sexo_us"class="text-muted">Griogas</p>
                            <strong style="color:#205072">
                            <i class="fas fa-map">ubicación</i>
                            </strong>
                            <?php
                                $url = "https://criogas.com/contacto/";
                            ?>
                            <p id="adicional_us" class="text-muted"><a href="<?php echo $url; ?>" class="btn btn-primary" role="button">Puebla</a> </p>
                            <button class=" btn  bg-gradient-danger">Eliminar</button>
                           
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_2.jpg" class="card-img-top" alt="Ripped Jeans">
                    <div class="card-body text-center">
                    <div class="card-body">
                    <strong style="color:#205072">
                            <i  class="fas fa-tag mr-2">Nombre</i>
                            </strong>
                            <p id="telefono_us"class="text-muted">TP/SNO 425L</p>
                            <strong style="color:#205072">
                                <i  class="fas fa-tint">Concentración</i>
                            </strong>
                            <p id="domicilio_us"class="text-muted">99%-99.5%</p>
                            <strong style="color:#205072">
                            <i class="fas fa-plus-circle">Adicional</i>
                            </strong>
                            <p id="correo_us"class="text-muted">S/N oxigeno</p>
                            <strong style="color:#205072">
                            <i  class="fas fa-flask">laboratorio</i>
                            </strong>
                            <p id="sexo_us"class="text-muted">Infra</p>
                            <strong style="color:#205072">
                            <i class="fas fa-map">ubicación</i>
                            </strong>
                            <?php
                                $url = "https://grupoinfra.com/contacto";
                            ?>
                            <p id="adicional_us" class="text-muted"><a href="<?php echo $url; ?>" class="btn btn-primary" role="button">Queretaro</a> </p>
                            <button class=" btn  bg-gradient-danger">Eliminar</button>
                         
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_3.jpg" class="card-img-top" alt="High Jeans">
                    <div class="card-body text-center">
                    <div class="card-body">
                    <strong style="color:#205072">
                            <i  class="fas fa-tag mr-2">Nombre</i>
                            </strong>
                            <p id="telefono_us"class="text-muted">TP 682 L</p>
                            <strong style="color:#205072">
                                <i  class="fas fa-tint">Concentración</i>
                            </strong>
                            <p id="domicilio_us"class="text-muted">99%-99.5%</p>
                            <strong style="color:#205072">
                            <i class="fas fa-plus-circle">Adicional</i>
                            </strong>
                            <p id="correo_us"class="text-muted">Carrito portatil,y Nasal.</p>
                            <strong style="color:#205072">
                            <i  class="fas fa-flask">laboratorio</i>
                            </strong>
                            <p id="sexo_us"class="text-muted">Grigas</p>
                            <strong style="color:#205072">
                            <i class="fas fa-map">ubicación</i>
                            </strong>
                            <?php
                                $url = "https://criogas.com/contacto/";
                            ?>
                            <p id="adicional_us" class="text-muted"><a href="<?php echo $url; ?>" class="btn btn-primary" role="button">Edomex</a> </p>
                            <button class=" btn  bg-gradient-danger">Eliminar</button>
                        
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_5.jpg" class="card-img-top" alt="Mom Jeans">
                    <div class="card-body text-center">
                        <div class="card-body">
                        <strong style="color:#205072">
                            <i  class="fas fa-tag mr-2">Nombre</i>
                            </strong>
                            <p id="telefono_us"class="text-muted">TP 325L</p>
                            <strong style="color:#205072">
                                <i  class="fas fa-tint">Concentración</i>
                            </strong>
                            <p id="domicilio_us"class="text-muted">99%-99.5%</p>
                            <strong style="color:#205072">
                            <i class="fas fa-plus-circle">Adicional</i>
                            </strong>
                            <p id="correo_us"class="text-muted">Kit completo</p>
                            <strong style="color:#205072">
                            <i  class="fas fa-flask">laboratorio</i>
                            </strong>
                            <p id="sexo_us"class="text-muted">Infra</p>
                            <strong style="color:#205072">
                            <i class="fas fa-map">ubicación</i>
                            </strong>
                            <?php
                                $url = "https://grupoinfra.com/contacto";
                            ?>
                            <p id="adicional_us" class="text-muted"><a href="<?php echo $url; ?>" class="btn btn-primary" role="button">Nuevo León</a> </p>
                            <button class=" btn  bg-gradient-danger">Eliminar</button>
                            
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
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
    <style>
        /* Estilo del título */
        .oxigenacion {
            font-family: 'Dancing Script', cursive; /* Fuente ligada */
            font-size: 2.5rem; /* Tamaño de letra */
            color: #205072; /* Color principal */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Sombra del texto */
            text-align: center; /* Alineación al centro */
            margin: 2rem 0; /* Espaciado vertical */
        }
    </style>


    <div class="container">
        <h2 class="oxigenacion">"Oxigenación que da vida"</h2>
    </div>
        <!--h2 class="text-center my-4">"Oxigenación que da vida"</h2-->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Producto 1 -->
            <div class="col">
                <div class="card">
                    <img id="producto" src="../img/producto_1.jpg" class="card-img-top" alt="Skinny Jeans">
                    <div class="card-body text-center">
                    <h5 class="card-title text-center">Tanque Portátil 382 litros</h5>
                    <h4 class="card-title text-center">Incluido:Regulador ,Vaso hunificador,Nasal y Carrito Portatíl</h4>
                        <p class="card-text"><b>$1500.00</b></p>
                        <a href="shop.html" class="btn btn-primary">Comprar </a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_2.jpg" class="card-img-top" alt="Ripped Jeans">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Tanque de oxigeno (sin oxígeno) de 425 litros</h5>
                        <p class="card-text"><b>$1000.00</b></p>

                        <a href="shop.html" class="btn btn-primary mt-3">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_3.jpg" class="card-img-top" alt="High Jeans">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">   Tanque Portátil 682 litros</h5>
                        <h4 class="card-title text-center">Incluido:Regulador ,Vaso hunificador,Nasal y Carrito Portatíl</h4>
                        <p class="card-text"><b>$3,449.00</b></p>
                        <a href="shop.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col">
                <div class="card">
                    <img src="../img/producto_5.jpg" class="card-img-top" alt="Mom Jeans">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tanque de oxigeno Kit completo MD 325 litros</h5>
                        <p class="card-text"><b>$2,472.00</b></p>
                        <a href="shop.html" class="btn btn-primary">Comprar</a>
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
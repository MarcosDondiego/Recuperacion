<?php 

    if(!isset($_SESSION['usuario'])){
      ?>
      <script>
      
      window.location= "index.php";
      alert("No tiene permisos para ingresar.");
      </script>
      <?php
    }
     
      
    
        
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Encuesta de Trayectoria</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigación-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Sistema de encuestas en línea</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Panel
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    
                        <a class="btn btn-primary" href="salir.php">Cerrar Sesión</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="mastheadAdm">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Encuesta de Trayectoria</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">MENÚ</h2>
                    </div>
                </div>
            </div>
        </header>
        <!--Contenido-->
        <div class="contact-section px-4 px-lg-5">
            <div class="row">
                <div class="col-md-2">                       
                </div>
                <div class="col-md-6">
                  <h3>¿Qué desea hacer?</h3>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          
                          <h5 class="card-title">Alta de nuevo Usuario</h5>
                          <p class="card-text"></p>
                          <a href="InicioAdmin.php" class="btn btn-primary">+</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Consultar Alumno</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-primary">+</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Ver Cuestionarios</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-primary">+</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Otro</h5>
                          <p class="card-text"></p>
                          <a href="#" class="btn btn-primary">+</a>
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="col-md-3">    
                    <p>ENCUESTA DE SATISFACCIÒN AL ESTUDIANTE.</p>      
                      <div class="card">
                        <div class="card-body">
                          <h2 class="text-black-50 mx-auto mt-2 mb-5">Universidad Técnologica del Norte de Aguascalientes</h2>
                        </div>
                        <img class="card-img-bottom" src="assets/img/utna.png" alt="Card image cap">
                      </div>        
                </div>
                <div class="col-md-2">                       
                </div>
                
            </div>
        </div>
        <!-- Contact-->
        <section class="contact-section bg-black">
          <div class="container px-4 px-lg-5">
              <div class="social d-flex justify-content-center">
                  <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                  <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                  <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
              </div>
          </div>
      </section>
      <!-- Footer-->
      <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div></footer>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <!-- * *                               SB Forms JS                               * *-->
      <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      <script src="./js/funciones.js"></script>
      
  </body>
</html>
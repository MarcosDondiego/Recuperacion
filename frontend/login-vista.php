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
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Encuesta de Trayectoria</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Universidad Técnologica del Norte de Aguascalientes</h2>
                    </div>
                </div>
            </div>
        </header>
        <!--Contenido-->
        <div class="contact-section px-4 px-lg-5">
            <div class="row">
                <div class="col-md-1">                       
                </div>
                <div class="col-md-6">
                    <h3>Encuestas en Lìnea</h3>    
                    <p>ENCUESTA DE SATISFACCIÒN AL ESTUDIANTE.</p>      
                      <div class="card">
                        
                        <img class="card-img-bottom" src="assets/img/utna.png" alt="Card image cap">
                      </div>        
                </div>
                <div class="col-md-5">
                    <hgroup>
                        <h1>Inicio de sesión</h1>
                        <h3>Trayectoria</h3>
                      </hgroup>
                      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                        <div class="group">
                          <input type="text" name="usuario" required><span class="highlight"></span><span class="bar"></span>
                          <label>Usuario</label>
                        </div>
                        <div class="group">
                          <input type="password" name="clave" required><span class="highlight"></span><span class="bar"></span>
                          <label>Contraseña</label>
                          <p><a href="#">¿Olvidaste tu contraseña?</a></p>

                        </div>
                        <button type="submit" value="Entrar" class="button buttonBlue" id="btnenviar">Ingresar
                        </button>
                        <div id="divgris">
                            <button type="reset" value="cancelar" id="btncancel" class="button btn-sm">Cancelar</button>
                        </div>
                      </form>
                      <footer2><a href="#" target="_blank"><img src="assets/img/SoftDev.png"></a>
                        <p>Conocenos: <a href="#" target="_blank">SoftDev</a></p>
                      </footer2>                   
                </div>
            </div>
        </div>
        <!-- Contacto-->
        <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Ubicación</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Av. Universidad #1001, La Estación Rincón, El Potrero, 20400 Rincón de Romos, Ags.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="https://www.utna.edu.mx/UTNA2016/">https://www.utna.edu.mx/UTNA2016/</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Tel.</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">(465) 965 0030</div>
                        </div>
                    </div>
                </div>
            </div>
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
        <!--<script src="./js/funciones.js"></script>-->
    </body>
</html>

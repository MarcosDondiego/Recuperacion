<?php session_start();

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
  <title>Inicio Administrador</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="index.html">Encuesta de trayectoria</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menú
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="admin-sesion.php">Panel</a></li>
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
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Bienvenido Administrador </h2>
          <h3>Universidad Tecnologica del Norte de Aguascalientes</h3>
        </div>
      </div>
    </div>
  </header>
  <!-- Administrador-->
  <div class="container">
    <div class="row">
      <div class="col-1">

      </div>
      <div class="col-10">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" aria-current="true" href="#">Alta de nuevo alumno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="true" href="#">Consultar alumno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Ver cuestionarios</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h5 class="card-title">Registrar Alumno</h5>
            <p class="card-text"></p>
            <button type="submit" value="Nuevo Alumno" class="btn btn-primary"
              onclick="mostrarFormulario1('contenedor');" name="btnmostrar1">Nuevo Alumno
            </button>
            <button type="submit" value="Nuevo Alumno" class="btn btn-primary"
              onclick="mostrarFormulario2('contenedor');" name="btnmostrar2">Nuevo Administrador
            </button>
            <script>
              $(function (id) {
                $('#btnmostrar1').onclick(function () {
                  $('#formu2').hide();
                });
                $('#btnmostrar2').onclick(function () {
                  $('#formu1').hide();
                });
              })
            </script>
          </div>
          <!--Formulario de registro oculto-->
          <div>
            <form action="insertuser.php" method="POST" id="formu1" style="display: none;">
              <h3>Nuevo Alumno</h3>
              <div class="group mt-4">
                <input type="text" name="usuario"><span class="highlight"></span><span class="bar"></span>
                <label>Matricula</label>
              </div>
              <div class="group mt-4">
                <input type="text" name="clave"><span class="highlight"></span><span class="bar"></span>
                <label>Clave</label>
              </div>
              <div class="group">
                <input type="text" name="nombre"><span class="highlight"></span><span class="bar"></span>
                <label>Nombre(s)</label>
              </div>
              <div class="group">
                <input type="text" name="apellidos"><span class="highlight"></span><span class="bar"></span>
                <label>Apellidos</label>
              </div>
              <div class="">
                <p>Carrera</p>
                <select class="selectpicker form-control" name="carrera">
                  <option value="">Seleccione |▾</option>
                  <option value="TSU. Administración área Capital Humano">TSU. Administración área Capital Humano
                  </option>
                  <option value="TSU. Administración, Formulación y Evaluación de Proyectos">TSU. Administración,
                    Formulación y Evaluación de Proyectos</option>
                  <option value="TSU. Desarrollo de Negocios área Mercadotecnia">TSU. Desarrollo de Negocios área
                    Mercadotecnia</option>
                  <option value="TSU. Contaduría">TSU. Contaduría</option>
                  <option value="TSU. Tecnologías de la Información área Desarrollo de Software Multiplataforma">TSU.
                    Tecnologías de la Información área Desarrollo de Software Multiplataforma</option>
                  <option value="TSU. Tecnologías de la Información área Entornos Virtuales y Negocios Digitales">TSU.
                    Tecnologías de la Información área Entornos Virtuales y Negocios Digitales</option>
                  <option value="TSU. Mantenimiento Industrial ">TSU. Mantenimiento Industrial </option>
                  <option value="TSU. Procesos Industriales área Manufactura">TSU. Procesos Industriales área
                    Manufactura</option>
                  <option value="TSU. Procesos Industriales área Automotriz">TSU. Procesos Industriales área Automotriz
                  </option>
                  <option value="TSU. Mecatrónica área Sistemas de Manufactura Flexible">TSU. Mecatrónica área Sistemas
                    de Manufactura Flexible</option>
                  <option value="TSU. Mecatrónica área Automatización">TSU. Mecatrónica área Automatización </option>
                  <option value="TSU. Agricultura Sustentable y Protegida">TSU. Agricultura Sustentable y Protegida
                  </option>
                  <option value="TSU. Agricultura Sustentable área Vitivinicultura">TSU. Agricultura Sustentable área
                    Vitivinicultura </option>
                  <option value="TSU. Logística área Cadena de Suministros">TSU. Logística área Cadena de Suministros
                  </option>
                  <option value="TSU. Mecánica Automotriz">TSU. Mecánica Automotriz </option>
                  <option value="Despresurizado. TSU. Administración área Capital Humano">Dspresurizado. TSU.
                    Administración área Capital Humano </option>
                  <option value="Desresurizado. TSU. Mantenimiento Industrial">Desresurizado. TSU. Mantenimiento
                    Industrial</option>
                  <option value="Contaduria">Contaduria</option>
                  <option value="Sistemas Productivos">Sistemas Productivos</option>
                  <option value="Mecatrónica">Mecatrónica</option>
                  <option value="Mantenimiento Industrial">Mantenimiento Industrial</option>
                  <option value="Desarrollo y Gestión de Software">Desarrollo y Gestión de Software</option>
                  <option value="Innovación de Negocios y Mercadotecnia">Innovación de Negocios y Mercadotecnia</option>
                  <option value="Agricultura Sustentable y Protegida">Agricultura Sustentable y Protegida </option>
                  <option value="Gestión del Capital Humano">Gestión del Capital Humano</option>
                  <option value="Innovación de Negocios y Mercadotecnia">Innovación de Negocios y Mercadotecnia</option>
                  <option value="Metal Mecánica">Metal Mecánica</option>
                  <option value="Gestión de Negocios y Proyectos">Gestión de Negocios y Proyectos</option>
                  <option value="Diseño y Gestión de Redes Logísticas">Diseño y Gestión de Redes Logísticas </option>
                </select>
              </div>
              <div>
                <p class="text-left">Grado</p>
                <select class="selectpicker form-control" name="grado">
                  <option value="">Seleccione |▾</option>
                  <option value="1">1°</option>
                  <option value="2">2°</option>
                  <option value="3">3°</option>
                  <option value="4">4°</option>
                  <option value="5">5°</option>
                  <option value="6">6°</option>
                  <option value="7">7°</option>
                  <option value="8">8°</option>
                  <option value="9">9°</option>
                  <option value="10">10°</option>
                  <option value="11">11°</option>

                </select>
              </div>
              <div class="group mt-5">
                <input type="text" name="grupo"><span class="highlight"></span><span class="bar"></span>
                <label>Grupo</label>
              </div>
              <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
            </form>
          </div>
          <!-- Admin -->
          <form action="insertadmin.php" method="POST" id="formu2" style="display: none;">
            <h3>Nuevo Administrador</h3>
            <div class="group mt-4">
              <input type="text" name="usuarioo"><span class="highlight"></span><span class="bar"></span>
              <label>Nombre de Usuario</label>
            </div>
            <div class="group">
              <input type="text" name="clavee"><span class="highlight"></span><span class="bar"></span>
              <label>Clave</label>
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
          </form>

        </div>

      </div>
    </div>
    <div class="col-1">

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
  <footer class="footer bg-black small text-center text-white-50">
    <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2021</div>
  </footer>
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
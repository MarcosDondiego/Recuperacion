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

    
<form class="col-7" style="border: 3px solid #067a73;" >

            

<div>
  <img aling="center" src="assets/img/utna.png" width="105" height="65" >
</div>
<div class="col-md-12" style="text-align: right">
             <a class="btn btn-primary" href="salir.php">Cerrar Sesión</a>
  </div>
<hr>
          <div  class="mb-3" >
            
          </hr>
          <h1 class="text-center" id="p">Formato de Encuesta de Satisfacción 11.</h1>
                  
        </div>
        
          </form>
  <body class="encuestas" style=" background-color:  #5d9b9b;"></body>
    <form action="insert_preg.php" method="POST" class="col-7" style="border: 3px solid #067a73;">
      
      <div class="mb-3">
      
       <!--  PREGUNTA 1  -->
       <div class="mb-3">
        <p>1.0 Tipo de plan de estudios:</p>
        <select class="form-control" name="tipoPlanes" required>
        <option value="">Seleccione  |▾</option>
        <option value="6 Cuatrimestres">6 Cuatrimestres</option>
        <option value="Despresurizado">Despresurizado</option>
      </select>
      </div>
      <br>
        
  <!--  PREGUNTA 2  -->
  <div class="container">
  <div class="row">
    <div class="mb-3">
        <p> 2.0 Promedio del bachillerato </p>
        <input type="text" class="form-control" name="prom" required>
      </div>
    </div>
  </div>
  <br>

   <!--  PREGUNTA 3  -->
   <div class="container">
   <div class="row">
    <div class="mb-3">

    </div>
    <div class="mb-3">
        <div class="form-group">
          <p>3.0 Fecha de nacimiento: </p>
          <input type="date" class="form-control" name="fechanaci" required>
        </div>
      </div>
      

      </div>
    </div>
  </div>
        <br>


              <!--  PREGUNTA 4  -->
              <div class="container">
              <div class="mb-3">
                <p>4.0 Sexo:</p>
                <select class="form-control" name="sex" required> 
                <option value="">Seleccione  |▾</option>
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
              </select>
              </div>
            </div>
              <br>

              <!--  PREGUNTA 5  -->
              <div class="mb-3">
                <p>5.0 ¿Hablas alguna lengua indígena?</p>
                <select class="form-control" name="habl" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
              </div>
              <br>

                    <!--  PREGUNTA 6  -->
                    <div class="mb-3">
                <p>6.0 ¿Provienes de alguna lengua indígena?</p>
                <select class="form-control" name="prov" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
              </div>
              <br>

                         <!--  PREGUNTA 7  -->
                         <div class="mb-3">
                <p>7.0 Estado civil</p>
                <select class="form-control" name="estadociv" required>
                <option value="">Seleccione  |▾</option>
                <option value="Soltero">Soltero</option>
                <option value="Casado o unión libre">Casado o unión libre</option>
              </select>
              </div>
              <br>

                     <!--  PREGUNTA 8  -->
                     <div class="mb-3">
                <p>8.0 ¿Tienes hijos?</p>
                <select class="form-control" name="hijo" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
              </div>
              <br>

                      <!--  PREGUNTA 9  -->
                      <div class="mb-3">
                <p>9.0 ¿Tienes alguna discapacidad de tipo..?</p>
                <select class="form-control" name="disca" required>
                <option value="">Seleccione  |▾</option>
                <option value="Auditivo">Auditivo</option>
                <option value="Motriz">Motriz</option>
                <option value="No">No</option>
              </select>
              </div>
              <br>


                      <!--  Titulo  -->
             <div class="row">
              <div class="mb-3">
      <h3>10.- Indica la escolaridad máxima alcanzada por tus padres o tutores.</h3>
      <p></p>
             </div>
            </div>


                   <!--  PREGUNTA 10 -->
                   <div class="mb-3">
                <p>10.1 Padre.</p>
                <select class="form-control" name="escolariPadre" required>
                <option value="">Seleccione  |▾</option>
                <option value="Ninguna">Ninguna</option>
                <option value="Primaria completa">Primaria completa</option>
                <option value="Secundaria completa">Secundaria completa</option>
                <option value="Bachillerato o equivalente completo">Bachillerato o equivalente completo</option>
                <option value="Estudios parciales de Licenciatura">Estudios parciales de Licenciatura</option>
                <option value="Técnico Superior Universitario o Profesional Asociado completo">Técnico Superior Universitario o Profesional Asociado completo</option>
                <option value="Licenciatura completa">Licenciatura completa</option>
                <option value="Posgrado completo">Posgrado completo</option>
                <option value="Lo ignoró">Lo ignoró</option>
              </select>
              </div>
              <br>

                     <!--  PREGUNTA 10 -->
                     <div class="mb-3">
                <p>10.2 Madre.</p>
                <select class="form-control" name="escolariMadre" required>
                <option value="">Seleccione  |▾</option>
                <option value="Ninguna">Ninguna</option>
                <option value="Primaria completa">Primaria completa</option>
                <option value="Secundaria completa">Secundaria completa</option>
                <option value="Bachillerato o equivalente completo">Bachillerato o equivalente completo</option>
                <option value="Estudios parciales de Licenciatura">Estudios parciales de Licenciatura</option>
                <option value="Técnico Superior Universitario o Profesional Asociado completo">Técnico Superior Universitario o Profesional Asociado completo</option>
                <option value="Licenciatura completa">Licenciatura completa</option>
                <option value="Posgrado completo">Posgrado completo</option>
                <option value="Lo ignoró">Lo ignoró</option>
              </select>
              </div>
              <br>

              <hr>



                    <!--  Titulo  -->
             <div class="row">
              <div class="mb-3">
         <h3>11.0 ¿Cual es la ocupación actual de tus padres o tutores?</h3>
         <p></p>
                </div>
              </div>

                        
                     <!--  PREGUNTA 11 -->
                     <div class="mb-3">
                <p>11.1 Padre.</p>
                <select class="form-control" name="ocupaPadre" required>
                <option value="">Seleccione  |▾</option>
                <option value="Alto directivo (director, gerente, etc)">Alto directivo (director, gerente, etc)</option>
                <option value="Empleado mando medio, superior (supervisor, jefe de departamento, etc)">Empleado mando medio, superior (supervisor, jefe de departamento, etc)</option>
                <option value="Técnico de nivel operativo (mantenimiento, operador de equipo especializado, etc.)">Técnico de nivel operativo (mantenimiento, operador de equipo especializado, etc.)</option>
                <option value="Empleado operativo en área administrativa (oficinista, atencion al público, ventas, intendencia, etc.)">Empleado operativo en área administrativa (oficinista, atencion al público, ventas, intendencia, etc.)</option>
                <option value="Empleado operativo de servicios del estado (limpia, seguridad y vigiñlancia, servicios de agua, alcantarillado, alumbrado, etc)">Empleado operativo de servicios del estado (limpia, seguridad y vigiñlancia, servicios de agua, alcantarillado, alumbrado, etc)</option>
                <option value="Profesionista independiente (cuenta con consultorio, despacho, bufete etc.)">Profesionista independiente (cuenta con consultorio, despacho, bufete etc.)</option>
                <option value="Profesor, maestro, docente (de cualquier nivel educativo)">Profesor, maestro, docente (de cualquier nivel educativo)</option>
                <option value="Propietario o copropietario de empresa a pequeña o mediana escala (de 21 a 100 empleados)">Propietario o copropietario de empresa a pequeña o mediana escala (de 21 a 100 empleados)</option>
                <option value="Propietario o copropietario de microempresa: negocio o taller (de 1 a 20 empleados)">Propietario o copropietario de microempresa: negocio o taller (de 1 a 20 empleados)</option>
                <option value="Obrero (mano de obra en general: industrial, de la construcción, etc.)">Obrero (mano de obra en general: industrial, de la construcción, etc.)</option>
                <option value="Campesino">Campesino</option>
                <option value="Oficios y otras actividades (chofer, servicio doméstico, etc.)">Oficios y otras actividades (chofer, servicio doméstico, etc.)</option>
                <option value="Migró al extranjero a trabajar (en cualquier actividad, descrita o no en la presente lista)">Migró al extranjero a trabajar (en cualquier actividad, descrita o no en la presente lista)</option>
                <option value="Jubilado o pensionado">Jubilado o pensionado</option>
                <option value="Labores del hogar exclusivamente">Labores del hogar exclusivamente</option>
                <option value="No trabaja">No trabaja</option>
                <option value="Lo ignoró">Lo ignoró</option>
                <option value="Finado">Finado</option>
              </select>
              </div>
              <br>

                  <!--  PREGUNTA 11.2 -->
                  <div class="mb-3">
                <p>11.2 Madre.</p>
                <select class="form-control" name="ocupaMadre" required>
                <option value="">Seleccione  |▾</option>
                <option value="Alto directivo (director, gerente, etc)">Alto directivo (director, gerente, etc)</option>
                <option value="Empleado mando medio, superior (supervisor, jefe de departamento, etc)">Empleado mando medio, superior (supervisor, jefe de departamento, etc)</option>
                <option value="Técnico de nivel operativo (mantenimiento, operador de equipo especializado, etc.)">Técnico de nivel operativo (mantenimiento, operador de equipo especializado, etc.)</option>
                <option value="Empleado operativo en área administrativa (oficinista, atencion al público, ventas, intendencia, etc.)">Empleado operativo en área administrativa (oficinista, atencion al público, ventas, intendencia, etc.)</option>
                <option value="Empleado operativo de servicios del estado (limpia, seguridad y vigiñlancia, servicios de agua, alcantarillado, alumbrado, etc)">empleado operativo de servicios del estado (limpia, seguridad y vigiñlancia, servicios de agua, alcantarillado, alumbrado, etc)</option>
                <option value="Profesionista independiente (cuenta con consultorio, despacho, bufete etc.)">Profesionista independiente (cuenta con consultorio, despacho, bufete etc.)</option>
                <option value="Profesor, maestro, docente (de cualquier nivel educativo)">Profesor, maestro, docente (de cualquier nivel educativo)</option>
                <option value="Propietario o copropietario de empresa a pequeña o mediana escala (de 21 a 100 empleados)">Propietario o copropietario de empresa a pequeña o mediana escala (de 21 a 100 empleados)</option>
                <option value="Propietario o copropietario de microempresa: negocio o taller (de 1 a 20 empleados)">Propietario o copropietario de microempresa: negocio o taller (de 1 a 20 empleados)</option>
                <option value="Obrero (mano de obra en general: industrial, de la construcción, etc.)">Obrero (mano de obra en general: industrial, de la construcción, etc.)</option>
                <option value="Campesino">Campesino</option>
                <option value="Oficios y otras actividades (chofer, servicio doméstico, etc.)">Oficios y otras actividades (chofer, servicio doméstico, etc.)</option>
                <option value="Migró al extranjero a trabajar (en cualquier actividad, descrita o no en la presente lista)">Migró al extranjero a trabajar (en cualquier actividad, descrita o no en la presente lista)</option>
                <option value="Jubilado o pensionado">Jubilado o pensionado</option>
                <option value="Labores del hogar exclusivamente">Labores del hogar exclusivamente</option>
                <option value="No trabaja">No trabaja</option>
                <option value="Lo ignoró">Lo ignoró</option>
                <option value="Finado">Finado</option>
              </select>
              </div>
              <br>
              <hr>

            
                  <!--  PREGUNTA 12  -->
                  <div class="mb-3">
                    <p>12.0 En que escuela realizaste tus estudios de bachillerato</p>
                    <select class="form-control" name="estudi" required>
                    <option value="">Seleccione  |▾</option>
                    <option value="CONALEP">CONALEP</option>
                    <option value="CBTIS">CBTIS</option>
                    <option value="CETIS">CETIS</option>
                    <option value="CECYTE">CECYTE</option>
                    <option value="Colegio de bachilleres">Colegio de bachilleres</option>
                    <option value="Bachillerato a distancia">Bachillerato a distancia</option>
                    <option value="Preparatoria abierta">Preparatoria abierta</option>
                    <option value="Preparatoria pública">Preparatoria pública</option>
                    <option value="Privada">Privada</option>
                    <option value="Otro">Otro</option>
                  </select>
                  </div>
                  <br>
    
                    <!--  PREGUNTA   -->
            <div class="row">
              <div class="mb-3">
               <div class="form-group">
        <p>12.1 Escribe el nombre de la escuela en la que realizaste tus estudios de bachillerato</p>
        <input type="text" class="form-control" name="escuelanomb" required/>
              </div>
                 </div>
                </div>
                <br>


                     <!--  PREGUNTA   -->
                    <div class="row">
                      <div class="mb-3">
              <p>13.0¿Cuántos años empleaste para cursar tu bachillerato?</p>
          <select class="form-control" name="añosBach" required>
          <option value="">Seleccione  |▾</option>
          <option value="Dos años">Dos años</option>
          <option value="Tres años">Tres años</option>
          <option value="Mas de tres años">Mas de tres años</option>    </select>  
          </div>
          </div>
             <br>
             

               <!--  PREGUNTA  -->
               
               <div class="mb-3">
             <p>14.0 ¿Trabajas?</p>
            <select class="form-control" name="trabaja" required>
            <option value="">Seleccione  |▾</option>
            <option value="Si">Si</option>
            <option value="No">No</option>   </select>
            </div>
               <br>

               
               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>15.0 ¿Economicamente, depende alguien de ti?</p>
            <select class="form-control" name="depende" required>
            <option value="">Seleccione  |▾</option>
            <option value="Si">Si</option>
            <option value="No">No</option> </select>  
            </div>
               <br>


                <!--  PREGUNTA   -->
                <div class="mb-3">
                    <p>16.0 ¿Cuál es la principal razón por la que trabajas?</p>
                <select class="form-control" name="razonTrabaj" required>
                <option value="">Seleccione  |▾</option>
                <option value="Pagarme mis estudios">Pagarme mis estudios</option>
                <option value="Ayudar al gasto familiar">Ayudar al gasto familiar</option> 
                <option value="Sostener a mi familia">Sostener a mi familia</option>
                <option value="Tener independencia económica de mi familia">Tener independencia económica de mi familia</option>
                <option value="Adquirir experiencia laboral">Adquirir experiencia laboral</option></select>
                </div>
                   <br>

                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>17.0 ¿Cuántas horas trabajas a la semana?</p>
                <select class="form-control" name="horasTrabaj" required>
                <option value="">Seleccione  |▾</option>
                <option value="10 hrs. o menos."> 10 hrs. o menos.</option>
                <option value="De 11 a 20 hrs.">De 11 a 20 hrs.</option> 
                <option value="De 21 a 30 hrs.">De 21 a 30 hrs.</option>
                <option value="De 31 a 40 hrs.">De 31 a 40 hrs.</option></select>
                </div>
                   <br>
<!---------------------------------------------------------------------------------------------------------------------------------------------->
                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>18.0 ¿Tu trabajo tiene relación con la carrera que estás iniciando?</p>
                <select class="form-control" name="relaciTrabaj" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option> 
                </select>
                </div>
                   <br>
                

                       <!--  Titulo  -->
             <div class="row">
              <div class="mb-3">
         <h3>19.0 Indica los medios de apoyo con los que cuentas para estudiar en casa.</h3>
         <p></p>
                </div>
              </div>

                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>19.1 Espacio privado para estudiar</p>
                <select class="form-control" name="espaciEstudi" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>19.2 Equipo de cómputo</p>
                <select class="form-control" name="equiComputo" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>19.3 Internet</p>
                <select class="form-control" name="intern" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option></select>
                </div>
                   <br>



                      <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>19.4 Libros especializados</p>
                <select class="form-control" name="libroEspeciali" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>19.5 Enciclopedias, diccionarios</p>
                <select class="form-control" name="encicloDiccion" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si</option>
                <option value="No">No.</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>20.0 ¿Qué importancia tienen tus estudios en las prioridades de tu familia?</p>
                <select class="form-control" name="imporEstudios" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy alta">Muy alta</option>
                <option value="Alta">Alta</option> 
                <option value="Media">Media</option>
                <option value="Baja">Baja</option>
                <option value="Muy baja">Muy baja</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>21.0 Los recursos económicos con que cuentas para desarrollar tus actividades académicas son:</p>
                <select class="form-control" name="recurEconomicos" required>
                <option value="">Seleccione  |▾</option>
                <option value="Óptimos">Óptimos</option>
                <option value="Suficientes">Suficientes</option> 
                <option value="Insuficientes">Insuficientes</option></select>
                </div>
                   <br>



                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>22.0 ¿Cuál es el principal medio de transporte que utilizas para trasladarte a la Universidad?</p>
                <select class="form-control" name="medioTranspor" required>
                <option value="">Seleccione  |▾</option>
                <option value="Transporte propio de la Universidad">Transporte propio de la Universidad</option>
                <option value="Transporte colectivo (Autobús, microbús, otro)">Transporte colectivo (Autobús, microbús, otro)</option> 
                <option value="Taxi">Taxi</option>
                <option value="Vehículo particular">Vehículo particular</option>
                <option value="Caminando">Caminando</option></select>
                </div>
                   <br>

        <!-------------------------------------------------------------------------------------------------------------------------------->

                           <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>23.0 ¿Cuánto tiempo haces regularmente para trasladarte de tu lugar de residencia a la Universidad?</p>
                <select class="form-control" name="tiempoTraslad" required>
                <option value="">Seleccione  |▾</option>
                <option value="Menos de ½ hr.">Menos de ½ hr.</option>
                <option value="De ½ hr a 1 hr.">De ½ hr a 1 hr.</option> 
                <option value="De 1 hr a 1 ½ hrs.">De 1 hr a 1 ½ hrs.</option> 
                <option value="De 1 ½ hrs a 2 hrs.">De 1 ½ hrs a 2 hrs.</option> 
                <option value="Más de 2 hrs.">Más de 2 hrs.</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>24.0 Antes de hacer tu solicitud de ingreso a la Universidad Tecnológica ¿Solicitaste admisión en otra institución de educación Superior?</p>
                <select class="form-control" name="admiInstitucion" required>
                <option value="">Seleccione  |▾</option>
                <option value="Si">Si.</option>
                <option value="No">No.</option></select>
                </div>
                   <br>


                          <!--  Titulo  -->
                    <div class="row">
                      <div class="mb-3">
                <h3>25.0 ¿En qué tipo de institución de educación superior solicitaste admisión antes de tu ingreso a la Universidad?</h3>
                <p></p>
                        </div>
                      </div>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>25.1 ¿Cuál alternativa consideraste antes de ingresar a la Universidad Tecnológica?</p>
                <select class="form-control" name="alternaIngresa" required>
                <option value="">Seleccione  |▾</option>
                <option value="Universidad Pública del Estado">Universidad Pública del Estado</option>
                <option value="Universidad privada">Universidad privada</option> 
                <option value="Instituto Tecnológico">Instituto Tecnológico</option>
                <option value="Universidad Politécnica">Universidad Politécnica</option>
                <option value="Escuela Normal">Escuela Normal</option>
                <option value="Ninguna">Ninguna</option>
                <option value="Otra">Otra</option></select>
                </div>
                   <br>



                      <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>26.0 De no existir la Universidad Tecnológica ¿Qué decisión crees que habrías tomado al concluir tu bachillerato?</p>
                <select class="form-control" name="existirUniver" required>
                <option value="">Seleccione  |▾</option>
                <option value="Inscribirme en otra institución de educación superior.">Inscribirme en otra institución de educación superior.</option>
                <option value="Empezar a trabajar o continuar trabajando.">Empezar a trabajar o continuar trabajando.</option> 
                <option value="Atender el negocio familiar.">Atender el negocio familiar.</option>
                <option value="Dedicarme a las labores del hogar.">Dedicarme a las labores del hogar.</option>
                <option value="Otras opciones de educación (inglés, cómputo, etc.).">Otras opciones de educación (inglés, cómputo, etc.).</option></select>
                </div>
                   <br>

                     <!--  Titulo  -->
                   <div class="row">
                      <div class="mb-3">
                        <h3>27.0 En el proceso para que decidieras ingresar a la Universidad Tecnológica, ¿Qué tan importante fue la información que recibiste de los siguientes medios?</h3>
                         <p></p>
                      </div>
                   </div>

                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>27.01 Televisión</p>
                <select class="form-control" name="televi" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>27.02 Radio</p>
                <select class="form-control" name="radio" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                   <br>


                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>27.03 Periódico</p>
                <select class="form-control" name="periodico" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                   <br>



                   <!--  PREGUNTA   -->
                   <div class="mb-3">
                    <p>27.04 Internet</p>
                <select class="form-control" name="internet" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                   <br>         
                   
                   
                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>27.05 Volante, tríptico</p>
              <select class="form-control" name="volanTripti" required>
              <option value="">Seleccione  |▾</option>
              <option value="Muy Importante">Muy Importante</option>
              <option value="Importante">Importante</option> 
              <option value="Poco Importante">Poco Importante</option>
              <option value="Nada Importante">Nada Importante</option></select>
              </div>
                 <br>


                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>27.06 Información proporcionada por personal de la UT (vía telefónica, correo electrónico o ventanilla)</p>
              <select class="form-control" name="personalUT" required>
              <option value="">Seleccione  |▾</option>
              <option value="Muy Importante">Muy Importante</option>
              <option value="Importante">Importante</option> 
              <option value="Poco Importante">Poco Importante</option>
              <option value="Nada Importante">Nada Importante</option></select>
              </div>
                 <br>


                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>27.07 Visita a la Universidad, expos y ferias</p>
              <select class="form-control" name="visitUniversi" required>
              <option value="">Seleccione  |▾</option>
              <option value="Muy Importante">Muy Importante</option>
              <option value="Importante">Importante</option> 
              <option value="Poco Importante">Poco Importante</option>
              <option value="Nada Importante">Nada Importante</option></select>
              </div>
                 <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>27.08 Orientación vocacional en el bachillerato</p>
                <select class="form-control" name="orientVacaci" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                  <br>   



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>27.09 Recomendaciones de familiares, amigos o egresados de la UT</p>
                <select class="form-control" name="recomenda" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                  <br>


                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>27.1 Conversaciones con maestros del bachillerato</p>
                <select class="form-control" name="converMaes" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option></select>
                </div>
                  <br>


              <!--  Titulo  -->
              <div class="row">
                <div class="mb-3">
                  <h3>28.0 En el proceso para que decidieras cursar tu carrera de TSU, ¿Qué importancia tuvieron los siguientes factores?</h3>
                   <p></p>
                </div>
             </div>


                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.01 Que el modelo educativo está basado en competencias profesionales</p>
                <select class="form-control" name="compeProfeci" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.02 Duración de la carrera de TSU</p>
                <select class="form-control" name="duraciCarrera" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>   


                           <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.03 Realizar prácticas y estadías en empresas</p>
                <select class="form-control" name="practiEstadias" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.04 Las oportunidades de empleo relacionadas con tu profesión</p>
                <select class="form-control" name="oportuEmpleo" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br> 

                              <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.05 El equipamiento de alta tecnología de la Universidad</p>
                <select class="form-control" name="equipaTecnologi" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.06 La preparación de los profesores</p>
                <select class="form-control" name="preparaProfe" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br> 

                      <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.07 Los programas de intercambio y movilidad estudiantil</p>
                <select class="form-control" name="intercamEstudi" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.08 Los costos de inscripción y/o colegiaturas</p>
                <select class="form-control" name="costos" required>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br> 



                   <!--  PREGUNTA   -->
                 <div class="mb-3">
                    <p>28.09 Los apoyos que ofrece la Universidad</p>
                <select class="form-control" name="apoyoUniver" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br>



                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>28.1 Que la Universidad ofrece Licencias Profesionales</p>
                <select class="form-control" name="licenciProfesion" required>
                <option value="">Seleccione  |▾</option>
                <option value="Muy Importante">Muy Importante</option>
                <option value="Importante">Importante</option> 
                <option value="Poco Importante">Poco Importante</option>
                <option value="Nada Importante">Nada Importante</option>
                <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                </div>
                  <br> 



                        <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>28.11 Que la Universidad ofrece Ingenierías</p>
                  <select class="form-control" name="ofreIngeni" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="Muy Importante">Muy Importante</option>
                  <option value="Importante">Importante</option> 
                  <option value="Poco Importante">Poco Importante</option>
                  <option value="Nada Importante">Nada Importante</option>
                  <option value="No tuve conocimiento">No tuve conocimiento</option></select>
                  </div>
                    <br>



                    <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>29.0 De acuerdo con la carrera de TSU que estás iniciando, ¿En qué área laboral te gustaría desarrollarte?</p>
                  <select class="form-control" name="areaDesarrollarte" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="En el sector público">En el sector público</option>
                  <option value="Contratarme en una empresa privada">Contratarme en una empresa privada</option> 
                  <option value="En el negocio de mi familia">En el negocio de mi familia</option>
                  <option value="Negocio propio / Ejercicio libre de la profesión">Negocio propio / Ejercicio libre de la profesión</option></select>
                  </div>
                    <br>

                    <!--  Titulo  -->
                    <div class="row">
                      <div class="mb-3">
                        <h3>30.0 Una vez que hayas concluido tu carrera de TSU ¿Cómo percibirás tu desarrollo profesional en comparación con tus padres?</h3>
                        <p></p>
                      </div>
                  </div>


                    <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>30.1 En prestigio Social</p>
                  <select class="form-control" name="prestiSocial" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="Considerablemente mejor">Considerablemente mejor</option>
                  <option value="Mejor">Mejor</option> 
                  <option value="Similar">Similar.</option>
                  <option value="Inferior">Inferior.</option>
                  <option value="Considerablemente inferior.">Considerablemente inferior.</option></select>
                  </div>
                    <br> 

                    <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>30.2 En lo económico</p>
                  <select class="form-control" name="economico" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="Considerablemente mejor"> Considerablemente mejor</option>
                  <option value="Mejor">Mejor</option> 
                  <option value="Similar">Similar.</option>
                  <option value="Inferior">Inferior.</option>
                  <option value="Considerablemente inferior.">Considerablemente inferior.</option>
                  </select>
                  </div>
                    <br> 

                  <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>31.0 ¿Cuál es tu principal objetivo al concluir tu carrera de TSU? Marca una sola una opción.</p>
                  <select class="form-control" name="concluirTSU" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="Trabajar">Trabajar</option> 
                  <option value="Continuar una Ingeniería en la UT">Continuar una Ingeniería en la UT</option>
                  <option value="Cursar una licenciatura o ingeniería en otra Institución de Educación Superior">Cursar una licenciatura o ingeniería en otra Institución de Educación Superior</option></select>
                  </div>
                    <br> 

            
                  <!--  Titulo  -->
                    <div class="row">
                      <div class="mb-3">
                        <h3>32.0 En comparación con otras opciones de educación superior ¿Cómo piensas que serán tus oportunidades al concluir tu carrera de TSU?</h3>
                        <p></p>
                      </div>
                  </div>


                    <!--  PREGUNTA   -->
                    <div class="mb-3">
                      <p>32.1 Obtener empleo</p>
                  <select class="form-control" name="obtEmpleo" required>
                  <option value="">Seleccione  |▾</option>
                  <option value="Considerablemente mejor">Considerablemente mejor</option> 
                  <option value="Mejor">Mejor</option>
                  <option value="Similar">Similar</option>
                  <option value="">Inferior</option>
                  <option value="Considerablemente inferior">Considerablemente inferior</option></select>
                  </div>
                    <br> 


                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>32.2 Trabajar en aquello para lo que te preparaste</p>
                <select class="form-control" name="trabajaPreparaste" required>
                <option value="">Seleccione  |▾</option>
                <option value="Considerablemente mejor">Considerablemente mejor</option> 
                <option value="Mejor">Mejor</option>
                <option value="Similar">Similar</option>
                <option value="Inferior">Inferior</option>
                <option value="Considerablemente inferior">Considerablemente inferior</option></select>
                </div>
                  <br> 


                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>32.3 Mejor ingreso</p>
                <select class="form-control" name="mejorIngre" required>
                <option value="">Seleccione  |▾</option>
                <option value="Considerablemente mejor">Considerablemente mejor</option> 
                <option value="Mejor">Mejor</option>
                <option value="Similar">Similar</option>
                <option value="Inferior">Inferior</option>
                <option value="Considerablemente inferior">Considerablemente inferior</option>
                </select>
                </div>
                  <br> 


                  <!--  PREGUNTA   -->
                  <div class="mb-3">
                    <p>32.4 Oportunidades de desarrollo personal y profesional</p>
                <select class="form-control" name="desaPersoProfeci" required>
                <option value="">Seleccione  |▾</option>
                <option value="Considerablemente mejor">Considerablemente mejor</option> 
                <option value="Mejor">Mejor</option>
                <option value="Similar">Similar</option>
                <option value="Inferior">Inferior</option>
                <option value="Considerablemente inferior">Considerablemente inferior</option>
                </select>
                </div>
                  <br> 



    
                      <!--  Titulo  -->
                      <div class="row">
                        <div class="mb-3">
                          <h3>33.0 Durante el bachillerato ¿Realizabas alguna de las siguientes actividades para facilitar tu aprendizaje?</h3>
                          <p></p>
                        </div>
                    </div>


                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.01 Buscabas información adicional a la que te proporcionaban tus profesores</p>
                <select class="form-control" name="infoProfesores" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 


                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.02 Relacionabas los nuevos conocimientos con tus experiencias previas</p>
                <select class="form-control" name="experPrevias" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 


                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.03 Organizabas distintos materiales para integrar tus trabajos</p>
                <select class="form-control" name="materItegrar" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 


                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.04 Solicitabas que los maestros te aclararan tus dudas antes de realizar algún trabajo</p>
                <select class="form-control" name="aclararDudas" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 


                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.05 Realizabas ejercicios para reafirmar tu conocimiento</p>
                <select class="form-control" name="reafirConoci" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.06 Te planteabas preguntas a partir de la información que analizabas</p>
                <select class="form-control" name="planteaPreguntas" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.07 Discutías tus puntos de vista con maestros y compañeros</p>
                <select class="form-control" name="puntVista" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.08 Elaborabas esquemas, cuadros sinópticos, mapas conceptuales u otras estrategias para sintetizar la información</p>
                <select class="form-control" name="estrateguias" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.09 Analizabas la eficacia de tus estrategias de estudio</p>
                <select class="form-control" name="estrateEstudio" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.1 Buscabas nuevas formas de estudiar cuando alguna no te daba el resultado que esperabas</p>
                <select class="form-control" name="nuevaforEstudi" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.11 Tomar apuntes en clase</p>
                <select class="form-control" name="apuntes" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.12 Colaborabas con tus compañeros de equipo para cumplir tareas</p>
                <select class="form-control" name="compañeEquipo" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.13 Dirigías a tu equipo para el logro de las actividades académicas</p>
                <select class="form-control" name="actAcademicas" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.14 Tomabas decisiones en busca de mejores resultados en tus actividades académicas</p>
                <select class="form-control" name="mejoresResulta" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.15 Negociabas acuerdos con tus compañeros de grupo</p>
                <select class="form-control" name="acuerCompañeros" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.16 Utilizabas equipo de cómputo para la elaboración de tus tareas</p>
                <select class="form-control" name="compuElaboTareas" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>33.17 Consultabas textos en inglés para apoyarte en la realización de tus tareas</p>
                <select class="form-control" name="textIngles" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 


                <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>34.0 ¿Qué tipo de fuentes de información empleabas en el bachillerato?</h3>
                    <p></p>
                  </div>
              </div>

              <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>34.1 Bibliografía proporcionada por el profesor</p>
                <select class="form-control" name="biblioProfesor" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>34.2 Bibliografía complementaria obtenida en biblioteca</p>
                <select class="form-control" name="bibliograBiblioteca" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>34.3 Buscadores de internet (Google, Yahoo, MSN, etc.)</p>
                <select class="form-control" name="buscaInternet" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>34.4 Sitios y enciclopedias online libres (Wikipedia, Monografías.com, etc.)</p>
                <select class="form-control" name="sitiosOnline" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>34.5 Sitios web de instituciones educativas y revistas especializadas</p>
                <select class="form-control" name="sitiosWeb" required>
                <option value="">Seleccione  |▾</option>
                <option value="Siempre o casi siempre">Siempre o casi siempre</option>
                <option value="Con bastante frecuencia">Con bastante frecuencia</option> 
                <option value="Con poca frecuencia">Con poca frecuencia</option>
                <option value="Casi nunca o nunca">Casi nunca o nunca</option>
                </select>
                </div>
                <br> 

                      <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>35.0 En promedio, ¿Cuántas horas a la semana dedicabas en el bachillerato a la preparación de tus clases y/o trabajos escolares?</p>
                <select class="form-control" name="horasBachillerato" required>
                <option value="">Seleccione  |▾</option>
                <option value="De 1 a 5 horas">De 1 a 5 horas</option>
                <option value="De 6 a 10 horas">De 6 a 10 horas</option> 
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 



                      <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>36.0 ¿Durante el último año del bachillerato, con qué frecuencia realizabas las siguientes actividades?</h3>
                    <p></p>
                  </div>
              </div>


                    <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.01 Convivir con la familia</p>
                <select class="form-control" name="conviviFamilia" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.02 Convivir con amigos</p>
                <select class="form-control" name="conviviAmigos" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.03 Practicar deporte</p>
                <select class="form-control" name="practDeporte" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.04 Trabajar</p>
                <select class="form-control" name="trabaj" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.05 Ver televisión</p>
                <select class="form-control" name="verTv" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.06 Lectura de actualidad (periódicos y revistas)</p>
                <select class="form-control" name="lectActualidad" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.07 Lectura de literatura (novela, cuento, poesía, etc.)</p>
                <select class="form-control" name="lectLiteraria" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.08 Lectura de ocio (historietas, comics, revistas deportivas, de espectáculos, etc</p>
                <select class="form-control" name="lectOcio" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.09 Practicar juegos de video</p>
                <select class="form-control" name="juegVideo" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.1 Usar redes sociales (Facebook, Twitter, Whatsapp, etc.)</p>
                <select class="form-control" name="redSociales" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.11 Navegar y/o conversar por internet</p>
                <select class="form-control" name="navegInternet" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.12 Escuchar música</p>
                <select class="form-control" name="escuchMusica" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 

                <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>36.13 Practicar actividades artísticas</p>
                <select class="form-control" name="actArtistic" required>
                <option value="">Seleccione  |▾</option>
                <option value="Nada">Nada</option>
                <option value="1-3 horas semanales">1-3 horas semanales</option> 
                <option value="4-6 horas semanales">4-6 horas semanales</option>
                <option value="7-10 horas semanales">7-10 horas semanales</option>
                <option value="Más de 10 horas">Más de 10 horas</option>
                </select>
                </div>
                <br> 


                <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>37.1 En el aspecto cultural: ¿Participabas formalmente en alguna de las siguientes actividades cuando estabas en el bachillerato?</h3>
                    <p></p>
                  </div>
              </div>

              <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>37.11 Música</p>
              <select class="form-control" name="music" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                <br>

              <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>37.12 Danza (Baile moderno, folklórico, etc.)</p>
              <select class="form-control" name="danza" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.13 Teatro</p>
              <select class="form-control" name="teatro" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.14 Artes plásticas (Pintura, dibujo, escultura, fotografía, etc.)</p>
              <select class="form-control" name="artePlasticas" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.15 Cine club</p>
              <select class="form-control" name="cineClub" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.16 Círculo de lectura</p>
              <select class="form-control" name="circLectura" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.17 Otra actividad de cultural</p>
              <select class="form-control" name="otraActivi" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>


                                 <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>37.2 En el aspecto deportivo: ¿Participabas formalmente en alguna de las siguientes actividades cuando estabas en el bachillerato?</h3>
                    <p></p>
                  </div>
              </div>

              <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>37.21 Futbol soccer</p>
              <select class="form-control" name="futbolSoccer" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                <br>

                
              <!--  PREGUNTA   -->
                <div class="mb-3">
                  <p>37.22 Futbol rápido y 7</p>
              <select class="form-control" name="futbolRapido" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.23 Basquetbol</p>
              <select class="form-control" name="basquetbol" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.24 Voleibol</p>
              <select class="form-control" name="voleibol" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.25 Atletismo (Carrera, Salto, Lanzamiento, etc.)</p>
              <select class="form-control" name="atletismo" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.26 Ajedrez</p>
              <select class="form-control" name="ajedrez" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.27 Acondicionamiento físico (Pesas, Zumba, Aerobics, Jazz, Pilates, etc.)</p>
              <select class="form-control" name="acondicioFisico" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>

                 <!--  PREGUNTA   -->
                 <div class="mb-3">
                  <p>37.28 Otro deporte ¿Cuál?</p>
              <select class="form-control" name="otroDeporte" required>
              <option value="">Seleccione  |▾</option>
              <option value="Si">Si</option>
              <option value="No">No</option></select>
              </div>
                 <br>


                                     <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>38.0 ¿Durante el último año del bachillerato, con qué frecuencia asistías a los siguientes eventos?</h3>
                    <p></p>
                  </div>
              </div>

              <!--  PREGUNTA   -->
              <div class="mb-3">
                <p>38.01 Cine</p>
            <select class="form-control" name="cineEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.02 Teatro</p>
            <select class="form-control" name="teatroEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.03 Danza</p>
            <select class="form-control" name="danzaEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.04 Exposiciones de pintura	</p>
            <select class="form-control" name="expoPinturaEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.05 Presentación de libros</p>
            <select class="form-control" name="precentaLibros" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.06 Museos</p>
            <select class="form-control" name="museosEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.07 Conciertos de música clásica</p>
            <select class="form-control" name="conciertoMusicaClasica" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.08 Conferencias</p>
            <select class="form-control" name="conferenciaEvento" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.09 Conciertos de música popular (rock, salsa, grupera, etc.)</p>
            <select class="form-control" name="conciertoMusicaPopular" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.10 Ferias patronales o regionales	</p>
            <select class="form-control" name="feriPatronalRegional" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.11 Fiestas o reuniones con amigos</p>
            <select class="form-control" name="fiestaAmigos" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>38.12 Eventos deportivos</p>
            <select class="form-control" name="evenDeportivos" required>
            <option value="">Seleccione  |▾</option>
            <option value="Nada">Nada</option>
            <option value="1-4 veces en el año">1-4 veces en el año</option>
            <option value="5-8 veces en el año">5-8 veces en el año</option>
            <option value="9-12 veces en el año">9-12 veces en el año</option>
            <option value="Más de 12 veces en el año">Más de 12 veces en el año</option></select>
            </div>
               <br>


                                   <!--  Titulo  -->
                <div class="row">
                  <div class="mb-3">
                    <h3>39.0 ¿Alguna vez has radicado fuera…? </h3>
                    <p></p>
                  </div>
              </div>


               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>39.1 De tu comunidad</p>
            <select class="form-control" name="comunidad" required>
            <option value="">Seleccione  |▾</option>
            <option value="Si">Si</option>
            <option value="No">No</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>39.2 Del Estado</p>
            <select class="form-control" name="estado" required>
            <option value="">Seleccione  |▾</option>
            <option value="Si">Si</option>
            <option value="No">No</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>39.3 Del Pais</p>
            <select class="form-control" name="pais" required>
            <option value="">Seleccione  |▾</option>
            <option value="Si">Si</option>
            <option value="No">No</option></select>
            </div>
               <br>


               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>40.1 El motivo principal por el que te mudaste de tu comunidad fue…</p>
            <select class="form-control" name="motivoMudasteComunidad" required>
            <option value="">Seleccione  |▾</option>
            <option value="Familiar">Familiar</option>
            <option value="Laboral">Laboral</option>
            <option value="Escolar">Escolar</option>
            <option value="Ninguna">Ninguno</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>40.1 El motivo principal por el que te mudaste de tu estado fue…</p>
            <select class="form-control" name="motivoMudasteEstado" required>
            <option value="">Seleccione  |▾</option>
            <option value="Familiar">Familiar</option>
            <option value="Laboral">Laboral</option>
            <option value="Escolar">Escolar</option>
            <option value="Ninguna">Ninguno</option></select>
            </div>
               <br>

               <!--  PREGUNTA   -->
               <div class="mb-3">
                <p>40.1 El motivo principal por el que te mudaste de tu pais fue…</p>
            <select class="form-control" name="motivoMudastePais" required>
            <option value="">Seleccione  |▾</option>
            <option value="Familiar">Familiar</option>
            <option value="Laboral">Laboral</option>
            <option value="Escolar">Escolar</option>
            <option value="Ninguna">Ninguno</option></select>
            </div>
               <br>


       
             <div class="col-md-12" style="text-align: center">
                 <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
             </div>
             
</form>

  </body>
  </html>

<?php
$conexion = mysqli_connect('localhost', 'root', '', 'softdev') 
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    

    $consulta = "INSERT INTO usuarios
    (usuario, clave, nombre, apellidos, carrera, grado, grupo, permiso)
    VALUES
    ('$usuario', '$clave', '$nombre','$apellidos','$carrera','$grado','$grupo', '2')";
    

    $resultado=mysqli_query($conexion, $consulta);

    if($resultado == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="InicioAdmin.php";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../InicioAdmin.php";
	      </script>';
   

    mysqli_close($conexion);
}

?>
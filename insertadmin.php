<?php
$conexion = mysqli_connect('localhost', 'root', '', 'softdev') 
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $usuario = $_POST['usuarioo'];
    $clave = $_POST['clavee'];
    

    $consulta = "INSERT INTO usuarios
    (usuario, clave, permiso)
    VALUES
    ('$usuario', '$clave', '1')";
    

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
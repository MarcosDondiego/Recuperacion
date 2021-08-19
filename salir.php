<?php 
session_start();

if(isset($_SESSION['usuario'])){
        
}else{
    header ('location: login.php');
      
} 


session_destroy();

echo '<script language= "javascript">
alert("Cerrando sesión");
window.location.href="login.php";
</script>'
?>
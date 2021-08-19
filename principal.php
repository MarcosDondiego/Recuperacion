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
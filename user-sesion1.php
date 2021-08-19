<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'frontend/usuario-vista.php';
    }else{
        header ('location: login.php'); 
    } 
        
?> 
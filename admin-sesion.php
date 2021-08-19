<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'panel.php';
    }else{
        header ('location: login.php');
        
    } 
        
?> 
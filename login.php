<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }
    

    $error = ''; 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        
        
        try{ //Conexion con la BD
            $conexion = new PDO('mysql:host=localhost;dbname=softdev', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));

        
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;

            if($resultado['permiso']==1){

                header('location: admin-sesion.php');
            }

            else{
                switch($resultado['grado']){
                    case 1:
                        //1
                        header('location: prueba_preg.php');
                        break;
                        case 2:
                            header('location: prueba_preg.php');
                            break;
                            case 3:
                                header('location: prueba_preg.php');
                                break;
                                case 4:
                                    //2
                                    header('location: frontend/usuario2-vista.php');
                                    break;
                                    case 5:
                                        header('location: frontend/usuario2-vista.php');
                                        break;
                                        case 6:
                                            header('location: frontend/usuario2-vista.php');
                                            break;
                                            case 7:
                                                //3
                                                header('location: frontend/usuario3-vista.php');
                                                break;
                                                case 8:
                                                    header('location: frontend/usuario3-vista.php');
                                                    break;
                                                    case 9:
                                                        header('location: frontend/usuario3-vista.php');
                                                        break;
                                                        case 10:
                                                            //4
                                                            break;
                                                            case 11:
                                                                //4
                                                                break;
                }
                
            }

        }else{
            echo "<script>
                alert('No existe este usuario');
                window.location= 'login.php'
                </script>";
            //$error .= '<i>Este usuario no existe</i>';
        }
    }//Server
    
require 'frontend/login-vista.php'; 


?>
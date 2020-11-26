<?php
include('conexion.php');


session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
  if (empty($_POST['usuario']) || empty($_POST['password'])) {
    $error = "Usuario o clave inválida";
  }
    else {
    // Define $username y $password
    $username=$_POST['usuario'];
    $password=$_POST['password'];
    // Estableciendo la conexion a la base de datos
    include("conexion.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
    
    
    // Para proteger de Inyecciones SQL 
    $username    = mysqli_real_escape_string($con,(strip_tags($username,ENT_QUOTES)));
    $password =  sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php
    
    $sql = "SELECT usuario, password FROM login WHERE usuario = '" . $username . "' and password='".$password."';";
    $query=mysqli_query($con,$sql);
    $counter=mysqli_num_rows($query);
    if ($counter==1){
        $_SESSION['login_user_sys']=$username; // Iniciando la sesion
        header("location: profile.php"); // Redireccionando a la pagina profile.php   
    
      } else {
        $error = "El correo electrónico o la contraseña es inválida.";	
      }
    }
  }
?>

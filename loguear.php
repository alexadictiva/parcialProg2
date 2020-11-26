<?php

  // Estableciendo la conexion a la base de datos
  include("conexion.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
  $error=''; // Variable para almacenar el mensaje de error
  if (!isset($_POST['usuario']) || !isset($_POST['password'])) { // Si no tengo un usuario o una contraseña devuelvo mensaje de error
    $error = "Usuario o clave inválida";
    echo $error;
  } else {
    // Define $username y $password
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    // Para proteger de Inyecciones SQL
    $username  = mysqli_real_escape_string($conexion,(strip_tags($_POST['usuario'], ENT_QUOTES)));
    $password =  sha1($password); // Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php

    $sql = "SELECT * FROM usuarios WHERE usuario = '" . $username . "' AND `password` = '" . $password . "'";
    $query = mysqli_query($conexion, $sql);
    $counter = mysqli_num_rows($query);
    if ($counter == 1){
      session_start(); // Iniciando sesion
      $user = mysqli_fetch_assoc($query); // Obtengo los datos del usuario logueado
      $_SESSION['username'] = $user['usuario']; // Cargo el username en la variable de sesión
      $_SESSION['name'] = $user['name']; // Cargo el nombre en la variable de sesión
      $_SESSION['dni'] = $user['dni']; // Cargo el dni en la variable de sesión
      $_SESSION['mail'] = $user['mail']; // Cargo el mail en la variable de sesión
      header("location: index.php"); // Redireccionando a la pagina profile.php
    } else {
      $error = "El correo electrónico o la contraseña es inválida.";
      echo $error;
    }
  }
?>

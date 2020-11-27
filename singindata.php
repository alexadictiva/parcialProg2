<?php
	include('conexion.php');

	if (isset($_POST['register'])) {
		$usuario = trim($_POST['usuario']);
		$name = trim($_POST['name']);
		$dni = trim($_POST['dni']);
		$mail = trim($_POST['mail']);
		$password = sha1(trim($_POST['password'])); // encripto la contraseña mediante sha1() antes de guardar
    $consulta = "INSERT INTO `usuarios`( `usuario`, `name`, `dni`, `mail`, `password`) VALUES ('$usuario','$name','$dni','$mail','$password')";
    
		$resultado = mysqli_query($conexion, $consulta);
		if ($resultado) { ?>
			<!DOCTYPE html>
        <html lang="es">
          <head>
            <meta charset="utf-8" />
            <meta
              name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no"
            />
            <link
              rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
              crossorigin="anonymous"
            />
            <link
              rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
              integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
              crossorigin="anonymous"
            />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/stylelogin.css" />
            <title>Adoregerie</title>
          </head>
          <body>
            <header class="pb-4">
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#"
                  ><img src="img/logo.png" style="height: 45px" alt="logo"
                /></a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#index.php">Inicio </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link modalito"
                        data-toggle="modal"
                        data-target="#staticBackdrop"
                        >Conócenos</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="#footer">Contactanos</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </header>
            <main class="container-singing container" style="margin-top:70px; height:80vh">
              <h1>Te has registrado exitosamente. Has click <a href="indexlogin.php">aqui</a> para iniciar sesión.</h1>
            </main>
            <footer class="pt-4" id="footer">
              <section class="card footer-card bg-dark">
                <article class="card-body">
                  <h5 class="card-title">Info sobre ADOORE...</h5>
                  <div class="row">
                    <div class="rrss col-12 col-lg-2">
                      <a href="/"><i class="fab fa-facebook-f"></i> Facebook</a>
                    </div>
                    <div class="rrss col-12 col-lg-2">
                      <a href="/"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                    <div class="rrss col-12 col-lg-2">
                      <a href="/"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    </div>
                    <div class="col-12 col-lg-6">
                      <p class="card-text text-center">
                        &copy; | Todos los Derechos Reservados.
                      </p>
                    </div>
                  </div>
                </article>
              </section>
            </footer>

            <script
              src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
              integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
              crossorigin="anonymous"
            ></script>
            <script
              src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
              crossorigin="anonymous"
            ></script>
          </body>
        </html>

		<?php } else { ?>
			<h3> Ha ocurrido un error. </h3>
	<?php }} ?>
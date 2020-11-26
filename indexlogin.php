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
              <a class="nav-link" href="index.html">Inicio </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link modalito"
                data-toggle="modal"
                data-target="#staticBackdrop"
                >Conócenos</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Productos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="dropdown-item"><a href="#dama">Damas</a></li>

                <li class="dropdown-item">
                  <a href="#caballero">Caballeros</a>
                </li>

                <li class="dropdown-item"><a href="#nino">Niños</a></li>
                <li class="dropdown-item"><a href="#catalogo">Catálogos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contactanos</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="container pt-4 pb-4">
      <section class="login">
        <article class="login__container">
          <h2 class="login__container-title">Iniciar Sesión</h2>
          
          <form action="post"  action="loguear.php" class="login__container--form">
            <input type="text" placeholder="Usuario" class="input" name="usuario"/>
            <input type="password" placeholder="Contraseña" class="input" name="password"/>
            <button class="button" type="submit" name="initial">Iniciar Sesión</button>
            <div class="login__container--remember-me">
              <label for="cbox1">
                <input
                  type="checkbox"
                  name="cbox1"
                  id="cbox1"
                  value="checkbox"
                />
                Recuerdame</label
              >
              <a href="/">Olvidé mi contraseña</a>
            </div>
          </form>
          <section class="login__container--social-media">
            <div>
              <p>
                <a href="/"
                  ><i class="fab fa-google"></i> Inicia Sesión con Google</a
                >
              </p>
            </div>
            <div>
              <p>
                <a href="/"
                  ><i class="fab fa-twitter"></i> Inicia Sesión con Twitter</a
                >
              </p>
            </div>
          </section>
          <p class="login__container--register">
            No tienes ninguna cuenta. <a href="indexsingin.php"> Registrate</a>
          </p>
        </article>
      </section>
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

<?php session_start(); // Iniciando sesion ?>
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
    <title>Adoore</title>
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
              <a class="nav-link" href="#">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="indexabout.php" target="blank"
                >Conócenos
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contactanos</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link">
              <?php if (isset($_SESSION['username'])) { ?>
                HOLA, <?php echo $_SESSION['name']; ?>
              <?php } else { ?>

              </a>
              
              <a
                class="nav-link btn btn-success my-2 my-sm-0"
                href="indexlogin.php"
                target="blank"
                >Ingresar / Registrarse</a
              >
              <?php } ?>
            </li>
          </ul>
          <form class="form-inline">
            <input
              class="form-control mr-sm-2"
              type="search"
              aria-label="Search"
            />
            <button class="btn btn-success my-2 my-sm-0" type="submit">
              BUSCAR
            </button>
          </form>
        </div>
      </nav>
    </header>
    <main class="container pt-4 pb-4">
      <section class="carousel mt-4 mb-4">
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleCaptions"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="img/oferta1.jpg"
                class="d-block w-100"
                alt="Oferta mallas de verano 2021"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Mallas Marcela Koury Catálogo SPRING-SUMMER 2021</h5>
                <p>Flores, Colores, y Mallas</p>
              </div>
            </div>

            <div class="carousel-item">
              <img
                src="img/oferta2.jpg"
                class="d-block w-100"
                alt="Oferta mallas de verano 2021"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Mallas Andressa Catálogo 2021</h5>
                <p>Animal Print, Elegancia, solo Andressa te lo dá.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="img/oferta3.jpg"
                class="d-block w-100"
                alt="Oferta mallas de verano 2021"
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Lody Men</h5>
                <p>Porque los chicos tambien merecen su espacio..</p>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Atrás</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Adelante</span>
          </a>
        </div>
      </section>
      <section class="accion row pt-4">
        <article class="col-md-6 pt-4">
          <h1 class="pt-4">
            Compra y Vende productos a través de nuestro sitio web!!
          </h1>
          <p class="accion-descripcion pt-2">
            Hermosos conjuntos de ropa íntima de marcas reconocidas en toda la
            Argentina...
          </p>
          <div class="pt-4">
            <a href="indexsingin.html" class="btn btn-success"
              >Empieza a vender</a
            >
            <a href="indexlogin.html" class="btn btn-success">Haz tu pedido</a>
          </div>
          <p class="info-log">Registro Gratuito | Compra mínima 6 prendas</p>
        </article>

        <article class="col-md-6">
          <img src="img/coramina.jpg" alt="Imagen de compra online en Adoore" />
        </article>
      </section>

      <section class="articles pt-4 pb-4" id="productos">
        <h2>Estos son los Productos que puedes conseguir</h2>
        <!-- empieza -->
        <!-- producto 1 -->
        <h3 class="acordeon__title mt-4">Andressa</h3>
        <article class="acordeon mb-4">
          <div class="acordeon__container">
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosandressa/5589.jpeg"
                alt="Conjunto 5589"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5589</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft y Puntilla
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosandressa/5655.jpeg"
                alt="Conjunto 5655"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5655</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft Falso Aro
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosandressa/5683.jpeg"
                alt="Conjunto 5683"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5683</p>
                  <p class="acordeon-item__details--subtitle">
                    Bralette de Lycra
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosandressa/5700.jpeg"
                alt="Conjunto 5700"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5700</p>
                  <p class="acordeon-item__details--subtitle">
                    Body Manga Corta
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosandressa/5703.jpeg"
                alt="Conjunto 5703"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5703</p>
                  <p class="acordeon-item__details--subtitle">Body Tasa Soft</p>
                </div>
              </div>
            </aside>
          </div>
        </article>
        <!-- producto 2 -->
        <h3 class="acordeon__title mt-4">Marcela Koury</h3>
        <article class="acordeon mb-4">
          <div class="acordeon__container">
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosmk/5502.jpeg"
                alt="Conjunto 5502"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5502</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft y Puntilla
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosmk/5503.jpeg"
                alt="Conjunto 5503"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5503</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft Falso Aro
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosmk/5510.jpeg"
                alt="Conjunto 5510"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5510</p>
                  <p class="acordeon-item__details--subtitle">Body en Encaje</p>
                </div>
              </div>
            </aside>

            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosmk/5513.jpeg"
                alt="Conjunto 5513"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5513</p>
                  <p class="acordeon-item__details--subtitle">
                    Body Manga Corta
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntosmk/5514.jpeg"
                alt="Conjunto 5514"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5514</p>
                  <p class="acordeon-item__details--subtitle">Body Tasa Soft</p>
                </div>
              </div>
            </aside>
          </div>
        </article>
        <!-- producto3 -->
        <h3 class="acordeon__title mt-4">Lody Corsetería</h3>
        <article class="acordeon mb-4">
          <div class="acordeon__container">
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslody/5172.jpeg"
                alt="Conjunto 5172"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5172</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft y Puntilla
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslody/5222.jpeg"
                alt="Conjunto 5222"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5222</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft Falso Aro
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslody/5236.jpeg"
                alt="Conjunto 5236"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5236</p>
                  <p class="acordeon-item__details--subtitle">
                    Bralette de Lycra
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslody/5241.jpeg"
                alt="Conjunto 5241"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5241</p>
                  <p class="acordeon-item__details--subtitle">
                    Body Manga Corta
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslody/5249.jpeg"
                alt="Conjunto 5249"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 5249</p>
                  <p class="acordeon-item__details--subtitle">Body Tasa Soft</p>
                </div>
              </div>
            </aside>
          </div>
        </article>
        <!-- producto4 -->
        <h3 class="acordeon__title mt-4">Lody Men</h3>
        <article class="acordeon mb-4">
          <div class="acordeon__container">
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslodymen/896.jpeg"
                alt="Conjunto 896"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 896</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft y Puntilla
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslodymen/898.jpeg"
                alt="Conjunto 898"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 898</p>
                  <p class="acordeon-item__details--subtitle">
                    Tasa Soft Falso Aro
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslodymen/899.jpeg"
                alt="Conjunto 899"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 899</p>
                  <p class="acordeon-item__details--subtitle">
                    Bralette de Lycra
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslodymen/901.jpeg"
                alt="Conjunto 901"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 901</p>
                  <p class="acordeon-item__details--subtitle">
                    Body Manga Corta
                  </p>
                </div>
              </div>
            </aside>
            <aside class="acordeon-item">
              <img
                class="acordeon-item__img"
                src="img/conjuntoslodymen/903.jpeg"
                alt="Conjunto 903"
              />
              <div class="loquesea">
                <div class="acordeon-item__details">
                  <p class="acordeon-item__details--title">Artículo 903</p>
                  <p class="acordeon-item__details--subtitle">Body Tasa Soft</p>
                </div>
              </div>
            </aside>
          </div>
        </article>

        <!-- termina -->
      </section>
      <section class="manual mb-4 pb-4">
        <h2>Cómo Funciona?</h2>
        <article class="row">
          <aside class="manual-descripcion text-center col-lg-3">
            <img src="img/manual/manual1.svg" alt="" />
            <h4>Tu tienda online</h4>
            <p>Ingresa a nuestro portal web e inicia sesión o registrate</p>
          </aside>
          <aside class="manual-descripcion text-center col-lg-3">
            <img src="img/manual/manual2.svg" style="height: 180px" alt="" />
            <h4>Haz un pedido</h4>
            <p>
              Chusmea todos los productos que quieras y necesites y agregalos al
              carrito.
            </p>
          </aside>
          <aside class="manual-descripcion text-center col-lg-3">
            <img src="img/manual/manual3.svg" alt="" />
            <h4>Recepción de tu pedido</h4>
            <p>
              Luego de que envíes, nosotros recibimos tu pedido y empezamos a
              armar
            </p>
          </aside>
          <aside class="manual-descripcion text-center col-lg-3">
            <img src="img/manual/manual4.svg" alt="" />
            <h4>Tu producto</h4>
            <p>
              Cuando está todo listo te contactamos para que lo retires, o mejor
              aún, nosotros te lo enviamos hasta tu domicialio.
            </p>
          </aside>
        </article>
        <article class="lineas-ocultas row align-items-center">
          <aside class="linea-oculta text-center col-lg-1"><a>1</a></aside>
          <div class="line text-center col-lg-3"></div>
          <aside class="linea-oculta text-center col-lg-1"><a>2</a></aside>
          <div class="line text-center col-lg-2"></div>
          <aside class="linea-oculta text-center col-lg-1"><a>3</a></aside>
          <div class="line text-center col-lg-3"></div>
          <aside class="linea-oculta text-center col-lg-1"><a>4</a></aside>
        </article>
      </section>
      <section class="mercado mt-4 pt-4">
        <article class="row">
          <h2 class="col-12 mt-4 pt-4 pb-4">
            Trabajamos con gran variedad de marcas...
          </h2>

          <aside class="col-lg-2 mb-4">
            <img src="img/marcas/andressa.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/bk.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/mk.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/sigry.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/tiento.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/belen.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2 mb-4">
            <img src="img/marcas/coramina.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/kaury.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/crislatina.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/lara.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/xy.jpg" alt="marca andressa" />
          </aside>
          <aside class="col-lg-2">
            <img src="img/marcas/maia.jpg" alt="marca andressa" />
          </aside>
           <aside class="col-lg-2">
            <img src="img/marcas/intimates.jpg" alt="marca andressa" />
          </aside>
           <aside class="col-lg-2">
            <img src="img/marcas/vintage.jpg" alt="marca andressa" />
          </aside>
           <aside class="col-lg-2">
            <img src="img/marcas/natubel.jpg" alt="marca andressa" />
          </aside>
           <aside class="col-lg-2">
            <img src="img/marcas/lody.jpg" alt="marca andressa" />
          </aside>
           <aside class="col-lg-2">
            <img src="img/marcas/lodymen.jpg" alt="marca andressa" />
          </aside>
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

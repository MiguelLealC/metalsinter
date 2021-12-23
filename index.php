<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Metal Sinter</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="40">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">
            <img src="./images/img/Logo-MS.png" alt="" width="150" height="70">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./nuestra-empresa.html">Nuestra Empresa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contactanos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="./Sinterizados.html">Sinterizados</a></li>
                  <li><a class="dropdown-item" href="./cauchos.html">Cauchos</a></li>
                  <li><a class="dropdown-item" href="./Repuestos.html">Repuestos</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    

      <main id="main">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-pause="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./images/img/metalicos_4.png" class="d-block w-100" alt="metalicos">
            </div>
            <div class="carousel-item">
              <img src="./images/img/Logo-MS.png" class="d-block w-100" alt="logo">
            </div>
            <div class="carousel-item">
              <img src="./images/img/colage_final.png" class="d-block w-100" alt="colage">
            </div>
            <div class="overlay">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6 offset-md-6 text-center text-md-right">
                    <h1>Metal Sinter</h1>
                    <p class="d-none d-md-block">Nuestra empresa lleva mas de 15 años en el mercado nacional, fabricando piezas y repuestos para la industria de motocicletas entre otros. 
                      Elaborando productos de alta calidad con cauchos vulcanizados y piezas mecanizadas.</p>
                    <a href="./nuestra-empresa.html" class="btn btn-outline-light" data-toogle="modal">Conoce más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <section id="productos">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-12 text-uppercase text-center">
              <small>Conoce nuestros</small>
              <h2>productos</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4 col-12 col-md-6 col-lg-4">
            <div class="card">
              <h4 class="card-title">Cauchos</h4>
              <img class="card-img-top" src="./images/img/cauchos_prensa.jpg" alt="cauchos">
              <div class="card-body">
                <a href="./cauchos.html" class="btn btn-primary">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-4 col-12 col-md-6 col-lg-4">
            <div class="card">
              <h4 class="card-title">Sinterizados</h4>
              <img class="card-img-top" src="./images/img/especiales.jpg" alt="sinterizado">
              <div class="card-body">
                <a href="./Sinterizados.html" class="btn btn-primary">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-4 col-12 col-md-6 col-lg-4">
            <div class="card">
              <h4 class="card-title">Repuestos</h4>
              <img class="card-img-top" src="./images/img/productos.jpg" alt="repuestos">
              <div class="card-body">
                <a href="./Repuestos.html" class="btn btn-primary">Mas informacion</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ubicacion">
        <div class="row">
          <div class="col-md-4 col-lg-12 text-uppercase text-center">
            <h3>Donde nos encuentras</h3>
          </div>
        </div>
        <div class="row">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.2520835735942!2d-74.11242167084863!3d4.592526436590653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f992606c9a7b5%3A0x9af1bc3153ebb6d0!2sCl.%2026%20Sur%20%233143%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1639011648048!5m2!1ses-419!2sco" width="80vw" height="400vh" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </section>

      <footer id="footer">
        <div class="container">
          <div class="row text-uppercase text-center">
            <h4>Metal Sinter&trade;</h4>
            <h5>Calle 26 sur No. 29b - 25</h5>
            <p>Tel: (601)4070324/4070241 / 3158812106</p>
            <p>email: info@metalsintermm.com</p>
            <p>Bogotá - Colombia</p>
          </div>
        </div>
      </footer>

      <a href="https://wa.me/573158812106" class="whatsapp" target="_blank"><img src="./images/whats.png" alt=""> </a

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
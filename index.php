<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="icono.png" rel="shortcut icon" type="image/png"/>
    <title>Ultraxona</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style media="screen ">
      body{
        width: 100%;
        background-image: url("back.png");
        background-size: 20%;
      }
    </style>
  </head>
  <body>
    <!--
    navegador:
               categorias de generos.
               buscador por el genero.
               buscador gloabal.
               nosotros.
               logo.
    cuerpo: liks a los ultimos samples.
            los mas destacados en su categoria.

    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <a class="navbar-brand" href="#"><img src="logo.png" height="50px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto justify-content-center ">
          <li class="nav-item">
            <a class="nav-link text-center" href="#">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" href="#">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-center" href="#" >Trap</a>
              <a class="dropdown-item text-center" href="#">Dubstep</a>
              <a class="dropdown-item text-center" href="#">Riddim</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-1" type="search" placeholder="Buscar.." aria-label="Search" style="height: 40px;">
          <button class="btn btn-light my-2 my-sm-0" type="submit" style="height: 40px;"><i class="material-icons">search</i></button>
        </form>
      </div>
    </nav>
    <section class="container" style="width: 100%; min-height: 500px; margin-top: 10px;">
      <div class="text-center bg-white border" style="width: 95%;">
        <h4 class=""><u>nuestra lista</u></h4>
        <div class="row d-flex justify-content-center">

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              15.00$ <br>
              Trap
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              50.00$ <br>
              Dubstep
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="284175-P6O22K-201.jpg" alt="" width="100px;"> <br>
              30.00$ <br>
              Riddim
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              22.00$ <br>
              Riddim
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              12.00$ <br>
              Riddim
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="284175-P6O22K-201.jpg" alt="" width="100px;"> <br>
              56.60$ <br>
              Trap
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              6.05$ <br>
              Dubstep
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="284175-P6O22K-201.jpg" alt="" width="100px;"> <br>
              0.00$ <br>
              Riddim
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="91107-OJVYC5-6.jpg" alt="" width="100px;"> <br>
              0.00$ <br>
              Trap
            </div>
          </div>

          <div class="card col-md-2" style="margin: 5px;">
            <div class="card-body">
              <img src="284175-P6O22K-201.jpg" alt="" width="100px;"> <br>
              0.00$ <br>
              Dubstep
            </div>
          </div>
        </div>
      </div>


    </section>
    <footer class="bg-secondary" style="min-height: 200px;">
      <div class="">
        <a href="https://www.freepik.es/fotos-vectores-gratis/musica" class="text-white">Vector de música creado por freepik - www.freepik.es</a><br>
        <a href="https://www.freepik.es/fotos-vectores-gratis/fondo" class="text-white">Vector de fondo creado por freepik - www.freepik.es</a>
      </div>
    </footer>
  </body>
</html>

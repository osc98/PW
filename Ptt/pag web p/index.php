<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/own.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Vulnex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="record.html">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="password.html">Contraseña</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
    </ul>
  </div>
</nav>

<h1 style="margin-left: 10%; margin-top: 15px;">Encuestas Vulnex</h1> <br/>
<div class="container" style="background: rgba(200,200,200,0.7); width:30%">
 <div class="col-md-12">
  <div class="row mt-2">

    <div class="form-group" style="width:100%;">
      <label class="col-form-label col-form-label-lg" for="inputLarge">Ingrese el código de la encuesta</label>
      <input class="form-control form-control-lg" type="text" placeholder="Código" id="inputLarge">
      <button type="submit" class="btn btn-aqua" style="float: right; margin-top: 10px;">Enviar</button>
    </div>


  </div>
 </div>
</div>

<div class="container" style="background: rgba(200,200,200,0.7); width:30%">
 <div class="col-md-12">
  <div class="row mt-5">

    <div class="form-group" style="width:100%;">
      <label class="col-form-label col-form-label-lg">Mostrar encuestras Vulnex disponibles</label>
      <button type="submit" class="btn btn-own" style="float: right; margin-top: 10px;">Mostrar</button>
    </div>


  </div>
 </div>
</div>
  </body>
</html>

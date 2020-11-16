<?php
include 'menuvar.php';
?>
<!---->
<div class="container mt-1" style="background: rgba(200,200,200);">
<div class="row renglon">
  <div class="col-md-12">
    <form name="fomrularioregistro" id="formurecord"  method="post" action="registrarUsuario.php">
    <div class="form-group">
      <div class="row">
      <label class="col-md-2 bg-dark text-white" for="nombre">Nombre</label>
      <div class="col-md-10">
      <input type="name" class="form-control" id="nombre" name="nombre" aria-describedby="info" placeholder="Nombre">
     </div> 
    </div>
    <div class="row">
      <label class="col-md-2 bg-dark text-white" for="apellidos">Apellidos</label>
      <div class="col-md-10">
      <input type="name" class="form-control" id="apellidos" name="apellidos" aria-describedby="info" placeholder="Apellidos">
     </div> 
    </div>
      <div class="row">
      <label class="col-md-2 bg-dark text-white">Fecha de nacimiento</label>
      <div class="col-md-10">
        <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
      </div>
    </div>
      <div class="row">
      <label class="col-md-2 bg-dark text-white" for="email">Email address</label>
      <div class="col-md-10">
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
     </div> 
    </div>
    
    <div class="row">
  <div class="col-auto mr-auto"></div>
  <div class="col-auto">
    <button type="submit" class="btn btn-info ">Registro</button>
  </div>
</div>

</form>
  </div>
    </div>
    </div>

<!---->
</body>
</html>

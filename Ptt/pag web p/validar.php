<?php
  session_start();

$conexion = mysqli_connect("localhost:3307","root","","encuestas");

if($conexion){

  $cad = "SELECT * FROM usuario WHERE Email='".$_POST['email']."' and Password='".$_POST['password']."'";

  #"' and Password=password('".$_POST['password']."')";
  $bloque = mysqli_query($conexion, $cad);

  mysqli_close($conexion);
  if (mysqli_num_rows($bloque)==1) {
    $registro=mysqli_fetch_object($bloque);
    $_SESSION['nombre']=$registro -> Nombre.' '.$registro -> Apellidos; #guardamos las variables nombre y apellidos en el archivo de sesion temporal
    header("location: admin/home.php");
  } else {
    header("location: login.html?m=1");
  }

} else {
  echo "Error de conexion";
}

 ?>

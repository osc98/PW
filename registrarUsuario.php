<?php


 include("servicios/class.phpmailer.php");
 include("servicios/class.smtp.php");
 $conexion=mysqli_connect("localhost", "root", "","encuestas");
 $mensaje='';
 if($conexion){
  echo "existe";
     $clave="";
     $letras = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
     for ($i=0; $i<8; $i++) {
       $clave.=$letras[rand()%strlen($letras)];
     }
   }
   else{
     echo "no existe Conexion con BD";
   }

$mail = new PHPMailer();
$mail->IsSMTP();
    $mail->Host="smtp.gmail.com"; //mail.google
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Port = 465;     // set the SMTP port for the GMAIL server
    $mail->SMTPDebug  = 1;  // enables SMTP debug information (for testing)
                              // 1 = errors and messages
                              // 2 = messages only
    $mail->SMTPAuth = true;   //enable SMTP authentication

    $mail->Username =   "17030642@itcelaya.edu.mx"; // SMTP account username
    $mail->Password = "Holaoscar1";  // SMTP account password

    $mail->From="";
    $mail->FromName="";
    $mail->Subject = "Registro completo";
    $mail->MsgHTML("<h1>BIENVENIDO ".$_POST['nombre']." ".$_POST['apellidos']."</h1><h2> tu clave de acceso es : ".$clave."</h2>");
    $mail->AddAddress($_POST['email']);
    $bloque=mysqli_query($conexion, "select * from usuario where Email='".$_POST['email']."';");
    /*if($bloque){
      var_dump ($bloque); // checar bloque
    }*/
    if(mysqli_num_rows($bloque)==0){
            if (!$mail->Send()){
            echo  "Error: " . $mail->ErrorInfo;
            }
            else {
             $cad = "INSERT INTO `usuario`( `Nombre`, `Apellidos`, `Email`, `Password`) VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['email']."', PASSWORD('".$clave."'));";
             //echo $cad; //checar cad
             mysqli_query($conexion, $cad);

               header("location: record.php?m=1");
               echo "<script>
                alert('Correo registrado se le envio su password cheque su correo);
                window.location= 'record.php' </script>";
           }
          }
      else {
             
             header("Refresh: 10;  URL=record.php?m=2");
             echo "<script>
                alert('Correo ya registrado);
                window.location= 'record.php'
    </script>";
           }


           function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }


 ?>

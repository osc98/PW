<?php


 include("servicios/class.phpmailer.php");
 include("servicios/class.smtp.php");
 $conexion=mysqli_connect("localhost:3307", "root", '','encuestas');
 if($conexion){
     $clave="";
     $letras = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
     for ($i=0; $i<8; $i++) {
       $clave.=$letras[rand()%strlen($letras)];
     }
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

    $mail->Username =   "17030247@itcelaya.edu.mx"; // SMTP account username
    $mail->Password = "mloikju";  // SMTP account password

    $mail->From="";
    $mail->FromName="";
    $mail->Subject = "Registro completo";
    $mail->MsgHTML("<h1>ようこそ".$_POST['name']." ".$_POST['lastname']."様</h1><h2> 新パスワード : ".$clave."</h2>");
    $mail->AddAddress($_POST['email']);
    //$mail->AddAddress("admin@admin.com");
    if (!$mail->Send())
          echo  "Error: " . $mail->ErrorInfo;
    else {
      $bloque=mysqli_query($conexion, "select * from usuario where Email='".$_POST['email']."';");


           if(mysqli_num_rows($bloque)==0){
             $cad = "insert into usuario set Nombre='".$_POST['name']."', Apellidos='".$_POST['lastname']."', Email='".$_POST['email']."', Password=password('".$clave."')";
             mysqli_query($conexion, $cad);

               header("location: record.html?m=1");
           }else {
             header("location: record.html?m=2");
           }

}



 ?>

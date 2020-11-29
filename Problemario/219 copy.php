<?php
$contador=0;
$arregloMUL=array();/*
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $u);
fscanf(STDIN, "%s", $p);
fscanf(STDIN, "%s", $bd);*/
//$cone=mysqli_connect("localhost","root","","servicios");
//$cone=mysqli_connect($s,$u,$p,$bd);

try{
    $DBcon = new PDO("mysql:host=localhost;dbname=servicios",'root','');
    //$DBcon = new PDO("mysql:host=$s;dbname=$bd",$u,$p);
    $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   }catch(PDOException $ex){
    
    die($ex->getMessage());
   }

   //$query ="show create table  facturas";
   $query ="describe  facturas";
   $stmt = $DBcon->prepare($query);
    $stmt->execute(); 
    $userData = array();

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
      $userData['AllUsers'][] = $row;
 
}
$expected = array_filter($userData, function ($var) use ($ID) {
    return ($var['ID'] == $ID);
}); 
echo json_encode($userData) 

?>
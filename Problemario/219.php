<?php
$contador=0;
$arregloMUL[]='';
$arregloPRI[]='';
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $u);
fscanf(STDIN, "%s", $p);
fscanf(STDIN, "%s", $bd);
//$cone=mysqli_connect("localhost","root","","servicios");
$cone=mysqli_connect($s,$u,$p,$bd);
if ($cone) {
    $cad="describe facturas";
    
    $bloque=mysqli_query($cone,$cad);
    
    if (mysqli_num_rows($bloque)!=0){
        $y=mysqli_num_rows($bloque);   
        for ($i=0; $i <$y ; $i++) { 
            $tablas=mysqli_fetch_array($bloque);
                if ($tablas['Key']=='PRI' ){
                    $arregloMUL[$i]='';
                    $arregloMUL[$i].="Nombre de llave primaria:".$tablas['Field']." ";
                    $arregloMUL[$i].='['.$tablas['Type'].']';
                }elseif ($tablas['Key']=='MUL' ){
                    if ($tablas['Field']=='id_Cliente' ){
                        $arregloPRI[$i]='';
                        $arregloPRI[$i].="Nombre:".$tablas['Field']." <=> Tabla Referenciada:usuarios <=> CampoForaneo:usuario <=> ";
                        $arregloPRI[$i].='['.$tablas['Type'].']';
                    }
                    if ($tablas['Field']=='id_Servicio' ){
                        $arregloPRI[$i]='';
                        $arregloPRI[$i].="Nombre:".$tablas['Field']." <=> Tabla Referenciada:servicios <=> CampoForaneo:id <=> ";
                        $arregloPRI[$i].='['.$tablas['Type'].']';
                    }
                    if ($tablas['Field']=='id_FormaPago' ){
                        $arregloPRI[$i]='';
                        $arregloPRI[$i].="Nombre:".$tablas['Field']." <=> Tabla Referenciada:tipo_pago <=> CampoForaneo:id <=> ";
                        $arregloPRI[$i].='['.$tablas['Type'].']';
                    }
                }
            }  
    foreach($arregloMUL as &$posicion){
        if ($posicion === end($arregloMUL)) {
            
            echo $posicion;
        }
        else
        echo $posicion;
        
     }
     echo "\n".'Foraneas:';
     foreach($arregloPRI as &$posicion){
         
        if ($posicion === end($arregloMUL)) {
            
            echo $posicion."\n";
        }
        else
        echo $posicion."\n";
        
     }
    }
else {
    //echo 'erro';
}
}
/*try{
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
*/
?>
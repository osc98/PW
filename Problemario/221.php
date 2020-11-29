<?php
$contador=0;
$arreglo[]='';
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $u);
fscanf(STDIN, "%s", $p);
fscanf(STDIN, "%s", $bd);
//$cone=mysqli_connect("localhost","root","","servicios");
$cone=mysqli_connect($s,$u,$p,$bd);
if ($cone) {
    $cad="SELECT s.nombre, count(f.id_Servicio) as servicio, sum(round (f.Monto,2)) as monto from facturas f 
    JOIN servicios s on s.id=f.id_Servicio
    WHERE s.id=f.id_Servicio
    GROUP by 1";
    
    $bloque=mysqli_query($cone,$cad);
    
    if (mysqli_num_rows($bloque)!=0){
        $y=mysqli_num_rows($bloque);   
        for ($i=0; $i <$y ; $i++) { 
            $tablas=mysqli_fetch_array($bloque);
            $arreglo[$i]='';
            $arreglo[$i].=$tablas['nombre'].":";
            $arreglo[$i].=$tablas['servicio'].":";
            $arreglo[$i].='$'.$tablas['monto'];
            }    
    foreach($arreglo as &$posicion){
        if ($posicion === end($arreglo)) {
            echo $posicion."\n";
        }else
        echo $posicion."\n";
        }
     }
    }
else {
    //echo 'erro';
}
?>
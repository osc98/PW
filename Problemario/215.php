<?php
$contador=0;
$arreglo='';
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $u);
fscanf(STDIN, "%s", $p);
fscanf(STDIN, "%s", $bd);
//$cone=mysqli_connect("localhost","root","",$bd);
$cone=mysqli_connect($s,$u,$p,$bd);
if ($cone) {
    $cad="SHOW tables";
    $bloque=mysqli_query($cone,$cad);
    if (mysqli_num_rows($bloque)!=0){
    while ($tablas=mysqli_fetch_array($bloque)) {
            $arreglo.=$tablas['Tables_in_'.$bd]." ";
        }
        //var_dump($arreglo);
    $arreglo=explode(" ",$arreglo);
    //$contador=count($arreglo);
    $arreglo=array_reverse($arreglo);
    $arreglo = array_filter($arreglo, 'strlen');
    foreach($arreglo as &$posicion){
        if ($posicion === end($arreglo)) {
            echo $posicion;
        }else
        echo $posicion.":";
    }
    }
    
}
else {
    //echo 'erro';
}
?>
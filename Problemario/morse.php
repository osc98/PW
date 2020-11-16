<?php

$caracteres=[];
$imp=null;
//fscanf(STDIN, "%s", $entrada);
for ($i2=0; $i2 <10 ; $i2++) {
  // code...

$linea= trim(fgets(STDIN));
$entrada = explode("  ",$linea);
 //echo count($entrada);
 //echo "entrada ".var_dump($entrada);

for ($i=0; $i <count($entrada) ; $i++) {
  $entrda2= explode(" ",$entrada[$i]);
  //echo var_dump ($entrda2);
  for ($ii=0; $ii <count($entrda2) ; $ii++) {
    $imp.=q0($entrda2[$ii]);
  }

  $imp.=" ";
}
echo $imp.PHP_EOL;
$imp=null;
}
function q0($caracter){
  $texto="";
  $count=0;
  $bandera=false;
  $letras = "abcdefghijklmnopqrstuvwxyz 0123456789.()=+-ñ,";
  $letras=str_split($letras);
  $caracteres[0] = ".-"; //a
  $caracteres[1] = "-...";//b
  $caracteres[2] = "-.-.";//c
  $caracteres[3] = "-..";//d
  $caracteres[4] = ".";//e
  $caracteres[5] = "..-.";//f
  $caracteres[6] = "--.";//g
  $caracteres[7] = "....";//h
  $caracteres[8] = "..";//i
  $caracteres[9] = ".---";//j
  $caracteres[10] = "-.-";//k
  $caracteres[11] = ".-..";//l
  $caracteres[12] = "--";//m
  $caracteres[13] = "-.";//n
  $caracteres[14] = "---";//o
  $caracteres[15] = ".--.";//p
  $caracteres[16] = "--.-";//q
  $caracteres[17] = ".-.";//r
  $caracteres[18] = "...";//s
  $caracteres[19] = "-";//t
  $caracteres[20] = "..-";//u
  $caracteres[21] = "...-";//v
  $caracteres[22] = ".--";//w
  $caracteres[23] = "-..-";//x
  $caracteres[24] = "-.--";//y
  $caracteres[25] = "--..";//z
  $caracteres[26] = "  ";//espacio
  $caracteres[27] = "-----";//0
  $caracteres[28] = ".----";//1
  $caracteres[29] = "..---";//2
  $caracteres[30] = "...--";//3
  $caracteres[31] = "....-";//4
  $caracteres[32] = ".....";//5
  $caracteres[33] = "-....";//6
  $caracteres[34] = "--...";//7
  $caracteres[35] = "---..";//8
  $caracteres[36] = "----.";//9
  $caracteres[37] = ".-.-.-";//.
  //$caracteres[38] = "--..--";//,
  //$caracteres[39] = "..--..";//?
  //$caracteres[40] = ".-.-..";//!
  $caracteres[38] = "-.--.";//(
  $caracteres[39] = "-.--.-";//)
  //$caracteres[43] = "-.--.";//[
  //$caracteres[44] = "-.--.-";//]
  //$caracteres[45] = ".-...";//&
  //$caracteres[46] = "---...";//:
  //$caracteres[47] = "-.-.-.";//;
  $caracteres[40] = "-...-";//=
  $caracteres[41] = ".-.-.";//+
  $caracteres[42] = "-....-";//-
  $caracteres[43]="--·--";
  $caracteres[44]="--··--";

  //$caracteres[51] = "..--.-";//_
  //$caracteres[52] = "...-..-";//$
  //$caracteres[53] = ".--.-.";//@
  while($bandera==false) {

    if ($count==44) {
      $bandera=true;
    }
    if ($caracter==$caracteres[$count]) {
      $bandera=true;
     return  $texto.=$letras[$count];
    }
    $count++;
  }
}
 ?>


 <?php

  #var_dump($_GET);
  #$_GET['datoA']; #obtiene el valor de la etiqueta con nombre datoA
  ?>
 <form>
Dato A <input type="text" name="datoA"><br>

Dato B <input type="text" name="datoB"><br>
<select name="operacion">
    <option value="1">sumar</option>
    <option value="2">restar</option>
    <option value="3">multiplicar</option>
    <option value="4">dividir</option>
    <option value="5">raiz cuadrada</option>
    <option value="6">potencia</option>
  </select>
  <input type="submit" name="">
</form>


<?php

if(isset($_GET['operacion'])){#SI LA VARIABLE EXISTE REGRESA UN TRUE, SI NO, REGRESA UN FALSE
$A=$_GET['datoA'];
$B=$_GET['datoB'];
    switch ($_GET['operacion']) {

      case 1: #'1' "1" 1 son las posibles formas en que se considere la cadena recuperada con GET
        $A=$_GET['datoA'];
        $B=$_GET['datoB'];
        $R=$A+$B;
        echo "La suma de ".$A."-".$B." es: ".$R;
        break;
      case 2:
        $R=$A-$B;
        echo "La resta de ".$A."-".$B." es: ".$R;
        break;
      case '3':
        $R=$A*$B;
        echo "La multiplicacion de ".$A."*".$B." es: ".$R;
        break;
      case '4':
        $R=$A/$B;
        echo "La division de ".$A."/".$B." es: ".$R;
        break;
      case '5':
        echo "La raiz cuadrada de A (".$A.") es: ".sqrt($A)."<br>La raiz cuadrada de B (".$B.") es: ".sqrt($B);
        break;
      case '6':
        echo "A(".$A.") elevada al exponente B(".$B.") (A^B) es: ".pow($A,$B);
        break;
      default:
        // code...
        break;
    }
  }
 ?>

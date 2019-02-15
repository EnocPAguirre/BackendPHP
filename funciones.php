  <?php
  $a = 3;
  $b = 4;
#Parametros por default dentro de la funcion en caso de que no se reciba

  function sumar($parametro, $parametro2) {
    return ($parametro + $parametro2);
  }

 $resultado = sumar($a, $b);

 echo $resultado;

#Puntero es la direccion donde esta almacenado el valor
#Parametros valor y por referencia
#Puntero con &
 function aumentar(&$param){
   $param++;
   echo $param;
 }

 aumentar($a);
 echo($a);

  ?>

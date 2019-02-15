<html >
    <title></title>
  </head>
  <body>
    <?php
    $busqueda = 'pedro';

    $arreglo =  array(2, "cadena", 'c', 3.4, TRUE, FALSE);
    print_r($arreglo);
    echo $arreglo[1];

    $bidimensional = array(
      array('h', 1),
      array('h', 2)
    );

    echo '<pre>';
    print_r($bidimensional);
    echo '</pre>';

    echo '<ul>';

    for ($i=0; $i < count($bidimensional) ; $i++) {
      echo '<li>';
      echo $bidimensional[$i][0] .' ';
      echo $bidimensional[$i][1] .' ';
      echo '</li>';
    }
  echo '<ul>';

  echo '<ol>';

  foreach ($bidimensional as $persona) {
    echo '<li>';
    echo $persona[0] . '-';
    echo $persona[1];
    echo '</li>';
  }
echo '<ol>';

$asociativo = array(
  array('nombre' => 'h', 'edad' =>1),
  array('nombre' => 'h', 'edad' =>2),
);
echo '<ol>';

foreach ($asociativo as $persona) {
  echo '<li>';
  echo $persona['nombre'] . '-';
  echo $persona['edad'];
  echo '</li>';
}
echo '<ol>';
     ?>
  </body>
</html>

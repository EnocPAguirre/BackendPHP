<html>

  <body>
    
    <?php
      $buscar = 'Pedro';

      $nombres = array('Enoc', 'Pedro', 'Rafael', 'Diego', 'Axel', 'Rafael');
      echo '<h1>';
      echo 'Lista:';
      echo '</h1>';
      echo '<ul>';
      foreach ($nombres as $nombre){
        echo '<li>';
        echo $nombre;
        echo '</li>';

      }
      echo '</ul>';

      echo '<ul>';
      for ($i=0; $i < count($nombres); $i++) {
        if($buscar == $nombres[$i] ) {
          echo '<li>';
          echo $buscar,' se encuentra en la lista';
          echo '</li>';
        } /*
        else {
          echo '<li>';
          echo $buscar,' no se encuentra';
          echo '</li>';
        }
        */

      }
      echo '</ul>';
     ?>

  </body>

</html>

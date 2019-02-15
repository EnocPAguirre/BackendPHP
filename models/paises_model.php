<?php

class Paises_model {

  private $paises = array(
    array('id' => 2, 'pais' =>'Argentina'),
    array('id' => 4, 'pais' =>'Colombia'),
    array('id' => 2, 'pais' =>'Canada')
    );

  public function get_paises(){
    return $this->paises;
    }
    public function get_pais_by_id($id){
      $paises = $this->paises;
      for ($i=0; $i < count($paises) ; $i++) {
          if ($paises[$i]['id'] == $id) {
            return $paises[$i];
          }
      }
      return NULL;
    }

}

 ?>

<?php
validar();

  $id = $_GET['id'];
  require_once 'models/paises_model.php';

  $paises_model = new Paises_model();
  $paises = $paises_model->get_paises();
  $pais = $paises_model->get_pais_by_id($id);
if($pais !== NULL) {
  $titulo = 'Pais: '. $pais['pais'];
  require_once 'views/header.php';
  require_once 'views/pais_view.php';
  require_once 'views/footer.php';
} else {
  $error = 'El elemento no existe';
  require_once 'views/error.php';
  exit();
}


function validar(){
  if (!isset($_GET['id'])){
    $error = 'Falta Id';
    require_once 'views/error.php';
    exit();
  }
  if (!is_numeric($_GET['id'])) {
    $error = 'Id no es un número';
    require_once 'views/error.php';
    exit();
  }
}
#pagina principal formulario con un input y un boton de buscar
#la pagina debe ir asi misma
#por url debe recibir los parametro
#tener una base de datos a partir de un arreglo(empleados, nombre, un id y fecha de ingreso )
#buscador que a partir del numero
#traer el empleado que tenga ese NumberFormatter
#si recibo una cadena Juan lo buscar a todos los empleados que cumplan con esa caracteristica
#si yo pongo una fecha que devuelva a todos lo empleados que ingresaron antes de esa fecha

#Condiciones
#Solo hay una vista de resultados
#No codigo de más de 20 lineas
#Dia/Mes/Año 
 ?>

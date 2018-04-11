<?php

//llamada al modelo
require_once 'models/personas_model.php';
$per = new personas_model();
$datos = $per->get_personas();
//$datos2 = $per->post_persona();

//llamada a la vista
//require_once 'views/personas_view.phtml';
require_once 'views/inserta_view.phtml';

//actualizacion de este archivo 
?>


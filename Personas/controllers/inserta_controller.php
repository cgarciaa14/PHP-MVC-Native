<?php



require_once 'models/inserta_model.php';
$per = new personas_model();
$datos = $per->post_persona();

require_once 'views/inserta_view.phtml';
?>


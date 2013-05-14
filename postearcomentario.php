<?php 
include_once 'class/class.php';
$postearcomentario = new blog();
$postearcomentario->set_comentario($_POST['nombre'],$_POST['correo'],$_POST['sitio'],$_POST['comentario'],$_POST['id']);

$url = $_POST['url'];
header('Location: '.$url);
?>
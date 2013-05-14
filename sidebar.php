<?php 
include_once 'class/class.php';
$blog = new blog();
$categorias =  $blog->get_categorias();
$afiliados = $blog->get_afiliados();
?>


<ul>

	<li><h2>Categorias</h2></li>

	<?php for($i = 0; $i<sizeof($categorias);$i++){ ?>

	<li><a href="entradas.php?cat=<?php echo $categorias[$i]['slug'];?>"><?php echo $categorias[$i]['nombre_categoria']; ?>
	</a></li>
	<?php }?>
	<li><h2>Afiliados</h2></li>
	<?php for($i = 0; $i<sizeof($afiliados);$i++){ ?>
	<li><img src="<?php echo $afiliados[$i]['foto']?>"></li>
	<li><a href="<?php echo $afiliados[$i]['link'];?>.php"><?php echo $afiliados[$i]['nombre']; ?>
	</a></li>
	<?php }?>
</ul>

<div id="publicidad">
	<h2>Espacio Publicitario</h2>
</div>


<?php 
include_once 'class/class.php';
$afiliados = $blog->get_afiliados();
$tager = $blog->get_categorias();
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
	<li><a href="<?php echo $afiliados[$i]['link'];?>"><?php echo $afiliados[$i]['nombre']; ?>
	</a></li>
	<?php }?>
</ul>


<div id="socialmedia">

	<div class="fb-like"
		data-href="http://www.facebook.com/pages/Nofuturecl/438380339586851"
		data-send="false" data-layout="box_count" data-width="450"
		data-show-faces="true"></div>

	<a href="https://twitter.com/share/" class="twitter-share-button"
		data-count="vertical" data-url="http://nofuture.cl"
		data-text="Visita Nofuture.cl Tu lugar para todo"
		data-via="Nofuturecl" data-lang="es">Twittear</a>

</div>
<div id="nubetags">
	<h2>Nube de tag</h2>
	<?php for($i = 0 ;$i<sizeof($tager);$i++){?>
	<div class="tager">
		<a href="entradas.php?cat=<?php echo $tager[$i]['slug']; ?>"><?php echo $tager[$i]['nombre_categoria']; ?>
		</a>
	</div>
	<?php }?>

</div>


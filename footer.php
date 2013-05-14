<?php 
include_once 'class/class.php';
$tager_blog = new blog();
$tager = $tager_blog->get_categorias();
?>

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


<div id="footer">

	<p>
		&copyNofuture.cl 2013-
		<?php echo date('Y');?>
		| contacto@nofuture.cl
	</p>
</div>



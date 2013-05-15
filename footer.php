<?php 
include_once 'class/class.php';
$tager_blog = new blog();
$tager = $tager_blog->get_categorias();
?>

<div id="footer">

	<p>
		&copyNofuture.cl 2013-
		<?php echo date('Y');?>
		| contacto@nofuture.cl
	</p>
</div>



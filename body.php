<?php 
include_once 'class/class.php';
$blog = new blog();

if(isset($_GET['pos'])){

	$inicio = $_GET['pos'];
}
else{

	$inicio = 0;
}
$version = $blog->get_cantidad_version();
$version_actual = $blog->get_version($version);
$total_comentario = $blog->get_total_comentario();
$total_post = $blog->get_total_post();
$post = $blog->get_post($inicio);
?>

<div id="indicadores">
	<p>
		<b>Version Actual:</b> '
		<?php echo $version_actual['version'];?>
		'
	</p>
	<p>
		<b> Total Versiones:</b> '
		<?php echo $version['idversion'];?>
		'
	</p>
	<p>
		<b> Total post:</b> '
		<?php echo $total_post;?>
		'
	</p>
	<p>
		<b> Total Comentarios:</b> '
		<?php echo $total_comentario;?>
		'
	</p>
</div>

</header>
<div class="clear"></div>
<section id="contenido">

	<section id="cuerpo">
		<?php for($i = 0; $i< sizeof($post); $i++){?>
		<?php 
		$cantidad_comentario = $blog->get_cantidad_comentarios($post[$i]['idpost']);
		$usuario = $blog->get_usuario($post[$i]['idusuario']);
		$texto = str_replace(" ","-", $post[$i]['titulo']);
		?>

		<article id="">

			<div class="foto">
				<img src="upload/<?php echo $usuario[0]['foto']; ?>"
					alt="Foto de Perfil <?php echo $post[$i]['titulo'] ?>" />
			</div>
			<div class="noticia">
				<div class="autor">
					<?php echo $usuario[0]['nombre']?>

				</div>
				<div class="fecha">
					<?php echo $post[$i]['fecha']?>
				</div>
				<div class="contenido">
					<h2>
						<a href="<?php echo $texto."c".$post[$i]["idpost"].".php"; ?>"><?php echo $post[$i]['titulo']; ?>
						</a>
					</h2>
					<?php echo $post[$i]['contenido'];?>
				</div>

				<div class="comentarios">
					<p>
						<?php echo $cantidad_comentario ?>
					</p>

				</div>
				<div class="social">
					<div class="fb-like"
						data-href="http://www.nofuture.cl/<?php echo $texto."c".$post[$i]["idpost"].".php"; ?>"
						data-send="false" data-layout="button_count" data-width="450"
						data-show-faces="false" data-font="trebuchet ms"></div>
				</div>
				<div class="tager">
					<a><?php echo $post[$i]['categoria']?> </a>
				</div>
			</div>

		</article>
		<?php }?>
		<!-- Paginacion -->
		<div align="center" class="paginacion">
			<?php if($inicio == 0){?>

			<a href="javascript:void(0)" class="paginacionbtn">Anteriores</a>
			<?php }else{
				$anterior = $inicio-5;
				?>
			<a href="?pos=<?php echo $anterior;?>" class="paginacionbtn">Anteriores</a>
			<?php } ?>

			<?php if(count($post) == 5){

				$proximo = $inicio+5;
				?>

			<a href="?pos=<?php echo $proximo;?>" class="paginacionbtn">Siguientes</a>
			<?php 
			}
			else{
	?>

			<a href="javascript:void(0)" class="paginacionbtn">Siguientes</a>
			<?php }
			?>
		</div>
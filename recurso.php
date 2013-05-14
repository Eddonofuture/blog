<?php include('header.php'); ?>

<section id="contenido">
	<?php 
	include_once 'class/class.php';
	$blog = new blog();

	if(isset($_GET['pos'])){

		$inicio = $_GET['pos'];
	}
	else{

		$inicio = 0;
	}

	$total_comentario = $blog->get_total_comentario();
	$post = $blog->get_post_cat($inicio, 'recursos');
	?>


	<section id="cuerporecurso">
		<?php for($i = 0; $i< sizeof($post); $i++){?>
		<?php 
		$cantidad_comentario = $blog->get_cantidad_comentarios($post[$i]['idpost']);
		$usuario = $blog->get_usuario($post[$i]['idusuario']);
		$texto = str_replace(" ","-", $post[$i]['titulo']);
		?>

		<article class="vertical">

			<div class="fotorecurso">
				<img src="upload/<?php echo $usuario[0]['foto']; ?>"
					alt="Foto de Perfil <?php echo $post[$i]['titulo'] ?>" />

			</div>
			<div class="recursoestilo">
				<div class="autor">
					<?php echo $usuario[0]['nombre']?>

				</div>
				<div class="fecha">
					<?php echo $post[$i]['fecha']?>
				</div>

			</div>

			<div class="noticiarecurso">

				<div class="contenido">
					<h2>
						<a href="<?php echo $texto."c".$post[$i]["idpost"].".php"; ?>"><?php echo $post[$i]['titulo']; ?>
						</a>
					</h2>
					<?php echo $post[$i]['contenido'];?>
				</div>

				<div class="comentarios">
					Comentarios:
					<?php echo $cantidad_comentario ?>
				</div>
				<div class="social">me gusta</div>
			</div>
		</article>
		<?php }?>
		<div class="clear"></div>
		<!-- Paginacion -->
		<div align="center" class="paginacion">
			<?php if($inicio == 0){?>

			<a href="javascript:void(0)" class="paginacionbtn">Anteriores</a>
			<?php }else{
				$anterior = $inicio-9;
				?>
			<a href="?pos=<?php echo $anterior;?>" class="paginacionbtn">Anteriores</a>
			<?php } ?>

			<?php if(count($post) == 9){

				$proximo = $inicio+9;
				?>

			<a href="?pos=<?php echo $proximo;?>" class="paginacionbtn">Anteriores</a>
			<?php 
			}
			else{
	?>
		<a href="javascript:void(0)" class="paginacionbtn">Siguientes</a>
		<?php }
		?>
		</div>
	</section>
	<aside>
		<?php include('sidebar.php'); ?>
	</aside>
</section>

<footer>
	<?php include('footer.php'); ?>
</footer>
</body>
</html>

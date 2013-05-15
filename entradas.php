<?php include_once('header.php'); ?>

<?php 
include_once ('class/class.php');
$blog = new blog();

if(isset($_GET['pos'])){

	$inicio = $_GET['pos'];
}
else{

	$inicio = 0;
}

$post_cat = $blog->get_post_cat($inicio,$_GET["cat"]);

if(sizeof($post_cat) != 0){

?>
<section id="contenido">
	<section id="cuerpo">
		<?php for($i = 0; $i< sizeof($post_cat); $i++){?>

		<?php 
		$cantidad_comentario = $blog->get_cantidad_comentarios($post_cat[$i]['idpost']);
		$usuario = $blog->get_usuario($post_cat[$i]['idusuario']);
		$texto = str_replace(" ","-", $post_cat[$i]['titulo']);
		?>

		<article id="">

			<div class="foto">
				<img src="upload/<?php echo $usuario[0]['foto']; ?>"
					alt="Foto de Perfil <?php echo $post_cat[$i]['titulo'] ?>" />
			</div>
			<div class="noticia">
				<div class="autor">
					<?php echo $usuario[0]['nombre']?>

				</div>
				<div class="fecha">
					<?php echo $post_cat[$i]['fecha']?>
				</div>
				<div class="contenido">
					<h2>
						<a href="<?php echo $texto."c".$post_cat[$i]["idpost"].".php"; ?>"><?php echo $post_cat[$i]['titulo']; ?>
						</a>
					</h2>
					<?php echo $post_cat[$i]['contenido'];?>
				</div>

				<div class="comentarios">
					<p>
						<?php echo $cantidad_comentario ?>
					</p>

				</div>
				<div class="social">
					<div class="fb-like"
						data-href="http://www.nofuture.cl/<?php echo $texto."c".$post_cat[$i]["idpost"].".php"; ?>"
						data-send="false" data-layout="button_count" data-width="450"
						data-show-faces="false" data-font="trebuchet ms"></div>
				</div>
				<div class="tager">
					<a><?php echo $post_cat[$i]['categoria']?> </a>
				</div>
			</div>
		</article>
		<div align="center" class="paginacion">
			<?php }	?>
			<?php if($inicio == 0){?>

			<a href="javascript:void(0)" class="paginacionbtn">Anteriores</a>
			<?php }else{
				$anterior = $inicio-5;
				?>
			<a href="?cat=<?php echo $_GET['cat'] ?>&pos=<?php echo $anterior;?>"
				class="paginacionbtn">Anteriores</a>
			<?php } ?>

			<?php if(count($post_cat) == 5){

				$proximo = $inicio+5;
				?>

			<a href="?cat=<?php echo $_GET['cat'] ?>&pos=<?php echo $proximo;?>"
				class="paginacionbtn">Anteriores</a>
			<?php 
			}
			else{
	?>

			<a href="javascript:void(0)" class="paginacionbtn">Siguientes</a>
			<?php }
}else{?>
		</div>
		<section id="contenido">
			<section id="cuerpo">
				<article>No Existen Entradas</article>

				<?php 
		}	?>
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
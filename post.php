<?php include('header.php'); ?>

<?php
include_once ('class/class.php');
$blog_post = new blog();
$post = $blog_post->get_post_unico($_GET['id']);
$usuario = $blog_post->get_usuario($post[0]['idusuario']);
$comentarios_post = $blog_post->get_comentario($post[0]['idpost']);
?>
<section id="contenido">
	<section id="cuerpo">
		<article id="">

			<div class="foto">
				<img src="upload/<?php echo $usuario[0]['foto']; ?>"
					alt="Foto de Perfil <?php echo $post[0]['titulo'] ?>" />
			</div>
			<div class="noticia">
				<div class="autor">
					<?php echo $usuario[0]['nombre']?>

				</div>
				<div class="fecha">
					<?php echo $post[0]['fecha']?>
				</div>
				<div class="contenido">
					<h2>
						<?php echo $post[0]['titulo']; ?>
					</h2>
					<?php echo $post[0]['contenido'];?>
				</div>

			</div>
		</article>

		<?php for($i = 0; $i<sizeof($comentarios_post); $i++){?>

		<div class="comentario offset3">
			<div class="autor">
				<?php echo $comentarios_post[$i]['nombre']?>
				<div class="fecha">
					<?php echo $comentarios_post[$i]['fecha']?>
				</div>
			</div>

			<div class="contenido">

				<?php echo $comentarios_post[$i]['comentario'];?>
			</div>
		</div>

		<?php }?>
	</section>
	<aside>
		<?php include('sidebar.php'); ?>
		<form action="postearcomentario.php" method="post">
			<br> <br>
			<h2>Deja Tus Comentarios :)</h2>
			<input type="text" name="nombre" placeholder="Nombre"
				required="required"> <input type="email" name="correo"
				placeholder="Email" required="required"> <input type="text"
				name="sitio" placeholder="Sitio Web">
			<textarea name="comentario" placeholder="Comentario" required="required" cols="15"
				rows="5"></textarea>
			<br> <input type="submit" class="btn" value="Comentar">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			<input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ;?>">
		</form>
		<br>
	</aside>
</section>

<footer>
	<?php include('footer.php'); ?>
</footer>
</body>
</html>

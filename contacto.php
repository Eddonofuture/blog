<?php include('header.php'); ?>

<section id="contenido">
	<section id="cuerpo">


		<form action="postearcomentario.php" method="post"
			class="formcontacto">
			<h2>Contactanos :)</h2>
			<br> <input type="text" name="nombre" placeholder="Nombre"
				required="required"> <input type="email" name="correo"
				placeholder="Email" required="required"> <input type="text"
				name="sitio" placeholder="Sitio Web"> <input type="text"
				name="necesidad" placeholder="Indicanos tu Necesidad">
			<textarea name="comentario" placeholder="Comentario"
				required="required" cols="15" rows="5"></textarea>
			<br> <input type="submit" class="btn" value="Contactar"> <input
				type="hidden" name="url"
				value="<?php echo $_SERVER['REQUEST_URI'] ;?>">
		</form>
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

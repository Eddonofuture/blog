<?php include('header.php'); ?>

<section id="contenido">
	<?php 
	include_once 'class/class.php';
	$blog = new blog();
	$versiones = $blog->get_versiones();
	?>

	<section id="cuerpo">
		<article class="textocentro">
			<H2>Resumen de Versiones</H2>
			<p>Aqui esta nuestro resumen de Versiones, pasando desde las mas
				Basicas Demostrando la transparencia en nuestro codigo</p>

		</article>

		<article>

			<table>
				<tr>
					<th>Nº</th>
					<th>Version</th>
					<th>Changelog</th>
					<th>Vista</th>
				</tr>

				<?php for($i = 0; $i<sizeof($versiones);$i++){?>
				<tr>
					<td><?php echo $versiones[$i]['idindicador']?></td>
					<td><?php echo $versiones[$i]['version']?></td>
					<td><?php echo $versiones[$i]['changelog']?></td>
					<td><a
						href="vista.php?ver=<?php echo $versiones[$i]['idindicador']; ?>"
						class="btn" target="_blank">Ver</a>
					</td>
				</tr>
			
				<?php } ?>
			</table>


		</article>

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

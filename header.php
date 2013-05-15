<?php 
include_once 'class/class.php';
$blog = new blog();
$menubar =  $blog->get_menubar();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Description" content="">
<meta name="Keywords" content="Agencia Virtual, Sitio Web, Html5">
<meta name="Language" content="Spanish">
<meta name="author" content="Efesist.com">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta NAME="robots" CONTENT="all">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="author" type="text/plain" href="humans.txt">
<link rel="sitemap" type="application/xml" title="Sitemap"
	href="sitemap.xml" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->


<title>Blog del Eddo</title>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40761900-1', 'nofuture.cl');
  ga('send', 'pageview');

</script>
<script src="js/prefixfree.min.js"></script>
</head>
<body>
	<div class="contacto">
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="">QUIENES SOMOS</a></li>
			<li><a href="">SERVICIOS</a></li>
			<li><a href="">CONTACTO</a></li>
		</ul>

	</div>
	<header>
		<div class="head">
			<div class="animacion"></div>
			<div id="logo" align="left">
				<a href="index.php"><img src="images/logo.png" /> </a>
			</div>
			<nav>
				<ul>
					<?php for($i = 0; $i<sizeof($menubar);$i++){ ?>
					<li><a href="<?php echo $menubar[$i]['link']; ?>"><?php echo $menubar[$i]['nombre'];?>
					</a></li>
					<?php }?>
				</ul>

			</nav>
		</div>
	</header>
	<div class="clear"></div>
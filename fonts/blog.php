<?php 

include "conexion.php";



if(isset ($_POST['a_nuevo_blog'])){
$name=$_POST['name'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$fecha= date('Y-m-d h:i:s');
//$con=claves($pass);    

$sql = "INSERT INTO `blog_bd`(`nombre`,`correo`,`comentario`,`fecha_registro`)
        VALUES('$name','$email','$comentario','$fecha')";
           $result = mysql_query($sql,$conexion) or die(mysql_error());
    //$correcto_mensaje = '"Funcionario Registrado!!", "Actividad Registrada Exitosamente!", "success"';
           header("Location:blog.php");
}

	$tp2 = mysql_query("SELECT COUNT(titulo) as aviso FROM noticias");
	$row2 = mysql_fetch_array($tp2);
	$pro2=$row2['aviso'];
	$t_pro2=$pro2;

	$tp1 = mysql_query("SELECT COUNT(titulo_a) as infor FROM avisos");
	$row1 = mysql_fetch_array($tp1);
	$pro1=$row1['infor'];
	$t_pro1=$pro1;


	

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hospital Cl&iacute;nico Viedma</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.jpg">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="index.php">Sobre Nosotros</a></li>
					<li><a href="especialidades.php">Especialidades</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="index.php">Direcci&oacute;n Ejecutiva</a></li>
					<li class="has-dropdown"><a href="index.php">Noticias</a>
					<ul class="dropdown">
							<li><a href="blog.php">Todas las Noticias</a></li>
						</ul></li>
					<li><a href="index.php">Cont&aacute;ctenos</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
	
	<!-- Contact -->
	<div id="contact" class="oscurecer">
		<style type="text/css">
			.oscurecer {
			  background-image: 
			    linear-gradient(
			      rgba(0, 0, 0, 0.9),
			      rgba(0, 0, 0, 0.9)
			    ),
			    url('./img/P1.jpg');
			height: 100%;
			width: 100%;
			 
			}

		</style>

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				
				<div class="col-md-9">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Hospital Clínico Viedma Informa:</h3>
					</div>
					<!-- /Category -->
					<div class="blog-author">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="./img/unog.png" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h3></h3>
										<div class="author-social">
											<a href="https://www.facebook.com/hospitalviedma/"><i class="fa fa-facebook"></i></a>
											<a href="https://twitter.com/HospitalViedma"><i class="fa fa-twitter"></i></a>
											<a href="https://www.youtube.com/channel/UCq5FplaEdBI1J1p47ASn_EA?view_as=subscriber"><i class="fa fa-youtube-play"></i></a>
										</div>
									</div>
									<p>Bienvenidos a las noticias del Hospital Clinico Viedma. Esperamos que les gusten nuestros contenidos.</p>
								</div>
							</div>
						</div>
					<!-- Posts sidebar -->
					<div class="widget">
						<h3 class="title">ULTIMO</h3><br>
						<?php

							$rs = mysql_query("SELECT MAX(id_aviso) AS id FROM avisos");
						if ($row = mysql_fetch_row($rs)) {
						$id = trim($row[0]);
						}

                            $ss = mysql_query("SELECT * FROM avisos where id_aviso=$id");
                           	while($rr=mysql_fetch_array($ss)){

                          ?>

						<!-- blog -->
				<div class="col-md-12">
					<div class="blog">
						<div class="blog-img">
							<?php $foto= $rr['img_a']; ?>
							<?php
                            if ($foto=="") {
                                echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
                                 }else
                                echo "<video src='img/imagenes/".$foto."' controls width='100%' height='100%'></video>";
                        ?>
						</div>
						<div class="blog-content">
							<h3><?php echo $rr['titulo_a']; ?></h3>
							<p ALIGN="justify"><?php echo $rr['desc_a']; ?></p>
							<br><h6><?php echo $rr['firma']; ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $rr['fecha_a']; ?></h6>
						</div>
					</div>
				</div>
				<!-- /blog -->
				<?php }?>
						
						<!-- single post -->
						<div class="widget-post">
							<h3 class="title">Mas Noticias</h3><br>
							
							<?php
                            $ss = mysql_query("SELECT * FROM noticias");
                           	while($rr=mysql_fetch_array($ss)){

    						$url = $rr['video'];
						    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
						    $id = $matches[1];
						    $width = '100%';
						    $height = '100%';
						?>
							<!-- blog -->
				<div class="col-md-12">
					<div class="blog">

						<div class="col-md-4">
						<div class="blog-img">
							<div><iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
							    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
							    frameborder="0" allowfullscreen></iframe></div>
						</div>
					</div>

						<div class="col-md-8">
						<div class="blog-content">
							<h4><?php echo $rr['titulo']; ?></h4>
							<p><?php echo $rr['titulo']; ?>....<a>Leer mas</a></p><br>
							<h6><?php echo $rr['fecha_reg_not']; ?></h6>
						</div>
					</div>
					</div>
					<?php }?>
					</div>
					<div>
						
						</div>
				</div>
				<!-- /blog --><br>
						
						
					</div>
				</aside>
			</div>


			<div class="col-md-3">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Categoria</h3>
						<div class="widget-category">
							<a href="#">Noticias<span>(<?php echo $t_pro2; ?>)</span></a>
							<a href="#">Avisos<span>(<?php echo $t_pro1; ?>)</span></a>
						</div>
					</div>
					<div class="widget">
						<?php
                            $ss = mysql_query("SELECT * FROM avisos");
                           	while($rr=mysql_fetch_array($ss)){

                          ?>

						<!-- blog -->
				<div class="col-md-12">
					<div class="blog">
						<div class="blog-img">
							<?php $foto= $rr['img_a']; ?>
							<?php
                            if ($foto=="") {
                                echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
                                 }else
                                echo "<video src='img/imagenes/".$foto."' controls width='100%' height='100%'></video>";
                        ?>
						</div>
							<div class="blog-content">
							<a href=""><h6 style="color: #A0A2A2" ALIGN="center"><?php echo $rr['titulo_a']; ?></h6></a>
							<h6><p><?php echo $rr['fecha_a']; ?></p></h6>
						</div>
							
						</div>
				
				</div>
				<!-- /blog -->
				<?php }?>
					<div class="widget">
						<h3 class="title">Etiquetas</h3>
						<div class="widget-tags">
							<a href="index.php">Inicio</a>
							<a href="especialidades.php">Especialidades</a>
							<a href="servicios.php">Servicios</a>
							<a href="blog.php">Noticias</a>
						</div>
					</div>
					<!-- /Tags -->
				<!-- /blog --><br>
						
						
					</div>
				</aside>
			</div>
			</div>
	
		<!-- /Container -->
		<div class="footer-copyright">
						<p>Copyright © 2019. Derechos Reservados Hospital Cl&iacute;nico Viedma <a href="login.php" target="_blank">Sistemas</a></p>
					</div>
	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>

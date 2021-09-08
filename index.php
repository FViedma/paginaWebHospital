<?php

include "conexion.php";



if (isset($_POST['a_nuevo'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$fecha = date('Y-m-d h:i:s');
	//$con=claves($pass);    

	$sql = "INSERT INTO `blog_viedma`(`nombre_p`,`email`,`asunto`,`mensaje`,`fecha_registro`)
        VALUES('$name','$email','$asunto','$mensaje','$fecha')";
	$result = mysql_query($sql, $conexion) or die(mysql_error());
	//$correcto_mensaje = '"Funcionario Registrado!!", "Actividad Registrada Exitosamente!", "success"';

}


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
	<link type="text/css" rel="stylesheet" href="css/style.min.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<meta name="google-site-verification" content="ojmFmKHopRKR5Dkl7jG--vkly-R_xtus2sLW0_UjVWY" />
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/P1.webp');">
			<div id="about-slider" class="owl-carousel owl-theme bg-img">
				<img style="background-image: url('./img/P1.webp');" class="img-responsive">
				<img class="img-responsive" src="./img/P2.webp" alt="">
				<img class="img-responsive" src="./img/P3.webp" alt="">
				<img class="img-responsive" src="./img/P4.webp" alt="">
			</div>
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
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
				<ul class="main-nav nav navbar-nav navbar-left">
					<li><a href="#home">Inicio</a></li>
					<li><a href="#about">Sobre Nosotros</a></li>
					<li><a href="#Personal">Direcci&oacute;n Ejecutiva</a></li>
					<li class="has-dropdown"><a href="#blog">Noticias</a>
						<ul class="dropdown">
							<li><a href="blog">Todas las Noticias</a></li>
						</ul>
					</li>
					<li><a href="#contact">Cont&aacute;ctenos</a></li>
					<li><a href="https://webrtc.us2.ympcloud.com/webrtc/00037d878e6e4a4217dea2d6b2281360ba1" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-phone fa-2x" aria-hidden="true"></i><b> LLAMENOS PARA RESERVAR</b></button></a></li>
					<li><a href="http://reservas.hospitalviedma.org" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i><b> RESERVA EN LINEA</b></button></a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">

							<div class="col-md-12 col-xs-12 col-lg-12">
								<img src="img/logoviedmasinfondo.png" alt="" style=" width: 120px" align="center"><br><br><br>
							</div>
							<h1 class="white-text" style="font-size:65px;">Hospital Cl&iacute;nico Viedma</h1>
							<h5>
								<p class="white-text">Fortalecimiento y renovaci&oacute;n para la poblaci&oacute;n cochabambina
								</p>
							</H5>
						</div>
					</div>
					<!-- /home content -->
				</div>
			</div>
		</div>
		<!-- /home wrapper -->
	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="text-center">
					<h2 class="title">Sobre Nosotros</h2>
				</div>
				<!-- /Section header -->


				<!-- about -->
				<div class="col-md-4 col-xs-6">
					<div style="border-top-color: #3993CA;" class="about">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<h3>Visi&oacute;n</h3>
						<p>Ser el mejor hospital p&uacute;blico de tercer nivel del departamento de Cochabamba y del pa&iacute;s.</p>

					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4 col-xs-6">
					<div class="about" style="border-top-color: #3993CA;">
						<i class="fa fa-line-chart" aria-hidden="true"></i>
						<h3>Misi&oacute;n</h3>
						<p>Somos un hospital p&uacute;blico de tercer nivel que presta atenci&oacute;n en salud de forma especializada y comprometida con calidad y calidez.</p>

					</div>
				</div>



				<div class="col-md-4 col-xs-6" align="center">
					<div class="about" style="border-top-color: #3993CA;">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>
						<h3>Valores</h3>
						<p>Respeto<br>Transparencia <br>Innovaci&oacute;n<br>Responsabilidad Social <br>Ética Profesional
						</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4 col-md-offset-4 col-xs-6">
					<div class="about" style="border-top-color: #3993CA;">
						<i class="fa fa-history" aria-hidden="true"></i>
						<h3>Historia</h3>
						<p> El primer Hospital en el valle de Canata, jurisdicción de la Villa de Oropeza, fue fundado ... </p>
						<a data-toggle="modal" data-target="#b">Leer mas</a>
					</div>
				</div>
				<!-- /about -->
				<script>
					$('.modal-content').resizable({
						//alsoResize: ".modal-dialog",
						minHeight: 900,
						minWidth: 900
					});
					$('.modal-dialog').draggable();

					$('#b').on('show.bs.modal', function() {
						$(this).find('.modal-body').css({
							'max-height': '100%'
						});
					});
				</script>

				<div class="modal fade" id="b">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<h5 class="text-center">Historia del Hospital</h5>
								<table class="table table-striped" id="tblGrid">
									<thead id="tblHead">

									</thead>
									<tbody>
										<tr>
											<td>
												<p>
													<img class="img-responsive" src="./img/viedmaant.jpg" alt="" style="
													width: 65%" align="center">
													El primer Hospital en el valle de Canata, jurisdicción de la Villa de Oropeza, fue fundado por el corregidor Don Martín Hernández de Zamora, natural de Villar, España. Fue denominada "San Salvador " y se situó a las orillas del río Condorrillo, cuyo cauce atravesó el pequeño Villorio hasta que el Capitán Martín de la Rocha, primer poblador hispano en el Valle, en 1575 abrió una acequia desviando el cauce del río a su actual posición. Así, el Hospital quedó unido a la ciudad, localizado en la tercera cuadra de la calle Esteban Arze, ocupaba toda la manzana donde actualmente se ubica la Iglesia San Juan De Dios.
													En el año 1808 al fallecer Don Francisco de Viedma y Narváez en Cochabamba deja sus casas y quintas para el funcionamiento del Hospital. La generosidad del noble hidalgo español coronó la inquietud del Concejo Municipal de contar con una infraestructura propia. El 11 de septiembre de 1879 se trasladó el Hospital San Salvador a los fundos de Viedma, tras iniciar los trabajos para habilitar el Hospital en sus caballerizas; Dos galpones más o menos espaciosos y ventilados con piso de ladrillo y cielo raso de tocuyo.
													Cinco años después el 14 de septiembre de 1884 fue inagurada la infraestructura de Hospital Clínico Viedma bajo la dirección de las hijas de Santa Ana.
													El D.S. N°1258 del 3 de julio de 1948 da cuenta de que el Hospital Clínico Viedma obtuvo fondos para construir su Anfiteatro, según Ley del 15 de noviembre de 1984, destina fondos para construir la morgue.
												</p>
											</td>
											<td>
												<p>En 1924 el Concejo Municipal modernizó las salas de hospitalización. Para el año 1929 el hospital tenía funcionando trece salas, dos pensionados, dos salas de operaciones (quirófanos), botica, droguería, consultorio y clínica dental propios para la atención de la población en general.
													Con el transcurrir de los años el Hospital Clínico Viedma fue creciendo de manera caótica y poco funcional, lo que hizo creciente la necesidad de contar con una infraestructura acorde a los avances de la ciencia y la tecnología, capaz de resolver las múltiples y complejas necesidades de la población
													En 1991 se organizó la Unidad gestora del Nuevo Hospital Viedma, constituido por prestigiosos profesionales médicos de nuestra región con quienes se inició el trabajo con la finalidad de contar con una nueva infraestructura Hospitalaria.
													El 14 de septiembre de 1998 la Nueva Infraestructura del Hospital Clínico Viedma es oficialmente entregada a la Prefectura del Departamento por la unidad gestora.
													En septiembre de 1999 la Prefectura efectúa la transferencia del Nuevo Hospital Clínico Viedma a la Honorable Alcaldía Municipal del Cercado, en aplicación de la Ley 1551 y el convenio especial firmado con el Ministerio de Salud y Previsión social. El traslado a las nuevas instalaciones se realizó en dos etapas, el 1°de octubre de 1999 fueron trasladados los servicios de consulta externa y estadística, el 12 de mayo del 2000 se completa el traslado de todas la dependencias, con sus diferentes servicios habilitándose para el servicio del pueblo Cochabambino.
													El hospital Viedma desde su primera fundación del año 1575, fecha aproximada suma al 2018, 443 años de vida.
												</p>
												<img class="img-responsive" src="./img/vied1.jpg" alt="" style="
													width: 65%" align="center">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary " data-dismiss="modal">Cerrar</button>
							</div>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
		</div>




	</div>
	<!-- /Row -->
	<div id="Personal" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Direcci&oacute;n Ejecutiva</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4 col-md-4">
					<div class="team">
						<h5 align="center">Direcci&oacute;n</h5>

						<div class="team-img">
							<img class="img-responsive" src="./img/directora.jpeg" alt="" style="
									width: 77%">
						</div>
						<div class="team-content">

							<span>Dr. Osmar Rodrigo Larrea Casazola<br><strong> Director - Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org" target="_blank">
									<font style="text-transform: lowercase;">direccion@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 col-md-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Direcci&oacute;n Administrativa y Financiera</h5>
							<img class="img-responsive" src="./img/mterceros.jpeg" alt="" style="
									width: 70%">
						</div>
						<div class="team-content">

							<span>Lic. María del Carmen Terceros <br><strong> Subdirectora Adm. Fin. - Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org" target="_blank">
									<font style="text-transform: lowercase;">subdireccion@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 col-md-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Sub-Director Médico</h5>
								<img class="img-responsive" src="./img/amaya.jpeg" alt="" style="
									width: 73%">
						</div>
						<div class="team-content">

							<span>Dr. Eduardo Amaya Rocha<br><strong> Sub-Director Médico- Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org">
									<font style="text-transform: lowercase;">subdirmedica@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div><br>

				<div class="section-header text-center">
					<h2 class="title">Jefatura Cl&iacute;nica</h2>
				</div>

				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Medicina</h5>
							<img class="img-responsive" src="./img/usuario.webp" alt="" style="
									width: 97%">
						</div>
						<div class="team-content">

							<span>Dra. Adela Amaya Mejia<br><strong> Jefa de Medicina - Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org">
									<font style="text-transform: lowercase;">medicina@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Cirug&iacute;a</h5>
							<img class="img-responsive" src="./img/usuario.webp" alt="" style="
									width: 97%">
						</div>
						<div class="team-content">

							<span>Dr. Rene Garcia Angelo<br><strong> Jefe de Cirug&iacute;a - Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org">
									<font style="text-transform: lowercase;">cirugia@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Enseñanza e Investigaci&oacute;n</h5>
							<img class="img-responsive" src="./img/luisrodriguez.webp" alt="" style="
									width: 80%">
						</div>
						<div class="team-content">

							<span>Dr. Luis Carlos Rodriguez Delgado<br><strong> Jefe de Enseñanza e Investigaci&oacute;n - Hospital Cl&iacute;nico Viedma </strong><br>
								<a href="http://webmail.hospitalviedma.org">
									<font style="text-transform: lowercase;">investigacion@hospitalviedma.org</font>
								</a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div> <!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/P1.webp');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
				<h4 style="color: #EAF2F6;">Encuentrenos en:</h4>
				<!-- number -->
				<div class="col-sm-3 col-xs-12 col-md-4">
					<div class="number">
						<a href="https://www.facebook.com/hospitalviedma/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><br>
						<span class="white-text">Facebook</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-12 col-md-4">
					<div class="number">
						<a href="https://twitter.com/HospitalViedma" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><br>
						<span class="white-text">Twitter</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-12 col-md-4">
					<div class="number">
						<a href="https://www.youtube.com/channel/UCq5FplaEdBI1J1p47ASn_EA?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><br>
						<span class="white-text">YouTube</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->


	<!-- inicio de todo el bloque -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Hospital Cl&iacute;nico Viedma informa:</h2>
				</div>
				<!-- /Section header -->


				<?php
				$rs = mysql_query("SELECT MAX(id_noticias) AS id FROM noticias");
				if ($row = mysql_fetch_row($rs)) {
					$id = trim($row[0]);
				}

				$ss = mysql_query("SELECT * FROM noticias where id_noticias=$id ");
				while ($rr = mysql_fetch_array($ss)) {

					$url = $rr['video'];
					preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
					$id = $matches[1];


				?>
					<!-- blog -->
					<div class="col-md-6 col-lg-6 col-xs-12">
						<div class="blog">
							<div class="blog-img">
								<iframe id="ytplayer" type="text/html" "
							    src=" https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="blog-content">
								<h3 style="text-transform: uppercase;"><?php echo $rr['titulo']; ?></h3>
								<p ALIGN="justify"><?php echo substr(($rr['desc_an']), 0, 250); ?>...<a data-toggle="modal" data-target="#video">Leer mas</a><br><br></p>
								<a href="">
									<h6 style="color: #A0A2A2"><?php echo $rr['firma_v']; ?></h6>
								</a>
								<h6>
									<p><?php echo $rr['fecha_reg_not']; ?></p>
								</h6>
							</div>
						</div>
						<div class="modal fade" id="video">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<h5 class="text-center"><?php echo $rr['titulo']; ?></h5>

										<p ALIGN="justify"><?php echo $rr['desc_an']; ?></p><br>
										<h6 style="color: #A0A2A2"><?php echo $rr['firma_v']; ?> - <?php echo $rr['fecha_reg_not']; ?></h6>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary " data-dismiss="modal">Cerrar</button>
									</div>

								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
					<?php } ?>
					</div>
					<style type="text/css">
						iframe {
							width: 100%;
							height: 300px;
							/*Sólo para que se vea, ya que la dirección al parecer está mal*/
							border: 3px solid #2981BA;
						}

						video {
							border: 3px solid #2981BA;
						}
					</style>

					<!-- empieso de carousel de fotos -->
					<div class="col-md-6 col-lg-6 col-xs-12">
						<div class="col-md-12">
							<div class="blog">

								<?php
								$rs = mysql_query("SELECT MAX(id_aviso) AS id FROM avisos");
								if ($row = mysql_fetch_row($rs)) {
									$id = trim($row[0]);
								}

								$ss = mysql_query("SELECT * FROM avisos where id_aviso=$id");
								while ($rr = mysql_fetch_array($ss)) {

								?>


									<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
											<li data-target="#myCarousel" data-slide-to="3"></li>
										</ol>
										<div class="carousel-inner">

											<div class="item active">
												<?php $foto1 = $rr['img_a']; ?>
												<?php
												if ($foto1 == "") {
													echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
												} else
													echo "<img src='img/imagenes/" . $foto1 . "'  class='img-responsive ' alt='Responsive image' style='width: 100%; height: 305px; border: 3px solid #2981BA;' >";
												?>
											</div>

											<div class="item">
												<?php $foto2 = $rr['img_b']; ?>
												<?php
												if ($foto2 == "") {
													echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
												} else
													echo "<img src='img/imagenes/" . $foto2 . "'  class='img-responsive ' alt='Responsive image' style='width: 100%; height: 305px; border: 3px solid #2981BA;' >";
												?>
											</div>

											<div class="item">
												<?php $foto3 = $rr['img_c']; ?>
												<?php
												if ($foto3 == "") {
													echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
												} else
													echo "<img src='img/imagenes/" . $foto3 . "'  class='img-responsive ' alt='Responsive image' style='width: 100%; height: 305px; border: 3px solid #2981BA;' >";
												?>
											</div>

											<div class="item">
												<?php $foto4 = $rr['img_d']; ?>
												<?php
												if ($foto4 == "") {
													echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
												} else
													echo "<img src='img/imagenes/" . $foto4 . "'  class='img-responsive ' alt='Responsive image' style='width: 100%; height: 305px; border: 3px solid #2981BA;' >";
												?>
											</div>

										</div>
										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
											<i class="fa fa-chevron-left" aria-hidden="true" style="color: #F3EAE8"></i>
										</a>
										<a class="right carousel-control" href="#myCarousel" data-slide="next">
											<i class="fa fa-chevron-right" aria-hidden="true" style="color: #F3EAE8"></i>
										</a>
									</div>
							</div>
							<div class="blog-content">
								<h3><?php echo $rr['titulo_a']; ?></h3>
								<p ALIGN="justify"><?php echo substr(($rr['desc_a']), 0, 250); ?>... <a data-toggle="modal" data-target="#aviso">Leer mas</a><br><br></p>
								<a href="">
									<h6 style="color: #A0A2A2"><?php echo $rr['firma']; ?></h6>
								</a>
								<h6>
									<p><?php echo $rr['fecha_a']; ?></p>
								</h6>
							</div>
						</div>

						<div class="modal fade" id="aviso">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									</div>
									<div class="modal-body">
										<h5 class="text-center"><?php echo $rr['titulo_a']; ?></h5>


										<div id="myCarousel" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
												<li data-target="#myCarousel" data-slide-to="2"></li>
												<li data-target="#myCarousel" data-slide-to="3"></li>
											</ol>
											<div class="carousel-inner">

												<div class="item active" align="center">
													<?php $foto1 = $rr['img_a']; ?>
													<?php
													if ($foto1 == "") {
														echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
													} else
														echo "<img src='img/imagenes/" . $foto1 . "'  class='img-responsive ' alt='Responsive image' style='width: 70%; height: 250px;' >";
													?>
												</div>

												<div class="item" align="center">
													<?php $foto2 = $rr['img_b']; ?>
													<?php
													if ($foto2 == "") {
														echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
													} else
														echo "<img src='img/imagenes/" . $foto2 . "'  class='img-responsive ' alt='Responsive image' style='width: 70%; height: 250px;' >";
													?>
												</div>

												<div class="item" align="center">
													<?php $foto3 = $rr['img_c']; ?>
													<?php
													if ($foto3 == "") {
														echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
													} else
														echo "<img src='img/imagenes/" . $foto3 . "'  class='img-responsive ' alt='Responsive image' style='width: 70%; height: 250px;' >";
													?>
												</div>

												<div class="item" align="center">
													<?php $foto4 = $rr['img_d']; ?>
													<?php
													if ($foto4 == "") {
														echo "<img src='fotos/foto.png'  class='img-responsive ' alt='Responsive image' width='30' height='30'>";
													} else
														echo "<img src='img/imagenes/" . $foto4 . "'  class='img-responsive ' alt='Responsive image' style='width: 70%; height: 250px;' >";
													?>
												</div>

											</div>
											<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<i class="fa fa-chevron-left" aria-hidden="true" style="color: #F3EAE8"></i>
											</a>
											<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<i class="fa fa-chevron-right" aria-hidden="true" style="color: #F3EAE8"></i>
											</a>
										</div><br><br>

										<p ALIGN="justify"><?php echo $rr['desc_a']; ?></p><br>
										<h6 style="color: #A0A2A2"><?php echo $rr['firma']; ?> - <?php echo $rr['fecha_a']; ?></h6>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary " data-dismiss="modal">Cerrar</button>
									</div>

								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>


					</div>
				<?php } ?>
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /fin de todo el proceso-->
	<!-- Contact -->
	<div id="contact" class="section md-padding" style="background-color: #313232;">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title" style="color: white;">Cont&aacute;ctenos</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3 style="color: white;">Tel&eacute;fono</h3>
						<p>(+591) 4-4220228</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3 style="color: white;">Correo Electr&oacute;nico</h3>
						<a href="http://webmail.hospitalviedma.org">
							<p>info@hospitalviedma.org</p>
						</a>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3 style="color: white;">Direcci&oacute;n</h3>
						<p>Calle Venezuela y German Urquidi</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form" name="form1" action="enviar.php" method="post" id="Regcom">
						<input type="text" class="input" placeholder="Nombre" id="name" name="name">
						<input type="email" class="input" placeholder="Correo Electronico" id="email" name="email">
						<input type="text" class="input" placeholder="Asunto" id="asunto" name="asunto">
						<textarea class="input" placeholder="Mensaje" id="mensaje" name="mensaje"></textarea>
						<button class="main-btn" id="a_nuevo" type="submit" name="Submit">Eviar Mensaje</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->
		<div class="footer-copyright">
			<p>Copyright © 2019. Derechos Reservados Hospital Cl&iacute;nico Viedma <a href="login.php" target="_blank">Sistemas</a></p>
		</div>
	</div>
	<!-- /Contact -->




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
	<script type="text/javascript" src="js/main.min.js"></script>

</body>

</html>
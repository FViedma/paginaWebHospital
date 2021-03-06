<?php 

include "conexion.php";



if(isset ($_POST['a_nuevo'])){
$name=$_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje=$_POST['mensaje'];
$fecha= date('Y-m-d h:i:s');
//$con=claves($pass);    

$sql = "INSERT INTO `blog_viedma`(`nombre_p`,`email`,`asunto`,`mensaje`,`fecha_registro`)
        VALUES('$name','$email','$asunto','$mensaje','$fecha')";
           $result = mysql_query($sql,$conexion) or die(mysql_error());
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
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/P1.jpg');">
			<div id="about-slider" class="owl-carousel owl-theme bg-img">
						<img style="background-image: url('./img/P1.jpg');"class="img-responsive">
						<img class="img-responsive" src="./img/P2.jpg" alt="">
						<img class="img-responsive" src="./img/P3.jpg" alt="">
						<img class="img-responsive" src="./img/P4.jpg" alt="">
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
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Inicio</a></li>
					<li><a href="#about">Sobre Nosotros</a></li>
					<li><a href="especialidades.php">Especialidades</a></li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="#Personal">Direcci&oacute;n Ejecutiva</a></li>
					<li class="has-dropdown"><a href="#blog">Noticias</a>
					<ul class="dropdown">
							<li><a href="blog.php">Todas las Noticias</a></li>
						</ul></li>
					<li><a href="#contact">Cont&aacute;ctenos</a></li>
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
							<h1 class="white-text" style="font-size:65px;">Hospital Cl&iacute;nico Viedma</h1>
						<h5><p class="white-text">Fortalecimiento y renovaci&oacute;n para la poblaci&oacute;n cochabambina
							</p></H5>
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
				<div  class="col-md-4 col-xs-6">
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
						<p>Respeto<br>Transparecia <br>Innovaci&oacute;n<br>Responsabilidad Social <br>Etica Profecional
						</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4 col-md-offset-4 col-xs-6">
					<div class="about" style="border-top-color: #3993CA;">
						<i class="fa fa-history" aria-hidden="true"></i>
						<h3>Historia</h3>
						<p> El primer Hospital en el valle de Canata, jurisdicci??n de la Villa de Oropeza, fue fundado ...  </p>
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
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Historia del Hospital</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									             
									            </thead>
									            <tbody>
									              <tr><td><p>
									              	<img class="img-responsive" src="./img/viedmaant.jpg" alt="" style="
													width: 65%" align="center">
									              	El primer Hospital en el valle de Canata, jurisdicci??n de la Villa de Oropeza, fue fundado por el corregidor Don Mart??n Hern??ndez de Zamora, natural de Villar, Espa??a. Fue denominada "San Salvador " y se situ?? a las orillas del r??o Condorrillo, cuyo cauce atraves?? el peque??o Villorio hasta que el Capit??n Mart??n de la Rocha, primer poblador hispano en el Valle, en 1575 abri?? una acequia desviando el cauce del r??o a su actual posici??n. As??, el Hospital qued?? unido a la ciudad, localizado en la tercera cuadra de la calle Esteban Arze, ocupaba toda la manzana donde actualmente se ubica la Iglesia San Juan De Dios.
												  En el a??o 1808 al fallecer Don Francisco de Viedma y Narv??ez en Cochabamba deja sus casas y quintas para el funcionamiento del Hospital. La generosidad del noble hidalgo espa??ol coron?? la inquietud del Concejo Municipal de contar con una infraestructura propia. El 11 de septiembre de 1879 se traslad?? el Hospital San Salvador  a los fundos de Viedma, tras iniciar los trabajos para habilitar el Hospital en sus caballerizas; Dos galpones m??s o menos espaciosos y ventilados con piso de ladrillo y cielo raso de tocuyo.
												  Cinco a??os despu??s el 14 de septiembre de 1884 fue inagurada la infraestructura de Hospital Cl??nico Viedma bajo la direcci??n de las hijas de Santa Ana.
												  El D.S. N??1258 del 3 de julio de 1948 da cuenta de que el Hospital Cl??nico Viedma obtuvo fondos para construir su Anfiteatro, seg??n Ley del 15 de noviembre de 1984, destina fondos para construir la morgue.
													</p></td>
									                <td><p>En 1924 el Concejo Municipal moderniz?? las salas de hospitalizaci??n. Para el a??o 1929 el hospital ten??a funcionando trece salas, dos pensionados, dos salas de operaciones (quir??fanos), botica, droguer??a, consultorio y cl??nica dental propios para la atenci??n de la poblaci??n en general.
													Con el transcurrir de los a??os el Hospital Cl??nico Viedma fue creciendo de manera ca??tica y poco funcional, lo que hizo creciente la necesidad de contar con una infraestructura acorde a los avances de la ciencia y la tecnolog??a, capaz de resolver las m??ltiples y complejas necesidades de la poblaci??n 
													En 1991 se organiz?? la Unidad gestora del Nuevo Hospital Viedma, constituido por prestigiosos profesionales m??dicos de nuestra regi??n con quienes se inici?? el trabajo con la finalidad de contar con una nueva infraestructura Hospitalaria.
													El 14 de septiembre de 1998 la Nueva Infraestructura del Hospital Cl??nico Viedma es oficialmente entregada a la Prefectura del Departamento por la unidad gestora.
													En septiembre de 1999 la Prefectura efect??a la transferencia del Nuevo Hospital Cl??nico Viedma a la Honorable Alcald??a Municipal del Cercado, en aplicaci??n de la Ley 1551 y el convenio especial firmado con el Ministerio de Salud y Previsi??n social. El traslado a las nuevas instalaciones se realiz??  en dos etapas, el 1??de octubre de 1999 fueron trasladados los servicios de consulta externa y estad??stica, el 12 de mayo del 2000 se completa el traslado de todas la dependencias, con sus diferentes servicios habilit??ndose para el servicio del pueblo Cochabambino.
													El hospital Viedma  desde su primera fundaci??n del a??o 1575, fecha aproximada suma al 2018, 443 a??os de vida.
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

		</div>
		<!-- /Container -->
		<!-- Team -->
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
									width: 90%">
						</div>
						<div class="team-content">
							
							<span>Dra. Daysi Rocabado Espinoza<br><strong> Directora - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org" target="_blank"><font style="text-transform: lowercase;">direccion@hospitalviedma.org</font></a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 col-md-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Direcci&oacute;n Administrativa y Financiera</h5>
							<img class="img-responsive" src="./img/subdirector.jpeg" alt="" style="
									width: 87%">
						</div>
						<div class="team-content">
							
							<span>Lic. Jorge Polo Sandoval<br><strong> Subdirector Adm. Fin. - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org" target="_blank"><font style="text-transform: lowercase;">subdireccion@hospitalviedma.org</font></a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 col-md-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Personal</h5>
							<img class="img-responsive" src="./img/milton.jpeg" alt="" style="
									width: 87%">
						</div>
						<div class="team-content">
							
							<span>Ing. Milton A. Heredia Mercado<br><strong> Jefe de Personal - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org"><font style="text-transform: lowercase;">rrhh@hospitalviedma.org</font></a></span>
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
							<img class="img-responsive" src="./img/villegas.jpeg" alt="" style="
									width: 87%">
						</div>
						<div class="team-content">
							
							<span>Dr. Ricardo A. Villegas Nava<br><strong> Jefe de Medicina - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org"><font style="text-transform: lowercase;">medicina@hospitalviedma.org</font></a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Cirug&iacute;a</h5>
							<img class="img-responsive" src="./img/amaya.jpeg" alt="" style="
									width: 85%">
						</div>
						<div class="team-content">
							
							<span>Dr. Eduardo Amaya Rocha<br><strong> Jefe de Cirug&iacute;a - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org"><font style="text-transform: lowercase;">cirugia@hospitalviedma.org</font></a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Jefatura de Ense??anza e Investigaci&oacute;n</h5>
							<img class="img-responsive" src="./img/chavez.jpeg" alt="" style="
									width: 80%">
						</div>
						<div class="team-content">
							
							<span>Dr. Nelson I. Chavez Mostajo<br><strong> Jefe de Ense??anza e Investigaci&oacute;n - Hospital Cl&iacute;nico Viedma </strong><br>
							<a href="http://webmail.hospitalviedma.org"><font style="text-transform: lowercase;">investigacion@hospitalviedma.org</font></a></span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->
			
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/P1.jpg');">
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
                           	while($rr=mysql_fetch_array($ss)){

    						$url = $rr['video'];
						    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
						    $id = $matches[1];
						

                          ?>
				<!-- blog -->
				<div class="col-md-6 col-lg-6 col-xs-12">
					<div class="blog">
						<div class="blog-img">
							<iframe id="ytplayer" type="text/html" "
							    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
							    frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="blog-content">
							<h3><?php echo $rr['titulo']; ?></h3>
							<p ALIGN="justify"><?php echo $rr['desc_an']; ?><br><br></p>
						</div>
					</div>
				</div>
				<!-- /blog -->
				<?php }?>
				<!-- blog -->
				<div class="col-md-6 col-lg-6 col-xs-12">
					<div class="blog">
						<div class="blog-img">
							<?php
                        $rs = mysql_query("SELECT MAX(id_aviso) AS id FROM avisos");
						if ($row = mysql_fetch_row($rs)) {
						$id = trim($row[0]);
						}

						$ss = mysql_query("SELECT * FROM avisos where id_aviso=$id");
                           	while($rr=mysql_fetch_array($ss)){

                          ?>
                          <style type="text/css">
                          	iframe{
							  width: 100%;
							  height: 300px;
							  /*S??lo para que se vea, ya que la direcci??n al parecer est?? mal*/
							  border: 3px solid #2981BA;
								}
								video{
									border: 3px solid #2981BA;
								}
                          </style>
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
							<p ALIGN="justify"><?php echo $rr['desc_a']; ?><br><br></p>
							<a href=""><h6 style="color: #A0A2A2"><?php echo $rr['firma']; ?></h6></a>
							<h6><p><?php echo $rr['fecha_a']; ?></p></h6>
						</div>
						<div class="blog-content">
							
						</div>
					</div>
					<?php }?>
				</div>
				<!-- /blog -->
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
						<a href="http://webmail.hospitalviedma.org"><p>info@hospitalviedma.org</p></a>
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
					<form class="contact-form" name="form1" action="index.php" method="post" id="Regcom" enctype="multipart/form-data">
						<input type="text" class="input" placeholder="Nombre" id="name" name="name" >
						<input type="email" class="input" placeholder="Correo Electronico" id="email" name="email" >
						<input type="text" class="input" placeholder="Asunto" id="asunto" name="asunto" >
						<textarea class="input" placeholder="Mensaje" id="mensaje" name="mensaje" ></textarea>
						<button class="main-btn" name="a_nuevo" id="a_nuevo">Eviar Mensaje</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->
		<div class="footer-copyright">
						<p>Copyright ?? 2019. Derechos Reservados Hospital Cl&iacute;nico Viedma <a href="login.php" target="_blank">Sistemas</a></p>
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
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>

<?php 

include "conexion.php";

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
		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title" style="color: white;">Especialidades</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
						<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">


			

				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Alergolog&iacute;a</h5>
							<img class="img-responsive" src="./img/a.jpeg" alt="" style="
									width: 90%">

									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#a"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br> Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- modal-->
								<div class="modal fade" id="a">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Alergolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Melina Nava</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">9</td>
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

							<!-- fin modal-->
				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Cardiolog&iacute;a</h5>
							<img class="img-responsive" src="./img/b.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#b"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>


								<!-- modal-->
								<div class="modal fade" id="b">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Cardiolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Jaime Arandia Guzman</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">12</td>
									              </tr>
									              <tr><td>Cupertino Zurita Vallejos</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">12</td>
									              </tr>
									              <tr><td>Carlos Pablo Cespedes Soto</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">07:00-13:00</td>
									                <td class="text-right">20</td>
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
				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Cirug&iacute;a General</h5>
							<img class="img-responsive" src="./img/c.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#c"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- modal-->
								<div class="modal fade" id="c">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Cirug&iacute;a General</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Sandra Mercado Villaroel</td>
									                <td>LUNES-JUEVES</td>
									                <td class="text-right">14:00-20:00</td>
									                <td class="text-right">21</td>
									              </tr>
									              <tr><td>Pablo Saavedra Verdun</td>
									                <td>MARTES Y MIERCOLES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">21</td>
									              </tr>
									              <tr><td>Nestor Villazon Teran</td>
									                <td>VIERNES</td>
									                <td class="text-right">09:00-12:00</td>
									                <td class="text-right">21</td>
									              </tr>

									              <tr><td>Miguel Tapia Terceros</td>
									                <td>JUEVES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">21</td>
									              </tr>
									             
									             <tr><td>Maximo Choque Paco</td>
									                <td>MARTES-VIERNES</td>
									                <td class="text-right">08:00-15:30</td>
									                <td class="text-right">21</td>
									              </tr>
									              <tr><td>Juvenal Butron Arce</td>
									                <td>LUNES</td>
									                <td class="text-right">09:00-14:00</td>
									                <td class="text-right">21</td>
									              </tr>

									              <tr><td>Jose Antonio Ramirez Torrejon</td>
									                <td>MIERCOLES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">21</td>
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


				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Dermatolog&iacute;a</h5>
							<img class="img-responsive" src="./img/d.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#d"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /team -->


				<!-- modal-->
								<div class="modal fade" id="d">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Dermatolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Juana Marquina Lozada</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-11:00</td>
									                <td class="text-right">6</td>
									              </tr>
									              <tr><td>Jose Maria Azeñas</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">5</td>
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


				<!-- team -->
				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Endocrinolog&iacute;a</h5>
							<img class="img-responsive" src="./img/e.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#e"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>



				<!-- modal-->
								<div class="modal fade" id="e">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Endocrinolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Jose Edwin Soto Perez</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-11:00</td>
									                <td class="text-right">9</td>
									              </tr>
									              <tr><td>Ariel Jose Orellana Crespo</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">11</td>
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

				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Epidemiolog&iacute;a</h5>
							<img class="img-responsive" src="./img/f.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#f"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- modal-->
								<div class="modal fade" id="f">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Epidemiolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Teddy Peñafiel Trujillo</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">2º PISO</td>
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

				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Hematolog&iacute;a</h5>
							<img class="img-responsive" src="./img/g.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#g"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- modal-->
								<div class="modal fade" id="g">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Hematolog&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Ricardo Atilio Villegas Nava</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">6</td>
									              </tr>

									              <tr><td>Javier Luis Salinas Escobar</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">11:00-14:00</td>
									                <td class="text-right">3</td>
									              </tr>

									              <tr><td>Grace Anze Barrientos</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">15</td>
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
				<div class="col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Geriatr&iacute;a</h5>
							<img class="img-responsive" src="./img/h.jpeg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#h"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- modal-->
								<div class="modal fade" id="h">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Especialidad Geriatr&iacute;a</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Doctor</th>
									                <th>Dias</th>
									                <th class="text-right">Horario</th>
									                <th class="text-right">Consulorio</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>Maria Elena Avalos Diaz</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">11:00-17:00</td>
									                <td class="text-right">16</td>
									              </tr>

									              <tr><td>Jose Wilfredo Villarroel La Fuente</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">14:00-17:00</td>
									                <td class="text-right">11</td>
									              </tr>

									              <tr><td>Heidi Cladera Saenz</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">08:00-14:00</td>
									                <td class="text-right">15</td>
									              </tr>
									              <tr><td>Juan Venegas Romero</td>
									                <td>LUNES A VIERNES</td>
									                <td class="text-right">07:30-13:30</td>
									                <td class="text-right">ROTATORIO</td>
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
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>

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
					<li><a href="/#home">Inicio</a></li>
					<li><a href="/#about">Sobre Nosotros</a></li>
					<li><a href="especialidades">Especialidades</a></li>
					<li><a href="servicios">Servicios</a></li>
					<li><a href="/#Personal">Direcci&oacute;n Ejecutiva</a></li>
					<li class="has-dropdown"><a href="/#blog">Noticias</a>
					<ul class="dropdown">
							<li><a href="blog">Todas las Noticias</a></li>
						</ul></li>
					<li><a href="/#contact">Cont&aacute;ctenos</a></li>
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
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title" style="color: white;">Servicios</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
						<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">


			

				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Laboratorio</h5>
							<img class="img-responsive" src="./img/ico_laboratorio.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Laboratorio</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>07:00 - 10:30</td>
									                <td>07:00 - 10:30</td>
									                <td class="text-right">07:00 -09:00 y 17:00 - 19:00</td>
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
				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Tomograf&iacute;a - Rayos X</h5>
							<img class="img-responsive" src="./img/ico_tomo_rayos.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Tomografia - Rayos X</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>08:00 - 16:00</td>
									                <td>08:00 - 16:00</td>
									                <td class="text-right">08:00 - 16:00; Emergencias atencion 24 hrs</td>
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
				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Electroencefalograma</h5>
							<img class="img-responsive" src="./img/ico_electroencefalograma.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Electroencefalograma</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>09:00 - 14:00</td>
									                <td>09:00 - 14:00</td>
									                <td class="text-right">09:00 - 14:00</td>
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


				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Electrocardiograma</h5>
							<img class="img-responsive" src="./img/ico_electrocardiograma.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Electrocardiograma</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>08:00 - 11:00</td>
									                <td>08:00 - 11:00</td>
									                <td class="text-right">08:00 - 11:00</td>
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
				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Ecocardiograma</h5>
							<img class="img-responsive" src="./img/ico_ecocardiograma.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Ecocardiograma</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>08:00 - 10:30</td>
									                <td>08:00 - 10:30</td>
									                <td class="text-right">10:00 - 14:00</td>
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

				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Electromiografía</h5>
							<img class="img-responsive" src="./img/ico_electromiografia.jpg" alt="" style="
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
									          <h3 class="modal-title">Servicio de Electromiografía</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>19:00 - 20:00</td>
									                <td>19:00 - 20:00</td>
									                <td class="text-right">19:00 - 20:00</td>
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

				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Fisioterapia</h5>
							<img class="img-responsive" src="./img/ico_fisioterapia.jpg" alt="" style="
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
									<div class="modal-dialog">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Servicio de Fisioterapia</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Sesiones</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>08:00 - 20:00</td>
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
				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Microbiología</h5>
							<img class="img-responsive" src="./img/ico_microbiologia.jpg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#i"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>



				<!-- modal-->
								<div class="modal fade" id="i">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Servicio de Microbiología</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>08:00 - 10:00</td>
									                <td>08:00 - 10:00</td>
									                <td class="text-right">13:00 - 15:00</td>
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

				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Ecografía</h5>
							<img class="img-responsive" src="./img/ico_ecografia.jpg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#j"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- modal-->
								<div class="modal fade" id="j">
									<div class="modal-dialog">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Servicio de Ecografía</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>07:00 - 13:00 y 13:00 - 16:00</td>
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

				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center">Cistoscopia</h5>
							<img class="img-responsive" src="./img/ico_cistoscopia.jpg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#k"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- modal-->
								<div class="modal fade" id="k">
									<div class="modal-dialog modal-lg">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Servicio de Cistoscopia</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									                <th>Recepci&oacute;n y/o Toma Muestras</th>
									                <th class="text-right">Entrega Resultados</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>11:00 - 12:00</td>
									                <td>11:00 - 12:00</td>
									                <td class="text-right">11:00 - 12:00</td>
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
				<div class="col-sm-4 col-md-3 col-xs-10 col-xs-offset-1">
					<div class="team">
						<div class="team-img">
							<h5 align="center"> Farmacia</h5>
							<img class="img-responsive" src="./img/ico_farmacia.jpg" alt="" style="
									width: 90%">
									<div class="overlay">
								<div class="team-social">
									<a data-toggle="modal" data-target="#l"><i class="fa fa-search" aria-hidden="true" high="145%"></i><br>Ver</a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- modal-->
								<div class="modal fade" id="l">
									<div class="modal-dialog">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									          <h3 class="modal-title">Servicio de Farmacia</h3>
									        </div>
									        <div class="modal-body">
											  <h5 class="text-center">Informaci&oacute;n</h5>
									          <table class="table table-striped" id="tblGrid">
									            <thead id="tblHead">
									              <tr>
									                <th>Horario Atenci&oacute;n</th>
									              </tr>
									            </thead>
									            <tbody>
									              <tr><td>24 hrs</td>
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

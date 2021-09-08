<?php

include "conexion.php";
//include('conexion/verificar_gestion.php');
session_start();
/*------------------verificar que sea administrador------------------------*/
$tipousuario = $_SESSION['tipo'];

if(isset($_SESSION['usuario']) && $_SESSION['tipo']!=1)
{/*SI EL QUE INGRESO A NUESTRA PAGINA ES CONSULTOR DE CUALQUIER TIPO*/
		$home="";
		switch  ($_SESSION['tipo']){
        		case (2) :
            		$home="Modulos/Administrador/principal_admin.php";
                        break;                                       		
	          }   
		echo "<script> window.Location: .$home </script>";
}
elseif(!isset($_SESSION['usuario'])){
	header("Location:index.php");
}
/*------------------fin verificador administrador------------------------*/	


//identificador de tipo de usuario
$id_usuario=$_SESSION['id'];
$ss = mysql_query("SELECT id_usuario, nombre, usuario, password,tipo_usuario, habilitado FROM usuario WHERE usuario.id_usuario=$id_usuario");
$rr = mysql_fetch_array($ss)	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hospital CLinico Viedma</title>

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
					<li><a href="index.php">Mensajes</a></li>
					<li><a href="especialidades.php">Subir Noticias</a></li>
					<li><a href="cerrarSesion.php">Salir</a></li>
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

			<div class="section-header text-center">
					<h2 class="title" style="color: white;">Mensajes Entrantes</h2>
				</div>

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-10 col-md-offset-1">
					<div class="blog">
						<div class="blog-content">
							<h3 align="center">Le damos la bienvenida a los mensajes del Hospital Clinico Viedma</h3>
						</div>
							<div class="table-responsive">
								<div>
									<?php
									$tp1 = mysql_query("SELECT COUNT(nombre_p) as blog FROM blog_viedma");
									$row1 = mysql_fetch_array($tp1);
									$pro1=$row1['blog'];
									$t_pro1=$pro1;

									echo 'Total de mensajes recibidos: '.$t_pro1;
									?>
								</div>

                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                         <thead>
                                            <tr>
                                              <th>ID</th>
                                              <th>Cliente</th>	
											  <th>Descripcion</th>
											</tr>
                                        </thead>
                                        <tbody>
										<?php
                                            $ss = mysql_query("SELECT * FROM blog_viedma");
                           						while($rr=mysql_fetch_array($ss)){


                    						?>
                                            <tr>
                                                 <td WIDTH="7%"><?php echo $rr['id_blog_hosp']; ?></td>
												<td width="20%"><img src="./img/user.jpg"  class='img-responsive ' alt='Responsive image' width='100%' height='100%'></td>
												<td>
													<div class="col-md-12">
													<div class="col-md-9">
														<h4 style="text-transform: uppercase;"><?php echo $rr['asunto']; ?></h4>
													</div>
													<div class="col-md-3">
														<a href="#" class="reply">Responder <i class="fa fa-reply"></i></a>
														</div>
													</div>
													<br>
													<div class="col-md-12"><?php echo $rr['fecha_registro']; ?></div>
													<div class="col-md-12">De: <?php echo $rr['nombre_p']; ?></div>
													<div class="col-md-12"><?php echo $rr['mensaje']; ?></div><br>

													<div class="col-md-12"><h6><strong>Email: <?php echo $rr['email']; ?></strong></h6></div>
													</td>
											</tr>
											



											</tbody>

					
											
											
										<?php }?>
                                        
										
                                    </table> 
									</div>

						
					</div>
				</main>
				<!-- /Main -->


				<!-- Aside -->
				<aside id="aside" class="col-md-3">

					

					

				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

		<div class="footer-copyright">
						<p>Copyright © 2019. Derechos Reservados Hospital Cl&iacute;nico Viedma <a href="">Sistemas</a></p>
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

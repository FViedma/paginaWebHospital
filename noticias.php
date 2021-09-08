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

	$tp2 = mysql_query("SELECT COUNT(titulo) as aviso FROM noticias");
	$row2 = mysql_fetch_array($tp2);
	$pro2=$row2['aviso'];
	$t_pro2=$pro2;

	$tp1 = mysql_query("SELECT COUNT(titulo_a) as infor FROM avisos");
	$row1 = mysql_fetch_array($tp1);
	$pro1=$row1['infor'];
	$t_pro1=$pro1;


if(isset ($_POST['nuevo_a'])){
$name = $_POST['name_a'];
$desc_a = $_POST['desc_a'];
$firma_a = $_POST['firma_a'];
$fecha= date('Y-m-d h:i:s');

$ext_permitidas_foto = array('.jpg','.png','.JPG');
       if(!empty($_FILES['foto']['name'])){
            $nombre_archivo_foto = $_FILES['foto']['name'];
            $nombre_tmp_foto = $_FILES['foto']['tmp_name'];
            $ext_foto = substr($nombre_archivo_foto, strpos($nombre_archivo_foto, '.'));
            $tamano_foto = $_FILES['foto']['size'];
            $limite = 1000 * 1024;
            if(in_array($ext_foto, $ext_permitidas_foto)){
                if( $tamano_foto <= $limite ){
                    if( $_FILES['foto']['error'] <= 0 ){
                        if( file_exists( 'img/imagenes/'.$name.'.jpg')||file_exists( 'img/imagenes/'.$name.'.png')||file_exists( 'img/imagenes/'.$name.'.JPG') ){
                              $error_foto='El archivo  ya existe';
                              $error=true;
                        }
                        else{
                             move_uploaded_file($nombre_tmp_foto,'img/imagenes/'.$name.$ext_foto);
                             $foto=$name.$ext_foto;
                             $tiene_foto=1;
                        }

                     }else{
                            $error_foto='Error al subir el archivo';
                            $error=true;

                       }
                    }
                else{
                      $error_foto='El archivo debe un tama&ntilde;o menor a 1 Mega Byte';
                      $error=true;
                    }
            }else{
                $error=true;
                $error_foto='El archivo debe tener formato " jpg o png "';
            }
       }

       if(!empty($_FILES['foto1']['name'])){
       		$valor1=$name."2";
            $nombre_archivo_foto = $_FILES['foto1']['name'];
            $nombre_tmp_foto = $_FILES['foto1']['tmp_name'];
            $ext_foto = substr($nombre_archivo_foto, strpos($nombre_archivo_foto, '.'));
            $tamano_foto = $_FILES['foto1']['size'];
            $limite = 1000 * 1024;
            if(in_array($ext_foto, $ext_permitidas_foto)){
                if( $tamano_foto <= $limite ){
                    if( $_FILES['foto1']['error1'] <= 0 ){
                        if( file_exists( 'img/imagenes/'.$valor1.'.jpg')||file_exists( 'img/imagenes/'.$valor1.'.png')||file_exists( 'img/imagenes/'.$valor1.'.JPG') ){
                              $error_foto='El archivo  ya existe';
                              $error1=true;
                        }
                        else{
                             move_uploaded_file($nombre_tmp_foto,'img/imagenes/'.$valor1.$ext_foto);
                             $foto1 = $valor1.$ext_foto;
                             $tiene_foto=1;
                        }

                     }else{
                            $error_foto='Error al subir el archivo';
                            $error1=true;

                       }
                    }
                else{
                      $error_foto='El archivo debe un tama&ntilde;o menor a 1 Mega Byte';
                      $error1=true;
                    }
            }else{
                $error1=true;
                $error_foto='El archivo debe tener formato " jpg o png "';
            }
       }

       if(!empty($_FILES['foto2']['name'])){
       		$valor2=$name."3";
            $nombre_archivo_foto = $_FILES['foto2']['name'];
            $nombre_tmp_foto = $_FILES['foto2']['tmp_name'];
            $ext_foto = substr($nombre_archivo_foto, strpos($nombre_archivo_foto, '.'));
            $tamano_foto = $_FILES['foto2']['size'];
            $limite = 1000 * 1024;
            if(in_array($ext_foto, $ext_permitidas_foto)){
                if( $tamano_foto <= $limite ){
                    if( $_FILES['foto2']['error2'] <= 0 ){
                        if( file_exists( 'img/imagenes/'.$valor2.'.jpg')||file_exists( 'img/imagenes/'.$valor2.'.png')||file_exists( 'img/imagenes/'.$valor2.'.JPG') ){
                              $error_foto='El archivo  ya existe';
                              $error2=true;
                        }
                        else{
                             move_uploaded_file($nombre_tmp_foto,'img/imagenes/'.$valor2.$ext_foto);
                             $foto2 = $valor2.$ext_foto;
                             $tiene_foto=1;
                        }

                     }else{
                            $error_foto='Error al subir el archivo';
                            $error2=true;

                       }
                    }
                else{
                      $error_foto='El archivo debe un tama&ntilde;o menor a 1 Mega Byte';
                      $error2=true;
                    }
            }else{
                $error2=true;
                $error_foto='El archivo debe tener formato " jpg o png "';
            }
       }


       if(!empty($_FILES['foto3']['name'])){
       		$valor3=$name."4";
            $nombre_archivo_foto = $_FILES['foto3']['name'];
            $nombre_tmp_foto = $_FILES['foto3']['tmp_name'];
            $ext_foto = substr($nombre_archivo_foto, strpos($nombre_archivo_foto, '.'));
            $tamano_foto = $_FILES['foto3']['size'];
            $limite = 1000 * 1024;
            if(in_array($ext_foto, $ext_permitidas_foto)){
                if( $tamano_foto <= $limite ){
                    if( $_FILES['foto3']['error3'] <= 0 ){
                        if( file_exists( 'img/imagenes/'.$valor3.'.jpg')||file_exists( 'img/imagenes/'.$valor3.'.png')||file_exists( 'img/imagenes/'.$valor3.'.JPG') ){
                              $error_foto='El archivo  ya existe';
                              $error3=true;
                        }
                        else{
                             move_uploaded_file($nombre_tmp_foto,'img/imagenes/'.$valor3.$ext_foto);
                             $foto3 = $valor3.$ext_foto;
                             $tiene_foto=1;
                        }

                     }else{
                            $error_foto='Error al subir el archivo';
                            $error3=true;

                       }
                    }
                else{
                      $error_foto='El archivo debe un tama&ntilde;o menor a 1 Mega Byte';
                      $error3=true;
                    }
            }else{
                $error3=true;
                $error_foto='El archivo debe tener formato " jpg o png "';
            }
       }
 
    $sql = "INSERT INTO `avisos`(`titulo_a`, `img_a`,`img_b`, `img_c`,`img_d`,`desc_a`,`firma`,`fecha_a`)
        VALUES('$name','$foto', '$foto1', '$foto2', '$foto3','$desc_a', '$firma_a', '$fecha')";
           $result = mysql_query($sql,$conexion) or die(mysql_error());

           header("Location:noticias.php");
    //$correcto_mensaje = '"Funcionario Registrado!!", "Actividad Registrada Exitosamente!", "success"';

}

if(isset ($_POST['nuevo_t'])){
$url = $_POST['url_v'];
$tit_v = $_POST['name_t'];
$desc_v = $_POST['desc_t'];
$firma_v = $_POST['firma_v'];
$fechat= date('Y-m-d h:i:s');


    $sql = "INSERT INTO `noticias`(`titulo`,`desc_an`,`video`,`firma_v`,`fecha_reg_not`)
        VALUES('$tit_v', '$desc_v', '$url', '$firma_v', '$fechat')";
           $result = mysql_query($sql,$conexion) or die(mysql_error());

           header("Location:noticias.php");
    //$correcto_mensaje = '"Funcionario Registrado!!", "Actividad Registrada Exitosamente!", "success"';
}


	

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
					<li><a href="principal.php">Inicio</a></li>
					<li><a href="noticias.php">Subir Noticias</a></li>
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


	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">
				<div class="col-md-6">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Publicacion de Aviso</h3>
					</div>
					<!-- /Category -->
					<form class="form-validate form-horizontal" name="id_avisos" action="noticias.php" method="post" enctype="multipart/form-data">
						<div class="file-tab panel-body">
					    <label for="exampleFormControlFile1">Subir Imagenes </label>
					    <input type="file" accept="image/* " name="foto">
                        <label id="error_foto" class="error"><?php if(isset($error_foto)){ echo $error_foto; } ?></label><br>
					    <input type="file" accept="image/* " name="foto1">
					    <label id="error_foto" class="error1"><?php if(isset($error_foto)){ echo $error_foto; } ?></label><br>
					    <input type="file" accept="image/* " name="foto2">
                        <label id="error_foto" class="error2"><?php if(isset($error_foto)){ echo $error_foto; } ?></label><br>
					    <input type="file" accept="image/* " name="foto3">
                        <label id="error_foto" class="error3"><?php if(isset($error_foto)){ echo $error_foto; } ?></label>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Titulo Aviso</label>
					    <input class="form-control" id="name_a" name="name_a" rows="3" required></input>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Descripcion Aviso</label>
					    <textarea class="form-control" id="desc_a" name="desc_a" rows="3" required></textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Firma</label>
					    <input class="form-control" id="firma_a" name="firma_a" rows="3" required></input>
					  </div>
					  <div class="col-md-12" align="center">
                          <button type="reset" class="btn bg-defaultd  btn-flat" data-dismiss="form" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i><strong>&nbsp; &nbsp;RESTABLECER</strong></button>
                          <button  name="nuevo_a" type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o" aria-hidden="true"></i><strong>&nbsp; &nbsp; SUBIR AVISO</strong></button>
                        </div>
					</form>
					.
				</aside>
			</div>


			<div class="col-md-6">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Publicacion de Videos</h3>
					</div>
					<form class="form-validate form-horizontal" name="id_noticias" action="noticias.php" method="post">
						<div class="form-group">
					    <label for="exampleFormControlTextarea1">Canal URL</label>
					    <input class="form-control" id="url_v" name="url_v" rows="3" required></input>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Titulo Video</label>
					    <input class="form-control" id="name_t" name="name_t" rows="3" required></input>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Descripcion Video</label>
					    <textarea class="form-control" id="desc_t" name="desc_t" rows="3" required></textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Firma</label>
					    <input class="form-control" id="firma_v" name="firma_v" rows="3" required></input>
					  </div>
					  <div class="col-md-12" align="center">
                          <button type="reset" class="btn bg-defaultd  btn-flat" data-dismiss="form" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i><strong>&nbsp; &nbsp;RESTABLECER</strong></button>
                          <button  name="nuevo_t" type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o" aria-hidden="true"></i><strong>&nbsp; &nbsp; SUBIR VIDEO</strong></button>
                        </div>
					</form>
					.
				</aside>
			</div>
		</div>
			
			</div><br><br><br><br>

			<div class="col-md-12">
			<div class="col-md-6">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Administrar Avisos</h3>
					</div>
					
					.
				</aside>
			</div>
			<div class="col-md-6">
				<!-- Aside -->
				<aside id="aside" class="col-md-12" style="background:white;">

					<!-- Category -->
					<div class="widget">
						<br><br><h3 class="title" align="center">Administrar Videos</h3>
					</div>
					
					.
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

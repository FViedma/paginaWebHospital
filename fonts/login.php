<?php 

session_start();
//include "modulos/funciones.php";
$titulo="Iniciar sesi&oacute;n usuarios";
if(isset($_SESSION['usuario'])){
    $home="";
    switch  ($_SESSION['tipo']){
        case (2) :
            $home="Modulos/Administrador/principal_admin.php";
                        break;
        case (1) :
            $home="principal.php";
                        break;                                                                  
    }   
    header("Location: ".$home);
}

// opciones de usuario
$error=false;
include "conexion.php";

if (isset($_POST['aceptar'])) { 
        $usuario = trim($_POST['usuario']);
        $clave = trim($_POST['password']);
        $consulta_sql="SELECT *
                       FROM usuario 
                       WHERE usuario='$usuario' and password='$clave' and (tipo_usuario=1 OR tipo_usuario=2) AND habilitado=1";
        $consulta = mysql_query($consulta_sql,$conexion)
        or die("Could not execute the select query.");
        $resultado = mysql_fetch_assoc($consulta);

                    if(is_array($resultado) && !empty($resultado) )
                    {
                        $_SESSION['id'] = $resultado['id_usuario'];
                        $_SESSION['tipo']= $resultado['tipo_usuario'];
                        $_SESSION['usuario'] = $resultado['usuario'];
                        $_SESSION['password'] = $resultado['password'];
                    }
                else{
                        $error=true;
                        $error_sesion="Los datos incorrectos o usted no esta habilitado para esta gesti&oacute;n";
                    }
                    if(!$error){
                        if(isset($_SESSION['usuario']))
                        {
                    
                            $home="";
                            switch  ($_SESSION['tipo']){
                            case (2) :
                                $home="Modulos/Administrador/principal_admin.php";
                                  break;
                            case (1) :
                                $home="principal.php";
                                    break; 
                                }    
                            header("Location: ".$home);
                        }
                        mysql_free_result($consulta);
                    }

}
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Sistema Fichaje HCV</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="shortcut icon" href="favicon.jpg">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <!--div class="login-logo"></div-->
                <div class="login-body">
                    <div class="login-title">
                        <img src="assets/images/logo1.png"/></div><br>
                      <!--  <strong>Inicia Sesión</strong> a tu cuenta</div> -->
					<form id="miFormulario" action="" class="form-horizontal" method="post" >
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-2 col-xs-2">
                            <h2><span class="glyphicon glyphicon-user form-control-feedback"></span></h2>
                        </div>
                        <div class="col-md-10 col-xs-10">
							<input type="text" class="form-control" name="usuario" id="usuario" autofocus="" placeholder="Ingrese su usuario" required/>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <div class="col-md-2 col-xs-2">
                            <h2><span class="glyphicon glyphicon-lock form-control-feedback"></span></h2>
                        </div>
                        <div class="col-md-10 col-xs-10">
							<input type="password" name="password" id="password" class="form-control" autofocus="" placeholder="Ingrese su contraseña" required/>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="profile-image">
						<img src="assets/images/user.png"/>
                    </div>
                        </div>
                        <div class="col-md-6">
                            <h2><button name="aceptar" class="btn btn-primary btn-block" type="submit"><strong>Ingresar&nbsp; &nbsp; &nbsp; <i class="fa fa-sign-in" aria-hidden="true"></i></strong></button></h2>
                        </div>
                    </div>
		
        <!-- codigo usable a futuro para cuando un usuario inicie sesion e introdusca mal los datos -->
				<!--?php

            $act ="1";
            if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
                $email = $_POST['usuario'];
                $password = $_POST['password'];
                //$password=claves($password);

                $can=mysql_query("SELECT * FROM usuario WHERE email='".$email."' and password='".$password."'");

                if (!$dato=mysql_fetch_array($can)) {
                    if ($act=="1") {
                        echo '<div class="p-container">
                            <div class="alert alert-block alert-danger fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong>Usuario o Contraseña Incorrecta</strong><a href="index.php" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                              </div>
                              </div>
                              ';
                    }else{
                        $act="0";
                    }
                }
                
            }


            ? -->
                   
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                       Sistemas &copy; 2019
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>
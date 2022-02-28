<?php
session_start();
include "../funciones.php";
//include "admin.php";
include_once("../conexion.php");
//include_once("admin.php"); 
//include '../conexiona.php';
	/*if (!isset($_GET['ID'])) {
		header('Location: admin.php');
	}*/
	/*if (!isset($_SESSION['usuario'])) {
		header('Location: home.php');
	}elseif(isset($_SESSION['usuario'])){*/
       /* include '../conexiona.php';
		$id = $_GET['ID'];

		$sentencia = $bd->prepare("SELECT * FROM administrador WHERE ID = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);*/
		//print_r($alumnos);
	/*}else{
		echo "Error en el sistema";
	}*/

	//if(!isset($_SESSION['usuario'])){
		//header("Location: loginadmi.php");
	//}

	//ini_set('error_reporting',0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/styless.css">
</head>
<body>
	<?php
	/*if(isset($_GET['usuario'])){
		$query = mysql_query($conexion, "SELECT * FROM administrador WHERE usuario = '".$_GET['usuario']."'");

		while($row=mysql_fetch_array($query)){*/
	
			$codigo = $_GET['ID'];
 
			$querybuscar = mysqli_query($conexion, "SELECT * FROM administrador WHERE ID=$codigo");
			 
			while($mostrar = mysqli_fetch_array($querybuscar))
			{
				$codigo = $mostrar['ID'];
				$usuario = $mostrar['usuario'];
				$contraseña = $mostrar['contraseña'];
				//$telefono = $mostrar['tel'];
			
	?>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				M A Y A B I O <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../img/adminp.png" alt="UserIcon">
					<figcaption class="text-center text-titles">Admin</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<!--<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>-->
					<li>
						<a href="#!" class="btn-exit-system">
							<!--<i class="zmdi zmdi-power"></i>-->
							<img src="../img/closese.png" alt="">
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<!--<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>--> <img src="../img/house.png" alt="bird">INICIO
					</a>
				</li>
				<!--<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administration <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="period.html"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Period</a>
						</li>
						<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="salon.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>
					</ul>
				</li>-->
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/user1.png" alt="bird">
						<!--<i class="zmdi zmdi-account-add zmdi-hc-fw"></i>--> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.php"><img src="../img/idicon.png" alt="bir"><!--<i class="zmdi zmdi-account zmdi-hc-fw"></i>--> Perfil</a>
						</li>
						<!--<li>
							<a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
						</li>
						<li>
							<a href="student.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Student</a>
						</li>-->
						<li>
							<a href="usuarioadmi.php"><img src="../img/peo.png" alt="bir"><!--<i class="zmdi zmdi-male-female zmdi-hc-fw">--></i> Usuarios</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/store.png" alt="bird">
						<!--<i class="zmdi zmdi-card zmdi-hc-fw"></i>--> Mercados <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="mercadoadmi.php"><img src="../img/sbasket.png" alt="bir"><!--<i class="zmdi zmdi-money-box zmdi-hc-fw"></i>--> Mercados</a>
						</li>
						<!--<li>
							<a href="payments.html"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments</a>
						</li>-->
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/ubicacion.png" alt="bird">
						<!--<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i>--> Ubicacion <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="ubicacionadmi.php"><img src="../img/ubi.png" alt="bir"><!--<i class="zmdi zmdi-balance zmdi-hc-fw"></i>--> Ubicacion</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/iconcertificate.png" alt="bir">
						<!--<i class="zmdi zmdi-case zmdi-hc-fw"></i>--> Certificado <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="certificadoadmi.php"><img src="../img/certifi.png" alt="bir"><!--<i class="zmdi zmdi-timer zmdi-hc-fw"></i>--> Certificado</a>
						</li>
						<!--<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Subject</a>
						</li>
						<li>
							<a href="section.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Section</a>
						</li>
						<li>
							<a href="salon.html"><i class="zmdi zmdi-font zmdi-hc-fw"></i> Salon</a>
						</li>-->
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/organic.png" alt="bird">
						<!--<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i>--> Productos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="productosadmi.php"><img src="../img/material.png" alt="bir"><!--<i class="zmdi zmdi-balance zmdi-hc-fw"></i>--> Productos</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<!--<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>-->
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><img src="../img/2.jpg" alt="bir"><!--<i class="zmdi zmdi-account zmdi-hc-fw"></i>--> Admin <small>Administrador</small></h1>
			</div>
			<p class="lead">Aqui puede editar su perfil y revisar los demas administradores del sistema!</p>
		</div>
		<div class="container-fluid">

        <h3>Editar perfil:</h3>
                <!--<form action="editaradmp.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">-->
				<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <table>
                        <tr>
                            <td>Usuario: </td>
                            <td><input type="text" name="txt2Usu" value="<?php echo $usuario; ?>"></td>
                        </tr>
                        <tr>
                            <td>Contraseña: </td>
                            <td><input type="text" name="txt2Contra" value="<?php echo $contraseña; ?>"></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><input type="submit" name="editar" id="button" value="EDITAR"></td>
                        </tr>
                    </table>
                </form>

				<?php
				if(isset($_POST['editar'])){
					$codigo1 = $_POST[''];
					$usuario1 = $_POST['txt2Usu'];
					$contraseña1 = $_POST['txt2Contra'];
					$querymodificar = mysqli_query($conexion, "UPDATE administrador SET usuario='$codigo1', contraseña='$contraseña1' WHERE ID=$codigo1");

					echo "<script>window.location= 'admin.php' </script>";
				}

				/*if(isset($_POST['editar'])){
					$usuario = clean($_POST['usuario']);
					$contrasena = clean($_POST['contraseña']);
					if($_POST['contraseña'] != '') { $contrasena = $_POst['contraseña'];} else { $contrasena = $row['contraseña']; }

					$sql = mysqli_query($conexion, "UPDATE administrador SET usuario = '".$usuario."', contraseña = '".$contrasena."' WHERE ID = '".$_GET['ID']."'");

					if($sql){echo "Se han actualizado los datos";}*/
				?>

            <!--<center>
                <h3>Editar alumno:</h3>
                <form method="POST" action="editaradmp.php">
                    <table>
                        <tr>
                            <td>Usuario: </td>
                            <td><input type="text" name="txt2Usu" value="<?php echo $persona->usuario; ?>"></td>
                        </tr>
                        <tr>
                            <td>Contraseña: </td>
                            <td><input type="text" name="txt2Contra" value="<?php echo $persona->contraseña; ?>"></td>
                        </tr>
                        <!--<tr>
                            <td>Nombre: </td>
                            <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombre; ?>"></td>
                        </tr>
                        <tr>
                            <td>Examen parcial: </td>
                            <td><input type="text" name="txt2Parcial" value="<?php echo $persona->ex_parcial; ?>"></td>
                        </tr>
                        <tr>
                            <td>Examen final: </td>
                            <td><input type="text" name="txt2Final" value="<?php echo $persona->ex_final; ?>"></td>
                        </tr>--
                        <tr>
                            <input type="hidden" name="oculto">
                            <input type="hidden" name="id2" value="<?php echo $persona->ID; ?>">
                            <input type="hidden" name="idrol2" value="<?php echo $persona->id_rol; ?>">
                            <td colspan="2"><input type="submit" value="EDITAR"></td>
                        </tr>
                    </table>
                </form>
            </center>-->

		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Ayuda</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Aqui muestra !
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<?php
			}
	//}
	?>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>
<?php
session_start();
include_once("../conexion.php"); 
?>
	<title>Representative</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/styless.css">
</head>
<body>
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
					<figcaption class="text-center text-titles">bienvenido <strong><?php echo $_SESSION['usuario']; ?></strong></figcaption>
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
				<!--<li>
					<a href="home.php">
						<!--<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>-- <img src="../img/house.png" alt="bird">INICIO
					</a>
				</li>-->
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
						<li>
							<a href="productoradmi.php"><img src="../img/sbasket.png" alt="bir"><!--<i class="zmdi zmdi-money zmdi-hc-fw">--></i> Productores</a>
						</li>
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
						<li>
							<a href="direccionproadmi.php"><img src="../img/ubi.png" alt="bir"><!--<i class="zmdi zmdi-balance zmdi-hc-fw"></i>--> Direccion productor</a>
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
			  <h1 class="text-titles"><img src="../img/users_844.png" alt="bir"><!--<i class="zmdi zmdi-male-female zmdi-hc-fw"></i>--> Usuarios <small>administrar</small></h1>
			</div>
			<p class="lead">En esta parte puedes agregar y editar a los usuarios que contiene el sistema!</p>
			<p>buscar por usuario</p>
		</div>
		<!--<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">New</a></li>
					  	<li><a href="#list" data-toggle="tab">List</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
									    	<div class="form-group label-floating">
											  <label class="control-label">Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Last Name</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Address</label>
											  <textarea class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Phone</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Occupation</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Gender</label>
										        <select class="form-control">
										          <option>Male</option>
										          <option>Female</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Name</th>
											<th class="text-center">Last Name</th>
											<th class="text-center">Address</th>
											<th class="text-center">Email</th>
											<th class="text-center">Phone</th>
											<th class="text-center">Occupation</th>
											<th class="text-center">Gender</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Carlos</td>
											<td>Alfaro</td>
											<td>El Salvador</td>
											<td>carlos@gmail.com</td>
											<td>+50312345678</td>
											<td>Web Developer</td>
											<td>Male</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Alicia</td>
											<td>Melendez</td>
											<td>El Salvador</td>
											<td>alicia@gmail.com</td>
											<td>+50312345678</td>
											<td>Social Work</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sarai</td>
											<td>Mercado</td>
											<td>El Salvador</td>
											<td>sarai@gmail.com</td>
											<td>+50312345678</td>
											<td>Lawyer</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Alba</td>
											<td>Bonilla</td>
											<td>El Salvador</td>
											<td>alba@gmail.com</td>
											<td>+50312345678</td>
											<td>Designer</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>5</td>
											<td>Claudia</td>
											<td>Rodriguez</td>
											<td>El Salvador</td>
											<td>claudia@gmail.com</td>
											<td>+50312345678</td>
											<td>Lawyer</td>
											<td>Female</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>-->
		
		<table>

			<!--<img src="logo.png">-->
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
		</form>
		</div>
			<tr><th colspan="4"><h1>LISTAR USUARIOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>Id</th>
			<th>Usuario</th>
            <th>Contraseña</th>
            <th>Id_rol</th>
            <!--<th>Id_pro</th>-->
            <th>Acción</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conexion, "SELECT id,Usuario,Contraseña,id_rol FROM usuarios where Usuario like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conexion, "SELECT * FROM usuarios ORDER BY id asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    $numerofila++;    
            echo "<tr>";
			/*echo "<td>".$numerofila."</td>";*/
            echo "<td>".$mostrar['id']."</td>";
            echo "<td>".$mostrar['Usuario']."</td>";
            echo "<td>".$mostrar['Contraseña']."</td>";    
			echo "<td>".$mostrar['id_rol']."</td>"; 
            echo "<td style='width:26%'><a href=\"editaradf.php?cod=$mostrar[id]\">Modificar</a> | 
			<a href=\"eliminarusuadmi.php?cod=$mostrar[id]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[Usuario]?')\">Eliminar</a></td>";           
		}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo usuario</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>Correo</td>
                <td><input type="email" name="txtcorreo" required></td>
            </tr>
            <tr> 
                <td>Teléfono</td>
                <td><input type="number" name="txttelefono" required></td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
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
			        	En esta ventana muestra!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
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
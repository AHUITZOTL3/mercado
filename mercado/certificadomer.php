<?php
session_start();
include '../conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Certificado mercado</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/mercado.css">
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
					<img src="../img/fruits.png" alt="UserIcon">
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
					<a href="iniciomer.php">
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
						<!--<i class="zmdi zmdi-account-add zmdi-hc-fw"></i>--> Usuario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<!--<li>
							<a href="admin.php"><img src="../img/idicon.png" alt="bir"><!--<i class="zmdi zmdi-account zmdi-hc-fw"></i> Admin</a>
						</li>
						<li>
							<a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
						</li>
						<li>
							<a href="student.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Student</a>
						</li>-->
						<li>
							<a href="usuariomer.php"><img src="../img/clientp.png" alt="bir"><!--<i class="zmdi zmdi-male-female zmdi-hc-fw"></i>--> Perfil</a>
						</li>
						<li>
							<a href="integrantesmer.php"><img src="../img/users_844.png" alt="bir"><!--<i class="zmdi zmdi-male-female zmdi-hc-fw">--></i> Integrantes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/store.png" alt="bird">
						<!--<i class="zmdi zmdi-card zmdi-hc-fw"></i>--> Mercados <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="mercadomer.php"><img src="../img/sbasket.png" alt="bir"><!--<i class="zmdi zmdi-money-box zmdi-hc-fw"></i>--> Mercados</a>
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
							<a href="ubicacionmer.php"><img src="../img/ubi.png" alt="bir"><!--<i class="zmdi zmdi-balance zmdi-hc-fw"></i>--> Ubicacion</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu"><img src="../img/iconcertificate.png" alt="bir">
						<!--<i class="zmdi zmdi-case zmdi-hc-fw"></i>--> Certificado <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="certificadomer.php"><img src="../img/certifi.png" alt="bir"><!--<i class="zmdi zmdi-timer zmdi-hc-fw"></i>--> Certificado</a>
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
							<a href="productosmer.php"><img src="../img/fruitsve.png" alt="bir"><!--<i class="zmdi zmdi-balance zmdi-hc-fw"></i>--> Productos</a>
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
			  <h1 class="text-titles"><img src="../img/cv.png" alt="bir"><!--<i class="zmdi zmdi-timer zmdi-hc-fw"></i>--> Certificado <small>¡¡</small></h1>
			</div>
			<p class="lead">Aqui puede ingresar su informacion referente a su certificado del mercado!</p>
		</div>
		<div class="container-fluid">
			<!--<div class="row">
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
											<div class="form-group">
										      <label class="control-label">Status</label>
										        <select class="form-control">
										          <option>Active</option>
										          <option>Disable</option>
										        </select>
										    </div>
											<div class="form-group">
											  <label class="control-label">Start Date</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group">
											  <label class="control-label">End Date</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Amount</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Year</label>
										        <select class="form-control">
										          <option>2017</option>
										          <option>2016</option>
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
											<th class="text-center">Status</th>
											<th class="text-center">Start Date</th>
											<th class="text-center">End Date</th>
											<th class="text-center">Amount</th>
											<th class="text-center">year</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>First</td>
											<td>Active</td>
											<td>07/01/2017</td>
											<td>06/04/2017</td>
											<td>$40</td>
											<td>2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Second</td>
											<td>Active</td>
											<td>07/04/2017</td>
											<td>06/08/2017</td>
											<td>$40</td>
											<td>2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Third</td>
											<td>Active</td>
											<td>07/08/2017</td>
											<td>06/12/2017</td>
											<td>$40</td>
											<td>2017</td>
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
			</div>-->

			<a href="regiscertificli.php">Registrar</a></td>
		</form>
		<table>	
				<!--<div id="barrabuscar">-->
			<form method="POST">
			<!--<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">-->
			</form>
			</div>
				<tr><th colspan="5"><h1>LISTA CERTIFICADOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
				<tr>
				<th>Id</th>
				<th>Numero de certificado</th>
				<th>Fecha de vencimiento</th>
				<th>Certificadora</th>
				<th>Alcance</th>
				<!--<th>Acción</th>-->
				</tr>
			<?php 

		if(isset($_POST['btnbuscar']))
		{
		$buscar = $_POST['txtbuscar'];
		$queryusuarios = mysqli_query($conexion, "SELECT idcertificacion,Numcert,Fechaven,Certificadoraem FROM certificacion where nom like '".$buscar."%'");
		}
		else
		{
		$queryusuarios = mysqli_query($conexion, "SELECT * FROM certificacion ORDER BY idcertificacion asc");
		//asc
		}
		//$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    //$numerofila++;    
            echo "<tr>";
			//echo "<td>".$numerofila."</td>";
			echo "<td>".$mostrar['idcertificacion']."</td>";
            echo "<td>".$mostrar['Numcert']."</td>";
            echo "<td>".$mostrar['Fechaven']."</td>";
            echo "<td>".$mostrar['Certificadoraem']."</td>";    
			echo "<td>".$mostrar['Alcance']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?idcertificacion=$mostrar[idcertificacion]\">Modificar</a> | <a href=\"eliminar.php?cod=$mostrar[idcertificacion]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[Numcert]?')\">Eliminar</a></td>";           
		}
        ?>
    	</table>

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
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
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
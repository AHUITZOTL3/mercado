<?php
session_start();
include '../conexion.php';

$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
	header("Location: ../login.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registration</title>
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
			  <h1 class="text-titles"><img src="../img/shoppingb.png" alt="bir"><!--<i class="zmdi zmdi-money-box zmdi-hc-fw"></i>--> Productores <small>lista</small></h1>
			</div>
			<p class="lead">Muestra los datos sobre los productores registrados en el sistema !</p>
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
											  <label class="control-label">Payment</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Amount</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Student Code</label>
											  <textarea class="form-control"></textarea>
											</div>
											<div class="form-group">
										        <label class="control-label">Section</label>
										        <select class="form-control">
										          <option>1 grade</option>
										          <option>2 grade</option>
										          <option>3 grade</option>
										          <option>4 grade</option>
										          <option>5 grade</option>
										        </select>
										    </div>
											<div class="form-group">
										        <label class="control-label">Year</label>
										        <select class="form-control">
										          <option>2017</option>
										          <option>2016</option>
										          <option>2015</option>
										          <option>2014</option>
										          <option>2013</option>
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
											<th class="text-center">Payment</th>
											<th class="text-center">Amount</th>
											<th class="text-center">Pending</th>
											<th class="text-center">Student</th>
											<th class="text-center">Section</th>
											<th class="text-center">Year</th>
											<th class="text-center">Update</th>
											<th class="text-center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>$70</td>
											<td>$40</td>
											<td>$30</td>
											<td>Carlos Alfaro</td>
											<td>Section</td>
											<td>2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>$70</td>
											<td>$70</td>
											<td>$0</td>
											<td>Claudia Rodriguez</td>
											<td>Section</td>
											<td>2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td>$70</td>
											<td>$70</td>
											<td>$0</td>
											<td>Alicia Melendez</td>
											<td>Section</td>
											<td>2017</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<tr>
											<td>4</td>
											<td>$70</td>
											<td>$70</td>
											<td>$0</td>
											<td>Alba Bonilla</td>
											<td>Section</td>
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

			<!--<table>	
				<div id="barrabuscar">
			<form method="POST">
			<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar nombre de usuario">
			</form>-->
			</div>
				<!--<tr><th colspan="5"><h1>LISTAR USUARIOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
				<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Descripcion</th>
				<!--<th>Acción</th>--
				</tr>-->
			<?php 

		/*if(isset($_POST['btnbuscar']))
		{
		$buscar = $_POST['txtbuscar'];
		$queryusuarios = mysqli_query($conexion, "SELECT idcertificacion,Numcert,Fechaven,Certificadoraem FROM mercadoorganico where nom like '".$buscar."%'");
		}
		else
		{
		$queryusuarios = mysqli_query($conexion, "SELECT * FROM mercadoorganico ORDER BY idmercado asc");
		}
		//$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{    //$numerofila++;    
            echo "<tr>";
			//echo "<td>".$numerofila."</td>";
			echo "<td>".$mostrar['idmercado']."</td>";
            echo "<td>".$mostrar['Nombremercado']."</td>";
			/*echo "<td>"<img height="200px" src="data:image/jpeg;base64, <?php echo base64_encode($separar['pancarta']); ?>"/> "</td>"*
            echo "<td>".$mostrar['pancarta']."</td>";
            //echo "<td>".$mostrar['Certificadoraem']."</td>";    
			//echo "<td>".$mostrar['Alcance']."</td>";  
            echo "<td style='width:26%'><a href=\"editar.php?idmercado=$mostrar[idmercado]\">Modificar</a> | <a href=\"eliminar.php?cod=$mostrar[idmercado]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[Nombremercado]?')\">Eliminar</a></td>";           
		}*/
        ?>
    	</table>

		<?php
		/*include("../conexion.php");
		$id=$_REQUEST['idmercado'];

		$query="SELECT * FROM mercadoorganico WHERE idmercado='$id";
		$resultado = $conexion->query($query);
		$row = $resultado->fetch_assoc();*/
		?>
		<center>
			
		
		<table width="1000" height="360" border="1"bgcolor="FFFFF">
			<thead>
				<!--<tr height="40" >
					<th colspan="5" >nuevo</th>
				</tr>-->
				<tr height="60">
					<th width="80" >Id</th>
					<th width="80">Nombre</th>
					<th width="80">Apellido paterno</th>
                    <th width="80">Apellido materno</th>
                    <th width="80">Telefono</th>
					<th width="80" colspan="2">operacion</th>
				</tr>
			</thead>
			<tbody>
		<?php
		include("../conexion.php");
		$query= "SELECT * FROM productor";
		$resultado = $conexion->query($query);
		while($row= $resultado->fetch_assoc()){
		?>
		<tr>
			<td width="260"><center><?php echo $row['idproductor']; ?></center></td>
			<td width="400"><center><?php echo $row['Nombre']; ?></center></td>
            <td width="400"><center><?php echo $row['Apellidopaterno']; ?></center></td>
            <td width="400"><center><?php echo $row['Apellidomaterno']; ?></center></td>
            <td width="400"><center><?php echo $row['Telefono']; ?></center></td>
			<!--<td><center><img height="200px" src="data:image/jpeg;base64,<?php echo base64_encode($row['pancarta']); ?>"/></center></td>
			--<th width="420" ><a href="modificar.php?idmercado=<?php echo $row['idmercado']; ?>">modificar</a></th>
			<th width="420" ><a href="eliminar.php?idmercado=<?php echo $row['idmercado']; ?>">eliminar</a></th>-->
			<td width="380" ><a href="modificar.php?idmercado=<?php echo $row['idproductor']; ?>">modificar</a></td>
			<!--<td width="380" ><a href="eliminar.php?idmercado=<?php echo $row['idproductor']; ?>">eliminar</a></td>-->
		</tr>
		<?php
		}
		?>
		</tbody>
		</table>
		</center>		
			
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
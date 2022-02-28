<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximun-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/377b9e0c33.js" crossorigin="anonymous"></script>

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><!--<i class="fas fa-shopping-basket"></i>--><img src="../img/vegetable.png" alt=""></i><span>Mercado organico</span></h2>
            <!--<span class="lab la-accusoft"></span> -->
        </div>
    

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><!--<i class="fas fa-house-user"></i>--><img src="../img/house.png" alt="bird"></i>
                    <span>Inicio</span></a>
                </li>
                <li>
                    <a href=""><!--<i class="fas fa-users">--><img src="../img/user1.png" alt="bird"></i>
                    <span>Usuarios</span></a>
                </li>
                <li>
                    <a href=""><!--<i class="fas fa-store"></i>--><img src="../img/store.png" alt="bird"></i>
                    <span>Mercado</span></a>
                </li>
                <li>
                    <a href=""><!--<i class="fas fa-search-location"></i>--><img src="../img/ubicacion.png" alt="bird"></i>
                    <span>Ubicacion</span></a>
                </li>
                <li>
                    <a href=""><!--<i class="fas fa-apple-alt"></i>--><img src="../img/organic.png" alt="bird"></i>
                    <span>Productos</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Tasks</span></a>
                </li>
            </ul>        
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                MAYABIO
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar" />
            </div>

            <div class="user-wrapper">
                <img src="../img/adminp.png" width="40px" height="40px" alt="">
                <div>
                    <h4>ADMIN</h4>
                    <a href='salir.php'>SALIR</a>
                    <!--salir.php -->
                    <!--<small>Administrador</small>-->
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Usuarios</span>
                    </div>
                    <div>
                        <img src="../img/clients.png" alt=""></i>
                        <!--<span class="las la-users"></span>
                        <i class="fas fa-house-user"></i>-->
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Solicitudes</span>
                    </div>
                    <div>
                        <img src="../img/paper.png" alt=""></i>
                        <!--<span class="las la-clipboard-list"></span>-->
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Aceptadas</span>
                    </div>
                    <div>
                        <img src="../img/note.png" alt=""></i>
                        <!--<span class="las la-shopping-bag"></span>-->
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>

                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="car-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td><span class="status purple"></span>review</td>
                                        </tr>
                                        <tr>
                                            <td>Web development</td>
                                            <td>Frontend</td>
                                            <td><span class="status pink"></span>in progress</td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td><span class="status orange"></span>pending</td>
                                        </tr>

                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>UI Team</td>
                                            <td><span class="status purple"></span>review</td>
                                        </tr>
                                        <tr>
                                            <td>Web development</td>
                                            <td>Frontend</td>
                                            <td><span class="status pink"></span>in progress</td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td><span class="status orange"></span>pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New customer</h3>

                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="../img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S. Cunningham</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


</body>
</html>


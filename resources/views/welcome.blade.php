<!DOCTYPE html>
<html>
    <head>
        <title>Departamentos Colmena | Index de Administrador</title>

        <meta charset="UTF-8">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/notyf.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>        <script src="js/uikit.min.js" ></script>
        <script src="js/uikit-icons.min.js" ></script>
    </head>
    <body>

        <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                        <a href="#" class="uk-navbar-item uk-logo">
                            Departamentos Colmena | Administrador
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">Administrador &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Options</li>
                                       <li><a href="#">Editar Perfil</a></li>
                                       <li><a href="#">Salir</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">

                    <div class="uk-margin-top"></div>
                    
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                    Menu 
                </li>
                <li><a href="categorias.html">Propiedad</a></li>
                <li><a href="index_dashboard.html">Departamentos</a></li>
                <li><a href="donaciones.html">Contratos</a></li>
                <li><a href="_tipo_ordenes.html">Ordenes</a></li>
                <li><a href="publicaciones.html">Gastos Comun</a></li>
                <li><a href="reportes.html">Reportes</a></li>
                <li><a href="usuarios.html">Usuarios</a></li>
                <li class="uk-nav-header">
                    Ajustes
                </li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="article.html">Article</a></li>
            <li><a href="404.html">404</a></li>
            </ul>
        </div>
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h1><span class="ion-speedometer"></span>a primera mirada</h1>
                </div>
            </div>
            <div class="uk-section-small">
                <div class="uk-container uk-container-large">
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <span class="statistics-text">Ordenes Pendientes </span><br />
                                <span class="statistics-number">
                                    #
                                    <span class="uk-label uk-label-success">
                                        #% <span class="ion-arrow-up-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <span class="statistics-text">Gastos Común</span><br />
                                <span class="statistics-number">
                                    Agua
                                    <span class="uk-label uk-label-danger">
                                        % (pagado) <span class="ion-arrow-down-c"></span>
                                    </span><br/>
                                </span>
                                <span class="statistics-number">
                                    Copelec
                                    <span class="uk-label uk-label-danger">
                                        13% pagado <span class="ion-arrow-down-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <span class="statistics-text">Ordenes a la Propiedad</span><br />
                                <span class="statistics-number">
                                    #
                                    <span class="uk-label uk-label-success">
                                        #% <span class="ion-arrow-up-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <span class="statistics-text">Disponiblidad</span><br /> 
                                <span class="statistics-number">
                                    #
                                    <span class="uk-label uk-label-success">
                                        #% <span class="ion-arrow-up-c"></span>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    Ocupado 
                                </div>
                                <div class="uk-card-body">
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    Copelec medidor
                                </div>
                                <div class="uk-card-body">
                                    <canvas id="chart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
        <script src="js/notyf.min.js"></script>
        <!-- Required Overall Script -->
        <script src="js/script.js"></script>
        <!-- Status Updater -->
        <script src="js/status.js"></script>
        <!-- Sample Charts -->
        <script src="js/charts.js"></script>
        <!-- Sample Notifications -->
        <script src="js/notification.js"></script>
    </body>
</html>

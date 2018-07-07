<!DOCTYPE html>
<html>
<head>
  <title>C Y R | Departamentos</title>

  <meta charset="UTF-8">
  <meta name="description" content="Clean and responsive administration panel">
  <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
  <meta name="author" content="Erik Campobadal">
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
            Departamentos | Colmena Franco 
          </a>
        </div>
        <div class="uk-navbar-right uk-light">
          <ul class="uk-navbar-nav">
            <li class="uk-active">
              <a href="#">Administrador &nbsp;<span class="ion-ios-arrow-down"></span></a>
              <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li class="uk-nav-header">Options</li>
                  <li><a href="#">Edit Profile</a></li>
                  <li class="uk-nav-header">Actions</li>
                  <li><a href="#">Lock</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div id="sidebar" class="tm-sidebar-left uk-background-default">
    <ul class="uk-nav uk-nav-default">

      <li class="uk-nav-header">
        Menu 
      </li>
                <li><a href="categorias.html">Categorias</a></li>
                <li><a href="index_dashboard.html">Dashboard</a></li>
                <li><a href="donaciones.html">Donaciones</a></li>
                <li><a href="publicaciones.html">Publicaciones</a></li>
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
        <h1><span class="ion-users"></span>Departamentos</h1>
      </div>
    </div>
    <div class="uk-section-small">
      <div class="uk-container uk-container-large">
        <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <span class="statistics-text">Buscar departamentos</span><br />
              <form method="POST">
                <fieldset class="uk-fieldset">

                  <div class="uk-margin">
                    <div class="uk-position-relative">
                      <span class="uk-form-icon ion-edit"></span>
                      <input name="name" class="uk-input" type="text" placeholder="Nombre de Usuario">
                    </div>
                  </div>

                  <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">
                      Buscar departamento
                    </button>
                  </div>
                  <hr>
                  <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
                    <h3 class="uk-card-title">Resultados</h3>
                   <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>No. de Departamento</th>
        </tr>
    </thead>
    <tbody>
      @foreach($departamentos as $dep)
        <tr>
            <td>{{$dep['nombreDepartamento']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>



                  </div>
                </div>
              </div>
              <div>
                <div class="uk-card uk-card-default uk-card-body">
                  <span class="statistics-text">Departamento</span><br />
                  <hr>
                  <input name="name" class="uk-input" type="text" placeholder="Resultado: departamento"><br/>
                  <hr>
                  <span class="statistics-text">Departamento</span></br>
                  <label><input type="checkbox">Activo</label>
                  <hr>
                  <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">
                      Guardar cambios
                    </button>
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
<?php namespace Views


  

?>
<?php

if( isset($_SESSION['Login'])){
  $cuenta_logueada=$_SESSION['Login'];
  $cuenta_logueada->getEmail();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/ExerciseOne/Views/css/header2.css"><!-- ARCHIVO CSS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#">Movie<b>Pass</b></a>     
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- BARRA DE NAVEGACION -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a href="#cartelera" class="nav-link">Cartelera</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Proximos Estrenos</a></li>
      <!-- BOTON DESPLEGABLE-->     
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Localidad<b class="caret"></b></a>
        <!-- ITEMS DESPLEGABLES-->
        <ul class="dropdown-menu">          
          <li><a href="#" class="dropdown-item">Mar del Plata</a></li>
          <li><a href="#" class="dropdown-item">Pinamar</a></li>
          <li><a href="#" class="dropdown-item">Devoto</a></li>
          <li><a href="#" class="dropdown-item">Balcarce</a></li>
        </ul>
      </li>
      
    </ul>
    <!-- BUSCADOR-->
    <form class="navbar-form form-inline">
      <div class="input-group search-box">                
        <input type="text" id="search" class="form-control" placeholder="Buscar..">
        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right ml-auto">
     <?php  if( !isset($_SESSION['Login']) ) {  ?> 
    <!-- BOTON INICIAR SESION-->    
      <li class="nav-item">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Iniciar Sesion</a>
        <ul class="dropdown-menu form-wrapper">         
          <li>
            <form action="<?= ROOT_VIEW ?>/Login/verificarSesion" method="post">
              <p class="hint-text">Logueate con tu red social:</p>
              <div class="form-group social-btn clearfix">
                <a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
              </div>
              <div class="or-seperator"><b>o</b></div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail" name="emailBuscado" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="passLogin" required="required">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Iniciar Sesion">
              <div class="form-footer">
                <a href="#">Olvidaste tu Contraseña?</a>
              </div>
            </form>
          </li>
        </ul>
      </li>
      <!-- BOTON REGISTRAR-->
      <li class="nav-item">
        <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Registrate</a>
        <ul class="dropdown-menu form-wrapper">         
          <li>
            <form action="<?= ROOT_VIEW ?>/Login/nuevo" method="post">
              <p class="hint-text">Completá con tus datos y registrate!</p>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefono" name="telefono"required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Dirección" name="direccion"required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail" name="email" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="pass1"required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="pass2"required="required">
              </div>
              <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required">Acepto los <a href="#">Terminos y Condiciones</a></label>
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Registrarme">
            </form>
          </li>
        </ul>
      </li>
       <?php  } ?> 

       <?php   if( isset($_SESSION['Login']) ) {  ?> 
      
        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user barra"></span> 
                        <strong></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu form-wrapper">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div>
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user barra"></span>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-center"><strong><h4>Nombre Apellido</h4></strong></p>
                                        <p class="text-left"> <?php echo $cuenta_logueada->getEmail(); ?></p>
                                        <p>
                                            <input type="submit" class="btn btn-primary btn-block" value="Mi Cuenta">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div>
                                  <form action="<?= ROOT_VIEW ?>/Login/cerrarSesion" method="post">
                                    <div>
                                        <p>
                                            <input type="submit" class="btn btn-danger btn-block" value="Cerrar Sesion">
                                        </p>
                                    </div>
                                  </form> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
    <?php  } ?> 
    </ul>
        
      
      
  </div>
</nav>
</body>
<!-- CSS -->
<style>
  .glyphicon .glyphicon-user{
            font-size:35px;
  }
  
</style>
<!-- JS-->
<script type="text/javascript">
  // Prevent dropdown menu from closing when click inside the form
  $(document).on("click", ".navbar-right .dropdown-menu", function(e){
    e.stopPropagation();
  });
</script>
</html>  
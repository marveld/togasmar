<?php
$vehiculos = [0 => 'Drone', 1 => "Moto", 2 => "Auto Fletero", 3 => "Camioneta con caja", 4 => "Camión"];
$marcasAutos = [1 => 'Ford', 2 => 'Renault', 3 => 'Peugot', 4 => 'Honda', 5 => 'Toyota', 6 => 'Susuki', 7 => 'Izusu', 8 => 'Iveco', 9 => 'Fiat'];
$marcasMotos = [1 => 'Zanella', 2 => 'Izusu', 3 => 'Honda', 4 => 'Suzuki', 5 => 'Yamaha', 6 => 'Otra'];
$patente = [];
$seguro = [1 => 'Allianze', 2=> 'Surich', 3 => 'QBE', 4 => 'Rio Seguros', 5 => 'Otro'];

$alcances = [0 => 'Capital', 1 => 'GBA', 2 => 'Buenos Aires', 3 => 'Cordoba Capital', 4 => 'Rosario', 5 => 'Mendoza', 6 => 'Interior'];
?>

<!DOCTYPE html>


<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro Win your Shipping</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                  <a class="navbar-brand" href="#page-top">Optimizá tus envíos</a>
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">¿Qué es?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Registrate</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Ingresá</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faq">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <h1 class="logo"><img src="img/logo.png" alt="Win Your Shipping" width="100%"></h1>
                        <p class="intro-text">¿Tenés que mandar algo?<br>Cargá tus datos abajo y elegí la mejor propuesta</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese Nombre">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Apellido</label>
                                <input type="text" class="form-control" placeholder="Ingrese Apellido">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">DNI</label>
                                <input type="text" class="form-control" placeholder="DNI">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">e-mail</label>
                                <input type="text" class="form-control" placeholder="Ingrese e-mail">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Localidad</label>
                                <input type="text" class="form-control" placeholder="Ingrese Localidad">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Codigo Postal</label>
                                <input type="text" class="form-control" placeholder="Ingrese CP">
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <h1 class="logo"><img src="img/logo.png" alt="Win Your Shipping" width="100%"></h1>
                        <p class="intro-text">¿Tenés moto, auto, flete, camioneta, camion, etc.?<br>Cargá tus datos abajo y ofrecé el servicio que quieras</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" placeholder="Ingrese Nombre">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">Apellido</label>
                                <input type="text" class="form-control" placeholder="Ingrese Apellido">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">DNI</label>
                                <input type="text" class="form-control" placeholder="DNI">
                            </div>
                            <div class="col-md-12 col-md-offset-0">
                              <label for="nombre">e-mail</label>
                                <input type="text" class="form-control" placeholder="Ingrese e-mail">
                            </div>
          <div class="col-md-12 col-md-offset-0">
              <div class="form-group">
  					       <label>Tipo de Vehiculo</label>
  					           <div class="row">
                         <div class="col-sm-12">
                            <select class="form-control" name="vehiculos">
                               <option value="1">Drone</option>
                               <option value="2">Moto</option>
                               <option value="3">Auto</option>
                               <option value="4">Camioneta</option>
                               <option value="5">Camion</option>
                            </select>
                         </div>
  						                  <div class="col-sm-12">
  							                   <select class="form-control" name="fnac_mes">
  								                    <option value="">Ford</option>
                                      <option value="">Peugeot</option>
                                      <option value="">Susuki</option>
                                      <option value="">Fiat</option>
                                      <option value="">Honda</option>
                                      <option value="">Toyota</option>
                                      <option value="">VolksWagen</option>
                                      <option value="">Otro</option>
  							                   </select>
  						                  </div>
                            <div class="form-group">
					                       <label for="descripcion">Modelo</label>
					                         <textarea id="descripcion" name="descripcion" class="form-control" rows="5"></textarea>
				                    </div>
  					               </div>
                        </div>
                      </div>
					                    <label class="col-md-12 col-md-offset-0">Alcance del servicio:
					                         <div class="checkbox">
                                       <input type="checkbox">Todo el País<br></input>
                                       <input type="checkbox">Capital Federal<br></input>
                                       <input type="checkbox">GBA<br></input>
                                       <input type="checkbox">Rosario<br></input>
                                       <input type="checkbox">Santa Fe<br></input>
                                       <input type="checkbox">Cordoba<br></input>
                                       <input type="checkbox">Interior<br></input>
					                         </div>
                              </label>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; www.winyourshipping.com</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>
  </body>
</html>

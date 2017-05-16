<?php
include 'arrays.php';
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Win your Shipping</title>

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

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="logo"><img src="img/logo.png" alt="Win Your Shipping" width="100%"></h1>
                        <p class="intro-text">Registra tu envío. Recibí propuestas. <br>Elegí tu proveedor de envíos.
                            <br>¡Registrate Ahora!</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="amarillo">¡Arma tu red de envíos!</h2>
                <p><span class="rosa">Win Your Shipping</span> es una red que une a personas que necesitan enviar productos con quienes pueden proveerles envío.<br>
                Alguien sube su necesidad de envío, otros concursan por obtenerlo. La mejor relación Costo / Beneficio será la ganadora del envío.<br>
              <span class="amarillo">Registrate ahora</span> y empeza a utilizar esta red.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Registrate</h2>
                    <p>¡Es Gratis! Sólo te tomará unos segundos.</p>

                    <a class="btn btn-default btn-lg" id="quieroRegistrarme">Quiero registrarme ya</a>
                    <div id="opcionesRegistro" class="oculto">
                      <a href="#" class="btn btn-default btn-lg" id="registrarProveedor">Ofrezco mis servicios</a>
                      <a href="#" class="btn btn-default btn-lg" id="registrarCliente">Tengo que mandar algo</a>
                    </div>

                    <!-- Registro de CLIENTE -->
                    <div class="col-md-4 col-md-offset-1 oculto" id="registroCliente">
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
                    <!-- Fin registro de CLIENTE -->

                    <!-- Registro de PROVEEDOR -->
                    <div class="col-md-4 col-md-offset-2 oculto" id="registroProveedor">
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
                  <!-- Fin Registro de PROVEEDOR -->



                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="faq" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>¿Tenes dudas?</h2>
                <p>¿Cómo funciona la red de envíos?</p>
                <p>La red permite que haya un usuario </p>
                <p><a href="mailto:marveld.dg@gmail.com">feedback@winyourshipping.com</a>
                </p>

            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; www.winyourshipping.com</p>
        </div>
    </footer>



    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>

    <script>
    $(document).ready(function(){
        $("#quieroRegistrarme").click(function(){
            $("#quieroRegistrarme").toggle(80);
            $("#opcionesRegistro").toggle(80);
        });

        $("#registrarCliente").click(function(){
          $("#registroProveedor").hide(80);
          $("#registroPCliente").show(80);
        });
        $("#registrarProveedor").click(function(){
            $("#registroProveedor").show(80);
            $("#registroPCliente").hide(80);
        });

    });
    </script>

</body>

</html>

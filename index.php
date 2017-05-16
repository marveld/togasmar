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

    <!-- Seccion de registro -->
    <section id="registro" class="content-section text-center">
        <div class="registro-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Registrate</h2>
                    <p>¡Es Gratis! Sólo te tomará unos segundos.</p>

                    <a class="btn btn-primary btn-lg" id="quieroRegistrarme">Quiero registrarme ya</a>
                    <div id="opcionesRegistro" class="oculto">
                      <a class="btn btn-primary btn-lg" id="registrarProveedor">Ofrezco mis servicios <i class="fa fa-angle-double-down animated"></i></a>
                      <a class="btn btn-primary btn-lg" id="registrarCliente">Tengo que mandar algo <i class="fa fa-angle-double-down animated"></i></a>
                    </div>

                    <!-- Registro de CLIENTE -->
                    <div class="col-md-9 col-md-offset-2 oculto" id="registroCliente">
                        <p class="intro-text">¿Tenés que mandar algo?<br>Cargá tus datos abajo y elegí la mejor propuesta</p>
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="form-group">
                              <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                              <div class="col-sm-10">  <input id="nombre" type="text" class="form-control" placeholder="Ingrese Nombre">    </div>
                            </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="apellido">Apellido</label>
                                <div class="col-sm-10"><input id="apellido" type="text" class="form-control" placeholder="Ingrese Apellido"></div>
                              </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="dni">DNI</label>
                                <div class="col-sm-10"><input id="dni" type="text" class="form-control" placeholder="DNI"></div>
                              </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="email">e-mail</label>
                                <div class="col-sm-10"><input id="email" type="email" class="form-control" placeholder="Ingrese e-mail"></div>
                              </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="localidad">Localidad</label>
                                <div class="col-sm-10"><input id="localidad" type="text" class="form-control" placeholder="Ingrese Localidad"></div>
                              </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="cp">Codigo Postal</label>
                                <div class="col-sm-10"><input id="cp" type="text" class="form-control" placeholder="Ingrese CP"></div>
                              </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg" aria-label="Left Align">
                                    <span class="fa fa-floppy-o" aria-hidden="true"></span> Enviar
                                </button>
                              </div>
                          </div>
                        </form>
                    </div>
                    <!-- Fin registro de CLIENTE -->

                    <!-- Registro de PROVEEDOR -->
                    <div class="col-md-9 col-md-offset-2 oculto" id="registroProveedor">
                        <p class="intro-text">¿Tenés moto, auto, flete, etc.?<br>Cargá tus datos abajo y ofrecé el servicio que quieras</p>
                        <form  class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for="nombre">Nombre</label>
                                <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese Nombre"></div>
                                  <label class="col-sm-2 control-label" for="nombre">Apellido</label>
                                <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese Apellido"></div>
                                  <label class="col-sm-2 control-label" for="nombre">DNI</label>
                                <div class="col-sm-10"> <input type="text" class="form-control" placeholder="DNI"></div>
                                  <label class="col-sm-2 control-label" for="nombre">e-mail</label>
                                <div class="col-sm-10"> <input type="text" class="form-control" placeholder="Ingrese e-mail"></div>
                            </div>

                  <div class="form-group">
                   <label>Tipo de Vehiculo</label>
                       <div class="row">
                         <div class="col-sm-9 col-md-offset-2">
                           <select class="form-control" name="vehiculo">
                             <option value="">Vehiculo</option>
                             <?php foreach($vehiculos as $numero => $nombre){?>
                               <option value="<?php echo $numero; ?>"><?php echo $nombre; ?></option>
                               <?php } ?>
                           </select>
                         </div>
                                <div class="col-sm-9 col-md-offset-2">
                                  <select class="form-control" name="marca">
                                    <option value="">Marca</option>
                                    <?php foreach($marcasAutos as $numero => $nombre){?>
                                      <option value="<?php echo $numero; ?>"><?php echo $nombre; ?></option>
                                      <?php } ?>
                                  </select>
                                </div>
                            <div class="col-sm-9 col-md-offset-2">
                              <select class="form-control" name="modelo">
                								<option value="">Modelo</option>
                								<?php for($anio = date('Y'); $anio >= (date('Y')-100); $anio--){?>
                									<option value="<?php echo $anio; ?>"><?php echo $anio; ?></option>
                									<?php } ?>
                							</select>
                            </div>
                           </div>
                        </div>
                        <div class="form-group">
                              <label>Alcance del servicio:
                                   <div class="checkbox">
                                       <?php foreach($alcances as $numero => $nombre){?>
                                           <label>
                                             <input type="checkbox" name="alcance[]" value="<?php echo $numero; ?>">
                                             <?php echo $nombre; ?>
                                           	</label>
                                         <?php } ?>
                                   </div>
                              </label>
                        </div>

                          <br>
                                <button type="button" class="btn btn-success btn-lg" aria-label="Left Align">
                                    <span class="fa fa-floppy-o" aria-hidden="true"></span> Enviar
                                </button>
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
          $("#registroCliente").show(80);
        });

        $("#registrarProveedor").click(function(){
            $("#registroProveedor").show(80);
            $("#registroCliente").hide(80);
        });

    });
    </script>

</body>

</html>

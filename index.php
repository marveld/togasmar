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

    <?php include "includes/menu.php" ?>

    <div class="col-md-3 col-md-offset-2 oculto" id="login">
      <?php include "includes/login.php" ?>
    </div>

    <!-- Intro Header -->
    <header class="intro" id="intro">
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
    <section class="content-section text-center"  id="registro" >
        <div class="registro-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2" >
                    <h2>Registrate</h2>
                    <p>¡Es Gratis! Sólo te tomará unos segundos.</p>

                    <a class="btn btn-primary btn-lg" id="quieroRegistrarme">Quiero registrarme ya!</a>


                    <!-- Registro CORTITO -->
                    <div class="col-md-9 col-md-offset-2 oculto" id="registroCortito">

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
                                  <label class="col-sm-2 control-label" for="email">e-mail</label>
                                <div class="col-sm-10"><input id="email" type="email" class="form-control" placeholder="Ingrese e-mail"></div>
                              </div>


                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-lg" aria-label="Left Align">
                                    <span class="fa fa-floppy-o" aria-hidden="true"></span> Enviar
                                </button>
                              </div>
                          </div>
                        </form>
                    </div>
                    <!-- Fin registro CORTITO -->





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
            $("#quieroRegistrarme").toggle();
            $("#registroCortito").toggle();
        });

        $("#btn_login").click(function(){
            $("#login").toggle();
        });

    });
    </script>

</body>

</html>

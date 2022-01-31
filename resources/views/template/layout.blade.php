<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Portafolio digital</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Banner section
  ============================-->
    @yield('banner')

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="{{route('index')}}">Portafolio</a></h1>
      </div>
      <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li ><a href="{{route('index')}}">Inicio</a></li>
        <li><a href="{{route('estudios')}}">Estudios</a></li>
        <li><a href="{{route('proyectos')}}">Proyectos</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
    </nav>
    </div>
  </header>

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          @yield('tituloSeccion')
          <div class="section-title-divider"></div>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
          <p class="about-text">
            @yield('contenido')
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">@yield('tituloSegundo')</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">@yield('textoSegundo')</p>
        </div>
      </div>

      <div class="row">
        @yield('points')
      </div>
    </div>
  </section>

  <!--==========================
  Portfolio Section
  ============================-->
  @yield('portfolio')
  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contacto</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Metodos de contacto para proyectos o integracion a un equipo</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-envelope"></i>
              <p>eric.kevinsannz04@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+52 5571648638</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Su mensaje fue enviado correctamente. Gracias!</div>
            <div id="errormessage"></div>
            <form action="/contacto" method="post" role="form" class="contactForm">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:4" data-msg="Ingrese mas de 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Ingrese un correo valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Titulo" data-rule="minlen:4" data-msg="Ingrese mas de 8 caracteres de texto" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>


</body>

</html>

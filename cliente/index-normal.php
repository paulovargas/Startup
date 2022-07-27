<?php
	if( $_POST['email'] and $_POST['senha'] !=  $_POST['paulotomegomesdevargas@gmail.com'] and $_POST['testecataboi'])
		header("location: ../");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>CataBoi - Gerenciador de rebanhos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

</head>

<body background="hero-bg.JPG">

  <!--==========================
  Header
  ============================-->
  <header id="header">
		<div class="container">

			<div id="logo" class="pull-left">
				<a href="#hero"><img src="../img/logo.png" alt="" title="" /></img></a>
				<!-- Uncomment below if you prefer to use a text logo -->
				<!--<h1><a href="#hero">Regna</a></h1>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-has-children"><a href="">Inicio</a>
						<ul>
							<li><a href="index.php?pagina=addadmin">Agendar Evento</a></li>
							<li><a href="index.php?pagina=vertodosadmin">Agendar Evento Individual</a></li>
						<li><a href="index.php?pagina=vertodosadmin">Ver todos os Eventos</a></li>
						</ul>
					</li>
		  <li class="menu-has-children"><a href="#">Animais</a>
            <ul>
              <li><a href="index.php?pagina=addanimal">Adicionar Animal</a></li>
			  <li><a href="index.php?pagina=addcliente">Buscar por Brinco</a></li>
              <li><a href="index.php?pagina=vertodosclientes">Ver todos os Animais</a></li>
            </ul>
          </li>	
          <li class="menu-has-children"><a href="#">Grupos</a>
            <ul>
              <li><a href="index.php?pagina=addusu">Adicionar Grupo</a></li>
             <li><a href="index.php?pagina=vertodosusu">Ver todos os Grupos</a></li>
            </ul>
          </li>
		   <li class="menu-has-children"><a href="#">Propriedades</a>
            <ul>
              <li><a href="index.php?pagina=addusu">Adicionar Propriedade</a></li>
             <li><a href="index.php?pagina=vertodosusu">Ver todos as Propriedades</a></li>
            </ul>
          </li>
              </li>
			  
			  <li class="menu-active"><a href="../">Sair</a></li>
            </ul>
			
        </ul>
			</nav><!-- #nav-menu-container -->
		</div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
<section id="hero">
<?
				// testar o parâmetro vindo do GET e incluir o arquivo referente a área
				if(file_exists("inc_{$_GET['pagina']}.php"))
					include("inc_{$_GET['pagina']}.php");				
?>
</section><!-- #hero -->



  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cataboi</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="">Legend Soluções Tecnológicas</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>

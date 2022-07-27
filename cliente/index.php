<?php
	
	include("../config.php");

?>
<!doctype html>
<html lang="pt"> 
<head>
  
  <meta charset="utf-8">
  <title>CataBoi</title>
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

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php?pagina=home"><img src="../img/logo.png" alt="" title="" /></img>
		<?php
						if($_SESSION['logado']==1)
						{
							$sql = "SELECT * FROM usuario where id = {$_SESSION['usuario']['id']}";
							
							$result = mysqli_query($conecta, $sql); 							
							
							echo "<h2 style= color:#FFF;>Seja Bem-vindo(a) {$_SESSION['usuario']['nome']} !</h2>";
							//$Cid = $_SESSION['cliente']['id'];
						}
						else
							header("location: ../");
					?>
		
		</a>
		
		
		
		
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
		<li class="menu-has-children"><a href="index.php?pagina=home">Inicio</a>
            <ul>
              <li><a href="index.php?pagina=addEvento">Agendar Evento</a></li>
              <li><a href="index.php?pagina=addEventoIndi">Agendar Evento Individual</a></li>
              <li><a href="index.php?pagina=VerEvent">Ver Eventos</a></li>
            </ul>
          </li>
		  
		  <li class="menu-has-children"><a href="#">Animais</a>
            <ul>
              <li><a href="index.php?pagina=addAnimal">Adicionar Animal</a></li>
              <li><a href="index.php?pagina=vertodosclientes">Buscar por Brinco</a></li>
			  <li><a href="index.php?pagina=verRebanhos">Ver Animais</a></li>
            </ul>
          </li>
		  
		  <li class="menu-has-children"><a href="#">Rebanhos</a>
            <ul>
              <li><a href="index.php?pagina=addRebanho">Adicionar Rebanho</a></li>
			  <li><a href="index.php?pagina=verRebanhos">Ver Rebanhos</a></li>
            </ul>
          </li>
		  
		  <li class="menu-has-children"><a href="#">Propriedades</a>
            <ul>
              <li><a href="index.php?pagina=addPropriedade">Adicionar Propriedade</a></li>
			  <li><a href="index.php?pagina=verPropriedades">Ver Propriedades</a></li>
            </ul>
          </li>		  
          <li class=""><a href="index.php?pagina=addeditameu_usuario">Meu Perfil</a></li>	
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

<div class="hero-container">
	
<?php
	
	if(file_exists("inc_{$_GET['pagina']}.php"))
		include("inc_{$_GET['pagina']}.php");
	else
		include("inc_ultimos_eventos.php");
	?>
   
	  
    </div>
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
        &copy; Copyright <strong>CataBoi</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
		
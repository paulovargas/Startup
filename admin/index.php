<?php
	
	include('../config.php');

?>
<!doctype html>
<html lang="pt"> 
<head>
  
  <meta charset="utf-8">
  <title>CataBoi - Administrador</title>
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
							$sql = "SELECT * FROM admin where id = {$_SESSION['admin']['id']}";
							
							$result = mysqli_query($conecta, $sql); 							
							
							echo "<h2 style= color:#FFF;>Seja Bem-vindo(a) {$_SESSION['admin']['nome']} !</h2>";
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
		<li class="menu-has-children"><a href="index.php?pagina=vermensagem">Inicio</a>
            <ul>
              <li><a href="index.php?pagina=addadmin">Adicionar Administrador</a></li>
              <li><a href="index.php?pagina=vertodosadmin">Ver Administradores</a></li>
              <li><a href="index.php?pagina=verTodasmensagens">Mensagens do site</a></li>
			  <li><a href="index.php?pagina=addeditameu_usuario">Meu Perfil</a></li>
            </ul>
          </li>
		  <li class="menu-has-children"><a href="#">Clientes</a>
            <ul>
              <li><a href="index.php?pagina=addcliente">Adicionar Cliente</a></li>
              <li><a href="index.php?pagina=vertodosclientes">Ver Clientes</a></li>
            </ul>
          </li>	
          <li class="menu-has-children"><a href="#">Usuários</a>
            <ul>
              <li><a href="index.php?pagina=addusu">Adicionar Usuários</a></li>
             <li><a href="index.php?pagina=vertodosusu">Ver Usuários</a></li>
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

    <div class="hero-container">
	
	<?php
		if(file_exists("inc_{$_GET['pagina']}.php"))
			include("inc_{$_GET['pagina']}.php");
		else
			include("inc_vermensagem.php");
				
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
		
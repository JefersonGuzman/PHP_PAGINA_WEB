<!DOCTYPE HTML>
<html>
	<head>
		<title>Linear by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">INICIO</a></li>
						<li><a href="left-sidebar.html">Perfil Personal</a></li>
						<li><a href="right-sidebar.html">Perfil Profecional</a></li>
						<li><a href="no-sidebar.php">Contacto</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Formulario de Contacto</a></h1>
					
				</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
			
			
		  <!-- FORMULARIO -->
		    <h1>FORMULARIO DE CONTACTO</h1>
                   <p>Nombre</p>
                   <form action="no-sidebar.php" method="GET">
                          <label>Nombre (*)</label><input type="text" name="nombre" class="nombre <?php if(isset($_GET['error1'])) echo'error';?>" placeholder="Nombre <?php if (isset($_GET['error1'])) echo $_GET['error1'];?>">
                        	
                        <p>Apellido</p>
                        <input type="text"  name="apellido" class="<?php if(isset($_GET['error1'])) echo'error';?>" placeholder= "apellido <?php if (isset($_GET['error2'])) echo $_GET['error2'];?>">
                        
                        <p>Correo Electronico</p>
                        <input type="text"  class="" id="" form="" name="email" placeholder="TuCorreo@comoestas.com" required>
                        <p>Asunto</p>
                        <input type="text"  class="" id="" form="" name="asunto" placeholder="Asunto" required>
                        <textarea  name="mensje" placeholder="Tu Mensaje....." ></textarea>
                        <input type="submit">
                 
                    </form>
              </div>
        </div>
		    	
             
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;La vida no se mide por las veces que respiras, sino por los momentos que te dejan sin aliento...&rdquo;</blockquote>
				</section>
				
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>


	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Taller Creando Nuevos Enfoques de Trabajo </title>

		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

		<!-- Template CSS Files  -->
		<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> 
		<link href="{{ asset('js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/fav-144.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/fav-114.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/fav-72.png')}}">
		<link rel="apple-touch-icon-precomposed" href="{{asset('images/fav-57.png')}}">
		<link rel="shortcut icon" href="{{asset('images/fav.png')}}">
		
	</head>
	<body>
	<!-- Top Bar Starts -->
		<div class="top-bar">
		<!-- Nested Container Starts -->
			<div class="container clearfix text-center-xs">
				<ul class="list-unstyled list-inline pull-left-lg pull-left-md pull-left-sm animation">
 								 <li><a href="https://www.facebook.com/ByW.soluciones.integrales/"><i class="fa fa-facebook"></i></a></li>											                                <li><a href="https://twitter.com/ByWSoluciones"><i class="fa fa-twitter"></i></a></li>
						        <li><a href="https://www.instagram.com/byw.si/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/2181498/"><i class="fa fa-linkedin"></i></a></li>
					<!-- 	<li><a href="#"><i class="fa fa-twitter"></i></a></li>   -->
					</ul>
					<p class="pull-right-lg pull-right-md pull-right-sm text-right-lg text-right-md text-right-sm text-light">
						B&W Soluciones Integrales “Llevando a las PYMES al futuro hoy”
					</p>
			</div>
		<!-- Nested Container Ends -->
		</div>
	<!-- Top Bar Ends -->
        
    
        
        

	<!-- Main Banner Starts -->
		<section class="main-banner text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container text-lite-color">
                 <h2 class="text-medium"> </h2>
				<h2 class="text-medium">   </h2>
			</div> 
		<!-- Nested Container Ends -->
		</section>
	<!-- Main Banner Ends -->
     
     
   


   @yield('content')


    
    
    
    
    
    
    
    
    
    
    <!-- Footer Top Section Starts -->
		<section class="footer-top sub parallax">
		<!-- Nested Container Starts -->
			<div class="container text-center-xs text-lite-color">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Foot Col #1 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="foot-info">
							<p>
								<img src="images/byw.png" alt="B&W Soluciones Integrales" class="img-responsive img-center-xs">
							</p>
							<br>
							<p class="text-light">
								<em> Somos expertos consultores en Tecnologías de la información, Transformación Digital, así como desarrolladores de Software y aplicaciones móviles a la medida con más de 16 años de experiencia. brindamos soluciones a las necesidades de neustros clientes, aplciando llas tendencias tecnológicas adecuadas para cada empresa.
                    	</p>
							<ul class="list-unstyled list-inline foot-sm-links">
								<li class="text-medium">Siguenos en</li>
                                
                                <li><a href="https://www.facebook.com/ByW.soluciones.integrales"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ByWSoluciones"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/byw.si/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
              								
							</ul>
						</div>
					</div>
				<!-- Foot Col #1 Ends -->
				<!-- Foot Col #2 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h5>Contáctanos</h5>
						<ul class="list-unstyled foot-address-list text-light">

							<li class="clearfix">
								<i class="fa fa-phone"></i> 
								<span class="text-bold">(52) 55 57 54 09 36</span>
							</li>
                            	<li class="clearfix">
								<i class="fa fa-whatsapp"></i> 
								<span class="text-bold">(52) 55 6907 3162</span>
							</li>
							<li class="clearfix">
								<i class="fa fa-envelope"></i> 
								<span><a href="mailto:support@demosite.com">info@byw-si.com.mx</a></span>
							</li>
							
						</ul>
					</div>
				<!-- Foot Col #2 Ends -->
				<!-- Divider Starts -->
					<div class="col-xs-12 hidden visible-sm">
						<p><br><br></p>
					</div>
				<!-- Divider Ends -->
				<!-- Foot Col #3 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h5>Soluciones</h5>
						<ul class="list-unstyled foot-list-style-1 text-light">
							<li>Consultoría en Transformación Digital</li>
							<li>Consutoría en Innovación Tecnológica</li>
							<li>Desarrollo de Software</li>
                            <li>Desarrollo de aplicaciones móviles</li>
                            <li>Cursos de capacitación</li>
							<li>Creación de sistemas de comercio electrónico</li>
						</ul>
					</div>
				<!-- Foot Col #3 Ends -->
				<!-- Foot Col #4 Starts -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h5>Por que B&W</h5>
						<ul class="list-unstyled foot-list-style-1 text-light">
							<li>Experiencia</li>
							<li>Expertos en TI</li>
							<li>Planes de Financiamiento</li>
							<li>Soluciones a la medida</li>
							<li>Soluciones Vanguardistas</li>
							
						</ul>
					</div>
				<!-- Foot Col #4 Ends -->
				</div>
			<!-- Nested Row Ends -->
			<!-- Spacer Starts -->
				<div class="spacer"></div>
			<!-- Spacer Ends -->
			
			</div>	
		<!-- Nested Container Ends -->
		</section>
	<!-- Footer Top Section Ends -->
	<!-- Copyright Starts -->
		<footer class="copyright">
		<!-- Nested Container Starts -->
			<div class="container text-center text-lite-color">
				<em class="text-light">B&W Soluciones Integrales. @ Derechos Reservados. Diseño de <a href="#">B&W SolucionesIntegrales SA de CV</a></em>
			</div>
		<!-- Nested Container Ends -->
		</footer>
	<!-- Copyright Ends	-->
	<!-- Template JS Files -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/backstretch/jquery.backstretch.min.js"></script>
	<script src="js/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="js/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="js/map.js"></script>	
	<script src="js/custom.js"></script>	
	</body>
    
    
    
    
    
    
    
    
    
    
</html>
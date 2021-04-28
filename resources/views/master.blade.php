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
						<li><a href="https://www.facebook.com/ByW.soluciones.integrales"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ByWSoluciones"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/byw.si/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
					<!-- 	<li><a href="#"><i class="fa fa-twitter"></i></a></li>   -->
					</ul>
					<p class="pull-right-lg pull-right-md pull-right-sm text-right-lg text-right-md text-right-sm text-light">
						Hacemos que la tecnología trabaje para su empresa.
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
     
    <!-- About Section Starts -->
		<section class="section-area">
		<!-- Nested Container Starts -->
			<div class="container text-center-xs">
			<!-- Nested Row Starts -->
				<div class="row">
				<!-- Content Starts -->
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
						<h3 class="main-heading-1 text-spl-color text-normal text-uppercase">Taller</h3>
						<p>
							Hoy en día las empresas están enfrentando cambios drásticos en la forma de trabajar y ofrecer sus servicios, tanto a sus clientes como a sus empleados. Por esta razón se requiere tener una cultura laboral  basado en competencias, combinada  con una infraestructura digital, procesos y aplicaciones de vanguardia  que estén alienadas a la estrategia del negocio.

						</p>
						<p>
							El taller “Creando Nuevos Enfoques de Trabajo” está enfocado para que los participantes conozcan  las diferentes técnicas y procesos  de trabajo y tecnológicas  que están llevando a cabo las empresas líderes en el mercado mundial. A lo largo del taller se explicará y se darán ejemplos prácticos de como poder aplicar estas tendencias en las empresas para contar  con las herramientas necesarias que las harán estar a la vanguardia en su sector.

						</p>
						<br>
					</div>
				<!-- Content Ends -->
				<!-- Divider For Small Screen Starts -->
					<div class="col-xs-12 hidden visible-xs">
						<p><br></p>
					</div>
				<!-- Divider For Small Screen Ends -->
				<!-- Media Starts -->
					<div class="col-md-7 col-sm-6 col-xs-12 col-lg-offset-1">
						<img src="{{asset('images/descripcion.jpg')}}" alt="nuevo enfoque de trabajo" class="img-responsive img-center">
					</div>
				<!-- Media Ends -->
				</div>
			<!-- Nested Row Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- About Section Ends -->
     
   @yield('content')






<!-- Newsletter Subscription Section Starts -->
		<section class="newsletter-bar text-lite-color text-center-sm text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nested Row Starts -->
				<div class="row">
					<div class="col-lg-6 col-md-4 col-xs-12">
						<div class="clearfix">
							<h4 class="pull-left-lg text-normal"><i class="fa fa-check-square"></i>Inscribete</h4>
				                            
                            
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-xs-12">
						<form class="row">
							<div class="col-sm-8 col-xs-12">
								<div class="col-sm-4 col-xs-12">
							<a class="btn btn-secondary animation text-uppercase" href="{{route('registro.create')}}">Pago</a>
							</div>
							</div>
							<div class="col-sm-4 col-xs-12">
								<a class="btn btn-secondary animation text-uppercase" href="temario.pdf">Temario</a>
							</div>



						</form>
					</div>
				</div>
			<!-- Nested Row Ends -->			
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Newsletter Subscription Section Ends -->





<!-- Newsletter Subscription Section Starts -->
		<section class="newsletter-bar text-lite-color text-center-sm text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Nested Row Starts -->
				<div class="row">
					<div class="col-lg-6 col-md-4 col-xs-12">
						<div class="clearfix">
							<h4 class="pull-left-lg text-normal"><i class="fa fa-calendar"></i>Martes 11 de Mayo 2021</h4>
							<h6 class="pull-right-lg text-light hidden visible-lg visible-sm"><em>de 9:00 AM a 2:00 PM   <br class="hidden-sm hidden-xs">inscribete para recibir la Liga</em></h6>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-xs-12">
						<form class="row">
	
							<div class="col-sm-4 col-xs-12">
								<a class="btn btn-secondary animation text-uppercase" href="pago.html">Vía ZOOM</a>
							</div>
						</form>
					</div>
				</div>
			<!-- Nested Row Ends -->			
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Newsletter Subscription Section Ends -->





                   	<!-- Main Container Starts -->
		<div class="main-container container">
		<!-- Nested Row Starts -->
    


     <!-- Nested Row Starts -->
			<div class="row text-center-xs">
			<!-- Content Starts -->
				<div class="col-sm-7 col-xs-12">
                <p class="lead">
						
					</p>
	             
              <h5 class="main-heading-1 text-spl-color text-normal text-center-xs">Objetivo del taller</h4>
   
                
   				<p class="lead">
						Al terminar el taller, el participante conocerá las principales técnicas y tendrá los conocimientos necesarios para poder iniciar la transformación digital de su organización. .
					</p>
					<p> NAsí los empleados podrán colaborar en un ambiente basado en competencias y nuevas tecnologías digitales. Y sobre todo tomando en cuenta sus necesidades para dar un mejor desempeño. 
                   </p>
					
				</div>
			<!-- Content Ends -->
			<!-- Image Media Starts -->
			  <div class="col-sm-5 col-xs-12">
               <p class="lead">			</p>

					<p class="hidden visible-xs"><br></p>
					<img src="images/equipo.jpg" alt="desarrollo de software" class="img-responsive img-style-1 img-center-xs">
				</div>
			<!-- Image Media Ends -->
    		</div>
		<!-- Nested Row Ends -->
	
 	</div>









        <!-- Nested Container Starts -->
		<div class="main-container container">
		<!-- Nested Row Starts -->
			<div class="row text-center-xs">
			<!-- Mainarea Starts -->
				<div class="col-ld-9 col-md-8 col-sm-7 col-xs-12">
					<div class="box-4 row">
						<div class="col-sm-6 col-xs-12">
							<img src="images/beneficios.jpg" alt="Image" class="img-responsive img-center-xs img-style-1">
						</div>
						<div class="col-sm-6 col-xs-12">
							<h5 class="text-medium">A quién va dirigido</h5>
							<p>
								Este taller esta dirigido a las siguientes personas 
							</p>
							<ul class="list-unstyled list-style-3 text-grey-color">
								<li>Directores de empresas.</li>
								<li>Directores / Gerentes de sistemas</li>
								<li>Ingenieros en sistemas</li>
								<li>Directores / Gerentes de Recursos Humanos</li>
								<li>Dueños de empresas</li>
							</ul>
						</div>
					</div>
				</div>
			<!-- Mainarea Ends -->
			<!-- Spacer Starts -->
				<div class="col-xs-12 hidden visible-xs">
					<p class="spacer-small"></p>
				</div>
			<!-- Spacer Ends -->
			<!-- Sidearea Starts -->
				<div class="col-ld-3 col-md-4 col-sm-5 col-xs-12">
					<div class="sblock-1">
						<h5 class="text-medium">Más información</h5>
						<p>
							<em>Si desea más información acerca del taller, por favor sientase en confianza de ponerse en contacto con nosotros al correo electrónico de taller@byw-si.com.mx o al Whatsapp 5569073162 y con gusto le apoyaremos</em>
						</p>
						
					</div>
				</div>
			<!-- Sidearea Ends -->
			</div>
		<!-- Nested Row Ends -->
    
    
    









<!-- Main Container Starts -->
		<div class="main-container container text-center-xs">
		
		<!-- Spacer Ends -->
		<!-- Our Advisor Starts -->
			<h5 class="main-heading-1 text-spl-color text-normal text-center-xs">Ponentes</h4>
			<div class="row">
			<!-- Advisor #1 Starts -->
				<div class="col-md-6 col-xs-12">
					<div class="bio-box-1 two-col row">
						<div class="col-sm-6 col-xs-12">
							<img src="images/team/Luis_paniagua.jpg" alt="Image" class="img-responsive img-center-xs rc-5">
						</div>
						<div class="col-sm-6 col-xs-12">
							<h5 class="text-normal">Msc. Luis H. Paniagua</h5>
							<p class="designation text-light text-grey-color">Msc. Digital Systems Engineering</p>
							<p class="text-grey-color">
								Director de B&W Soluciones Integrales SA de CV.
							</p>
							<p class="text-grey-color">
								Experto en Tecnologías de la Información, con mas de 20 años de experiencia.
							</p>
                            	<p class="text-grey-color">
								Ingeniero en Sistemas Electrónicos del ITESM, maestrpia en Ingeniería en Sistemas Sigitales por parte de Heriot Watt University y Diplomado en Administración Financiera por parte del ITESM.
							</p>
							<div class="clearfix">
								
							
							</div>
						</div>
					</div>
				</div>
			<!-- Advisor #1 Ends -->
			<!-- Advisor #2 Starts -->
				<div class="col-md-6 col-xs-12">
					<div class="bio-box-1 two-col row">
						<div class="col-sm-6 col-xs-12">
							<img src="images/team/Enrique_cortes.jpg" alt="Image" class="img-responsive img-center-xs rc-5">
						</div>
						<div class="col-sm-6 col-xs-12">
							<h5 class="text-normal">Mstro. Enrique Cortes</h5>
                           	<p class="designation text-light text-grey-color">Doctorante en Teoría psicoanalítica </p>
							<p class="text-grey-color">
								Director de RRHH en B&W Soluciones Integrales SA de CV
							</p>
							<p class="text-grey-color">
								Experto en el estudio y análisis de la gestión por competencias y el trabajo colaborativo.
                                Experto en Entrevistas y evaluación por competencias 
							</p>
                            	<p class="text-grey-color">
								Maestro en Terapia Psicoanalítica.
							</p>
							<div class="clearfix">
								
							
							</div>
						</div>
					</div>
				</div>
			<!-- Advisor #2 Ends -->
			
			</div>
		<!-- Our Advisor Ends -->
		</div>
	<!-- Main Container Ends -->

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
       
       
       
       
       
       
         
    
    
    
    
     
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
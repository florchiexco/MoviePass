<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="/MoviePass/Views/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/nouislider.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/ionicons.min.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/plyr.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/photoswipe.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/default-skin.css">
	<link rel="stylesheet" href="/MoviePass/Views/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="/MoviePass/Views/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="/MoviePass/Views/icon/icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/MoviePass/Views/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/MoviePass/Views/icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/MoviePass/Views/icon/apple-touch-icon-144x144.png">

	
	<title>MoviePass</title>

</head>
<body class="body">
	<?php require(VIEWS_PATH."header2.php"); ?> <!-- llamado a la barra nav de home-->
	<!------------ MUESTRA DE ERRORES PROVENIENTES DE LA CONTROLADORA------->
    <?php if (isset($_SESSION['Error']) ) {
   $msj=$_SESSION['Error']; ?>
   
    <script> sweetAlert("Error!", "<?php echo $msj; ?>", "error")</script>
    <?php unset($_SESSION["Error"]);?>
    <?php } ?>
    <!-- -->
    <?php if (isset($_SESSION['Success']) ) {
       $msj2=$_SESSION['Success']; ?>
      
        <script> sweetAlert("Exito!", "<?php echo $msj2; ?>", "success")</script>
        <?php unset($_SESSION["Success"]);?>
    <?php } ?>
    <!-- -->
    <?php if (isset($_SESSION['BD']) ) {
       $msj3=$_SESSION['BD']; ?>
      
        <script> sweetAlert("Error en BD", "<?php echo $msj3; ?>", "error")</script>
        <?php unset($_SESSION["BD"]);?>
    <?php } ?>
    <!-------------------------------------- - ------------------------------>

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="/MoviePass/Views/img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title"><?php echo $mov->getNombre(); ?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
									<img src="http://image.tmdb.org/t/p/w500<?php echo $mov->getImagen() ;?>" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

										<ul class="card__list">
											<li>FHD</li>
											<li>16+</li>
										</ul>
									</div>

									<ul class="card__meta">

										<li><span>Genre:</span>
											<?php foreach ($generos as $key ) { ?>
												<a><?php echo $key->getName();  ?></a>
											<?php } ?>
										
										
										<li><span>Release year:</span> 2017</li>
										<li><span>Running time:</span> 120 min</li>
										<li><span>Country:</span> <a href="#">USA</a> </li>

										<li><span>Genero:</span>
												<?php foreach ($generos as $key) { ?>
											<a ><?php echo $key->getName();?></a>
											<?php } ?>
										</li>
										<li><span>Duración:</span> 120 min</li>
										<li><span>Idioma:</span>
												
											<a href="#"><?php echo $mov->getLenguaje();?></a> 
										</li>

									</ul>

									<div class="card__description card__description--details">
										<?php echo $mov->getDescripcion() ?> 
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->

				<div class="col-8 col-xl-4">
					<video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

				<div class="col-6">
					<video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<!-- <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440"> -->


						<!-- Caption files -->
						<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
						    default>
						<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

						<!-- Fallback for browsers that don't support the <video> element -->
						<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
					</video>
				</div>
				<!-- end player -->

				<div class="col-12">
					<div class="details__wrap">

						<form action="<?= ROOT_VIEW ?>/DetallePelicula/searchMovie"  method="post">
							
							<button class="header__sign-in"><span>Comprar Entradas</span></button>
						</form>
						

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

						<!-- availables -->
						<div class="details__devices">
							<span class="details__devices-title">Disponible en:</span>
							<div class="content-select">
								<select class="select">
									<option value="" selected hidden>Elija su Funcion</option>
							<?php foreach ($lista_funciones as $g) { ?>
						              <option value="<?php  $_SESSION['Funcion']=$g;?>">
						                <?php echo $g->getSala()->getCine()->getNombre().' - '.$g->getSala()->getNombre().' - '.$g->getDia().' - '.$g->getHorario();?>
						              </option>
					        <?php } ?>
									
								</select>
								<i></i>
							</div>
						</div>
						<!-- end availables -->

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Compartí con amigos:</span>


							<ul class="details__share-list">
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>

								<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>

							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>

				<!-- boton comprar  -->
				<div class="col-12">
					<form action="<?= ROOT_VIEW ?>/Compra/newCompra"  method="post">
						<br>
						<button class="filter__btn" type="submit" name="enviar" id="enviar">Comprar Entradas</button>
					</form>
				</div>
				<!-- end boton comprar  -->

			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->


	

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- footer list -->
				<div class="col-12 col-md-3">
					<h6 class="footer__title">Download Our App</h6>
					<ul class="footer__app">
						<li><a href="#"><img src="/MoviePass/Views/img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href="#"><img src="/MoviePass/Views/img/google-play-badge.png" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Pricing Plan</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Security</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
						<li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<small><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></small>

						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php require(VIEWS_PATH."footer.php"); ?> <!-- llamado a la barra nav de home-->
	<!-- end footer-->


	<!-- JS -->
	<script src="/MoviePass/Views/js/jquery-3.3.1.min.js"></script>
	<script src="/MoviePass/Views/js/bootstrap.bundle.min.js"></script>
	<script src="/MoviePass/Views/js/owl.carousel.min.js"></script>
	<script src="/MoviePass/Views/js/jquery.mousewheel.min.js"></script>
	<script src="/MoviePass/Views/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="/MoviePass/Views/js/wNumb.js"></script>
	<script src="/MoviePass/Views/js/nouislider.min.js"></script>
	<script src="/MoviePass/Views/js/plyr.min.js"></script>
	<script src="/MoviePass/Views/js/jquery.morelines.min.js"></script>
	<script src="/MoviePass/Views/js/photoswipe.min.js"></script>
	<script src="/MoviePass/Views/js/photoswipe-ui-default.min.js"></script>
	<script src="/MoviePass/Views/js/main.js"></script>

	<style type="text/css">
		.content-input input,
		.content-select select{
			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
		}
		.content-select select{
			appearance: none;
			-webkit-appearance: none;
			-moz-appearance: none;
		}
		/* Eliminamos la fecha que por defecto aparece en el desplegable */
		.content-select select::-ms-expand {
		    display: none;
		}
		.content-select{
			max-width: 250px;
			position: relative;
		}
 
 		
		.content-select select{
			display: inline-block;
			width: 100%;
			cursor: pointer;
		  	padding: 7px 10px;
		  	height: 42px;
		  	outline: 0; 
		  	border: 0;
			border-radius: 0;
			background: #f0f0f0;
			color: #7b7b7b;
			font-size: 16px;
  			color: #1e1b1c;
			/*font-size: 1em;
			color: #999;*/
			/*font-family: 
			'Quicksand', sans-serif;*/
			font-family: 'Open Sans', sans-serif;
			border:2px solid rgba(0,0,0,0.2);
		    border-radius: 12px;
		    position: relative;
		    transition: all 0.25s ease;
		}
		 
		.content-select select:hover{
			/*background: #f2afce;*/
			  background-image: -moz-linear-gradient(90deg, #ff55a5 10%, #ff5860 90%);
			  background-image: -webkit-linear-gradient(90deg, #ff55a5 10%, #ff5860 90%);
			  background-image: -ms-linear-gradient(90deg, #ff55a5 10%, #ff5860 90%);
			  background-image: linear-gradient(90deg, #ff55a5 10%, #ff5860 90%);

			  font-size: 16px;
  			  color: #fff;
		}
		 
		/* 
		Creamos la fecha que aparece a la izquierda del select.
		Realmente este elemento es un cuadrado que sólo tienen
		dos bordes con color y que giramos con transform: rotate(-45deg);
		*/
		.content-select i{
			position: absolute;
			right: 20px;
			top: calc(50% - 13px);
			width: 16px;
			height: 16px;
			display: block;
			
			border-left:4px solid #ff55a5;
			border-bottom:4px solid #ff55a5;

			transform: rotate(-45deg); /* Giramos el cuadrado */
			transition: all 0.25s ease;
		}
		 
		.content-select:hover i{
			margin-top: 3px;
			border-left:4px solid #f6ecf1;
			border-bottom:4px solid #f6ecf1;
		}
		.date-border{
			border-left:4px solid #f6ecf1;
			border-bottom:4px solid #f6ecf1;
			border-radius: 12px;
		}
		.label-font{
			font-size: 16px;
  			color: #f6ecf1;
			font-family: 'Open Sans', sans-serif;

		}

	</style>

</body>

</html>
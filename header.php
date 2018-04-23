<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Dayen
 * @subpackage HMI
 * @since HMI 1.0.0
 * @version 2018.04.07
 * @author siemah
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site" style="height: 2000px">
	
		<!-- HEADER -->
		<header class='header' <?= "style='margin-top: 30px;'" ?> >

			<nav class='main-menu'>
				<button class='burger-icon'></button>
				<div class="menu-left">
					<a href="/">Logo</a>
				</div><div class="menu-right">
					<?php
						// add a main menu 
						wp_nav_menu([
							'theme_location'=> 'primary',
							'manu'			=> "main-menu",
							'menu_class'	=> 'menu',
							'menu_id'		=> 'dash-menu',
							'container'		=> '',
							
						])
					?>
					<!--ul>
						<li><a href="#" class="active">What we do</a></li>
						<li><a href="#">Our team</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="/contact" >get in touche</a></li>
					</ul-->
				</div>
				<!-- .menu-right -->
				<svg class="header-mobile-bg" preserveAspectRatio="none" width="320" height="46" viewBox="0 0 320 46" xmlns="http://www.w3.org/2000/svg">
					<title>Combined Shape</title>
					<g id="menu_mob" fill="none" fill-rule="evenodd" transform="translate(0 -401)"><path d="M0 429.042c21.97 3.997 43.468 9.047 66.955 10.181 30.162 1.457 60.047-3.757 86.491-10.522 14.828-3.793 29.025-8.1 43.479-12.187 11.323-3.201 22.805-6.266 34.87-8.84 27.468-5.86 59.462-9.025 88.187-4.59L320 421.16V447H0v-17.958z" id="Combined-Shape" fill="#4747F4"></path>
					</g>
				</svg>
			</nav>
			<!-- main-menu -->

		</header>				
		<!-- HEADER -->

		<script>
			var $ = function (selector) {
				return document.querySelector(selector);
			}
			/**
			* @var {Number} yOffset is the distance scrolled by user from the top
			*/
			var yOffset = 0;
			window.addEventListener('scroll', function (e) {

				var mainMenu = $('.main-menu');
				yOffset = window.pageYOffset;
				
				if ( !mainMenu.classList.contains('shadow-effect') && yOffset > 50 )
					mainMenu.classList.add("shadow-effect");
				else if ( mainMenu.classList.contains('shadow-effect' ) && yOffset < 50)
					mainMenu.classList.remove("shadow-effect");
				
			});


			$('.burger-icon').addEventListener('click', function (e) {
				this.classList.toggle('open-burger');
				$('.main-menu').classList.toggle('mobile-version');
			});
		</script>

		<div id="content" class="site-content" style="margin-top: 75px">

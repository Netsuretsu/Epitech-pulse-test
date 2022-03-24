<?php
/**
 * Header file for Epitech pulse.
 *
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
        <header>
            <div class="header_cities">
               <div class="cities">
                <a href="">Barcelone</a> 
                <a href="">-Berlin</a> 
                <a href="">-Bordeaux</a> 
                <a href="">-Bruxelles</a> 
                <a href="">-Cotonou</a> 
                <a href="">-Lille </a> 
                <a href="">-Lyon</a> 
                <a href="">-Marseille</a> 
                <a href="">-Montpellier</a> 
                <a href="">-Mulhouse </a> 
                <a href="">-Nancy</a> 
                <a href="">-Nantes</a> 
                <a href="">-Nice</a> 
                <a href="">-Paris</a> 
                <a href="">-Rennes</a> 
                <a href="">-Saint André </a> 
                <a href="">-Strasbourg</a> 
                <a href="">-Tirana</a> 
                <a href="">-Toulouse</a>
               </div>
            </div>
            <div class="header_menu_container">

               <div class="header_menu">
                <div class="header_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/epitech_logo.png" alt="Epitech logo">
                </div>

                <div class="header_nav">
                    <ul class="header_nav_list">
                        <li>
                            <a class="link" href="">L'ÉCOLE 
                            <div class="svg_container">
                                <svg class="icon" width="14" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/></svg>
                            </div>
                            </a>
                            <ul class="header_sub_menu">
                            <li><a href="">DÉCOUVRIR EPITECH</a></li>
                            <li><a href="">LA PÉDAGOGIE</a></li>
                            <li><a href="">LE CAMPUS BÉNIN</a></li>
                        </ul>
                        </li>
                       

                        <li><a class="link"  href="">NOS FORMATIONS 
                            <div class="svg_container">
                                <svg class="icon" width="14" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M151.5 347.8L3.5 201c-4.7-4.7-4.7-12.3 0-17l19.8-19.8c4.7-4.7 12.3-4.7 17 0L160 282.7l119.7-118.5c4.7-4.7 12.3-4.7 17 0l19.8 19.8c4.7 4.7 4.7 12.3 0 17l-148 146.8c-4.7 4.7-12.3 4.7-17 0z"/></svg>
                            </div>
                        </a>
                        <ul class="header_sub_menu">
                            <li><a href="">BACHELOR</a></li>
                            <li><a href="">PRÉ MSC PRO</a></li>
                            <li><a href="">MSC PRO</a></li>
                            <li><a href="">CODING ACADEMY</a></li>
                        </ul>

                    </li>
                        <li><a class="link"  href="">ACTUALITÉS</a></li>
                    </ul>
                </div>

                <button>NOUS CONTACTER  &nbsp; <i class="fa-regular fa-envelope"></i></button>
               </div>
            </div>

        </header>

	<!-- #site-header -->

		<?php
	
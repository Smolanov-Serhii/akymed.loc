<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akymed
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&display=swap" rel="stylesheet">
    <script
            src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"
            defer
    ></script>
	<?php wp_head(); ?>
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);

    }
</script>
<body <?php body_class(); ?>>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="header" class="header default">
        <div class="header__container big-container">
            <div class="header__logo">
                <?php
                the_custom_logo();
                ?>
            </div>
            <nav id="header__nav" class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_id'        => 'main-menu',
                    )
                );
                ?>
            </nav>
            <div class="header__language">
                <?php
                qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
	</header>

<?php
/* Template Name: Main Page */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akymed
 */

get_header();
$post_id = get_the_ID();
?>
	<main id="main" class="main">
        <section class="banner-main">
            <div class="banner-main__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-main/bg.png'?>" alt="">
            </div>
            <div class="banner-main__container">
                <h1 class="banner-main__title banner-title">
                    <span>Next generation </span>
                    fertility and preservation
                    <span>solutions</span>
                </h1>
                <div class="banner-main__logos">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-main/logo1.svg'?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-main/logo2.svg'?>" alt="">
                </div>
            </div>
        </section>
        <section class="reasons-main">
            <div class="reasons-main__container main-container">
                <h2 class="reasons-main__title section-title">
                    Four reasons for AKYmed
                </h2>
                <p class="reasons-main__subtitle section-subtitle">
                    The only holistic solution package through innovative products
                </p>
                <div class="reasons-main__list">
                    <div class="reasons-main__image">
                        <div class="reasons-main__wrapper">
                            <img class="center-image" src="<?php echo get_template_directory_uri() . '/img/templates/reasons-main/circle.jpg'?>" alt="">
                            <img class="inner" src="<?php echo get_template_directory_uri() . '/img/templates/reasons-main/inner.svg'?>" alt="">
                            <img class="outer" src="<?php echo get_template_directory_uri() . '/img/templates/reasons-main/outer.svg'?>" alt="">
                        </div>
                    </div>
                    <div class="reasons-main__item">
                        <h3 class="reasons-main__name">
                            QualiSperm CASA
                        </h3>
                        <div class="reasons-main__desc">
                            <p>CASA software suite… Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="reasons-main__item">
                        <h3 class="reasons-main__name">
                            QualiSperm CASA
                        </h3>
                        <div class="reasons-main__desc">
                            <p>CASA software suite… Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="reasons-main__item">
                        <h3 class="reasons-main__name">
                            QualiSperm CASA
                        </h3>
                        <div class="reasons-main__desc">
                            <p>CASA software suite… Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="reasons-main__item">
                        <h3 class="reasons-main__name">
                            QualiSperm CASA
                        </h3>
                        <div class="reasons-main__desc">
                            <p>CASA software suite… Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="reasons-main__buttons">
                    <a href="#" class="button button-green">
                        <span>For Humans</span>
                    </a>
                    <a href="#" class="button button-orange">
                        <span>For Animals</span>
                    </a>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

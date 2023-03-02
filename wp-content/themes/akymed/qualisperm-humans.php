<?php
/* Template Name: Qualisperm - Humans */
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
        <section class="banner-grid">
            <div class="banner-grid__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-grid/bg.jpg'?>" alt="">
            </div>
            <div class="banner-grid__container main-container">
                <h1 class="banner-grid-title__title banner-title">
                    Qualisperm for<br>
                    humans
                </h1>
                <p class="banner-grid__subtitle banner-subtitle">QualiSperm Human allows automatic measuring of male fertility parameters according to the WHO guidelines. </p>
            </div>
            <h2 class="banner-grid__list">
                Main modules
            </h2>
            <div class="banner-grid__grid main-container text">
                <div class="banner-grid__item">
                    <div class="banner-grid__item-tag">
                        Concentration and Motility
                    </div>
                    <ul>
                        <li>Concentration (mio/ml)</li>
                        <li>Number of sperm cells</li>
                        <li>% Progressive motile, % non-progressive motile, % immotile</li>
                        <li>% speed classes A-D</li>
                        <li>Mean Speed (VAP)</li>
                        <li>Mean sperm cells size</li>
                    </ul>
                </div>
                <div class="banner-grid__item">
                    <div class="banner-grid__item-tag">
                        Morphology
                    </div>
                    <ul>
                        <li>Total number and % normal spermatozoa</li>
                        <li>% and total number of abnormalities of Head, Mid-piece and Tail</li>
                        <li>Morphometric data and abnormalities of each individual sperm</li>
                        <li>Teratozoospermia Index</li>
                    </ul>
                </div>
                <div class="banner-grid__item">
                    <div class="banner-grid__item-tag">
                        Vitality
                    </div>
                    <ul>
                        <li>Total number</li>
                        <li>% live and % dead spermatozoa</li>
                    </ul>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

<?php
/* Template Name: Peripherals */
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
        <section class="banner-photo">
            <div class="banner-photo__block">
                <div class="banner-photo__bg">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-photo/bg.jpg'?>" alt="">
                </div>
                <div class="banner-photo__container main-container">
                    <h1 class="banner-photo__title banner-title" data-aos="fade-up" data-aos-delay="300">
                        Peripherals
                    </h1>
                    <p class="banner-photo__subtitle banner-subtitle">AKYmed will help you select the right peripherals. Depending on your selection of any AKYmed product we recommend a variety of equipment that ensures high quality assessment in co-operation with QualiSperm.</p>
                </div>
                <div class="banner-photo__img">
                    <img class="banner-photo__img-click" src="<?php echo get_template_directory_uri() . '/img/templates/banner-photo/click.svg'?>" alt="">
                    <img class="banner-photo__img-img" src="<?php echo get_template_directory_uri() . '/img/templates/banner-photo/img.png'?>" alt="">
                </div>
            </div>
            <div class="animation-block" style="display: none">
                <div class="animation-block__container main-container">
                    <div class="animation-block__animate">

                    </div>
                    <div class="animation-block__table" style="display: none">
                        <div class="animation-block__table-list">
                            <div class="animation-block__table-item">
                                <h3 class="animation-block__table-title">
                                    Microscopes
                                </h3>
                                <div class="animation-block__table-desc">
                                    <p>Olympus CX 43 with camera output,0.5 reduction piece and phase contrast condenser. 10x objective for Concentration & Motility. 100x O.I. objective for Morphology</p>
                                </div>
                            </div>
                            <div class="animation-block__table-item">
                                <h3 class="animation-block__table-title">
                                    Digital cameras
                                </h3>
                                <div class="animation-block__table-desc">
                                    <p>We equip our systems with a ½” CMOS sensor with excellent sensitivity UI-1540LE rev.2   |   UI-3240ML</p>
                                </div>
                            </div>
                            <div class="animation-block__table-item">
                                <h3 class="animation-block__table-title">
                                    Work station (PC)
                                </h3>
                                <div class="animation-block__table-desc">
                                    <p>PC: Desktop with Intel Core i3 or superior, at least 4 GB RAM, 500 GB Hard disc Operating system: Windows 10 or Windows 11</p>
                                </div>
                            </div>
                            <div class="animation-block__table-item">
                                <h3 class="animation-block__table-title">
                                    Heating stages
                                </h3>
                                <div class="animation-block__table-desc">
                                    <p>Not mandatory. Ask for a proposal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

<?php
/* Template Name: Science */
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
        <section class="text-title">
            <div class="text-title__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/text-title/bg.svg'?>" alt="">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title" data-aos="fade-right" data-aos-delay="300">
                    Scientific methods and <br>patented technology
                </h1>
            </div>
        </section>
        <section class="two-column">
            <div class="two-column__container main-container">
                <h2 class="two-column__title section-title" data-aos="fade-right" data-aos-delay="500">
                    Concentration and Motility Analysis
                </h2>
                <p class="two-column__subtitle section-subtitle" data-aos="fade-right" data-aos-delay="700">QualiSperm uses proprietary semen analysis algorithms based on fundamentally new technologies rendering reproductive analysis at all levels of concentration. Our Trajectory algorithm and Image Correlation Analysis Method, combined with advanced Digital Sperm Washing, delivers fast and accurate results.</p>
            </div>
            <div class="two-column__list main-container">
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="two-column__item-title">
                        Image Recognition
                    </h3>
                    <div class="two-column__item-desc">
                        <p>Using a larger field, QualiSperm is able to determine more sperms per unit area than any other CASA software. Its advanced image recognition algorithm captures up to 1000 sperms per image within only 4 seconds and further increases accuracy by scanning as many individual fields as are needed to reach a statistically relevant number.</p>
                    </div>
                </div>
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="two-column__item-title">
                        Trajectory Analysis
                    </h3>
                    <div class="two-column__item-desc">
                        <p>Using a larger field, QualiSperm is able to determine more sperms per unit area than any other CASA software. Its advanced image recognition algorithm captures up to 1000 sperms per image within only 4 seconds and further increases accuracy by scanning as many individual fields as are needed to reach a statistically relevant number.</p>
                    </div>
                </div>
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="two-column__item-title">
                        Digital Sperm Washing
                    </h3>
                    <div class="two-column__item-desc">
                        <p>Our unique Digital Sperm Washing (DSW) algorithm significantly improves discrimination of non sperm objects within the captured images. This technology obliterates time consuming manual post processing and delivers precise results measuring concentration and motility.</p>
                    </div>
                </div>
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="two-column__item-title">
                        Image Correlation Analysis
                    </h3>
                    <div class="two-column__item-desc">
                        <p>Using a larger field, QualiSperm is able to determine more sperms per unit area than any other CASA software. Its advanced image recognition algorithm captures up to 1000 sperms per image within only 4 seconds and further increases accuracy by scanning as many individual fields as are needed to reach a statistically relevant number.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="two-column-img">
            <div class="two-column-img__container main-container" data-aos="zoom-in" data-aos-delay="200">
                <div class="two-column-img__img">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/two-column-img/img.png'?>" alt="">
                </div>
            </div>
            <div class="two-column__container main-container">
                <h2 class="two-column__title section-title" data-aos="fade-up" data-aos-delay="200">
                    Morphology
                </h2>
                <p class="two-column__subtitle section-subtitle" data-aos="fade-up" data-aos-delay="400">The sperm morphology module of QualiSperm is primarily based on mathematical morphology segmentation techniques. A dynamic local threshold operation transforms the grayscale microscope image into a binary matrix.</p>
            </div>
            <div class="two-column__list main-container">
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="200">
                    <div class="two-column__item-desc">
                        <p>Several morphological shape-based filters are applied to identify various, specific sperm parts: head, acrosome, mid-piece and tail. The identified (segmented) sperm parts are then quantified in terms of purely geometric parameters such as length, width, area, angles, symmetry, perimeter and roughness.</p>
                    </div>
                </div>
                <div class="two-column__item" data-aos="fade-up" data-aos-delay="400">
                    <div class="two-column__item-desc">
                        <p>Sperms are classified against the WHO and Kruger sperm normality criteria. For instance, a head shape is classified as tapered if the ratio between head length and head width is higher than its corresponding normality interval.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="image-small" data-aos="fade-up" data-aos-delay="200">
            <div class="image-small__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/image-small/bg.jpg'?>" alt="">
            </div>
        </section>
        <section class="publication">
            <div class="publication__container main-container">
                <h2 class="publication__title section-title">
                    Publications
                </h2>
                <div class="publication__list">
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2020 – Chicken seminal fluid lacks CD9- and CD44-bearingextracellular vesicles</h3></a>
                        <p>Alvarez-Rodriguez M, Ntzouni M, Wright D, et al.</p>
                        <p>Reprod Dom Anim. 2020; 55: 293–300</p>
                    </div>
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2019 – Assessment of Oligo-Chitosan Biocompatibility toward Human Spermatozoa</h3></a>
                        <p>Schimpf U, Nachmann G, Trombotto S, Houska P, Yan H, Björndahl L, Crouzier T.</p>
                        <p>ACS Applied Materials & Interfaces 2019; 11:50, 46572-46584</p>
                    </div>
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2019 – Assessment of Oligo-Chitosan Biocompatibility toward Human Spermatozoa</h3></a>
                        <p>Schimpf U, Nachmann G, Trombotto S, Houska P, Yan H, Björndahl L, Crouzier T.</p>
                        <p>ACS Applied Materials & Interfaces 2019; 11:50, 46572-46584</p>
                    </div>
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2019 – Assessment of Oligo-Chitosan Biocompatibility toward Human Spermatozoa</h3></a>
                        <p>Schimpf U, Nachmann G, Trombotto S, Houska P, Yan H, Björndahl L, Crouzier T.</p>
                        <p>ACS Applied Materials & Interfaces 2019; 11:50, 46572-46584</p>
                    </div>
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2019 – Assessment of Oligo-Chitosan Biocompatibility toward Human Spermatozoa</h3></a>
                        <p>Schimpf U, Nachmann G, Trombotto S, Houska P, Yan H, Björndahl L, Crouzier T.</p>
                        <p>ACS Applied Materials & Interfaces 2019; 11:50, 46572-46584</p>
                    </div>
                    <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                        <a href="#"><h3 class="publication__item-title">2019 – Assessment of Oligo-Chitosan Biocompatibility toward Human Spermatozoa</h3></a>
                        <p>Schimpf U, Nachmann G, Trombotto S, Houska P, Yan H, Björndahl L, Crouzier T.</p>
                        <p>ACS Applied Materials & Interfaces 2019; 11:50, 46572-46584</p>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

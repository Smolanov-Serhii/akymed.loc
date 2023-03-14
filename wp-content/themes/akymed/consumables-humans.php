<?php
/* Template Name: Consumables - Humans */
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
                <h1 class="text-title__title banner-title">
                    Concentration and <br>Motility disposables
                </h1>
            </div>
        </section>
        <section class="table main-container">
            <div class="table__container">
                <div class="table__content">
                    <h2 class="table__title section-title">
                        Leja slides
                    </h2>
                    <p class="table__subtitle section-subtitle">Leja is providing high quality disposable counting chambers especially made for semen analysis. Due to its characteristics, Leja slides will save time performing a semen analysis, as well as increase the level of accuracy and precision.</p>
                    <div class="table__img">
                        <img src="<?php echo get_template_directory_uri() . '/img/templates/table/img.jpg'?>" alt="">
                    </div>
                    <table class="table__block-wide">
                        <tbody>
                        <tr>
                            <th>Catalogue ID</th><th>Chamber depth</th><th>#Chambers</th><th>Height deviation</th><th>Remarks</th>
                        </tr>
                        <tr>
                            <td>SC-10-01-04-B(CE)</td><td>10</td><td>4</td><td>max 10%</td><td></td>
                        </tr>
                        <tr>
                            <td>SC-12-01-04-C(CE)</td><td>12</td><td>2</td><td>max 10%</td><td></td>
                        </tr>
                        <tr>
                            <td>SC-100-01-02-A(CE)</td><td>100</td><td>2</td><td>max 10%</td><td>azoospermia / post-vasectomy</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="table__block-mobile">
                        <div class="table__block-mobile-item">
                            <div class="row">
                                <div class="head">
                                    Catalogue ID
                                </div>
                                <div class="value">
                                    SC-10-01-04-B(CE)
                                </div>
                            </div>
                            <div class="row">
                                <div class="head">
                                    Chamber depth
                                </div>
                                <div class="value">
                                    10
                                </div>
                            </div>
                            <div class="row">
                                <div class="head">
                                    #Chambers
                                </div>
                                <div class="value">
                                    4
                                </div>
                            </div>
                            <div class="row">
                                <div class="head">
                                    Height deviation
                                </div>
                                <div class="value">
                                    max 10%
                                </div>
                            </div>
                            <div class="row">
                                <div class="head">
                                    Remarks
                                </div>
                                <div class="value">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-img main-container">
            <div class="text-img__container">
                <div class="text-img__img">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/text-img/img.png'?>" alt="">
                </div>
                <h2 class="text-img__title section-title">
                    QC-Beads
                </h2>
                <div class="text-img__content text">
                    <p>Quality control (QC) of semen analysis is essential for the detection and correction of systematic errors and high variability.</p>
                    <p>For manual counting, the QC-Beads can be used to evaluate technician techniques, counting protocols and counting chambers.</p>
                    <p>For automated counting, the QC-Beads can be used to evaluate the performance of the optical system and the resulting computer image processing of an automated semen analyzer.</p>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

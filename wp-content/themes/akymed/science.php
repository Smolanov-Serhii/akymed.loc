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
                    <?php the_field('title-banner', $post_id)?>
                </h1>
            </div>
        </section>
        <section class="two-column">
            <div class="two-column__container main-container">
                <h2 class="two-column__title section-title" data-aos="fade-right" data-aos-delay="500">
                    <?php the_field('title-two-column', $post_id)?>
                </h2>
                <p class="two-column__subtitle section-subtitle" data-aos="fade-right" data-aos-delay="700"><?php the_field('subtitle-two-coolumns', $post_id)?></p>
            </div>
            <div class="two-column__list main-container">
                <?php
                if( have_rows('columns', $post_id) ):
                    while( have_rows('columns', $post_id) ) : the_row();
                        $title = get_sub_field('title-item');
                        $desc = get_sub_field('description-item');
                        ?>
                        <div class="two-column__item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="two-column__item-title">
                                <?php echo $title;?>
                            </h3>
                            <div class="two-column__item-desc">
                                <?php echo $desc;?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </section>
        <section class="two-column-img">
            <div class="two-column-img__container main-container" data-aos="zoom-in" data-aos-delay="200">
                <div class="two-column-img__img">
                    <img src="<?php echo the_field('image-morph', $post_id)?>" alt="<?php the_field('title-morph', $post_id)?>">
                </div>
            </div>
            <div class="two-column__container main-container">
                <h2 class="two-column__title section-title" data-aos="fade-up" data-aos-delay="200">
                    <?php the_field('title-morph', $post_id)?>
                </h2>
                <p class="two-column__subtitle section-subtitle" data-aos="fade-up" data-aos-delay="400"><?php the_field('subtitle-mrph', $post_id)?></p>
            </div>
            <div class="two-column__list main-container">
                <?php
                if( have_rows('two_column-niz', $post_id) ):
                    while( have_rows('two_column-niz', $post_id) ) : the_row();
                        $desc = get_sub_field('description-two-column-niz');
                        ?>
                        <div class="two-column__item" data-aos="fade-up" data-aos-delay="200">
                            <div class="two-column__item-desc">
                                <?php echo $desc;?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </section>
        <section class="image-small" data-aos="fade-up" data-aos-delay="200">
            <div class="image-small__bg">
                <img src="<?php echo the_field('image-image-block', $post_id)?>" alt="<?php the_field('title-banner', $post_id)?>">
            </div>
        </section>
        <section class="publication">
            <div class="publication__container main-container">
                <h2 class="publication__title section-title">
                    <?php the_field('title-publications', $post_id)?>
                </h2>
                <div class="publication__list">
                    <?php
                    if( have_rows('publications_list', $post_id) ):
                        while( have_rows('publications_list', $post_id) ) : the_row();
                            $title = get_sub_field('title');
                            $author = get_sub_field('author');
                            $materil = get_sub_field('materials');
                            $lnk = get_sub_field('link_to_material');
                            ?>
                            <div class="publication__item" data-aos="fade-up" data-aos-delay="200">
                                <a href="<?php echo $lnk;?>" target="_blank" rel="nofollow"><h3 class="publication__item-title"><?php echo $title;?></h3></a>
                                <p><?php echo $author;?></p>
                                <p><?php echo $materil;?></p>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

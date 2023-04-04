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
            <?php
            $bg = get_field('banner_image', $post_id);
            $logo1 = get_field('first_logo', $post_id);
            $logo2 = get_field('second_logo', $post_id);
            ?>
            <div class="banner-main__bg">
                <img src="<?php echo esc_url($bg['url']); ?>" alt="<?php echo esc_attr($bg['alt']); ?>">
            </div>
            <div class="banner-main__container">
                <h1 class="banner-main__title banner-title" data-aos="fade-up" data-aos-delay="300">
                    <?php the_field('banner_title', $post_id)?>
                </h1>
                <div class="banner-main__logos" data-aos="fade-up" data-aos-delay="800">
                    <img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1['alt']); ?>">
                    <img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2['alt']); ?>">
                </div>
            </div>
        </section>
        <section class="reasons-main">
            <?php
            $default_image = get_field('default_center_image', $post_id);
            ?>
            <div class="reasons-main__container main-container">
                <h2 class="reasons-main__title section-title" data-aos="fade-right" data-aos-delay="200">
                    <?php the_field('reasons-title', $post_id)?>
                </h2>
                <p class="reasons-main__subtitle section-subtitle" data-aos="fade-right" data-aos-delay="400">
                    <?php the_field('block_subtitle', $post_id)?>
                </p>
                <div class="reasons-main__list">
                    <div class="reasons-main__image" data-aos="zoom-in" data-aos-delay="600">
                        <div class="reasons-main__wrapper">
                            <img class="center-image" src="<?php echo esc_url($default_image['url']); ?>" alt="<?php the_field('reasons-title', $post_id)?>">
                            <img class="inner" src="<?php echo get_template_directory_uri() . '/img/templates/reasons-main/inner.svg'?>" alt="">
                            <img class="outer" src="<?php echo get_template_directory_uri() . '/img/templates/reasons-main/outer.svg'?>" alt="">
                        </div>
                    </div>
                    <?php if( have_rows('reasons-items', $post_id) ): ?>
                        <?php $counter = 1; ?>
                        <?php while( have_rows('reasons-items', $post_id) ): the_row();
                            $image = get_sub_field('item_image');
                            $title = get_sub_field('item_title');
                            $simple = get_sub_field('simple_text');
                            $full= get_sub_field('full_text');

                            ?>
                            <div class="reasons-main__item <?php if($counter == 1){echo 'active';}?>" data-aos="fade-right" data-aos-delay="<?php echo $counter + 7 . '00'?>" data-item="<?php echo 'item' . $counter?>" data-image="<?php echo esc_url($image['url']); ?>">
                                <h3 class="reasons-main__name">
                                    <?php echo $title?>
                                </h3>
                                <div class="reasons-main__desc">
                                    <?php echo $simple?>
                                </div>
                                <div class="reasons-main__hidden">
                                    <?php echo $full?>
                                    <div class="reasons-main__hidden-tag">
                                        <div class="label">
                                            <?php echo the_field('text_tags', 'options')?>:
                                        </div>
                                        <div class="reasons-main__tags">
                                            <?php
                                            if( have_rows('tags_list') ):
                                                while( have_rows('tags_list') ) : the_row();
                                                    $tag = get_sub_field('tag');
                                                    $color = get_sub_field('tag_color');
                                                    $lnk = get_sub_field('tag-lnk');;
                                                    ?>
                                                <?php
                                                    if($lnk){
                                                        ?>
                                                        <a href="<?php echo $lnk?>" class="reasons-main__tags-item" style="background-color: <?php echo $color?>;" target="_blank">
                                                            <?php echo $tag?>
                                                        </a>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="reasons-main__tags-item" style="background-color: <?php echo $color?>;">
                                                            <?php echo $tag?>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>

                                                <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter ++
                            ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="reasons-main__buttons" data-aos="fade-up" data-aos-delay="1400">
                    <a href="<?php the_field('first_button_link', $post_id)?>" class="button button-green">
                        <span><?php the_field('first_button_text', $post_id)?></span>
                    </a>
                    <a href="<?php the_field('second_button_link', $post_id)?>" class="button button-orange">
                        <span><?php the_field('second_button_text', $post_id)?></span>
                    </a>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

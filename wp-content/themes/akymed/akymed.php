<?php
/* Template Name: Akymed */
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
        <section class="banner-double">
            <?php
            $bg_first = get_field('banner_image_first', $post_id);
            $bg_second = get_field('banner_image_second', $post_id);
            ?>
            <div class="banner-double__container">
                <div class="banner-double__bg">
                    <img src="<?php echo esc_url($bg_first['url']); ?>" alt="<?php echo esc_attr($bg_first['alt']); ?>">
                </div>
                <div class="main-container">
                    <h1 class="banner-double__title banner-title" data-aos="fade-up" data-aos-delay="200">
                        <?php the_field('title', $post_id)?>
                    </h1>
                    <p class="banner-double__subtitle section-subtitle"  data-aos="fade-up" data-aos-delay="500"><?php the_field('subtitle', $post_id)?></p>
                </div>
            </div>
            <div class="banner-double__two"  data-aos="fade-up" data-aos-delay="800">
                <img src="<?php echo esc_url($bg_second['url']); ?>" alt="<?php echo esc_attr($bg_second['alt']); ?>">
            </div>
        </section>
        <section class="team">
            <div class="team__container main-container text">
                <h2 class="team__title section-title" data-aos="fade-up" data-aos-delay="200">
                    <?php the_field('team-title', $post_id)?>
                </h2>
                <p class="team__subtitle section-subtitle" data-aos="fade-up" data-aos-delay="500"><?php the_field('subtitle-team', $post_id)?></p>
                <p class="team__subtitle section-subtitle-red" data-aos="fade-up" data-aos-delay="800"><?php the_field('orange_text', $post_id)?></p>
                <div class="team__list">
                    <?php
                    $args = array(
                        'post_type' => 'team',
                        'showposts' => "-1", //сколько показать статей
                        'orderby' => "menu_order", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $postpers_id = get_the_ID();
                            $image = get_field('person_photo', $postpers_id);
                            $name = get_field('person_name', $postpers_id);
                            $work = get_field('job_title', $postpers_id);
                            $short = get_field('shot_description', $postpers_id);
                            $btn = get_field('title_on_button_show_full_description', $postpers_id);
                            $full = get_field('full_description', $postpers_id);
                            ?>
                            <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                                <div class="team__item-img">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                                </div>
                                <div class="team__item-desc">
                                    <h3 class="team__item-name">
                                        <?php echo $name;?>
                                    </h3>
                                    <div class="team__item-work">
                                        <?php echo $work;?>
                                    </div>
                                    <div class="team__item-about">
                                        <?php echo $short;?>
                                    </div>
                                </div>
                                <div class="team__item-full">
                                    <h3 class="team__item-header">
                                        <?php echo $btn;?>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                            <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                        </svg>
                                    </h3>
                                    <div class="team__item-wrapper" style="display: none">
                                        <?php echo $full;?>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </div>
            </div>
        </section>

        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

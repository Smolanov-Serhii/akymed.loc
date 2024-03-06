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
                    <?php the_field('title-banner', $post_id)?>
                </h1>
            </div>
        </section>
        <section class="table main-container">
            <div class="table__container">
                <div class="table__content">
                    <h2 class="table__title section-title">
                        <?php the_field('titletable', $post_id)?>
                    </h2>
                    <p class="table__subtitle section-subtitle"><?php the_field('subtitle-table', $post_id)?></p>
                    <div class="table__img">
                        <img src="<?php the_field('block_image', $post_id)?>" alt="<?php the_field('titletable', $post_id)?>">
                    </div>
                    <table class="table__block-wide">
                        <tbody>
                        <?php
                        $column_1 = "";
                        $column_2 = "";
                        $column_3 = "";
                        $column_4 = "";
                        $column_5 = "";
                        $counter = 1;
                        if( have_rows('table', $post_id) ):
                            while( have_rows('table', $post_id) ) : the_row();
                                $value1 = get_sub_field('column_1');
                                $value2 = get_sub_field('column_2');
                                $value3 = get_sub_field('column_3');
                                $value4 = get_sub_field('column_4');
                                $value5 = get_sub_field('column_5');
                                if($counter ==1){
                                    $column_1 = $value1;
                                    $column_2 = $value2;
                                    $column_3 = $value3;
                                    $column_4 = $value4;
                                    $column_5 = $value5;
                                    ?>
                                    <tr>
                                        <th><?php echo $value1;?></th><th><?php echo $value2;?></th><th><?php echo $value3;?></th><th><?php echo $value4;?></th><th><?php echo $value5;?></th>
                                    </tr>
                                    <?php
                                } else {
                                    ?>
                                    <tr>
                                        <td><?php echo $value1;?></td><td><?php echo $value2;?></td><td><?php echo $value3;?></td><td><?php echo $value4;?></td><td><?php echo $value5;?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            <?php
                                $counter++;
                            endwhile;
                        endif;
                        ?>
                        </tbody>
                    </table>
                    <div class="table__block-mobile">
                        <?php
                        $counter = 1;
                        if( have_rows('table', $post_id) ):
                            while( have_rows('table', $post_id) ) : the_row();
                                $value1 = get_sub_field('column_1');
                                $value2 = get_sub_field('column_2');
                                $value3 = get_sub_field('column_3');
                                $value4 = get_sub_field('column_4');
                                $value5 = get_sub_field('column_5');
                                if($counter > 1){
                                    ?>
                                    <div class="table__block-mobile-item">
                                        <div class="row">
                                            <div class="head">
                                                <?php echo $column_1?>
                                            </div>
                                            <div class="value">
                                                <?php echo $value1?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="head">
                                                <?php echo $column_2?>
                                            </div>
                                            <div class="value">
                                                <?php echo $value2?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="head">
                                                <?php echo $column_3?>
                                            </div>
                                            <div class="value">
                                                <?php echo $value3?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="head">
                                                <?php echo $column_4?>
                                            </div>
                                            <div class="value">
                                                <?php echo $value4?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="head">
                                                <?php echo $column_5?>
                                            </div>
                                            <div class="value">
                                                <?php echo $value5?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            <?php
                                $counter++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if (get_field('button-url', $post_id)){
                ?>
                    <div class="table__block-button">
                        <a href="<?php the_field('button-url', $post_id)?>" class="button button-green">
                            <span><?php the_field('button_name', $post_id)?></span>
                        </a>
                    </div>
                <?php
            }
            ?>

        </section>
        <section class="text-img main-container">
            <div class="text-img__container">
                <div class="text-img__img">
                    <img src="<?php echo the_field('image-beads', $post_id)?>" alt="<?php the_field('title-beads', $post_id)?>">
                </div>
                <h2 class="text-img__title section-title">
                    <?php the_field('title-beads', $post_id)?>
                </h2>
                <div class="text-img__content text">
                    <?php the_field('description', $post_id)?>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();

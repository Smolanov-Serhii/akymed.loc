<?php
/* Template Name: News */
get_header();
$post_id = get_the_ID();
?>
    <main id="main" class="main">
        <section class="text-title">
            <div class="text-title__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/text-title/bg.svg'?>" alt="">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title" data-aos="fade-up" data-aos-delay="200">
                    <?php the_field('title-banner', $post_id)?>
                </h1>
                <p class="text-title__subtitle banner-subtitle" data-aos="fade-up" data-aos-delay="400"><?php the_field('subtitle-banner', $post_id)?></p>
            </div>
        </section>
        <section class="single-new main-container">
            <div class="single-new__content">
                <div class="single-new__image">
                    <?php the_post_thumbnail('full')?>
                </div>
                    <?php the_content();?>
            </div>
            <div class="single-new__sidebar">
                <div class="single-new__sidebar-item">
                    <p>Share this content, choose your platform!</p>
                    <?php echo do_shortcode('[addtoany url="' . get_the_permalink() . '" title="' . get_the_title() . '"]') ?>
                </div>
                <div class="single-new__sidebar-item">
                    <p>Tags:</p>
                    <div class="tags-list">
                        <?php
                        $posttags = get_the_tags();
                        if( $posttags ){
                            foreach( $posttags as $tag ){
                                echo "<div class='tags-item'>" . $tag->name . "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
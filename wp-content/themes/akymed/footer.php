<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akymed
 */

?>

	<footer id="footer" class="footer">
        <div class="footer__container main-container">
            <div class="footer__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="outer" src="<?php echo get_template_directory_uri() . '/img/templates/footer/logo.svg'?>" alt="Footer logo">
                </a>
            </div>
            <nav class="footer__nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_id'        => 'footer-menu',
                    )
                );
                ?>
                <div class="menu-footer-menu-container">
                    <ul class="menu footer__contacts">
                        <li class="disable menu-item footer__contacts-title menu-item-has-children">
                            <a href="#"><?php echo the_field('text_contacts', 'options')?></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-adress"><?php echo the_field('adress', 'options')?></li>
                                <li class="menu-item"><a href="tel:<?php echo the_field('phone_number', 'options')?>"><?php echo the_field('phone_number', 'options')?></a></li>
                                <li class="menu-item"><a href="mailto:<?php echo the_field('phone_number', 'options')?>"><?php echo the_field('email', 'options')?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <p class="footer__copyright">
               © <?php echo date('Y');?> AKYmed Ltd
            </p>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>

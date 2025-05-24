<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer>

    <div class="bootscore-footer text-light py-4">
        <div class="container">
            <!-- Top Footer Widget -->
            <?php if ( is_active_sidebar( 'top-footer' )) : ?>
                <div>
                    <?php dynamic_sidebar( 'top footer' ); ?>
                </div>
            <?php endif; ?>            
            
            <div class="row align-items-center">
                <div class="col col-sm-6 col-md-4">
                    <h4>Autoridades</h4>
                    <ul>
                        <li><strong>Presidente</strong> Od. Raúl E. Allín <em>(Rosario)</em></li>
                        <li><strong>Vice-Presidente</strong> Od. Alicia Solís <em>(Chaco)</em></li>
                        <li><strong>Secretario</strong> Od. Marcelo Raed <em>(Santiago del Estero)</em></li>
			<li><strong>Tesorero</strong> Marcelo Daniel Lobato <em>(La Rioja)</em></li>
                    </ul>
                </div>
                
                <div class="col d-none d-md-block col-md-4 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo/logo-inv.svg" alt="FACO" class="isotipo-footer mx-auto">
                </div>

                <div class="col col-md-4 text-end justify-content-end">
                    <ul>
                        <li><i class="fas fa-phone-square-alt me-1"></i>(0341) 440 - 5536</li>
                        <li><i class="fas fa-envelope-square me-1"></i><a href="mailto:facosecretaria@gmail.com" class="link-light">facosecretaria@gmail.com</a></li>
                        <li><i class="fas fa-home me-1"></i>9 de Julio 1668 (CP 2000) - Rosario</li>
                    </ul>
                </div>
            </div>
            
            <!-- Bootstrap 5 Nav Walker Footer Menu -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
                    'depth' => 1,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
            
        </div>
    </div>
</footer>

<div class="top-button">
    <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i></a>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

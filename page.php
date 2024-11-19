<?php
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
     * @package Bootscore
     */
    
    get_header();
    ?>

<div id="content" class="site-content container">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <?php the_post(); ?>

        <div class="row">
            <div class="col">
                <header class="entry-header width-100 position-relative">
                
                <?php the_post_thumbnail('full') ?>

                <div class="carousel-caption-background"></div>
                <div class="carousel-caption">
                    <!-- Title -->
                    <?php the_title('<h1 class="d-block">', '</h1>'); ?>
                </div>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <main id="main" class="site-main">
                    <div class="entry-content pt-5 pb-4">
                        <!-- Content -->
                        <?php the_content(); ?>
                        <!-- .entry-content -->
                        <?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootscore' ),
					'after'  => '</div>',
					) );
					?>
                    </div>
                </main><!-- #main -->

            </div><!-- col -->
            <?php get_sidebar(); ?>
        </div><!-- row -->

    </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();

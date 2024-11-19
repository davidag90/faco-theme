<?php
	/**
	 * The template for displaying category pages
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

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <main id="main" class="site-main">

                    <!-- Title & Description -->
                    <header class="page-header my-4">
                        <h1><?php single_cat_title(); ?></h1>
                        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                    </header>

                    <?php if (have_posts() ) : ?>
                    <?php while (have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( array('post-list-item', 'mb-5', 'pb-5', 'border-bottom', 'clearfix' ) ); ?>>
                        <header class="mb-2">
                            <!-- Title -->
                            <h2 class="blog-post-title mb-0">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <!-- Meta -->
                            <?php if ( 'post' === get_post_type() ) : ?>
                            <small class="text-muted mb-2">
                                <?php
                                    custom_post_date();
                                    custom_post_category();
                                    bootscore_edit();
                                ?>
                            </small>
                            <?php endif; ?>
                        </header>

                        <div class="article-content">
                            <!-- Featured Image-->
                            <?php if (has_post_thumbnail() )
                                echo get_the_post_thumbnail(null, 'medium', array( 'class' => 'img-thumbnail float-start mb-3 me-3' ) );
                            ?>
                            
                            <!-- Excerpt & Read more -->
                            <div class="mt-auto">
                                <?php the_excerpt(); ?> <a class="btn btn-danger float-end" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
                            </div>
                        </div>
                    </article>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- Pagination -->
                    <div>
                        <?php bootscore_pagination(); ?>
                    </div>

                </main><!-- #main -->

            </div><!-- col -->

            <?php get_sidebar(); ?>
        </div><!-- row -->

    </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();

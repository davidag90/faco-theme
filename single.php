<?php
	/*
	 * Template Post Type: post
	 */
	  
	 get_header();  ?>

<div id="content" class="site-content container">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <?php the_breadcrumb(); ?>

        <div class="row">
            <div class="col-md-7 col-lg-8">

                <main id="main" class="site-main">

                    <header class="entry-header">
                        <?php the_post(); ?>
                        <?php the_title('<h1>', '</h1>'); ?>
                        <p class="entry-meta">
                            <small class="text-muted">
                                <?php
							         custom_post_date();
                                     custom_post_category();
							         bootscore_comment_count();							
							     ?>
                            </small>
                        </p>
                    </header>

                    <div class="entry-content">
                        <div class="post-thumbnail-wrapper col-md-4 float-md-start me-md-3">
                            <?php bootscore_post_thumbnail(); ?>
                        </div>

                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer clear-both">
                        <div class="mb-4">
                            <?php bootscore_tags(); ?>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <?php previous_post_link('%link'); ?>
                                </li>
                                <li class="page-item">
                                    <?php next_post_link('%link'); ?>
                                </li>
                            </ul>
                        </nav>
                    </footer>

                    <?php comments_template(); ?>

                </main> <!-- #main -->

            </div><!-- col -->
            <?php get_sidebar(); ?>
        </div><!-- row -->

    </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>

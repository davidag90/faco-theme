<?php
    // style and scripts
    add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );

    function bootscore_5_child_enqueue_styles() {
        // Owl Carousel Styles
        wp_enqueue_style( 'owl-carousel-style', get_stylesheet_directory_uri() . '/libs/owl-carousel/dist/assets/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-theme-default', get_stylesheet_directory_uri() . '/libs/owl-carousel/dist/assets/owl.theme.default.min.css' );

        // style.css
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 

        // Owl Carousel Lib
        wp_enqueue_script('owl-carousel-lib', get_stylesheet_directory_uri() . '/libs/owl-carousel/dist/owl.carousel.min.js', false, '2.3.4', true);

        // custom.js
        wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);

    }

    // Date
    if ( ! function_exists( 'custom_post_date' ) ) :
        /**
         * Prints HTML with meta information for the current post-date/time.
         */
        function custom_post_date() {
            $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

            $time_string = sprintf( $time_string,
                esc_attr( get_the_date( DATE_W3C ) ),
                esc_html( get_the_date() )
            );

            $posted_on = sprintf(
                /* translators: %s: post date. */
                '%s',
                '<span rel="bookmark">' . $time_string . '</span>'
            );

            echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

        }
    endif;
    // Date End

    // Custom category list for post-list plugin
    if ( ! function_exists( 'custom_post_category' ) ) :
        function custom_post_category() {
            // Hide category and tag text for pages.
            if ( 'post' === get_post_type() ) {
                echo '<span class="post-categories"> / ';
                $thelist = '';
                $i = 0;
                $categories = get_the_category();

                foreach( $categories as $category ) {
                    $thelist .= '<a class="post-category" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . $category->name.'</a>';

                    if( $i != count($categories) - 1 ) : $thelist .= '<span class="separator">, </span>'; endif;
                    
                    $i++;
                }
                echo $thelist;  
                echo '</span>';
            }
        }
    endif;
    // Category Badge End
?>
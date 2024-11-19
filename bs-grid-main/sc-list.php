<?php
/*
 * List template.
 *
 * This template can be overriden by copying this file to your-theme/bs-grid-main/sc-list.php
 *
 * @author      bootScore
 * @package     bS Grid
 * @version     2.0.0

Post/Page/CPT List Shortcodes

Posts: 
[bs-list type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]

Child-pages: 
[bs-list type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

Custom post types:
[bs-list type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

Single items:
[bs-list type="post" id="1, 15"]
[bs-list type="page" id="2, 25"]
[bs-list type="isotope" id="33, 31"]
*/


// List Shortcode
add_shortcode( 'bs-list', 'bootscore_list' );
function bootscore_list( $atts ) {
    
    ob_start();
    extract( shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'date',
        'posts' => -1,
        'category' => '',
        'post_parent'    => '',
        'tax' => '',
        'terms' => '',
        'id' => ''
    ), $atts ) );

    $options = array(
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'posts_per_page' => $posts,
        'category_name' => $category,
        'post_parent' => $post_parent,
    );

    $tax = trim( $tax );
    $terms = trim( $terms );
    if ( $tax != '' && $terms != '' ) {
        $terms = explode( ',', $terms );
        $terms = array_map( 'trim', $terms );
        $terms = array_filter( $terms );
        $terms = array_unique( $terms );
        unset( $options['category_name'] );
        $options['tax_query'] = array( array(
            'taxonomy' => $tax,
            'field'    => 'name',
            'terms'    => $terms,
        ) );
    }

    if ( $id != '' ) {
        $ids = explode( ',', $id );
        $ids = array_map( 'intval', $ids );
        $ids = array_filter( $ids );
        $ids = array_unique( $ids );
        $options['post__in'] = $ids;
    }
    
    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <?php if( ! in_category( 'destacado', null ) ): ?>
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
                echo get_the_post_thumbnail(null, 'thumbnail', array( 'class' => 'img-thumbnail float-start mb-3 me-3' ) );
            ?>
            
            <!-- Excerpt & Read more -->
            <div class="mt-auto">
                <?php the_excerpt(); ?> <a class="btn btn-danger float-end" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
            </div>
        </div>
    </article>
    <?php endif; ?>

<?php endwhile; wp_reset_postdata(); ?>


<?php $myvariable = ob_get_clean();
    return $myvariable;
    }   
}

// List Shortcode End
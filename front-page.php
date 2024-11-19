<?php get_header();	?>	

<div id="content" class="site-content container">
    <div id="primary" class="content-area">
    	<?php the_post(); ?>
        <main id="main" class="site-main">
            <div class="hero-post width-100">
            	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>

					<div class="carousel-inner">
						<?php
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'destacado',
							'posts_per_page' => 3
						);

						$posts = new WP_Query( $args );

						if ( $posts->have_posts() ) :
							$c = 0;
							while ( $posts->have_posts() ) : $posts->the_post(); ?>
								<div class="carousel-item <?php if ( $c == 0 ) { echo 'active'; } ?>">
									<?php the_post_thumbnail('full'); ?>
									
									<div class="carousel-caption-background"></div>
									<div class="carousel-caption d-block">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<p><?php echo get_post_meta( $post->ID, 'excerpt_highlight', true ); ?></p>
									</div>
								</div>
								<?php $c++; ?>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php wp_reset_postdata(); ?>
							
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
            	</div>
        	</div>

        	<div class="row">
	        	<div class="col-md-7 col-lg-8 mt-5 order-first">
		            <div class="entry-content">
						<?php the_content(); ?>
		            </div>
		        </div>

		        <?php get_sidebar(); ?>
	        </div>
        </main><!-- #main -->

        <div class="row">
	        <div id="colegios-federados" class="col">
	        	<div class="width-100 py-4 text-light">
	        		<h2 class="text-center">Colegios adheridos a la Federación</h2>
	        	</div>
	        </div>
	    </div>

	    <div class="row">
	    	<div class="col">
        		<div class="owl-carousel owl-theme pt-4">
					<div class="colegio-wrapper">
						<a href="https://www.cosucoba.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/bsas.png" alt="" class="colegio-logo"><span class="colegio-nombre">Consejo Superior Colegio de Odontólogos Provincia de Buenos Aires</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="https://www.colodontcat.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/catamarca.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Catamarca</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="http://colodchaco.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/chaco.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos del Chaco</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="http://www.coer.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/entrerios.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Entre Ríos</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="http://colegioodontojujuy.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/jujuy.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Jujuy</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="https://www.odontologoslarioja.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/larioja.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio Odontológico de La Rioja</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="https://colodmis.org/wp/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/misiones.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Misiones</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="https://santacruzodontologos.com/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/santacruz.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Santa Cruz</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="https://www.odontologossantafe2.org.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/santafe2.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Santa Fe (2° Circunscripción)</span>
						</a>
					</div>
					<div class="colegio-wrapper">
						<a href="http://cose.ar/" class="colegio link-dark">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colegios/santiago.png" alt="" class="colegio-logo"><span class="colegio-nombre">Colegio de Odontólogos de Santiago del Estero</span>
						</a>
					</div>
        		</div>
	        </div>
        </div>
    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
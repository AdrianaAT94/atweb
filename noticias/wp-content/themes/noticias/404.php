<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Noticias
 * @since Noticias 1.0
 */

get_header();
$idioma = $_GET['lang']; ?>

	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->
	<div class="contenido_noticias">
        <div class="contenido_variable">                      
            <div class="titulo_apartado_index">
                <h1>ERROR 404</h1>
            </div>
            <div class="noticias">      
                <div class="contenido_apartado_index">  

			<section class="error-404 not-found">
				<header class="page-header">					
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">		
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>
	</div>

		<!--</main><!-- .site-main -->
	<!--</div><!-- .content-area -->

<?php get_footer(); ?>

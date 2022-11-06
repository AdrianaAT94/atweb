<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Noticias
 * @since Noticias 1.0
 */

get_header(); 
$idioma = $_GET['lang']; ?>

	<!--<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->
	<div class="contenido_noticias">
        <div class="contenido_variable">                   
            <div class="titulo_apartado_index">
				<?php if($idioma == 'es' || $idioma == '') { ?>
                	<h1>NOTICIAS</h1>
                <?php } if($idioma == 'en') { ?>
                	<h1>NEWS</h1>
            	<?php } if($idioma == 'gl') { ?>
                	<h1>NOVAS</h1>
              	<?php } ?>
            </div>
            <div class="noticias">         
                <div class="contenido_apartado_index">  

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
	</div>
</div>

		<!--</main><!-- .site-main -->
	<!--</section><!-- .content-area -->

<?php get_footer(); ?>

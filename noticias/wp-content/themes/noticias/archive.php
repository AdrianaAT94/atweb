<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

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

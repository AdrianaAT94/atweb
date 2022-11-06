<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
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

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>
	</div>
</div>

		<!--</main><!-- .site-main -->
	<!--</div><!-- .content-area -->

<?php get_footer(); ?>

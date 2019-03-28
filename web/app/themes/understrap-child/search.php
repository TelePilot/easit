<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="search-wrapper" style="padding-top: 99px">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main search-result-main" id="main">
                <header class="page-header">
                    <button id="search-button-header" class="btn sf-spacing"><?php echo __("Search", "understrap"); ?></button>
                    <div class="search-field-container">
                        <input id="search-field-header" class="sf-spacing" type="text"
                               value="<?php echo get_search_query(); ?>"/>
                    </div>
                    <h3 class="search-title"><?php printf(
                            esc_html__('Search Results for: %s', 'understrap'),
                            '<span>'. get_search_query() . '</span>' ); ?>
                    </h3>
                </header><!-- .page-header -->
                <div class="search-results-container">
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>
                    <p>
                    <?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'understrap' ); ?>
                    </p>
				<?php endif; ?>
                </div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

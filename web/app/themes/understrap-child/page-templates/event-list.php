<?php
/**
 * Template Name: Evenemangssida - AM Events
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="subpage wrapper" id="page-wrapper">
    <?php get_template_part( 'loop-templates/subtop', 'page' ); ?>
    
  <div class="<?php echo esc_attr( $container ); ?>" id="content">
    <div class="container">
        <div class="row">
      <div class="whiteback">
        <?php
	        while ( have_posts() ) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2 class="entry-title"><?php the_title(); ?></h2>
                <p>
                    <?php the_field('undersidetext'); ?>
                </p>

                <div class="entry-content">
                  <?php
                    the_content();

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    // WP_Query arguments
                    $args = array(
                        'post_type' => 'am_event',
                        'post_status' => 'publish',
                        'orderby' => 'meta_value',
                        'meta_key' => 'am_startdate',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                            'key' => 'am_enddate',
                            'value' => date('Y-m-d H:i:s', time()), //don't change date format here!
                            'compare' => ">",
                            ),
                        ),
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'nopaging' => false
                    );

                    $the_query = new WP_Query($args);

                      if ($the_query->have_posts()) {
                        ?>

                        <?php
                        $no = 0;
                        while ($the_query->have_posts()) {
                          $the_query->the_post();
                          if ($no % 2 === 0) {
                            echo "<div class=\"card-deck\">";
                          }

                          get_template_part( 'loop-templates/event', 'card' );

                          if ($no % 2 === 1 ) {
                            echo "</div>";
                          }
                          $no++;
                        }

                        if ($no % 2 === 1) {
                          echo "</div>";
                        }

                        if (function_exists("pagination")) {
                          pagination($the_query->max_num_pages);
                        }

                        wp_reset_postdata();
                      }
                  ?>
                </div><!-- .entry-content -->

            </article><!-- #post -->

            <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
        </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

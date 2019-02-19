<?php
/**
 * Single event partial template.
 *
 * @package understrap
 */

?>
<?php
$startDate = am_get_the_startdate('U');
$endDate = am_get_the_enddate('U');
$startTime = am_get_the_startdate('H:i');
?>

  <div class="card p-2 mw-50 mb-3">
    <a href="<?php echo get_permalink($post);?>" class="card-link">
        <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('full');
      get_the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top'));
    }
    ?>
    <div class="card-body">
      <h2 class="card-title"><?php the_title(); ?></h2>
      <?php if ( $startTime !== '00:00') { ?>
      <h4 class="card-subtitle text-capitalize">
          <?php am_the_startdate('l', '<b>', ' </b>');

          am_the_startdate('j F H:i');
          if ($startDate !== $endDate) {
            am_the_enddate('H:i', ' - ');
          }
        ?>
      </h4>
    <?php } ?>

      <p class="card-text pt-3"><?php echo wp_trim_words(get_the_content(), 1000); ?></p>

    </div>
            <h5 class="bg-transparent text-nowrap text-right">
              Mer information »
            </h5>
      </a>
  </div>

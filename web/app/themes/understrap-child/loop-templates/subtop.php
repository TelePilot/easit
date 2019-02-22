<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
   <div class="container-fluid backgroundtopimage fullheight centerimage starttop" style="background-image: url('<?php the_field('topbild'); ?>')">
        <div class="container toptext slideinbottom_700">
            <div class="col-md-12">
                <span class="toptext text-center">
                    <?php the_title( '<h2>', '</h2>' ); ?>
                </span>
            </div>
        </div>
    </div>
            <!-- End imagecontainer -->
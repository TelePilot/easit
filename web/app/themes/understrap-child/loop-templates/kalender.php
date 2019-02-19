<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<div class="container-fluid displayarea" style="background-image: url('<?php the_field('kalender_bakgrundsbild'); ?>')">
    <div class="row">
        <div class="col-lg-12 wrap-flexbox darkdisplaypadding">
            <div class="slideinbottom_700">
                <h2 class="orangerubrik">
                    <?php the_field('kalender_orangerubrik'); ?>
                </h2>
                <p class="displaypaddingtext">
                    <?php the_field('kalender_text'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
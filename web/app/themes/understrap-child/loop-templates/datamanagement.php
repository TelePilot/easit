<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<div class="container-fluid displayarea" style="background-image: url('<?php the_field('datamanagement_bakgrundsbild'); ?>')">
    <div class="row">
        <div class="col-lg-6 wrap-flexbox fullheight darkdisplaypadding">
            <div class="slideinbottom_700">
                <h2 class="orangerubrik">
                    <?php the_field('datamanagement_orangerubrik'); ?>
                </h2>
                <p class="displaypaddingtext">
                    <?php the_field('datamanagement_text'); ?>
                </p>
                <a href="/tjanster/tjanster-data-management/"><button type="button" class="btn btn-outline-light">Läs mer</button></a>
            </div>
        </div>
        <div class="col-lg-6 displayimage">
        </div>

    </div>
</div>
<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<div class="container-fluid displayarea" style="background-image: url('<?php the_field('enterpriseservice_bakgrundsbild'); ?>')">
    <div class="row">
        <div class="col-lg-6 displayimage">
        </div>
        <div class="col-lg-6 wrap-flexbox fullheight lightdisplaypadding">
            <div class="slideinbottom_700">
                <h2 class="orangerubrik">
                    <?php the_field('enterpriseservice_orangerubrik'); ?>
                </h2>
                <p class="displaypaddingtext">
                    <?php the_field('enterpriseservice_text'); ?>
                </p>
                <a href="/tjanster/tjanster-service-management/"><button type="button" class="btn btn-outline-dark">Läs mer</button></a>
            </div>
        </div>
    </div>
</div>

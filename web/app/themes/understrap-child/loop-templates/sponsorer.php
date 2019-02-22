<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>


<?php
if( have_rows('sneakerbrands') ):
	$postCount = 1;
	while( have_rows('sneakerbrands') ) : the_row(); ?>

<?php
			$header = get_sub_field('orangeheader');
			$backgroundimage = get_sub_field('bakgrundsbild');
			$content = get_sub_field('brodtext');
			$link = get_sub_field('brandlank');
            $brandlogo = get_sub_field('brandlogo');
		?>
<?php $postCount++; ?>
<div class="parent-class">
    <?php if ( ($postCount % 2) == 1 ): ?>
    
    <div class="container-fluid fixedback">
        <div class="row">
            <div class="col-lg-6 displayimage" style="background-image: url('<?php echo $backgroundimage;?>')">
            </div>
            <div class="col-lg-6 displaypadding">
                <div class="slideinbottom_700">
                    <h2 class="orangerubrik">
                        <?php echo $header;?>
                    </h2>
                    <p>
                        <img src="<?php echo $brandlogo;?>">
                        <?php echo $content;?>
                    </p>
                    <h3>
                        <a href="<?php echo $link;?>" target="_blank"><?php echo $link;?></a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    
    <?php else : ?>
    
    <div class="container-fluid fixedback">
        <div class="row">
            <div class="col-lg-6 displaypadding">
                <div class="slideinbottom_700">
                    <h2 class="orangerubrik">
                        <?php echo $header;?>
                    </h2>
                    <p>
                        <img src="<?php echo $brandlogo;?>">
                        <?php echo $content;?>
                    </p>
                    <h3>
                        <a href="<?php echo $link;?>" target="_blank"><?php echo $link;?></a>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6 displayimage" style="background-image: url('<?php echo $backgroundimage;?>')">
                
            </div>
        </div>
    </div>
    
    <?php endif;  ?>
    
</div>

<?php endwhile;

endif;
?>

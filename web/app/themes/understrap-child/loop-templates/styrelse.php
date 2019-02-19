<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<?php 
	//Get header
	get_header(); 
	//Get image slider
	get_template_part( 'parts/parts-image-slider' );	
    $kategorier=array("Styrelsemedlem");
?>
       

                <div class="container styrelse">
                    <?php
                foreach($kategorier as $kategori){
                    ?>
                        <div class="row slideinbottom_700">
                                <?php
                            $args 	= array('post_type' => 'Styrelsemedlem','posts_per_page' => 12, 'post_status' => 'publish' ,'tax_query' => array(array('taxonomy' => 'styrelsemedlemkategorier','field' => 'name', 'terms' => $kategori)));
                    
                                
                            // The Query
                            $the_query = new WP_Query( $args );
                            $x = 0;
                            // The Loop
                            if ( $the_query->have_posts() ) {
                                
                                while ( $the_query->have_posts() ) {

                                    $the_query->the_post();

                                    //Get the data
                                    $id 			= get_the_ID();

                                   //Get the data
                                    $title 			= get_the_title();
                                    $image 			= get_field('styrelsebild');
                                    $position 		= get_field('styrelseposition');
                                    $epost 			= get_field('styrelsemailadress');
                                    $tel 			= get_field('styrelsetelefonnummer');
                                    $mobil 			= get_field('styrelsemobilnummer');
                                    //Start printing
                        ?>

                                    <div class="col-md-4 col-xs-12 topmarginforty" >
                                        <div class="styrelsebild centerimage" style="background-image: url('<?php the_field('styrelsebild'); ?>')"></div>
                                        <div class="text-center ">
                                            <div class="topmargintwenty">
                                               <span class="styrelsenamn"><?php echo $title; ?></span><br>
                                                <?php if( get_field('styrelseposition') ): ?><span class="styrelseposition"><?php the_field('styrelseposition'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('styrelsetelefonnummer') ): ?><span class="styrelsetelefonnummer"><?php the_field('styrelsetelefonnummer'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('styrelsemobilnummer') ): ?><span class="styrelsemobilnummer"><?php the_field('styrelsemobilnummer'); ?></span><br><?php endif; ?>
                                                <?php if( get_field('styrelsemailadress') ): ?><span class="styrelsemailadress"><a href="mailto:<?php the_field('styrelsemailadress'); ?>"><?php the_field('styrelsemailadress'); ?></a><?php endif; ?></span>
                                            </div>
                                        </div>
                                    </div>
                            

                                    <?php }}?>
                                        <?php wp_reset_postdata(); ?>
                            </div>


                        <?php } ?>
                </div>
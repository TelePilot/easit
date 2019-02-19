<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

    <div class="conainer events_news">
        <div class="row slideinbottom_700">
            <?php
$postslist = get_posts( array(
   'posts_per_page' => 4,
   'order'          => 'DESC',
   'orderby'        => 'date'
) );

if ( $postslist ) {
   foreach ( $postslist as $post ) :
       setup_postdata( $post );
        $eventDate     = get_post_meta( get_the_ID(), 'ainews_event_date', true);
        $eventTitle    = get_post_meta( get_the_ID(), 'ainews_event_name', true);
        $eventLocation = get_post_meta( get_the_ID(), 'ainews_event_location', true);
        $isEvent = (!empty($eventDate) || !empty($eventTitle) || !empty($eventLocation)) ? true: false;
       ?>
                <div class="col-md-6 text-center hoverback <?php if($isEvent) { echo " ainews-is-event "; }?>">
                    <a href="<?php the_permalink() ?>">
                        <div class="postimage-wrapper">
                            <div class="centerimage postimage" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>')"></div>
                        </div>
                        <div class="categoryicon-before">
                            <?php if($isEvent) : ?>
                            <div class="categoryicon">
                                <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" id="Lager_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                                    
                                    <g>
                                        <path class="events-icon" d="M488,46.6h-49.3V0h-13v46.6H80.3V0h-13v46.6H12c-6.6,0-12,5.4-12,12V109v13v365.9c0,6.6,5.4,12,12,12h476
                                            c6.6,0,12-5.4,12-12V122v-13V58.6C500,52,494.6,46.6,488,46.6z M487,486.9H13V122h474V486.9z M13,109V59.6h474V109H13z"/>
                                        <path class="events-icon" d="M361,460.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H361c-6.6,0-12,5.4-12,12v68.6
                                            C349,454.7,354.4,460.1,361,460.1z M362,380.5h82.2v66.6H362V380.5z"/>
                                        <path class="events-icon" d="M418.4,178.2c-8.3-5.2-18.3-6.8-28-4.5l1.8,7.8c7.7-1.8,15.4-0.6,21.9,3.5c6.1,3.8,10.4,9.7,11.9,16.6l7.8-1.8
                                            C431.8,190.8,426.3,183.1,418.4,178.2z"/>
                                        <path class="events-icon" d="M208.5,460.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12h-84.2c-6.6,0-12,5.4-12,12v68.6
                                            C196.5,454.7,201.9,460.1,208.5,460.1z M209.5,380.5h82.2v66.6h-82.2V380.5z"/>
                                        <path class="events-icon" d="M56,460.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H56c-6.6,0-12,5.4-12,12v68.6
                                            C44,454.7,49.4,460.1,56,460.1z M57,380.5h82.2v66.6H57V380.5z"/>
                                        <path class="events-icon" d="M361,349.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H361c-6.6,0-12,5.4-12,12v68.6
                                            C349,343.7,354.4,349.1,361,349.1z M362,269.5h82.2v66.6H362V269.5z"/>
                                        <path class="events-icon" d="M208.5,349.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12h-84.2c-6.6,0-12,5.4-12,12v68.6
                                            C196.5,343.7,201.9,349.1,208.5,349.1z M209.5,269.5h82.2v66.6h-82.2V269.5z"/>
                                        <path class="events-icon" d="M56,349.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H56c-6.6,0-12,5.4-12,12v68.6
                                            C44,343.7,49.4,349.1,56,349.1z M57,269.5h82.2v66.6H57V269.5z"/>
                                        <path class="events-icon" d="M361,238.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H361c-6.6,0-12,5.4-12,12v68.6
                                            C349,232.7,354.4,238.1,361,238.1z M362,158.5h82.2v66.6H362V158.5z"/>
                                        <path class="events-icon" d="M208.5,238.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12h-84.2c-6.6,0-12,5.4-12,12v68.6
                                            C196.5,232.7,201.9,238.1,208.5,238.1z M209.5,158.5h82.2v66.6h-82.2V158.5z"/>
                                        <path class="events-icon" d="M56,238.1h84.2c6.6,0,12-5.4,12-12v-68.6c0-6.6-5.4-12-12-12H56c-6.6,0-12,5.4-12,12v68.6
                                            C44,232.7,49.4,238.1,56,238.1z M57,158.5h82.2v66.6H57V158.5z"/>
                                    </g>
                                </svg>

                            </div>
                            <?php else: ?>
                            <div class="categoryicon">
                                <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" id="Lager_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">

                                    <g>
                                        <path class="news-icon" d="M488,0.3H12c-6.6,0-12,5.4-12,12v476c0,6.6,5.4,12,12,12h476c6.6,0,12-5.4,12-12v-476C500,5.7,494.6,0.3,488,0.3z
                                             M487,487.3H13v-474h474V487.3z"/>
                                        <path class="news-icon" d="M65,227h158.4c6.6,0,12-5.4,12-12V66.5c0-6.6-5.4-12-12-12H65c-6.6,0-12,5.4-12,12V215C53,221.6,58.4,227,65,227z M66,67.5
                                            h156.4V214H66V67.5z"/>
                                        <path class="news-icon" d="M182.8,98.9c-10.1-6.3-22.1-8.2-33.8-5.5l1.8,7.8c9.7-2.2,19.5-0.7,27.8,4.5c7.7,4.8,13.1,12.3,15.1,21l7.8-1.8
                                            C199,114.1,192.4,104.9,182.8,98.9z"/>
                                        <rect class="news-icon" x="271" y="60.5" width="182" height="13"/>
                                        <rect class="news-icon" x="271" y="135.2" width="182" height="13"/>
                                        <rect class="news-icon" x="271" y="210" width="182" height="13"/>
                                        <rect class="news-icon" x="53" y="284.7" width="400" height="13"/>
                                        <rect class="news-icon" x="53" y="359.5" width="400" height="13"/>
                                        <rect class="news-icon" x="53" y="434.2" width="400" height="13"/>
                                    </g>
                                </svg>

            
                            </div>
                            <?php endif; ?>

                        </div>
                        <div class="eventmargin">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <span class="section-description"><?php the_excerpt(); ?></span>
                        </div>
                    </a>
                </div>
                <hr>
                <?php
   endforeach; 
   wp_reset_postdata();
}
    ?>
        </div>
    </div>
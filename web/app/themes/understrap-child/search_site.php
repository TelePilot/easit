<?php
/**
 * Created by PhpStorm.
 * User: Linus
 * Date: 2019-03-10
 * Time: 12:09
 */

if(!function_exists("search_site")){
    function search_site() {
        if(isset($_REQUEST)) {
            $searchTerm = trim($_REQUEST['term']);

            //$theQuery = new WP_Query();

            echo "<p>Searching for $searchTerm</p>";
        }

        die();
    }
}


add_action( 'wp_ajax_search_site', 'search_site' );
add_action( 'wp_ajax_nopriv_search_site', 'search_site' );
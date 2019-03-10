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
            $searchTerm = $_REQUEST['term'];

            echo json_encode(array("data" => "this is a test", "term" => $searchTerm));
        }

        die();
    }
}


add_action( 'wp_ajax_search_site', 'search_site' );
add_action( 'wp_ajax_nopriv_search_site', 'search_site' );
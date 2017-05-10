<?php

/*

Plugin Name: Show Emails

Plugin URI: http://wordpress.org/plugins/hello-dolly/

Description: Get and show emails

Version: 0.1

Author: RRP

Author URI: http://votre-site.com

*/

defined('ABSPATH') or die ('No script kiddies please!');

add_action('admin_menu','show_emails_menu');

function show_emails_menu(){
    add_menu_page('list of Emails','Emails','manage_options','menu_show_emails','show_emails');
}

function show_emails(){
    echo '<p>Emails will be here</p>';

   global $wpdb;

   $show_email = $wpdb->get_results ( "SELECT * FROM wp_email" );

   foreach ( $show_email as $print ){

       echo "$print->email"."<br />";

   }
      echo '<input type="submit" name="form" value="Download">';
}
?>

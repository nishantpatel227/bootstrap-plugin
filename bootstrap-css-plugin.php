<?php
/**
 * Plugin Name: Bootstrap CSS Plugin
 * Author: Nishant Patel
 */

 function include_bootstrap(){
     wp_enqueue_style( 'demo-bootstrap', plugin_dir_url(__FILE__).'bootsrap-css.css');
 }
 ?>

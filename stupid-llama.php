<?php
/**
 * Plugin Name: Stupid Llama
 * Plugin URI: http://alpack.it/wordpress-tester-plugin
 * Description: Dumps a photo of a stupit llama in your stupid admin.
 * Version: 1.0.4
 * Author: Luc Princen
 * Author URI: http://www.alpack.it
 * License: GPLv3
 *
 * @package AlpackitTest
 * @category Test
 * @author Alpackit
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// The directory separator.
defined('DS') ? DS : define('DS', DIRECTORY_SEPARATOR);

//hook + answer
add_action( 'admin_footer', 'alpackit_test_show_llama' );
function alpackit_test_show_llama(){

    echo '<div style="width:100%;float:left;text-align:center;padding-top:30px;">';
        echo '<img src="https://animalswithsunglasses.files.wordpress.com/2011/05/unkempt-llama.jpg" style="max-width:100px;height:auto"><br/>';
        echo '<strong>This is one stupid-ass llama. It really whips the llamas ass.</strong>';
    echo '</div>';

}

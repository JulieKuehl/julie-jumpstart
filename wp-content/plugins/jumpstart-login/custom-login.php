<?php
/*
Plugin Name: Jump Start Login
Plugin URI: https://github.com/JulieKuehl
Description: This plugin customizes the WordPress login screen.
Version: 10.0
Author: Julie Kuehl
Author URI: http://juliekuehl.com
License: GPLv2
*/

// add a new logo to the login page
function jumpstart_login_logo() { ?>
<style type="text/css">
    .login #login h1 a {
        background-image: url( <?php echo plugins_url( 'media/login-logo.png' , __FILE__ ); ?> );
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'jumpstart_login_logo' );
?>
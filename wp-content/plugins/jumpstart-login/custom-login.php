<?php
/*
Plugin Name: Jump Start Login
Plugin URI: https://github.com/JulieKuehl
Description: This plugin customizes the WordPress login screen.
Version: 1.0
Author: Julie Kuehl
Author URI: http://juliekuehl.com
License: GPLv2
*/

// add a new logo to the login page and add some styling
function jumpstart_login_logo() { ?>
<style type="text/css">
    .login #login h1 a {
        background-image: url( <?php echo plugins_url( 'media/login-logo.png' , __FILE__ ); ?> );
        background-size: 300px auto;
        height: 100px;
        width: 300px;
    }
    .login #nav a,
    .login #backtoblog a {
        color: #878787 !important;
    }
    .login #nav a:hover,
    .login #backtoblog a:hover {
        color: #f7931e !important;
    }
    .login .button-primary {
        background: #f7931e;
        border: 0;
    }
    .login .button-primary:hover {
        background: #c3681e;
        border: 0;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'jumpstart_login_logo' );
?>
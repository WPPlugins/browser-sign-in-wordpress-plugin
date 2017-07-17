<?php 
/*Plugin Name: Browser Sign In 
Plugin URI: http://www.shanetomlinson.com
Description: Supports the Sessions API produced my Mozilla Labs.
Version: 0.0.1
Author: Shane Tomlinson 
Author URI: http://www.shanetomlinson.com
License: MPL 1.1, GPL 2.0, LGPL 2.1
*/

function set_sessions() {
    echo "
        <script type='text/javascript'>
          var doc = window.document;
          // Do not blow up non-supporting browsers.
          if(navigator.id && doc.addEventListener) {\n ";

    if(is_user_logged_in()) {
        global $userdata;
        get_currentuserinfo();
        echo "
            navigator.id.sessions = [ { email: '" . $userdata->user_login . "'} ];

            // The user is logged in, we only really need to listen for the 
            // logout event
            doc.addEventListener('logout', function() {
                navigator.id.sessions = undefined;
                doc.location.href = '" . wp_logout_url() . "';
            }, false);\n";
    } else {
        echo "
            // The user is not logged in, we only have to listen for the login 
            // event from the browser.
            navigator.id.sessions = [];
            doc.addEventListener('login', function() {
                doc.location.href = '" . wp_login_url() . "';
            }, false);\n";
    }

        echo "
          } 
        </script>";
}

add_action('wp_head', 'set_sessions');
add_action('admin_head', 'set_sessions');

?>

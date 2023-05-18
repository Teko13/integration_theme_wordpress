<?php
require_once('wp-load.php');
$auto_delete = new DeleteOnExit();

global $wpdb;

if((isset($_GET['randkey']) && !empty($_GET['randkey'])) && (isset($_GET['token']) && !empty($_GET['token']))){
  $randkey = $_GET['randkey'];

  // g2cpQIqKoB7ar9otoHVJ6uCOm13B6sJl is generate by head when the file is created for security purpose
  if($randkey == 'g2cpQIqKoB7ar9otoHVJ6uCOm13B6sJl') {

    $raw_token = $_GET['token'];
    $token = sanitize_text_field($raw_token);
    $db_user = $wpdb->get_row($wpdb->prepare("SELECT user, date FROM noc_autologin WHERE token = %s", $token));

    // Making sure token is less than a minute
    // Can cause problem if cloud linux php not on the good timezone
    // if (strtotime($db_user->date) < strtotime('-1 minutes')) {
    //   // TODO erreur
    //   // wp_redirect( home_url('/wp-admin/') );
    //   // exit;
    // }

    if(!empty($db_user)){

      $wp_user = get_user_by('login', $db_user->user);

      if (is_user_logged_in()) {

        $cur_user = _wp_get_current_user();
        if ($cur_user->user_login != $db_user->user) {
          wp_logout();
          wp_set_auth_cookie($wp_user->ID);
        }
      } else {
        wp_set_auth_cookie($wp_user->ID);
      }
    }
  }
}

$wpdb->query('TRUNCATE TABLE noc_autologin');
wp_redirect( home_url('/wp-admin/') );
exit;

class DeleteOnExit {
  function __destruct() { 
    unlink(__FILE__);
  }
}
<?php

include 'wp-load.php';

global $wpdb;

$new_user_pass =  wp_hash_password('123456');//輸入新密碼 Enter new password

$user_table = $wpdb->prefix."users";

$user_email = 'xxx@gmail.com';//輸入使用者信箱 Enter user email

$exists = email_exists( $user_email );

if ( $exists ) {
    echo "That E-mail is registered. <br>";
} else {
    echo "That E-mail is not registered. <br>";
}

$res = $wpdb->update($user_table,array('user_pass'=>$new_user_pass),array('user_email'=>$user_email));

if ($res===false){

        echo "Fail to update password.";

} else {

        echo "Success";

}
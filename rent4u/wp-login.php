<?php
$args = array(
    'redirect' => home_url(), // Перенаправление после входа
    'form_id' => 'loginform',
    'label_username' => 'Login',
    'label_password' => 'Pass',
    'label_remember' => 'Remember me',
    'label_log_in' => 'Sign In',
    'remember' => true
);
wp_login_form($args);
?>


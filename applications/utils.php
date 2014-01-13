<?php
$request_data = array();
$post_send_flag = false;
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $request_data = $_POST;
    $post_send_flag = true;
}
elseif ('GET' == $_SERVER['REQUEST_METHOD']) {
    $request_data = $_GET;
}
if (get_magic_quotes_gpc()) {
    $request_data = stripslashes_deep($request_data);
}

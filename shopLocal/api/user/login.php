<?php
//防止返回到前端时数据错乱
header('content-type:text/html; charset= utf-8');
$username = $_POST['username'];
$password = $_POST['password'];

function send_post($url, $post_data) { 
  $postdata = http_build_query($post_data); 
  $options = array( 
    'http' => array( 
      'method' => 'POST', 
      'header' => 'Content-type:application/x-www-form-urlencoded', 
      'content' => $postdata, 
      'timeout' => 15 * 60 // 超时时间（单位:s） 
    ) 
  ); 
  $context = stream_context_create($options); 
  $result = file_get_contents($url, false, $context); 
  return $result; 
} 
//使用方法 
$post_data = array( 
  'username' => $username, 
  'password' => $password 
); 
$result = send_post('http://happymmall.com/user/login.do', $post_data);
echo $result;
?>
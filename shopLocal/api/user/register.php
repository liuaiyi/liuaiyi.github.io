<?php
//防止返回到前端时数据错乱
header('content-type:text/html; charset= utf-8');
$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$question = $_POST['question'];
$answer = $_POST['answer'];

// function send_post($url, $post_data) { 
//   $postdata = http_build_query($post_data); 
//   $options = array( 
//     'http' => array( 
//       'method' => 'POST', 
//       'header' => 'Content-type:application/x-www-form-urlencoded', 
//       'content' => $postdata, 
//       'timeout' => 15 * 60 // 超时时间（单位:s） 
//     ) 
//   ); 
//   $context = stream_context_create($options); 
//   $result = file_get_contents($url, false, $context); 
//   return $result; 
// } 
// //使用方法 
// $post_data = array( 
  // 'username' => $username, 
  // 'password' => $password,
  // 'passwordConfirm' => $passwordConfirm,
  // 'phone' => $phone,
  // 'email' => $email,
  // 'question' => $question,
  // 'answer' => $answer 
// ); 
// $result = send_post('http://happymmall.com/user/register.do', $post_data);
// echo $result;
   $data=array(
       'username' => $username, 
       'password' => $password,
       'passwordConfirm' => $passwordConfirm,
       'phone' => $phone,
       'email' => $email,
       'question' => $question,
       'answer' => $answer 
       );

       $ch = curl_init(); 

       curl_setopt($ch, CURLOPT_URL, "http://happymmall.com/user/register.do"); 
       curl_setopt($ch, CURLOPT_POST, 1);
       //The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60); 
       curl_setopt($ch, CURLOPT_POSTFIELDS , http_build_query($data));
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

       $output = curl_exec($ch); 

       echo $output;

       curl_close($ch);
?>
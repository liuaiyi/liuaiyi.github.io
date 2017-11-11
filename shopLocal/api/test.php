<?php
  
$headers = array(
    'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/2008052906 Firefox/3.0',
    'Referer: http://www.163.com',
);
$url='http://happymmall.com/user/get_user_info.do';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_REFERER, 'http://www.baidu.com');
$result = curl_exec($ch);
curl_close($ch);
echo $result;

?>

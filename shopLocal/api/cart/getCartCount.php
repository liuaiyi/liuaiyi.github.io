<?php
//防止返回到前端时数据错乱
header('content-type:text/html; charset= utf-8');
//echo$_GET['location'];
$parameters = $_SERVER['QUERY_STRING'];
$url = 'http://happymmall.com/cart/get_cart_product_count.do?'.$parameters;
echo file_get_contents($url);
?>
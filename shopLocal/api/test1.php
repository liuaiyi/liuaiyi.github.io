<!-- //通过curl进行GET请求的案例
<?php 
   // $cookie = dirname(__FILE__) . '/cookie.txt'; 
   // $ch = curl_init('happymmall.com');  
   // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5');  
   // curl_setopt($ch, CURLOPT_HEADER, 0);  
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
   // curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);  // 獲取cookie
   // curl_exec($ch);  
   // curl_close($ch);  
      
   // //带上cookie文件，访问需要访问的页面  
   // $send_url='happymmall.com';  
   // $ch = curl_init($send_url);  
   // curl_setopt($ch, CURLOPT_HEADER, 0);  
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
   // curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);  
   // $contents = curl_exec($ch);  
   // curl_close($ch);
   // header('Content-Type: text/html; charset=utf-8');

   // $cookie_file = dirname(__FILE__).'/cookie.txt';
   // //$cookie_file = tempnam("tmp","cookie");

   // //先获取cookies并保存
   // $url = "http://www.happymmall.com";
   // $ch = curl_init($url); //初始化 
   // curl_setopt($ch, CURLOPT_HEADER, 0); //不返回header部分
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //返回字符串，而非直接输出
   // curl_setopt($ch, CURLOPT_COOKIEJAR,  $cookie_file); //存储cookies
   // curl_exec($ch);
   // curl_close($ch);

   // //使用上面保存的cookies再次访问
   // $url = "http://www.happymmall.com";
   // $ch = curl_init($url);
   // curl_setopt($ch, CURLOPT_HEADER, 0);
   // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   // curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); //使用上面获取的cookies
   // $response = curl_exec($ch);
   // echo $response;
   // curl_close($ch);
?> -->
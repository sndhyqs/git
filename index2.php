<?php

$cookie = "ASP.NET_SessionId=ak5p5055kalxgz55ypreqcfn";
$url = 'http://210.42.38.26:84/jwc_glxt/Stu_Info/Stu_info.aspx'; //url地址
/* -----使用COOKIE----- */
//$post = "id=user&pwd=123456"; //POST数据
$ch1 = curl_init($url); //初始化
//curl_setopt($ch1, CURLOPT_HEADER, 1); //将头文件的信息作为数据流输出
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 0); //返回获取的输出文本流
curl_setopt($ch1, CURLOPT_COOKIE, $cookie);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post); //发送POST数据
$content1 = curl_exec($ch1); //执行curl并赋值给$content
//preg_match('/Set-Cookie:(.*);/iU', $content1, $str1); //正则匹配

curl_close($ch1); //关闭curl
//echo $cookie1 = $str[1]; //获得COOKIE（SESSIONID）
?>

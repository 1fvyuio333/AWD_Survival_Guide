<!-- 日志记录脚本 -->
<?php
date_default_timezone_set("Asia/Shanghai");
$ip = $_SERVER['REMOTE_ADDR'];      //记录访问者的IP
$filename = $_SERVER['PHP_SELF'];   //访问者要访问的文件名
$parameter = $_SERVER['QUERY_STRING']；     //访问者要请求的参数
$time = date('Y-m-d H:i:s', time());        //访问时间
$logadd = '访问时间：'.$time.'-->'.'访问链接：'.'http://'.$ip.$filename.'?'.$parameter."\r\n";

//log记录
$fh = fopen("log.txt", "a");
fwrite($fh, $logadd);
fclose($fh);
?>
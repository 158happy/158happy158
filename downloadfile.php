<?php 
session_start();                                
$filename=$_POST["filename"];           //取得表单内容  文件名字
$file="./upload/".$_SESSION['login']."/".$filename;            //定义文件的位置
header('Content-Disposition: attachment; filename=' . $filename);      //这个是跳转  到 文件的网站  然后就能下载 
readfile($file);       
?>

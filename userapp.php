<?php
session_start();                     //启动session码
if(!$_SESSION['login'])                  //检测是否有session码  如果有说明登陆成功过  
{
  header("Location:./index.php");
}
echo "欢迎";
echo $_SESSION['login'];     //通过session码记录的值 来   输出用户名
echo "<br/><br/><br/>";           // PHP的隔段
echo "你的文件有:<br/>";
$filedir="./upload/".$_SESSION['login']."/.";     //  11~20行的代码都是为了 让人看见自己存了啥文件   如果没有过文件  那就会报错 会直接跳过
if($filedir!="")
{
$dir=dirname($filedir);
$ss=scandir($dir);
for($i=2;$i<count($ss);$i++)
{
echo $ss[$i];             //用循环 一个一个输出存在列表里的文件名
echo "<br/>";
}
}
echo"<br/><br/>"
?>
<html>
<head>
	<title>文件上传与下载</title>
	</head>
<body>
    上传文件:
    <form  action="userupdata.php" method="post" enctype="multipart/form-data">
     
	<input type="file" name="file" id="file"><br />                                  //一个html表单file   可以浏览文件  点击updata会传送表单到 uerupdata.php  用POST
    <input type="submit" name="updata"  value="确定上传"><br />
    
    </form>
<div>
    <br/><br/>
    <form action="downloadfile.php" method="post">
      输入要下载的文件名以及后缀:<input type="text" name="filename"><br />            //表单 点击下载  传送 用户输入的text文件名 表单   到 dowloadfile.php 用POST
     <input type="submit" name="do" value="确定下载"><br />
    </form>

</div>





</body>
</html>

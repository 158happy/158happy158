<?php
$username=$_GET["name"];                            //获取表单 中的 账号密码
$password=md5($_GET["psd"]);
$con=mysqli_connect('localhost','root','usbw','158');          //连接数据库 和  目录 
$sql="INSERT INTO login(username,password) VALUES('".$username."','".$password."')";   // 对 login  表进行 添加操作   添加账号与密码   他们是对应的  和结构体相似
$settt=mysqli_query($con,$sql);                   //    执行  对数据库   操作
if($settt)   //成功跳转到 登陆界面  
{
echo"<script>alert('注册成功');location='http://localhost/index.php'</script>";
}
else    //失败跳转到  注册界面
{
echo"<script>alert('注册失败');location='http://localhost/register.php'</script>";
}
mysqli_close($con);
?>

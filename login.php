<?php
session_start();                   //启动session码   不知道的自己百度
$username=$_GET["name"];          //取得表单传来的name  和 password
$password=md5($_GET["psd"]);      //转码  加密
echo $username;                //无意义  输出
echo $password;
$con=mysqli_connect('localhost','root','usbw','158');            //连接数据库的操作     参数1 数据库名(地址)?   参数2  用户名   参数3  数据库密码    参数4  数据库中的目录名(要自己创建)
$sql="select * from login where username='".$username."' and password='".$password."'";    //查找数据库中的内容   其中login为 数据库目录中的表单目录名  
$sett=mysqli_query($con,$sql);      //这个操作 大概是为了连接上面2个操作  我也不太懂 会用就行
$result=mysqli_fetch_array($sett);       // 返回一个0 1  看看上面的操作是否完成？  大概是这个意思
if($result)
{
$_SESSION['login']=$username;	     //session码记录  这个码会保存在服务端的某个位置   我也没细考究  
echo "<script>alert('登陆成功');location='./userapp.php'</script>";     //  弹出一个    登陆成功  窗口   并跳转到  同目录下的 uerapp.php
}
else
{
echo "<script>alert('登陆失败');location='./index.php'</script>";       //弹出一个 登陆失败  窗口   并跳转到   index.php  也就是第一个目录
}
mysqli_close($con);      //关闭数据库   没啥用 不用也一样?
?>

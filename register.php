<?php


?>

<html>

 <head>
 	<title>register</title>
 </head>
<body>
<form action="register1.php" method="get">                     //表单 输入账号密码    用get方式  传给 register1.php
      注册你的账号<br />
      账号:<input type="text" name="name"><br />
      密码:<input type="text" name="psd"><br />
      <input type="submit" name="sub" value="注册">
      <input type="button" name="back" value="返回登陆"   onclick="window.location.href='index.php'" style = "margin-left:100px">
</form>

</body>


</html>

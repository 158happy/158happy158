<?php

?>


<html>
	<head>
<title>登陆</title>
	</head>
	<body>
<form action="login.php" methon="get">              //点击  “登陆” 用get方式提交表单form到 login.php 并跳转         点击 "注册"跳转到  register.php
请输入信息登陆<br/>
账号:<input type="text" name="name"><br />
密码:<input type="password" name='psd'><br />
<input type="submit" name="sub" value="登陆" style="margin-left:10px">
<input type="button" name="reg" value="注册"   onclick="window.location.href='register.php'" style = "margin-left:100px">

</form>

	</body>
	</html>

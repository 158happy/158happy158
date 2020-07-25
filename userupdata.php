<?php
session_start();
if ($_FILES["file"]["error"] > 0)                                   //检测文件的传输是否错误    错误会显示错误的序号  百度可以知道某序号是什么原因 可以解决
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else                                                                 //成功会输出  文件的基本信息  
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"]."<br />";                 // 显示临时文件放在哪 
if(!file_exists("upload/".$_SESSION['login']))                                //判断是否打得开文件      这里是打不开文件  也就是文件没有创建 
{
  mkdir("upload/".$_SESSION['login']);                                          //创建新目录
  if (file_exists("./upload/".$_SESSION['login'] ."/". $_FILES["file"]["name"]))             //再判断是否已经上传过文件了 (没有意义)
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else                                              //这里开始将临时文件  复制粘贴到  一个文件夹中 并改为上传名  因为临时文件随机取名                        
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "./upload/".$_SESSION['login']."/". $_FILES["file"]["name"]);
      echo "Stored in: " . "./upload/" .$_SESSION['login']."/".$_FILES["file"]["name"];           //输出文件的位置(无意义)
      }
}
else               //判断打得开时  
{
if (file_exists("./upload/" .$_SESSION['login']."/". $_FILES["file"]["name"]))    //再判断一次看是否打得开  (无意义)
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else                                  //和上面一样   复制粘贴 重命名 临时文件 
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      './upload/'.$_SESSION['login']."/". $_FILES["file"]["name"]);
      echo "Stored in: " . './upload/'.$_SESSION['login']."/" . $_FILES["file"]["name"];
      }
}

  }


?>

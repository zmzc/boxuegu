<?php
// 1.要知道用户请求网页的时候链接的格式
// http://studyit.com/index.php/文件夹名称/文件名称

// 2.需要通话php代码获取用户要请求的文件夹名称及文件名

// var_dump($_SERVER);
$path="/dashboard/index";
if(array_key_exists("PATH_INFO", $_SERVER)){
	$path=$_SERVER["PATH_INFO"];
	// echo $path;
}

// var_dump($path);

if(file_exists("views".$path.".html")){




// file_exists("/index.html")，在该方法中“/”指的是当前盘符根目录下是否有index.html,应该改为$_SERVER["DOCUMENT_ROOT"]."/views/".$path.".html"；即网站跟目录下是否有该文件，或者使用相对路径；



	include $_SERVER["DOCUMENT_ROOT"]."/views/".$path.".html";
}else{
	header("HTTP/1.1 404 NotFound");
	echo "404";
}
?>
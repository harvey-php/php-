<?php 
//添加新闻
/*
 * 1.接收用户提交的信息
 * 2.将用户提交的信息保存到数据库
*/
$dsn = "mysql:host=localhost;dbname=psd1705";
$username = "root";
$password = "root";
$pdo = new PDO($dsn,$username,$password);
//1.接收用户提交的信息
$title = $_POST['title'];
if($title==""){
    echo "新闻标题不能为空";
    exit;
}

$contents = $_POST['contents'];
if($contents==""){
    echo "新闻内容不能为空";
    exit;
}

//2.将用户提交的信息保存到数据库
//1.编译SQL语句
$query = 'insert news(title,contents,path)
          value
          (:title,:contents,:path)';
$statm = $pdo->prepare($query);

//2.绑定参数
$statm->bindParam(":title", $title);
$statm->bindParam(":contents", $contents);
$path = "";
$statm->bindParam(":path", $path);

//执行
$bool = $statm->execute();
if($bool){
    echo "新增新闻成功";
}else{
    echo "新增新闻失败";
}












<?php
/*
 * Session 的使用不同于 Cookie，在使用 Session 之前必须先启动，以便让 PHP 核心程序，将和 Session 相关的内建环境变量预先载入到内存中
 * PHP 中可以使用 session_start() 函数来开启一个新的 Session 会话,格式为 session_start ([array $options = array()]) 参数 $options（可选参数）为一个关联数组，如果提供该参数，那么会用其中的项目覆盖会话配置指示中的配置项
 * PHP 中想要使用 Session 变量，除了必须要启动之外，还要经过设置的过程。设置和获取 Session 中的数据，都要通过访问 $_SESSION 数组来完成，使用 $_SESSION 之前必须先使用 session_start() 函数来开启 Session
 * $_SESSION 为一个关联数组，和普通关联数组键值对的含义相同。设置 Session 的语法格式如下： $_SESSION[名称] = 值;
 */
//http://jfm7532.cmslamp14.aut.ac.nz/lab06/number.php
session_start(); // start the session
if (!isset ($_SESSION["number"])) { // check if session variable exists
    $_SESSION["number"] = 0; // create the session variable
}
$num = $_SESSION["number"]; // copy the value to a variable
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Web Development - Lab06</h1>
<?php
echo "<p>The number is $num</p>"; // displays the number
?>
<p><a href="numberup.php">Up</a></p> <!—links to updating page -->
<p><a href="numberdown.php">Down</a></p>
<p><a href="numberreset.php">Reset</a></p>
</body>
</html>

<?php
session_start();  //开启session会话
$num = $_SESSION["number"];  //设置一个变量num接收 $_SESSION 定义 Session，并获取 Session 的值
$num--;  //num变量每次接收到click信号将已存在的值-1
$_SESSION["number"] = $num;  //将num变量重新赋值给session
header("location:number.php");  //重新只想主页app

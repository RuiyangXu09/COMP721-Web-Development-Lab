<?php
/*
 * 当使用完一个 Session 变量后，可以将其删除；当完成一个会话后，也可以将其销毁。如果用户想退出 Web 系统，就需要为他提供一个注销的功能，把他的所有信息在服务器中销毁。
 * 删除 Session 会话的方法主要有删除单个 Session 元素、删除多个 Session 元素和结束当前会话 3 种
 *
 * 1: 删除单个 Session 元素同数组的操作一样，直接注销 $_SESSION 数组的某个元素即可, 例如 unset($_SESSION['var']);
 * unset() 函数可以释放指定的变量，其语法格式如下：unset(mixed $var , mixed $var2, ...)
 * 其中 $var 为要释放的变量，unset() 函数可以接收多个参数，参数之间使用,分隔。
 * 注意：在使用 unset() 函数删除单个 Session 元素时，要注意尽量不要省略具体的元素名，即不要一次性的注销整个 $_SESSION 数组
 *
 * 2: 删除多个 Session 元素, 使用 session_unset() 函数也可以释放 Session 中的所有元素, session_unset() 函数不需要传入参数，而且没有返回值
 *
 * 3:如果整个 Session 会话结束，可以使用 session_destroy() 函数销毁当前会话的全部数据，即彻底销毁 Session
 * session_destroy();
 * session_destroy() 函数不需要传入任何参数，另外，session_destroy() 函数虽然可以销毁当前会话中的全部数据，但是不会重置 $_SESSION 数组，也不会重置 Cookie。
 * 如果需要再次使用 Session 会话，则必须重新调用 session_start() 函数
 * 注意：使用 $_SESSION = array() 清空 $_SESSION 数组的同时，也将这个用户在服务器端对应的 Session 文件内容清空。而使用 session_destroy() 函数时，则是将这个用户在服务器端对应的 Session 文件删除
 */
//假如使用了session_destroy, 则必须冲洗调用session_start();
session_start();
//使用第2中方法删除session中的元素
session_unset();
//unset($_SESSION["number"]);  //第1中方法
session_destroy();      //第3中方法
header("location:number.php");
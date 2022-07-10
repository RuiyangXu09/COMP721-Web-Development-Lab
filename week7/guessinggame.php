<?php
//创建随机数
$randNum = rand(0,100);
//创建变量接收表单中传递的名为guessNum的数值
$guessNum = $_POST["guessNum"];
//开启一个对话
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guessing Game</title>
</head>
<body>
<form action="guessinggame.php" method="post">
    <h1>Guessing Game</h1>
    <?php
    //http://jfm7532.cmslamp14.aut.ac.nz/lab06/guessinggame.php
    //判断是否设置session变量，如果没有，则创建并接收$rand变量中的随机数并将数值存入session变量中
    //session变量保存在服务器中，非部分方法不可改变，一旦一个会话结束，该session变量也将被销毁重置
    if (isset($_SESSION["rand"]))
    {
        if (!isset($post["submitClick"]))
        {
            //比较guessNum变量的值和session变量中存储的值的大小
            if ($guessNum > $_SESSION["rand"])
            {
                echo "Higher";
            }elseif ($guessNum < $_SESSION["rand"])
            {
                echo "Lower";
            }elseif ($guessNum == $_SESSION["rand"])
            {
                echo "Good! You guessed the hidden number";
            }
        }
    }else
    {
        $_SESSION["rand"] = $randNum;
    }
    ?>
    <h2>Enter a number between 0 to 100</h2>
    <label>
        <input type="number" name="guessNum">
        <input type="submit" name="submitClick" value="Guess">
    </label>
    <p><a href="giveup.php">Give Up</a></p> <!—links to updating page -->
    <p><a href="startover.php">Start Over</a></p>
</form>
</body>
</html>

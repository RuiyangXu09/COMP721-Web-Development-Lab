<html>
    <head>
        <title>PHP Functions<title>
            <meta http-equiv=" Content-Type" content = "text/html; charset = utf-8" />
    </head>

    <body>
        <h1>Use of PHP built-in functions</h1>
        <?php 
            /*php语法规则 使用abs() 和 pow (), 并且使用echo函数输出文本
            echo和print之间的差异，echo能够输出一个以上的字符串，print只能输出一个字符，并且始终返回1
            echo比print稍快，因为echo不返回任何值
            */
            echo "<p>Absoulate value of -9 is ", abs(-9),".</p>";
            echo "<p>2 to the power of 5 is ", pow(2,5), ".</p>";
        ?>
    </body>
</html>
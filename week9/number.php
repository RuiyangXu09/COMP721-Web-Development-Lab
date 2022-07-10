<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript">
        function changeColor() {
            document.body.style.backgroundColor = 'darkred';
        }
        function backToWhite(){
            document.body.style.backgroundColor = 'white';
        }
    </script>
    <title>Week9Lab8</title>
</head>
<body>
<?php
$num = 0;
for ($i = 1; $i<=10; $i++)
{
    $num += $i;
    echo "  ".$num;
}
?>
<script>document.write("<?php echo "  ";?>")</script>
<button type="button" onclick="changeColor()">Change Color</button>
<button type="button" onclick="backToWhite()">Rest</button>
</body>
</html>


<?php
//设置post变量
$name = $_POST['name'];
$pwd = $_POST['pwd'];
//链接database
require_once('Infor.php');
$conn = new mysqli($servername,$username,$password,$myDB,3306);
if ($conn ->connect_error)
{
    echo "Database connect failed".$conn->connect_error;
}else
{
    //执行sql语句查询email address，使用AND精确查询对应数据
    $correctSearch = mysqli_query($conn, "SELECT email_address FROM Ajax WHERE user_name = '$name' AND password = '$pwd'");
    //仅username正确
    $userCorrect = mysqli_query($conn, "SELECT * FROM Ajax WHERE user_name = '$name'");
    //仅password正确
    $passwordCorrect = mysqli_query($conn, "SELECT * FROM Ajax WHERE password = '$pwd'");
    //username和password都能被查询到
    if(mysqli_num_rows($correctSearch) >0)
    {
        while ($email = mysqli_fetch_assoc($correctSearch))
        {
            echo "Email Address: " . $email["email_address"];
        }
    }elseif (mysqli_num_rows($userCorrect) >0) //只查找到username
    {
        echo "Wrong password";
    }elseif (mysqli_num_rows($passwordCorrect) >0) //只查找到对应的password
    {
        echo "Wrong user name";
    }
}

/*
 * alert的两种形式
 *
1：
function passwordWrong_alert($message)
{
echo "<script>alert('$message')</script>";
}
passwordWrong_alert("Wrong Password!");
2：
echo '<script>alert("Wrong User Name")</script>';
 */
<?php
if (isset($_POST["submitClick"]))
{
    require_once("../../conf/settings.php");
    $conn = new mysqli($hostname, $username, $password, $dbnm);
    if ($conn->connect_error)
    {
        die("Failed". $conn->connect_error);
    }else
    {
        mysqli_set_charset($conn, "utf8");
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql_insert = "INSERT INTO vip(fname, lname,gender,
                                email,phone) VALUES ('$fname','$lname',
                                                       '$gender','$email','$phone')";

        if (mysqli_query($conn, $sql_insert))
        {
            echo "Success<br>"."Name: ".$fname.$lname."<br>Gender: ".$gender."<br>Email: ".$email."<br>Phone Number: ".$phone;
        }else
        {
            echo "Failed";
        }
    }
}

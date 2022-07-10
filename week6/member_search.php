<?php
//http://jfm7532.cmslamp14.aut.ac.nz/lab05/member_search_form.php
if (isset($_POST['submitClick']))
{
    require_once("../../conf/settings.php");
    $conn = new mysqli($hostname, $username, $password, $dbnm);
    if ($conn->connect_error)
    {
        die("Failed");
    }else
    {
        $search = $_POST['search_lname'];
        $result = mysqli_query($conn,"SELECT member_id, fname, lname, email FROM vip WHERE lname LIKE '$search'");
        if(mysqli_num_rows($result) >0)
        {
            while ($row = mysqli_fetch_array($result))
            {
                echo "<br>ID: ".$row["member_id"]."<br>".
                     "First name: ".$row["fname"]."<br>".
                     "Last name: ".$row["lname"]."<br>".
                     "Email: ".$row["email"];
            }
        }
    }
}

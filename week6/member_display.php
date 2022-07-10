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
<table border="1"; style="border-collapse: collapse">
    <tr>
        <th>Member ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php
    //http://jfm7532.cmslamp14.aut.ac.nz/lab05/member_display.php
    require_once("../../conf/settings.php");
    $conn = new mysqli($hostname, $username, $password, $dbnm);
    if($conn-> connect_error)
    {
        die("Failed". $conn->connect_error);
    }else
    {
        $sql_select = mysqli_query($conn, "SELECT fname, lname, gender FROM vip");
        if ($sql_select->num_rows > 0)
        {
            while($row = $sql_select->fetch_assoc())
            {
                echo "
                            <tr>
                                <td>{$row["fname"]}</td>
                                <td>{$row["lname"]}</td>
                                <td>{$row["gender"]}</td>
                            </tr>";
            }
        }
    }
    ?>
</table>
</body>
</html>

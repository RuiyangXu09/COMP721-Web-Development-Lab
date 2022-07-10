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
<form action="member_add.php" method="post">
    <table>
        <div>
            <h1>Member Add system</h1>
            <h2>First Name:
                <label><input type="text" name="fname"></label>
            </h2>
            <h2>Last Name:
                <label><input type="text" name="lname"></label>
            </h2>
            <h2>Gender:
                <label><input type="text" name="gender"></label>
            </h2>
            <h2>Email:
                <label><input type="text" name="email"></label>
            </h2>
            <h2>Phone Number:
                <label><input type="text" name="phone"></label>
            </h2>
            <h2>
                <input type="submit" name="submitClick" value="Post">
                <input type="reset" name="resetClick" value="Reset">
            </h2>
        </div>
    </table>
</form>
</body>
</html>

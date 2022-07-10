<?php
session_start();
$result = $_SESSION["rand"];
echo "The Hidden number is:"."$result"."<br>";
echo "<a href='startover.php'>Start over</a>";
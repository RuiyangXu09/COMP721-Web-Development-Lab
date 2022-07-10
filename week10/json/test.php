<?php

session_start();

$bookName = $_GET["book"];
$action = $_GET["action"];
$isbn = $_GET["ISBN"];
$price = $_GET["price"];

if (array_key_exists("Cart", $_SESSION))
{
    $cart = $_SESSION["Cart"];
    if ($action == "Add")
    {
        if ($cart["count"] != "")
        {  
            $cart["count"] += 1;
        }
        else
        {
            $cart["count"] = 1;
        }
    }
    else
    {
        $cart["count"] -= 1;      
    }
}
else
{
    $cart = array("book"=>$bookName, 
               "price"=>$price,
                "isbn"=>$isbn,
                "count"=>1);
}

$_SESSION["Cart"] = $cart;

if ($cart["count"] != "") 
	echo json_encode($cart, JSON_PRETTY_PRINT);
?>

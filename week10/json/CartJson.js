var xHRObject = false;
if (window.XMLHttpRequest)
{
xHRObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}


function getData()
{
    if ((xHRObject.readyState === 4) &&(xHRObject.status === 200))
    {
		var spantag = document.getElementById("cart");
		
		var serverResponse;
		if (xHRObject.responseText!=="")
         serverResponse= JSON.parse(xHRObject.responseText);
		else serverResponse=null;
		
		if (serverResponse != null){
			spantag.innerHTML = "";

            // alert(Object.keys(serverResponse));
            // alert(serverResponse["count"]);
            // alert(serverResponse["price"]);
            if (serverResponse["count"] === 0) {
                return;
            }

            if (window.ActiveXObject)
            {
                spantag.innerHTML += " " + serverResponse["book"] + " " + serverResponse["isbn"] + " #"  + serverResponse["count"] + " $" + serverResponse["count"] * serverResponse["price"] + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            else
            {
                spantag.innerHTML += " " + serverResponse["book"] + " " + serverResponse["isbn"] + " #"  + serverResponse["count"] + " $" + serverResponse["count"] * serverResponse["price"] + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
        
        }
        else{  spantag.innerHTML = ""; }
    }
}

function AddRemoveItem(action)
{
    var book  = document.getElementById("book").innerHTML;
    var ISBN  = document.getElementById("ISBN").innerHTML;
    var price = document.getElementById("price").innerHTML;

    if(action==="Add")
    {
     xHRObject.open("GET", "test.php?action=" + action + "&book=" + encodeURIComponent(book) + "&ISBN=" + encodeURIComponent(ISBN) + "&price=" + encodeURIComponent(price) + "&value=" + Number(new Date), true);
    }
    else
    {
     xHRObject.open("GET", "test.php?action=" + action + "&book=" + encodeURIComponent(book) + "&ISBN=" + encodeURIComponent(ISBN) + "&price=" + encodeURIComponent(price) + "&value=" + Number(new Date), true);
    }

    xHRObject.onreadystatechange = getData;
    xHRObject.send(null);   
}




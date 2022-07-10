// file simpleajax.js
var xhr = createRequest();
function getData(dataSource, divID, aName, aPwd)  {
    if(xhr) {
	    var obj = document.getElementById(divID);
	    var requestbody = "name="+encodeURIComponent(aName)+"&pwd="+encodeURIComponent(aPwd);
	    xhr.open("POST", dataSource, true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	    xhr.onreadystatechange = function()
		{
			obj.innerHTML = xhr.responseText;
		    //alert(xhr.readyState);
			/*
			if (xhr.readyState === 4 && xhr.status === 200) {
			}
			 */
		     // end if
	    } // end anonymous call-back function
	    xhr.send(requestbody);
	} // end if
} // end function getData()
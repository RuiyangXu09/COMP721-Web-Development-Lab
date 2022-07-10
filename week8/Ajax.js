var xhr = createRequest();
function getData(dataSource, divID, aName, aPwd)
{
    if (xhr)
    {
        var obj = document.getElementById(divID);
        var requestBody = "name="+encodeURIComponent(aName)+"&pwd="+encodeURIComponent(aPwd);
        xhr.open("POST", dataSource, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function ()
        {
            obj.innerHTML = xhr.responseText;
        }
        xhr.send(requestBody);
    }
}
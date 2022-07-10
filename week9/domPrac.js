// JavaScript Document

var selectedRowID = "";
var rowList = [];
var shouldDelete = false;

function makeTable(){
	var theTable =document.getElementById("tbl");
	//IE requires rows to be added to a tBody element
	//IE automatically creates a tBody element - delete it and then manually create
	if (theTable.firstChild != null){
		var badIEBody = theTable.childNodes[0];
		theTable.removeChild(badIEBody);
	}
	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);

	var newRow = document.createElement("tr");
	let newRowID = Math.floor(Math.random() * 100);

	rowList.push(newRowID);
	newRow.setAttribute("id", newRowID);
	var c1 = document.createElement("td");
	var v1 = document.createTextNode("7308");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	var c2 = document.createElement("td");
	var v2 = document.createTextNode("software engineering");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);

	newRow = document.createElement("tr");
	newRowID = Math.floor(Math.random() * 100);
	rowList.push(newRowID);
	newRow.setAttribute("id", newRowID);
	c1 = document.createElement("td");
	v1 = document.createTextNode("7003");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	c2 = document.createElement("td");
	v2 = document.createTextNode("Web Development");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);
}

function appendRow() {
	var theTable =document.getElementById("tbl");
	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);

	let subjectNumber = prompt("Please enter a new subject number", "default subject number");
	let subjectName = prompt("Please enter a new subject name", "default subject name");
	newRow = document.createElement("tr");
	newRowID = Math.floor(Math.random() * 100);
	rowList.push(newRowID);
	newRow.setAttribute("id", newRowID);
	c1 = document.createElement("td");
	v1 = document.createTextNode(subjectNumber);
	c1.appendChild(v1);
	newRow.appendChild(c1);
	c2 = document.createElement("td");
	v2 = document.createTextNode(subjectName);
	c2.appendChild(v2);
	newRow.appendChild(c2);
	newRow.className = "new";
	tBody.appendChild(newRow);
}

function selectRow() {
	if (rowList.length > 0) {
		shouldDelete = false;
		rowList.forEach(addHandler);
	}
}

function addHandler(id) {
	var addH = document.getElementById(id);
	if (addH.addEventListener) {
		addH.addEventListener("click", () => { highlightOrDelete(id);}, false);
	} else if (addH.attachEvent) {
		addH.attachEvent("onclick", () => { highlightOrDelete(id);});
	}
}

function highlightOrDelete(id) {
	var add = document.getElementById(id);
	if (shouldDelete) {
		if (add.getAttribute("highlighted")) {
			add.parentNode.removeChild(add);
			var index = rowList.indexOf(id);
			rowList.splice(index, 1);
		}
	} else {
		add.setAttribute("highlighted", true);

		add.style.border = '1px dotted #ff0000';
		add.style.backgroundColor = '#ffff99';
	}
}

function deleteRow() {
	shouldDelete = true;
}

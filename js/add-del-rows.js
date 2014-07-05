// JavaScript Document
function addrow(tableid) {
	var tablename = document.getElementById(tableid);
	var rows = tablename.rows.length;
	if (rows < 8) {  //Maximum number of rows allowed
		var newrow = tablename.insertRow(rows);
		var col = tablename.rows[0].cells.length;
		for (var i=0; i<col; i++) {
			var newcell = newrow.insertCell(i);
			newcell.innerHTML = tablename.rows[0].cells[i].innerHTML;
		}
	}
	else {
		alert(" Maximum number of rows allowed is 8");
	}
}

function delrow(tableid) {
	var tablename = document.getElementById(tableid);
	var rows = tablename.rows.length;
	if (rows<=1) {
		alert ("Cannot remove all the rows.");
	}
	else {
		tablename.deleteRow((rows-1));
	}
}
var j=0;
function addRow()
{
	var rowno=j;
/*	var e = document.getElementById('itemdesc');*/

	var code = document.frm1.itemdesc.value;
/*	var desc = e.options[e.selectedIndex].text;*/
	var qty = document.frm1.itemqty.value;
	var price = document.frm1.itemcost.value;
	var result = price*qty;
	var tbl = document.getElementById('table1');
	var lastRow = tbl.rows.length;
	var iteration = lastRow - 1;
	var row = tbl.insertRow(lastRow);



	var firstCell = row.insertCell(0);
	var irowno = document.createElement('input');
	irowno.type = 'checkbox';
	irowno.name = 'checkbox';
	irowno.id = 'rowno' + iteration;
	firstCell.appendChild(irowno);


	j++;

	var secondCell = row.insertCell(1);
	var icode = document.createElement('input');
	icode.type = 'text';
	icode.name = 'data[Dfleet]['+j+'][itemcode]';
	icode.id = 'code' + j;
	icode.size = 50;
	icode.value=code;
	icode.readOnly = true;
	secondCell.appendChild(icode);

	var thirdCell = row.insertCell(2);
	var iuom = document.createElement('input');
	iuom.type = 'text';
	iuom.name = 'data[Dfleet]['+j+'][price]';
	iuom.id = 'price' + j;
	iuom.size = 8;
	iuom.value = price;
	iuom.readOnly = true;
	thirdCell.appendChild(iuom);

	var fourthCell = row.insertCell(3);
	var iqty = document.createElement('input');
	iqty.type = 'text';
	iqty.name = 'data[Dfleet]['+j+'][qty]';
	iqty.id = 'qty' + j;
	iqty.size = 8;
	iqty.value = qty;
	iqty.readOnly = true;
	fourthCell.appendChild(iqty);

	var fifthCell = row.insertCell(4);
	var iprice = document.createElement('input');
	iprice.type = 'text';
	iprice.name = 'data[Dfleet]['+j+'][amount]';
	iprice.id = 'amount' + j;
	iprice.size = 9;
	iprice.value = result;
	iprice.readOnly = true;
	fifthCell.appendChild(iprice);
}

function deleterow()
{
	var table = document.getElementById('table1');
	var rowcount = table.rows.length;

	for(var i=0; i<rowcount;i++)
	{
	    var row = table.rows[i];
	    var chkbox = row.cells[0].childNodes[0];
	    if(null != chkbox && true == chkbox.checked)
	    {
	    table.deleteRow(i);
	    rowcount--;
	    i--;
	    }   
	}
}
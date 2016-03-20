<html>
<script>
$(document).ready(function(){


//validation check for asset receive asset start
$('#error_receive_Asset').hide();
$('#error_receive_qty').hide();
$('#error_room_no').hide();
$('#error_asset_available_qty').hide();

$('#receive_Asset_button').click(function(){

$('#error_receive_qty').hide();
$('#error_room_no').hide();

$('#error_asset_available_qty').hide();


//collect form values start

var room_no = $('#room_no').val();

var asset_qty = $('#asset_qty').val();
var receive_qty_id = $('#receive_qty_id').val();

//collect form values end
//check form values start
var error_count = 0;

if(receive_qty_id== '')
{
error_count++;
$('#error_receive_qty').show();
}
if(room_no== '')
{
error_count++;
$('#error_room_no').show();
}

if(asset_qty== '')
{
error_count++;
$('#error_asset_available_qty').show();
}

//check form values end
if(error_count == 0)
{

//jquery start
$.post('/HRMS/index.php/HR_department_1_2',
{
dept_loc:dept_loc,
dept_name:dept_name
},function(data,stt)
{

//alert(stt);
//document.frm.action = "/HRMS/index.php/HR_department_1_2";
//document.frm.submit();
});
//jquery end

}
else
{
$('#error_receive_Asset').show();
}


});

//validation check for receive asset  end
});
</script>





<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_receive_Asset'>
    <ul class='error_li'>
		
				
				<li id='error_receive_qty'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				receive quantity required
				</font>
				</li>
				
				  <li id='error_asset_available_qty'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				available quantity  required
				</font>
				</li>
				
				<li id='error_room_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				 room no. required
				</font>
				</li>
				
				  

    </ul>
	</div>

  <center><br>
 
   

<table> 
 
 <tr>
	<td>
		<font face='times new roman' size='3'>Room No.: </font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<div class="dropdown dropdown-dark inputWH">
			<select name='room_no' id='room_no' class="dropdown-select">
				<option></option>
				<option></option>
				<option></option>
			</select>
		</div>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Room Details :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea readonly name='room_detail' class='text-input inputWH' id='room_detail'>
		</textarea>
	</td>
</tr>
<tr>
	<td><br><br><br>
	<table BORDER=0  frame='box' cellpadding=12>
			<font face='times new roman' size='3'>Available Assets:-</font><br><br>
		<tr>
		    
			<td><font face='times new roman' size='4'>ID</font></td>
			<td><font face='times new roman' size='4'>Asset-id</font></td>
			<td><font face='times new roman' size='4'>Asset Name</font></td>
			<td><font face='times new roman' size='4'>Model</font></td>
			<td><font face='times new roman' size='4'>Seriol No.</font></td>
			<td><font face='times new roman' size='4'>Available Quantity</font></td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>4</td>
			<td>Laptop</td>
			<td>LAP001</td>
			<td>123456</td>
			<td>2</td>
			<td>
			<input type='submit' class='propertyBtn propertyBtn-blue' name='Receive' value='Receive'>
			</td>
		</tr>
	</table>
	<br><br>
	</td>
	</tr>
	<tr>
		<td>
			<font face='times new roman' size='3'>Asset Details :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea readonly name='asset_detail' class='text-input inputWH' id='asset_detail'>
			</textarea>
		</td>
	</tr>
 
 <tr>
	<td>
		<font face='times new roman' size='3'>Available Quantity : </font>&nbsp;&nbsp;
		<input type="text" readonly bgcolor='red' class='text-input inputWH' size=20 name="asset_qty" id="asset_qty">
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Receive Quantity : </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type='text' class='text-input inputWH' name='receive_qty_id' id='receive_qty_id'>
	</td>
</tr>
 
 
 <tr>
	<td><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type='button' class='propertyBtn propertyBtn-blue' name='receive_Asset_button' id='receive_Asset_button' value='submit'>
		<input type='reset' name='reset'  class='propertyBtn propertyBtn-blue' value='reset'>
		<input type='button'  value='Cancel' class='propertyBtn propertyBtn-blue'><br>
	</td>
</tr>
 
 
</table>
<br>
</center>

</div>
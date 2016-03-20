<html>
<script>
$(document).ready(function(){


//validation check for asset issue asset start
$('#error_issue').hide();
$('#error_Issue_id').hide();
$('#error_room_no').hide();
$('#error_asset_detail').hide();
$('#error_asset_qty').hide();
$('#error_room_detail').hide();
$('#error_asset').hide();



$('#button').click(function(){

$('#error_Issue_id').hide();
$('#error_room_detail').hide();
$('#error_room_no').hide();
$('#error_asset_detail').hide();
$('#error_asset_qty').hide();
$('#error_asset').hide();

//collect form values start

var Issue_id= $('#Issue_id').val();
var room_no = $('#room_no').val();
var room_detail = $('#room_detail').val();
var asset_detail = $('#asset_detail').val();
var asset_qty = $('#asset_qty').val();
var asset_name = $('#asset_name').val();

//collect form values end
//check form values start
var error_count = 0;
if(Issue_id== '')
{
error_count++;
$('#error_Issue_id').show();
}
if(asset_name== '')
{
error_count++;
$('#error_asset').show();
}
if(room_no== '')
{
error_count++;
$('#error_room_no').show();
}
if(asset_detail== '')
{
error_count++;
$('#error_asset_detail').show();
}
if(asset_qty== '')
{
error_count++;
$('#error_asset_qty').show();
}
if(room_detail== '')
{
error_count++;
$('#error_room_detail').show();
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
$('#error_issue').show();
}


});

//validation check for issue asset  end
});
</script>





<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_issue'>
    <ul class='error_li'>
		
				<li id='error_asset_detail'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset detail required
				</font>
				</li>
				<li id='error_asset'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset name required
				</font>
				</li>
				<li id='error_room_detail'>
				<font face='times new roman' size=3 color='#FE2E2E' >
			    room detail required
				</font>
				</li>
				  <li id='error_asset_qty'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				asset quantity  required
				</font>
				</li>
				<li id='error_Issue_id'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				asset id required
				</font>
				</li>
				<li id='error_room_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				 room no. required
				</font>
				</li>
				
				  

    </ul>
	</div>

  
  <center>
 <form method='post' action=''>
<table BORDER=0  cellpadding=12>
   
   

 
 <tr>
	<td>
		<font face='times new roman' size='3'>*Asset-Issue-Id : </font>
	</td>
	<td>
		<input type='text' readonly class='text-input inputWH' name='Issue_id' id='Issue_id'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Room No.: </font>
	</td>
	<td>
		<div class="dropdown dropdown-dark inputWH">
		<select name='room_no' id='room_no' class='dropdown-select'>
			<option value=''></option>
			<option value=''></option>
			<option value=''></option>
		</select>
		</div>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Room Details :</font>
	</td>
	<td>
		<textarea readonly name='room_detail' id='room_detail' class='text-input inputWH'></textarea>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Asset: </font>
	</td>
	<td>	
		<div class="dropdown dropdown-dark inputWH">
			<select name='asset_name' id='asset_name' class="dropdown-select">
				<option></option>
				<option></option>
				<option></option>
			</select>
		</div>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Asset Details :</font>
	</td>
	<td>
		<textarea readonly name='asset_detail' id='asset_detail' class='text-input inputWH'></textarea>
	</td>
</tr>
 
 <tr>
	<td>
		<font face='times new roman' size='3'>Quantity :</font> 
	</td>
	<td>
		<input type="text" size=20 name="asset_qty" id="asset_qty" class='text-input inputWH'>
		<!--<input type='button' class='propertyBtn propertyBtn-blue' name='add_asset' value='Add'>
		<input type='button'  class='propertyBtn propertyBtn-blue' value='Cancel'>-->
	</td>
</tr>
 
 
 <tr>
	<td></td>
	<td>
		<input type='button' name='button' id='button' class='propertyBtn propertyBtn-blue' value='Submit'>
		<input class='propertyBtn propertyBtn-blue' type='reset' name='reset' value='Reset'>
	</td>
</tr>
 
 
</table>
</form>
</center>

</div>

</html>
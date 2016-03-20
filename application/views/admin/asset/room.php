<html>
<script>
$(document).ready(function(){


//validation check for asset room start
$('#error_asset_room').hide();
$('#error_room_no').hide();
$('#error_room_dept').hide();
$('#error_room_loc').hide();


$('#asset_room_button').click(function(){

$('#error_room_no').hide();
$('#error_room_dept').hide();
$('#error_room_loc').hide();
//collect form values start

var room_id= $('#room_id').val();
var dept = $('#dept').val();
var room_no = $('#room_no').val();
var location = $('#location').val();

//collect form values end
//check form values start
var error_count = 0;
if(dept== '')
{
error_count++;
$('#error_room_dept').show();
}
if(room_no== '')
{
error_count++;
$('#error_room_no').show();
}

if(location== '')
{
error_count++;
$('#error_room_loc').show();
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
$('#error_asset_room').show();
}


});

//validation check for asset room end
});
</script>




<div>
<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_room'>
    <ul class='error_li'>
		
				<li id='error_room_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				room no. required
				</font>
				</li>
				  <li id='error_room_dept'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Department required
				</font>
				</li>
				<li id='error_room_loc'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				room location required
				</font>
				</li>
				 

    </ul>
	</div>

  <center> 
   
<form method='post' action=''>
<table BORDER=0  cellpadding=12>
 <tr>
	<td>
		<font face='times new roman' size='3'>*Room-Id : </font>
	</td>
	<td>
		<input type='text' readonly name='room_id' id='room_id' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Room No.: </font>
	</td>
	<td>
		<input type='text' name="room_no" id='room_no' class='text-input inputWH'>
	</td>
	</tr>
 
 <tr>
	<td>
		<font face='times new roman' size='3'>*department :</font> 
	</td>
	<td>
		<div class="dropdown dropdown-dark inputWH">
			<select name='dept' id='dept' class="dropdown-select">
				<option></option>
				<option>101</option>
				<option></option>
			</select>
		</div>
		</td>
	</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Location   : </font>
	</td>
	<td>
		<input type='text' name='location' id='location' class='text-input inputWH'>
	</td>
</tr>
 
 <tr>
	<td>
	</td>
	<td>
		<input type='button' class='propertyBtn propertyBtn-blue' name='asset_room_button' id='asset_room_button'  value='submit'>
		<input type='reset' class='propertyBtn propertyBtn-blue' name='reset' value='reset'>
	</td>
 </tr>
 
 
</table>
</form>
</center>

</div>
</html>
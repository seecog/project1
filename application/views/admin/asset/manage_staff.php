<html>
<script>
$(document).ready(function(){


//validation check for asset department start
$('#error_manage_staff').hide();
$('#error_staff_password').hide();
$('#error_staff_name').hide();
$('#error_staff_dept').hide();
$('#error_staff_email_id').hide();
$('#error_staff_contact').hide();



$('#manage_staff_button').click(function(){
$('#error_staff_password').hide();
$('#error_staff_name').hide();
$('#error_staff_dept').hide();
$('#error_staff_email_id').hide();
$('#error_staff_contact').hide();



//collect form values start


var staff_password = $('#staff_password').val();
var staff_name= $('#staff_name').val();
var staff_contact_No = $('#staff_contact_No').val();
var staff_dept= $('#staff_dept').val();
var staff_email = $('#staff_email').val();



//collect form values end
//check form values start
var error_count = 0;

if(staff_contact_No== '')
{
error_count++;
$('#error_staff_contact').show();
}
if(staff_dept== '')
{
error_count++;
$('#error_staff_dept').show();
}
if(staff_email== '')
{
error_count++;
$('#error_staff_email_id').show();
}
if(staff_name== '')
{
error_count++;
$('#error_staff_name').show();
}
if(staff_password== '')
{
error_count++;
$('#error_staff_password').show();
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
$('#error_asset_dept').show();
}


});

//validation check for asset department end
});
</script>
<!--   jquery end             -->


	
	<br>
	<?php
	
	$this->load->view('admin/asset/manage_asset_menubar');
	
	?>
	<hr>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	
	<br><br>
	<!-- background-color:#F6CECE; -->
	<!-- error div start -->
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_dept'>
    <ul class='error_li'>
  	
				<li id='error_staff_contact'>
				<font face='times new roman' size='3' color='#FE2E2E' >
				Staff contact no. required
				</font>
				</li>
				  <li id='error_staff_dept'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Staff department head required
				</font>
				</li>
				<li id='error_staff_email_id'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff email-id  required
				</font>
				</li>
				<li id='error_staff_name'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff name required
				</font>
				</li>
				<li id='error_staff_password'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff password required
				</font>
				</li>
				
				  

    </ul>
	</div>

	
	

					
<form name='frm'>
<center>
<table BORDER=0  cellpadding=12>

 <tr>
	<td>
		<font face='times new roman' size='3'>Staff-Id :</font>
	</td>
	<td>
		<input type='text' readonly name='staff_id' id='staff_id'class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Password: </font>
	</td>
	<td>
		<input type='password' name='staff_password' id='staff_password' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Name : </font></td>
	<td>
		<input type='text' name='staff_name' id='staff_name' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Department :</font> </td>
	<td>
	<div class="dropdown dropdown-dark inputWH">
		<select class='dropdown-select' name="staff_dept" id="staff_dept">
			<option value="IT">IT</option>
			<option value="ADMIN">ADMIN</option>
			<option value="CSE">CSE</option>
		</select>
	</div>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Email-Id :</font> 
	</td>
	<td>
		<input type='text' name='staff_email' id='staff_email' class='text-input inputWH'>
	</td>
</tr>
<tr>
	<td>
		<font face='times new roman' size='3'>Contact No. : </font>
	</td>
	 <td>
		<input type='text' name='staff_contact_No' id='staff_contact_No' class='text-input inputWH'>
		</td>
</tr>
<tr>
	<td></td>
	<td>
		<input type='button' name='manage_staff_button' id='manage_staff_button' class='propertyBtn propertyBtn-blue' value='submit'>
		<input type='reset' class='propertyBtn propertyBtn-blue' name='reset' value='reset'>
	</td>
</tr>
 
 
</table>

</center>
</form>

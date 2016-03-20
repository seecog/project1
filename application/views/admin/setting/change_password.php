<html>
<script>
$(document).ready(function(){


//validation check for asset change password start
$('#error_asset_change_password').hide();

$('#error_error_staffId_old_change_passowrd').hide();
$('#error_error_staffId_new_change_passowrd').hide();
$('#error_error_staffId_confirm_change_passowrd').hide();
$('#error_password_match').hide();

$('#asset_change_password_button').click(function(){

$('#error_asset_change_password').hide();

$('#error_staffId_old_change_passowrd').hide();
$('#error_staffId_new_change_passowrd').hide();
$('#error_staffId_confirm_change_passowrd').hide();
$('#error_password_match').hide();

//collect form values start


var staff_old_Password = $('#staff_old_Password').val();
var staff_new_Password= $('#staff_new_Password').val();
var staff_confirm_Password = $('#staff_confirm_Password').val();


//collect form values end
//check form values start
var error_count = 0;

if(staff_old_Password== '')
{
error_count++;
$('#error_staffId_old_change_passowrd').show();
}
if(staff_new_Password == '' )
{
error_count++;
$('#error_staffId_new_change_passowrd').show();
}
if(staff_confirm_Password == '' )
{

error_count++;
$('#error_staffId_confirm_change_passowrd').show();
}
if(staff_new_Password =  staff_confirm_Password)
{
error_count++;
$('#error_password_match').show();
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
$('#error_asset_change_password').show();
}


});

//validation check for asset  change password end
});
</script>




<div>

 <?php

$this->load->view("admin/manage_asset_menubar");

?>  <hr>
	<br>
	<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_change_password'>
    <ul class='error_li'>
		
				
				  <li id='error_staffId_old_change_passowrd'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff old password required
				</font>
				</li>
				<li id='error_staffId_new_change_passowrd'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				
				staff new password required
				</font>
				</li>
				<li id='error_staffId_confirm_change_passowrd'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff confirm password required
				</font>
				</li>
				<li id='error_password_match'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				password do not match...try again!!!
				</font>
				</li>
				  

    </ul>
	</div>
  
  <center>
  
 <form method='post' action=''>
 <table BORDER=0  cellpadding=12>
    <tr>
		<td>
			<b><u><font face='times new roman' size='3'>Staff Details:-</b></u><br>
		</td>
	</tr>
	<tr>
		<td>
			<font face='times new roman' size='3'>*Staff-Id :</font> 
		</td>
		<td>
			<input type='text' readonly class='text-input inputWH' name='staff_id' id='staff_id'>
		</td>
	</tr>
	<tr>
		<td>
			<b><u><font face='times new roman' size='3'>Password Details:-</font></b></u>
		</td>
	</tr>
	 <tr>
		<td>
			<font face='times new roman' size='3'>*Staff old Password : </font>
		</td>
		<td>
			<input type='password' class='text-input inputWH' name='staff_old_Password' id='staff_old_Password'>
		</td>
	</tr>
	 <tr>
		<td>
			<font face='times new roman' size='3'>*New Password : </font>
		</td>
		<td>
			<input type='password' class='text-input inputWH' name='staff_new_Password' id='staff_new_Password'>
		</td>
	</tr>
	 <tr>
		<td>
			<font face='times new roman' size='3'>*Confirm Password : </font>
		</td>
		<td>
			<input type='password' class='text-input inputWH' name='staff_confirm_Password' id='staff_confirm_Password'>
		</td>
	</tr>
 
 <tr>
	<td></td>
	<td>
		<input type='button' name='asset_change_password_button' id='asset_change_password_button'  value='submit' class='propertyBtn propertyBtn-blue'>
	</td>
</tr>
 
 
</table>
</form>
</center>

</div>
</html>
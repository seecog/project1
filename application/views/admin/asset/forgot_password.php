<html>
<script>
$(document).ready(function(){


//validation check for asset forgot password start
$('#error_asset_forgot_password').hide();
$('#error_forgot_password').hide();

$('#forgot_password_button').click(function(){
$('#error_forgot_password').hide();

//collect form values start

var staff_id= $('#staff_id').val();


//collect form values end
//check form values start
var error_count = 0;
if(staff_id== '')
{
error_count++;
$('#error_forgot_password').show();
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
$('#error_asset_forgot_password').show();
}


});

//validation check for asset forgot password end
});
</script>




<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_forgot_password'>
    <ul class='error_li'>
		
				<li id='error_forgot_password'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff id required
				</font>
				</li>
				 

    </ul>
	</div>
 <center><br>
 <font size=4 color='blue'> password will send to your registerd email-Id:-<hr></font>
   
<form method='post' action=''>
<table BORDER=0  cellpadding=12>
 
 <tr>
	<td>
		<font face='times new roman' size='3'> *Staff-Id : </font>
	</td>
	<td>
		<input type='text' name='staff_id' id='staff_id' class='text-input inputWH'>
	</td>
</tr>
 
 <tr>
	<td></td>
	<td>
		<input type='button' name='forgot_password_button' id='forgot_password_button'  class="propertyBtn propertyBtn-blue" value='submit'>
		<input type='button' name='Reset' class="propertyBtn propertyBtn-blue" value='Reset'>
	</td>
</tr>
 
 
</table>
</center>

</div>
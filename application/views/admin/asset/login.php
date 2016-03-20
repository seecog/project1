<html>
<script>
$(document).ready(function(){


//validation check for asset login start
$('#error_asset_login').hide();

$('#error_staff_id').hide();
$('#error_password').hide();

$('#staff_login').click(function(){

$('#error_staff_id').hide();
$('#error_password').hide();
//collect form values start

var staff_id= $('#staff_id').val();
var password = $('#password').val();
if(staff_id=='sonal' && password=='thakur')
{
alert("valid user");
document.frm.action='/assets/asset/index.php/manage_staff';
document.frm.submit();
}
else
{
alert("invalid user");
}


//collect form values end
//check form values start
var error_count = 0;
if(staff_id== '')
{
error_count++;
$('#error_staff_id').show();
}
if(password== '')
{
error_count++;
$('#error_password').show();
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
$('#error_asset_login').show();
}


});

//validation check for asset login end
});
</script>




<div>




<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_login'>
    <ul class='error_li'>
		
				
				<li id='error_password'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				password required
				</font>
				</li>
				<li id='error_staff_id'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				staff id required
				</font>
				</li>
				  

    </ul>
	</div>


<form action='/assets/asset/index.php/manage_staff' method='post' name='frm'>
<div>
 <center>
<br><br><font size=10 color='navy' >log in to continue:---</font>
 <br><br><br><br><br><br><br><br>
   

<table BORDER=0  cellpadding=12>

 <tr>
	<td>
		<font face='times new roman' size='3'>*Staff-Id :</font>
	</td>
	<td>
		<input type='text' name='staff_id' id='staff_id' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Passowrd : </font>
	</td>
	<td>
		<input type='password' name='password' id='password' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<center>
			<input type='button' name='staff_login' id='staff_login' value='Log In' class='propertyBtn propertyBtn-blue'>
		</center>
	</td>
	<td>
		<a href='/assets/asset/index.php/forgot_password'><font color='blue'>forgot password</font></a>
		
	</td>
</tr>
 
</table>
</center>

</div>
</form>
</html>
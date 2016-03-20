<html>
<script>
$(document).ready(function(){

//employee no list start
$.post('/HRMS/index.php/get_employee_no_record',
{

},function(data,stt){

$('#employee_no_list').html(data);

});
//employee_no_list end
//validation check for HR employee offer letter start

$('#error_emp_history').hide();
$('#error_HR_history').hide();

$('#emp_history_button').click(function(){
$('#error_emp_history').hide();
$('#error_HR_history').hide();

//collect form values start

var emp_no = $('#emp_no').val();

//collect form values end
//check form values start
var error_count=0;
if(emp_no== '')
{ 
error_count++;
$('#error_emp_history').show();
}
//check form values end

if(error_count == 0)
{
//jquery start
$.post('/HRMS/index.php/HR_employee_register_2',
{ 
//dept_no:dept_loc,
//dept_name:dept_name
},function(data,stt)
{
//alert(data);
alert(stt);
document.frm.action = "/HRMS/index.php/HR_employee_register_2";
document.frm.submit();
});
//jquery end

}
else
{
$('#error_HR_history').show();
}
});

//validation check for HR employee offer letter end
});
</script>


<center>
<hr>	
<?php
$this->load->view('admin/HR_menu');
?>
<hr>
<!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_history'>
    <ul>
		
				<li id='error_emp_history'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee no. required
				</font>
				</li>
				  

    </ul>
	</div>	
	<form name="frm" method="post">
	<font face='times new roman' size='3'>  
	<div><font color='red' size='3' face='times new roman'>Employee History	</font></div><br><br>
	<table BORDER=0  FRAME='BOX' cellpadding=12><tr><td>
	
	<font color='#000' size='3' face='times new roman'>Employee No. </font>
	<div class="dropdown dropdown-dark inputWH" id="employee_no_list">
	</div>
		<br><br>
    <input type='button' class="propertyBtn propertyBtn-blue" name='emp_history_button' id='emp_history_button' value='Ok'>
	<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
		</td></tr>
		</table>
		</form>
	</center>
	
<br><br>
</html>
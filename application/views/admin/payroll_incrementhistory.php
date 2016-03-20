
<html>
<!--   jquery start             -->
<script>
$(document).ready(function(){
//validation check for payroll increment history start

$('#error_emp_no').hide();

$('#payroll_increment_history_button').click(function(){
$('#error_emp_no').hide();

//collect form values start

var emp_no = $('#emp_no').val();

//collect form values end
//check form values start
if(emp_no == '')
{
$('#error_emp_no').show();
}
//check form values end

});

//validation check for payroll increment history end
});
</script>
<!--   jquery end              -->

	 <center>
<hr>

<!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_payroll_increment_history'>
    <ul>
		
				<li id='error_emp_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee number required
				</font>
				</li>
				  

    </ul>
	</div>
<?php
$this->load->view('admin/payroll_menu');
?>
<hr>  
	<font face='times new roman' size='3'>
	<div><font color='#000000' size='3' face='times new roman'>e-HRM Employee History</font><br><br>

	<form action='/HRMS/index.php/payroll_increment_history_register' method='post'>
 
 
    <table BORDER=0 cellpadding=12><tr><td>
	
	<font color='#000000' face='times new roman' size='3'>
	Employee No. 
	</font>
	<div class="dropdown dropdown-dark inputWH" ><select id='emp_no' name='emp_no' class="dropdown-select">
				   <option><font color='#000000' face='times new roman' size='3'></font></option>
	               <option><font color='#000000' face='times new roman' size='3'>All</font></option>
				   <option><font color='#000000' face='times new roman' size='3'>1001</font></option>
				   <option><font color='#000000' face='times new roman' size='3'>1002</font></option>
				   <option><font color='#000000' face='times new roman' size='3'>1003</font></option>
				   <option><font color='#000000' face='times new roman' size='3'>1004</font></option>
				</select></div>
		<br><br>
    <input type='button' id='payroll_increment_history_button' name='payroll_increment_history_button' class="propertyBtn propertyBtn-blue"  value='Ok'>
	<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
		</td></tr>
		</table></form>
	</center></font>
<br><br>
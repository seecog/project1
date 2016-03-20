
<html>
<script>
$(document).ready(function(){

$('#bdaytime').datepicker();
//validation check for payroll module payslip start

$('#error_emp_payslip').hide();

$('#payroll_payslip').click(function(){
$('#error_emp_payslip').hide();

//collect form values start

var bdaytime = $('#bdaytime').val();

//collect form values end
//check form values start
if(bdaytime == '')
{
$('#error_emp_payslip').show();
}
//check form values end

});

//validation check for payroll module payslip end
});
</script>



	<center>
	<hr>
<?php
$this->load->view('admin/payroll_menu');
?>
<hr>
<!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_emp_payslips'>
    <ul>
		
				<li id='error_emp_payslip'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				date required
				</font>
				</li>
				  
	</ul>
	</div>
	<font face='times new roman' size='3'>
	<form action='/HRMS/index.php/payroll_module_payslipregister' method='post'>
	
	<div><font color='RED' size='3' face='times new roman'>Pay Slip Of Employee:-</font><br><br>
	<table BORDER=0  cellpadding=12>
		<tr>
			<td>
				<font color='#000' face='times new roman'  size='3'>Select Month & Date :</font>
			</td>
			<td>
			    <input type='text' class='text-input inputWH' id='bdaytime' name='bdaytime'></input>
			</td>
		</tr>
		<tr>
		    <td></td>
			<td>
			
			    <input type='submit' class="propertyBtn propertyBtn-blue" name='payroll_payslip' id='payroll_payslip' value='ok'>
		        <input type='button' class="propertyBtn propertyBtn-blue" name='close' id='close' value='Close'>
			</td>
		</tr>
	</table>	
	</form>
	</center></font>
</html>
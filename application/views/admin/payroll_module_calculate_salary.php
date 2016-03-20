<html>
<!--   jquery start             -->
<script>
$(document).ready(function(){

$('#bdaytime').datepicker();


//validation check for payroll increment history start

$('#error_emp_salary').hide();

$('#payroll_calculate_salary').click(function(){
$('#error_emp_salary').hide();

//collect form values start

var bdaytime = $('#bdaytime').val();

//collect form values end
//check form values start
if(bdaytime == '')
{
$('#error_emp_salary').show();
}
//check form values end

});

//validation check for payroll increment history end
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
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_calculate_salary'>
    <ul>
		
				<li id='error_emp_salary'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				date are required
				</font>
				</li>
				  

    </ul>
	</div>
	<font face='times new roman' size='3'>
	
	<div><font color='#000000' size='3' face='times new roman'>Calculate the Salary Of Employee</font><br><br>
	<table BORDER=0  cellpadding=12>
		<tr>
			<td>
				<font color='#000000' face='georgia' size='3'>Salary Month & Date : </font>
			</td>
			<td>
				<input type='text' class='text-input inputWH' id='bdaytime' name='bdaytime'></input>
			</td>
			<td>
				<input type='button' class="propertyBtn propertyBtn-blue" name='payroll_calculate_salary' id='payroll_calculate_salary' value='Calculate Salary'>
			</td>
		<tr>
			<td></td>
			<td>
				<progress value="44" class="propertyBtn propertyBtn-blue" max="100"></progress>

			
				<input type='button' class="propertyBtn propertyBtn-blue" name='close' id='close' value='Close'>
			</td>
		</tr>
		</tr></font>
	</table>	
	</center>
</html>
<html>
<script>
$(document).ready(function(){


//validation check for payroll module find employee
$('#error_find_employee').hide();

$('#emp_find_emp').click(function(){
$('#error_find_employee').hide();

//collect form values start

var emp_search1 = $('#emp_search1').val();
var emp_search2 = $('#emp_search2').val();

//collect form values end
//check form values start
if( emp_search1== ''|| emp_search2=''|| emp_search3='')
{
$('#error_find_employee').show();
}
//check form values end

});

//validation check for payroll module find employee
});
</script>
<center>
<hr>
<!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_payroll_findemployee'>
    <ul>
		
				<li id='error_find_employee'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				select atleast one option
				</font>
				</li>
				  

    </ul>
	</div>
  
<?php
$this->load->view('admin/payroll_menu');
?>
<hr>
<form>
<font face='times new roman' size='3'>
<div><font color='#000000' size='3' face='times new roman'>-:Find Employee:-</font><br><br>

   
<table BORDER=0  cellpadding=12>
  <tr>
	<td><br>
		<input type='checkbox'  value='search'>
		<font color='#000000' size='3' face='times new roman'>Name</font>
		<input type='text' name='emp_search1' id='emp_search1' class='text-input inputWH' >
		
		<input type='checkbox' value='search'>
		<font color='#000000' size='3' face='times new roman'>Mobile</font>
		<input type='text'  name='emp_search2' id='emp_search2' class='text-input inputWH' >
		
		<input type='checkbox' name='emp_search' value='search'>
		<font color='#000000' size='3' face='times new roman'>Email-Id</font>
		<input type='text' name='emp_search3' id='emp_search3' class='text-input inputWH' >
		
		<input type='button' class="propertyBtn propertyBtn-blue"  name='find_emp' value='Find'>
	</td>
  </tr>
</table><br><br>
<table BORDER=0  cellpadding=12>
  <tr>
	<td><font color='#000' face='times new roman' size='3'>Emp No</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp Name</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_designation</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_grade</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp-Dept</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_join_date</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_left_date</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_DOB</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_Address</font></td>
	<td><font color='#000' face='times new roman' size='3'>Emp_contact</font></td>
  </tr>
  <tr>  
	<td><font color='#000000' face='georgia' size='3'>1006</font></td>
	<td><font color='#000000' face='georgia' size='3'>Aditya</font></td>
	<td><font color='#000000' face='georgia' size='3'>Manager</font></td>
	<td><font color='#000000' face='georgia' size='3'>A</font></td>
	<td><font color='#000000' face='georgia' size='3'>IT</font></td>
	<td><font color='#000000' face='georgia' size='3'>01-MAR-10</font></td>
	<td><font color='#000000' face='georgia' size='3'>02-MAY-11</font></td>
	<td><font color='#000000' face='georgia' size='3'>11-may-1975</font></td>
  </tr>
</table><br><br>
<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>
<input type='button' class="propertyBtn propertyBtn-blue" name='emp_find_emp' id='emp_find_emp' value='ok'>
</form>
</center></font>
</html>
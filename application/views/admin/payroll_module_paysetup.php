<div>
<script>
$(document).ready(function(){


//validation check for payroll module paysetup

$('#error_emp_paysetup').hide();

$('#payroll_paysetup').click(function(){
$('#error_emp_paysetup').hide();

//collect form values start

var Employee_no = $('#Employee_no').val();

//collect form values end
//check form values start
if( Employee_no== '')
{
$('#error_emp_paysetup').show();
}
//check form values end

});

//validation check for payroll module paysetup
});
</script>

  <form action='/HRMS/index.php/HR_find_employee' method='post'>
  <center>
  <hr>
  
	<?php
	$this->load->view('admin/payroll_menu');
	?>
  <hr> 
  <!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_payroll_paysetup'>
    <ul>
		
				<li id='error_emp_paysetup'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				employee no. required
				</font>
				</li>
				  

    </ul>
	</div>
  <font face='times new roman' size=3>
   
<div><font color='RED' size='3' face='times new roman'>Please Enter The Following Details:-</font><br><br>
	<table BORDER=0  cellpadding=12>
	  <tr>
		<td><font color='#000' face='times new roman' size=3>Employee No. : </font></td>
		<td><input type='text' class='text-input inputWH' value='1001' name='Employee_no' id='Employee_no'></td>
		<td><input type='button' class="propertyBtn propertyBtn-blue" id='payroll_paysetup' name='payroll_paysetup' value='Go'></td>
		<td><input type='submit' class="propertyBtn propertyBtn-blue" name='Find_employee' value='Find Employee'></td>
	  </tr>
	   
     <tr>
		<td></td>
		<td><input type='text' class='text-input inputWH' value='Aditya Raj' readonly  name='Employee_name' id='Employee_name'></td>
	 </tr>
 
	<table BORDER=0  cellpadding=12>
	  <tr>
		<td><font color='#000' face='times new roman' size='3'>Pay ID</font></td>
		<td><font color='#000' face='times new roman' size='3'>Type</font></td>
		<td><font color='#000' face='times new roman' size='3'>Code</font></td>
		<td><font color='#000' face='times new roman' size='3'>Description</font></td>
		<td><font color='#000' face='times new roman' size='3'>Call Type</font></td>
		<td><font color='#000' face='times new roman' size='3'>Amount</font></td>
      </tr>
      <tr>
		<td><font color='#000000' face='georgia' size='3'>101</font></td>
		<td><font color='#000000' face='georgia' size='3'>Addition</font></td>
		<td><font color='#000000' face='georgia' size='3'>Basic</font></td>
		<td><font color='#000000' face='georgia' size='3'>Basic Salary</font></td>
		<td><font color='#000000' face='georgia' size='3'>W</font></td>
		<td><font color='#000000' face='georgia' size='3'>5500</font></td>
	  </tr>
      <tr>
		<td><font color='#000000' face='georgia' size='3'>102</font></td>
		<td><font color='#000000' face='georgia' size='3'>Addition</font></td>
		<td><font color='#000000' face='georgia' size='3'>HRA</font></td>
		<td><font color='#000000' face='georgia' size='3'>HOUSE RENT ALLOWANCE</font></td>
		<td><font color='#000000' face='georgia' size='3'>P</font></td>
		<td><font color='#000000' face='georgia' size='3'>30</font></td>
	  </tr>
	  <tr>
		<td><font color='#000000' face='georgia' size='3'>103</font></td>
		<td><font color='#000000' face='georgia' size='3'>Addition</font></td>
		<td><font color='#000000' face='georgia' size='3'>CON</font></td>
		<td><font color='#000000' face='georgia' size='3'>CONVEYENCE</font></td>
		<td><font color='#000000' face='georgia' size='3'>P</font></td>
		<td><font color='#000000' face='georgia' size='3'>800</font></td>
	  </tr>
	  <tr>
		<td><font color='#000000' face='georgia' size='3'>104</font></td>
		<td><font color='#000000' face='georgia' size='3'>Jeduction</font></td>
		<td><font color='#000000' face='georgia' size='3'>PTAX</font></td>
		<td><font color='#000000' face='georgia' size='3'>Professional Tax</font></td>
		<td><font color='#000000' face='georgia' size='3'>W</font></td>
		<td><font color='#000000' face='georgia' size='3'>250</font></td>
	  </tr>
      <tr>
		<td><font color='#000000' face='georgia' size='3'>105</font></td>
		<td><font color='#000000' face='georgia' size='3'>Jeduction</font></td>
		<td><font color='#000000' face='georgia' size='3'>ITAX</font></td>
		<td><font color='#000000' face='georgia' size='3'>Income Tax</font></td>
		<td><font color='#000000' face='georgia' size='3'>P</font></td>
		<td><font color='#000000' face='georgia' size='3'>12</font></td>
	  </tr>
	  
 </table>
 
 <tr><td></td><td><br><input type='button' class="propertyBtn propertyBtn-blue" name='update'  value='Update'><input type='button' class="propertyBtn propertyBtn-blue"  name='close'  value='Close'></tr>
 
 
</table>
</center>

</form>
</font>
</div>
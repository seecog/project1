<br><br>
<html>
<script>
$(document).ready(function(){
//department no list start
$.post('/HRMS/index.php/get_department_no_record',
{

},function(data,stt){

$('#department_no_list').html(data);

});
//department no_list end
//validation check for HR employee department start

$('#error_emp_dept').hide();
$('#error_HR_dept').hide();

$('#HR_emp_dept_button').click(function(){
$('#error_emp_dept').hide();

//collect form values start

var dept_no = $('#dept_no').val();
//alert(dept_no);
//collect form values end
//check form values start

var error_count = 0;

if(dept_no== '')
{
error_count++;
$('#error_emp_dept').show();
}

//check form values end
if(error_count == 0)
{
//alert(dept_no);
//jquery start
$.post('/HRMS/index.php/HR_department_2',
{
dept_no:dept_no
},function(data,stt)
{
//alert(data);
//alert(stt);

document.frm.action = "/HRMS/index.php/HR_department_2";
document.frm.submit();
});
//jquery end

}
else
{
$('#error_HR_dept').show();
}







});

//validation check for HR employee department  end
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
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_dept'>
    <ul>
		
				<li id='error_emp_dept'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee department no. required
				</font>
				</li>
				  

    </ul>
	</div>
<form name="frm" method="post">
<br>
    <font face='times new roman' size='3' color='#000'>
		Filter By Department No.
	</font>	
		<div class="dropdown dropdown-dark inputWH" id="department_no_list">
		
		</div>
		   <input type='button' class="propertyBtn propertyBtn-blue" name='HR_emp_dept_button' id='HR_emp_dept_button' value='show' > 
		<br><br>
		<table border='0' width='70%' >
			<tr>
				<td>
		<font face='times new roman' size='3' color='#000'>
		Department No.
		</font>
				</td>
				<td>
		<font face='times new roman' size='3' color='#000'>
		Department Name.
		</font>
				</td>
				<td>
		<font face='times new roman' size='3' color='#000'>
		Department Location.
		</font>
			</td>
			</tr>
			
			<?php
		
		foreach($department_record as $row)
		{
		?>
		<tr>
	   <font color='#000' face='times new roman' size='3'>
			<td><?php echo $row['dept_no']; ?></td>
			<td><?php echo $row['dept_name']; ?></td>
			<td><?php echo $row['dept_loc']; ?></td>
			
		</font>	
	   </tr>
       
	   <?php
	   }
	   ?>
			
		
		</form></table><br><br>
		<input type='button' class="propertyBtn propertyBtn-blue" name='ExportExcel' value='Export To MS Excel'>
		<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='Close'>
</center></font>
<br><br></html>
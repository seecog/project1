<html>
<!--   jquery start             -->
<script>

$("#emp_image_upload").on('submit',(function(e){
		
		
		e.preventDefault();
		$.ajax({
		url: "/HRMS/index.php/emp_image_upload_edit1",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		$("#emp_image_upload_div").empty();
		$("#emp_image_upload_div").html(data);
		},
		error: function(){} 	        
		});
		
		}));
		


//image upload end

$(document).ready(function(){
var emp_no = $('#emp_no').val();
//alert(emp_no);
$('#emp_department').change(function(){
var department_id = $('#emp_department').val();

$.post('/HRMS/index.php/get_designation_record',
{
department_id : department_id
},function(data,stt)
{

$('#emp_designation').html(data);
});

});

//department list start
$.post('/HRMS/index.php/get_department_record',
{

},function(data,stt){

$('#emp_department').html(data);

});
//department list end

});

</script>
<!--   jquery end             -->


	
	<br>
	<?php
	
	$this->load->view('admin/HR_menu');
	
	?>
	<hr>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<img src='/HRMS/hrms/images/personal_details.png'> <img src='/HRMS/hrms/images/qualification.png'>
	<br><br>
	<!-- background-color:#F6CECE; -->
	
	
	
	<table align='right'>
	<tr>
	<?php
	foreach($employee_register_record as $row)
	{
	?>
	
	<td>		
		<font color='#000' face='times new roman' size='3'>			
		<div id='emp_image_upload_div'>Employee Photo:
<?php

if(isset($row['emp_image']))
{
echo "<img src='/HRMS/hrms/images/emp_image/".$row['emp_image']."' width='50' height='50'>";
}

?>
                </div>
		</font>
		<hr>
		<form name='emp_image_upload' id='emp_image_upload'>
		<?php
		echo "<input  type='hidden' name='emp_no' id='emp_no' value='".$row['emp_no']."' >";
				
		?>
		<input type='file'  name='emp_image' id='emp_image' value='Choose File'>
		
		<input type='submit' id='emp_image_upload_button' class='propertyBtn propertyBtn-blue' value='Upload'>
		
		</td>
     </td>
	 </tr>
	 </table>
	 </form>
	<!-- error div end -->
	<center>
	<form name='frm' id='frm' method='post'>
	<table border='0'  cellpadding='5' cellspacing='0' width='70%'  align='center'>
	<th>
	<font color='red' face='times new roman' size='3'>Personal Details</font>
	</th>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		  Emp No.
		</font>  
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH'  name='emp_no' id='emp_no' value='".$row['emp_no']."' >";
		?>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		  Emp Name :
		</font>  
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_name' id='emp_name' value='".$row['emp_name']."'>";
		?>
		</td>
			</tr>
			
	
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Department
		</font>
		</td>
		<td>
		<div class="dropdown dropdown-dark inputWH" id='department_list'>
        <select name='emp_department' id='emp_department' class='dropdown-select'>
		
		</select>
        </div>

		<!--<input type='text' class='text-input inputWH' name='emp_dept' id='emp_dept' value=''>-->
		</td>
	</tr>
	
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Designation:
		</font>
		</td>
		<td>
		<div class="dropdown dropdown-dark inputWH" id='designation_list'>
        <select name='emp_designation' id='emp_designation' class='dropdown-select'>
		
		</select>
        </div>
</td>
	</tr>
	
	
	
	
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Date of Birth:
		</font>
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_dob' id='emp_dob' value='".$row['emp_dob']."'>";
		?>
		
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Address:
		</font>
		</td>
		<td>
		<?php
		
		echo "<textarea name='emp_address' id='emp_address' class='text-input inputWH' value=''>".$row['emp_address']."</textarea>";
		?>
		
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Contact No(RESI):
		
		</font>
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_contact_no' id='emp_contact_no' value='".$row['emp_contact_no']."'>";
		?>
		
		</td>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Office:
		</font>
		
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_contact_no_office' id='emp_contact_no_office' value='".$row['emp_contact_no_office']."'>";
		?>
		
		
		</td>	
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Mobile: 
		</font>
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_contact_mobile_no' id='emp_contact_mobile_no' value='".$row['emp_contact_mobile_no']."'>";
		?>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Email-Id:
        </font>		
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' name='emp_emailId' id='emp_emailId' value='".$row['emp_emailId']."'>";
		?>
		</td>
		
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Join Date: 
		</font>
		</td>
		<td><?php
		
		echo "	<input type='text' class='text-input inputWH' id='emp_join_date' name='emp_join_date' value='".$row['emp_join_date']."'>";
			?>
		</td>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Left Date:
		</font>
		<?php
		
		echo "	<input type='text' class='text-input inputWH' id='emp_left_date' name='emp_left_date' value='".$row['emp_left_date']."'>";
			?>
		</td>
	</tr>
  <?php
  }
  
  ?>
   
		</table>
		</form>
			<br>
			<font face='times new roman' size='3'>
			<input type='button' class="propertyBtn propertyBtn-blue" name='hr_personal_details_button'  id='hr_personal_details_button' value='Save'>
			<input type='reset' class="propertyBtn propertyBtn-blue"  name='reset' value='Reset'>
			<!--<input type='button' class="propertyBtn propertyBtn-blue" name='update' value='Update'>
			<input type='button' class="propertyBtn propertyBtn-blue" name='view_All' value='View All'>
			<input type='button' class="propertyBtn propertyBtn-blue" name='delete' value='Delete'>
			<input type='button' class="propertyBtn propertyBtn-blue" name='cancel' value='Cancel'>
			-->
		    </font>
<br><br>
</center>
</form>
</html>
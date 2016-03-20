<html>
<!--   jquery start             -->
<script>
$(document).ready(function(){

$('#student_department').change(function(){
var department_id = $('#student_department').val();

$.post('/HRMS/index.php/get_designation_record',
{
department_id : department_id
},function(data,stt)
{

$('#student_class').html(data);
});

});

//department list start
$.post('/HRMS/index.php/get_department_record',
{

},function(data,stt){

$('#student_department').html(data);

});
//department list end

//image upload start

$("#emp_image_upload").on('submit',(function(e){
		
		
		e.preventDefault();
		$.ajax({
		url: "/HRMS/index.php/emp_image_upload",
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

$('#error_hr_personal_details').hide();
$('#student_left_date').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
			dateFormat: 'yy-mm-dd'
        });
		
$('#student_join_date').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
			dateFormat: 'yy-mm-dd'
        });
$('#student_dob').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
			dateFormat: 'yy-mm-dd'
        });

//validation check for HR_personal_details start

$('#error_emp_name').hide();
$('#error_emp_grade').hide();
$('#error_emp_address').hide();
$('#error_emp_contact_no_residence').hide();
$('#error_emp_department').hide();
$('#error_emp_designation').hide();
$('#error_emp_dob').hide();
$('#error_emp_email_id').hide();
$('#error_emp_join_date').hide();
$('#error_emp_left_date').hide();
$('#error_emp_office_no').hide();
$('#error_emp_mobile_no').hide();

$('#hr_personal_details_button').click(function(){


$('#error_emp_name').hide();
$('#error_emp_grade').hide();
$('#error_emp_address').hide();
$('#error_emp_contact_no_residence').hide();
$('#error_emp_department').hide();
$('#error_emp_designation').hide();
$('#error_emp_dob').hide();
$('#error_emp_email_id').hide();
$('#error_emp_join_date').hide();
$('#error_emp_left_date').hide();
$('#error_emp_office_no').hide();
$('#error_emp_mobile_no').hide();

//collect form values start

var student_name = $('#student_name').val();

var student_left_date = $('#student_left_date').val();
var student_address = $('#student_address').val();
var student_contact_mobile_no = $('#student_contact_mobile_no').val();
var student_contact_no = $('#student_contact_no').val();
var student_contact_no_office = $('#student_contact_no_office').val();
var student_dob = $('#student_dob').val();
var student_class = $('#student_class').val();
var student_department = $('#student_department').val();
var student_emailId = $('#student_emailId').val();
var student_join_date = $('#student_join_date').val();



//collect form values end

var error_count = 0;
//check form values start
if(student_name == '')
{
error_count++;
$('#error_emp_name').show();
}
if(student_left_date == '')
{
//error_count++;
//$('#error_emp_left_date').show();
}
if(student_join_date == '')
{
error_count++;
$('#error_emp_join_date').show();
}
if(student_emailId == '')
{
error_count++;
$('#error_emp_email_id').show();
}
if(student_contact_mobile_no == '')
{
error_count++;
$('#error_emp_mobile_no').show();
}
if(student_contact_no == '')
{
error_count++;
$('#error_emp_contact_no_residence').show();
}
if(student_contact_no_office == '')
{
error_count++;
$('#error_emp_office_no').show();
}
if(student_address == '')
{
error_count++;
$('#error_emp_address').show();
}
if(student_department == '0')
{
error_count++;
$('#error_emp_department').show();
}
if(student_dob == '')
{
error_count++;
$('#error_emp_dob').show();
}
if(student_class == '0')
{
error_count++;
$('#error_emp_designation').show();
}
//check form values end

if(error_count == 0)
{

//jquery start
$.post('/HRMS/index.php/HR_personal_details_2',
{
student_name : student_name,
student_left_date:student_left_date,
student_join_date:student_join_date,
student_class:student_class,
student_contact_no:student_contact_no,
student_contact_mobile_no:student_contact_mobile_no,
student_address:student_address,
student_contact_no_office:student_contact_no_office,
student_emailId:student_emailId,
student_department:student_department,
student_dob:student_dob

},function(data,stt)
{


document.frm.action = "/HRMS/index.php/HR_Qualification";
document.frm.submit();

});

//jquery end

}
else
{
$('#error_hr_personal_details').show();
}

});


//validation check for HR_personal_details end
});



</script>
<!--   jquery end             -->


	
	<br>
	<?php
	
	$this->load->view('admin/SRS/SRS_menu');
	
	?>
	<hr>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<img src='/HRMS/hrms/images/personal_details.png'> <img src='/HRMS/hrms/images/qualification.png'>
	<br><br>
	<!-- background-color:#F6CECE; -->
	<!-- error div start -->
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;padding-left:200px;floatLeft: 200px;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_hr_personal_details'>
    <ul class='error_li'>
		
				<li id='error_emp_name'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student name required
				</font>
				</li>
				  
				<li id='error_emp_grade'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student grade required
				</font>
				</li>
				<li id='error_emp_designation'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student designation required
				</font>
				</li>
				<li id='error_emp_department'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student department required
				</font>
				</li>
				<li id='error_emp_dob'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student date of birth required
				</font>
				</li>
				<li id='error_emp_address'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student address required
				</font>
				</li>
				<li id='error_emp_contact_no_residence'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student contact no. required
				</font>
				</li>
				<li id='error_emp_mobile_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student mobile no. required
				</font>
				</li>
				<li id='error_emp_office_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student office number required
				</font>
				</li>
				<li id='error_emp_email_id'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student email id required
				</font>
				</li>
				<li id='error_emp_join_date'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student join date required
				</font>
				</li>
				<li id='error_emp_left_date'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				student left date required
				</font>
				</li>

	</ul>
	</div>
	
	
	<table align='right'>
	<tr>
	<td>		
		<font color='#000' face='times new roman' size='3'>			
		<div id='emp_image_upload_div'>student Photo:</div>
		</font>
		<hr>
		<form name='emp_image_upload' id='emp_image_upload'>
		<?php
		
		echo "<input type='hidden' name='emp_no'  id='emp_no' value='".$count."'>";
		
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
		  student No.
		</font>  
		</td>
		<td>
		<?php
		echo "<input type='text' class='text-input inputWH' readonly name='emp_no' value='".$count."' id='emp_no'>";
		?>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		  student Name :
		</font>  
		</td>
		<td>
		<input type='text' class='text-input inputWH' name='student_name' id='student_name' value=''>
		</td>
			</tr>
			
	
	
	<!--
	<tr>
	
	      bhawesh.modi21@redifmail.com
	
		<td>
		<font color='#000' face='times new roman' size='3'>
		student Grade:
		</font>
		</td>
		<td>
		<input type='text' class='text-input inputWH' class='text-input inputWH' name='emp_grade' id='emp_grade' value=''>
		</td>
	</tr>
	-->
	
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Department
		</font>
		</td>
		<td>
		<div class="dropdown dropdown-dark inputWH" id='department_list'>
        <select name='student_department' id='student_department' class='dropdown-select'>
		
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
        <select name='student_class' id='student_class' class='dropdown-select'>
		
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
		<input type='text' class='text-input inputWH' name='student_dob' id='student_dob' value=''>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Address:
		</font>
		</td>
		<td>
		<textarea name='student_address' id='student_address' class='text-input inputWH' ></textarea>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Contact No(RESI):
		</font>
		</td>
		<td>
		<input type='text' class='text-input inputWH' name='student_contact_no' id='student_contact_no' value=''>
		</td>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Office:
		</font>
		
		
		<input type='text' class='text-input inputWH' name='student_contact_no_office' id='student_contact_no_office' value='' >
			</td>	
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Mobile: 
		</font>
		</td>
		<td>
		<input type='text' class='text-input inputWH' name='student_contact_mobile_no' id='student_contact_mobile_no' value=''>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Email-Id:
        </font>		
		</td>
		<td>
		<input type='text' class='text-input inputWH' name='student_emailId' id='student_emailId' value=''>
		</td>
	</tr>
	<tr>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Join Date: 
		</font>
		</td>
		<td>
			<input type='text' class='text-input inputWH' id='student_join_date' name="student_join_date" value=''></input>
		</td>
		<td>
		<font color='#000' face='times new roman' size='3'>
		Left Date:
		</font>
			<input type='text' class='text-input inputWH' name='student_left_date' id='student_left_date' value=''>
		</td>
	</tr>
  
   
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
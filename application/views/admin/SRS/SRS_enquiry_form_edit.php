<?php extract($student_enquiry_record); ?>
<html>
<script>
$(document).ready(function(){

$('#SRS_enquiry_form_button').click(function(){

var enquiry_id=$('#enquiry_id').val();

var enquiry_student_name=$('#enquiry_student_name').val ();

var enquiry_student_address=$('#enquiry_student_address').val();

var enquiry_student_pin_no=$('#enquiry_student_pin_no').val();

var enquiry_student_residence_no=$('#enquiry_student_residence_no').val();

var enquiry_student_office_no=$('#enquiry_student_office_no').val();

var enquiry_student_mobile_no=$('#enquiry_student_mobile_no').val();

var enquiry_student_dob=$('#enquiry_student_dob').val();

var enquiry_student_age=$('#enquiry_student_age').val();

var enquiry_student_email=$('#enquiry_student_email').val();

var enquiry_student_ssc=$('#enquiry_student_ssc').val();

var enquiry_student_ssc_percent=$('#enquiry_student_ssc_percent').val();

var enquiry_student_hsc=$('#enquiry_student_hsc').val();

var enquiry_student_hsc_percent=$('#enquiry_student_hsc_percent').val();

var enquiry_student_family_income=$('#enquiry_student_family_income').val();

var enquiry_student_field_of_interest=$("input[name=enquiry_student_field_of_interest]:checked").val();

var enquiry_student_father_name=$('#enquiry_student_father_name').val();

var enquiry_student_father_age=$('#enquiry_student_father_age').val();

var enquiry_student_father_edu=$('#enquiry_student_father_edu').val();

var enquiry_student_father_occ=$('#enquiry_student_father_occ').val();

var enquiry_student_father_contact=$('#enquiry_student_father_contact').val();

var enquiry_student_brother_sister_name=$('#enquiry_student_brother_sister_name').val();

var enquiry_student_brother_sister_age=$('#enquiry_student_brother_sister_age').val();

var enquiry_student_brother_sister_edu=$('#enquiry_student_brother_sister_edu').val();

var enquiry_student_brother_sister_occ=$('#enquiry_student_brother_sister_occ').val();

var enquiry_student_brother_sister_contact=$('#enquiry_student_brother_sister_contact').val();

var enquiry_student_uncle_name=$('#enquiry_student_uncle_name').val();

var enquiry_student_uncle_age=$('#enquiry_student_uncle_age').val();

var enquiry_student_uncle_edu=$('#enquiry_student_uncle_edu').val();

var enquiry_student_uncle_occ=$('#enquiry_student_uncle_occ').val();

var enquiry_student_uncle_contact=$('#enquiry_student_uncle_contact').val();

var enquiry_student_aunty_name=$('#enquiry_student_aunty_name').val();

var enquiry_student_aunty_age=$('#enquiry_student_aunty_age').val();

var enquiry_student_aunty_edu=$('#enquiry_student_aunty_edu').val();

var enquiry_student_aunty_occ=$('#enquiry_student_aunty_occ').val();

var enquiry_student_aunty_contact=$('#enquiry_student_aunty_contact').val();

var enquiry_student_ref_1_name=$('#enquiry_student_ref_1_name').val();

var enquiry_student_ref_1_quali=$('#enquiry_student_ref_1_quali').val();

var enquiry_student_ref_1_contact=$('#enquiry_student_ref_1_contact').val();

var enquiry_student_ref_2_name=$('#enquiry_student_ref_2_name').val();

var enquiry_student_ref_2_quali=$('#enquiry_student_ref_2_quali').val();

var enquiry_student_ref_2_contact=$('#enquiry_student_ref_2_contact').val();

var enquiry_Remarks=$('#enquiry_Remarks').val();

var enquiry_counsellers_name=$('#enquiry_counsellers_name').val();

//connect to server start
$.post('/HRMS/index.php/update_student_enquiry_record',
{
enquiry_id : enquiry_id,
enquiry_student_name : enquiry_student_name,
enquiry_student_address : enquiry_student_address,
enquiry_student_pin_no : enquiry_student_pin_no,
enquiry_student_residence_no : enquiry_student_residence_no,
enquiry_student_office_no : enquiry_student_office_no,
enquiry_student_mobile_no : enquiry_student_mobile_no,
enquiry_student_dob : enquiry_student_dob,
enquiry_student_age : enquiry_student_age,
enquiry_student_email : enquiry_student_email,
enquiry_student_ssc : enquiry_student_ssc,
enquiry_student_ssc_percent : enquiry_student_ssc_percent,
enquiry_student_hsc : enquiry_student_hsc,
enquiry_student_hsc_percent : enquiry_student_hsc_percent,
enquiry_student_family_income : enquiry_student_family_income,
enquiry_student_field_of_interest : enquiry_student_field_of_interest,
enquiry_student_father_name : enquiry_student_father_name,
enquiry_student_father_age : enquiry_student_father_age,
enquiry_student_father_edu : enquiry_student_father_edu,
enquiry_student_father_occ : enquiry_student_father_occ,
enquiry_student_father_contact : enquiry_student_father_contact,
enquiry_student_brother_sister_name : enquiry_student_brother_sister_name,
enquiry_student_brother_sister_age : enquiry_student_brother_sister_age,
enquiry_student_brother_sister_edu : enquiry_student_brother_sister_edu,
enquiry_student_brother_sister_occ : enquiry_student_brother_sister_occ,
enquiry_student_brother_sister_contact : enquiry_student_brother_sister_contact,
enquiry_student_uncle_name: enquiry_student_uncle_name,
enquiry_student_uncle_age: enquiry_student_uncle_age,
enquiry_student_uncle_edu: enquiry_student_uncle_edu,
enquiry_student_uncle_occ: enquiry_student_uncle_occ,
enquiry_student_uncle_contact: enquiry_student_uncle_contact,
enquiry_student_aunty_name: enquiry_student_aunty_name,
enquiry_student_aunty_age: enquiry_student_aunty_age,
enquiry_student_aunty_edu: enquiry_student_aunty_edu,
enquiry_student_aunty_occ: enquiry_student_aunty_occ,
enquiry_student_aunty_contact: enquiry_student_aunty_contact,
enquiry_student_ref_1_name: enquiry_student_ref_1_name,
enquiry_student_ref_1_quali: enquiry_student_ref_1_quali,
enquiry_student_ref_1_contact: enquiry_student_ref_1_contact,
enquiry_student_ref_2_name: enquiry_student_ref_2_name,
enquiry_student_ref_2_quali: enquiry_student_ref_2_quali,
enquiry_student_ref_2_contact: enquiry_student_ref_2_contact,
enquiry_Remarks: enquiry_Remarks,
enquiry_counsellers_name: enquiry_counsellers_name

},function(data,stt)
{
alert('Query Successfully Updated');
});
//connect to server end
});
if($('#enquiry_student_ssc').val() != '' )
{
$('#enquiry_student_ssc').attr('checked',true);
}
if($('#enquiry_student_hsc').val() != '' )
{
$('#enquiry_student_hsc').attr('checked',true);
}
$("input[name=enquiry_student_family_income][value='<?php if(isset($enquiry_student_family_income) && !empty($enquiry_student_family_income)){ echo $enquiry_student_family_income;}?>']").prop('checked',true);
$("input[name=enquiry_student_field_of_interest][value='<?php if(isset($enquiry_student_field_of_interest) && !empty($enquiry_student_field_of_interest)){ echo $enquiry_student_field_of_interest;}?>']").prop('checked',true);


$('#enquiry_student_ssc').change(function(){
if(!$(this).is(':checked')){
   $("#enquiry_student_ssc_percent").attr("disabled", "disabled");
   $("#enquiry_student_ssc_percent").val('');
   $(this).val('');
   }else
   {
   $("#enquiry_student_ssc_percent").removeAttr('disabled');
   $(this).val('ssc');
   }
});

$('#enquiry_student_hsc').change(function(){
if(!$(this).is(':checked')){
   $("#enquiry_student_hsc_percent").attr("disabled", "disabled");;
   $("#enquiry_student_hsc_percent").val('');
   $(this).val('');
   }else
   {
   $("#enquiry_student_hsc_percent").removeAttr('disabled');
   $(this).val('hsc');
   }
});

});
</script>
<hr>	
<?php
$this->load->view('admin/SRS/SRS_menu');
?>
<hr>


<center>
<div>

<form>
<table cellpadding=3 width='75%'>

	<tr>
		<td align='center' colspan=3><font size=3 face='Times new Roman'>CEDP VOCATIONAL INSTITUTE</font></td>
	</tr>
	<tr><td colspan='2'>
	<font face='times new roman' size='3'><a href='' class='propertyBtn propertyBtn-blue'>Basic Info</a></font> | 
	<font face='times new roman' size='3'><a href='' class='propertyBtn propertyBtn-blue'>Advance Information</a></font></td></tr>
	<tr>
		<td align='left' colspan='4'><font size=3 face='Times new Roman'>ENQUIRY FORM </font><hr></td>
	</tr>
	
	
	<tr>
		<td align='left'><font size='3' face='Times new Roman'>Full Name : </td>
		<input type='hidden' name='enquiry_id' id='enquiry_id' value="<?php if(isset($enquiry_id) && !empty($enquiry_id)){ echo $enquiry_id;}?>">
                <td><input type='text' name='enquiry_student_name' id='enquiry_student_name' value="<?php if(isset($enquiry_student_name) && !empty($enquiry_student_name)){ echo $enquiry_student_name;}?>" class='text-input inputWH'></td>
	</tr><br>
	
	<tr>
		<td align='left'><font size='3' face='Times new Roman'>Address : </font></td>
                <td><textarea id='enquiry_student_address' name='enquiry_student_address'  class='text-input inputWH'><?php if(isset($enquiry_student_address) && !empty($enquiry_student_address)){ echo $enquiry_student_address ;}?></textarea></td>
	</tr><br>
	
	<tr>		
		<td align='left' ><font size='3' face='Times new Roman'>Pin :  </font></td>
                <td><input type='text' name='enquiry_student_pin_no' id='enquiry_student_pin_no' value="<?php if(isset($enquiry_student_pin_no) && !empty($enquiry_student_pin_no)){ echo $enquiry_student_pin_no ;}?>" class='text-input inputWH'></td>
	</tr><br>


	<tr>
		<td align='left'><font size='3' face='Times new Roman'>Tel(R): </font></td>
               <td><input type='text' name='enquiry_student_residence_no' id='enquiry_student_residence_no' value="<?php if(isset($enquiry_student_residence_no) && !empty($enquiry_student_residence_no)){ echo $enquiry_student_residence_no ;}?>" class='text-input inputWH'></td>
		<td align='left'><font size='3' face='Times new Roman'>(O)  :</font></td>
                <td><input type='text' name='enquiry_student_office_no' id='enquiry_student_office_no' value="<?php if(isset($enquiry_student_office_no) && !empty($enquiry_student_office_no)){ echo $enquiry_student_office_no ;}?>" class='text-input inputWH'></td>

       </tr>
       
        <tr>
	<td align='left'><font size='3' face='Times new Roman'>(M)  :</font></td>
	<td><input type='text' name='enquiry_student_mobile_no' id='enquiry_student_mobile_no' value="<?php if(isset($enquiry_student_mobile_no) && !empty($enquiry_student_mobile_no)){ echo $enquiry_student_mobile_no ;}?>" class='text-input inputWH'></td>
	</tr><br>

	<tr>
		<td align='left'><font size='3' face='Times new Roman'>Date Of Birth :</font></td>
                <td><input type='date' name='enquiry_student_dob' id='enquiry_student_dob' value="<?php if(isset($enquiry_student_dob) && !empty($enquiry_student_dob)){ echo $enquiry_student_dob ;}?>" class='text-input inputWH'></td>
        </tr>
        <tr>
		<td align='left'><font size='3' face='Times new Roman'>Age : </font></td>
                <td><input type='text' name='enquiry_student_age' id='enquiry_student_age' value="<?php if(isset($enquiry_student_age) && !empty($enquiry_student_age)){ echo $enquiry_student_age ;}?>" class='text-input inputWH'></td>
                 
		<td align='left'><font size='3' face='Times new Roman'>Email : </font></td>
                <td><input type='email' name='enquiry_student_email' id='enquiry_student_email' value="<?php if(isset($enquiry_student_email) && !empty($enquiry_student_email)){ echo $enquiry_student_email ;}?>" class='text-input inputWH'></td>
	</tr>

	<br>
	<tr>
		<td><font size='3' face='Times new Roman'>Educational Qualification :</font></td>
		<td><input type='checkbox' name='enquiry_student_ssc' id='enquiry_student_ssc' value='<?php if(isset($enquiry_student_ssc) && !empty($enquiry_student_ssc)){ echo $enquiry_student_ssc;}?>' ><font size='3' face='Times new Roman'>SSC : Passing Year :</font>
               
			   <input type='text' name='enquiry_student_ssc_percent' id='enquiry_student_ssc_percent' value="<?php if(isset($enquiry_student_ssc_percent) && !empty($enquiry_student_ssc_percent)){ echo $enquiry_student_ssc_percent ;}?>" class='text-input inputWH'>
                <font size='3' face='Times new Roman'>%</font></td>
		
		<td><input type='checkbox' name='enquiry_student_hsc' id='enquiry_student_hsc' value='<?php if(isset($enquiry_student_hsc) && !empty($enquiry_student_hsc)){ echo $enquiry_student_hsc;}?>' ><font size='3' face='Times new Roman'>HSC : Passing Year </font>:
               <input type='text' name='enquiry_student_hsc_percent' id='enquiry_student_hsc_percent' value="<?php if(isset($enquiry_student_hsc_percent) && !empty($enquiry_student_hsc_percent)){ echo $enquiry_student_hsc_percent ;}?>" class='text-input inputWH'><font size='3' face='Times new Roman'>%</font></td>
	</tr>
	<br>
	<tr>
		<td><font size='3' face='Times new Roman'>Average Family Monthly Income(Rs.)</font></td>
        <td><input type='radio' name='enquiry_student_family_income' id='enquiry_student_family_income' value='Less Than Rs. 10,000' ><font size='3' face='Times new Roman'>Less Than Rs. 10,000</font></td>
		<td align='left'> <input type='radio' name='enquiry_student_family_income' id='enquiry_student_family_income' value='Between 10,000-25,000' ><font size='3' face='Times new Roman'>Between 10,000-25,000</font> </td>
		<td align='left'><input type='radio' name='enquiry_student_family_income' id='enquiry_student_family_income' value='Above 25,000'><font size='3' face='Times new Roman'>Above 25,000</font></td>
	</tr>
	<br>
		<tr>
		<td align='left'>
			<b><font size='3' face='Times new Roman'>Field Of interest :</font></b><br><br>
				<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='OT'><font size='3' face='Times new Roman'>OT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='HM'><font size='3' face='Times new Roman'>HM</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='HR'><font size='3' face='Times new Roman'>HR</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='CFA'><font size='3' face='Times new Roman'>CFA</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='MBA'><font size='3' face='Times new Roman'>MBA</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='CUSTOM BIKING'><font size='3' face='Times new Roman'>BSC</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='DMLT'><font size='3' face='Times new Roman'>DMLT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='BMLT'><font size='3' face='Times new Roman'>BMLT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='M.COM '><font size='3' face='Times new Roman'>M.COM</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='B.COM'><font size='3' face='Times new Roman'>B.COM</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='OTHERS'><font size='3' face='Times new Roman'>OTHERS</font><BR>

		
		</td>
		<td align='left'>
		
			<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='AUTOCAD'><font size='3' face='Times new Roman'>AUTOCAD</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='JOURNALISM'><font size='3' face='Times new Roman'>JOURNALISM</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='DISTANCE BA'><font size='3' face='Times new Roman'>DISTANCE BA</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='CUSTOM BIKING'><font size='3' face='Times new Roman'>CUSTOM BIKING</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='JOB ABROAD'><font size='3' face='Times new Roman'>JOB ABROAD</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='STUDY ABOARD'><font size='3' face='Times new Roman'>STUDY ABOARD</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='NATUROPATHY'><font size='3' face='Times new Roman'>NATUROPATHY</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='INDUSTRAIL SAFETY'><font size='3' face='Times new Roman'>INDUSTRAIL SAFETY</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='RETAIL MANAGEMENT'><font size='3' face='Times new Roman'>RETAIL MANAGEMENT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='HOTEL MANAGEMENT'><font size='3' face='Times new Roman'>HOTEL MANAGEMENT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='CHILD EDUCATION'><font size='3' face='Times new Roman'>CHILD EDUCATION</font><br>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='SPOKEN ENGLISH'><font size='3' face='Times new Roman'>SPOKEN ENGLISH</font><br>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='BEAUTY SCHOOL'><font size='3' face='Times new Roman'>BEAUTY SCHOOL</font><br>

		
		</td>
		
		<td align='left' colspan='2'>
	

	
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='AVIATION SCHOOL'><font size='3' face='Times new Roman'>AVIATION SCHOOL</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='FASHION SCHOOL'><font size='3' face='Times new Roman'>FASHION SCHOOL</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='PARAMEDICAL EDUCATION'><font size='3' face='Times new Roman'>PARAMEDICAL EDUCATION</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='AUTOMOBILE EDUCATION'><font size='3' face='Times new Roman'>AUTOMOBILE EDUCATION</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='FACILITY MANAGEMENT'><font size='3' face='Times new Roman'>FACILITY MANAGEMENT</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='OFFICE MANAGEMENT EDUCATION'><font size='3' face='Times new Roman'>OFFICE MANAGEMENT EDUCATION</font> <BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='MEDIA AND JOURNALISM'><font size='3' face='Times new Roman'>MEDIA AND JOURNALISM</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='TECHNICAL TRAINING SCHOOL'><font size='3' face='Times new Roman'>TECHNICAL TRAINING SCHOOL</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='REHABILITATION SCHOOL'><font size='3' face='Times new Roman'>REHABILITATION SCHOOL</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='ELECTRICAL AND ELECTRONIC EDUCATION'><font size='3' face='Times new Roman'>ELECTRICAL AND ELECTRONIC EDUCATION</font><BR>
		<input type='radio' name='enquiry_student_field_of_interest' id='enquiry_student_field_of_interest' value='SPOKEN ENGLISH EDUCATION'><font size='3' face='Times new Roman'>HOME BUSINESS EDUCATION</font><br>
		</td>
		
		
	        </tr>
	
	
	<tr>
		<td><font size='3' face='Times new Roman'>Information About Family: </font></td>
	
	</tr>
	<tr>
		<td colspan=3>
			<table border=0 width='95%'>
				<tr>
					<td></td>
					<td><font size='3' face='Times new Roman'>Name</font></td>
					<td><font size='3' face='Times new Roman'>Age</font></td>
					<td><font size='3' face='Times new Roman'>Education</font></td>
					<td><font size='3' face='Times new Roman'>Occupation</font></td>
					<td><font size='3' face='Times new Roman'>Office phone no.</font></td>
				</tr>
				
				<tr>
					<td><font size='3' face='Times new Roman'>FATHER</font></td>
					<td><input type='text' name='enquiry_student_father_name' id='enquiry_student_father_name' value="<?php if(isset($enquiry_student_father_name) && !empty($enquiry_student_father_name)){ echo $enquiry_student_father_name ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_father_age' id='enquiry_student_father_age' value="<?php if(isset($enquiry_student_father_age) && !empty($enquiry_student_father_age)){ echo $enquiry_student_father_age ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_father_edu' id='enquiry_student_father_edu' value="<?php if(isset($enquiry_student_father_edu) && !empty($enquiry_student_father_edu)){ echo $enquiry_student_father_edu ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_father_occ' id='enquiry_student_father_occ' value="<?php if(isset($enquiry_student_father_occ) && !empty($enquiry_student_father_occ)){ echo $enquiry_student_father_occ ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_father_contact' id='enquiry_student_father_contact' value="<?php if(isset($enquiry_student_father_contact) && !empty($enquiry_student_father_contact)){ echo $enquiry_student_father_contact ;}?>" class='text-input inputWH_small'></td>
				</tr>
				<tr>
					<td><font size='3' face='Times new Roman'>BROTHER/SISTER</font></td>
					<td><input type='text' name='enquiry_student_brother_sister_name' id='enquiry_student_brother_sister_name' value="<?php if(isset($enquiry_student_brother_sister_name) && !empty($enquiry_student_brother_sister_name)){ echo $enquiry_student_brother_sister_name ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_brother_sister_age' id='enquiry_student_brother_sister_age' value="<?php if(isset($enquiry_student_brother_sister_age) && !empty($enquiry_student_brother_sister_age)){ echo $enquiry_student_brother_sister_age ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_brother_sister_edu' id='enquiry_student_brother_sister_edu' value="<?php if(isset($enquiry_student_brother_sister_edu) && !empty($enquiry_student_brother_sister_edu)){ echo $enquiry_student_brother_sister_edu ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_brother_sister_occ' id='enquiry_student_brother_sister_occ' value="<?php if(isset($enquiry_student_brother_sister_occ) && !empty($enquiry_student_brother_sister_occ)){ echo $enquiry_student_brother_sister_occ ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_brother_sister_contact' id='enquiry_student_brother_sister_contact' value="<?php if(isset($enquiry_student_brother_sister_contact) && !empty($enquiry_student_brother_sister_contact)){ echo $enquiry_student_brother_sister_contact ;}?>" class='text-input inputWH_small'></td>
				</tr>
				<tr>
					<td><font size='3' face='Times new Roman'>UNCLE</font></td>
					<td><input type='text' name='enquiry_student_uncle_name' id='enquiry_student_uncle_name' value="<?php if(isset($enquiry_student_uncle_name) && !empty($enquiry_student_uncle_name)){ echo $enquiry_student_uncle_name ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_uncle_age' id='enquiry_student_uncle_age' value="<?php if(isset($enquiry_student_uncle_age) && !empty($enquiry_student_uncle_age)){ echo $enquiry_student_uncle_age ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_uncle_edu' id='enquiry_student_uncle_edu' value="<?php if(isset($enquiry_student_uncle_edu) && !empty($enquiry_student_uncle_edu)){ echo $enquiry_student_uncle_edu ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_uncle_occ' id='enquiry_student_uncle_occ' value="<?php if(isset($enquiry_student_uncle_occ) && !empty($enquiry_student_uncle_occ)){ echo $enquiry_student_uncle_occ ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_uncle_contact' id='enquiry_student_uncle_contact' value="<?php if(isset($enquiry_student_uncle_contact) && !empty($enquiry_student_uncle_contact)){ echo $enquiry_student_uncle_contact ;}?>" class='text-input inputWH_small'></td>
				</tr>
				<tr>
					<td><font size='3' face='Times new Roman'>AUNTY</font></td>
					<td><input type='text' name='enquiry_student_aunty_name' id='enquiry_student_aunty_name' value="<?php if(isset($enquiry_student_aunty_name) && !empty($enquiry_student_aunty_name)){ echo $enquiry_student_aunty_name ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_aunty_age' id='enquiry_student_aunty_age' value="<?php if(isset($enquiry_student_aunty_age) && !empty($enquiry_student_aunty_age)){ echo $enquiry_student_aunty_age ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_aunty_edu' id='enquiry_student_aunty_edu' value="<?php if(isset($enquiry_student_aunty_edu) && !empty($enquiry_student_aunty_edu)){ echo $enquiry_student_aunty_edu ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_aunty_occ' id='enquiry_student_aunty_occ' value="<?php if(isset($enquiry_student_aunty_occ) && !empty($enquiry_student_aunty_occ)){ echo $enquiry_student_aunty_occ ;}?>" class='text-input inputWH_small'></td>
					<td><input type='text' name='enquiry_student_aunty_contact' id='enquiry_student_aunty_contact' value="<?php if(isset($enquiry_student_aunty_contact) && !empty($enquiry_student_aunty_contact)){ echo $enquiry_student_aunty_contact ;}?>" class='text-input inputWH_small'></td>
				</tr>
				</table>
				
		</td>
		
		
		
	</tr>
	<tr>
		<td><font size='3' face='Times new Roman'>would you like to refer us to friends/relatives :</font></td>
	</tr>
	<tr>
		<td><font size='3' face='Times new Roman'>Name :</font><input type='text' name='enquiry_student_ref_1_name' id='enquiry_student_ref_1_name' value="<?php if(isset($enquiry_student_ref_1_name) && !empty($enquiry_student_ref_1_name)){ echo $enquiry_student_ref_1_name ;}?>"  class='text-input inputWH'></td>
		<td><font size='3' face='Times new Roman'>Qualification :</font><input type='text' name='enquiry_student_ref_1_quali' id='enquiry_student_ref_1_quali' value="<?php if(isset($enquiry_student_ref_1_quali) && !empty($enquiry_student_ref_1_quali)){ echo $enquiry_student_ref_1_quali ;}?>" class='text-input inputWH'></td>
		<td><font size='3' face='Times new Roman'>Tel :</font><input type='text' name='enquiry_student_ref_1_contact' id='enquiry_student_ref_1_contact' value="<?php if(isset($enquiry_student_ref_1_contact) && !empty($enquiry_student_ref_1_contact)){ echo $enquiry_student_ref_1_contact ;}?>" class='text-input inputWH'></td>
	</tr>
	
	<tr>
		<td><font size='3' face='Times new Roman'>Name :</font><input type='text' name='enquiry_student_ref_2_name' id='enquiry_student_ref_2_name' value="<?php if(isset($enquiry_student_ref_2_name) && !empty($enquiry_student_ref_2_name)){ echo $enquiry_student_ref_2_name ;}?>" class='text-input inputWH'></td>
		<td><font size='3' face='Times new Roman'>Qualification :</font><input type='text' name='enquiry_student_ref_2_quali' id='enquiry_student_ref_2_quali' value="<?php if(isset($enquiry_student_ref_2_quali) && !empty($enquiry_student_ref_2_quali)){ echo $enquiry_student_ref_2_quali ;}?>" class='text-input inputWH'></td>
		<td><font size='3' face='Times new Roman'>Tel :</font><input type='text' name='enquiry_student_ref_2_contact' id='enquiry_student_ref_2_contact' value="<?php if(isset($enquiry_student_ref_2_contact) && !empty($enquiry_student_ref_2_contact)){ echo $enquiry_student_ref_2_contact ;}?>" class='text-input inputWH'></td>
	</tr>
	<tr>
		<td><font size='3' face='Times new Roman'>Applicant signature :</font></td>
                <td colspan='2'><font size='3' face='Times new Roman'>
                __________________________________________________________________
                </td>
		
	</tr>
	<tr>
		<td><font size='3' face='Times new Roman'>Remarks : </font></td>
                <td><textarea name='enquiry_Remarks' id='enquiry_Remarks' class='inputWH_area'><?php if(isset($enquiry_Remarks) && !empty($enquiry_Remarks)){ echo $enquiry_Remarks ;}?></textarea></td>
		
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<tr>
		<td><font size='3' face='Times new Roman'>Date : <b><?php if(isset($enquiry_date) && !empty($enquiry_date)){ echo $enquiry_date ;}?></b></font></td>
		<td></td>	
		<td><font size='3' face='Times new Roman'>Counsellor Name  :</font></td><td><input type='text' id='enquiry_counsellers_name' name='enquiry_counsellers_name' value="<?php if(isset($enquiry_counsellers_name) && !empty($enquiry_counsellers_name)){ echo $enquiry_counsellers_name ;}?>" class='text-input inputWH'></td>
</tr>
<tr>
     <td><input type='button' value='Save Basic Record'  class='propertyBtn propertyBtn-blue' id='SRS_enquiry_form_button'></td>

</tr> 
</table>
</form>
</div>
</font>


</html>
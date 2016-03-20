<html>
<script>
$(document).ready(function(){
//employee no list start

$.post("<?php echo base_url('index.php/get_employee_no_record'); ?>",
{

},function(data,stt){

$('#employee_no_list').html(data);

});
//employee_no_list end

//validation check for HR employee offer letter start

$('#error_emp_experience_letter').hide();
$('#error_HR_offer_letter').hide();

$('#emp_experience_letter').click(function(){
$('#error_emp_experience_letter').hide();
$('#error_HR_offer_letter').hide();

//collect form values start

var emp_experieletter = $('#emp_experieletter').val();

//collect form values end
//check form values start
var error_count=0;
if(emp_experieletter== '')
{ 
error_count++;
$('#error_emp_experience_letter').show();
}
//check form values end

if(error_count == 0)
{
var emp_no = $('#emp_no').val();

//jquery start

$.post("<?php echo base_url('index.php/HR_experience_letter_2'); ?>",
{
emp_no : emp_no
},function(data,stt)
{

$('#experinceletter_div').html(data);

});
//jquery end



}
else
{
$('#error_HR_offer_letter').show();
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
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_offer_letter'>
    <ul>
		
				<li id='error_emp_experience_letter'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee no. required
				</font>
				</li>
				  

    </ul>
	</div>	
<div id="experinceletter_div">
	<form method='post' name='frm'>
	<font face='times new roman' size='3'>    
	<div><font color='red' size='3' face='times new roman'>Employee Experience Letter</font></div><br><br>
	<table BORDER=0  FRAME='BOX' cellpadding=12><tr><td>
	
	<font color='#000' size='3' face='times new roman'>Employee No. </font>
	<div class="dropdown dropdown-dark inputWH" id="employee_no_list">
	</div>
		<br><br>
    <input type='button' class="propertyBtn propertyBtn-blue" name='emp_experience_letter' id='emp_experience_letter' value='Ok'>
	<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
		</td></tr>
		</table>
		</form>

</div>
	</center>


	
<br><br>
</html>
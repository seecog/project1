<script>
$(document).ready(function()
{

//qualification list start

var emp_no=$('#emp_no').val();        
$.post("<?php echo base_url('index.php/get_qualification_record'); ?>",
{

},function(data,stt){

$('#qualification_list').html(data);

});
//qualification list end






//qualification record start


$.post("<?php echo base_url('index.php/get_employee_qualification_record'); ?>",
{
emp_no : emp_no
},function(data,stt){

$('#qualification_record').html(data);

});
//qualification record end



//validation check for HR employee qualification start

$('#error_HR_Qualification').hide();
$('#error_emp_qual_desc').hide();
$('#error_emp_qualification').hide();

$('#add_qualification_button').click(function(){
$('#error_emp_qual_desc').hide();
$('#error_emp_qualification').hide();

//collect form values start
var emp_no = $('#emp_no').val();
var emp_qual = $('#emp_qual').val();

var desc = $('#desc').val();
//collect form values end
//check form values start

var error_count = 0;
if(desc== '')
{

error_count++;
$('#error_emp_qual_desc').show();

}
if(emp_qual== '')
{
error_count++;
$('#error_emp_qualification').show();
}

//check form values end
 
if(error_count==0)
{

//jquery start
$.post("<?php echo base_url('index.php/HR_Qualification_2'); ?>",
{
emp_no : emp_no,
desc : desc,
emp_qual : emp_qual


},function(data,stt)
{

$('#qualification_record').html(data);

});

//jquery end

}
else
{
$('#error_HR_Qualification').show();
}

});


});

//validation check for HR employee qualification end

</script>


<br>
<?php
$this->load->view('admin/HR_menu');
?>

<hr>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<img src='/HRMS/hrms/images/personal_details_green.png'> <img src='/HRMS/hrms/images/qualification.png'>
	<br><br>
<!-- error div start -->
	

<!--form start -->
<center>
<form name='frm' method='post'><br>

	<table  width='70%'>
<tr>
<td>
<?php

echo "<input type='hidden' value='".$emp_no."' id='emp_no' name='emp_no'>";

?>
</td></tr>	
	
<tr><td>
<font color='#000' size='3' face='times new roman'>
Qualification :
</font>
<div class="dropdown dropdown-dark inputWH" id='qualification_list'>

</div>
</td>
</tr>
<tr><td>

<font color='#000' size='3' face='times new roman'>
Description : 
</font>
<textarea class='text-input inputWH' id='desc' name='desc'></textarea>
</td>
</tr>
<tr>
<td><input type='button' class="propertyBtn propertyBtn-blue" name='add_qualification_button' id='add_qualification_button' value='Add Qualification'><input type='button' name='delete_qualification' id='delete_qualification' class="propertyBtn propertyBtn-blue" value='Delete Qualification'></td>
</tr>
</table>
<br>
<br>    

</center></form>
<!-- formend -->
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_Qualification'>
    <ul>
		
				<li id='error_emp_qualification'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee qualification required
				</font>
				</li>
				<li id='error_emp_qual_desc'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee qualification description required
				</font>
				</li>
				  

    </ul>
	</div>	
	
<center>	
<div id='qualification_record' name='qualification_record'>
<?php

echo "<table width='75%' border='1'>";
echo "<th>Employee qualification</th><th>Year of passing</th>";
echo "<tr><td><input type='text' id='emp_no' value='".$emp_no."'></td></tr>"; 
foreach($employee_qualification_record as $row)
{
   
echo "<tr><td align='center'><font face='times new roman' size='3'>".$row['emp_qual']."</font></td>
<td align='center'><font face='times new roman' size='3'>".$row['desc']."</font></td></tr>";
}
echo "</table>";
?>

</div><hr>

<br><br>
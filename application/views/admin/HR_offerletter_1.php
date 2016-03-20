<html>
<script>
$(document).ready(function(){
var basePath = "<?php echo base_url(); ?>";

//employee no list start
$.post(basePath+'index.php/get_employee_no_record',
{

},function(data,stt){

$('#employee_no_list').html(data);

});
//employee_no_list end

//validation check for HR employee offer letter start

$('#error_emp_offer_letter').hide();
$('#error_HR_offer_letter').hide();

$('#emp_offer_letter').click(function(){
$('#error_HR_offer_letter').hide();
$('#error_emp_offer_letter').hide();

//collect form values start

var emp_offerletter = $('#emp_offerletter').val();

//collect form values end
//check form values start
var error_count=0;
if(emp_offerletter== '')
{ 
error_count++;
$('#error_emp_offer_letter').show();
}
//check form values end
if(error_count == 0)
{

//jquery start
var emp_no = $('#emp_no').val();

$.post(basePath+'index.php/HR_offerletter_2',
{
    emp_no : emp_no
},function(data,stt)
{


document.frm.action = basePath+"index.php/HR_offerletter_2";
document.frm.submit();
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
		
				<li id='error_emp_offer_letter'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee no. required
				</font>
				</li>
				  

    </ul>
	</div>	
	<form method='post' name='frm'>
	<font face='times new roman' size='3'>  
	<div><font color='red' size='3' face='times new roman'>Employee Offer  Letter</font></div><br><br>
	<table BORDER=0  FRAME='BOX' cellpadding=12><tr><td>
	
	<font color='#000' size='3' face='times new roman'>Employee No. </font>
	<div class="dropdown dropdown-dark inputWH" id="employee_no_list">
	</div>
		<br><br>
    <input type='button' class="propertyBtn propertyBtn-blue" name='emp_offer_letter' id='emp_offer_letter' value='Ok'>
	<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
		</td></tr>
		</table>
		</form>
	</center>
	
<br><br>
</html>
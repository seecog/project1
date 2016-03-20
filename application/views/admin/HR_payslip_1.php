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

$('#error_emp_id_card').hide();
$('#error_HR_id_card').hide();

$('#emp_id_card_button').click(function(){
$('#error_emp_id_card').hide();
$('#error_HR_id_card').hide();

var error_count=0;
var emp_no = $('#emp_no').val();
if(emp_no == '')
{ 
error_count++;
$('#error_emp_id_card').show();
}
//check form values end
//alert("hello world");
if(error_count == 0)
{
var emp_no = $('#emp_no').val();

//jquery start
$.post(basePath+'index.php/HR_payslip_2',
{ 
emp_no : emp_no

},function(data,stt)
{

$('#body_id').html(data);

});
//jquery end

}
else
{
$('#error_HR_id_card').show();
}
});

//validation check for HR employee offer letter end
});
</script>

<div id="body_id">
<center >
<hr>	
<?php
$this->load->view('admin/HR_menu');
?>
<hr>
<!-- error div start -->
	
	<div style='background-color:#F6CECE;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_id_card'>
    <ul>
		
				<li id='error_emp_id_card'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Employee pay slip
				</font>
				</li>
				  

    </ul>
	</div>	
	<form name="frm" method="post">
	<font face='times new roman' size='3'>  
	<div><font color='red' size='3' face='times new roman'>Employee pay slip	</font></div><br><br>
	<table BORDER=0  FRAME='BOX' cellpadding=12><tr><td>
	
	<font color='#000' size='3' face='times new roman'>Employee No. </font>
	<div class="dropdown dropdown-dark inputWH" id="employee_no_list">
	</div>
		<br><br>
    <input type='button' class="propertyBtn propertyBtn-blue" name='emp_id_card_button' id='emp_id_card_button' value='Ok'>
	<input type='button' class="propertyBtn propertyBtn-blue" name='close' value='close'>	
		</td></tr>
		</table>
		</form>
	</center>
</div>
	
<br><br>
</html>
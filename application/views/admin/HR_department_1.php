<html>
<script>
$(document).ready(function(){

$.post('<?php echo base_url('index.php/get_department_list'); ?>',
{
},function(data,stt)
{

$('#department_list').empty();
$('#department_list').html(data);
});

//validation check for HR employee department

$('#error_dept_name').hide();


$('#HR_department_view_all').click(function(){
    
document.frm.action="<?php echo base_url('index.php/HR_department_2'); ?>";
document.frm.submit();
});

$('#HR_department_save_button').click(function(){

$('#error_dept_name').hide();


//collect form values start

var dept_no = $('#dept_no').val();
var dept_name = $('#dept_name').val();


//collect form values end

//check form values start
var error_count = 0;
if(dept_name== '')
{
error_count++;
$('#error_dept_name').show();
}
//check form values end

if(error_count == 0)
{
$.post("<?php echo base_url('index.php/HR_department_2'); ?>",
{
dept_no : dept_no,
dept_name : dept_name 
},function(data,stt)
{
$('#department_list').html(data);
});
//jquery end

}
else
{
$('#error_HR_dept').show();
}


});

//validation check for HR employee department end
});
</script>

 
  <hr>
<?php
$this->load->view('admin/HR_menu');
?>

  <hr>
  <!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_HR_department_1'>
    <ul class='error_li'>
		
				  <li id='error_dept_name'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Department name required
				</font>
				</li>
				  
    </ul>
	</div>
	
	<center>
  
<!-- grid start -->
<div id='department_list'>

</div>
<div id='addDesignation1'>

</div>
<!-- grid end -->
<div id='addDepartmentForm'>
<form name='frm' method='post'>
	<div><font color='RED' face='times new roman'>e-HRM Department Master</font><br><br>

    <table width='70%'>


		<tr>
			<td><font color='#000' size='3' face='times new roman'>Department Name :</font></td>
			<td ><font color='blue'><input type='text' class='text-input inputWH' name='dept_name'  id='dept_name' value=''></font></td>
		</tr>
        
		<tr>
		    <td></td>
			<td>
			<br>
			<input type='button' class="propertyBtn propertyBtn-blue" name='save' value='Save Record' id='HR_department_save_button'>

			</td>
       </tr>

	 
   </div>
</table>
        </div>
</form>
</div>    
            </center></font>
<br><br>
</html>
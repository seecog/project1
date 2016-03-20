<html>
<script>
$(document).ready(function(){


//validation check for asset department start
$('#error_asset_dept').hide();
$('#error_dept_head').hide();

$('#error_dept').hide();

$('#asset_dept_button').click(function(){

$('#error_dept').hide();
$('#error_dept_head').hide();


//collect form values start


var dept_head = $('#dept_head').val();
var dept = $('#dept').val();

//collect form values end
//check form values start
var error_count = 0;

if(dept_head== '')
{
error_count++;
$('#error_dept_head').show();
}
if(dept== '')
{
error_count++;
$('#error_dept').show();
}
//check form values end
if(error_count == 0)
{

//jquery start
$.post('/HRMS/index.php/HR_department_1_2',
{
dept_loc:dept_loc,
dept_name:dept_name
},function(data,stt)
{

//alert(stt);
//document.frm.action = "/HRMS/index.php/HR_department_1_2";
//document.frm.submit();
});
//jquery end

}
else
{
$('#error_asset_dept').show();
}


});

//validation check for asset department end
});
</script>




<div>
<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_dept'>
    <ul class='error_li'>
		
				<li id='error_dept'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Department name required
				</font>
				</li>
				  <li id='error_dept_head'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Department head required
				</font>
				</li>
				
				  

    </ul>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
  
  <center>
  
<form method='post' action=''>
<table BORDER=0  cellpadding=12>
   


 <tr>
	<td>
		<font face='times new roman' size='3'>*Department-Id :</font>
	</td>
	<td>
		<input type='text' readonly name='dept_id' class='text-input inputWH' id='dept_id'>
	</td>
</tr>

 
 <tr>
	<td>
		<font face='times new roman' size='3'>*Department :</font> 
	</td>
	<td>
		<input type="text" name="dept" class='text-input inputWH' id="dept">
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Department Head :</font> 
	</td>
	<td>
		<div class="dropdown dropdown-dark inputWH">
		<select name='dept_head' id='dept_head' class='dropdown-select'>
			<option value=''></option>
			<option value=''></option>
			<option value=''></option>
		</select>
		</div>
	</td>
</tr>
 
 <tr>
	<td></td>
	<td>
		<input type='button' class="propertyBtn propertyBtn-blue" name='asset_dept_button' id='asset_dept_button' class="LoginBtn LoginBtn-blue" value='submit'>
		<input type='reset' class="propertyBtn propertyBtn-blue" name='reset' value='reset'>
	</td>
</tr>
 
 
</table>
</center>

</div>
</html>
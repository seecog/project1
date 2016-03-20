<html>
<script>
$(document).ready(function(){


//validation check for asset type start
$('#error_asset_type').hide();

$('#error_Asset_type').hide();

$('#asset_type_button').click(function(){


$('#error_Asset_type').hide();

//collect form values start


var Asset_type = $('#Asset_type').val();

//collect form values end
//check form values start
var error_count = 0;

if(Asset_type== '')
{
error_count++;
$('#error_Asset_type').show();
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
$('#error_asset_type').show();
}


});

//validation check for asset type end
});
</script>




<div>

 <?php

$this->load->view("admin/manage_asset_menubar");

?>  <hr>
	<br>
	<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_asset_type'>
    <ul class='error_li'>
		
				
				  <li id='error_Asset_type'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset type required
				</font>
				</li>
				  

    </ul>
	</div>
  
  <center>
  <form method='post' action=''>
<table BORDER=0  cellpadding=12>
   
	<tr>
		<td>
			<font face='times new roman' size='3'>*Asset Type-Id : </font>
		</td>
		<td>
			<input type='text' readonly name='Asset_type_id' id='Asset_type_id' class='text-input inputWH'>
		</td>
	</tr>
 <tr>
	<td>	
		<font face='times new roman' size='3'>Asset Type: </font>
	</td>
	<td>
		<input type='text' name='Asset_type' id='Asset_type' class='text-input inputWH'>
	</td>
</tr>

 <tr>
	<td></td>
	<td>
		<input type='button' class='propertyBtn propertyBtn-blue' name='asset_type_button' id='asset_type_button' value='submit'>
		<input type='reset' name='reset' class='propertyBtn propertyBtn-blue' value='reset'>
	</td>
</tr>
 
 
</table>
</form>
</center>

</div>
</html>
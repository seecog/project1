<html>
<script>
$(document).ready(function(){


//validation check for manage asset start
$('#error_manage_asset').hide();
$('#error_asset_id').hide();
$('#error_stock_qty').hide();
$('#error_asset_type').hide();
$('#error_name').hide();
$('#error_model').hide();
$('#error_seriol_no').hide();
$('#error_tag').hide();
$('#error_qty').hide();

$('#manage_asset_button').click(function(){

$('#error_asset_id').hide();
$('#error_stock_qty').hide();
$('#error_asset_type').hide();
$('#error_name').hide();
$('#error_model').hide();
$('#error_seriol_no').hide();
$('#error_tag').hide();
$('#error_qty').hide();


//collect form values start

var stock_Qty= $('#stock_Qty').val();
var service_tag = $('#service_tag').val();
var Asset_seriol_no = $('#Asset_seriol_no').val();
var Asset_model = $('#Asset_model').val();
var Asset_name= $('#Asset_name').val();
var Asset_type = $('#Asset_type').val();
var asset_id = $('#asset_id').val();
var stock_Qty_available = $('#stock_Qty_available').val();

//collect form values end
//check form values start
var error_count = 0;
if(stock_Qty== '')
{
error_count++;
$('#error_qty').show();
}
if(service_tag== '')
{
error_count++;
$('#error_tag').show();
}
if(Asset_seriol_no== '')
{
error_count++;
$('#error_seriol_no').show();
}
if(Asset_model== '')
{
error_count++;
$('#error_model').show();
}
if(Asset_name== '')
{
error_count++;
$('#error_name').show();
}
if(Asset_type== '')
{
error_count++;
$('#error_asset_type').show();
}
if(asset_id== '')
{
error_count++;
$('#error_asset_id').show();
}
if(stock_Qty_available== '')
{
error_count++;
$('#error_stock_qty').show();
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
$('#error_manage_asset').show();
}


});

//validation check for manage asset end
});
</script>





<div>

  <?php

$this->load->view("admin/manage_asset_menubar");

?>  
<hr>


<!-- error div start -->
	
	<div style='background-color:#ffffff;border-style:solid;border-color:#ffffff;
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_manage_asset'>
    <ul class='error_li'>
		
				<li id='error_asset_id'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				asset id required
				</font>
				</li>
				  <li id='error_qty'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset quantity  required
				</font>
				</li>
				<li id='error_model'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				asset model no. required
				</font>
				</li>
				<li id='error_tag'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset Tag required
				</font>
				</li>
				<li id='error_asset_type'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset Type required
				</font>
				</li>
				<li id='error_stock_qty'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset Quantity required
				</font>
				</li>
				<li id='error_seriol_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset Seriol No. required
				</font>
				</li>
				<li id='error_name'>
				<font face='times new roman' size=3 color='#FE2E2E' >
				Asset  name required
				</font>
				</li>
				  

    </ul>
	</div>  <center>
  
   
<form method='post' action=''>
<table BORDER=0  cellpadding=12>
 
	<tr>
		<td>
			<font face='times new roman' size='3'>*Asset-Id : </font>
		</td>
		<td>
			<input type='text' readonly name='asset_id' id='asset_id' class='text-input inputWH'>
		</td>
	</tr>
 
	<tr>
		<td>
			<font face='times new roman' size='3'>Stock Available Qty: </font>
		</td>
	<td>
		<input type='text' readonly name='stock_Qty_available' id='stock_Qty_available' class='text-input inputWH'>
	</td>
 </tr>
 
<tr>
	<td>
		<font face='times new roman' size='3'>*Asset Type: </font>
	</td>
	<td>
		<input type='text' name='Asset_type' id='Asset_type' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>*Name : </font>
	</td>
	<td>
		<input type='text' name='Asset_name' id='Asset_name' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>*Model:</font>		
	</td>
	<td>
		<input type='text' name='Asset_model' id='Asset_model' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>*seriol No. : </font>
	</td>
	<td>
		<input type='text' name='Asset_seriol_no' id='Asset_seriol_no' class='text-input inputWH'>
	</td>
</tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Service Tag:</font>
	</td>
	<td>
		<input type='text' name='service_tag' id='service_tag' class='text-input inputWH'>
	</td>
 </tr>
 <tr>
	<td>
		<font face='times new roman' size='3'>Qty: </font>
	</td>
	<td>
		<input type='text' name='stock_Qty' id='stock_Qty' class='text-input inputWH'>
	</td>
</tr><br>
 <tr><br>
	<td></td>
	<td>
		<input type='button' name='manage_asset_button' id='manage_asset_button' value='submit' class='propertyBtn propertyBtn-blue'>
		<input type='reset' name='reset' value='reset' class='propertyBtn propertyBtn-blue'>
	</td>
</tr>
 
 
</table>
<br>
</center>

</div></form>
</html>
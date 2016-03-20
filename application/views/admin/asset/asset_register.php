<html>
<script>
$(document).ready(function(){


//validation check for asset type start
$('#error_room_no').hide();

$('#error_Asset_register').hide();

$('#asset_register_button').click(function(){


$('#error_room_no').hide();



//collect form values start


var room_no = $('#room_no').val();


//collect form values end
//check form values start
var error_count = 0;

if(room_no== '')
{
error_count++;
$('#error_room_no').show();
}
//check form values end
if(error_count == 0)
{
  if(room_no==101)
{
document.frm.action='/assets/asset/index.php/image.php';
document.frm.submit();
}

//jquery start

$.post('/HRMS/index.php/HR_department_1_2',
{
dept_loc:dept_loc,
dept_name:dept_name
},function(data,stt)
{


//alert(stt);

});
//jquery end

}
else
{
$('#error_Asset_register').show();
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
	border-radius:10px;width:550px;height:auto;background-position:top-center;' id='error_Asset_register'>
    <ul class='error_li'>
		
				
				  <li id='error_room_no'>
				<font face='times new roman' size=3 color='#FE2E2E' >
			Room  No. required
				</font>
				</li>
				  

    </ul>
	</div>
  
  <center>
  <form method='post' action='/assets/asset/index.php/image'>
<table BORDER=0  cellpadding=12>
   
	<tr>
		<td>
			<font face='times new roman' size='3'>Room No.: </font> 
		</td>
		<td>
			<div class="dropdown dropdown-dark inputWH">
			<select name='room_no' id='room_no' class="dropdown-select">
				<option></option>
				<option>101</option>
				<option></option>
			</select>
			</div>
		</td>
	</tr>
 <tr>
		<td>
			<font face='times new roman' size='3'>Asset Details :</font>
		</td>
		<td>
			<textarea readonly name='asset_detail' class='text-input inputWH' id='asset_detail'>
			</textarea>
		</td>
</tr>

 <tr>
	<td></td>
	<td>
		<input type='button' class='propertyBtn propertyBtn-blue' name='asset_register_button' id='asset_register_button' value='Receive'>
		<input type='submit' class='propertyBtn propertyBtn-blue' name='asset_button' id='asset_button' value='pdf'>
		<input type='reset' name='reset' class='propertyBtn propertyBtn-blue' value='reset'>
	</td>
</tr>
 
 
</table>
</form>
</center>

</div>
</html>
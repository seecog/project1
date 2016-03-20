<script>
var department_id = $('#department_id').val(); 
$.post('<?php echo base_url(); ?>'+'index.php/get_designation_list/'+department_id,
{
    
},function(data,stt)
{  
$('#designation_list').html(data);     
});
    


$('#HR_designation_save_button').click(function(){
 
var department_id = $('#department_id').val(); 
var designation_name = $('#designation_name').val();
$.post('<?php echo base_url('index.php/add_designation_2'); ?>',
{
department_id : department_id,    
designation_name : designation_name    
},function(data,stt)
{
$('#designation_name').val('');    
$('#designation_list').html(data);    
});

});    

</script>    
<center>
<table width='50%'>


		<tr>
			<td><font color='#000' size='3' face='times new roman'>Department Name :</font></td>
                        <td ><input type="hidden" name="department_id" id="department_id" value="<?php echo $department_record[0]['department_id'];  ?>">
                            <font color='#000' size='3' face='times new roman'><?php echo $department_record[0]['department_name'];  ?></font></td>
		</tr>
                
                <tr>
			<td><font color='#000' size='3' face='times new roman'>Designation :</font></td>
                        <td ><input type='text' name='designation_name' id='designation_name' class='text-input inputWH'>
                        </td>
		</tr>
                
                
        
		<tr>
		   
			<td colspan='2'>
			
			<input type='button' class="propertyBtn propertyBtn-blue" name='save' value='Save Designation' id='HR_designation_save_button'>

			</td>
       </tr>

	 
   
</table>
    
<!-- Designation list -->
<div id="designation_list"></div>
</center>
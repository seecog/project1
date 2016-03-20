<script>
   
function deleteDesignation1(designation_id,department_id)
{
$.post('<?php echo base_url('index.php/deleteDesignation1'); ?>',
{
designation_id : designation_id,
department_id : department_id
},function(data,stt)
{
$('#designation_list').html(data);    
});
}
function addDesignation1(department_id)
{
    
    $.post('<?php echo base_url('index.php/addDesignation1'); ?>',
    {
     department_id : department_id   
    },function(data,stt)
    {
        $('#addDepartmentForm').html('');
        $('#department_list').html('');
        $('#addDesignation1').html(data);
    });
}
    
</script>    

<?php
echo "<table width='75%'>";
echo "<tr><td align='center'><font face='times new roman' size='3' color='red'>Designation Id</td>
<td align='left'><font face='times new roman' size='3' color='red'>Designation Name</td>
<td align='left'><font face='times new roman' size='3' color='red'>Action Performed</td></tr>";
foreach($designation_record as $row)
{
echo "<tr><td align='center'><font face='times new roman' size='3'>".$row['designation_id']."</font></td>
<td align='left'><font face='times new roman' size='3'>".$row['designation_name']."</font></td>
<td><font face='times new roman' size='3'>
<a href='#' class='propertyBtn propertyBtn-blue' onClick='deleteDesignation1(".$row['designation_id'].",".$row['department_id'].")'>Delete</a></font></td></tr>";
}
echo "</table>";
?>
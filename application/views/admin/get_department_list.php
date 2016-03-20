<script>
function deleteDepartment1(department_id)
{
$.post('<?php echo base_url('index.php/deleteDepartment1'); ?>',
{
 department_id : department_id  
},function(data,stt)
{
  $('#department_list').html(data);
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
echo "<tr><td align='center'><font face='times new roman' size='3' color='red'>Department Id</td>
<td align='left'><font face='times new roman' size='3' color='red'>Department Name</td>
<td align='left'><font face='times new roman' size='3' color='red'>Action Performed</td></tr>";
foreach($department_record as $row)
{
echo "<tr><td align='center'><font face='times new roman' size='3'>".$row['department_id']."</font></td>
<td align='left'><font face='times new roman' size='3'>".$row['department_name']."</font></td>
<td><font face='times new roman' size='3'>
<a href='' class='propertyBtn propertyBtn-blue' onClick='addDesignation1(".$row['department_id']."); return false;'>Manage Designation</a> |
<a href='' class='propertyBtn propertyBtn-blue' onClick='deleteDepartment1(".$row['department_id']."); return false;'>Delete</a></font></td></tr>";
}
echo "</table>";
?>
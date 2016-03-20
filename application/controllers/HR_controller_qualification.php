<?php

class HR_controller_qualification extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('model_qualification');
}

//function get_qualification_record()
//{
//
//$qualification_record = $this->model_qualification->get_qualification_record();
//
//echo "<select name='emp_qual' id='emp_qual' class='dropdown-select'>";
//foreach($qualification_record as $row)
//{
//echo "<option value='".$row['qualification_name']."'>".$row['qualification_name']."</option>";
//}
//echo "</select>";
//
//}

function get_qualification_record()
{

$qualification_record = $this->model_qualification->get_qualification_record();

echo "<select name='emp_qual' id='emp_qual' class='dropdown-select'>";
foreach($qualification_record as $row)
{
echo "<option value='".$row['qualification_name']."'>".$row['qualification_name']."</option>";
}
echo "</select>";

}




function get_employee_qualification_record_ByEmployeeId()
{
    $emp_no = $this->input->post('emp_no');
$emp_qualification_record = $this->model_qualification->get_employee_qualification_record($emp_no);
echo "<table BORDER=0 width='70%'>

     <tr><td><font color='red' face='times new roman' size='3'>Employee Qualification</font></td></tr><br>

	
	
	<tr>
	
	
		
		<td>
			<font color='blue' size='3' face='times new roman'>Sr.No.</font>
		</td>
		
	    <td>
			<font color='blue' size='3' face='times new roman'>Qualification</font>
		</td>
		
		
	
	    <td>
			<font color='blue' size='3' face='times new roman'>Description</font>
		</td>
		
	</tr>";
	
	$count=0;
	
	
	foreach($emp_qualification_record as $row)
        {
		
		
		
		$count=$count+1;
		
		echo "
	
	<tr>
		<td>
		<font color='#000' size='3' face='times new roman'>";
		
			echo $count;
		    echo "</font>	
		    </td>
		    <td>
		<font color='#000' size='3' face='times new roman'>";
		echo $row['emp_qual'];
			echo "
		</font>	
		</td>
		<td>
		<font color='#000' size='3' face='times new roman'>";
			echo $row['desc'];
			
		}
		echo "</font>	
		</td>
	</tr>
	
</table><br>
";
}


}








?>
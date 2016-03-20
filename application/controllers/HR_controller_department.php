<?php

class HR_controller_department extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('model_department');
}

function get_department_record()
{

$department_record = $this->model_department->get_department_record();

echo "<option value='0'>Select department</option>";
foreach($department_record as $row)
{
echo "<option value='".$row['department_id']."'>".$row['department_name']."</option>";
}

}







/*
function get_employee_qualification_record()
{



$emp_qualification_record = $this->model_qualification->get_employee_qualification_record();



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

*/
}








?>
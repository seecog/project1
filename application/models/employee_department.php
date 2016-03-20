<?php
class employee_department extends CI_model
{
	function __Construct()
	{
		parent:: __Construct();
		$this->load->database();
	}
	
	
	function insert_employee_department_record($employee_department_record_array)
{
$status=$this->db->insert('employee_department',$employee_department_record_array);
return $status;

}

function get_employee_department_record($dept_no)
	{
//echo $dept_no;	
	if($dept_no == 0)
	{
	$departemnt_record = $this->db->get('employee_department');
	}
	else
	{
	$arr = array(
	'dept_no' => $dept_no
	);
	$departemnt_record = $this->db->get_where('employee_department',$arr);
	
	
	}
//	print_r($departemnt_record);
	return $departemnt_record->result_array();
	}
	



function row_count()
{
$count=$this->db->count_all('employee_department');
//$count = $this->db->insert_id('manage_staff');

return $count;
}
	
	/*function row_count()
{
$count=$this->db->count_all('manage_staff');
return $count;
}
*/
	
}
?>
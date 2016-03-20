<?php
class model_emp_change_password extends CI_model
{
	function __Construct()
	{
		parent:: __Construct();
		$this->load->database();
	}
	function insert_employee_register_record($employee_register_record_array)
	{
		
		$status=$this->db->insert('employee_register',$employee_register_record_array);
		return $status;
	}
	
	function row_count()
{
$count=$this->db->count_all('employee_register');
return $count;
}
}
?>
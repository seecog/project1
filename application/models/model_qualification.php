<?php

class Model_qualification extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}

function get_qualification_record()
{ 
$qualification_record = $this->db->get('qualification');

return $qualification_record->result_array();
}

function get_employee_qualification_record($emp_no)
{ 
$this->db->where('emp_no',$emp_no);    
$emp_qualification_record = $this->db->get('qualification_emp');
//print_r(emp_qualification_record);
return $emp_qualification_record->result_array();
}


function get_employee_no_record()
{
$employee_no_record = $this->db->get('employee_register');
return $employee_no_record->result_array();
}


function get_department_no_record()
{
$department_no_record = $this->db->get('employee_department');
return $department_no_record->result_array();
}





function insert_employee_qualification_record($employee_qualification_record_array)
	{
		
		$status=$this->db->insert('qualification_emp',$employee_qualification_record_array);
	
	}
	
	function row_count()
{
$count=$this->db->count_all('employee_register');
return $count;
}
}
?>

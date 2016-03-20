<?php

class Model_employee_qualification extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}

function get_employee_qualification_record($emp_no)
{ 

if($emp_no)
{
$employee_qualification_record = $this->db->get_where('employee_qualification',array('emp_no'=>$emp_no));
}
else
{
$employee_qualification_record = $this->db->get('employee_qualification');

}
return $employee_qualification_record->result_array();
}



function insert_employee_qualification_record($employee_qualification_record_array)
	{
		
		$status=$this->db->insert('employee_qualification',$employee_qualification_record_array);
		return $status;
	
	}
	
function row_count()
{
$count=$this->db->count_all('employee_register');
return $count;
}







}

?>
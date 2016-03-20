<?php

class Model_employee_image extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}

function insert_employee_image_record($employee_image_record)
{
$stt = $this->db->insert('employee_image',$employee_image_record);
return $stt;
}

function delete_employee_image_record($employee_id=null)
{
$this->db->where('emp_no',$employee_id);    
$stt = $this->db->delete('employee_image');
return $stt;
}
function get_employee_image_recordById($employee_id=null)
{
$this->db->where('emp_no',$employee_id);    
$stt = $this->db->get('employee_image');
return $stt->result_array();
}

function insert_id()
{

return $this->db->insert_id()."***";

}



}

?>
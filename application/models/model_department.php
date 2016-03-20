<?php

class Model_department extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}

function get_department_record()
{ 
$department_record = $this->db->get('department');

return $department_record->result_array();
}

function get_department_record_by_id($department_id=null)
{ 
$this->db->where('department_id',$department_id);    
$department_record = $this->db->get('department');
return $department_record->result_array();
}

function insert_department_record($department_record)
{
$stt = $this->db->insert('department',$department_record);
return $stt;
}

function delete_department_record($department_id=null)
{
$this->db->where('department_id',$department_id); 
return $this->db->delete('department');
}

}
?>

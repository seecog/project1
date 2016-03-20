<?php

class department extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}


function insert_dept_record($dept_record_array)
{
$status=$this->db->insert('department',$dept_record_array);
return $status;

}


function get_department_name_record()
{ 
$dept_name_record = $this->db->get('manage_staff');

return $dept_name_record->result_array();
}

function get_staff_name_record()
{ 
$staff_name_record = $this->db->get('manage_staff');

return $staff_name_record->result_array();
}



function get_room_no_record()
{ 
$room_no_record = $this->db->get('room');

return $room_no_record->result_array();
}



function get_Asset_type_record()
{ 
$Asset_type_record = $this->db->get('Asset_type');

return $Asset_type_record->result_array();
}


function row_count()
{
$count=$this->db->count_all('department');
//$count = $this->db->insert_id('manage_staff');

return $count;
}


}


?>
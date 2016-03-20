<?php

class Model_designation extends CI_Model
{

function __construct()
{
parent::__construct();
$this->load->database();
}

function get_designation_record($department_id=null)
{ 
if(!empty($department_id))   
{    
return $this->db->get_where('designation',array('department_id'=>$department_id))->result_array();
}
else
{
 return $this->db->get('designation')->result_array();    
}
}


function add_designation_record($form_data=null)
{ 
if(!empty($form_data)) 
{
$add_status=$this->db->insert('designation',$form_data);
return $add_status;
}
}

function delete_designation_record($designation_id=null)
{
if(!empty($designation_id))   
{
$this->db->where('designation_id',$designation_id);  
return $this->db->delete('designation');
}
}

function get_designation_record_by_id($designation_id=null)
{
$this->db->where('designation_id',$designation_id);
return $this->db->get('designation')->result_array();
}

function get_designation_record_by_DepartmentId($department_id=null)
{
    echo "department id is ".$department_id;
$this->db->where('department_id',$department_id);
return $this->db->get('designation')->result_array();
}


}
?>

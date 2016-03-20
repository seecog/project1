<?php

class HR_controller_designation extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('model_designation');
}

function get_designation_record()
{
$department_id = $this->input->post('department_id');
$designation_record = $this->model_designation->get_designation_record($department_id);

echo "<option value='0'>Select designation</option>";
foreach($designation_record as $row)
{
echo "<option value='".$row['designation_id']."'>".$row['designation_name']."</option>";
}


}


}








?>
<?php

class asset_controller_dept extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('department');
}

function get_department_name_record()
{

$department_name_record = $this->department->get_department_name_record();
//print_r($department_name_record);
echo "<select name='staff_dept' id='staff_dept' class='dropdown-select'>";
foreach($department_name_record as $row)
{
echo "<option value='".$row['staff_dept']."'>".$row['staff_dept']."</option>";
}
echo "</select>";

}
}
?>
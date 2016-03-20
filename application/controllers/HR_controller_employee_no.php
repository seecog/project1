<?php

class HR_controller_employee_no extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('model_qualification');
}

function get_employee_no_record()
{

$employee_no_record = $this->model_qualification->get_employee_no_record();

echo "<select name='emp_no' id='emp_no' class='dropdown-select'>";
echo "<option value='0'>View All</option>";
foreach($employee_no_record as $row)
{
echo "<option value='".$row['emp_no']."'>".$row['emp_no']." (".$row['emp_name'].") </option>";
}
echo "</select>";

}

function get_department_no_record()
{

$department_no_record = $this->model_qualification->get_department_no_record();

echo "<select name='dept_no' id='dept_no' class='dropdown-select'>";
echo "<option value='0'>View All</option>";

foreach($department_no_record as $row)
{
echo "<option value='".$row['dept_no']."'>".$row['dept_no']."</option>";
}
echo "</select>";

}




}



?>
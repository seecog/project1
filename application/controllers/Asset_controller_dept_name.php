<?php

class Asset_controller_dept_name extends CI_Controller
{

function __construct()
{
parent::__construct();
$this->load->model('department');
}

function get_department_name_record()
{

$dept_name_record = $this->department->get_department_name_record();
echo "<select name='staff_dept' id='staff_dept' class='dropdown-select'>";
foreach($dept_name_record as $row)
{
echo "<option value='0'>View All</option>";

echo "<option value='".$row['staff_dept']."'>".$row['staff_dept']."</option>";
}
echo "</select>";

}
}
?>
<?php

class employee_register extends CI_model {

    function __Construct() {
        parent:: __Construct();
        $this->load->database();
    }

    function insert_employee_register_record($employee_register_record_array) {
        $status = $this->db->insert('employee_register', $employee_register_record_array);
        return $status;
    }
    
    function update_employee_register_record($id=null,$employee_register_record_array=null)
    {
     $this->db->where('emp_no',$id);   
     $updateStatus=$this->db->update('employee_register',$employee_register_record_array);
     return $updateStatus;
    }

    function get_employee_register_record($emp_no) {

        if ($emp_no == 0) {
//	$query = "select a.emp_no,a.emp_name,a.emp_grade,c.designation_name,d.department_name,a.emp_dob,emp_address,a.emp_contact_no,a.emp_contact_mobile_no,
//	a.emp_emailId,a.emp_join_date,b.emp_image from employee_register a,employee_image b,designation c,department d where a.emp_no=b.emp_no
//	and a.emp_designation=c.designation_id and a.emp_dept=d.department_id ";
//	
            $this->db->select('*');
            $this->db->order_by('emp_no','desc');
            $this->db->from('employee_register');
            //$this->db->join('employee_image','employee_register.emp_no = employee_image.emp_no','left');
            // $this->db->join('employee_qualification','employee_register.emp_no = employee_qualification.emp_no','left');
            //$this->db->join('designation','department.department_id = designation.department_id','left');
            //$this->db->join('employee_department','employee_register.emp_dept = employee_department.dept_no','left');
            $employee_register_record = $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from('employee_register');
            $this->db->where('employee_register.emp_no', $emp_no);
            //$this->db->join('employee_image','employee_register.emp_no = employee_image.emp_no','left');
            // $this->db->join('employee_qualification','employee_register.emp_no = employee_qualification.emp_no','left');
            //$this->db->join('employee_department','employee_register.emp_dept = employee_department.dept_no','left');
            $employee_register_record = $this->db->get();
        }

        return $employee_register_record->result_array();
    }

    function row_count() {
        $count = $this->db->count_all('employee_register');
        return $count;
    }

    function get_employee_image($id = null) {
        $this->db->where(array('emp_no' => $id));
        $imageRecord = $this->db->get('employee_image')->result_array();
        if (isset($imageRecord[0]['emp_image'])) {
            return $imageRecord[0]['emp_image'];
        } else {
            return '';
        }
    }

}

?>
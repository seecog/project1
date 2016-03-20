<?php

class Model_student_enquiry extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_student_enquiry_record($student_enquiry_record) {
        $this->db->insert('student_enquiry', $student_enquiry_record);
        return $this->db->insert_id();
    }

    function get_student_enquiry_record($id=null) {

        if($id)
        {
           $this->db->where(array('enquiry_id'=>$id)); 
        }
        
        $student_enquiry_record = $this->db->get('student_enquiry');
        return $student_enquiry_record->result_array();
    }
    function get_student_enquiry_by_course_period($id=null,$year=null,$month=null)
    {
        $this->db->where(array('enquiry_student_field_of_interest'=>$id));
        $record=$this->db->get('student_enquiry')->result_array();
        return $record;
    }

    function edit_student_enquiry_record($student_enquiry_record) {
        $status = $this->db->get_where('student_enquiry', array('enquiry_id' => $student_enquiry_record));
        $row = $status->row_array();
        return $row;
    }

    function update_student_enquiry_record($enquiry_id, $student_enquiry_record) {
        $this->db->where('enquiry_id', $enquiry_id);
        $status = $this->db->update('student_enquiry', $student_enquiry_record);
        return $status;
    }

    function delete_student_enquiry_record($enquiry_id = null) {
        $this->db->where('enquiry_id', $enquiry_id);
        $deleteStatus = $this->db->delete('student_enquiry');
        return $deleteStatus;
    }

    function total_row_count() {
        $query = $this->db->get('student_enquiry');
        return $query->num_rows();
    }

}

?>
<?php

class Model_employee_attendance extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_employee_attendance_record($employee_attendance_record = null) {
        if (!empty($employee_attendance_record)) {
            $this->db->insert('employee_attendance', $employee_attendance_record);
            return $this->db->insert_id();
        }
    }

    function update_employee_attendance_record($employee_attendance_record = null, $emp_no = null) {
        if (!empty($employee_attendance_record)) {
            $this->db->where(array('emp_no' => $emp_no));
            $this->db->update('employee_attendance', $employee_attendance_record);
            return $this->db->insert_id();
        }
    }

    function get_employee_attendance_record_byDate($id = null, $date = null) {
        $this->db->where(array('emp_no' => $id, 'date' => $date));
        $resultArray = $this->db->get('employee_attendance')->result_array();
        return $resultArray;
    }

    function get_employee_attendance_record($id = null, $criteria = null) {
        if ($id) {
            $this->db->where(array('emp_no' => $id));
        }
        $resultArray = $this->db->get('employee_attendance')->result_array();
        return $resultArray;
    }

    function delete_employee_attendance_record($id = null) {
        if ($id) {
            $this->db->where(array('id' => $id));
            $deleteStatus = $this->db->delete('employee_attendance');
            return $deleteStatus;
        }
    }

}

?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_course extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function update_course_record($id=null,$SRS_course_record=null) {  
        $this->db->where('id',$id);
        return $this->db->update('course',$SRS_course_record);
    }

    function insert_course_record($SRS_course_record=null) {        
        return $this->db->insert('course',$SRS_course_record);
    }
    
    function get_course_record($id = null) {
       
        if ($id) {
            $this->db->where(array('id' => $id));
            $recordArray = $this->db->get('course')->row_array();
        } else {
            $recordArray = $this->db->get('course')->result_array();
        }
        return $recordArray;
    }

    function delete_course_record() {
        
    }

}

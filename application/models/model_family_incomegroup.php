<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_family_incomegroup extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insert_family_incomegroup() {
        
    }

    function get_family_incomegroup($id = null) {
        if ($id) {
            $this->db->where(array('id' => $id));
            $family_incomegroup_record = $this->db->get('family_incomegroup')->row_array();
        } else {
            $family_incomegroup_record = $this->db->get('family_incomegroup')->result_array();
        }
        return $family_incomegroup_record;
    }

    function delete_family_incomegroup($id = null) {
        
    }

    function update_family_incomegroup($id = null) {
        
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_admin extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_admin_record($username = null, $password = null) {
        $this->db->where(array('username' => $username, 'password' => $password));
        $admin_record = $this->db->get('admin')->row_array();
        return $admin_record;
    }
    
    function get_admin_record_by_id($id=null)
    {
        $this->db->where(array('id'=>$id));
        $admin_record=$this->db->get('admin')->row_array();
        return $admin_record;
    }
    

    function change_admin_password($id = null, $old_password = null, $password = null) {
        //echo $id."--".$old_password."--".$password;exit;
        $this->db->where(array('password' => $old_password, 'id' => $id));
        $update_array = array(
            'password' => $password
        );
        $update_status = $this->db->update('admin', $update_array);
        return $update_status;
    }
    
    function update_admin_record($id=null,$admin_record=null)
    {
     $this->db->where(array('id'=>$id));   
     $update_status=$this->db->update('admin',$admin_record);
     return $update_status;
    }

}

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Setting_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    
    function index()
    {
        $data['content'] = "admin/setting/index";
        $this->load->view('include/header', $data);
    }
    
    function setting_change_password()
    {
        $this->load->model('model_admin');
        $admin_record=$this->session->userdata('admin_record');
        if($this->input->post())
        {
            $id=$admin_record['id'];
            $old_password=$this->input->post('old_password');
            $password=$this->input->post('password');
            $update_status=$this->model_admin->change_admin_password($id,$old_password,$password);
            if($update_status)
            {
                $this->session->set_flashdata('message1','Password changed successfully');
            }
            
        }
        $data['content'] = "admin/setting/setting_change_password";
        $this->load->view('include/header', $data);
    }
    
    function setting_change_logo()
    {
        $admin_record=$this->session->userdata('admin_record');     
        $id=$admin_record['id'];
        $this->load->model('model_admin');
        
        if($this->input->post())
        {
            //unlink old image start
            $admin_record = $this->model_admin->get_admin_record_by_id($id);
            $site_logo = $admin_record['site_logo'];
            if($site_logo)
            {
            unlink('hrms/images/company_logo/'.$site_logo);     
            }
            //unlink old image end
            
            $site_logo_temp = $_FILES['site_logo']['tmp_name'];
            $site_logo = $_FILES['site_logo']['name'];
            $stt = move_uploaded_file($site_logo_temp, 'hrms/images/company_logo/' . $site_logo);         
            if($stt)
            {
                $updateArray = array(
                    'site_logo'=>$site_logo
                );
               $updateStatus=$this->model_admin->update_admin_record($id,$updateArray);
               $this->session->set_flashdata('image_change_message','Logo has been successfully changed');
            }
        }
        
        $data['content'] = "admin/setting/setting_change_logo";
        $this->load->view('include/header', $data);
    }
    
    
    
    
}
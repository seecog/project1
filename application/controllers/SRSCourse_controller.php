<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SRSCourse_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_course');
        $this->load->helper('url');
        $this->load->library('session');
    }

    function get_course_record($id = null) {

        $data['course_record'] = $this->model_course->get_course_record($id);
        $data['content'] = "admin/SRS/SRS_get_course_record";
        $this->load->view('include/header', $data);
    }

    function graph_course_record($id = null) {
        $this->load->model('model_student_enquiry');
        $studentCount=$this->model_student_enquiry->get_student_enquiry_by_course_period($id);
        print_r($studentCount);exit;
        $data['content'] = "admin/SRS/graph_course_record";
        $this->load->view('include/header', $data);
    }

    function course_record($id = null) {
        if ($this->input->post()) {
            $SRS_course_record = array(
                'course_name' => $this->input->post('course_name'),
                'course_fee' => $this->input->post('course_fee'),
                'course_des' => $this->input->post('course_des')
            );
            $submit_button = $this->input->post('submit_button');
            if ($submit_button == 'Add Record') {
                $insertStatus = $this->model_course->insert_course_record($SRS_course_record);
                if ($insertStatus) {
                    redirect('get_course_record');
                }
            } else {
                $id = $this->input->post('id');
                $updateStatus = $this->model_course->update_course_record($id, $SRS_course_record);
                if ($updateStatus) {
                    redirect('get_course_record');
                }
            }
        }

        if ($id) {
            $data['course_record'] = $this->model_course->get_course_record($id);
            $data['btnText'] = 'Edit Record';
            $data['formId'] = 'editForm';
        } else {
            $data['btnText'] = 'Add Record';
            $data['formId'] = 'addForm';
        }
        $data['content'] = "admin/SRS/SRS_course_record";
        $this->load->view('include/header', $data);
    }

}

<?php

class SRS_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_student_enquiry');
        $this->load->helper('url');
        $this->load->library('session');
    }

    function SRS_experience_letter() {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $data['content'] = "admin/SRS/SRS_experience_letter";
        $this->load->view('include/header', $data);
    }
    
    function SRS_enquiry_form_sendemail($id=null)
    {
        $this->load->model('model_student_enquiry');
        $data['student_record']=$student_record=$this->model_student_enquiry->get_student_enquiry_record($id);
        $data['emp_emailId']=$student_record[0]['enquiry_student_email'];
        $data['content'] = "admin/SRS/SRS_enquiry_form_sendemail";
        $this->load->view('include/header', $data);
    }

    function SRS_personal_detail() {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $data['content'] = "admin/SRS/SRS_personal_detail";
        $this->load->view('include/header', $data);
    }

    function SRS_relievingLetter() {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $data['content'] = "admin/SRS/SRS_relievingLetter";
        $this->load->view('include/header', $data);
    }

    function SRS_enquiry_form_list($id = null) {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $this->load->model('model_course');
       // $this->load->library('pagination');
        $this->load->library('session');
        $this->load->helper('url');

//        $config['base_url'] = base_url() . '/index.php/SRS_enquiry_form_list/';
//        $row_count = $config['total_rows'] = $this->model_student_enquiry->total_row_count();
//        $config['per_page'] = 4;
//        $config['uri_segment'] = 2;
//        $this->pagination->initialize($config);
//        $data['links'] = $this->pagination->create_links();
       // $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['student_enquiry_record'] = $this->model_student_enquiry->get_student_enquiry_record();
        $data['content'] = "admin/SRS/SRS_enquiry_form_list";
        $this->load->view('include/header', $data);
    }

    function SRS_enquiry_form_certificate($id = null) {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $this->load->model('model_course');
        $this->load->model('model_student_enquiry');
        $data['student_record']=$this->model_student_enquiry->get_student_enquiry_record($id);
        $data['content'] = "admin/SRS/SRS_enquiry_form_certificate";
        $this->load->view('include/header', $data);
    }

    function SRS_enquiry_form($id = null) {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        if ($this->input->post()) {
            $student_enquiry_record = array(
                'enquiry_date' => date('y-m-d'),
                'enquiry_student_name' => $this->input->post('enquiry_student_name'),
                'enquiry_student_address' => $this->input->post('enquiry_student_address'),
                'enquiry_student_pin_no' => $this->input->post('enquiry_student_pin_no'),
                'enquiry_student_residence_no' => $this->input->post('enquiry_student_residence_no'),
                'enquiry_student_office_no' => $this->input->post('enquiry_student_office_no'),
                'enquiry_student_mobile_no' => $this->input->post('enquiry_student_mobile_no'),
                'enquiry_student_dob' => $this->input->post('enquiry_student_dob'),
                'enquiry_student_age' => $this->input->post('enquiry_student_age'),
                'enquiry_student_email' => $this->input->post('enquiry_student_email'),
                'enquiry_student_ssc' => $this->input->post('enquiry_student_ssc'),
                'enquiry_student_ssc_percent' => $this->input->post('enquiry_student_ssc_percent'),
                'enquiry_student_hsc' => $this->input->post('enquiry_student_hsc'),
                'enquiry_student_hsc_percent' => $this->input->post('enquiry_student_hsc_percent'),
                'enquiry_student_family_income' => $this->input->post('enquiry_student_family_income'),
                'enquiry_student_field_of_interest' => $this->input->post('enquiry_student_field_of_interest'),
                'enquiry_student_father_name' => $this->input->post('enquiry_student_father_name'),
                'enquiry_student_father_age' => $this->input->post('enquiry_student_father_age'),
                'enquiry_student_father_edu' => $this->input->post('enquiry_student_father_edu'),
                'enquiry_student_father_occ' => $this->input->post('enquiry_student_father_occ'),
                'enquiry_student_father_contact' => $this->input->post('enquiry_student_father_contact'),
                'enquiry_student_brother_sister_name' => $this->input->post('enquiry_student_brother_sister_name'),
                'enquiry_student_brother_sister_age' => $this->input->post('enquiry_student_brother_sister_age'),
                'enquiry_student_brother_sister_edu' => $this->input->post('enquiry_student_brother_sister_edu'),
                'enquiry_student_brother_sister_occ' => $this->input->post('enquiry_student_brother_sister_occ'),
                'enquiry_student_brother_sister_contact' => $this->input->post('enquiry_student_brother_sister_contact'),
                'enquiry_student_uncle_name' => $this->input->post('enquiry_student_uncle_name'),
                'enquiry_student_uncle_age' => $this->input->post('enquiry_student_uncle_age'),
                'enquiry_student_uncle_edu' => $this->input->post('enquiry_student_uncle_edu'),
                'enquiry_student_uncle_occ' => $this->input->post('enquiry_student_uncle_occ'),
                'enquiry_student_uncle_contact' => $this->input->post('enquiry_student_uncle_contact'),
                'enquiry_student_aunty_name' => $this->input->post('enquiry_student_aunty_name'),
                'enquiry_student_aunty_age' => $this->input->post('enquiry_student_aunty_age'),
                'enquiry_student_aunty_edu' => $this->input->post('enquiry_student_aunty_edu'),
                'enquiry_student_aunty_occ' => $this->input->post('enquiry_student_aunty_occ'),
                'enquiry_student_aunty_contact' => $this->input->post('enquiry_student_aunty_contact'),
                'enquiry_student_ref_1_name' => $this->input->post('enquiry_student_ref_1_name'),
                'enquiry_student_ref_1_quali' => $this->input->post('enquiry_student_ref_1_quali'),
                'enquiry_student_ref_1_contact' => $this->input->post('enquiry_student_ref_1_contact'),
                'enquiry_student_ref_2_name' => $this->input->post('enquiry_student_ref_2_name'),
                'enquiry_student_ref_2_quali' => $this->input->post('enquiry_student_ref_2_quali'),
                'enquiry_student_ref_2_contact' => $this->input->post('enquiry_student_ref_2_contact'),
                'enquiry_Remarks' => $this->input->post('enquiry_Remarks'),
                'enquiry_counsellers_name' => $this->input->post('enquiry_counsellers_name')
            );
            $btnText = $this->input->post('SRS_enquiry_form_button');
            if ($btnText == 'Edit') {
                $enquiry_id = $this->input->post('enquiry_id');
                $actionStt = $this->model_student_enquiry->update_student_enquiry_record($enquiry_id, $student_enquiry_record);
            } else {
                $actionStt = $this->model_student_enquiry->insert_student_enquiry_record($student_enquiry_record);
            }
            if ($actionStt) {
                redirect('SRS_enquiry_form_list');
            }
        } else {
            if ($id) {
                $this->load->model('Model_course');
                $this->load->model('Model_family_incomegroup');
                $data['family_incomegroup_record'] = $this->Model_family_incomegroup->get_family_incomegroup();
                $data['course_record'] = $this->Model_course->get_course_record();
                $data['student_enquiry_record'] = $this->model_student_enquiry->edit_student_enquiry_record($id);
                $data['btnText'] = "Edit";
            } else {
                $this->load->model('Model_course');
                $this->load->model('Model_family_incomegroup');
                $data['course_record'] = $this->Model_course->get_course_record();
                $data['family_incomegroup_record'] = $this->Model_family_incomegroup->get_family_incomegroup();
                $data['btnText'] = "Save";
            }
            $data['content'] = "admin/SRS/SRS_enquiry_form";
            $this->load->view('include/header', $data);
        }
    }

    function SRS_enquiry_form_delete($enq_id = null) {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }
        $deleteStatus = $this->model_student_enquiry->delete_student_enquiry_record($enq_id);
        $this->load->library('session');
        $this->session->set_flashdata('deleted', 'record sucessfully deleted');
        redirect('SRS_enquiry_form_list');
    }

}

?>
	
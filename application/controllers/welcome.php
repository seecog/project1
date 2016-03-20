<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('employee_register');
        $this->load->model('employee_department');
        $this->load->model('model_qualification');
        $this->load->model('model_designation');
        $this->load->model('model_employee_image');
        $this->load->model('model_employee_qualification');
        $this->load->model('model_department');
        $this->load->helper('url');
        $this->load->library('session');
    }

    function index() {

        $data['content'] = "admin/login";
        $this->load->view('include/header', $data);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('welcome/after_login');
    }

    function pdf($emp_no = null) {
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $this->load->helper('pdf_helper');
        $this->load->view('admin/pdf', $data);
    }

    function icard_pdf($emp_no = null) {
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $this->load->helper('pdf_helper');
        $this->load->view('admin/icard_pdf', $data);
    }

    function payslip_pdf($emp_no = null) {
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['emp_no'] = $employee_register_record[0]['emp_no'];
        $emp_salary = $employee_register_record[0]['emp_salary'];
        $data['emp_salary'] = $emp_salary;
        $data['professional_tax'] = 200;
        $data['deduction'] = 200;
        $data['net_salary'] = $emp_salary - 200;
        $this->load->helper('pdf_helper');


        $this->load->view('admin/payslip_pdf', $data);
    }

    function HR_check_login() {
        $username = $this->input->post('admin_user');
        $password = $this->input->post('admin_pass');
        $this->load->model('model_admin');
        $admin_record=$this->model_admin->get_admin_record($username,$password);
        
        if (!empty($admin_record)) {
            $this->session->set_userdata('loginStatus', 1);
            $this->session->set_userdata('admin_record',$admin_record);
            redirect('welcome/after_login');
        } else {
            $this->session->set_flashdata('message', '<font color="red">Username and password do not match !!</font>');
            redirect();
        }
    }

    function after_login() {
        if ($this->session->userdata('loginStatus')) {
            
        } else {
            redirect();
        }

        $data['content'] = "admin/after_login";
        $this->load->view('include/header', $data);
    }

    function HR_personal_details_view($id = null) {
        $this->db->where(array('emp_no' => $id));
        $employee_register_record = $this->db->get('employee_register')->row_array();
        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_personal_details_view";
        $this->load->view('include/header', $data);
    }

    function HR_personal_details($id = null) {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        if ($this->input->post()) {

            $tmp_name = $_FILES['emp_image']['tmp_name'];
            $real_name = $_FILES['emp_image']['name'];
            if (!empty($tmp_name)) {
                $stt = move_uploaded_file($tmp_name, 'hrms/images/emp_image/' . $real_name);
            }
            $emp_name = $this->input->post('emp_name');
            $emp_contact_no = $this->input->post('emp_contact_no');
            $emp_dob = $this->input->post('emp_dob');
            $emp_left_date = $this->input->post('emp_left_date');
            $emp_join_date = $this->input->post('emp_join_date');
            $emp_address = $this->input->post('emp_address');
            $emp_contact_no_office = $this->input->post('emp_contact_no_office');
            $emp_contact_mobile_no = $this->input->post('emp_contact_mobile_no');
            $emp_emailId = $this->input->post('emp_emailId');
            $emp_department = $this->input->post('emp_dept');
            $emp_designation = $this->input->post('emp_designation');
            $emp_salary = $this->input->post('emp_salary');

            $employee_register_record_array = array(
                'emp_name' => $emp_name,
                'emp_contact_no' => $emp_contact_no,
                'emp_dob' => $emp_dob,
                'emp_left_date' => $emp_left_date,
                'emp_join_date' => $emp_join_date,
                'emp_address' => $emp_address,
                'emp_contact_no_office' => $emp_contact_no_office,
                'emp_contact_mobile_no' => $emp_contact_mobile_no,
                'emp_emailId' => $emp_emailId,
                'emp_dept' => $emp_department,
                'emp_designation' => $emp_designation,
                'emp_salary ' => $emp_salary
            );
            if ($this->input->post('hr_personal_details_button') == 'Save Record') {
                $image_array = array(
                    'emp_image' => $real_name
                );
                $employee_register_record_array = array_merge($employee_register_record_array, $image_array);
                $status = $this->employee_register->insert_employee_register_record($employee_register_record_array);
                if ($status) {
                    $this->session->set_flashdata('message', '<font face="times new roman" size="3" color="green">Saved sucessfully</font>');
                    redirect('HR_employee_register_2');
                }
            } else {
                if ($real_name) {
                    $image_array = array(
                        'emp_image' => $real_name
                    );
                    $employee_register_record_array = array_merge($employee_register_record_array, $image_array);
                }

                $status = $this->employee_register->update_employee_register_record($this->input->post('emp_no'), $employee_register_record_array);
                if ($status) {
                    $id = $this->input->post('emp_no');
                }
            }
        }

        if ($id) {
            $this->db->where(array('emp_no' => $id));
            $employee_register_record = $this->db->get('employee_register')->row_array();
            $data['employee_register_record'] = $employee_register_record;
            $data['btnText'] = 'Edit Record';
        } else {
            $data['employee_register_record'] = array();
            $data['btnText'] = 'Save Record';
        }
        $data['message'] = $this->session->flashdata('message');
        $data['content'] = "admin/HR_personal_details";
        $this->load->view('include/header', $data);
    }

    function HR_personal_details_delete($id = null) {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $this->db->where(array('emp_no' => $id));
        $deleteStatus = $this->db->delete('employee_register');
        redirect('welcome/HR_employee_register_2');
    }

    function HR_personal_details_edit1($emp_no) {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_personal_details_edit1";
        $this->load->view('include/header', $data);
    }

    function HR_personal_details_sendemail($emp_no = null) {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_personal_details_sendemail.php";
        $this->load->view('include/header', $data);
    }

    function HR_personal_details_sendemail2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $mail_content = $this->input->post('mail_content');
        $email_to = $this->input->post('email_to');
        // echo "sending email" . $mail_content." ".$email_to;exit;

        $admin_mail = "pankaj.7613@gmail.com";

        $subject = "Message from CEDP";
        $to = $email_to;
        $from = 'pankaj.76131@gmail.com';

        //data
        $message = $mail_content;

        //Headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: <" . $from . ">";

        $status = mail($to, $subject, $message, $headers);
        if ($status) {
            echo '1';
        }
    }

    function HR_Qualification() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $employee_qualification_record = $this->model_employee_qualification->get_employee_qualification_record($this->input->post('emp_no'));
        $data['employee_qualification_record'] = $employee_qualification_record;
        $data['emp_no'] = $this->input->post('emp_no');
        $data['content'] = "admin/HR_Qualification";
        $this->load->view('include/header', $data);
    }

    function HR_Qualification_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $count = $this->employee_register->row_count();
        $count = $count;
        $emp_no = $this->input->post('emp_no');
        $emp_qual = $this->input->post('emp_qual');
        $desc = $this->input->post('desc');

        $employee_qualification_record_array = array(
            'emp_no' => $count,
            'emp_qual' => $emp_qual,
            'desc' => $desc
        );

        $status = $this->model_employee_qualification->insert_employee_qualification_record($employee_qualification_record_array);

        if ($status) {

            $employee_qualification_record = $this->model_employee_qualification->get_employee_qualification_record($count);

            echo "<table width='75%' border='1'>";
            echo "<th>Employee qualification</th><th>Year of passing</th>";

            foreach ($employee_qualification_record as $row) {

                echo "<tr><td align='center'><font face='times new roman' size='3'>" . $row['emp_qual'] . "</font></td>
<td align='center'><font face='times new roman' size='3'>" . $row['desc'] . "</font></td></tr>";
            }
            echo "</table>";
        }
    }

    function get_employee_qualification_record() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $count = $this->input->post('emp_no') + 1;
        $employee_qualification_record = $this->model_employee_qualification->get_employee_qualification_record($count);

        echo "<table width='75%' border='0'>";
        echo "<th><font face='georgia' size='3'>Employee qualification</font>"
        . "</th><th><font face='georgia' size='3'>Year of passing</font></th>";

        foreach ($employee_qualification_record as $row) {

            echo "<tr><td align='center'><font face='times new roman' size='3'>" . $row['emp_qual'] . "</font></td>
<td align='center'><font face='times new roman' size='3'>" . $row['desc'] . "</font></td></tr>";
        }
        echo "</table>";
    }

    function HR_employee_register_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_employee_register_1";
        $this->load->view('include/header', $data);
    }

    function HR_payslip() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_payslip_1";
        $this->load->view('include/header', $data);
    }

    function HR_payslip_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $emp_no = $this->input->post('emp_no');
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['emp_no'] = $employee_register_record[0]['emp_no'];
        $emp_salary = $employee_register_record[0]['emp_salary'];
        $data['emp_salary'] = $emp_salary;
        $data['professional_tax'] = 200;
        $data['deduction'] = 200;
        $data['net_salary'] = $emp_salary - 200;
        $this->load->view("admin/HR_payslip_2", $data);
    }

    function get_employee_register_record() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }


        $employee_register_record = $this->employee_register->get_employee_register_record(null);

        foreach ($employee_register_record as $row) {
            echo "<option value='" . $row['emp_no'] . "'>" . $row['emp_name'] . "</option>";
        }
    }

    function HR_employee_register_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $this->load->model('model_designation');
        $emp_no = $this->input->post('emp_no');

        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);

        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_employee_register_2";
        $this->load->view('include/header', $data);
    }

    function HR_Id_card_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_Id_card_1";
        $this->load->view('include/header', $data);
    }

    function HR_Id_card_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $emp_no = $this->input->post('emp_no');
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);

        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_Id_card_2";
        $this->load->view('include/header', $data);
    }

    function HR_offerletter_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_offerletter_1";
        $this->load->view('include/header', $data);
    }

    function HR_experience_letter_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_experience_letter_1";
        $this->load->view('include/header', $data);
    }

    function HR_experience_letter_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $emp_no = $this->input->post('emp_no');
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_experience_letter_2";
        $this->load->view('include/header', $data);
    }

    function HR_offerletter_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $emp_no = $this->input->post('emp_no');
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $data['content'] = "admin/HR_offerletter_2";
        $this->load->view('include/header', $data);
    }

    function HR_appointmentletter_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/HR_appointmentletter_1";
        $this->load->view('include/header', $data);
    }

    function HR_appointmentletter_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $emp_no = $this->input->post('emp_no');
        $employee_register_record = $this->employee_register->get_employee_register_record($emp_no);
        $data['employee_register_record'] = $employee_register_record;
        $this->load->view("admin/HR_appointmentletter_2", $data);
    }

    function HR_department_1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $count = $this->employee_department->row_count();
        $department_record = $this->model_department->get_department_record();
        $data['department_record '] = $department_record;
        $data['count'] = $count;

        $data['content'] = "admin/HR_department_1";
        $this->load->view('include/header', $data);
    }

    function get_department_list() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $department_record = $this->model_department->get_department_record();

        $data['department_record'] = $department_record;

        $this->load->view('admin/get_department_list', $data);
    }

    function deleteDepartment1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $this->load->model('model_department');
        $department_id = $this->input->post('department_id');
        $status = $this->model_department->delete_department_record($department_id);
        if ($status) {
            redirect(base_url() . 'index.php/get_department_list');
        }
    }

    function addDesignation1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $department_id = $this->input->post('department_id');
        $this->load->model('model_department');
        $department_record = $this->model_department->get_department_record_by_id($department_id);
        $data['department_record'] = $department_record;
        $this->load->view('admin/addDesignation1', $data);
    }

    function add_designation_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $department_id = $this->input->post('department_id');
        $designation_name = $this->input->post('designation_name');
        $this->load->model('model_designation');
        $form_data = array(
            'department_id' => $department_id,
            'designation_name' => htmlentities($designation_name)
        );
        $add_status = $this->model_designation->add_designation_record($form_data);
        if ($add_status) {
            redirect(base_url() . 'index.php/get_designation_list/' . $department_id);
        }
    }

    function get_designation_list($department_id = null) {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $this->load->model('model_designation');
        $designation_record = $this->model_designation->get_designation_record($department_id);
        $data['designation_record'] = $designation_record;
        $this->load->view('admin/get_designation_list', $data);
    }

    function deleteDesignation1() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $this->load->model('model_designation');
        $department_id = $this->input->post('department_id');
        $designation_id = $this->input->post('designation_id');
        $delete_status = $this->model_designation->delete_designation_record($designation_id);
        if ($delete_status) {
            redirect(base_url() . 'index.php/get_designation_list/' . $department_id);
        }
    }

    function HR_department_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $dept_no = $this->input->post('dept_no');
        $dept_name = $this->input->post('dept_name');

        $department_record = array('department_name' => $dept_name);
        $stt = $this->model_department->insert_department_record($department_record);

        if ($stt) {
            $department_record = $this->model_department->get_department_record();
        } else {
            echo "record not inserted";
        }

        $data['department_record'] = $department_record;
        echo "<table width='75%'>";
        echo "<tr><td align='center'><font face='times new roman' size='3' color='red'>Department Id</td><td align='left'><font face='times new roman' size='3' color='red'>Department Name</td> <td align='left'><font face='times new roman' size='3' color='red'>Action Performed</td></tr>";
        foreach ($department_record as $row) {
            echo "<tr><td align='center'><font face='times new roman' size='3'>" . $row['department_id'] . "</font></td><td align='left'><font face='times new roman' size='3'>" . $row['department_name'] . "</font></td><td><font face='times new roman' size='3'><a href='' class='propertyBtn propertyBtn-blue'>Manage Designation</a> | <a href='' class='propertyBtn propertyBtn-blue'>Delete</a></font></td></tr>";
        }
        echo "</table>";
    }

    function HR_department_1_2() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $count = $this->employee_department->row_count();
        $count = $count + 1;

        $dept_name = $this->input->post('dept_name');
        $dept_loc = $this->input->post('dept_loc');


        $employee_department_record_array = array('dept_no' => $count,
            'dept_name' => $dept_name,
            'dept_loc' => $dept_loc
        );



        $status = $this->employee_department->insert_employee_department_record($employee_department_record_array);

        if ($status) {
            /* $employee_register_record= $this->student->get_student_record(null);
              $data['student_record']=$student_record;
              $this->load->view('student_list',$data); */
            echo "record inserted successfully";
            print_r($employee_department_record_array);
        } else {
            echo "record not inserted successfully";
        }
    }

    function admin_module_employee_login() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/admin_module_employee_login";
        $this->load->view('include/header', $data);
    }

    function admin_module_change_password() {
        if (!$this->session->userdata('loginStatus')) {
            redirect();
        }

        $data['content'] = "admin/admin_module_change_password";
        $this->load->view('include/header', $data);
    }

    function projectmodule_projectemaster() {
        $data['content'] = "admin/projectmodule_projectemaster";
        $this->load->view('include/header', $data);
    }

    function projectmodule_employeemapping() {
        $data['content'] = "admin/projectmodule_employeemapping";
        $this->load->view('include/header', $data);
    }

    function projectmodule_project_Register() {
        $data['content'] = "admin/projectmodule_project_Register";
        $this->load->view('include/header', $data);
    }

    function payroll_module_dailyattendence($id = null, $date = null) {
        $this->load->model('model_employee_attendance');
        if ($id) {
            $this->db->where(array('emp_no' => $id, 'date' => $date));
            $employee_record = $this->db->get('employee_attendance')->row_array();
            $data['employee_record'] = $employee_record;
            $data['buttonText'] = 'Edit';
        } else {

            $data['buttonText'] = 'Save';
        }

        if ($this->input->post()) {
            $buttonText = $this->input->post('buttonText');

            if ($buttonText == 'Save') {
                $loginArray = array(
                    'emp_no' => $this->input->post('emp_no'),
                    'date' => date('y-m-d'),
                    'logInTime' => $this->input->post('logInTime'),
                    'logInType' => $this->input->post('logInType'),
                    'logOutTime' => $this->input->post('logOutTime'),
                    'logOutType' => $this->input->post('logOutType')
                );

                $employee_attendance_record = $this->model_employee_attendance->get_employee_attendance_record_byDate($this->input->post('emp_no'), date('y-m-d'));
                if (empty($employee_attendance_record)) {
                    $insertStatus = $this->model_employee_attendance->insert_employee_attendance_record($loginArray);
                    $data['status'] = 1;
                } else {
                    $data['status'] = 3;
                }
            } else {
                $loginArray = array(
                    'emp_no' => $this->input->post('emp_no'),
                    'date' => date('y-m-d'),
                    'logInTime' => $this->input->post('logInTime'),
                    'logInType' => $this->input->post('logInType'),
                    'logOutTime' => $this->input->post('logOutTime'),
                    'logOutType' => $this->input->post('logOutType')
                );
                $updateStatus = $this->model_employee_attendance->update_employee_attendance_record($loginArray, $this->input->post('emp_no'));
                $data['status'] = 2;
            }
        }
        $employee_no_record = $this->model_qualification->get_employee_no_record();
        $data['employee_no_record'] = $employee_no_record;

        $data['content'] = "admin/payroll_module_dailyattendence";
        $this->load->view('include/header', $data);
    }

    function payroll_module_dailyattendence_list($id = null) {
        $this->load->model('model_employee_attendance');
        $employee_attendance_record = $this->model_employee_attendance->get_employee_attendance_record();
        $data['employee_attendance_record'] = $employee_attendance_record;
        $data['content'] = "admin/payroll_module_dailyattendence_list";
        $this->load->view('include/header', $data);
    }

    function SRS_enquiry_form_delete($id = null) {

        $this->load->model('model_employee_attendance');
        $deleteStatus = $this->model_employee_attendance->delete_employee_attendance_record($id);
        if ($deleteStatus) {
            redirect('payroll_module_dailyattendence_list');
        }
    }

    function payroll_module_dailyattendence_2() {
        $this->load->model('model_employee_attendance');
        $loginArray = array(
            'emp_no' => $this->input->post('emp_no'),
            'date' => date('y-m-d'),
            'logIn' => $this->input->post('logIn'),
            'logOut' => $this->input->post('logOut')
        );

        $insertStatus = $this->model_employee_attendance->insert_employee_attendance_record($loginArray);
        if ($insertStatus) {
            
        }
    }

    function payroll_module_paysetup() {
        $data['content'] = "admin/payroll_module_paysetup";
        $this->load->view('include/header', $data);
    }

    function payroll_module_calculate_salary() {
        $data['content'] = "admin/payroll_module_calculate_salary";
        $this->load->view('include/header', $data);
    }

    function payroll_module_payslip() {
        $data['content'] = "admin/payroll_module_payslip";
        $this->load->view('include/header', $data);
    }

    function payroll_module_salaryregister() {
        $data['content'] = "admin/payroll_module_salaryregister";
        $this->load->view('include/header', $data);
    }

    function payroll_incrementhistory() {
        $data['content'] = "admin/payroll_incrementhistory";
        $this->load->view('include/header', $data);
    }

    function HR_find_employee() {
        $data['content'] = "admin/HR_find_employee";
        $this->load->view('include/header', $data);
    }

    function payroll_module_payslipregister() {
        $data['content'] = "admin/payroll_module_payslipregister";
        $this->load->view('include/header', $data);
    }

    function payroll_module_pay_register() {
        $data['content'] = "admin/payroll_module_pay_register";
        $this->load->view('include/header', $data);
    }

    function payroll_increment_history_register() {
        $data['content'] = "admin/payroll_increment_history_register";
        $this->load->view('include/header', $data);
    }

}

?>

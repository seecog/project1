<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "welcome";

$route['404_override'] = '';
$route['settingmain']='Setting_controller/index';
$route['setting_change_password']='Setting_controller/setting_change_password';
$route['setting_change_logo']='Setting_controller/setting_change_logo';
$route['after_login']='welcome/after_login';
$route['pdf/(:any)']='welcome/pdf/$1';
$route['payslip_pdf/(:any)']='welcome/payslip_pdf/$1';
$route['icard_pdf/(:any)']='welcome/icard_pdf/$1';
$route['logout'] = 'welcome/logout';
$route['HR_check_login'] = 'welcome/HR_check_login';
$route['emp_image_upload'] = 'welcome/emp_image_upload';
$route['get_department_list'] = 'welcome/get_department_list';
$route['deleteDepartment1'] = 'welcome/deleteDepartment1';
$route['addDesignation1'] = 'welcome/addDesignation1';
$route['add_designation_2'] = 'welcome/add_designation_2';
$route['get_designation_list/(:any)'] = 'welcome/get_designation_list/$1';
$route['deleteDesignation1'] = 'welcome/deleteDesignation1';

$route['get_qualification_record'] = 'HR_controller_qualification/get_qualification_record';
$route['get_employee_qualification_record'] = 'HR_controller_qualification/get_employee_qualification_record';

$route['get_department_record'] = 'HR_controller_department/get_department_record';
$route['get_designation_record'] = 'HR_controller_designation/get_designation_record';
$route['HR_personal_details_sendemail/(:any)'] = 'welcome/HR_personal_details_sendemail/$1';
$route['HR_personal_details_sendemail2'] = 'welcome/HR_personal_details_sendemail2';

$route['get_employee_no_record'] = 'HR_controller_employee_no/get_employee_no_record';
$route['get_department_no_record'] = 'HR_controller_employee_no/get_department_no_record';

$route['HR_personal_details/(:any)']='welcome/HR_personal_details/$1';
$route['HR_personal_details_view/(:any)']='welcome/HR_personal_details_view/$1';
$route['HR_personal_details_delete/(:any)']='welcome/HR_personal_details_delete/$1';
$route['HR_personal_details']='welcome/HR_personal_details';
$route['HR_personal_details_2'] = 'welcome/HR_personal_details_2';
$route['HR_payslip'] = 'welcome/HR_payslip';
$route['HR_payslip_2'] = 'welcome/HR_payslip_2';

$route['HR_personal_details_edit1/(:any)'] = 'welcome/HR_personal_details_edit1/$1';

$route['HR_Qualification_list']='welcome/HR_controller_qualification';
$route['HR_Qualification/(:any)']='welcome/HR_Qualification/$1';
$route['HR_Qualification_2']='welcome/HR_Qualification_2';
$route['get_employee_qualification_record']='welcome/get_employee_qualification_record';
$route['HR_employee_register_1']='welcome/HR_employee_register_1';
$route['HR_employee_register_2']='welcome/HR_employee_register_2';
$route['get_employee_register_record']= 'welcome/get_employee_register_record';
$route['HR_Id_card_1']='welcome/HR_Id_card_1';
$route['HR_Id_card_2']='welcome/HR_Id_card_2';
$route['HR_offerletter_1']='welcome/HR_offerletter_1';
$route['HR_offerletter_2']='welcome/HR_offerletter_2';
$route['HR_appointmentletter_1']='welcome/HR_appointmentletter_1';

$route['HR_appointmentletter_2']='welcome/HR_appointmentletter_2';

$route['HR_experience_letter_1']='welcome/HR_experience_letter_1';
$route['HR_experience_letter_2']='welcome/HR_experience_letter_2';
$route['HR_department_1']='welcome/HR_department_1';
$route['HR_department_2']='welcome/HR_department_2';
$route['HR_department_1_2']='welcome/HR_department_1_2';

$route['HR_Employee_history']='welcome/HR_Employee_history';
$route['admin_module_employee_login']='welcome/admin_module_employee_login';
$route['admin_module_change_password']='welcome/admin_module_change_password';
$route['projectmodule_projectemaster']='welcome/projectmodule_projectemaster';
$route['projectmodule_employeemapping']='welcome/projectmodule_employeemapping';
$route['projectmodule_project_Register']='welcome/projectmodule_project_Register';
$route['payroll_module_dailyattendence/(:any)']='welcome/payroll_module_dailyattendence/$1';

$route['payroll_module_dailyattendence_list']='welcome/payroll_module_dailyattendence_list';

$route['payroll_module_dailyattendence_2'] = 'welcome/payroll_module_dailyattendence_2';
$route['payroll_module_paysetup']='welcome/payroll_module_paysetup';
$route['payroll_module_calculate_salary']='welcome/payroll_module_calculate_salary';
$route['payroll_module_payslip']='welcome/payroll_module_payslip';
$route['payroll_module_salaryregister']='welcome/payroll_module_salaryregister';
$route['HR_department_2']='welcome/HR_department_2';

$route['HR_find_employee']='welcome/HR_find_employee';
$route['payroll_module_payslipregister']='welcome/payroll_module_payslipregister';
$route['payroll_module_pay_register']='welcome/payroll_module_pay_register';
$route['payroll_incrementhistory']='welcome/payroll_incrementhistory';
$route['payroll_increment_history_register']='welcome/payroll_increment_history_register';
















//-------------------------------------------------asset management system-------------------------------------------------------------





$route['login']="asset/login";
$route['after_login']="asset/after_login";
$route['room']="asset/room";
$route['asset_register']="asset/asset_register";
$route['issue_asset']="asset/issue_asset";
$route['department']="asset/department";
$route['image']="asset/image";
$route['receive_asset']="asset/receive_asset";
$route['Asset_type']="asset/Asset_type";
$route['change_password']="asset/change_password";
$route['manage_asset']="asset/manage_asset";
$route['manage_staff']="asset/manage_staff";
$route['forgot_password']="asset/forgot_password";


//--------------------------------student---------------------------------------------------------------------

$route['graph_course_record/(:any)'] = "SRSCourse_controller/graph_course_record/$1";
$route['course_record'] = "SRSCourse_controller/course_record";
$route['course_record/(:any)'] = "SRSCourse_controller/course_record/$1";
$route['get_course_record'] = "SRSCourse_controller/get_course_record";
$route['get_course_record/(:any)'] = "SRSCourse_controller/get_course_record/$1";
$route['SRS_enquiry_form_sendemail/(:any)'] = "SRS_controller/SRS_enquiry_form_sendemail/$1";
$route['SRS_enquiry_form_edit/(:any)'] = "SRS_controller/SRS_enquiry_form_edit/$1";
$route['SRS_enquiry_form_delete/(:any)']="SRS_controller/SRS_enquiry_form_delete/$1";
$route['SRS_enquiry_form_certificate/(:any)']="SRS_controller/SRS_enquiry_form_certificate/$1";
$route['SRS_personal_detail']="SRS_controller/SRS_personal_detail";
$route['SRS_experience_letter']="SRS_controller/SRS_experience_letter";
$route['SRS_relievingLetter']="SRS_controller/SRS_relievingLetter";
$route['SRS_enquiry_form']="SRS_controller/SRS_enquiry_form";
$route['SRS_enquiry_form/(:any)']="SRS_controller/SRS_enquiry_form/$1";
$route['SRS_enquiry_form_list/(:any)']="SRS_controller/SRS_enquiry_form_list/$1";
$route['SRS_enquiry_form_list']="SRS_controller/SRS_enquiry_form_list/$1";
$route['insert_student_enquiry_record'] = "SRS_controller/insert_student_enquiry_record";
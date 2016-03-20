<?php
class asset extends CI_Controller
{
function __construct()
	{
	parent::__construct();
	$this->load->model('manage_staff');
	$this->load->model('Asset_type');
	$this->load->model('model_department');
	$this->load->model('room');
	$this->load->model('manage_asset');
	$this->load->model('department');

	}

function after_login()
{
$data['content']="admin/asset/after_login";
$this->load->view('include/header',$data);
}


function login()
{
$data['content']="admin/login";
$this->load->view('include/header',$data);
}
function issue_asset()
{
$data['content']="admin/issue_asset";
$this->load->view('include/header',$data);
}
function image()
{
$this->load->view('admin/image');
}
function asset_register()
{
$data['content']="admin/asset_register";
$this->load->view('include/header',$data);
}
function forgot_password()
{
$data['content']="admin/forgot_password";
$this->load->view('include/header',$data);
}
function manage_asset()
{

$count = $this->manage_asset->row_count();
			// echo "<h1>".$count."</h1>";
		$data['count']=$count+1;
$data['content']="admin/manage_asset";
$this->load->view('include/header',$data);
}

function manage_asset_2()
{
$count=$this->manage_asset->row_count();
	$count=$count+1;
	
	 $stock_Qty=$this->input->post('stock_Qty');
	 $service_tag=$this->input->post('service_tag'); 
	 $Asset_seriol_no=$this->input->post('Asset_seriol_no');
	  $Asset_model=$this->input->post('Asset_model');
	   $Asset_name=$this->input->post('Asset_name');
	    $Asset_type=$this->input->post('Asset_type');
	  
	  $asset_record_array=array('asset_id'=>$count,
	                               //'stock_Qty_available'=>$stock_Qty_available,
	                               'Asset_type'=>$Asset_type,
								   'Asset_name'=>$Asset_name,
								   'Asset_model'=>$Asset_model,
								   'Asset_seriol_no'=>$Asset_seriol_no,
								   'service_tag'=>$service_tag,
								   'stock_Qty'=>$stock_Qty
								   );
	
	 
		$status=$this->manage_asset->insert_asset_record($asset_record_array);
	 
	 if($status)
	 {
/*	$student_record= $this->student->get_student_record(null);
	$data['student_record']=$student_record;
	$this->load->view('student_list',$data);*/
 echo "<b><center><font size=10 color=green>record inserted successfully</font>";
	 echo "<br>";
	 echo "<font color='blue' size=8>Thanks to register</font>";
	// print_r($asset_record_array);
	 
	 }
	 else
	 {
	 echo "record not inserted successfully";
	 }
}

function room()
{
$count = $this->room->row_count();
			// echo "<h1>".$count."</h1>";
		$data['count']=$count+1;

$data['content']="admin/room";
$this->load->view('include/header',$data);
}

function room_2()
{
$count=$this->room->row_count();
	$count=$count+1;
	
	// $room_id=$this->input->post('room_id');
	 $room_no=$this->input->post('room_no'); 
	 $staff_dept=$this->input->post('staff_dept');
	  $location=$this->input->post('location');
	  
	  
	  $room_record_array=array('room_id'=>$count,
	                               //'stock_Qty_available'=>$stock_Qty_available,
	                               'room_no'=>$room_no,
								   'staff_dept'=>$staff_dept,
								   'location'=>$location
								  
								   );
	
	print_r($room_record_array);
		$status=$this->room->insert_room_record($room_record_array);
	 
	 if($status)
	 {
/*	$student_record= $this->student->get_student_record(null);
	$data['student_record']=$student_record;
	$this->load->view('student_list',$data);*/
 echo "<b><center><font size=10 color=green>record inserted successfully</font>";
	 echo "<br>";
	 echo "<font color='blue' size=8>Thanks to register</font>";
	// print_r($asset_record_array);
	 
	 }
	 else
	 {
	 echo "record not inserted successfully";
	 }

}


function receive_asset()
{
$data['content']="admin/receive_asset";
$this->load->view('include/header',$data);
}
function department()
{
$count = $this->department->row_count();
			// echo "<h1>".$count."</h1>";
		$data['count']=$count+1;
$data['content']="admin/department";
$this->load->view('include/header',$data);
}
function department_2()
{
$count=$this->department->row_count();
	$count=$count+1;
	
	// $room_id=$this->input->post('room_id');
	 $staff_dept=$this->input->post('staff_dept'); 
	 $staff_name=$this->input->post('staff_name');
	  $location=$this->input->post('location');
	  
	  
	  $dept_record_array=array('dept_id'=>$count,
	                              
	                               'staff_dept'=>$staff_dept,
								   'staff_name'=>$staff_name
								   
								   );
	
	print_r($dept_record_array);
		$status=$this->department->insert_dept_record($dept_record_array);
	 
	 if($status)
	 {

 echo "record inserted successfully";
	 echo "<br>";
	 echo "<font color='blue' size=8>Thanks to register</font>";
	// print_r($asset_record_array);
	 
	 }
	 else
	 {
	 echo "record not inserted successfully";
	 }


}










function manage_staff()
{
  //$count = $this->manage_staff->row_count();
			// echo "<h1>".$count."</h1>";
		//$data['count']=$count+1;
				
$data['content']="admin/asset/manage_staff";
$this->load->view('include/header',$data);

}
function manage_staff_2()
{
 
$count=$this->manage_staff->row_count();
	$count=$count+1;
	
	 $staff_id=$this->input->post('staff_id');
	 $staff_name=$this->input->post('staff_name');
	 $staff_dept=$this->input->post('staff_dept');
	 $staff_contact_No=$this->input->post('staff_contact_No');
	 $staff_password=$this->input->post('staff_password');
	 $staff_email=$this->input->post('staff_email');
	  
	  $staff_record_array=array('staff_id'=>$count,
	                               'staff_name'=>$staff_name,
	                               'staff_dept'=>$staff_dept,                               
								   'staff_contact_No'=>$staff_contact_No,
	                               'staff_password'=>$staff_password,
								   'staff_email'=>$staff_email
								   );
	
	 
		$status=$this->manage_staff->insert_staff_record($staff_record_array);
	 
	 if($status)
	 {
/*	$student_record= $this->student->get_student_record(null);
	$data['student_record']=$student_record;
	$this->load->view('student_list',$data);*/
 echo "<b><center><font size=10 color=green>record inserted successfully</font>";
	 echo "<br>";
	 echo "<font color='blue' size=8>Thanks to register</font>";
	// print_r($staff_record_array);
	 
	 }
	 else
	 {
	 echo "record not inserted successfully";
	 }
	 
	  

}

function change_password()
{
//$count = $this->manage_staff->row_count();
			// echo "<h1>".$count."</h1>";
	//	$data['count']=$count+1;
$data['content']="admin/change_password";
$this->load->view('include/header',$data);
}
function Asset_type()
{ 
		$count = $this->Asset_type->row_count();
			// echo "<h1>".$count."</h1>";
		$data['count']=$count+1;
				

$data['content']="admin/Asset_type";
$this->load->view('include/header',$data);
}

function Asset_type_2()
{
$count=$this->Asset_type->row_count();
	$count=$count+1;
	
	 $Asset_type_id=$this->input->post('Asset_type_id');
	 $Asset_type=$this->input->post('Asset_type');
	 
	  
	  $Asset_type_record_array=array('Asset_type_id'=>$count,
	                               'Asset_type'=>$Asset_type
	                               
								   );
	
	 
		$status=$this->Asset_type->insert_Asset_type_record($Asset_type_record_array);
	 
	 if($status)
	 {
/*	$student_record= $this->student->get_student_record(null);
	$data['student_record']=$student_record;
	$this->load->view('student_list',$data);*/
 echo "<b><center><font size=10 color=green>record inserted successfully</font>";
	 echo "<br>";
	 echo "<font color='blue' size=8>Thanks to register</font>";
	 print_r($Asset_type_record_array);
	 
	 }
	 else
	 {
	 echo "record not inserted successfully";
	 }
	 
	  
}


}
?>
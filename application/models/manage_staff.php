<?php
class manage_staff extends CI_model
{
	function __Construct()
	{
		parent:: __Construct();
		$this->load->database();
	}
	/*function insert_staff_register_record($staff_register_record_array)
	{
		
		$status=$this->db->insert('manage_staff',$staff_register_record_array);
		return $status;
	}
	*/
	
	function insert_staff_record($staff_record_array)
{
$status=$this->db->insert('manage_staff',$staff_record_array);
return $status;

}


function row_count()
{
$count=$this->db->count_all('manage_staff');
//$count = $this->db->insert_id('manage_staff');

return $count;
}
	
	/*function row_count()
{
$count=$this->db->count_all('manage_staff');
return $count;
}
*/
	
}
?>
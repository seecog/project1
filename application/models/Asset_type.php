<?php
class Asset_type extends CI_model
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
	
	function insert_Asset_type_record($Asset_type_record_array)
{
$status=$this->db->insert('Asset_type',$Asset_type_record_array);
return $status;

}


function row_count()
{
$count=$this->db->count_all('Asset_type');
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
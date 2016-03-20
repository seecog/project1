<?php
class manage_assets extends CI_model
{
	function __Construct()
	{
		parent:: __Construct();
		$this->load->database();
	}
	
	function insert_Asset_record($Asset_record_array)
{
$status=$this->db->insert('manage_assets',$Asset_record_array);
return $status;

}


function row_count()
{
$count=$this->db->count_all('manage_assets');
//$count = $this->db->insert_id('manage_staff');

return $count;
}

	
}
?>
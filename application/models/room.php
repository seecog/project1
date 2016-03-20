<?php
class room extends CI_model
{
	function __Construct()
	{
		parent:: __Construct();
		$this->load->database();
	}
	
	function insert_room_record($room_record_array)
{
$status=$this->db->insert('room',$room_record_array);
return $status;

}


function row_count()
{
$count=$this->db->count_all('room');
//$count = $this->db->insert_id('manage_staff');

return $count;
}
	

	
}
?>
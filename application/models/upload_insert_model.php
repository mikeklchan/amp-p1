<?php 
class Upload_insert_model extends CI_Model{
	 
	function __construct()
	{
		$this->load->database();
	}
	
	public function  upload_insert($data)
	{
		$dblisr=$this->db->insert('AMP_OACONNECTOR',$data);
		return $dblisr;
	}

	public function upload_select()
	{
		$sql="SELECT * FROM AMP_OACONNECTOR";
		$count=$this->db->query($sql);
		$dblist=$count->result_array();
		return $dblist;
	}
}
?>
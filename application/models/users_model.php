<?php
class Users_model extends CI_Model {

    public function __construct()
    {
    $this->load->database();
    }
    public function get_users(){
	  $sql="select * from amp_user order by USER_ID";
    $query = $this->db->query($sql);
    return $query->result_array;
 
	}
	public function update($userid,$style,$is_export){
		
			var_dump($userid);
			var_dump($style);
			var_dump($is_export);
		$data = array(
			
			'style'=>$style,
			'is_export'=>$is_export
		);
		$this->db->where('user_id',$userid);
		return $this->db->update('amp_user',$data);
	}
}
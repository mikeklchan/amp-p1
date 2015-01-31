<?php
class login_model extends CI_Model {

    public function __construct()
    {   //链接数据库
        $this->load->database();
    }

    public function get_user($name)
    {
        $this->load->helper('url');
		$query = $this->db->get_where('AMP_USER', array('USER_NAME' => $name));
        $row = $query->row();
      
        if ($name === $row->USER_NAME) {
                return true;
            } else {
                return false;
            }

        }
	public function get_info($name){
		$this->load->helper('url');
		$query = $this->db->get_where('AMP_USER', array('USER_NAME' => $name));
        $row = $query->row();
		return $row;
 
	}
		
	public function set_user($name){
		$this->load->helper('url');
		$sql="INSERT INTO AMP_USER(USER_NAME,STYLE,IS_EXPORT,STATUS,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) VALUES('".$name."','1','1','1',sysdate,'admin',sysdate,'admin')";
		$date=$this->db->query($sql);
		return $date;
 
	}

}
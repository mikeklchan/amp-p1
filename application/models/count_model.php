<?php
class Count_model extends CI_Model {

    public function __construct()
    {
    $this->load->database();
    }
    public function getCount(){
	  $sql="select amp_project.project,amp_project.PROJECT_ID,
	  count(amp_unit.block_cert_pre) cert, count(amp_unit.unit_id) num 
	  from amp_project inner join amp_unit on amp_project.project_id = amp_unit.project_id 
	  group by amp_project.project, amp_project.PROJECT_ID order by amp_project.project_id";
	  
    $query = $this->db->query($sql);
    return $query->result_array;
 
	}
	public function getCount2(){
		$sql="select amp_project.project,amp_project.PROJECT_ID,
	  count(amp_unit.ROOM_TOWARDS) ch,  count(amp_unit.FLOOR_HEIGHT) ce,count(amp_unit.unit_id) num 
	  from amp_project inner join amp_unit on amp_project.project_id = amp_unit.project_id 
	  group by amp_project.project, amp_project.PROJECT_ID order by amp_project.project_id";
		$query = $this->db->query($sql);
		return $query->result_array;
	
	}
	
}
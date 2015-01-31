<?php
class Project_info_maintain_model extends CI_Model{
	public function __construct(){
		$this->load->database();
		date_default_timezone_set('Asia/Shanghai');
	}
	public function count(){
		//查询总记录数
		$count = $this->db->query("SELECT count(*) FROM amp_project");
		
		//echo '<pre>';var_dump($count);echo '</pre>';exit;
		return $count;
	}
	public function get_project_list($page = FALSE){
			$page=empty($page)?1:$page;
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM amp_project ) A WHERE ROWNUM <= $page*10) WHERE RN >= ($page-1)*10+1 ORDER BY project_id";
			$query = $this->db->query($sql);
			$result=$query->result_array;
		
			return $result;
		}
	public function project_detail($project_id = FALSE){
		
		$sql = "select * from amp_project where project_id=$project_id ";
		
		$query=$this->db->query($sql);

		return $query->result_array[0];
	}
	public function project_update(){
		//echo $this->input->post('PROJECT_ID');exit;
		$project_id = $this->input->post('PROJECT_ID');
		$data = array(
				'DISTRICT' => $this->input->post('DISTRICT'),
				'PROJECT' => $this->input->post('PROJECT'),
				'PSB_ADDRESS' => $this->input->post('PSB_ADDRESS'),				
				
		);
		//print_r($data);exit;
		$this->db->where('project_id', $project_id);
		$this->db->update('amp_project', $data);
	}
	public function project_insert(){
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$data = array(
				'DISTRICT' => $this->input->post('DISTRICT'),9
				'PROJECT' => $this->input->post('PROJECT'),
				'PSB_ADDRESS' => $this->input->post('PSB_ADDRESS'),
				'CREATED_DATE'=> date("Y-m-d H:i:s"),
				'CREATED_BY'=> $name,
				'MODIFIED_DATE'=> date("Y-m-d H:i:s"),
				'MODIFIED_BY'=> $name,				
		);//print_r($data);exit;
		$this->db->insert('amp_project', $data);
	}
	//项目删除
	public function project_delete($id){
		
		$this->db->where('project_id', $id);
		$this->db->delete('amp_project');
	
	}
}
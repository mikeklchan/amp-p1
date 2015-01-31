<?php
class Upload_pic_model extends CI_Model{
	public function __construct(){
		$this->load->database();
		date_default_timezone_set('Asia/Shanghai');
	}
	
	public function list_pic($id){
		$query = $this->db->query("SELECT * FROM AMP_PICTURE where PICTURE_ID = $id");	
		return $query->result_array;
	}
	public function upload_pic_project($project_id){
		$this->load->library('session');
		$name = $this->session->userdata('name');
		
		$img = $this->upload->file_name;
		$url = 'project/'.$img;
		$sql   = "SELECT max(PICTURE_ID) pic_id FROM AMP_PICTURE";
		$query = $this->db->query($sql);		
		//echo '<pre>';var_dump($query->result_array[0]['PIC_ID'] + 1);echo '</pre>';exit;
		$pic_style = $this->input->post('pic_style');
		
		if($pic_style==10){
			$pic_style = 0;
		}
		
		$data = array(
				'PICTURE_ID' => $query->result_array[0]['PIC_ID'] + 1,
				'URL' => $url,
				'PROJECT_ID' => $project_id,
				'STYLE' => $pic_style,
				'PROPERTY_ID' => null,
				'BUILDING_ID' => null,
				'FLOOR_ID' => null,
				'CREATED_DATE'=> date("Y-m-d H:i:s"),
				'CREATED_BY'=> $name,
				'MODIFIED_DATE'=> date("Y-m-d H:i:s"),
				'MODIFIED_BY'=> $name,
				
		);
		$this->db->insert('AMP_PICTURE', $data);
		//$_session['project'] = $this->input->post('project');
		//return $this->input->post('project');
	}
	public function upload_pic_building($building_id){
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$img = $this->upload->file_name;
		$url = 'building/'.$img;
		$sql   = "SELECT max(PICTURE_ID) pic_id FROM AMP_PICTURE";
		$query = $this->db->query($sql);		
		//echo '<pre>';var_dump($query->result_array[0]['PIC_ID'] + 1);echo '</pre>';exit;
		$pic_style = $this->input->post('pic_style');
		
		if($pic_style==10){
			$pic_style = 0;
		}
		
		$data = array(
				'PICTURE_ID' => $query->result_array[0]['PIC_ID'] + 1,
				'URL' => $url,
				'PROJECT_ID' => $this->input->post('project'),
				'STYLE' => $pic_style,
				'PROPERTY_ID' => null,
				'BUILDING_ID' => $building_id,
				'FLOOR_ID' => null,
				'CREATED_DATE'=> date("Y-m-d H:i:s"),
				'CREATED_BY'=> $name,
				'MODIFIED_DATE'=> date("Y-m-d H:i:s"),
				'MODIFIED_BY'=> $name,
				
		);
		$this->db->insert('AMP_PICTURE', $data);
	}
	public function upload_pic_floor($floor_id){
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$img = $this->upload->file_name;
		$url = 'floor/'.$img;
		$sql   = "SELECT max(PICTURE_ID) pic_id FROM AMP_PICTURE";
		$query = $this->db->query($sql);		
		//echo '<pre>';var_dump($query->result_array[0]['PIC_ID'] + 1);echo '</pre>';exit;
		$pic_style = $this->input->post('pic_style');
		
		if($pic_style==10){
			$pic_style = 0;
		}
		$data = array(
				'PICTURE_ID' => $query->result_array[0]['PIC_ID'] + 1,
				'URL' => $url,
				'PROJECT_ID' => $this->input->post('project'),
				'STYLE' => $pic_style,
				'PROPERTY_ID' => null,
				'BUILDING_ID' => $this->input->post('building'),
				'FLOOR_ID' => $floor_id,
				'CREATED_DATE'=> date("Y-m-d H:i:s"),
				'CREATED_BY'=> $name,
				'MODIFIED_DATE'=> date("Y-m-d H:i:s"),
				'MODIFIED_BY'=> $name,
				
		);
		$this->db->insert('AMP_PICTURE', $data);
	}
	public function upload_pic_cell($cell_id){
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$img = $this->upload->file_name;
		$url = 'unit/'.$img;
		$sql   = "SELECT max(PICTURE_ID) pic_id FROM AMP_PICTURE";
		$query = $this->db->query($sql);		
		//echo '<pre>';var_dump($query->result_array[0]['PIC_ID'] + 1);echo '</pre>';exit;
		$pic_style = $this->input->post('pic_style');
		
		if($pic_style==10){
			$pic_style = 0;
		}
		$data = array(
				'PICTURE_ID' => $query->result_array[0]['PIC_ID'] + 1,
				'URL' => $url,
				'PROJECT_ID' => $this->input->post('project'),
				'STYLE' => $pic_style,
				'PROPERTY_ID' => $cell_id,
				'BUILDING_ID' => $this->input->post('building'),
				'FLOOR_ID' => $this->input->post('floor'),
				'CREATED_DATE'=> date("Y-m-d H:i:s"),
				'CREATED_BY'=> $name,
				'MODIFIED_DATE'=> date("Y-m-d H:i:s"),
				'MODIFIED_BY'=> $name,
				
		);
		$this->db->insert('AMP_PICTURE', $data);
	}
}
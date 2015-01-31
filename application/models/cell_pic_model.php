<?php
/**单元图片*/
class Cell_pic_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	//单元图片列表查询
	public function cell_pic_view($cell_id=false,$style=false){
		$sql = "select * from AMP_PICTURE where unit_id=$cell_id and style=$style and MARK_DELETE =N";		
		$query=$this->db->query($sql);	
		return $query->result_array[0];
	}
	//单元图片删除（修改字段值）
	public function cell_pic_delete(){
		$picture_id = $this->input->post('PICTURE_ID');
		$data = array(
				'MARK_DELETE' => 'Y',
		);
		$this->db->where('PICTURE_ID', $picture_id);
		$this->db->update('AMP_PICTURE', $data);
	}	
	//单元图片新增
	public function cell_pic_add($id=false,$style=false){
		
		$data = array(
				'MARK_DELETE' => 'N',
				'MARK_DELETE' => $this->input->post('AMP_CODE'),
				'MARK_DELETE' => $this->input->post('AMP_CODE'),
				'MARK_DELETE' => $this->input->post('AMP_CODE'),
		);
		$this->db->insert('AMP_PICTURE', $data);
	}
	
}
<?php
class Cell_pic extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
		header("Content-type:text/html;charset=utf-8");		
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('cell_pic_model');
	}
	
	//单元图片列表信息
	public function pic_view($cell_id=false,$style=false){	
		$this->input->get();
		$data['cell_item'] = $this->cell_pic_model->cell_pic_view($cell_id,$style);

		$this->load->view('project/project_cell/project_cell',$data);
	}
	//单元图片删除
	public function pic_delete(){
		$data['cell_item'] = $this->cell_model->cell_detail($id);
		
		$data['project_id']=$id;
		$this->load->view('project/project_cell/cell_info_edit',$data);
	}
	//单元图片添加
	public function pic_add(){

		$cell_id = $this->input->post('UNIT_ID');
		$data['cell_item'] = $this->cell_model->cell_update();
		redirect('index.php/cell/cell_list/'.$cell_id);
	}

}

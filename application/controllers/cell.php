<?php
class Cell extends CI_Controller{
	public function __construct()
	{
		
		parent::__construct();		
		header("Content-type:text/html;charset=utf-8");		
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('cell_model');
		$this->load->model('floor_model');
		$this->load->library('common'); 
		//$this->load->library('qr_code_lib'); 
	}
	

	public function cell_list($cell_id=false){	
		//单元详细信息
		$this->input->get();
		$cell_item=$this->cell_model->cell_detail($cell_id);
		$data['cell_item'] = $cell_item;
			$floor_id=$cell_item['FLOOR_ID'];
		$data['floor_item'] = $this->floor_model->floor_detail($floor_id);
		$pic0 = array();
		$pic1 = array();
		$pic2 = array();
		$pic3 = array();
		
		$pics = $this->cell_model->getpics($cell_id);
		foreach($pics as $p)
		{
			if($p['STYLE']==0)$pic0[]=$p;
			if($p['STYLE']==1)$pic1[]=$p;
			if($p['STYLE']==2)$pic2[]=$p;
			if($p['STYLE']==3)$pic3[]=$p;
		}

		$data['pic0'] = $pic0;
		$data['pic1'] = $pic1;
		$data['pic2'] = $pic2;
		$data['pic3'] = $pic3;
		//echo "<pre>";print_r($data['pics']);echo "<pre>";exit;
		$data['title']='单元详细信息';
	    $this->load->view('project/project_head',$data);
		$this->load->view('project/project_cell/project_cell',$data);
		$this->load->view('project/project_footer');
	}
	public function cell_edit($id=false){
		$this->input->get();
		$data['cell_item'] = $this->cell_model->cell_detail($id);
		$floor_id=$data['cell_item']['FLOOR_ID'];
		$data['floor_item'] = $this->floor_model->floor_detail($floor_id);
		$data['project_id']=$id;
		$data['title']='单元详细信息';
	    $this->load->view('project/project_head',$data);
		$this->load->view('project/project_cell/cell_info_edit',$data);
		$this->load->view('project/project_footer');
	}
	public function edit_data(){

		$cell_id = $this->input->post('UNIT_ID');
		
		
		$data['cell'] = $this->cell_model->this_cell($cell_id);
		if(!empty($data['cell'])){
			//单元id存在
			$data['cell_item'] = $this->cell_model->cell_update();
			redirect('cell/cell_list/'.$cell_id);
		}else{
			//如果单元id存在
			redirect('cell/cell_list/'.$cell_id);
		}
	}
	public function qr_code($cell_id=false){
		
		$this->input->get();
		$url=base_url().'index.php/cell/cell_list/'.$cell_id.'/1';
		$cell_item=$this->cell_model->cell_detail($cell_id);
		$code='公司：'.$cell_item['COMPANY'].'项目：'.$cell_item['PROJECT'].'建筑：'.$cell_item['BUILDING'].'单元：'.$cell_item['ASSET_ID'].'URL：'.$url; 
		include('./application/phpqrcode/phpqrcode.php'); 
		$qr=QRcode::png($code);
		echo $qr;
		
	}	
		

}

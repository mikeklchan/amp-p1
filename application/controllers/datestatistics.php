<?php

class Datestatistics extends CI_Controller {
	//加载系统函数
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('datestatistics_model');
		$this->load->model('building_model');

	}

	public function view()
	{
		$company=$this->datestatistics_model->sumcompany();
		
		foreach($company as $key=>$val)
		{
			$data['COMPANY'][]=$val['COMPANY_NAME'];
		}
		
		$project=$this->datestatistics_model->sumproject();
		
		foreach($project as $key=>$val)
		{
			$data['PROJECT'][]=$val['PROJECT'];
		}
		
		$building=$this->datestatistics_model->sumbuilding();
		
		foreach($building as $key=>$val)
		{
			$data['BUILDING'][]=$val['BUILDING'];
		}
		
		$floor=$this->datestatistics_model->sumfloor();
		foreach($floor as $key=>$val)
		{
			$data['FLOOR'][]=$val['FLOOR'];
		}
		//echo '<pre>';var_dump($data['COMPANY']);echo '<pre>';exit;
		
		//echo '<pre>';var_dump($data['FLOOR']);echo '<pre>';exit;
		$data['title']='数据统计';
		$this->load->view('project/project_head',$data);
		$this->load->view('datestatistics/datestatistics',$data);
		$this->load->view('project/project_footer');
	}
	
	public function testsearch()
	{
		$company=$this->datestatistics_model->sumcompany();
		
		foreach($company as $key=>$val)
		{
			$data['COMPANY'][]=$val['COMPANY_NAME'];
		}
		
		$project=$this->datestatistics_model->sumproject();
		
		foreach($project as $key=>$val)
		{
			$data['PROJECT'][]=$val['PROJECT'];
		}
		
		$building=$this->datestatistics_model->sumbuilding();
		
		foreach($building as $key=>$val)
		{
			$data['BUILDING'][]=$val['BUILDING'];
		}
		
		$floor=$this->datestatistics_model->sumfloor();
		foreach($floor as $key=>$val)
		{
			$data['FLOOR'][]=$val['FLOOR'];
		}
		
		$arr['COMPANY']=$this->input->post('COMPANY');//公司
		//echo $arr['COMPANY'];exit;
		if(empty($arr['COMPANY']))
		{
			unset($arr['COMPANY']);
		}
		$arr['PROJECT']=$this->input->post('PROJECT');//项目
		if(empty($arr['PROJECT']))
		{
			unset($arr['PROJECT']);
		}

		$arr['BUILDING']=$this->input->post('BUILDING');//建筑物名称
		if(empty($arr['BUILDING']))
		{
			unset($arr['BUILDING']);
		}
		$arr['FLOOR']=$this->input->post('FLOOR');//标称楼层
		if(empty($arr['FLOOR']))
		{
			unset($arr['FLOOR']);
		}
		
		//var_dump($arr);exit;
	
		//var_dump($data['floor']);exit;
		$data['data']=$this->datestatistics_model->testsearch($arr);
		//echo '<pre>';var_dump($data['data']);echo '<pre>';exit;
		//$data['searchdata']=$arr;
		
		//$this->session->set_userdata('data',$arr);
		
		$data['title']='数据统计';
		$this->load->view('project/project_head',$data);
		$this->load->view('datestatistics/datestatistics',$data);
        $this->load->view('project/project_footer');
	}
		public function testproject(){
			$PROJECT = $this->input->post('PROJECT');
			$test=$this->building_model->get_building($PROJECT);
			var_dump($test);exit;
		}

	
}

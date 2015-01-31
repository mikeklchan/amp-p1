<?php

class Stat1 extends CI_Controller {
	//加载系统函数
	public function __construct()
	{	header("Content-type:text/html;charset=utf-8");
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('count_model');
	
	}
	public function index() 
	{
		$data['counts'] = $this->count_model->getCount();
		//echo '<pre>';var_dump($data);echo '<pre>';exit;
		$data['title']="产证统计";
		$this->load->view('project/project_head',$data);
		$this->load->view('stat/stat1',$data);
		$this->load->view('project/project_footer');
	}	
	}
?>
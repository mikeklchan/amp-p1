<?php

class Stat0 extends CI_Controller {
	//加载系统函数
	public function __construct()
	{	header("Content-type:text/html;charset=utf-8");
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('count_model');
		$this->load->model('project_model');
		$this->load->model('building_model');
	}
	public function index() 
	{
		
		
		$data['title']="数据统计";
		$this->load->view('project/project_head',$data);
		$this->load->view('stat/stat0',$data);
		$this->load->view('project/project_footer');
	}	
	}
?>
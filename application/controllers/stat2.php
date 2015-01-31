<?php

class stat2 extends CI_Controller {
	//加载系统函数
	public function __construct()
	{   header("Content-type:text/html;charset=utf-8");
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('count_model');
	}
	public function index()
	{
		$data['counts']=$this->count_model->getCount2();
		$data['title']='交付标准';
		//echo '<pre>';var_dump($date);echo '<pre>';exit;
		$this->load->view('project/project_head',$data);
		$this->load->view('stat/stat2',$data);
		$this->load->view('project/project_footer');
	}
}
?>
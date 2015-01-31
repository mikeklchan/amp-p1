<?php
class Stat3 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//error_reporting(0);
		date_default_timezone_set('Asia/Shanghai');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('piccount_model');
		header("Content-type:text/html;charset=utf-8");
	}
	
	public function index()
	{
		//echo 11;
		$countdata = $this->piccount_model->getcount();
		$data['countdata'] = $countdata;
		$data['title'] = '照片统计';
		$this->load->view('project/project_head',$data);
		$this->load->view('stat/stat3',$data);
		$this->load->view('project/project_footer');
	}

}
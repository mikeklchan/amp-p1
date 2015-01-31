<?php
class Down extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
	$this->load->helper('url');
    $this->load->model('users_model');
	$this->load->library('session');
  }
	 public function download()
  {
	  $data['title'] = '模板下载';
	
	$this->load->view('project/project_head',$data);
	$this->load->view('down/download',$data);
	$this->load->view('project/project_footer');
  }
}
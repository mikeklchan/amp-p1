<?php

class Logins extends CI_Controller {
	public function __construct(){
		header("Content-type:text/html;charset=utf-8");
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
	}
  public function login()
  {
$this->load->view('logins/index');
  

}
	public function destroy_sess(){
		$this->session->sess_destroy();
		redirect('logins/login');
	}
}
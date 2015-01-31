<?php
class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
	$this->load->helper('url');
    $this->load->model('users_model');
	$this->load->library('session');
  }

  public function user()
  {
	$data['users'] = $this->users_model->get_users();
	//var_dump($data['users']);exit;
	$data['title'] = '用户管理';
	$this->load->view('project/project_head',$data);
	$this->load->view('users/system_user', $data);
	$this->load->view('project/project_footer');
  } 
  public function permi()
  {
	$data['users'] = $this->users_model->get_users();
	//var_dump($data['users']);exit;
	$data['title'] = '角色管理';
	$this->load->view('project/project_head',$data);
	$this->load->view('users/system_permi', $data);
	$this->load->view('project/project_footer');
  }
  public function check_permi(){
		
			$userid = (int)$_POST["userid"];
			
			$style = isset($_POST["select"]) ? (int)$_POST["select"] : 1;
			if($style==4){
				$is_export =1;
			}else{
				$is_export = isset($_POST["checkbox"]) ? (int)$_POST["checkbox"] : 0;
			}
			
			
			$update = $this->users_model->update($userid,$style,$is_export);
			var_dump($update);
			if($update){
				redirect('users/permi');
			}
		
	}
	
	

  
}
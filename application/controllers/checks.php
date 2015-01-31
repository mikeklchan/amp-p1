<?php

class Checks extends CI_Controller {
	public function __construct(){
		header("Content-type:text/html;charset=utf-8");
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
	}
	
	public function check(){
		//LDAP验证：
//		$ldaphost = "localhost";
//		$ldapconn = ldap_connect($ldaphost);        
//		$set = ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);    
		$name = $_POST["name"] ? $_POST["name"]: "";                       
//		$password = $_POST["password"] ? $_POST["password"]: "";
//		$bd = ldap_bind($ldapconn, "uid=".$name.",o=vandagroup,c=com", $password);
 		 		
//		if($bd==false){
//			echo "Username or password error!";
//			redirect('logins/login?error=1&name='.$name);
//		}else{				
				
 		//oracle验证：
		$ora = $this->login_model->get_user($name);
		if($ora){
			$data = $this->login_model->get_info($name);
			$style = $data->STYLE;
			$is_export = $data->IS_EXPORT;			
			$this->load->library('session');
			$newdata = array(
					'name'      =>  $name,
					'style'     =>  $style,
					'is_export'	=>  $is_export,				
					'logged_in' =>  TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('project/index');
		} else {
//			$data = $this->login_model->set_user($name);
//			$style = $data->STYLE;
//			$is_export = $data->IS_EXPORT;
//			$this->load->library('session');
//			$newdata = array(
//					'name'      =>  $name,
//					'style'     =>  $style,
//					'is_export'	=>  $is_export,				
//					'logged_in' =>  TRUE
//			);
//			$this->session->set_userdata($newdata);
//			redirect('project/index');
		  echo "Username or password error!";
		  redirect('logins/login?error=1&name='.$name);
		}
		//ldap_close($ldapconn);//关闭
		//}	
	}
		
}
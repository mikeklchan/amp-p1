<?php

class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
  $this->load->library('session');
 }
 
 function index()
 { 
  //$this->load->view('upload_form', array('error' => ' ' ));
 	$data['title']='文字批量维护';
 	$data['success']='数据预览';
 	$this->load->view('project/project_head',$data);
 	$this->load->view('textinfoedit/textinfoedit',$data);
 	$this->load->view('project/project_footer');
 }

 function do_upload()
 {
  $config['upload_path'] = './uploads';
  $config['allowed_types'] = 'txt|xls|xlsx';
  $config['max_size'] = '10000';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';
  
  $this->load->library('upload', $config);
 
  if ( ! $this->upload->do_upload('file'))
  {
   //$error = array('error' => $this->upload->display_errors());
   
  //$this->load->view('upload_form/upload_form');
   //echo '<pre>';var_dump($error);echo '</pre>';exit;
  	$data['title']='文字批量维护';
  	$data['success']='数据预览';
  	$this->load->view('project/project_head',$data);
  	$this->load->view('textinfoedit/textinfoedit',$data);
  	$this->load->view('project/project_footer');
  } 
 
  else
  {
   $data = array('upload_data' => $this->upload->data());
   $this->session->set_userdata('file_name',$data['upload_data']['file_name']);
   //echo '<pre>';var_dump($data['upload_data']['file_name']);echo '</pre>';exit;
  // $data['upload_data']=$this->upload->data('file1');
   //$img=$data['upload_data']['file_name'];
   //$this->load->view('upload_form/upload_success', $data);
   $data['title']='文字批量维护';
   $data['success']='数据预览';
   $this->load->view('project/project_head',$data);
   $this->load->view('textinfoedit/textinfoedit',$data);
   $this->load->view('project/project_footer');
  }
  
 } 
}
?>
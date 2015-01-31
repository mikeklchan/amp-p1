<?php

class Textinfoedit extends CI_Controller {
	//加载系统函数
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('textinfoedit_model');
		include_once('system/libraries/Excel/reader.php');
	}

	public function view()
	{

		$data['title']='文字批量维护';
		
		$this->load->view('project/project_head',$data);
		$this->load->view('textinfoedit/textinfoedit',$data);
		$this->load->view('project/project_footer');
	}
	

	function do_upload()
	{
		$config['upload_path'] = 'public/testupload/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
	     $config['overwrite'] = TRUE;
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('file'))
		{
			//echo 'no';exit;
			$error = array('error' => $this->upload->display_errors());
			 
			//$this->load->view('upload_form/upload_form');
			//echo '<pre>';var_dump($error);echo '</pre>';exit;
			$data['title']='文字批量维护';
			
			$this->load->view('project/project_head',$data);
			$this->load->view('textinfoedit/textinfoedit',$data);
			$this->load->view('project/project_footer');
		}
	
		else
		{
			$updata=$this->upload->data();
			// $file_name=$data['upload_data']['file_name'];
			//$this->session->set_userdata('file_name',$data['upload_data']['file_name']);
			//echo '<pre>';var_dump($data['upload_data']['file_name']);echo '</pre>';exit;
			// $data['upload_data']=$this->upload->data('file1');
			//$img=$data['upload_data']['file_name'];
			//$this->load->view('upload_form/upload_success', $data);
			$data['title']='文字批量维护';
			
			$data['file_name']=$updata['file_name'];
			if(!empty($data['file_name']))
			{
				$data['sheet']=$this->textinfoedit_model->import_xls($data['file_name']);
			}
			$this->load->view('project/project_head',$data);
			$this->load->view('textinfoedit/textinfoedit',$data);
			$this->load->view('project/project_footer');
			//return $data;
			/* $this->load->view('project/project_head',$data);
			$this->load->view('textinfoedit/textinfoedit',$data);
			$this->load->view('project/project_footer'); */
		}
	
	}
	//导入方法
	public function import($file_name=null){
		
			$this->input->get();
			//var_dump($file_name);exit;
		    if(!empty($file_name)){
		   
		   		$arr=$this->textinfoedit_model->index($file_name);
		   	    $field=$this->textinfoedit_model->ampcode();
		   		
		   				
		   		//echo '<pre>';print_r($field);echo '<pre>';exit;
		    foreach ($arr as $key=> $dat) {
		   			
		   			 if(!empty($dat[6]))
		   			{
		   			$sql='update amp_unit set ';
		   			
		   			for($i=6;$i<=124;$i++)
		   			{
		   				$val=isset($dat[$i])?$dat[$i]:'';
		   				$sql.=$field[$i-1]['COLUMN_NAME']."='".$val."',";
		   			}
		   			$dat[125]=isset($dat[125])?$dat[125]:'';
		   			$sql.=$field[124]['COLUMN_NAME']."='".$dat[125]."' ";
		   			$sql.="  where amp_code ='".$dat[6]."'";
		   			//var_dump($sql);exit;
		   			//var_dump($dat[6]);exit;
		   			$update_query = $this->db->query($sql);
		   			 
		   			 
		   			 } 
		   		}
		   		
		   		$data['title']='文字批量维护';
		   		$data['success']='导入成功';
		   		$this->load->view('project/project_head',$data);
		   		$this->load->view('textinfoedit/textinfoedit',$data);
		   		$this->load->view('project/project_footer');
		    }
		 
		
 }
}

?>

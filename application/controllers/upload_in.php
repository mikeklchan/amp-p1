<?php

class Upload_in extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper('url');
  $this->load->model('upload_insert_model');
  date_default_timezone_set('Asia/Shanghai');//设置默认时区为上海时间
 }
 
 function index()
 {
 	$this->load->view('file/oatest', array('error' => '' ));
 }
 
 function do_upload()
 {
 	
  $config['upload_path'] = 'public/oaupload/';
  $config['allowed_types'] = '*';
  $config['max_size'] = '1000';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';
  $config['overwrite'] = TRUE;
  
  $this->load->library('upload', $config);
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());

   $this->load->view('file/oatest', $error);
  

  } 
  else
  {
	   $data = array('upload_data' => $this->upload->data());
	   $process=($this->input->post('process'));

	   if (!empty($process) && !empty($data['upload_data']['file_name'])) 
	   {
	   	$udate=date('Y-m-d H:i:s', time());
		   	   $data=array(
		   	   		'processguid'=>'1',
		   	   		'processname'=>'d',
					'stepguid'=>'2',
					'stepname'=>'test2',
					'docguid'=>'row',
					'fname'=>$data['upload_data']['file_name'],
					'processkindname'=>'XXX',
					'uname'=>'test3',
		   	   		'stationname'=>'test4',
		   	   		'udate'=>$udate,
		   	   		'steppathid'=>1,
		   	   		'status'=>null,
					'created_date'=>time(),
					'created_by'=>'test4',
					'modified_date'=>time(),
					'modified_by'=>'test4',
		   	   		
		   	   );
				$now=date('Y-m-d H:i:s', time());
		   	    $sql="INSERT INTO AMP_OACONNECTOR (processguid, processname, stepguid, stepname, docguid, fname, processkindname, uname, stationname, udate, steppathid, status, created_date, created_by, modified_date, modified_by) VALUES ('1', 'd', '2', 'test2', 'row', '1-预测报告.xls', 'XXX', 'test3', 'test4', to_date('$udate','yyyy-mm-dd hh24:mi:ss'), 1, NULL, to_date('$now','yyyy-mm-dd hh24:mi:ss'), 'test4', to_date('$now','yyyy-mm-dd hh24:mi:ss'), 'test4')";
		  	   //echo $sql;exit;
		   	    // $db=$this->upload_insert_model->upload_insert($data);
		  	    $db=$this->db->query($sql);
		  	    if ($db) 
		  	    {
		  	    	$error = array('error' =>'数据添加成功' ); 	
		   	        $this->load->view('file/oatest', $error);
		  	    }else 
		  	    {
		  	    	$error = array('error' =>'数据添加失败' );
		  	    	$this->load->view('file/oatest', $error);
		  	    }
	   }
	  else
	   {
		   	$error = array('error' =>'下拉框为空或没有选择上传文件' ); 	
		   	$this->load->view('file/oatest', $error);
	   }
   
   
  }
 
 }
 
 function upload_select()
 {
 	$data['db']=$this->upload_insert_model->upload_select();
 	$this->load->view('file/upload_select', $data);
 }
 
}

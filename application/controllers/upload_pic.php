<?php

class Upload_pic extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->library('session');
	$this->pic_style=array(
	"10" =>'落位图及照片',
	"1"=>'产证扫描件',
	"2"=>'其它权证扫描件',
	"3"=>'竣工图扫描件',
	"4"=>'普通地下室备案',
	"5"=>'人民防空工程使用许可',
	"6"=>'公共停车场经营备案证',
	"7"=>'停车场收费许可证明',
	"8"=>'与房屋产权有关的其他未包含证照',
	"99"=>'項目縮圖');	
	header("Content-type:text/html;charset=utf-8");
  $this->load->helper(array('form', 'url'));
 $this->load->model('upload_pic_model');
  $data['title']='图片信息批量维护';
 
 }
 
 function index()
 { 
	  $query = $this->db->query("SELECT * FROM amp_project");
  $data['project_item'] = $query->result_array;	
	 $data['pic_style']=$this->pic_style;
 $data['title']='图片信息批量维护';
  $this->load->view('project/project_head',$data);
  $this->load->view('upload_pic/imginfoedit2',$data);
  $this->load->view('project/project_footer');
 }
 
 
	
 function get_building()
 { 
	
	$project = $this->input->post('project');
	//echo '<pre>';var_dump(count($project));echo '</pre>';exit;
	$pic_style = $this->input->post('pic_style');
	if(empty($project)){
		redirect('upload_pic/index');
	}else{
   //echo '<pre>';var_dump($pic_style);echo '</pre>';exit;  
	if(count($project)<=1&&empty($pic_style)){
			$project1 = $this->input->post('project');
			$project = $project1[0];
			$query = $this->db->query("SELECT * FROM amp_building where project_id = $project");
			//echo '<pre>';var_dump($data['building_item']);echo '</pre>';exit;
			$data['building_item'] = $query->result_array;
			$data['project_id'] = $project;
			$data['pic_style']=$this->pic_style;
			$data['title']='图片信息批量维护';
			$this->load->view('project/project_head',$data);
			$this->load->view('upload_pic/building_imginfoedit2',$data);
			$this->load->view('project/project_footer');
	   }else{
			$config['upload_path'] = 'public/photos/project/';
			$config['allowed_types'] = '*';
			$config['max_size'] = '102400';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
	  
			$this->load->library('upload', $config);
			$count_num = $this->input->post('count_num');
			for ($i=1; $i<=$count_num; $i++){
				 $filename = 'file'.$i;
				 $this->upload->do_upload($filename);
				}
		
			

			if ( ! $this->upload->do_upload('file'))
			{
			
			 echo "<script>alert('上传失败！请选择上传文件');history.go(-1);</script>";
			
			}else{
			   
			   $project = $this->input->post('project');
			   
			   foreach($project as $project_id){
					$this->upload_pic_model->upload_pic_project($project_id);
			   }
			   
			   echo "<script>alert('上传成功！');history.go(-1);</script>";
			}
		}
	}
 }
 function get_floor()
 { 
	$building = $this->input->post('building');
	$project = $this->input->post('project');
	$pic_style = $this->input->post('pic_style');
	 if(empty($project)){
		redirect('upload_pic/index');
	}else{
	if(count($building)<=1&&empty($pic_style)){
			$building1 = $this->input->post('building');
			//echo '<pre>';var_dump($this->input->post('building'));echo '</pre>';exit;
			$building = $building1[0];
			$query = $this->db->query("SELECT * FROM amp_floor where building_id = $building");
			//echo '<pre>';var_dump($data['building_item']);echo '</pre>';exit;
			$data['floor_item'] = $query->result_array;
			$data['project_id'] = $project;
			$data['building_id'] = $building;
			$data['pic_style']=$this->pic_style;
			$data['title']='图片信息批量维护';
			$this->load->view('project/project_head',$data);
			$this->load->view('upload_pic/floor_imginfoedit2',$data);
			$this->load->view('project/project_footer');
	   }else{
			$config['upload_path'] = 'public/photos/building/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '102400';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
  
		$this->load->library('upload', $config);
		$count_num = $this->input->post('count_num');
		for ($i=1; $i<=$count_num; $i++){
			 $filename = 'file'.$i;
			 $this->upload->do_upload($filename);
			}
		if ( ! $this->upload->do_upload('file'))
		{
		echo "<script>alert('上传失败！请选择上传文件');history.go(-1);</script>";
		
		}else{
			
		   $building = $this->input->post('building');
		   
		   foreach($building as $building_id){
				$this->upload_pic_model->upload_pic_building($building_id);
		   }
		   
		  echo "<script>alert('上传成功！');history.go(-1);</script>";
			}
		}
	}
	
 }
  function get_cell()
 { 
	$building = $this->input->post('building');
	$project = $this->input->post('project');
	$floor = $this->input->post('floor');
	$pic_style = $this->input->post('pic_style');
	 if(empty($project)){
		redirect('upload_pic/index');
	}else{
	if(count($floor)<=1&&empty($pic_style)){
		$floor1 = $this->input->post('floor');
		$floor = $floor1[0];
		$query = $this->db->query("SELECT * FROM amp_unit where floor_id = $floor");
		//echo '<pre>';var_dump($query);echo '</pre>';exit;
		$data['cell_item'] = $query->result_array;
		$data['project_id'] = $project;
		$data['building_id'] = $building;
		$data['floor_id'] = $floor;
		$data['pic_style']=$this->pic_style;
		$data['title']='图片信息批量维护';
		$this->load->view('project/project_head',$data);
		$this->load->view('upload_pic/cell_imginfoedit2',$data);
		$this->load->view('project/project_footer');
	}else{	 
		$config['upload_path'] = 'public/photos/floor/';
		$config['allowed_types'] = '*';
		$config['max_size'] = '102400';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
  
		$this->load->library('upload', $config);
		$count_num = $this->input->post('count_num');
		for ($i=1; $i<=$count_num; $i++){
			 $filename = 'file'.$i;
			 $this->upload->do_upload($filename);
			}
		if ( ! $this->upload->do_upload('file'))
			{
			echo "<script>alert('上传失败！请选择上传文件');history.go(-1);</script>";
			
			}else{
			
				$floor = $this->input->post('floor');
				foreach($floor as $floor_id){
					$this->upload_pic_model->upload_pic_floor($floor_id);
					}
		  
		  echo "<script>alert('上传成功！');history.go(-1);</script>";
			}
		}
	}
 }
 function do_upload()
 {
	  $building = $this->input->post('building');
	  $project = $this->input->post('project');
	  $floor = $this->input->post('floor');
	  $cell = $this->input->post('cell');
	  $pic_style = $this->input->post('pic_style');
	  if(empty($project)){
		redirect('upload_pic/index');
	}else{
	  if(!empty($pic_style)){
		  $config['upload_path'] = 'public/photos/unit/';
		  $config['allowed_types'] = '*';
		  $config['max_size'] = '102400';
		  $config['max_width']  = '10240';
		  $config['max_height']  = '7680';
		  
		 $this->load->library('upload', $config);
		 $count_num = $this->input->post('count_num');
		for ($i=1; $i<=$count_num; $i++){
			 $filename = 'file'.$i;
			 $this->upload->do_upload($filename);
			}
		if ( ! $this->upload->do_upload('file'))
		  {
		   echo "<script>alert('上传失败！请选择上传文件');history.go(-1);</script>";
		  } 
		  else
		  {
		  	$cell = $this->input->post('cell');
		    foreach($cell as $cell_id){
				$this->upload_pic_model->upload_pic_cell($cell_id);
		       }
		   
		   echo "<script>alert('上传成功！');history.go(-1);</script>";
		   //echo 'public/images/'.$img;exit;
		  // $this->load->view('upload_success', $data);
			}	
		}else{
		redirect('upload_pic/get_cell');
		}	
	 // $this->load->Model('upload_pic_model');
	 // $this->Madmin->upload_pic_insert();
 } }
}
?>
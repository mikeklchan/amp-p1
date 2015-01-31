<?php
class Floor extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
		header("Content-type:text/html;charset=utf-8");		
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('building_model');
		$this->load->model('floor_model');
		$this->load->model('project_model');
		
		$this->load->model('cell_model');
			$this->load->library('common'); 
	
	}
	

	public function floor_list($floor_id=false,$page=1){	
		//建筑详细信息
		$this->input->get();
		//$floor_id=$this->input->get('id');
		//echo $floor_id;exit;
		//$page=$this->input->get();
		//echo $floor_id;exit;
		$data['floor_item'] = $this->floor_model->floor_detail($floor_id);
		//echo '<pre>';var_dump($data['floor_item']);echo '</pre>';exit;
		
		//楼层详细信息右边的信息展示
		$data['namedb']=$this->floor_model->floor_bg_list($floor_id);
	
		//单元列表
		$data['cell_item'] = $this->cell_model->get_cell($page,$floor_id);
		//echo '<pre>';var_dump($data['cell_item']);echo '</pre>';exit;
		$count = $this->cell_model->count($floor_id);
		//echo $count->result_array[0]['COUNT(*)'];exit;
		//$Arr = explode('/',$_SERVER['REQUEST_URI']);
		//echo $Arr;exit;
		$project_id=$data['floor_item']['PROJECT_ID'];
		$building_id=$data['floor_item']['BUILDING_ID'];
		$data['project_item']=$this->project_model->get_oneproject($project_id);
		$data['building_item']=$this->building_model->building_detail($building_id);
		//分页
	    $config['base_url'] = base_url().'index.php/floor/floor_list/'.$floor_id;//设置分页的url路径
	    $config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
	    $config['per_page']=20;//每页显示条数
	    $config['uri_segment']=4;//设置URI 的哪个部分包含页数
	    $config['num_links']=1;//当前页码的前面和后面的“数字”链接的数量
		$config['use_page_numbers']=TRUE;//默认分页URL中是显示每页记录数,启用use_page_numbers后显示的是当前页码
	    $config['full_tag_open'] = '<ul class="pages">';//把打开的标签放在所有结果的左侧。
	    $config['full_tag_close'] = '</ul>';//把关闭的标签放在所有结果的右侧。
	    $config['first_link'] = '<div><i class="fa_angle_double_left fa"></i></div>';//你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE
	    $config['first_tag_open'] = '<li class="start">';//“第一页”链接的打开标签。
	    $config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
	    $config['last_link'] = '<div><i class="fa_angle_double_right fa"></i></div>';//你希望在分页的右边显示“最后一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
	    $config['last_tag_open'] = '<li class="end">';//“最后一页”链接的打开标签。
	    $config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
	    $config['prev_link'] = '<div><i class="fa_angle_left fa"></i></div>';//你希望在分页中显示“上一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
	    $config['prev_tag_open'] = '<li class="previous">';//“上一页”链接的打开标签 。
	    $config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签 。
	    $config['next_link'] = '<div><i class="fa_angle_right fa"></i></div>';//你希望在分页中显示“下一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
	    $config['next_tag_open'] = '<li class="next">';//“下一页”链接的打开标签 。
	    $config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签 。
		
	    $config['num_tag_open'] = '<div><li class="prev">';//“数字”链接的打开标签。
	    $config['num_tag_close'] = '</li><div>';//“数字”链接的关闭标签。
	    $config['cur_tag_open'] = '<div><li class="current">';//“当前”链接的打开标签。
	    $config['cur_tag_close'] = '</li></div>';//“当前”链接的关闭标签。
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $pag = $this->pagination->create_links();  //我们就得到了分页了
	    $data['page'] = $page;
	    $data['pag'] = $pag;
	
		
		

		 $data['title']='楼层详细信息';
	    $this->load->view('project/project_head',$data);
		$this->load->view('project/project_floor/project_floor',$data);
		$this->load->view('project/project_footer');
	}
	public function floor_edit($id=false){
		$this->input->get();
		$data['floor_item'] = $this->floor_model->floor_detail($id);
		$project_id=$data['floor_item']['PROJECT_ID'];
		$building_id=$data['floor_item']['BUILDING_ID'];
		$data['project_item']=$this->project_model->get_oneproject($project_id);
		$data['building_item']=$this->building_model->building_detail($building_id);
		$data['floor_id']=$id;
		 $data['title']='楼层详细信息';
	    $this->load->view('project/project_head',$data);
		$this->load->view('project/project_floor/floor_info_edit',$data);
		$this->load->view('project/project_footer');
	}
	public function edit_data(){
		
		
		$floor_id = $this->input->post('FLOOR_ID');
		$data['floor'] = $this->floor_model->floor_detail($floor_id);
		if(!empty($data['floor'])){
			//楼层id存在
			$data['floor_item'] = $this->floor_model->floor_update();
			redirect('floor/floor_list/'.$floor_id.'/1');
		}else{
			//如果楼层id存在
			redirect('floor/floor_list/'.$floor_id.'/1');
		}
	}

}

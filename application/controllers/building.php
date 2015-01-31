<?php
class Building extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
		header("Content-type:text/html;charset=utf-8");		
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('project_model');
		$this->load->model('building_model');
		$this->load->model('floor_model');
	}
	
	public function building_list($building_id=false,$page=1){
		//建筑物详细信息
		$this->input->get();
		
		//echo $page;
		$data['building_item'] = $this->building_model->building_detail($building_id);
		//echo '<pre>';var_dump($data['building_item']);echo '</pre>';exit;
		$project_id=$data['building_item']['PROJECT_ID'];
		//建筑物详细信息右边的信息展示
		$data['namedb']=$this->building_model->building_bg_list($building_id);
		
		$data['project_item']=$this->project_model->get_oneproject($project_id);
		
		$data['floor_item'] = $this->floor_model->get_floor($page,$building_id);

		//echo '<pre>';var_dump($data['cell_item']);echo '</pre>';exit;
		$count = $this->floor_model->count($building_id);
		//ECHO $count->result_array[0]['COUNT(*)'];EXIT;
		//分页
	    $config['base_url'] = base_url().'index.php/building/building_list/'.$building_id;//设置分页的url路径
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
		

		//$data['project_id'] = $project_id;
	    $data['title']='建筑物详细信息';
	    $this->load->view('project/project_head',$data);
		$this->load->view('project/project_building/project_building',$data);
		$this->load->view('project/project_footer');
	}
	public function building_edit($id=false){
		$this->input->get();
		$data['building_item'] = $this->building_model->building_detail($id);
		$project_id=$data['building_item']['PROJECT_ID'];
		$data['project_item']=$this->project_model->get_oneproject($project_id);
		$data['building_id']=$id;
		$data['title']='建筑物详细信息';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_building/building_info_edit',$data);
		$this->load->view('project/project_footer');
	}
	public function edit_data(){
		
		$building_id = $this->input->post('BUILDING_ID');
		$data['building'] = $this->building_model->building_detail($building_id);
		if(!empty($data['building'])){
			//建筑id存在
			$data['building_item'] = $this->building_model->building_update();
			redirect('building/building_list/'.$building_id.'/1');
		}else{
			//如果建筑id不存在
			redirect('building/building_list/'.$building_id.'/1');
		}
	}

}

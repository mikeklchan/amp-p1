<?php
class Project extends CI_Controller{
	public function __construct()
	{
		parent::__construct();		
		$this->load->library('session');
		$this->load->helper('url');
		header("Content-type:text/html;charset=utf-8");
		$this->load->model('project_model');
		$this->load->model('building_model');
	}

	public function index($district='BJ'){
		$this->input->get();
		$data['project_item'] = $this->project_model->get_project($district);
		$data['title']="项目列表";
		$data['district']=$district;
		$count = $this->project_model->count();
		
	  //获取AMP_PROJECT_STAT_V这个张表中的所以数据，并把得到的数据放到项目列表页中
	   $data['AMP_PROJECT_V'] = $this->project_model->amp_project_v();
	  
		//分页
		$config['base_url'] = base_url().'index.php/project/project_list/';//设置分页的url路径
		$config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
		$config['per_page']=20;//每页显示条数
		$config['uri_segment']=2;//设置URI 的哪个部分包含页数
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
		$data['pag'] = $pag;
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_list/project_list',$data);
		$this->load->view('project/project_footer');
	}
	public function project_list($id=false,$page=1){
		$data['project_item'] = $this->project_model->get_project($page);
		//echo '<pre>';var_dump($data['project_item']);echo '</pre>';exit;
		$count = $this->project_model->count();
		//分页
	    $config['base_url'] = base_url().'index.php/project/project_list/'.$id;;//设置分页的url路径
	    $config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
	    $config['per_page']=10;//每页显示条数
	    $config['uri_segment']=2;//设置URI 的哪个部分包含页数
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
	    $data['pag'] = $pag;
		
		//$data['title'] = $data['project_item']['TITLE'];
	    $data['title']="项目列表";
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_list/project_list',$data);
		$this->load->view('project/project_footer');
		
		
	}
	

	public function project_detail($id=false,$page=1){
         //项目详细信息
		 $this->input->get();
		//$project_id=$this->input->get('id');
		//$page=$this->input->get('page');
		//echo $page;exit;
		//echo $project_id;exit;
		$data['project_item'] = $this->project_model->project_detail($id);
		
		//项目详细信息右边的信息展示
		$data['namedb']=$this->project_model->project_bg_list($id);
		//echo '<pre>';var_dump($data['floor_item']);echo '</pre>';exit;
		//单元列表
		$data['building_item'] = $this->building_model->get_building($page,$id);

		//echo '<pre>';var_dump($data['cell_item']);echo '</pre>';exit;
		$count = $this->building_model->count($id);
		//分页
	    $config['base_url'] = base_url().'index.php/project/project_detail/'.$id;//设置分页的url路径
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
	    $config['num_tag_open'] = '<li class="prev">';//“数字”链接的打开标签。
	    $config['num_tag_close'] = '</li>';//“数字”链接的关闭标签。
	    $config['cur_tag_open'] = '<div><li class="current"><div>';//“当前”链接的打开标签。
	    $config['cur_tag_close'] = '</li>';//“当前”链接的关闭标签。
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $pag = $this->pagination->create_links();  //我们就得到了分页了
	    $data['pag'] = $pag;
		
		
		$data['project_id']=$id;
		$data['title']="项目详细信息";
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_list/project_list_detail',$data);
		$this->load->view('project/project_footer');
	}
	public function project_edit($id=false){
		$this->input->get();
		$data['project_item'] = $this->project_model->project_detail($id);
		
		$data['project_id']=$id;
		$data['title']='项目详细信息';
		$this->load->view('project/project_head',$data);
		
		$this->load->view('project/project_list/project_info_edit',$data);
		$this->load->view('project/project_footer');
	}
	public function edit_data(){
		
		$project_id = $this->input->post('PROJECT_ID');
		$data['project'] = $this->project_model->project_detail($project_id);
		if(!empty($data['project'])){
			//项目id存在
			$data['project_item'] = $this->project_model->project_update();
			redirect('project/project_detail/'.$project_id.'/1');
		}else{
			//如果项目id存在
			redirect('project/project_detail/'.$project_id.'/1');
		}
		
	}
	
}
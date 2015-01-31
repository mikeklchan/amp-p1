<?php
class Project_info_maintain extends CI_Controller {
	//加载系统函数
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');		
		$this->load->helper('url');
		$this->load->model('project_info_maintain_model');
		
	}

	public function view($page=1)
	{	
		
		
		$data['project_item'] = $this->project_info_maintain_model->get_project_list($page);
		//echo '<pre>';var_dump($data['project_item']);echo '</pre>';exit;
		$count = $this->project_info_maintain_model->count();
		//分页
	    $config['base_url'] = base_url().'index.php/project_info_maintain/view/';//设置分页的url路径
	    $config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
	    $config['per_page']=10;//每页显示条数
	    $config['uri_segment']=3;//设置URI 的哪个部分包含页数
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
		$data['page'] = $page;
	
		$data['title'] = '项目信息维护';
		$this->load->view('project/project_head',$data);
		$this->load->view('project_info_maintain/project_info_maintain',$data);
		$this->load->view('project/project_footer');
	
	}
	//项目修改
	public function project_edit($id=false){
		$this->input->get();
		$data['project_item'] = $this->project_info_maintain_model->project_detail($id);
		
		$data['project_id']=$id;
		$data['title']='项目信息修改';
		$this->load->view('project/project_head',$data);
		
		$this->load->view('project_info_maintain/project_info_edit',$data);
		$this->load->view('project/project_footer');
	}
	public function edit_data(){
		
		$project_id = $this->input->post('PROJECT_ID');
		$data['project'] = $this->project_info_maintain_model->project_detail($project_id);
		if(!empty($data['project'])){
			//项目id存在
			$data['project_item'] = $this->project_info_maintain_model->project_update();
			redirect('project_info_maintain/view/');
		}else{
			//如果项目id存在
			redirect('project_info_maintain/edit_data/');
		}
	}
	//项目增加
	public function project_add(){
		

		$data['title']='添加项目';
		$this->load->view('project/project_head',$data);
		
		$this->load->view('project_info_maintain/project_info_add',$data);
		$this->load->view('project/project_footer');
	}
	public function add_data(){				
		$data['project_item'] = $this->project_info_maintain_model->project_insert();
		redirect('project_info_maintain/view/');
	
	}
	//项目删除
	public function project_delete($project_id){
		$data['cell_item'] = $this->project_info_maintain_model->project_delete($project_id);
		redirect('project_info_maintain/view/');
	}
}

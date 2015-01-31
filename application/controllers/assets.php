<?php 
class Assets extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('assets_model');
	
	}
		
	public function assets_view($page=1)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的商标列表页
		 *+++++++++++++++++++++++
		 */
		/*$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$page=$pagearr[3];//得到分页的页码
		
		*/
		$this->input->get();
		$dbr=$this->assets_model->assets_view($page);
		$data['dbr']=$dbr;
	
		$count = $this->assets_model->count();//获取数据总条数
		//分页
		$config['base_url'] = base_url().'index.php/assets/assets_view';//设置分页的url路径
		$config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
		$config['per_page']=50;//每页显示条数
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

		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_view',$data);
		$this->load->view('project/project_footer');
	}
	
	public function assets_details()
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的商标详情页
		*+++++++++++++++++++++++
		*/
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$brand_id=$pagearr[3];
		
		$dbr=$this->assets_model->assets_details($brand_id);
		$data['dbr']=$dbr;

		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_details',$data);
		$this->load->view('project/project_footer');
	}
	
	
	
	
	
	public function assets_view_domain($page=1)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的网址、域名列表页
		*+++++++++++++++++++++++
		*/
		
		$this->input->get();
		
		$dbr=$this->assets_model->assets_view_domain($page);
	
		$data['dbr']=$dbr;
		
		$count = $this->assets_model->count_domain();//获取数据总条数
	
		//分页
		$config['base_url'] = base_url().'index.php/assets/assets_view_domain';//设置分页的url路径
		$config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
		$config['per_page']=50;//每页显示条数
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
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_view_domain',$data);
		$this->load->view('project/project_footer');
	}
	
	public function assets_domain()
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的网址、域名详情页
		*+++++++++++++++++++++++
		*/
		
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		
		$site_id=$pagearr[3];
		
		$dbr=$this->assets_model->assets_domain($site_id);
		$data['dbr']=$dbr;
		
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_domain',$data);
		$this->load->view('project/project_footer');
	}
	
	
	
	
	
	public function assets_view_patent($page=1)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的专利列表页
		*+++++++++++++++++++++++
		*/
		
		$this->input->get();
		$dbr=$this->assets_model->assets_view_patent($page);
		$data['dbr']=$dbr;
		
		
		$count = $this->assets_model->count_patent();//获取数据总条数
	
		//分页
		$config['base_url'] = base_url().'index.php/assets/assets_view_patent';//设置分页的url路径
		$config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
		$config['per_page']=50;//每页显示条数
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
	
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_view_patent',$data);
		$this->load->view('project/project_footer');
	}
	
	public function assets_patent()
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的专利详情页
		*+++++++++++++++++++++++
		*/
	
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
	
		$patent_id=$pagearr[3];
	
		$dbr=$this->assets_model->assets_paten($patent_id);

		$data['dbr']=$dbr;
	
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_paten',$data);
		$this->load->view('project/project_footer');
	}
	
	
	
	
	
	public function assets_view_copyright($page=1)
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的著作权列表页
		*+++++++++++++++++++++++
		*/
		
		$this->input->get();
	
	
	
		$dbr=$this->assets_model->assets_view_copyright($page);
		$data['dbr']=$dbr;
	
		$count = $this->assets_model->count_copyright();//获取数据总条数
		//分页
		$config['base_url'] = base_url().'index.php/assets/assets_view_copyright';//设置分页的url路径
		$config['total_rows'] = $count->result_array[0]['COUNT(*)'];//得到数据库中的记录的总条数
		$config['per_page']=50;//每页显示条数
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

		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_view_copyright',$data);
		$this->load->view('project/project_footer');
	}
	
	public function assets_copyright()
	{
		/*+++++++++++++++++++++++
		 * 这个方法是无形资产中的著作权详情页
		*+++++++++++++++++++++++
		*/
	
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
	
		$copyright_id=$pagearr[3];
	
		$dbr=$this->assets_model->assets_copyright($copyright_id);
		$data['dbr']=$dbr;
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets/assets_copyright',$data);
		$this->load->view('project/project_footer');
	}
}

?>
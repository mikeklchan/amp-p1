<?php 
class Assetsupdata extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('assets_model');
		$this->load->model('assetsupdata_model');
	
	}	
	public function view_updata()
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的商标修改
		 * 
		 * */
		
		$frombarr=$this->input->post();//获取从表单中用post方式提交过来的数据
		
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$brand_id=$pagearr[3];

		if (isset($brand_id) && !empty($frombarr)) 
		{
			$dbupdata=$this->assetsupdata_model->view_updata($brand_id,$frombarr);
			if ($dbupdata)
			 {
        			redirect("assets/assets_view");
			 }
		}
		
		$dbr=$this->assets_model->assets_details($brand_id);
		$data['dbr']=$dbr;
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets_updata/view_updata',$data);
		$this->load->view('project/project_footer');
	}
	
	
	public function view_domain_updata()
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的网站/域名修改
		*
		* */
	
		$frombarr=$this->input->post();//获取从表单中用post方式提交过来的数据
	
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$site_id=$pagearr[3];
	
		if (isset($site_id) && !empty($frombarr))
		{
			$dbupdata=$this->assetsupdata_model->view_domain_updata($site_id,$frombarr);
			if ($dbupdata)
			{
				redirect("assets/assets_view_domain");
			}
		}
	
		$dbr=$this->assets_model->assets_domain($site_id);
		$data['dbr']=$dbr;
	
		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets_updata/view_domain_updata',$data);
		$this->load->view('project/project_footer');
	}
	
	public function view_patent_updata()
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的专利修改
		*
		* */
	
		$frombarr=$this->input->post();//获取从表单中用post方式提交过来的数据
	
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$patent_id=$pagearr[3];
	
		if (isset($patent_id) && !empty($frombarr))
		{
			$dbupdata=$this->assetsupdata_model->view_patent_updata($patent_id,$frombarr);
			if ($dbupdata)
			{
				redirect("assets/assets_view_patent");
			}
		}
	
		$dbr=$this->assets_model->assets_paten($patent_id);
		$data['dbr']=$dbr;

		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets_updata/view_patent_updata',$data);
		$this->load->view('project/project_footer');
	}
	
	public function view_copyright_updata()
	{
		/*+++++++++++++++++++++++++++++
		 * 这个是无形资产中的著作权修改
		*
		* */
	
		$frombarr=$this->input->post();//获取从表单中用post方式提交过来的数据
	
		$pagearr=$this->uri->segment_array();//把url地址以数组的形式打印出来
		$copyright_id=$pagearr[3];
	
		if (isset($copyright_id) && !empty($frombarr))
		{
			$dbupdata=$this->assetsupdata_model->view_copyright_updata($copyright_id,$frombarr);
			if ($dbupdata)
			{
				redirect("assets/assets_view_copyright");
			}
		}
	
		$dbr=$this->assets_model->assets_copyright($copyright_id);
		$data['dbr']=$dbr;

		$data['title']='无形资产';
		$this->load->view('project/project_head',$data);
		$this->load->view('project/project_assets_updata/view_copyright_updata',$data);
		$this->load->view('project/project_footer');
	}
}
?>
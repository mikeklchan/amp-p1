<?php

class Search extends CI_Controller {
	//加载系统函数
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('search_model');
		$this->unitlist=array('空值','办公','保卫部','仓库','车位','车位（微型）','车位（子母）','储藏间','丹棱仓库','丹棱库房','地下仓储','服务用房','岗亭','公寓','还建用房','会所','机房','库房','垃圾房','面馆','人防车位','人防车位（残疾人车位）','人防车位（库房）','商业','收费口','无障碍车位','洗车','洗车房');
		$this->company=array('北京朝外搜候房地产有限公司','北京红石建外房地产开发有限公司','北京建华置地有限公司','北京凯恒房地产有限公司','北京蓝泉物业管理有限公司','北京千禧房地产开发有限公司','北京山石房地产有限责任公司','北京搜候房地产有限责任公司','北京索图世纪投资管理有限公司','北京望京搜候房地产有限公司','北京野力房地产开发有限公司','北京展鹏世纪投资管理有限公司','北京中鸿天房地产有限公司','上海弘圣房地产开发有限公司','上海皓泽投资管理有限公司','搜候(上海)投资有限公司','万琦有限公司','纬福有限公司','新金宝有限公司');
		$this->project=array('SOHO尚都','SOHO现代城','北京公馆','朝外SOHO','朝阳门 I、II 期','丹棱SOHO','东海广场','复兴广场','光华路SOHO','光华路SOHO II','嘉盛中心','建外SOHO-六期','建外SOHO-七期','建外SOHO-三期','建外SOHO-四期','建外SOHO-五期','建外SOHO-一、二期','凌空SOHO','前门大街','三里屯SOHO-北区','三里屯SOHO-共同','三里屯SOHO-南区','世纪广场','望京SOHO','望京SOHO-T1T2','银河SOHO','中关村SOHO','中山广场');
	}

	public function index() 
	{
		
		$data['data']=$this->search_model->index();
		$data['unitlist']=$this->unitlist;
		  //foreach($data['unitlist'] as $v2){
		 // echo $v2;}
		  //exit;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$this->load->view('search/index', $data);
	}

	public function callback()
	{
		$arr['MASTER_ID']=$this->input->post('MASTER_ID');
		if(empty($arr['MASTER_ID']))
		{
			unset($arr['MASTER_ID']);
		}
		$arr['COMPANY_NAME']=$this->input->post('COMPANY_NAME');
		if(empty($arr['COMPANY_NAME']))
		{
			unset($arr['COMPANY_NAME']);
		}
		$arr['PROJECT_NAME']=$this->input->post('PROJECT_NAME');
		if(empty($arr['PROJECT_NAME']))
		{
			unset($arr['PROJECT_NAME']);
		}
		$arr['BUILDING_NAME']=$this->input->post('BUILDING_NAME');
		if(empty($arr['BUILDING_NAME']))
		{
			unset($arr['BUILDING_NAME']);
		}
		$arr['FIELD_7']=$this->input->post('FIELD_7');
		if(empty($arr['FIELD_7']))
		{
			unset($arr['FIELD_7']);
		}
		$arr['FIELD_8']=$this->input->post('FIELD_8');
		if(empty($arr['FIELD_8']))
		{
			unset($arr['FIELD_8']);
		}
		$arr['FIELD_9']=$this->input->post('FIELD_9');
		if(empty($arr['FIELD_9']))
		{
			unset($arr['FIELD_9']);
		}
		$data['data']=$this->search_model->search($arr);
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$data['searchdata']=$arr;
		$this->load->view('search/search', $data);
	}
	
	public function detail() 
	{
		$id=$this->input->get('MASTER_ID');
		$data['data']=$this->search_model->detail($id);
		//echo "<pre>";var_dump($data);echo "</pre>";exit;
		$this->load->view('search/detail', $data);
	}
	


	public function view()
	{	$this->load->library('session');
		//$data=$this->search_model->view();
		$data['unitlist']=$this->unitlist;
		  //foreach($data['unitlist'] as $v2){
		 // echo $v2;}
		  //exit;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$data['title']="数据查询";
		$this->load->view('project/project_head',$data);
		$this->load->view('search/search',$data);
		$this->load->view('project/project_footer');
	}
	

	public function testunit() 
	{
		
		$data['data']=$this->search_model->index();
		
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$this->load->view('project/project_head');
		$this->load->view('search/search', $data);
		$this->load->view('project/project_footer');
	}


	public function testsearch()
	{
		
		$arr['AMP_CODE']=$this->input->post('AMP_CODE');//资产信息
		if(empty($arr['AMP_CODE']))
		{
			unset($arr['AMP_CODE']);
		}

		$arr['COMPANY']=$this->input->post('COMPANY');//公司
		if(empty($arr['COMPANY']))
		{
			unset($arr['COMPANY']);
		}
		$arr['PROJECT']=$this->input->post('PROJECT');//项目
		if(empty($arr['PROJECT']))
		{
			unset($arr['PROJECT']);
		}

		$arr['BUILDING']=$this->input->post('BUILDING');//建筑物名称
		if(empty($arr['BUILDING']))
		{
			unset($arr['BUILDING']);
		}
		$arr['FLOOR']=$this->input->post('FLOOR');//标称楼层
		if(empty($arr['FLOOR']))
		{
			unset($arr['FLOOR']);
		}
		$arr['BLOCK_CODE']=$this->input->post('BLOCK_CODE');//标称单元号
		if(empty($arr['BLOCK_CODE']))
		{
			unset($arr['BLOCK_CODE']);
		}
		$arr['PROPERTY_TYPE']=$this->input->post('PROPERTY_TYPE');//单元类型
		if(empty($arr['PROPERTY_TYPE']))
		{
			unset($arr['PROPERTY_TYPE']);
		}


		$arr['JDE_RENTAL_STATUS']=$this->input->post('JDE_RENTAL_STATUS');
		if(empty($arr['JDE_RENTAL_STATUS']))
		{
			unset($arr['JDE_RENTAL_STATUS']);

		}
		
		$arr['JDE_RENTAL_TYPE']=$this->input->post('JDE_RENTAL_TYPE');
		if(empty($arr['JDE_RENTAL_TYPE']))
		{
			unset($arr['JDE_RENTAL_TYPE']);

		}
		$arr['BLOCK_SOURCE']=$this->input->post('BLOCK_SOURCE');
		if(empty($arr['BLOCK_SOURCE']))
		{
			unset($arr['BLOCK_SOURCE']);

		}
		$arr['BLOCK_CERT']=$this->input->post('BLOCK_CERT');//是否有产权
		if(empty($arr['BLOCK_CERT']))
		{
			unset($arr['BLOCK_CERT']);

		}

		$arr['BLOCK_MORTGAGE']=$this->input->post('BLOCK_MORTGAGE');//是否抵押
		if(empty($arr['BLOCK_MORTGAGE']))
		{
			unset($arr['BLOCK_MORTGAGE']);

		}
		$arr['BLOCK_CLOSED']=$this->input->post('BLOCK_CLOSED');//是否查封
		if(empty($arr['BLOCK_CLOSED']))
		{
			unset($arr['BLOCK_CLOSED']);


		}
		$data['data']=$this->search_model->testsearch($arr);
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$data['searchdata']=$arr;
		$data['title']="数据查询";
		$this->load->view('project/project_head',$data);
		$this->load->view('search/search', $data);
        $this->load->view('project/project_footer');
	}

	 /*public function testfloor() 
	{
		//$arr['']=$this->input->post('UNIT_ID');
		if(empty($arr['UNIT_ID']))
		{
			unset($arr['UNIT_ID']);
		}
       
		$data['data']=$this->search_model->testfloor($);
		//var_dump($data['data']);exit;
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$this->load->view('project/project_head');
		$this->load->view('search/search', $data);
		$this->load->view('project/project_footer');
	}
  
	public function testbuilding() 
	{
		$arr['BUILDING']=$this->input->post('BUILDING');
		if(empty($arr['BUILDING']))
		{
			unset($arr['BUILDING']);
		}
		$arr['FLOOR']=$this->input->post('FLOOR');
		if(empty($arr['FLOOR']))
		{
			unset($arr['FLOOR']);
		}
		var_dump($arr['BUILDING']);exit;
		$data['data']=$this->search_model->testfloor($a);
		//var_dump($data['data']);exit;
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$this->load->view('project/project_head');
		$this->load->view('search/search', $data);
		$this->load->view('project/project_footer');
	}*/
	
}

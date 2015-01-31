<?php

class Datasearch extends CI_Controller {
	//加载系统函数
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('datasearch_model');
		
		$this->rental=array('未出租','已出租','自用');
		$this->rental_type=array('产权已售','产权未售','人防','自划');
		$this->block_source=array('自建','购买');
		
		$this->block_cert=array('是','否');
		$this->block_m=array('是','否');
		$this->block_c=array('是','否');
		
		$this->unitlist=array('办公','仓库','车位','公寓','会所','商业','其他');
		$this->company=array('北京朝外搜候房地产有限公司','北京红石建外房地产开发有限公司','北京建华置地有限公司','北京凯恒房地产有限公司','北京蓝泉物业管理有限公司','北京千禧房地产开发有限公司','北京山石房地产有限责任公司','北京搜候房地产有限责任公司','北京索图世纪投资管理有限公司','北京望京搜候房地产有限公司','北京野力房地产开发有限公司','北京展鹏世纪投资管理有限公司','北京中鸿天房地产有限公司','上海弘圣房地产开发有限公司','上海皓泽投资管理有限公司','搜候(上海)投资有限公司','万琦有限公司','纬福有限公司','新金宝有限公司');
		$this->project=array('SOHO尚都','SOHO现代城','北京公馆','朝外SOHO','朝阳门 I、II 期','丹棱SOHO','东海广场','复兴广场','光华路SOHO','光华路SOHO II','嘉盛中心','建外SOHO-六期','建外SOHO-七期','建外SOHO-三期','建外SOHO-四期','建外SOHO-五期','建外SOHO-一、二期','凌空SOHO','前门大街','三里屯SOHO-北区','三里屯SOHO-共同','三里屯SOHO-南区','世纪广场','望京SOHO','望京SOHO-T1T2','银河SOHO','中关村SOHO','中山广场','外滩SOHO');
	}

	public function view()
	{
		$this->load->library('session');
		//$data=$this->search_model->view();
		$data['unitlist']=$this->unitlist;
		  //foreach($data['unitlist'] as $v2){
		 // echo $v2;}
		  //exit;
		$data['rental']=$this->rental;
		$data['rental_type']=$this->rental_type;
		$data['block_source']=$this->block_source;
		$data['block_cert']=$this->block_cert;
		$data['block_m']=$this->block_m;
		$data['block_c']=$this->block_c;
		
		$data['company']=$this->company;
		$data['project']=$this->project;
		$data['title']='数据查询';
		$this->load->view('project/project_head',$data);
		$this->load->view('search/datasearch',$data);
		$this->load->view('project/project_footer');
	}
	
/*
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

*/
	public function testsearch($page=1)
	{
	    $postlist=$this->input->post();
	    //print_r($arr);exit;
	    if (!empty($postlist))
	    {
	     $this->session->set_userdata('inputarr',$postlist);
	    }
	    $tiaojian=empty($postlist) ? $this->session->userdata('inputarr') : $postlist;
		
		$arr['AMP_CODE']=$tiaojian['AMP_CODE'];//资产信息
		if(empty($arr['AMP_CODE']))
		{
			unset($arr['AMP_CODE']);
		}

		$arr['COMPANY']=$tiaojian['COMPANY'];//公司
		if(empty($arr['COMPANY']))
		{
			unset($arr['COMPANY']);
		}
		$arr['PROJECT']=$tiaojian['PROJECT'];//项目
		if(empty($arr['PROJECT']))
		{
			unset($arr['PROJECT']);
		}

		$arr['BUILDING']=$tiaojian['BUILDING'];//建筑物名称
		if(empty($arr['BUILDING']))
		{
			unset($arr['BUILDING']);
		}
		$arr['FLOOR']=$tiaojian['FLOOR'];//标称楼层
		if(empty($arr['FLOOR']))
		{
			unset($arr['FLOOR']);
		}
		$arr['BLOCK_CODE']=$tiaojian['BLOCK_CODE'];//标称单元号
		if(empty($arr['BLOCK_CODE']))
		{
			unset($arr['BLOCK_CODE']);
		}
		$arr['PROPERTY_TYPE']=$tiaojian['PROPERTY_TYPE'];//单元类型
		if(empty($arr['PROPERTY_TYPE']))
		{
			unset($arr['PROPERTY_TYPE']);
		}


		$arr['JDE_RENTAL_STATUS']=$tiaojian['JDE_RENTAL_STATUS'];
		if(empty($arr['JDE_RENTAL_STATUS']))
		{
			unset($arr['JDE_RENTAL_STATUS']);

		}
		
		$arr['JDE_RENTAL_TYPE']=$tiaojian['JDE_RENTAL_TYPE'];
		if(empty($arr['JDE_RENTAL_TYPE']))
		{
			unset($arr['JDE_RENTAL_TYPE']);

		}
		$arr['BLOCK_SOURCE']=$tiaojian['BLOCK_SOURCE'];
		if(empty($arr['BLOCK_SOURCE']))
		{
			unset($arr['BLOCK_SOURCE']);

		}
		
		$arr['BLOCK_CERT']=$tiaojian['BLOCK_CERT'];//是否有产权
		

		$arr['BLOCK_MORTGAGE']=$tiaojian['BLOCK_MORTGAGE'];//是否抵押
		
		$arr['BLOCK_CLOSED']=$tiaojian['BLOCK_CLOSED'];//是否查封
		
		//print_r($arr);exit;
		$this->input->get();
		//print_r($arr);
		//echo "<br/>";
		//print_r($page);
		//die();
		$data['data']=$this->datasearch_model->testsearch($arr,$page);
		
		//分页
		$count = $this->datasearch_model->count($arr);//获取数据总条数

		$count2 = empty($count->result_array[0]['COUNT(*)'])? 1 : $count->result_array[0]['COUNT(*)'];
// 		print_r($count);
// 		echo "<br/>";
// 		//print_r($page);
// 		die();
		
		$config['base_url'] = base_url().'index.php/datasearch/testsearch/';//设置分页的url路径
		$config['total_rows'] = $count2;//得到数据库中的记录的总条数
		$config['per_page']=1000;//每页显示条数
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
		
		$data['page']=$page;
		
		$data['rental']=$this->rental;
		$data['rental_type']=$this->rental_type;
		$data['block_source']=$this->block_source;
		$data['block_cert']=$this->block_cert;
		$data['block_m']=$this->block_m;
		$data['block_c']=$this->block_c;
		$data['unitlist']=$this->unitlist;
		$data['company']=$this->company;
		$data['project']=$this->project;
		$data['searchdata']=$arr;
        //print_r($data);
        //die();
		
		$this->session->set_userdata('data',$arr);
		
		$data['title']='数据查询';
		$this->load->view('project/project_head',$data);
		$this->load->view('search/datasearch', $data);
        $this->load->view('project/project_footer');
	}

	
}

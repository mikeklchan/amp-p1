<?php 
class Amp_jde extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('jde_select_model');
	
	}
	
	public function jde($amp_code=false)
	{
		$this->input->get();
		$arr=$this->jde_select_model->jde_select($amp_code);
		
		$jde_select=array();
		$promarr=array('FLOOR_ID','BUILDING_ID','PROJECT_ID','COMPANY_ID');//这个是在添加到JDE表中时不需要的字段
		foreach ($arr as $k=>$v){
			foreach ($v as $key=>$val){
				if (!in_array($key,$promarr)) {
					$jde_select[$key]=$val;
				}				
			}
		}

		if (!empty($jde_select)) 
		{
			$jde_select['EV01']=0;
			$jde_select['EV02']=0;
			$jde_select['EV03']=0;
			$jde_select['MODIFIED_DATE_JDE']=null;
			$jde_select['CREATED_DATE']=time();
			$jde_select['CREATED_BY']=$this->session->userdata('name');//获取用户名
			$jde_select['MODIFIED_DATE']=time();
			$jde_select['MODIFIED_BY']=$this->session->userdata('name');

			$jde_insert=$this->jde_select_model->jde_insert($jde_select);
			if ($jde_insert)
				{
					echo ok;
				 }else {
					echo no;
				}
		}
		
		die();
	
		
		
	}
	
}

?>
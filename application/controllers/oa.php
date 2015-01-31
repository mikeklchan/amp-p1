<?php
class Oa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//error_reporting(0);
		date_default_timezone_set('Asia/Shanghai');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('oa_model');
		header("Content-type:text/html;charset=utf-8");
	}
	public function soap()
	{
		$str = $_REQUEST['str'];
		$arr = json_decode($str);
		$this->oa_model->forsoap($sql);
		echo 1;
	}
	public function excellist()
	{
		echo 11;
		$data ['excellist'] = $this->oa_model->GetExcelfile();
		$data['title'] = '数据接口确认';
		$this->load->view('project/project_head',$data);
		$this->load->view('oa/excellist',$data);
		$this->load->view('project/project_footer');
		//include('application/views/oa/excellist.php');
	}
	public function exceldatalist()
	{
		$data ['excellist'] = $this->oa_model->GetExcelfile();
		$output_arr = array();
		$exceldata = $this->oa_model->getpreview($_GET['oid']);
		//$exceldata = $this->oa_model->exceldata('1.xls');
		$i=0;
		foreach($exceldata as $e)
		{
			$output_arr[$i] = $e;
			$i++;
		}
		$data['exceldata'] = $output_arr;
		$data['title'] = '数据接口确认';
		$this->load->view('project/project_head',$data);
		$this->load->view('oa/excellist',$data);
		$this->load->view('project/project_footer');
	}
	public function import()
	{
		$this->oa_model->improtexceldata($_GET['oid']);
		$url = base_url()."index.php/oa/excellist/";
		echo "<script>alert('更新成功');</script>";
		echo "<script>location.href='".$url."'</script>";

		
	}
}
<?php
class Textinfoedit_model extends CI_Model {
	public function __construct()
	{
		
		
		$this->load->database();
		date_default_timezone_set('Asia/Shanghai');//设置默认时区为上海时间
	}
	public function index ($file_name){
		
		$da = new Spreadsheet_Excel_Reader(); //实例化
		$da->setOutputEncoding('utf-8');      //编码
		$da->read('public/testupload/'.$file_name);           //读取的文件
		
		$count=count($da->sheets[0]['cells']);
			if($count!=1){
    		for ($i = 2; $i <= $count; $i++)
    		{
    		$arr[$i]=isset($da->sheets[0]['cells'][$i])?($da->sheets[0]['cells'][$i]):"";
    		//var_dump($arr['1']);exit;
    		}return $arr;
    		}
    		// echo '<pre>';print_r($arr);echo '<pre>';exit;
    		return null;
		//var_dump($data['sheet']);exit;
    
    	}
    	public function import_xls ($file_name){
    		$da = new Spreadsheet_Excel_Reader(); //实例化
    		$da->setOutputEncoding('utf-8');      //编码
    		//if(!empty($file_name))
    		$da->read('public/testupload/'.$file_name);
    		           //读取的文件
    	
    		$count=count($da->sheets[0]['cells']);
    		//var_dump($count);exit;
    		if($count!=1){
    		for ($i = 1; $i <= $count; $i++)
    		{
    				$arr[$i]=isset($da->sheets[0]['cells'][$i])?($da->sheets[0]['cells'][$i]):"";
    		//var_dump($arr['1']);exit;
    		}
    		return $arr;
    		}
    		// echo '<pre>';print_r($arr);echo '<pre>';exit;
    		return null;
    		
    		//var_dump($data['sheet']);exit;
    	
    	}
    	public function ampcode(){
    		$ampcode_sql="SELECT column_name FROM user_tab_columns WHERE table_name='AMP_UNIT' ORDER BY COLUMN_ID";
    		$ampcode_query = $this->db->query($ampcode_sql);
    		return $ampcode_query->result_array;
    	
    	}
    }
	
?>
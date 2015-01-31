<?php
class Search_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Shanghai');//设置默认时区为上海时间
	}

	public function index()
	{
	    $sql   = "select * from amp_unit where rownum < 1001";
		$query = $this->db->query($sql);
		return $query->result_array;
	}
	public function search($arr)
	{
	    $sql= "select * from TBL_MASTER where rownum < 1001";
	    if(!empty($arr['MASTER_ID']))
	    {
	    	$sql.=" AND MASTER_ID LIKE '%".$arr['MASTER_ID']."%'";
	    }
		if(!empty($arr['COMPANY_NAME']))
	    {
	    	$sql.=" AND COMPANY_NAME LIKE '%".$arr['COMPANY_NAME']."%'";
	    }
		if(!empty($arr['PROJECT_NAME']))
	    {
	    	$sql.=" AND PROJECT_NAME LIKE '%".$arr['PROJECT_NAME']."%'";
	    }
		if(!empty($arr['BUILDING_NAME']))
	    {
	    	$sql.=" AND BUILDING_NAME LIKE '%".$arr['BUILDING_NAME']."%'";
	    }
		if(!empty($arr['FIELD_7']))
	    {
	    	$sql.=" AND FIELD_7 LIKE '%".$arr['FIELD_7']."%'";
	    }
		if(!empty($arr['FIELD_8']))
	    {
	    	$sql.=" AND FIELD_8 LIKE '%".$arr['FIELD_8']."%'";
	    }
		if(!empty($arr['FIELD_9']))
	    {
	    	if($arr['FIELD_9']=='空值')
	    	{
	    		$sql.=" AND FIELD_9 IS null";
	    	}
	    	else
	    	{
	    		$sql.=" AND FIELD_9 LIKE '%".$arr['FIELD_9']."%'";
	    	}
	    }
		$query = $this->db->query($sql);
		return $query->result_array;
	}
	public function detail($id)
	{
	    $sql   = "select * from TBL_MASTER where";
	    $sql.=" MASTER_ID='".$id."'";
		$query = $this->db->query($sql);
		return $query->result_array;
	}	

	public function testsearch($arr)
	{
		if(empty($arr['COMPANY']) && empty($arr['PROJECT']) && empty($arr['BUILDING']) && empty($arr['FLOOR']))
		{
			
		}
	    else
	    {
	    	if(!empty($arr['COMPANY']))//公司
		    {
		    	$c_id=array();
		    	$sql="SELECT unit_id from amp_unit where PROJECT_ID in (select PROJECT_ID from amp_project where company like'%".$arr['COMPANY']."%')";
			    $query1 = $this->db->query($sql);
			    $query1 = $query1->result_array;
			    foreach($query1 as $val)
			    {
			    	$c_id[]=$val['UNIT_ID'];
			    }
			   // print_r($c_id);exit;
		    	if(empty($c_id))
		    	{
		    		return FALSE;
		    	}
			}  
			//echo $arr['PROJECT'];exit;
		    if(!empty($arr['PROJECT']))//项目
		    {
		    	$p_id=array();
		    	$sql="SELECT unit_id from amp_unit where PROJECT_ID in (select PROJECT_ID from amp_project where project like'%".$arr['PROJECT']."%')";
			    $query2 = $this->db->query($sql);
			    $query2 = $query2->result_array;
			    foreach($query2 as $val)
			    {
			    	$p_id[]=$val['UNIT_ID'];
			    }
		    	if(empty($p_id))
		    	{
		    		return FALSE;
		    	}
		    }

		    if(!empty($arr['BUILDING']))//建筑
		    {
		    	$b_id=array();
		    	$sql="SELECT unit_id from amp_unit where BUILDING_ID in (select BUILDING_ID from amp_building where BUILDING like'%".$arr['BUILDING']."%')";
			    $query3 = $this->db->query($sql);
			    $query3 = $query3->result_array;
			    foreach($query3 as $val)
			    {
			    	$b_id[]=$val['UNIT_ID'];
			    }
		    	if(empty($b_id))
		    	{
		    		return FALSE;
		    	}
		    }

		    if(!empty($arr['FLOOR']))//项目
		    {
		    	$f_id=array();
		    	$sql="SELECT unit_id from amp_unit where FLOOR_ID in (select FLOOR_ID from amp_floor where FLOOR like'%".$arr['FLOOR']."%')";
			    $query4 = $this->db->query($sql);
			    $query4 = $query4->result_array;
			    foreach($query4 as $val)
			    {
			    	$f_id[]=$val['UNIT_ID'];
			    }
		    	if(empty($f_id))
		    	{
		    		return FALSE;
		    	}
		    }
		  // echo '<pre>';print_r($c_id);echo 'qurry1';print_r($p_id);echo 'qurry2';print_r($b_id);echo 'qurry3';print_r($f_id);echo '</pre>';exit;
		    if(empty($c_id) || empty($p_id) || empty($b_id) ||empty($d_id))
		    {
		    	$sql="SELECT unit_id from amp_unit";
			    $allid = $this->db->query($sql);
			    $allid = $allid->result_array;
			    foreach($allid as $val)
			    {
			    	$my_id[]=$val['UNIT_ID'];
			    }
		    	if(empty($my_id))
		    	{
		    		return FALSE;
		    	}
		    }
			if(empty($c_id))
			{
				$c_id=$my_id;
			}
			if(empty($p_id))
			{
				$p_id=$my_id;
			}
			if(empty($b_id))
			{
				$b_id=$my_id;
			}
			if(empty($f_id))
			{
				$f_id=$my_id;
			}
		    $all_pid=array_intersect($c_id,$b_id,$p_id,$f_id);
		    //print_r($all_pid);exit;
		    $count=count($all_pid);
		    if($count>1000)
		    {
		    	$all_pid=array_slice($all_pid, 0, 999);
		    }
		    $all_pid=implode(',',$all_pid);
	    }
		//echo '<pre>';print_r($allarra);echo '</pre>';exit;
	   //echo '<pre>';print_r($all_pid);echo '</pre>';exit;
//echo '<pre>';print_r($c_id);echo 'qurry1';print_r($p_id);echo 'qurry2';print_r($b_id);echo 'qurry3';print_r($f_id);echo '</pre>';exit;

	    $sql= "select * from amp_unit where rownum < 1001";
	    if(!empty($all_pid))
	    {
	    	$sql.=" AND unit_id in(".$all_pid.")";
	    }
		/*if(!empty($arr['BUILDING']))//建筑物名称
	    {
	    	$sql.=" AND BUILDING LIKE '%".$arr['BUILDING']."%'";
	    }

		if(!empty($arr['FLOOR']))//标称楼层
	    {
	    	$sql.=" AND FLOOR LIKE '%".$arr['FLOOR']."%'";
	    }

	    if(!empty($arr['FLOOR']) || !empty($arr['BUILDING']) || !empty($arr['PROJECT']) || !empty($arr['COMPANY']))//标称楼层
	    {
	    	$sql.=" AND FLOOR_ID IN (SELECT FLOOR_ID FROM AMP_FLOOR WHERE ";
	    	//IF()
	    }*/


	    if(!empty($arr['AMP_CODE']))//资产基础信息
	    {
	    	$sql.=" AND AMP_CODE LIKE '%".$arr['AMP_CODE']."%'";
	    }
		
		if(!empty($arr['BLOCK_CODE']))//标称单元号
	    {
	    	$sql.=" AND BLOCK_CODE LIKE '%".$arr['BLOCK_CODE']."%'";
	    }
		if(!empty($arr['PROPERTY_TYPE']))//单元类型
	    {
	    	if($arr['PROPERTY_TYPE']=='空值')
	    	{
	    		$sql.=" AND PROPERTY_TYPE IS null";
	    	}
	    	else
	    	{
	    		$sql.=" AND PROPERTY_TYPE LIKE '%".$arr['PROPERTY_TYPE']."%'";
	    	}
	    }
	    if(!empty($arr['JDE_RENTAL_STATUS']))//出租状态
	    {
	    	$sql.=" AND JDE_RENTAL_STATUS LIKE '%".$arr['JDE_RENTAL_STATUS']."%'";
	    }

	    if(!empty($arr['JDE_RENTAL_TYPE']))//资产属性
	    {
	    	$sql.=" AND JDE_RENTAL_TYPE LIKE '%".$arr['JDE_RENTAL_TYPE']."%'";
	    }

	    if(!empty($arr['BLOCK_SOURCE']))//房屋属性
	    {
	    	$sql.=" AND BLOCK_SOURCE LIKE '%".$arr['BLOCK_SOURCE']."%'";
	    }

	    if(!empty($arr['BLOCK_CERT']))//是否有产权
	    {
	    	$sql.=" AND BLOCK_CERT LIKE '%".$arr['BLOCK_CERT']."%'";
	    }

	    if(!empty($arr['BLOCK_MORTGAGE']))//是否有抵押
	    {
	    	$sql.=" AND BLOCK_MORTGAGE LIKE '%".$arr['BLOCK_MORTGAGE']."%'";
	    }
	     if(!empty($arr['BLOCK_CLOSED']))//是否查封
	    {
	    	$sql.=" AND BLOCK_CLOSED LIKE '%".$arr['BLOCK_CLOSED']."%'";
	    }
//echo $sql;exit;
		$query = $this->db->query($sql);
		return $query->result_array;
	}

	public function testfloor($id)

	{
	    $sql   = "select * from amp_unit where";
	    $sql.=" floor_id=".$id;
		$query = $this->db->query($sql);
		return $query->result_array;
	}
/*
	public function testbuilding($id)

	{
	   $sql= "select * from amp_unit where ";
       if(!empty($arr['BUILDING']))
	    {
	    	$sql.=" BUILDING LIKE '%".$arr['BUILDING']."%'";
	    }
		if(!empty($arr['FLOOR']))
	    {
	    	$sql.=" FLOOR LIKE '%".$arr['FLOOR']."%'";

		$query = $this->db->query($sql);
		return $query->result_array;
	}*/


	function intersect() {
    if (func_num_args() < 2) {
        trigger_error('param error', E_USER_ERROR);
    }

    $args = func_get_args();

    foreach ($args AS $arg) {
        if (!is_array($arg)) {
            trigger_error('param error', E_USER_ERROR);
        }
    }

    $result = array();

    $data = array_count_values(
        call_user_func_array('array_merge', $args)
    );

    foreach ($data AS $value => $count) {
        if ($count > 1) {
            $result[] = $value;
        }
    }

    return $result;
}

}

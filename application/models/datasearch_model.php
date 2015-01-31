<?php
class Datasearch_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Shanghai');//设置默认时区为上海时间
	}

	public function index()
	{
	    $sql   = "select * from amp_unit where rownum < 101";
		$query = $this->db->query($sql);
		return $query->result_array;
	}
	
	public function testsearch($arr,$page)
	{
		//print_r($arr);
		//echo "<br/>";
		//print_r($page);
		//die();
		if(empty($arr['COMPANY']) && empty($arr['PROJECT']) && empty($arr['BUILDING']) && empty($arr['FLOOR']))
		{
			
		}
	    else
	    {
	    	if(!empty($arr['COMPANY']))//公司
		    {
		    	$c_id=array();
		    	$sql="SELECT unit_id from amp_unit where COMPANY_ID in (select COMPANY_ID from amp_company where company_name like'%".$arr['COMPANY']."%')";
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
		    if(empty($all_pid))
		    {
		    	return false;
		    }
		    //print_r($all_pid);exit;
		    $count=count($all_pid);
		    if($count>1000)
		    {
		    	$all_pid=array_slice($all_pid, 0, 999);
		    }
		    $all_pid=implode(',',$all_pid);
	    }
		//echo '<pre>';print_r($allarra);echo '</pre>';exit;
	  // echo '<pre>';print_r($all_pid);echo '</pre>';exit;
//echo '<pre>';print_r($c_id);echo 'qurry1';print_r($p_id);echo 'qurry2';print_r($b_id);echo 'qurry3';print_r($f_id);echo '</pre>';exit;

	    $sql= "select * from amp_unit where rownum >= 1";
	      if(!empty($all_pid))
	    {
	    	$sql.=" AND unit_id in(".$all_pid.")";
	    }


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
	    	$sql.=" AND BLOCK_CERT = ".($arr['BLOCK_CERT']-1);
	    }

	    if(!empty($arr['BLOCK_MORTGAGE']))//是否有抵押
	    {
	    	$sql.=" AND BLOCK_MORTGAGE = '".($arr['BLOCK_MORTGAGE']-1)."'";
	    }
	     if(!empty($arr['BLOCK_CLOSED']))//是否查封
	    {
	    	$sql.=" AND BLOCK_CLOSED = '".($arr['BLOCK_CLOSED']-1)."'";
	    }
	    //echo $sql;exit;

	    $sql2="SELECT * FROM (SELECT A.*, ROWNUM RN FROM ($sql) A WHERE ROWNUM <= $page*1000) where RN >= ($page-1)*1000+1";

		$query = $this->db->query($sql2);
		//echo $query;exit;
		//print_r($query->result_array);
		//die();
		if(empty($query->result_array))
		{
			return false;
		}
		foreach($query->result_array as $dataval)
		{
			$company_sql="select company_name from amp_company where company_id=".$dataval['COMPANY_ID'];
			$company_query = $this->db->query($company_sql);
			$dataval['COMPANY'] = $company_query->result_array[0]['COMPANY_NAME'];
			
			$project_sql="select project from amp_project where project_id=".$dataval['PROJECT_ID'];
			$project_query = $this->db->query($project_sql);
			$dataval['PROJECT'] = $project_query->result_array[0]['PROJECT'];
			
			$building_sql="select building from amp_building where building_id=".$dataval['BUILDING_ID'];
			$building_query = $this->db->query($building_sql);
			$dataval['BUILDING'] = $building_query->result_array[0]['BUILDING'];
			
			$floor_sql="select floor,floor_desc,floor_act from amp_floor where floor_id=".$dataval['FLOOR_ID'];
			$floor_query = $this->db->query($floor_sql);
			$dataval['FLOOR'] = $floor_query->result_array[0]['FLOOR'];
			$dataval['FLOOR_DESC'] = $floor_query->result_array[0]['FLOOR_DESC'];
			$dataval['FLOOR_ACT'] = $floor_query->result_array[0]['FLOOR_ACT'];
			
			$alldata[]=$dataval;
		}
		//echo '<pre>';var_dump($alldata);echo '</pre>';exit;
		return $alldata;
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


	function count($arr) 
	{
	if(empty($arr['COMPANY']) && empty($arr['PROJECT']) && empty($arr['BUILDING']) && empty($arr['FLOOR']))
		{
			
		}
	    else
	    {
	    	if(!empty($arr['COMPANY']))//公司
		    {
		    	$c_id=array();
		    	$sql="SELECT unit_id from amp_unit where COMPANY_ID in (select COMPANY_ID from amp_company where company_name like'%".$arr['COMPANY']."%')";
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
		    if(empty($all_pid))
		    {
		    	return false;
		    }
		    //print_r($all_pid);exit;
		    $count=count($all_pid);
		    if($count>1000)
		    {
		    	$all_pid=array_slice($all_pid, 0, 999);
		    }
		    $all_pid=implode(',',$all_pid);
		    
	    }
	    
	    $sql= "select count(*) from amp_unit where rownum >=1";
	    if(!empty($all_pid))
	    {
	    	$sql.=" AND unit_id in(".$all_pid.")";
	    }
	    
	    
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
	    	$sql.=" AND BLOCK_CERT = ".($arr['BLOCK_CERT']-1);
	    }
	    
	    if(!empty($arr['BLOCK_MORTGAGE']))//是否有抵押
	    {
	    	$sql.=" AND BLOCK_MORTGAGE = '".($arr['BLOCK_MORTGAGE']-1)."'";
	    }
	    if(!empty($arr['BLOCK_CLOSED']))//是否查封
	    {
	    	$sql.=" AND BLOCK_CLOSED = '".($arr['BLOCK_CLOSED']-1)."'";
	    }
	    //echo $sql;exit;
	    $query = $this->db->query($sql);
	    return $query;
      
    }

}

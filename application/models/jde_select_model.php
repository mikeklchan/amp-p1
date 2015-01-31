<?php 
class Jde_select_model extends CI_Model{
   
	function __construct()
	{
		$this->load->database();
	}
	
	public function jde_select($amp_code)
	{
		//单元表
		$sql="SELECT FLOOR_ID,BUILDING_ID,PROJECT_ID,COMPANY_ID,AMP_CODE,BLOCK_CODE,PROPERTY_TYPE,SIZE_BUILDING_PRE,SIZE_ACTUAL_PRE,SIZE_BUILDING,SIZE_ACTUAL,JDE_RENTAL_TYPE,BLOCK_CERT,BLOCK_MORTGAGE FROM AMP_PROPERTY WHERE AMP_CODE='$amp_code'";
        $count=$this->db->query($sql);
		$selectarr[]=$count->row_array();
		
		//楼层表
		$sql1='SELECT FLOOR_ACT,FLOOR_DESC,FLOOR FROM AMP_FLOOR WHERE FLOOR_ID='.$selectarr[0]['FLOOR_ID'];		
		$count1=$this->db->query($sql1);
		$selectarr[]=$count1->row_array();

		//建筑物
		$sql2='SELECT BUILDING FROM AMP_BUILDING WHERE BUILDING_ID='.$selectarr[0]['BUILDING_ID'];
		$count2=$this->db->query($sql2);
		$selectarr[]=$count2->row_array();
		
		//项目表
		$sql3='SELECT PROJECT FROM AMP_PROJECT WHERE PROJECT_ID='.$selectarr[0]['PROJECT_ID'];
		$count3=$this->db->query($sql3);
		$selectarr[]=$count3->row_array();
		
		//公司表		
		$sql4='SELECT COMPANY_NAME FROM AMP_COMPANY WHERE COMPANY_ID='.$selectarr[0]['COMPANY_ID'];
		$count4=$this->db->query($sql4);
		$company_name=$count4->row_array();
		$company['COMPANY']=$company_name['COMPANY_NAME'];
		$selectarr[]=$company;
	
		return $selectarr;
		
	}
	
	
	
	public function jde_insert($jde_select)
	{

		$dblisr=$this->db->insert('AMP_JDE', $jde_select);
		return $dblisr;
	}
}
?>
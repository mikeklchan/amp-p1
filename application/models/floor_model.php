<?php
class Floor_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function count($id=false){
		//查询总记录数
		$count = $this->db->query("SELECT count(*) FROM amp_floor where building_id=$id");
		return $count;
	}
	public function get_floor($page = FALSE,$id=false){
			//分页查询
			
			$page=empty($page)?1:$page;
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM amp_floor where building_id=$id order by FLOOR) A WHERE ROWNUM <= $page*20) WHERE RN >= ($page-1)*20+1 ";
			$query = $this->db->query($sql);
			$result=$query->result_array;
			//echo $sql;exit;
			//echo '<pre>';var_dump($query->result_array);echo '</pre>';exit;
			if(!empty($result))
			{
				foreach($result as $val)
				{
					$a = $val['FLOOR_ID'];
					$co = $this->db->query("SELECT count(*) FROM amp_unit where floor_id=$a");
					$val['CELL_COUNT']=$co->result_array[0]['COUNT(*)'];
					
					//根据建筑id到楼层表中获取到的楼层id，在根据楼层id到AMP_FLOOR_STAT_V这个表中去获取建筑面积和套内面积
					$size_zong_db=$this->db->query("SELECT SIZE_SUM,SIZE_ACTUAL_SUM FROM AMP_FLOOR_STAT_V WHERE FLOOR_ID=$a");
					$size_num_list=$size_zong_db->row_array();	
					$val['SIZE_ALL']=empty($size_num_list['SIZE_SUM']) ? 0 :$size_num_list['SIZE_SUM'];//建筑面积
					$val['SIZE_ACTUAL']=empty($size_num_list['SIZE_ACTUAL_SUM']) ? 0 : $size_num_list['SIZE_ACTUAL_SUM'];//套内面积

					$re[]=$val;
				}
				return $re;
			}
			return $result;
			//echo '<pre>';var_dump($re);echo '</pre>';exit;
		}
	public function floor_detail($floor_id = FALSE){

		$sql = "select * from amp_floor where floor_id=".$floor_id;
		$query=$this->db->query($sql);
		$result=$query->result_array[0];
		  $val = $result;
							
				//echo '<pre>';var_dump($val);echo '</pre>';exit;
				
				return $val;
	}
	public function floor_update(){
		$floor_id = $this->input->post('FLOOR_ID');
		$data = array(								
				'FLOOR' => $this->input->post('FLOOR'),
				'FLOOR_DESC' => $this->input->post('FLOOR_DESC'),
				'SIZE_BUILDING' => $this->input->post('SIZE_BUILDING'),
				'SIZE_ACTUAL' => $this->input->post('SIZE_ACTUAL'),
				'BLOCK_CERT' => $this->input->post('BLOCK_CERT'),
				'BLOCK_OWNERSHIP' => $this->input->post('BLOCK_OWNERSHIP'),
				'BLOCK_MORTGAGE' => $this->input->post('BLOCK_MORTGAGE'),
				'BLOCK_CLOSED' => $this->input->post('BLOCK_CLOSED'),
				'ORD_BASEMENT_RECORD' => $this->input->post('ORD_BASEMENT_RECORD'),
				'AIR_CIVIL_RECORD' => $this->input->post('AIR_CIVIL_RECORD'),
				'CARPARK_SERVICE_RECORD' => $this->input->post('CARPARK_SERVICE_RECORD'),
				'CARPARK_CHARGE_RECORD' => $this->input->post('CARPARK_CHARGE_RECORD'),
				'OTHER_PIC' => $this->input->post('OTHER_PIC'),
				'WARRANT_FILE' => $this->input->post('WARRANT_FILE'),
				'PLAN_MAP' => $this->input->post('PLAN_MAP'),
				'FLOOR_MAP' => $this->input->post('FLOOR_MAP'),	
				'FLOOR_ACT' => $this->input->post('FLOOR_ACT'),							
		);
		$this->db->where('floor_id', $floor_id);
		$this->db->update('amp_floor', $data);
	}
	
	public function getpics($floor_id)
	{
		$sql = 'select URL,STYLE from AMP_PICTURE where STYLE in (0,1,2,3) and PROPERTY_ID=NULL and FLOOR_ID='.$floor_id;
		$query = $this->db->query($sql);
		$arr = $query->result_array;
		$i=0;
		foreach($query->result_array as $q)
		{
			$arr2 = explode('/',$q['URL']);
			$num = count($arr2);
			$num = $num-1;
			$arr[$i]['URL'] ='public/photos/'.($this->common->parseurl($q['URL']));
			$i=$i+1;
		}
		return $arr;
	}
	
	public function floor_bg_list($id)
	{////建筑物详细信息右边的信息展示
	
	$sql="SELECT * FROM AMP_FLOOR_STAT_V WHERE FLOOR_ID=".$id;
	$query = $this->db->query($sql);
	$tabao[]=$query->row_array();
	
	return $tabao;
	}
}
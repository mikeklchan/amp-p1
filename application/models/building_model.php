<?php
class Building_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function count($id){
		//查询总记录数
		$count = $this->db->query("SELECT count(*) FROM amp_building where project_id=$id");
		return $count;
	}
	public function get_building($page = FALSE,$id=false){
			$page=empty($page)?1:$page;
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM amp_building where project_id=$id ORDER BY BUILDING) A WHERE ROWNUM <= $page*20) WHERE RN >= ($page-1)*20+1 ";
			$query = $this->db->query($sql);
			$result=$query->result_array;
			
			//echo $sql;exit;
			//echo '<pre>';var_dump($query->result_array);echo '</pre>';exit;
			if(!empty($result))
			{
				foreach($result as $val)
				{
					$a = $val['BUILDING_ID'];
					$co = $this->db->query("SELECT count(*) FROM amp_floor where BUILDING_ID=$a");
					$val['FLOOR']=$co->result_array[0]['COUNT(*)'];
					//$sum = $this->db->query("SELECT SUM(SIZE_BUILDING) FROM amp_floor where building_id=$a");
					
					
					//根据建筑表中的建筑id去单元表中去获取单元表中的单元总数
					$dnum=$this->db->query("SELECT count(*) FROM AMP_UNIT WHERE BUILDING_ID=$a");
					$val['BLOCK_NUM']=$dnum->result_array[0]['COUNT(*)'];
					
					//根据项目id到建筑物表中获取到的建筑id,在根据建筑id去AMP_BUILDING_STAT_V表中获取建筑面积和套内面积
					$size_zong_db=$this->db->query("SELECT SIZE_SUM,SIZE_ACTUAL_SUM FROM AMP_BUILDING_STAT_V WHERE BUILDING_ID=$a");
					$size_num_list=$size_zong_db->row_array();
					$val['SIZE_BUILDING']=empty($size_num_list['SIZE_SUM']) ? 0 :$size_num_list['SIZE_SUM'];//建筑面积
					$val['SIZE_ACTUAL']=empty($size_num_list['SIZE_ACTUAL_SUM']) ? 0 : $size_num_list['SIZE_ACTUAL_SUM'];//套内面积
		
				
					$re[]=$val;
				
					
				}
			
				return $re;

			}

			return $result;
		}
	public function building_detail($building_id = FALSE){
		//$query = $this->db->get_where('amp_floor', array('floor_id' => $floor_id));
		$sql = "select * from amp_building where building_id=$building_id";
		//echo $sql;
		$query=$this->db->query($sql);
		//echo '<pre>';var_dump($query->result_array);echo '</pre>';exit;
		return $query->result_array[0];
	}
	public function building_update(){
		$building_id = $this->input->post('BUILDING_ID');
		$data = array(			
				'BUILDING' => $this->input->post('BUILDING'),
				'PSB_ADDRESS' => $this->input->post('PSB_ADDRESS'),
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
				'DECORATION_ROOF' => $this->input->post('DECORATION_ROOF'),
				'DECORATION_FLOOR' => $this->input->post('DECORATION_FLOOR'),
				'DECORATION_WALL' => $this->input->post('DECORATION_WALL'),
				'IN_DOOR' => $this->input->post('IN_DOOR'),
				'AIR_COND' => $this->input->post('AIR_COND'),
				'AIR_REFILL' => $this->input->post('AIR_REFILL'),
				'RESERVE_24H_WATER' => $this->input->post('RESERVE_24H_WATER'),
				'OUT_PIPE' => $this->input->post('OUT_PIPE'),
				'FIRE_POLICE' => $this->input->post('FIRE_POLICE'),
				'FIRE_SPRAY' => $this->input->post('FIRE_SPRAY'),
				'FIRE_SMOKE' => $this->input->post('FIRE_SMOKE'),
				
		);
		//echo '<pre>';var_dump($data);echo '</pre>';exit;
		$this->db->where('building_id', $building_id);
		$this->db->update('amp_building', $data);
	}
	
	public function building_bg_list($id)
	{////建筑物详细信息右边的信息展示
	
		$sql="SELECT * FROM AMP_BUILDING_STAT_V WHERE BUILDING_ID=".$id;
		$query = $this->db->query($sql);
		$tabao[]=$query->row_array();

	return $tabao;
	}
}
<?php
class Cell_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function count($id=false){
		//查询总记录数
		$count = $this->db->query("SELECT count(*) FROM amp_unit where floor_id=$id");
		return $count;
	}
	public function this_cell($cell_id = FALSE){
		
		$sql = "select unit_id from amp_unit where unit_id=$cell_id";
		$query=$this->db->query($sql);
		$dataval=$query->result_array[0];
		return $dataval;
	}
	public function cell_detail($cell_id = FALSE){
		
		$sql = "select * from amp_unit where unit_id=$cell_id";
		$query=$this->db->query($sql);
		$dataval=$query->result_array[0];
		$company_sql="select company_name from amp_company where company_id=".$dataval['COMPANY_ID'];
		$company_query = $this->db->query($company_sql);
		$dataval['COMPANY'] = $company_query->result_array[0]['COMPANY_NAME'];
		$project_sql="select project from amp_project where project_id=".$dataval['PROJECT_ID'];
		$project_query = $this->db->query($project_sql);
		$dataval['PROJECT'] = $project_query->result_array[0]['PROJECT'];
		
		$building_sql="select building from amp_building where building_id=".$dataval['BUILDING_ID'];
		$building_query = $this->db->query($building_sql);
		$dataval['BUILDING'] = $building_query->result_array[0]['BUILDING'];
		
		$floor_sql="select floor from amp_floor where floor_id=".$dataval['FLOOR_ID'];
		$floor_query = $this->db->query($floor_sql);
		$dataval['FLOOR'] = $floor_query->result_array[0]['FLOOR'];
		//获取租赁状态
		if(!empty($dataval['PROJECT']) && !empty($dataval['BUILDING']) && !empty($dataval['ASSET_ID']))
		{
			//$jde_sql="select 租赁状态 as jde_style from JDE.V_CONTRACT_HOUSE where 项目名称='".$dataval['PROJECT']."' and 建筑物名称='".$dataval['BUILDING']."' and 单元编号='".$dataval['ASSET_ID']."'";
			$jde_sql="select rental_status as jde_style from JDE_CONTRACT_HOUSE_MV where project_name='".$dataval['PROJECT']."' and building_name='".$dataval['BUILDING']."' and rent_block_code='".$dataval['BLOCK_CODE']."'";
			$jde_query=@$this->db->query($jde_sql);
			//if(!empty($jde_query->result_array[0]['JDE_STYLE']))
			$dataval['JDE_RENTAL_STATUS']=empty($jde_query->result_array[0]['JDE_STYLE'])?'':$jde_query->result_array[0]['JDE_STYLE'];
		}
		//echo '<pre>';var_dump($dataval);echo '</pre>';exit;
		return $dataval;
	}
	public function get_cell($page = FALSE,$id=false){		
			$page=empty($page)?1:$page;
			$sql   = "SELECT * FROM (SELECT A.*, ROWNUM RN FROM (SELECT * FROM amp_unit where floor_id=$id ) A WHERE ROWNUM <= $page*20) WHERE RN >= ($page-1)*20+1 order by amp_code";
			$query = $this->db->query($sql);
			if(empty($query->result_array))
			{
				return false;
			}
			foreach($query->result_array as $dataval)
			{
				$project_sql="select project from amp_project where project_id=".$dataval['PROJECT_ID'];
				$project_query = $this->db->query($project_sql);
				$dataval['PROJECT'] = $project_query->result_array[0]['PROJECT'];
				
				$building_sql="select building from amp_building where building_id=".$dataval['BUILDING_ID'];
				$building_query = $this->db->query($building_sql);
				$dataval['BUILDING'] = $building_query->result_array[0]['BUILDING'];
				//获取租赁状态
				if(!empty($dataval['PROJECT']) && !empty($dataval['BUILDING']) && !empty($dataval['ASSET_ID']))
				{
					//$jde_sql="select 租赁状态 as jde_style from JDE.V_CONTRACT_HOUSE where 项目名称='".$dataval['PROJECT']."' and 建筑物名称='".$dataval['BUILDING']."' and 单元编号='".$dataval['ASSET_ID']."'";
					$jde_sql="select rental_status as jde_style from JDE_CONTRACT_HOUSE_MV where project_name='".$dataval['PROJECT']."' and building_name='".$dataval['BUILDING']."' and rent_block_code='".$dataval['BLOCK_CODE']."'";
					$jde_query=@$this->db->query($jde_sql);
					//echo '<pre>';var_dump($jde_query->result_array);echo '</pre>';exit;
				}
				//if(!empty($jde_query->result_array[0]['JDE_STYLE']))
				$dataval['JDE_RENTAL_STATUS']=empty($jde_query->result_array[0]['JDE_STYLE'])?'':$jde_query->result_array[0]['JDE_STYLE'];
				$alldata[]=$dataval;
			}
			
			//echo '<pre>';var_dump($alldata);echo '</pre>';exit;
			return $alldata;
		}
	public function cell_update(){
			$cell_id = $this->input->post('UNIT_ID');
			$data = array(
				'BLOCK_CODE' => $this->input->post('BLOCK_CODE'),
				'ASSET_ID' => $this->input->post('ASSET_ID'),
				'BLOCK_FORCAST_REPORT' => $this->input->post('BLOCK_FORCAST_REPORT'),
				'BLOCK_ACTUAL_REPORT' => $this->input->post('BLOCK_ACTUAL_REPORT'),
				'BLOCK_PROPERTY_CERT' => $this->input->post('BLOCK_PROPERTY_CERT'),
				'PROPERTY_TYPE' => $this->input->post('PROPERTY_TYPE'),
				'SIZE_BUILDING' => $this->input->post('SIZE_BUILDING'),
				'SIZE_ACTUAL' => $this->input->post('SIZE_ACTUAL'),
				'JDE_RENTAL_STATUS' => $this->input->post('JDE_RENTAL_STATUS'),
				'JDE_RENTAL_TYPE' => $this->input->post('JDE_RENTAL_TYPE'),
				'BLOCK_SOURCE' => $this->input->post('BLOCK_SOURCE'),
				'BLOCK_CERT' => $this->input->post('BLOCK_CERT'),
				'BLOCK_MORTGAGE' => $this->input->post('BLOCK_MORTGAGE'),
				'BLOCK_CLOSED' => $this->input->post('BLOCK_CLOSED'),
				'BLOCK_OWNERSHIP' => $this->input->post('BLOCK_OWNERSHIP'),
				'ROOM_TOWARDS' => $this->input->post('ROOM_TOWARDS'),
				'LOADING_MAX' => $this->input->post('LOADING_MAX'),
				'FLOOR_HEIGHT' => $this->input->post('FLOOR_HEIGHT'),
				'FLOOR_DROP' => $this->input->post('FLOOR_DROP'),
				'FLOOR_STAGE' => $this->input->post('FLOOR_STAGE'),
				'STYLE_POST' => $this->input->post('STYLE_POST'),
				'PLATFORM_HEIGHT' => $this->input->post('PLATFORM_HEIGHT'),
				'SLOPE_HOUSE' => $this->input->post('SLOPE_HOUSE'),
				'PLATFORM' => $this->input->post('PLATFORM'),
				'ROOF_GARDEN' => $this->input->post('ROOF_GARDEN'),
				'DECORATION_ROOF' => $this->input->post('DECORATION_ROOF'),
				//'CARPARK_SERVICE_RECORD' => $this->input->post('CARPARK_SERVICE_RECORD'),
				'DECORATION_FLOOR' => $this->input->post('DECORATION_FLOOR'),
				
				'RESERVE_AIR' => $this->input->post('RESERVE_AIR'),
				'RESERVE_KITCHEN_SMOKE' => $this->input->post('RESERVE_KITCHEN_SMOKE'),
				'RESERVE_KITCHEN_REFILL' => $this->input->post('RESERVE_KITCHEN_REFILL'),
				'AIR_COND' => $this->input->post('AIR_COND'),
				'AIR_REFILL' => $this->input->post('AIR_REFILL'),
				'RESERVE_24H_WATER' => $this->input->post('RESERVE_24H_WATER'),
				'RESERVE_IN_PIPE' => $this->input->post('RESERVE_IN_PIPE'),
				'RESERVE_OUT_PIPE' => $this->input->post('RESERVE_OUT_PIPE'),
				'RESERVE_GAS' => $this->input->post('RESERVE_GAS'),
				'OUT_PIPE' => $this->input->post('OUT_PIPE'),
				'SWITCHING_CAP' => $this->input->post('SWITCHING_CAP'),
				'STANDARD_CAP' => $this->input->post('STANDARD_CAP'),
				'STANDARD_ELEC' => $this->input->post('STANDARD_ELEC'),
				'STANDARD_INTERNET' => $this->input->post('STANDARD_INTERNET'),
				'TV_IN' => $this->input->post('TV_IN'),
				
				'TV_IN_CAP' => $this->input->post('TV_IN_CAP'),
				'FIRE_HOSE' => $this->input->post('FIRE_HOSE'),
				'FIRE_POLICE' => $this->input->post('FIRE_POLICE'),
				'FIRE_SPRAY' => $this->input->post('FIRE_SPRAY'),
				'FIRE_SMOKE' => $this->input->post('FIRE_SMOKE'),
				'SPARE_SPACE' => $this->input->post('SPARE_SPACE'),
				'SPECIAL_PIPE' => $this->input->post('SPECIAL_PIPE'),
				'PUBLIC_ROOM' => $this->input->post('PUBLIC_ROOM'),
				'DECORATION_WINDOW' => $this->input->post('DECORATION_WINDOW'),
				'BRIDGE_ROD' => $this->input->post('BRIDGE_ROD'),

				'IN_DOOR' => $this->input->post('IN_DOOR'),
				'DECORATION_WALL' => $this->input->post('DECORATION_WALL'),
				'RESERVE_WATER' => $this->input->post('RESERVE_WATER'),
				
		);
		$this->db->where('unit_id', $cell_id);
		$this->db->update('amp_unit', $data);
	}
	

	
	public function getpics($cell_id)
	{
		$sql = 'select URL,STYLE from AMP_PICTURE where STYLE in (0,1,2,3) and PROPERTY_ID='.$cell_id;
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
	
}
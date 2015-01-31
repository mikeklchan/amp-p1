<?php
class Project_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function count(){
		//查询总记录数
		$count = $this->db->query("SELECT count(*) FROM amp_project");
		
		//echo '<pre>';var_dump($count);echo '</pre>';exit;
		return $count;
	}
	public function get_project($district){

		if ($district === 'BJ') {
		 	$sql   = "SELECT * FROM amp_project WHERE DISTRICT='$district' OR DISTRICT is NULL";
		 }else {
		 	$sql   = "SELECT * FROM amp_project WHERE DISTRICT='$district'";
		 }
		
		$query = $this->db->query($sql);
		//echo '<pre>';print_r($query->result_array());echo '</pre>';exit;
		foreach($query->result_array as $val)
		{
			$sql1   =  "SELECT amp_company.company_name,amp_project_company.project_id FROM amp_project_company left join amp_company on amp_project_company.company_id=amp_company.company_id WHERE amp_project_company.project_id=".$val['PROJECT_ID'];
			$query1 = $this->db->query($sql1); 
				foreach($query1->result_array as $key=>$v)
				{
					$company[]=$v['COMPANY_NAME'];
				}
				$val['COMPANY']=empty($company) ? 0 :$company;
				unset($company);
				$sql2   =  "SELECT size_sum FROM AMP_PROJECT_STAT_V WHERE project_id=".$val['PROJECT_ID'];
				$query2 = $this->db->query($sql2);
				$val['SIZE_SUM']=empty($query2->result_array[0]['SIZE_SUM']) ? 0 :$query2->result_array[0]['SIZE_SUM'];
				
				//获取图片AMP_PICTURE表中的项目图片
				$sqlimg="SELECT URL FROM AMP_PICTURE WHERE PROJECT_ID=".$val['PROJECT_ID']." AND STYLE=99";
				$imgdb=$this->db->query($sqlimg);
				$img=$imgdb->row_array();
				$val['img']=empty($img['URL']) ? '' :$img['URL'];
				
				$all[]=$val;				
			//echo '<pre>';var_dump($query2->result_array());echo '</pre>';exit;
		}
		//echo '<pre>';var_dump($all);echo '</pre>';exit;
		return $all;
		
	}
	public function get_oneproject($id){
		
		$sql   = "SELECT * FROM amp_project where project_id=".$id;
		$query = $this->db->query($sql);
		return $query->result_array;
		//echo '<pre>';var_dump($query);echo '</pre>';exit;
	}
	public function project_detail($project_id = FALSE){
		//$query = $this->db->get_where('amp_project', array('project_id' => $project_id));
		$sql = "select * from amp_project where project_id=$project_id ";
		//echo $sql;
		$query=$this->db->query($sql);
		//echo '<pre>';var_dump($query->result_array);echo '</pre>';exit;
		$val=$query->result_array[0];
		$sql1   =  "SELECT amp_company.company_name,amp_project_company.project_id FROM amp_project_company left join amp_company on amp_project_company.company_id=amp_company.company_id WHERE amp_project_company.project_id=".$val['PROJECT_ID'];
		$query1 = $this->db->query($sql1);
		foreach($query1->result_array as $key=>$v)
		{
			$company[]=$v['COMPANY_NAME'];
		}
		$val['COMPANY']=empty($company)? 0 :$company;
		return $val;
	}
	public function project_update(){
		//echo $this->input->post('PROJECT_ID');exit;
		$project_id = $this->input->post('PROJECT_ID');
		$data = array(
				'COMPANY' => $this->input->post('COMPANY'),
				'PROJECT' => $this->input->post('PROJECT'),
				'SIZE_BUILDING' => $this->input->post('SIZE_BUILDING'),
				'SIZE_ACTUAL' => $this->input->post('SIZE_ACTUAL'),
				'PSB_ADDRESS' => $this->input->post('PSB_ADDRESS'),	

				'ORD_BASEMENT_RECORD' => $this->input->post('ORD_BASEMENT_RECORD'),
				'AIR_CIVIL_RECORD' => $this->input->post('AIR_CIVIL_RECORD'),
				'CARPARK_SERVICE_RECORD' => $this->input->post('CARPARK_SERVICE_RECORD'),
				'CARPARK_CHARGE_RECORD' => $this->input->post('CARPARK_CHARGE_RECORD'),
				'OTHER_PIC' => $this->input->post('OTHER_PIC'),
				
		);
		//print_r($data);exit;
		$this->db->where('project_id', $project_id);
		$this->db->update('amp_project', $data);
	}
	
	public function project_bg_list($id)
	{////项目详细信息右边的信息展示
	 
		$sql="SELECT * FROM AMP_PROJECT_STAT_V WHERE PROJECT_ID=".$id;
		$query = $this->db->query($sql);
		$tabao[]=$query->row_array();
	   return $tabao;
	}
	
	public function amp_project_v()
	{
		//获取AMP_PROJECT_STAT_V这个张表中的所以数据，并把得到的数据放到项目列表页中
		$sql="SELECT * FROM AMP_PROJECT_STAT_V";
	    $query=$this->db->query($sql);
	    $size_v[]=$query->result_array();
	    
	    //获取AMP_PROJECT_STAT_V这个张表中的所以数据，并且把要在页面上显示的字段的每个值要求总数
	    $sql2="SELECT SUM(COUNT_BG),SUM(SIZE_BG),SUM(COUNT_SY),SUM(SIZE_SY),SUM(COUNT_GY),SUM(SIZE_GY),SUM(COUNT_HS),SUM(SIZE_HS),SUM(COUNT_CK),SUM(SIZE_CK),SUM(COUNT_CW),SUM(SIZE_CW),SUM(COUNT_QT),SUM(SIZE_QT),SUM(COUNT_SUM),SUM(SIZE_SUM) FROM AMP_PROJECT_STAT_V";
	    $querydb=$this->db->query($sql2);
	    $size_v[]=$querydb->row_array();
	        
	   
	    return $size_v;
	  
	}
	
}
<?php
class oa_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function forsoap($arr)
	{
		$time =time();
		$UNAME = $arr->UNAME;
		$FNAME = $arr->FNAME;
		$filename=iconv("UTF-8","gb2312",$FNAME);
		$UDATE = $arr->UDATE;
		$UPOSI = $arr->UPOSI;
		$PNAME = $arr->PNAME;
		include_once('system/libraries/Excel/reader.php');
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('utf-8');
		$data->read('public/oaupload/'.$filename);
		$arr2 = $data->sheets[0]['cells'];
		$PROCESS = $arr2[2][1];
		$sql = "insert into amp_oaconnector (USER_NAME,FILE_NAME,TIME,POST_NAME,PROCESS,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$UNAME."','".$FNAME."','".$UDATE."','".$UPOSI."','".$PROCESS."','".$UDATE."','".$PNAME."','".$UDATE."','".$PNAME."')";
		$this->db->query($sql);
	}
	public function GetExcelfile()
	{
		$sql = "select * from  amp_oaconnector order by OACONNECTOR_ID asc";
		$query=$this->db->query($sql);
		return $query->result_array;
	}
	public function exceldata($file)
	{
		$path = 'public/oaupload/'.$file;
		//echo $path;

		if(strtolower(substr(PHP_OS, 0, 3)) == 'win'){
				$path=iconv("UTF-8","GBK",$path);
		}
		include_once('system/libraries/Excel/reader.php');
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('utf-8');
		$data->read($path);
		$arr = $data->sheets[0]['cells'];//exit;
		unset($data);
		return $arr;
		/*
			for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++)
			{
		print_r($data->sheets[0]['cells'][$i]);
		echo '<br>';
		}
		*/
	}
	public function getpreview($oid)
	{
		$arr = $this->getoa($oid);
		return  $this->exceldata($arr[0]['FNAME']);
	}
	public function getoa($oid)
	{
		$sql = "select FNAME, STATUS from  AMP_OACONNECTOR where OACONNECTOR_ID='".$oid."'";
		$query = $this->db->query($sql);
		return $query->result_array;
	}
	
	public function getampcode($amp_code)
	{
		$patterns = "/\d+/";
		preg_match_all($patterns,$amp_code,$arr);
		$tag = count($arr[0]);
		$tag = $tag - 1;
		$num = $arr[0][$tag];
		$len = strlen($num);
		$len_letter = 0 - $len;
		$letter = substr($amp_code,0,$len_letter);
		$len1 = strlen($num);
		$num = $num+0;
		$len2 = strlen($num);
		$n = $len1-$len2;
		$num = $num+1;
		if($n>0)
		{
			for($i=0;$i<$n;$i++)
			{
				$num = '0'.$num;
			}
		}
		$amp_code = $letter.$num;
		return $amp_code;
	}
	
	public function improtexceldata($oid)
	{
		$arr = 	$this->getoa($_GET['oid']);
		if(count($arr)==0)
		{
			exit;
		}
		$filename = $arr[0]['FNAME'];
		$data = $this->exceldata($filename);
		$PROCESS = $data[2][1];
		$time = time();
		$arr1 = array();
		$i=0;
		foreach($data as $e)
		{
			$arr1[$i] = $e;
			$i++;
		}
		//--------------------------------------------------------CASE1----------------------------------------------------------------
		if($PROCESS==11)
		{

				$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
				$query=$this->db->query($sql);
				if(count($query->result_array)==0)
				{
					$sql = "insert into amp_project (PROJECT,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$arr1[1][3]."','".$time."','admin','".$time."','admin')";
					$this->db->query($sql);
					$sql = "select max(PROJECT_ID) as id  from amp_project";
					$query=$this->db->query($sql);
					$project_id = $query->result_array[0]['ID'];
				}
				else 
				{
					$project_id = $query->result_array[0]['PROJECT_ID'];
				}
				
				$sql ="select COMPANY_ID from  amp_company where COMPANY_NAME='".$arr1[1][5]."'";
				$query=$this->db->query($sql);
				if(count($query->result_array)==0)
				{
					$sql = "insert into amp_company (COMPANY_NAME,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$arr1[1][5]."','".$time."','admin','".$time."','no')";
					$this->db->query($sql);
					$sql = "select max(COMPANY_ID) as id  from amp_company";
					$query=$this->db->query($sql);
					$company_id = $query->result_array[0]['ID'];
				}
				else 
				{
					$company_id = $query->result_array[0]['COMPANY_ID'];
				}

				
				$sql = "select PROJECTCOMPANY_ID from  AMP_PROJECT_COMPANY where COMPANY_ID='".$company_id."' and PROJECT_ID='".$project_id."'";
				$query=$this->db->query($sql);
				
				if(count($query->result_array)==0)
				{
					$sql = "insert into AMP_PROJECT_COMPANY (COMPANY_ID,PROJECT_ID,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$company_id."','".$project_id."','".$time."','admin','".$time."','admin')";
					$this->db->query($sql);
				}
				$num = count($arr1);
				
				for($i=3;$i<$num;$i++)
				{
					if(isset($arr1[$i][2]))
					{
						$sql = "select BUILDING_ID from AMP_BUILDING WHERE BUILDING='".$arr1[$i][2]."' and project_id=".$project_id;
						$query=$this->db->query($sql);
						if(count($query->result_array)==0)
						{
							$sql = "insert into AMP_BUILDING (PROJECT_ID,BUILDING,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$project_id."','".$arr1[$i][2]."','".$time."','admin','".$time."','admin')";
							$this->db->query($sql);
							$sql = "select max(BUILDING_ID) as id  from AMP_BUILDING";
							$query=$this->db->query($sql);
							$building_id =  $query->result_array[0]['ID'];
						}
						else 
						{
							$building_id = $query->result_array[0]['BUILDING_ID'];
						}
						
						if(isset($arr1[$i][3]))
						{
							$sql = "select FLOOR_ID from AMP_FLOOR WHERE FLOOR_ACT='".$arr1[$i][4]."' and building_id=".$building_id." and project_id=".$project_id;
							$query=$this->db->query($sql);
							if(count($query->result_array)==0)
							{
								$sql = "insert into AMP_FLOOR (PROJECT_ID,BUILDING_ID,FLOOR,FLOOR_ACT,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$project_id."','".$building_id."','".$arr1[$i][3]."','".$arr1[$i][4]."','".$time."','admin','".$time."','admin')";
								$this->db->query($sql);
								$sql = "select max(FLOOR_ID) as id  from AMP_FLOOR";
								$query=$this->db->query($sql);
								$floor_id =  $query->result_array[0]['ID'];
							}
							else
							{
								$floor_id = $query->result_array[0]['FLOOR_ID'];
							}
							if(isset($arr1[$i][6]))
							{
								$sql = "select UNIT_ID from AMP_UNIT WHERE BLOCK_FORCAST_REPORT='".$arr1[$i][6]."' and floor_id=".$floor_id." and building_id=".$building_id." and project_id=".$project_id;
								$query=$this->db->query($sql);
								if(count($query->result_array)==0)
								{
									$sql= "select max(AMP_CODE) as AMP_CODE from AMP_UNIT where PROJECT_ID=".$project_id;
									$query=$this->db->query($sql);
									$amp_code = $query->result_array[0]['AMP_CODE'];
									if(!empty($amp_code))
									{
										$amp_code = $this->getampcode($amp_code);
									}
									else
									{
										$sql= "select shortcode from amp_project where PROJECT_ID=".$project_id;
										$query=$this->db->query($sql);
										$amp_code = $query->result_array[0]['SHORTCODE'];
										$amp_code =$amp_code.'00001';
									}
									$sql = "insert into AMP_UNIT (COMPANY_ID,PROJECT_ID,BUILDING_ID,FLOOR_ID,BLOCK_FORCAST_REPORT,PROPERTY_TYPE,AMP_CODE,SIZE_BUILDING_PRE,SIZE_ACTUAL_PRE,CREATED_DATE,CREATED_BY,MODIFIED_DATE,MODIFIED_BY) values ('".$company_id."','".$project_id."','".$building_id."','".$floor_id."','".$arr1[$i][6]."','".$arr1[$i][5]."','".$amp_code."','".$arr1[$i][7]."','".$arr1[$i][8]."','".$time."','admin','".$time."','admin')";
									$this->db->query($sql);
									//$unit_id = $this->db->last_insert_id();
								}
							}
						}
					}
				}
		}
		if($PROCESS==12)
		{
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
					$project_id = $query->result_array[0]['PROJECT_ID'];
					for($j=3;$j<count($arr1);$j++)
					{
						$sql = "select BUILDING_ID from AMP_BUILDING WHERE BUILDING='".$arr1[$j][2]."' and project_id=".$project_id;
						$query=$this->db->query($sql);
						if(isset($query->result_array[0]['BUILDING_ID']))
						{
							$building_id = $query->result_array[0]['BUILDING_ID'];
							$sql = "select FLOOR_ID from AMP_FLOOR WHERE FLOOR='".$arr1[$j][8]."' and building_id=".$building_id." and project_id=".$project_id;
							$query=$this->db->query($sql);
							if(isset($query->result_array[0]['FLOOR_ID']))
							{
								if(!is_numeric($arr1[$j][41]))$arr1[$j][41]=0;
								if(!is_numeric($arr1[$j][42]))$arr1[$j][42]=0;
								$floor_id = $query->result_array[0]['FLOOR_ID'];
								$sql = "update AMP_UNIT set BLOCK_CODE='".$arr1[$j][9]."',
															FLOOR_MAP='".$arr1[$j][10]."',
															ROOM_TOWARDS_PRE='".$arr1[$j][11]."',
															LOADING_MAX_PRE='".$arr1[$j][12]."',
															FLOOR_HEIGHT_PRE ='".$arr1[$j][13]."',			
															FLOOR_DROP_PRE='".$arr1[$j][14]."',
															FLOOR_STAGE_PRE ='".$arr1[$j][15]."',
															STYLE_POST_PRE = '".$arr1[$j][16]."',
															PLATFORM_HEIGHT_PRE='".$arr1[$j][17]."',
															SLOPE_HOUSE_PRE='".$arr1[$j][18]."',
															PLATFORM_PRE='".$arr1[$j][19]."',
															ROOF_GARDEN_PRE='".$arr1[$j][20]."',
															DECORATION_ROOF_PRE='".$arr1[$j][21]."',
															DECORATION_FLOOR_PRE='".$arr1[$j][22]."',
															DECORATION_WALL_PRE = '".$arr1[$j][23]."',	
															IN_DOOR_PRE='".$arr1[$j][24]."',
															RESERVE_WATER_PRE='".$arr1[$j][25]."',
															RESERVE_HWATER_PRE='".$arr1[$j][26]."',
															RESERVE_AIR_PRE='".$arr1[$j][27]."',
															RESERVE_KITCHEN_SMOKE_PRE='".$arr1[$j][28]."',
															RESERVE_KITCHEN_REFILL_PRE='".$arr1[$j][29]."',																	
															AIR_COND_PRE='".$arr1[$j][30]."',															
															AIR_REFILL_PRE='".$arr1[$j][31]."',																
															RESERVE_24H_WATER_PRE='".$arr1[$j][32]."',																
															RESERVE_IN_PIPE_PRE='".$arr1[$j][33]."',																
															RESERVE_OUT_PIPE_PRE ='".$arr1[$j][34]."',															
															RESERVE_GAS_PRE	 ='".$arr1[$j][35]."',																															
															OUT_PIPE_PRE	 ='".$arr1[$j][36]."',																																
															SWITCHING_CAP_PRE	 ='".$arr1[$j][37]."',																																
															STANDARD_CAP_PRE = '".$arr1[$j][38]."',	
															STANDARD_ELEC_PRE = '".$arr1[$j][39]."',			
															STANDARD_INTERNET_PRE = '".$arr1[$j][40]."',
															TV_IN_PRE = '".$arr1[$j][41]."',
															TV_IN_CAP_PRE = '".$arr1[$j][42]."',
															FIRE_HOSE_PRE = '".$arr1[$j][43]."',
															FIRE_POLICE_PRE = '".$arr1[$j][44]."',
															FIRE_SPRAY_PRE = '".$arr1[$j][45]."',
															FIRE_SMOKE_PRE = '".$arr1[$j][46]."',
															SPARE_SPACE_PRE ='".$arr1[$j][47]."',
															SPECIAL_PIPE_PRE ='".$arr1[$j][48]."',
															PUBLIC_ROOM_PRE	= '".$arr1[$j][49]."',
															DECORATION_WINDOW_PRE = '".$arr1[$j][50]."',
															BRIDGE_ROD_PRE =  '".$arr1[$j][51]."'
																	where 
															BLOCK_FORCAST_REPORT='".$arr1[$j][4]."' and  PROJECT_ID='".$project_id."' and  BUILDING_ID='".$building_id."' and FLOOR_ID='".$floor_id."'";
															$this->db->query($sql);
							}
						}
					}
			}
		}
		//--------------------------------------------------------CASE2----------------------------------------------------------------
		if($PROCESS==21)
		{
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
				$project_id = $query->result_array[0]['PROJECT_ID'];
				for($j=3;$j<count($arr1);$j++)
				{		
					$sql = "select BUILDING_ID from AMP_BUILDING WHERE BUILDING='".$arr1[$j][2]."' and project_id=".$project_id;
					$query=$this->db->query($sql);
					if(isset($query->result_array[0]['BUILDING_ID']))
					{
						$building_id = $query->result_array[0]['BUILDING_ID'];
						$sql = "select FLOOR_ID from AMP_FLOOR WHERE FLOOR='".$arr1[$j][3]."' and building_id=".$building_id." and project_id=".$project_id;
						$query=$this->db->query($sql);
						if(isset($query->result_array[0]['FLOOR_ID']))
						{
							$floor_id = $query->result_array[0]['FLOOR_ID'];
							$sql = "update AMP_UNIT set BLOCK_ACTUAL_REPORT='".$arr1[$j][7]."',SIZE_BUILDING='".$arr1[$j][8]."',SIZE_ACTUAL='".$arr1[$j][9]."',BLOCK_SOURCE='".$arr1[1][5]."' where BLOCK_CODE='".$arr1[$j][6]."'and  PROJECT_ID='".$project_id."' and BUILDING_ID='".$building_id."' and FLOOR_ID='".$floor_id."'";
							$this->db->query($sql);
						}
					}
				}
			}
		}
		if($PROCESS==22)
		{
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
				$project_id = $query->result_array[0]['PROJECT_ID'];
				for($j=3;$j<count($arr1);$j++)
				{
						$sql = "select BUILDING_ID from AMP_BUILDING WHERE BUILDING='".$arr1[$j][2]."' and project_id=".$project_id;
								$query=$this->db->query($sql);
								if(isset($query->result_array[0]['BUILDING_ID']))
								{
									$building_id = $query->result_array[0]['BUILDING_ID'];
									$sql = "select FLOOR_ID from AMP_FLOOR WHERE FLOOR='".$arr1[$j][8]."' and building_id=".$building_id." and project_id=".$project_id;
									$query=$this->db->query($sql);
									if(isset($query->result_array[0]['FLOOR_ID']))
									{
										$floor_id = $query->result_array[0]['FLOOR_ID'];
										if(!is_numeric($arr1[$j][43]))$arr1[$j][41]=0;
										if(!is_numeric($arr1[$j][44]))$arr1[$j][41]=0;
										
										$sql = "update AMP_UNIT set 
													BLOCK_CODE='".$arr1[$j][9]."',
													FLOOR_MAP='".$arr1[$j][11]."',
													ROOM_PIC='".$arr1[$j][12]."',
													ROOM_TOWARDS='".$arr1[$j][13]."',
													LOADING_MAX='".$arr1[$j][14]."',
													FLOOR_HEIGHT='".$arr1[$j][15]."',
													FLOOR_DROP='".$arr1[$j][16]."',
													FLOOR_STAGE='".$arr1[$j][17]."',
													STYLE_POST='".$arr1[$j][18]."',
													PLATFORM_HEIGHT='".$arr1[$j][19]."',
													SLOPE_HOUSE='".$arr1[$j][20]."',	
													PLATFORM='".$arr1[$j][21]."',
													ROOF_GARDEN='".$arr1[$j][22]."',
													DECORATION_ROOF='".$arr1[$j][23]."',
													DECORATION_FLOOR='".$arr1[$j][24]."',	
													DECORATION_WALL='".$arr1[$j][25]."',
													IN_DOOR='".$arr1[$j][26]."',
													RESERVE_WATER ='".$arr1[$j][27]."',
													RESERVE_HWATER = '".$arr1[$j][28]."',
													RESERVE_AIR = '".$arr1[$j][29]."',
													RESERVE_KITCHEN_SMOKE = '".$arr1[$j][30]."',
													RESERVE_KITCHEN_REFILL= '".$arr1[$j][31]."',
													AIR_COND='".$arr1[$j][32]."',
													AIR_REFILL='".$arr1[$j][33]."',
													RESERVE_24H_WATER = '".$arr1[$j][34]."',		
													RESERVE_IN_PIPE = '".$arr1[$j][35]."',	
													RESERVE_OUT_PIPE = '".$arr1[$j][36]."',
													RESERVE_GAS = '".$arr1[$j][37]."',
													OUT_PIPE = '".$arr1[$j][38]."',
													SWITCHING_CAP = '".$arr1[$j][39]."',
													STANDARD_CAP = '".$arr1[$j][40]."',
													STANDARD_ELEC = '".$arr1[$j][41]."',
													STANDARD_INTERNET =	'".$arr1[$j][42]."',
													TV_IN ='".$arr1[$j][43]."',
													TV_IN_CAP ='".$arr1[$j][44]."',
													FIRE_HOSE ='".$arr1[$j][45]."',
													FIRE_POLICE ='".$arr1[$j][46]."',
													FIRE_SPRAY ='".$arr1[$j][47]."',
													FIRE_SMOKE ='".$arr1[$j][48]."',
													SPARE_SPACE ='".$arr1[$j][49]."',	
													SPECIAL_PIPE = '".$arr1[$j][50]."',
													PUBLIC_ROOM = '".$arr1[$j][51]."',
													DECORATION_WINDOW = '".$arr1[$j][52]."',
													BRIDGE_ROD = '".$arr1[$j][53]."' 
												where BLOCK_ACTUAL_REPORT='".$arr1[$j][6]."' and  PROJECT_ID='".$project_id."' and BUILDING_ID='".$building_id."' and FLOOR_ID='".$floor_id."'";
												$this->db->query($sql);
									}
								}
				}
			}
		}
		//--------------------------------------------------------CASE3----------------------------------------------------------------
		if($PROCESS==3)
		{
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
				$project_id = $query->result_array[0]['PROJECT_ID'];
				for($j=3;$j<count($arr1);$j++)
				{
						$sql = "select BUILDING_ID from AMP_BUILDING where BUILDING='".$arr1[$j][2]."'and project_id=".$project_id;
						$query=$this->db->query($sql);
						if(isset($query->result_array[0]['BUILDING_ID']))
						{
							$building_id = $query->result_array[0]['BUILDING_ID'];
							$sql ="select COMPANY_ID from  amp_company where COMPANY_NAME='".$arr1[$j][4]."'";
							$query=$this->db->query($sql);
							if(isset($query->result_array[0]['COMPANY_ID']))
							{
								$company_id = $query->result_array[0]['COMPANY_ID'];
								$sql = "update AMP_UNIT set BLOCK_CERT='".$arr1[$j][6]."',BLOCK_OWNERSHIP='".$arr1[$j][7]."' where BLOCK_CODE='".$arr1[$j][3]."' and BUILDING_ID='".$building_id."' and COMPANY_ID='".$company_id."' and PROJECT_ID='".$project_id."'";
								$this->db->query($sql);
							}
						}
				}
			}
		}
		//--------------------------------------------------------CASE4----------------------------------------------------------------
		if($PROCESS==4)
		{			
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
				$project_id = $query->result_array[0]['PROJECT_ID'];
				for($j=3;$j<count($arr1);$j++)
				{
					$sql = "select BUILDING_ID from AMP_BUILDING where BUILDING='".$arr1[$j][2]."'";
					$query=$this->db->query($sql);
					if(isset($query->result_array[0]['BUILDING_ID']))
					{
						$sql = "update AMP_UNIT set BLOCK_CERT='".$arr1[$j][3]."' where BLOCK_CODE='".$arr1[$j][3]."' and BUILDING_ID='".$query->result_array[0]['BUILDING_ID']."' and PROJECT_ID='".$project_id."'";
						$this->db->query($sql);
					}
				}
			}
		}
		//--------------------------------------------------------CASE5----------------------------------------------------------------
		
		if($PROCESS==5)
		{			
			$sql ="select PROJECT_ID from  amp_project where PROJECT='".$arr1[1][3]."'";
			$query=$this->db->query($sql);
			if(isset($query->result_array[0]['PROJECT_ID']))
			{
				$project_id = $query->result_array[0]['PROJECT_ID'];
				for($j=3;$j<count($arr1);$j++)
				{
					$sql = "select BUILDING_ID from AMP_BUILDING where BUILDING='".$arr1[$j][2]."'";
					$query=$this->db->query($sql);
					if(isset($query->result_array[0]['BUILDING_ID']))
					{
						$sql = "update AMP_UNIT set block_closed='".$arr1[$j][4]."' where BLOCK_CODE='".$arr1[$j][3]."' and BUILDING_ID='".$query->result_array[0]['BUILDING_ID']."' and PROJECT_ID='".$project_id."'";
						$this->db->query($sql);
					}
				}
			}
		}
		if($PROCESS==61)
		{
			for($j=3;$j<count($arr1);$j++)
			{
				$sql = "update AMP_BRAND set LICENSE_REGCODE='".$arr[$j][3]."',LICENSE_TRADEMARK='".$arr[$j][4]."',SERVICE_TYPE='".$arr[$j][5]."',REG_PERSON='".$arr[$j][6]."',REG_EXPIRY='".$arr[$j][7]."',CONTINUE_STATUS='".$arr[$j][8]."',APPROVAL_STATUS='".$arr[$j][9]."' where AMP_CODE='".$arr[$j][2]."'";
				$this->db->query($sql);
			}
		}
		if($PROCESS==62)
		{
			for($j=3;$j<count($arr1);$j++)
			{
				$sql = "update AMP_SITE set SITE_URL='".$arr1[$j][3]."',REG_PERSON='".$arr1[$j][4]."', SITE_NAME='".$arr1[$j][5]."',REG_OFFICE='".$arr1[$j][6]."', WWW_REMARKS_CODE=='".$arr1[$j][7]."', WWW_EXPIRY='".$arr1[$j][6]."' where AMP_CODE='".$arr1[$j][2]."'";
				$this->db->query($sql);
			}
		}

		$sql = "update AMP_OACONNECTOR set STATUS=1 where OACONNECTOR_ID='".$_GET["oid"]."'";
		$this->db->query($sql);
	}
}

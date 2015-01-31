<?php

class Excelexport extends CI_Controller {
	//鍔犺浇绯荤粺鍑芥暟
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('datasearch_model');
}

public function export($page=1)
	{
		$this->input->get();
		$arr=$this->session->userdata('data');
// 		print_r($page);
// 		echo "<br/>";
 //		var_dump($arr);exit;
		$data1 = $this->datasearch_model->testsearch($arr,$page);
		//print_r($data1);
		
		
		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);
		date_default_timezone_set('Europe/London');
		if (PHP_SAPI == 'cli')
			die('This example should only be run from a Web Browser');
		/** Include PHPExcel */
		require_once 'system/libraries/excle2/PHPExcel.php';
		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();
		
		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
		->setLastModifiedBy("Maarten Balliauw")
		->setTitle("Office 2007 XLSX Test Document")
		->setSubject("Office 2007 XLSX Test Document")
		->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
		->setKeywords("office 2007 openxml php")
		->setCategory("Test result file");
		
		$objPHPExcel->setActiveSheetIndex(0);
		
		$objPHPExcel->getActiveSheet()->setCellValue('A1', '单元ID');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', '公司');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', '项目');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', '建筑物名称');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', '标称楼层');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', '资产基础信息代码');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', '租赁单元号');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', '标称单元号');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', '资产编号');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', '实测报告单元名');
		
		$objPHPExcel->getActiveSheet()->setCellValue('K1', '产权证单元名');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', '单元类型');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', '建筑面积');
		$objPHPExcel->getActiveSheet()->setCellValue('N1', '套内面积');
		$objPHPExcel->getActiveSheet()->setCellValue('O1', '出租状态');
		$objPHPExcel->getActiveSheet()->setCellValue('P1', '资产属性');
		$objPHPExcel->getActiveSheet()->setCellValue('Q1', '房屋来源');
		$objPHPExcel->getActiveSheet()->setCellValue('R1', '是否有产权');
		$objPHPExcel->getActiveSheet()->setCellValue('S1', '房屋所有权号');
		$objPHPExcel->getActiveSheet()->setCellValue('T1', '是否有抵押');
		
		$objPHPExcel->getActiveSheet()->setCellValue('U1', '是否查封');
		$objPHPExcel->getActiveSheet()->setCellValue('V1', '与房屋产权有关的其他未包含证照');
		$objPHPExcel->getActiveSheet()->setCellValue('W1', '权证档案');
		$objPHPExcel->getActiveSheet()->setCellValue('X1', '楼层落位图');
		$objPHPExcel->getActiveSheet()->setCellValue('Y1', '房间照片');
		$objPHPExcel->getActiveSheet()->setCellValue('Z1', '朝向');
		$objPHPExcel->getActiveSheet()->setCellValue('AA1', '楼板荷载');
		$objPHPExcel->getActiveSheet()->setCellValue('AB1', '层高');
		$objPHPExcel->getActiveSheet()->setCellValue('AC1', '局部有/无降板');
		$objPHPExcel->getActiveSheet()->setCellValue('AD1', '室内局部高台');
		
		$objPHPExcel->getActiveSheet()->setCellValue('AE1', '造型柱(个）');
		$objPHPExcel->getActiveSheet()->setCellValue('AF1', '窗台高度');
		$objPHPExcel->getActiveSheet()->setCellValue('AG1', '坡屋面结构');
		$objPHPExcel->getActiveSheet()->setCellValue('AH1', '露台');
		$objPHPExcel->getActiveSheet()->setCellValue('AI1', '屋顶花园');
		$objPHPExcel->getActiveSheet()->setCellValue('AJ1', '天花装修');
		$objPHPExcel->getActiveSheet()->setCellValue('AK1', '地面装修');
		$objPHPExcel->getActiveSheet()->setCellValue('AL1', '墙面装修');
		$objPHPExcel->getActiveSheet()->setCellValue('AM1', '入户门');
		$objPHPExcel->getActiveSheet()->setCellValue('AN1', '预留冷水接口管径');
		
		$objPHPExcel->getActiveSheet()->setCellValue('AO1', '预留热水接口管径');
		$objPHPExcel->getActiveSheet()->setCellValue('AP1', '预留新风接口管径');
		$objPHPExcel->getActiveSheet()->setCellValue('AQ1', '预留厨房排烟量（立方米/小时）');
		$objPHPExcel->getActiveSheet()->setCellValue('AR1', '预留厨房补风量（立方米/小时）');
		$objPHPExcel->getActiveSheet()->setCellValue('AS1', '空调');
		$objPHPExcel->getActiveSheet()->setCellValue('AT1', '新风');
		$objPHPExcel->getActiveSheet()->setCellValue('AU1', '预留24H冷却水');
		$objPHPExcel->getActiveSheet()->setCellValue('AV1', '预留给水管径');
		$objPHPExcel->getActiveSheet()->setCellValue('AW1', '预留排水管径');
		$objPHPExcel->getActiveSheet()->setCellValue('AX1', '预留燃气管径？');
		
		$objPHPExcel->getActiveSheet()->setCellValue('AY1', '给排水');
		$objPHPExcel->getActiveSheet()->setCellValue('AZ1', '开关容量（A');
		$objPHPExcel->getActiveSheet()->setCellValue('BA1', '标准电量');
		$objPHPExcel->getActiveSheet()->setCellValue('BB1', '标准电量标准电量');
		$objPHPExcel->getActiveSheet()->setCellValue('BC1', '用电标准（W/平米套内面积）');
		$objPHPExcel->getActiveSheet()->setCellValue('BD1', '网络进线（六芯单模光纤根数）');
		$objPHPExcel->getActiveSheet()->setCellValue('BE1', '电话进线（六类线根数）');
		$objPHPExcel->getActiveSheet()->setCellValue('BF1', '消火栓');
		$objPHPExcel->getActiveSheet()->setCellValue('BG1', '消防报警');
		$objPHPExcel->getActiveSheet()->setCellValue('BH1', '喷淋');
		
		$objPHPExcel->getActiveSheet()->setCellValue('BI1', '消防排烟');
		$objPHPExcel->getActiveSheet()->setCellValue('BJ1', '局部净空（m）');
		$objPHPExcel->getActiveSheet()->setCellValue('BK1', '特殊管线设施');
		$objPHPExcel->getActiveSheet()->setCellValue('BL1', '套内公用房间');
		$objPHPExcel->getActiveSheet()->setCellValue('BM1', '装饰外窗');
		$objPHPExcel->getActiveSheet()->setCellValue('BN1', '连桥斜拉杆');
		$objPHPExcel->getActiveSheet()->setCellValue('BO1', '标称单元号(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BP1', '资产编号(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BQ1', '预测报告单元名');
		$objPHPExcel->getActiveSheet()->setCellValue('BR1', '产权证单元名(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('BS1', '单元类型(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BT1', '建筑面积(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BU1', '套内面积(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BV1', '出租状态(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BW1', '资产属性(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BX1', '房屋来源(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BY1', '是否有产权(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('BZ1', '房屋所有权号(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CA1', '是否有抵押(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CB1', '是否查封(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('CC1', '与房屋产权有关的其他未包含证照(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CD1', '权证档案(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CE1', '楼层落位图(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CF1', '房间照片(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CG1', '朝向(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CH1', '楼板荷载（办公规范2.0KN/平米）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CI1', '层高(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CJ1', '局部有/无降板(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CK1', '室内局部高台(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CL1', '造型柱(个）(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('CM1', '窗台高度(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CN1', '坡屋面结构(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CO1', '露台(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CP1', '屋顶花园(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CQ1', '天花装修(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CR1', '地面装修(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CS1', '墙面装修(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CT1', '入户门(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CU1', '预留冷水接口管径(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CV1', '预留热水接口管径(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('CW1', '预留新风接口管径(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CX1', '预留厨房排烟量（立方米/小时）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CY1', '预留厨房补风量（立方米/小时）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('CZ1', '空调(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DA1', '新风(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DB1', '预留24H冷却水(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DC1', '预留给水管径(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DD1', '预留排水管径(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DE1', '预留燃气管径？(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DF1', '给排水(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('DG1', '开关容量（A)(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DH1', '标准电量(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DI1', '用电标准（W/平米套内面积）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DJ1', '网络进线（六芯单模光纤根数）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DK1', '电视接口（根数）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DL1', '电话进线（六类线根数）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DM1', '消火栓(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DN1', '消防报警(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DO1', '喷淋(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DP1', '消防排烟(预计)');
		
		$objPHPExcel->getActiveSheet()->setCellValue('DQ1', '局部净空（m）(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DR1', '特殊管线设施(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DS1', '套内公用房间(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DT1', '装饰外窗(预计)');
		$objPHPExcel->getActiveSheet()->setCellValue('DU1', '连桥斜拉杆(预计)');
		
		
		$z = 2;
		//print_r($data1);exit;
	foreach($data1 as $data)
	{
		//print_r($data);exit;
			$a='A'.$z;
			$b='B'.$z;
			$c='C'.$z;
			$d='D'.$z;
			$e='E'.$z;
			$f='F'.$z;
			$g='G'.$z;
			$h='H'.$z;
			$i='I'.$z;
			$j='J'.$z;
			$k='K'.$z;
			$l='L'.$z;
			$m='M'.$z;
			$n='N'.$z;
			$o='O'.$z;
			$p='P'.$z;
			$q='Q'.$z;
			$r='R'.$z;
			$s='S'.$z;
			$t='T'.$z;
			$u='U'.$z;
			$v='V'.$z;
			$w='W'.$z;
			$x='X'.$z;
			$y='Y'.$z;
 			$z2='Z'.$z;
 			$aa='AA'.$z;
 			$ab='AB'.$z;
			$ac='AC'.$z;
			$ad='AD'.$z;
			$ae='AE'.$z;
			$af='AF'.$z;
			$ag='AG'.$z;
			$ah='AH'.$z;
			$ai='AI'.$z;
			$aj='AJ'.$z;
			$ak='AK'.$z;
			$al='AL'.$z;
			$am='AM'.$z;
			$an='AN'.$z;
			$ao='AO'.$z;
			$ap='AP'.$z;
			$aq='AQ'.$z;
			$ar='AR'.$z;
			$as='AS'.$z;
			$at='AT'.$z;
			$au='AU'.$z;
			$av='AV'.$z;
			$aw='AW'.$z;
			$ax='AX'.$z;
			$ay='AY'.$z;
			$az='AZ'.$z;
			$ba='BA'.$z;
			$bb='BB'.$z;
			$bc='BC'.$z;
			$bd='BD'.$z;
			$be='BE'.$z;
			$bf='BF'.$z;
			$bg='BG'.$z;
			$bh='BH'.$z;
			$bi='BI'.$z;
			$bj='BJ'.$z;
			$bk='BK'.$z;
			$bl='BL'.$z;
			$bm='BM'.$z;
			$bn='BN'.$z;
			$bo='BO'.$z;
			$bp='BP'.$z;
			$bq='BQ'.$z;
			$br='BR'.$z;
			$bs='BS'.$z;
			$bt='BT'.$z;
			$bu='BU'.$z;
			$bv='BV'.$z;
			$bw='BW'.$z;
			$bx='BX'.$z;
			$by='BY'.$z;
			$bz='BZ'.$z;
			$ca='CA'.$z;
			$cb='CB'.$z;
			$cc='CC'.$z;
			$cd='CD'.$z;
			$ce='CE'.$z;
			$cf='CF'.$z;
			$cg='CG'.$z;
			$ch='CH'.$z;
			$ci='CI'.$z;
			$cj='CJ'.$z;
			$ck='CK'.$z;
			$cl='CL'.$z;
			$cm='CM'.$z;
			$cn='CN'.$z;
			$co='CO'.$z;
			$cp='CP'.$z;
			$cq='CQ'.$z;
			$cr='CR'.$z;
			$cs='CS'.$z;
			$ct='CT'.$z;
			$cu='CU'.$z;
			$cv='CV'.$z;
			$cw='CW'.$z;
			$cx='CX'.$z;
			$cy='CY'.$z;
			$cz='CZ'.$z;
			$da='DA'.$z;
			$db='DB'.$z;
			$dc='DC'.$z;
			$dd='DD'.$z;
			$de='DE'.$z;
			$df='DF'.$z;
			$dg='DG'.$z;
			$dh='DH'.$z;
			$di='DI'.$z;
			$dj='DJ'.$z;
			$dk='DK'.$z;
			$dl='DL'.$z;
			$dm='DM'.$z;
			$dn='DN'.$z;
			$do='DO'.$z;
			$dp='DP'.$z;
			$dq='DQ'.$z;
			$dr='DR'.$z;
			$ds='DS'.$z;
			$dt='DT'.$z;
			$du='DU'.$z;
			
			
			$objPHPExcel->getActiveSheet()->setCellValue($a, $data['UNIT_ID']);
			$objPHPExcel->getActiveSheet()->setCellValue($b, $data['COMPANY']);
			$objPHPExcel->getActiveSheet()->setCellValue($c, $data['PROJECT']);
			$objPHPExcel->getActiveSheet()->setCellValue($d, $data['BUILDING']);
			$objPHPExcel->getActiveSheet()->setCellValue($e, $data['FLOOR']);
			$objPHPExcel->getActiveSheet()->setCellValue($f, $data['AMP_CODE']);
			$objPHPExcel->getActiveSheet()->setCellValue($g, $data['LEASE_CODE']);
			$objPHPExcel->getActiveSheet()->setCellValue($h, $data['BLOCK_CODE']);
			$objPHPExcel->getActiveSheet()->setCellValue($i, $data['ASSET_ID']);
			$objPHPExcel->getActiveSheet()->setCellValue($j, $data['BLOCK_ACTUAL_REPORT']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($k, $data['BLOCK_PROPERTY_CERT']);
			$objPHPExcel->getActiveSheet()->setCellValue($l, $data['PROPERTY_TYPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($m, $data['SIZE_BUILDING']);
			$objPHPExcel->getActiveSheet()->setCellValue($n, $data['SIZE_ACTUAL']);
			$objPHPExcel->getActiveSheet()->setCellValue($o, $data['JDE_RENTAL_STATUS']);
			$objPHPExcel->getActiveSheet()->setCellValue($p, $data['JDE_RENTAL_TYPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($q, $data['BLOCK_SOURCE']);
			$objPHPExcel->getActiveSheet()->setCellValue($r, $data['BLOCK_CERT']);
			$objPHPExcel->getActiveSheet()->setCellValue($s, $data['BLOCK_OWNERSHIP']);
			$objPHPExcel->getActiveSheet()->setCellValue($t, $data['BLOCK_MORTGAGE']);
			
 			$objPHPExcel->getActiveSheet()->setCellValue($u, $data['BLOCK_CLOSED']);
 			$objPHPExcel->getActiveSheet()->setCellValue($v, $data['OTHER_PIC']);
			$objPHPExcel->getActiveSheet()->setCellValue($w, $data['WARRANT_FILE']);
			$objPHPExcel->getActiveSheet()->setCellValue($x, $data['FLOOR_MAP']);
			$objPHPExcel->getActiveSheet()->setCellValue($y, $data['ROOM_PIC']);
			$objPHPExcel->getActiveSheet()->setCellValue($z2, $data['ROOM_TOWARDS']);
			$objPHPExcel->getActiveSheet()->setCellValue($aa, $data['LOADING_MAX']);
			$objPHPExcel->getActiveSheet()->setCellValue($ab, $data['FLOOR_HEIGHT']);
			$objPHPExcel->getActiveSheet()->setCellValue($ac, $data['FLOOR_DROP']);
			$objPHPExcel->getActiveSheet()->setCellValue($ad, $data['FLOOR_STAGE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($ae, $data['STYLE_POST']);
			$objPHPExcel->getActiveSheet()->setCellValue($af, $data['PLATFORM_HEIGHT']);
			$objPHPExcel->getActiveSheet()->setCellValue($ag, $data['SLOPE_HOUSE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ah, $data['PLATFORM']);
			$objPHPExcel->getActiveSheet()->setCellValue($ai, $data['ROOF_GARDEN']);
			$objPHPExcel->getActiveSheet()->setCellValue($aj, $data['DECORATION_ROOF']);
			$objPHPExcel->getActiveSheet()->setCellValue($ak, $data['DECORATION_FLOOR']);
			$objPHPExcel->getActiveSheet()->setCellValue($al, $data['DECORATION_WALL']);
			$objPHPExcel->getActiveSheet()->setCellValue($am, $data['IN_DOOR']);
			$objPHPExcel->getActiveSheet()->setCellValue($an, $data['RESERVE_WATER']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($ao, $data['RESERVE_HWATER']);
			$objPHPExcel->getActiveSheet()->setCellValue($ap, $data['RESERVE_AIR']);
			$objPHPExcel->getActiveSheet()->setCellValue($aq, $data['RESERVE_KITCHEN_SMOKE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ar, $data['RESERVE_KITCHEN_REFILL']);
			$objPHPExcel->getActiveSheet()->setCellValue($as, $data['AIR_COND']);
			$objPHPExcel->getActiveSheet()->setCellValue($at, $data['AIR_REFILL']);
			$objPHPExcel->getActiveSheet()->setCellValue($au, $data['RESERVE_24H_WATER']);
			$objPHPExcel->getActiveSheet()->setCellValue($av, $data['RESERVE_IN_PIPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($aw, $data['RESERVE_OUT_PIPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ax, $data['RESERVE_GAS']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($ay, $data['OUT_PIPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($az, $data['SWITCHING_CAP']);
			$objPHPExcel->getActiveSheet()->setCellValue($ba, $data['STANDARD_CAP']);
			$objPHPExcel->getActiveSheet()->setCellValue($bb, $data['STANDARD_ELEC']);
			$objPHPExcel->getActiveSheet()->setCellValue($bc, $data['STANDARD_INTERNET']);
			$objPHPExcel->getActiveSheet()->setCellValue($bd, $data['TV_IN']);
			$objPHPExcel->getActiveSheet()->setCellValue($be, $data['TV_IN_CAP']);
			$objPHPExcel->getActiveSheet()->setCellValue($bf, $data['FIRE_HOSE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bg, $data['FIRE_POLICE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bh, $data['FIRE_SPRAY']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($bi, $data['FIRE_SMOKE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bj, $data['SPARE_SPACE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bk, $data['SPECIAL_PIPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bl, $data['PUBLIC_ROOM']);
			$objPHPExcel->getActiveSheet()->setCellValue($bm, $data['DECORATION_WINDOW']);
			$objPHPExcel->getActiveSheet()->setCellValue($bn, $data['BRIDGE_ROD']);
			$objPHPExcel->getActiveSheet()->setCellValue($bo, $data['BLOCK_CODE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bp, $data['ASSET_ID_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bq, $data['BLOCK_FORCAST_REPORT']);
			$objPHPExcel->getActiveSheet()->setCellValue($br, $data['BLOCK_PROPERTY_CERT_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($bs, $data['PROPERTY_TYPE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bt, $data['SIZE_BUILDING_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bu, $data['SIZE_ACTUAL_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bv, $data['JDE_RENTAL_STATUS_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bw, $data['JDE_RENTAL_TYPE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bx, $data['BLOCK_SOURCE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($by, $data['BLOCK_CERT_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($bz, $data['BLOCK_OWNERSHIP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ca, $data['BLOCK_MORTGAGE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cb, $data['BLOCK_CLOSED_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($cc, $data['OTHER_PIC_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cd, $data['WARRANT_FILE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ce, $data['FLOOR_MAP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cf, $data['ROOM_PIC_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cg, $data['ROOM_TOWARDS_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ch, $data['LOADING_MAX_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ci, $data['FLOOR_HEIGHT_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cj, $data['FLOOR_DROP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ck, $data['FLOOR_STAGE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cl, $data['STYLE_POST_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($cm, $data['PLATFORM_HEIGHT_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cn, $data['SLOPE_HOUSE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($co, $data['PLATFORM_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cp, $data['ROOF_GARDEN_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cq, $data['DECORATION_ROOF_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cr, $data['DECORATION_FLOOR_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cs, $data['DECORATION_WALL_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ct, $data['IN_DOOR_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cu, $data['RESERVE_WATER_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cv, $data['RESERVE_HWATER_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($cw, $data['RESERVE_AIR_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cx, $data['RESERVE_KITCHEN_SMOKE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($cy, $data['RESERVE_KITCHEN_REFILL']);
			$objPHPExcel->getActiveSheet()->setCellValue($cz, $data['AIR_COND_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($da, $data['AIR_REFILL_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($db, $data['RESERVE_24H_WATER_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dc, $data['RESERVE_IN_PIPE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dd, $data['RESERVE_OUT_PIPE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($de, $data['RESERVE_GAS_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($df, $data['OUT_PIPE_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($dg, $data['SWITCHING_CAP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dh, $data['STANDARD_CAP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($di, $data['STANDARD_ELEC_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dj, $data['STANDARD_INTERNET_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dk, $data['TV_IN_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dl, $data['TV_IN_CAP_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dm, $data['FIRE_HOSE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dn, $data['FIRE_POLICE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($do, $data['FIRE_SPRAY_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dp, $data['FIRE_SMOKE_PRE']);
			
			$objPHPExcel->getActiveSheet()->setCellValue($dq, $data['SPARE_SPACE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dr, $data['SPECIAL_PIPE_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($ds, $data['PUBLIC_ROOM_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($dt, $data['DECORATION_WINDOW_PRE']);
			$objPHPExcel->getActiveSheet()->setCellValue($du, $data['BRIDGE_ROD_PRE']);
			
			$z =$z+1;
				
	}
		$objPHPExcel->getActiveSheet()->setTitle('result');
		
		$time=date("ymdHis",time());
		//var_dump($time);exit;
		header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="$time.xls"');
		header("Content-disposition: attachment; filename=$time.xls");
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');
		
		// If you're serving to IE over SSL, then the following may be needed
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;
	
	}

	
}
?>
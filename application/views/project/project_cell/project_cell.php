
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                 <td class="title"><a href="index.php/project/index"><span>项目列表</span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?PHP ECHO '<a href="'.'index.php/project/project_detail/'.$cell_item['PROJECT_ID'].'/1">'?>
				  <span><?php echo $cell_item['PROJECT'] ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?PHP ECHO '<a href="'.'index.php/building/building_list/'.$cell_item['BUILDING_ID'].'/1">'?>
				  <span><?php echo $cell_item['BUILDING'] ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?PHP ECHO '<a href="'.'index.php/floor/floor_list/'.$cell_item['FLOOR_ID'].'/1">'?><span>
				  <?php echo $floor_item['FLOOR'] ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span><?php echo $cell_item['AMP_CODE'] ?></span>
                  </td>
                  <td class="right_icon"><a href="index.php/cell/cell_edit/<?php echo $cell_item['UNIT_ID'] ?>"><i class="fa_edit fa"><!--[if IE 7]><![endif]--></i></a></td>
                  <td class="right_icon"><a target="_blank" href="index.php/cell/qr_code/<?php echo $cell_item['UNIT_ID'] ?>"><i class="fa_qrcode fa"><!--[if IE 7]><![endif]--></i></a></td>
                </tr>
              </tbody>
            </table>
<?php 
include('./application/views/project/for_pics.php');
?> 
<!--     tab     --><!--
            <table class="navigation project_tab">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>房间照片</span></td>
                  <td class="empty"></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
--><!--    big photo     -->
          	<!--<div class="small_image">
       	    	<img src="../public/images/1.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/2.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/2A.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/3.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/3A.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/4.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/5.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/5A.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/6.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/6A.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/7.jpg" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/7A.jpg" alt="建外SOHO" title="建外SOHO"/>
              <p class="project_name"><?php echo $cell_item['UNIT_ID'] ?></p>
            </div>
--><!--    info    -->
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">基本信息</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details">
              <table>
                <tbody
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><?php echo $cell_item['AMP_CODE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称单元号</span></td>
                    <td class="value"><span><?php echo $cell_item['BLOCK_CODE'] ?></span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>单元类型</span></td>
                   <td class="value"><span><?php echo $cell_item['PROPERTY_TYPE'] ?></span></td>
                  </tr>
                  
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>出租状态</span></td>
                     <td class="value"><span><?php echo $cell_item['JDE_RENTAL_STATUS'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产属性</span></td>
                     <td class="value"><span><?php echo $cell_item['JDE_RENTAL_TYPE'] ?></span></td>
                    <td class="img"></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>
                 <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑面积</span></td>
                    <td class="value"><span><?php $building_size=empty($cell_item['SIZE_BUILDING'])?$cell_item['SIZE_BUILDING_PRE']:$cell_item['SIZE_BUILDING'];echo $building_size; ?></span></td>
                  </tr>
                 <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>套内面积</span></td>
                    <td class="value"><span><?php $actual_size=empty($cell_item['SIZE_ACTUAL'])?$cell_item['SIZE_ACTUAL_PRE']:$cell_item['SIZE_ACTUAL'];echo $actual_size; ?></span></td>
                  </tr> 
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋来源</span></td>
                    <td class="value"><span><?php echo $cell_item['BLOCK_SOURCE'] ?></span></td>
                  </tr>
                
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有抵押</span></td>
                    <td class="value">
	                    <span>
	                      <?php 
	                         if ($cell_item['BLOCK_MORTGAGE']==1) {
	                         	echo "是";
	                         }elseif ($cell_item['BLOCK_MORTGAGE']==0){
	                         	echo "否";
	                         }else {
	                           echo $cell_item['BLOCK_MORTGAGE'];
	                         } 
	                      ?>
	                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否查封</span></td>
                    <td class="value">
	                    <span>
	                   
	                    <?php 
	                         if ($cell_item['BLOCK_CLOSED']==1) {
	                         	echo "是";
	                         }elseif ($cell_item['BLOCK_CLOSED']==0){
	                         	echo "否";
	                         }else {
	                           echo $cell_item['BLOCK_CLOSED'];
	                         } 
	                      ?>
	                    </span>
                    </td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>落位图及照片</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(1)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
				  <!--
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>楼层落位图</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa">[if IE 7]><![endif]</i></a></td>
                  </tr>
				  --><!--<tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>房间照片</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa">[if IE 7]><![endif]</i></a></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>其他有关证照</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa">[if IE 7]><![endif]</i></a></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>权证档案</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa">[if IE 7]><![endif]</i></a></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>平面竣工图</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa">[if IE 7]><![endif]</i></a></td>
                  </tr>
                  --></tbody>
                </table>
              <div class="clear"></div>
            </div>
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">产权相关</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有产权</span></td>
                    <td class="value">
                     <?php 
	                         if ($cell_item['BLOCK_CERT']==1) {
	                         	echo "是";
	                         }elseif ($cell_item['BLOCK_CERT']==0){
	                         	echo "否";
	                         }else {
	                           echo $cell_item['BLOCK_CERT'];
	                         } 
	                      ?>
	                     </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋所有权号</span></td>
                     <td class="value"><span><?php echo $cell_item['BLOCK_OWNERSHIP'] ?></span></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>产权证单元名</span></td>
                    <td class="value"><span><?php echo $cell_item['BLOCK_PROPERTY_CERT'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>与房屋产权有关的其他未包含证照</span></td>
                     <td class="value"><span>查看</span></td>
                    <td class="img"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></td>
                  </tr>
                </tbody>
              </table>
              <div class="clear"></div>
            </div>

            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">实测交付标准</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>实测报告单元名</span></td>
                    <td class="value"><span><?php echo $cell_item['BLOCK_ACTUAL_REPORT'] ?></span></td>
                  </tr>
                
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>朝向</span></td>
                   <td class="value"><span><?php echo $cell_item['ROOM_TOWARDS'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼板荷载（办公规范2.0KN/平米）</span></td>
                    <td class="value"><span><?php echo $cell_item['LOADING_MAX'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>层高</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_HEIGHT'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部有/无降板</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_DROP'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>室内局部高台</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_STAGE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>造型柱(个）</span></td>
                    <td class="value"><span><?php echo $cell_item['STYLE_POST'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>窗台高度</span></td>
                    <td class="value"><span><?php echo $cell_item['PLATFORM_HEIGHT'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>坡屋面结构</span></td>
                    <td class="value"><span><?php echo $cell_item['SLOPE_HOUSE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>露台</span></td>
                    <td class="value"><span><?php echo $cell_item['PLATFORM'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>屋顶花园</span></td>
                    <td class="value"><span><?php echo $cell_item['ROOF_GARDEN'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>天花装修</span></td>
                    <td class="value"><span><?php echo $cell_item['DECORATION_ROOF'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>地面装修</span></td>
                    <td class="value"><span><?php echo $cell_item['DECORATION_FLOOR'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>墙面装修</span></td>
                   <td class="value"><span><?php echo $cell_item['DECORATION_WALL'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>入户门</span></td>
                    <td class="value"><span><?php echo $cell_item['IN_DOOR'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留冷水接口管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_WATER'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留新风接口管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_AIR'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房排烟量（立方米/小时）</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_KITCHEN_SMOKE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房补风量（立方米/小时）</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_KITCHEN_REFILL'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>空调</span></td>
                    <td class="value"><span><?php echo $cell_item['AIR_COND'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>新风</span></td>
                    <td class="value"><span><?php echo $cell_item['AIR_REFILL'] ?></span></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>实测建筑面积</span></td>
                    <td class="value"><span><?php echo $cell_item['SIZE_BUILDING'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>实测套内面积</span></td>
                     <td class="value"><span><?php echo $cell_item['SIZE_ACTUAL'] ?></span></td>
                  </tr>
                
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留24H冷却水</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_24H_WATER'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留给水管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_IN_PIPE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留排水管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_OUT_PIPE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留燃气管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_GAS'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>给排水</span></td>
                    <td class="value"><span><?php echo $cell_item['OUT_PIPE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>开关容量（A)</span></td>
                    <td class="value"><span><?php echo $cell_item['SWITCHING_CAP'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标准电量</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_CAP'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>用电标准（W/平米套内面积）</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_ELEC'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>网络进线（六芯单模光纤根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_INTERNET'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电视接口（根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['TV_IN'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电话进线（六类线根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['TV_IN_CAP'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消火栓</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_HOSE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防报警</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_POLICE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>喷淋</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_SPRAY'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防排烟</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_SMOKE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部净空（m）</span></td>
                    <td class="value"><span><?php echo $cell_item['SPARE_SPACE'] ?></span></td>
                  </tr>
                  
                  
               </tbody>
              </table>
              <div class="clear"></div>
            </div>

            
            
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">预测交付标准</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details">
              <table>
                <tbody>
                <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预测报告单元名</span></td>
                    <td class="value"><span><?php echo $cell_item['BLOCK_FORCAST_REPORT'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>朝向</span></td>
                   <td class="value"><span><?php echo $cell_item['ROOM_TOWARDS_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼板荷载（办公规范2.0KN/平米）</span></td>
                    <td class="value"><span><?php echo $cell_item['LOADING_MAX_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>层高</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_HEIGHT_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部有/无降板</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_DROP_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>室内局部高台</span></td>
                    <td class="value"><span><?php echo $cell_item['FLOOR_STAGE_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>造型柱(个）</span></td>
                    <td class="value"><span><?php echo $cell_item['STYLE_POST_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>窗台高度</span></td>
                    <td class="value"><span><?php echo $cell_item['PLATFORM_HEIGHT_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>坡屋面结构</span></td>
                    <td class="value"><span><?php echo $cell_item['SLOPE_HOUSE_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>露台</span></td>
                    <td class="value"><span><?php echo $cell_item['PLATFORM_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>屋顶花园</span></td>
                    <td class="value"><span><?php echo $cell_item['ROOF_GARDEN_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>天花装修</span></td>
                    <td class="value"><span><?php echo $cell_item['DECORATION_ROOF_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>地面装修</span></td>
                    <td class="value"><span><?php echo $cell_item['DECORATION_FLOOR_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>墙面装修</span></td>
                   <td class="value"><span><?php echo $cell_item['DECORATION_WALL_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>入户门</span></td>
                    <td class="value"><span><?php echo $cell_item['IN_DOOR_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留冷水接口管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_WATER_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留新风接口管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_AIR_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房排烟量（立方米/小时）</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_KITCHEN_SMOKE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房补风量（立方米/小时）</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_KITCHEN_REFILL_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>空调</span></td>
                    <td class="value"><span><?php echo $cell_item['AIR_COND_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>新风</span></td>
                    <td class="value"><span><?php echo $cell_item['AIR_REFILL_PRE'] ?></span></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预测建筑面积</span></td>
                    <td class="value"><span><?php echo $cell_item['SIZE_BUILDING_PRE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预测套内面积</span></td>
                     <td class="value"><span><?php echo $cell_item['SIZE_ACTUAL_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留24H冷却水</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_24H_WATER_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留给水管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_IN_PIPE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留排水管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_OUT_PIPE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留燃气管径</span></td>
                    <td class="value"><span><?php echo $cell_item['RESERVE_GAS_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>给排水</span></td>
                    <td class="value"><span><?php echo $cell_item['OUT_PIPE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>开关容量（A)</span></td>
                    <td class="value"><span><?php echo $cell_item['SWITCHING_CAP_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标准电量</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_CAP_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>用电标准（W/平米套内面积）</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_ELEC_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>网络进线（六芯单模光纤根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['STANDARD_INTERNET_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电视接口（根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['TV_IN_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电话进线（六类线根数）</span></td>
                    <td class="value"><span><?php echo $cell_item['TV_IN_CAP_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消火栓</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_HOSE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防报警</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_POLICE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>喷淋</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_SPRAY_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防排烟</span></td>
                    <td class="value"><span><?php echo $cell_item['FIRE_SMOKE_PRE'] ?></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部净空（m）</span></td>
                    <td class="value"><span><?php echo $cell_item['SPARE_SPACE_PRE'] ?></span></td>
                  </tr>
               </tbody>
              </table>
              <div class="clear"></div>
            </div>
            
          
          </td>
        </tr>
      </tbody>
    </table>

<!--
	  <div class="leftmenu">

		</div>
	  <div class="rightdetails">

		</div>
      <div class="clear"></div>
      -->
<!---->


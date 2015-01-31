
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
                  <span><?php echo $cell_item['ASSET_ID'] ?></span>
                  </td>
                   <td class="right_icon"><a><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="right_icon"><a target="_blank" href="index.php/cell/qr_code/<?php echo $cell_item['UNIT_ID'] ?>"><i class="fa_qrcode fa"><!--[if IE 7]><![endif]--></i></a></td>
                </tr>
              </tbody>
            </table>

<!--     tab     -->
            
<!--    info    -->
<form action="index.php/cell/edit_data" method="post">
	<input type="hidden"  name="UNIT_ID" value="<?php echo $cell_item['UNIT_ID'] ?>"/>	
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
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><?php echo $cell_item['AMP_CODE'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称单元号</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CODE" value="<?php echo $cell_item['BLOCK_CODE'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>单元类型</span></td>
                   <td class="value"><span><select name="PROPERTY_TYPE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['PROPERTY_TYPE']!=='办公' && $cell_item['PROPERTY_TYPE']!=='商业'&& $cell_item['PROPERTY_TYPE']!=='车位'&& $cell_item['PROPERTY_TYPE']!=='会所'&& $cell_item['PROPERTY_TYPE']!=='仓库'&& $cell_item['PROPERTY_TYPE']!=='公寓'&& $cell_item['PROPERTY_TYPE']!=='其他') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='办公' <?php if ($cell_item['PROPERTY_TYPE']=='办公') {
		                                	echo "selected='selected'";
		                                }?>>办公</option>
		                                <option value='商业' <?php if ($cell_item['PROPERTY_TYPE']=='商业') {
		                                	echo "selected='selected'";
		                                }?>>商业</option>
		                                <option value='车位' <?php if ($cell_item['PROPERTY_TYPE']=='车位') {
		                                	echo "selected='selected'";
		                                }?>>车位</option>
		                                <option value='会所' <?php if ($cell_item['PROPERTY_TYPE']=='会所') {
		                                	echo "selected='selected'";
		                                }?>>会所</option>
		                                <option value='仓库' <?php if ($cell_item['PROPERTY_TYPE']=='仓库') {
		                                	echo "selected='selected'";
		                                }?>>仓库</option>
		                                <option value='公寓' <?php if ($cell_item['PROPERTY_TYPE']=='公寓') {
		                                	echo "selected='selected'";
		                                }?>>公寓</option>
		                                <option value='其他' <?php if ($cell_item['PROPERTY_TYPE']=='其他') {
		                                	echo "selected='selected'";
		                                }?>>其他</option>
		                      </select></span></td>
                  </tr>             
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>出租状态</span></td>
                     <td class="value"><span><input type="text" name="JDE_RENTAL_STATUS" value="<?php echo $cell_item['JDE_RENTAL_STATUS'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产属性</span></td>
                     <td class="value"><span><select name="JDE_RENTAL_TYPE" >
		                         
		                                
		                                <option value="" <?php if ($cell_item['JDE_RENTAL_TYPE']!=='产权未售' && $cell_item['JDE_RENTAL_TYPE']!=='人防'&& $cell_item['JDE_RENTAL_TYPE']!=='产权已售'&& $cell_item['JDE_RENTAL_TYPE']!=='自划') {   
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='产权未售' <?php if ($cell_item['JDE_RENTAL_TYPE']=='产权未售') {
		                                	echo "selected='selected'";
		                                }?>>产权未售</option>
		                                <option value='人防' <?php if ($cell_item['JDE_RENTAL_TYPE']=='人防') {
		                                	echo "selected='selected'";
		                                }?>>人防</option>
		                                <option value='产权已售' <?php if ($cell_item['JDE_RENTAL_TYPE']=='产权已售') {
		                                	echo "selected='selected'";
		                                }?>>产权已售</option>
		                                <option value='自划' <?php if ($cell_item['JDE_RENTAL_TYPE']=='自划') {
		                                	echo "selected='selected'";
		                                }?>>自划</option>
		                      </select></span></td>
                    <td class="img"></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋来源</span></td>
                    <td class="value"><span>
                    	<select name="BLOCK_SOURCE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['BLOCK_SOURCE']!=='购买' && $cell_item['BLOCK_SOURCE']!=='自建') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='购买' <?php if ($cell_item['BLOCK_SOURCE']=='购买') {
		                                	echo "selected='selected'";
		                                }?>>购买</option>
		                                <option value='自建' <?php if ($cell_item['BLOCK_SOURCE']=='自建') {
		                                	echo "selected='selected'";
		                                }?>>自建</option>
		                      </select>
                    </span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有抵押</span></td>
                    <td class="value">
	                    <span>
	                    
	                    <select name="BLOCK_MORTGAGE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['BLOCK_MORTGAGE']!==1 && $cell_item['BLOCK_MORTGAGE']!==0) {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value=0 <?php if ($cell_item['BLOCK_MORTGAGE']==0) {
		                                	echo "selected='selected'";
		                                }?>>否</option>
		                                <option value=1 <?php if ($cell_item['BLOCK_MORTGAGE']==1) {
		                                	echo "selected='selected'";
		                                }?>>是</option>
		                      </select>
	                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否查封</span></td>
                    <td class="value">
	                    <span>
	                    
	                    <select name="BLOCK_CLOSED" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['BLOCK_CLOSED']!==1 && $cell_item['BLOCK_CLOSED']!==0) {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value=0 <?php if ($cell_item['BLOCK_CLOSED']==0) {
		                                	echo "selected='selected'";
		                                }?>>否</option>
		                                <option value=1 <?php if ($cell_item['BLOCK_CLOSED']==1) {
		                                	echo "selected='selected'";
		                                }?>>是</option>
		                      </select>
	                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼层落位图</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
                  </tbody>
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
                     <span>
		                      <select name="BLOCK_CERT" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['BLOCK_CERT']!==1 && $cell_item['BLOCK_CERT']!==0) {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value=0 <?php if ($cell_item['BLOCK_CERT']==0) {
		                                	echo "selected='selected'";
		                                }?>>否</option>
		                                <option value=1 <?php if ($cell_item['BLOCK_CERT']==1) {
		                                	echo "selected='selected'";
		                                }?>>是</option>
		                      </select>
		                     
		              </span>
                    </td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋所有权号</span></td>
                     <td class="value"><span><input type="text" name="BLOCK_OWNERSHIP" value="<?php echo $cell_item['BLOCK_OWNERSHIP'] ?>"></span></td>
                    <td class="img"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>产权证单元名</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_PROPERTY_CERT" value="<?php echo $cell_item['BLOCK_PROPERTY_CERT'] ?>"></span></td>
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
                    <td class="value"><span><input type="text" name="BLOCK_ACTUAL_REPORT" value="<?php echo $cell_item['BLOCK_ACTUAL_REPORT'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>朝向</span></td>
                   <td class="value"><span><input type="text" name="ROOM_TOWARDS" value="<?php echo $cell_item['ROOM_TOWARDS'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼板荷载（办公规范2.0KN/平米）</span></td>
                    <td class="value"><span><input type="text" name="LOADING_MAX" value="<?php echo $cell_item['LOADING_MAX'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>层高</span></td>
                    <td class="value"><span><input type="text" name="FLOOR_HEIGHT" value="<?php echo $cell_item['FLOOR_HEIGHT'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部有/无降板</span></td>
                    <td class="value"><span><select name="FLOOR_DROP" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['FLOOR_DROP']!=='有' && $cell_item['FLOOR_DROP']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['FLOOR_DROP']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['FLOOR_DROP']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select>
                   </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>室内局部高台</span></td>
                    <td class="value"><span><input type="text" name="FLOOR_STAGE" value="<?php echo $cell_item['FLOOR_STAGE'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>造型柱(个）</span></td>
                    <td class="value"><span><input type="text" name="STYLE_POST" value="<?php echo $cell_item['STYLE_POST'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>窗台高度</span></td>
                    <td class="value"><span><input type="text" name="PLATFORM_HEIGHT" value="<?php echo $cell_item['PLATFORM_HEIGHT'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>坡屋面结构</span></td>
                    <td class="value"><span><select name="SLOPE_HOUSE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['SLOPE_HOUSE']!=='有' && $cell_item['SLOPE_HOUSE']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['SLOPE_HOUSE']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['SLOPE_HOUSE']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>                 
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>露台</span></td>
                    <td class="value"><span><select name="PLATFORM" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['PLATFORM']!=='有' && $cell_item['PLATFORM']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['PLATFORM']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['PLATFORM']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>屋顶花园</span></td>
                    <td class="value"><span><select name="ROOF_GARDEN" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['ROOF_GARDEN']!=='私有' && $cell_item['ROOF_GARDEN']!=='共享'&& $cell_item['ROOF_GARDEN']!=='共享') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='私有' <?php if ($cell_item['ROOF_GARDEN']=='私有') {
		                                	echo "selected='selected'";
		                                }?>>私有</option>
		                                <option value='无' <?php if ($cell_item['ROOF_GARDEN']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                                <option value='共享' <?php if ($cell_item['ROOF_GARDEN']=='共享') {
		                                	echo "selected='selected'";
		                                }?>>共享</option>
		                      </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>天花装修</span></td>
                    <td class="value"><span><input type="text" name="DECORATION_ROOF" value="<?php echo $cell_item['DECORATION_ROOF'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>地面装修</span></td>
                    <td class="value"><span><input type="text" name="DECORATION_FLOOR" value="<?php echo $cell_item['DECORATION_FLOOR'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>墙面装修</span></td>
                   <td class="value"><span><input type="text" name="DECORATION_WALL" value="<?php echo $cell_item['DECORATION_WALL'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>入户门</span></td>
                    <td class="value"><span><input type="text" name="IN_DOOR" value="<?php echo $cell_item['IN_DOOR'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留冷水接口管径？</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_WATER" value="<?php echo $cell_item['RESERVE_WATER'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留新风接口管径</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_AIR" value="<?php echo $cell_item['RESERVE_AIR'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房排烟量（立方米/小时）</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_KITCHEN_SMOKE" value="<?php echo $cell_item['RESERVE_KITCHEN_SMOKE'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留厨房补风量（立方米/小时）</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_KITCHEN_REFILL" value="<?php echo $cell_item['RESERVE_KITCHEN_REFILL'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>空调</span></td>
                    <td class="value"><span><input type="text" name="AIR_COND" value="<?php echo $cell_item['AIR_COND'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>新风</span></td>
                    <td class="value"><span><input type="text" name="AIR_REFILL" value="<?php echo $cell_item['AIR_REFILL'] ?>"></span></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留24H冷却水</span></td>
                    <td class="value"><span><select name="RESERVE_24H_WATER" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['RESERVE_24H_WATER']!=='有' && $cell_item['RESERVE_24H_WATER']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['RESERVE_24H_WATER']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['RESERVE_24H_WATER']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留给水管径</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_IN_PIPE" value="<?php echo $cell_item['RESERVE_IN_PIPE'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留排水管径</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_OUT_PIPE" value="<?php echo $cell_item['RESERVE_OUT_PIPE'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>预留燃气管径</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_GAS" value="<?php echo $cell_item['RESERVE_GAS'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>给排水</span></td>
                    <td class="value"><span><select name="OUT_PIPE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['OUT_PIPE']!=='有' && $cell_item['OUT_PIPE']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['OUT_PIPE']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['OUT_PIPE']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>开关容量（A)</span></td>
                    <td class="value"><span><input type="text" name="SWITCHING_CAP" value="<?php echo $cell_item['SWITCHING_CAP'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标准电量</span></td>
                    <td class="value"><span><input type="text" name="STANDARD_CAP" value="<?php echo $cell_item['STANDARD_CAP'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>用电标准（W/平米套内面积）</span></td>
                    <td class="value"><span><input type="text" name="STANDARD_ELEC" value="<?php echo $cell_item['STANDARD_ELEC'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>网络进线（六芯单模光纤根数）</span></td>
                    <td class="value"><span><input type="text" name="STANDARD_INTERNET" value="<?php echo $cell_item['STANDARD_INTERNET'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电视接口（根数）</span></td>
                    <td class="value"><span><input type="text" name="TV_IN" value="<?php echo $cell_item['TV_IN'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>电话进线（六类线根数）</span></td>
                    <td class="value"><span><input type="text" name="TV_IN_CAP" value="<?php echo $cell_item['TV_IN_CAP'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消火栓</span></td>
                    <td class="value"><span><select name="FIRE_HOSE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['FIRE_HOSE']!=='有' && $cell_item['FIRE_HOSE']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['FIRE_HOSE']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['FIRE_HOSE']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防报警</span></td>
                    <td class="value"><span><select name="FIRE_POLICE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['FIRE_POLICE']!=='有' && $cell_item['FIRE_POLICE']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['FIRE_POLICE']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['FIRE_POLICE']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>喷淋</span></td>
                    <td class="value"><span><select name="FIRE_SPRAY" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['FIRE_SPRAY']!=='有' && $cell_item['FIRE_SPRAY']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['FIRE_SPRAY']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['FIRE_SPRAY']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>消防排烟</span></td>
                    <td class="value"><span><select name="FIRE_SMOKE" >
		                               
		                                
		                                <option value="" <?php if ($cell_item['FIRE_SMOKE']!=='有' && $cell_item['FIRE_SMOKE']!=='无') {
		                                	echo "selected='selected'";
		                                }?>></option>
		                                
		                                <option value='有' <?php if ($cell_item['FIRE_SMOKE']=='有') {
		                                	echo "selected='selected'";
		                                }?>>有</option>
		                                <option value='无' <?php if ($cell_item['FIRE_SMOKE']=='无') {
		                                	echo "selected='selected'";
		                                }?>>无</option>
		                      </select></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>局部净空（m）</span></td>
                    <td class="value"><span><input type="text" name="SPARE_SPACE" value="<?php echo $cell_item['SPARE_SPACE'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>落位图及照片</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(1)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
               </tbody>
              </table>
              <div class="clear"></div>
            </div>
               

          <div>
		  <input class="btn" type="submit" value="保存">
		   <a href="index.php/cell/cell_list/<?php echo $cell_item['UNIT_ID'] ?>/1">
		  <input class="btn grey" type="button" value="取消"></a></div>
          <p>&nbsp;</p> 
  
</form> 
         
          </td></tr></tbody></table>
    

<!--
	  <div class="leftmenu">

		</div>
	  <div class="rightdetails">

		</div>
      <div class="clear"></div>
      -->
<!---->



          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/project/index"><span>项目列表</span></a>
                   <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?php echo '<a href="'.'index.php/project/project_detail/'.$building_item['PROJECT_ID'].'/1">';
				  
				  ?><span>
				  
				  <?php echo $project_item['0']['PROJECT']; ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span><?php echo $building_item['BUILDING'] ?></span>
                  </td>
                  <td class="right_icon"><a><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>

<!--     tab     -->
            <table class="navigation project_tab" hidden="hidden">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>项目图片</span></td>
                  <td class="empty"></td>
                  <td class="right_icon"><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
<!--    big photo     -->
          	<div class="small_image" hidden="">
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
              <p class="project_name">建外SOHO1号楼会所</p>
            </div>
<!--    info    -->
<form action="index.php/building/edit_data" method="post">
	<input type="hidden"  name="BUILDING_ID" value="<?php echo $building_item['BUILDING_ID'] ?>"/>
            <table class="info" hidden="">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">建筑物详细信息</td>
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
                    <td class="attr"><span>建筑物名称</span></td>
                    <td class="value"><span><input type="text" name="BUILDING" value="<?php echo $building_item['BUILDING'] ?>"></span></td>
                  </tr>                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公安局备案地址</span></td>
                    <td class="value"><span><input type="text" name="PSB_ADDRESS" value="<?php echo $building_item['PSB_ADDRESS'] ?>"></span></td>
                  </tr>
                  <!--<tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>建筑面积</span></td>
                    <td class="value"><span><input type="text" name="SIZE_BUILDING" value="<?php echo $building_item['SIZE_BUILDING'] ?>"></span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>套内面积</span></td>
                   <td class="value"><span><input type="text" name="SIZE_ACTUAL" value="<?php echo $building_item['SIZE_ACTUAL'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>是否有产权</span></td>
                   <td class="value"><span><input type="text" name="BLOCK_CERT" value="<?php echo $building_item['BLOCK_CERT'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>房屋所有权号</span></td>
                   <td class="value"><span><input type="text" name="BLOCK_OWNERSHIP" value="<?php echo $building_item['BLOCK_OWNERSHIP'] ?>"></span></td>
                    <td class="img"></td>
                  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>是否有抵押</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_MORTGAGE" value="<?php echo $building_item['BLOCK_MORTGAGE'] ?>"></span></td>
                  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>是否查封</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CLOSED" value="<?php echo $building_item['BLOCK_CLOSED'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>普通地下室备案</span></td>
                    <td class="value"><span><input type="text" name="ORD_BASEMENT_RECORD" value="<?php echo $building_item['ORD_BASEMENT_RECORD'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>人民防空工程使用许可</span></td>
                    <td class="value"><span><input type="text" name="AIR_CIVIL_RECORD" value="<?php echo $building_item['AIR_CIVIL_RECORD'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>公共停车场经营备案证</span></td>
                    <td class="value"><span><input type="text" name="CARPARK_SERVICE_RECORD" value="<?php echo $building_item['CARPARK_SERVICE_RECORD'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>停车场收费许可证明</span></td>
                    <td class="value"><span><input type="text" name="CARPARK_CHARGE_RECORD" value="<?php echo $building_item['CARPARK_CHARGE_RECORD'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>与房屋产权有关的其他未包含证照</span></td>
                    <td class="value"><span><input type="text" name="OTHER_PIC" value="<?php echo $building_item['OTHER_PIC'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>权证档案</span></td>
                    <td class="value"><span><input type="text" name="WARRANT_FILE" value="<?php echo $building_item['WARRANT_FILE'] ?>"></span></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>                 				  
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>平面竣工图</span></td>
                    <td class="value"><span><input type="text" name="PLAN_MAP" value="<?php echo $building_item['PLAN_MAP'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>天花装修</span></td>
                    <td class="value"><span><input type="text" name="DECORATION_ROOF" value="<?php echo $building_item['DECORATION_ROOF'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>地面装修</span></td>
                    <td class="value"><span><input type="text" name="DECORATION_FLOOR" value="<?php echo $building_item['DECORATION_FLOOR'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>墙面装修</span></td>
                    <td class="value"><span><input type="text" name="DECORATION_WALL" value="<?php echo $building_item['DECORATION_WALL'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>入户门</span></td>
                    <td class="value"><span><input type="text" name="IN_DOOR" value="<?php echo $building_item['IN_DOOR'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>空调</span></td>
                    <td class="value"><span><input type="text" name="AIR_COND" value="<?php echo $building_item['AIR_COND'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>新风</span></td>
                    <td class="value"><span><input type="text" name="AIR_REFILL" value="<?php echo $building_item['AIR_REFILL'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>预留24H冷却水</span></td>
                    <td class="value"><span><input type="text" name="RESERVE_24H_WATER" value="<?php echo $building_item['RESERVE_24H_WATER'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>给排水</span></td>
                    <td class="value"><span><input type="text" name="OUT_PIPE" value="<?php echo $building_item['OUT_PIPE'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>消防报警</span></td>
                    <td class="value"><span><input type="text" name="FIRE_POLICE" value="<?php echo $building_item['FIRE_POLICE'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>喷淋</span></td>
                    <td class="value"><span><input type="text" name="FIRE_SPRAY" value="<?php echo $building_item['FIRE_SPRAY'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa">[if IE 7]><![endif]</i></td>
                    <td class="attr"><span>消防排烟</span></td>
                    <td class="value"><span><input type="text" name="FIRE_SMOKE" value="<?php echo $building_item['FIRE_SMOKE'] ?>"></span></td>
                  </tr>
                  --></tbody>
                </table>
              <div class="clear"></div>
            </div>
            
            
         
              <div>
		  <input class="btn" type="submit" value="保存">
		  <a href="index.php/building/building_list/<?php echo $building_item['BUILDING_ID'] ?>/1">
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

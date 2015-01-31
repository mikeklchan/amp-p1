
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
                  <td class="right_icon"><a href="index.php/building/building_edit/<?php echo $building_item['BUILDING_ID'] ?>/1"><i class="fa_edit fa"><!--[if IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
<?php 
include('./application/views/project/for_pics.php');
?> 
<!--     tab     -->
            <table class="navigation project_tab" hidden="hidden">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>项目图片</span></td>
                  <td class="empty"></td>
                  <td class="right_icon"><i class="fa_edit fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
<!--    big photo     -->
          	<div class="small_image" hidden="">
       	    	<img src="..public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="..public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="..public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="..public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
              <p class="project_name">建外SOHO1号楼会所</p>
            </div>
<!--    info    -->
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
                    <td class="value"><span><?php echo $building_item['BUILDING'] ?></span></td>
                  </tr>                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公安局备案地址</span></td>
                    <td class="value"><span><?php echo $building_item['PSB_ADDRESS'] ?></span></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>                 				  
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>办公</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_BG']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_BG']?>套</span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>商业</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_SY']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_SY']?>套</span></td>
                  </tr>
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>车位</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_CW']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_CW']?>套</span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>会所</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_HS']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_HS']?>套</span></td>
                  </tr>
                 <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>仓库</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_CK']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_CK']?>套</span></td>
                  </tr>
                  
                <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公寓</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_GY']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_GY']?>套</span></td>
                  </tr>
                 <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>其他</span></td>
                    <td class="value"><span><?php echo $namedb[0]['SIZE_QT']?>平方米&nbsp;&nbsp;<?php echo $namedb[0]['COUNT_QT']?>套</span></td>
                  </tr>
                  
                  </tbody>
                </table>
              <div class="clear"></div>
            </div>
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">楼层列表</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details2">
              <table cellspacing="1">
                <tbody>
                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">序号:</i></td>
                    <th class="name"><span>标称楼层</span></td>
                    <th class="name"><span>楼层名称</span></td>
                    <th class="name"><span>建筑物实际楼层</span></td>
                    <th class="attr"><span>单元数量</span></td>
                    <th class="area"><span>建筑面积</span></td>
                    <th class="area"><span>套内面积</span></td>
                    
                  </tr>
                 
                    <?php  if(!empty($floor_item)) foreach ($floor_item as $v=>$list_item) {?>
                  <tr>
                  
                    <td class="no"><?php echo ($page-1)*20+$v+1; ?></td>
                    <td class="name"><span>
					<?php echo "<a href=".'"index.php/floor/floor_list/'.$list_item['FLOOR_ID'].'/1">'?>
					<?php echo $list_item['FLOOR'] ?></a>
                	</span></td>
                	
                	<td class="name"><span>
					<?php echo "<a href=".'"index.php/floor/floor_list/'.$list_item['FLOOR_ID'].'/1">'?>
					<?php echo $list_item['FLOOR_DESC'] ?></a>
                	</span></td>
                	
                	<td class="name"><span>
					<?php echo "<a href=".'"index.php/floor/floor_list/'.$list_item['FLOOR_ID'].'/1">'?>
					<?php echo $list_item['FLOOR_ACT'] ?></a>
                	</span></td>
                	<td class="area"><span><?php echo $list_item['CELL_COUNT'] ?></span></td>
                	 <td class="level"><span><?php echo $list_item['SIZE_ALL'] ?> 平方米</span></td>
                	 <td class="level"><span><?php echo $list_item['SIZE_ACTUAL'] ?> 平方米</span></td>
                   
                  </tr>
                  <?php } ?>
                </table>
              <div class="clear"></div>
            </div>

            
          <div id="page">
				<?php echo $pag ?>
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

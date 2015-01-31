
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/project/index"><span>项目列表</span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?PHP ECHO '<a href="'.'index.php/project/project_detail/'.$building_item['PROJECT_ID'].'/1">'?><span><?php echo $project_item['0']['PROJECT'] ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <?PHP ECHO '<a href="'.'index.php/building/building_list/'.$building_item['BUILDING_ID'].'/1">'?><span><?php echo $building_item['BUILDING'] ?></span></a>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span><?php echo $floor_item['FLOOR'] ?></span>
                  </td>
                  <td class="right_icon"><a href="index.php/floor/floor_edit/<?php echo $floor_item['FLOOR_ID'] ?>/1"><i class="fa_edit fa"><!--[if IE 7]><![endif]--></i></a></td>
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
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
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
                    <td class="attr"><span>标称楼层</span></td>
                    <td class="value"><span><?php echo $floor_item['FLOOR'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼层名称</span></td>
                    <td class="value"><span><?php echo $floor_item['FLOOR_DESC'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑实际楼层</span></td>
                    <td class="value"><span><?php echo $floor_item['FLOOR_ACT'] ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>落位图及照片</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(1)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
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
                  <td class="title">单元列表</td>
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
                    <th class="no"><span>No:</span></td>
                    <th class="name"><span>资产基础信息代码</span></td>
                    <th class="type"><span>标称单元号</span></td>
                    <th class="type"><span>单元类型</span></td>
                    <th class="area"><span>建筑面积</span></td>
                    <th class="area"><span>套内面积</span></td>
                    <th class="state"><span>出租状态</span></td>
                    <th class="state"><span>资产属性</span></td>
                    <th class="state"><span>房屋来源</span></td>
                    
                  </tr>
                   <?php  if(!empty($cell_item)) foreach ($cell_item as $v=>$list_item) {?>
                  <tr>
                    <td class="no"><?php echo ($page-1)*20+$v+1;  ?></td>
                    <td class="name"><span>
					<?php echo "<a href=".'"index.php/cell/cell_list/'.$list_item['UNIT_ID'].'/1">'?>
					<?php echo $list_item['AMP_CODE'] ?></a></span></td>
					<td class="type"><?php echo $list_item['BLOCK_CODE'] ?></td>
                    <td class="type"><?php echo $list_item['PROPERTY_TYPE'] ?></td>
                    <td class="area">
                    <span>
	                    <?php if (!empty($list_item['SIZE_BUILDING'])) {
	                    	echo $list_item['SIZE_BUILDING'];
	                    }else {
	                    	echo $list_item['SIZE_BUILDING_PRE'];
	                    }  ?>
                    </span>平方米</td>
                    <td class="area">
                    <span>
                        <?php if (!empty($list_item['SIZE_ACTUAL'])) {
                        	echo $list_item['SIZE_ACTUAL'];
                          }else {
                          	echo $list_item['SIZE_ACTUAL_PRE'];
                          }  ?>
                    </span>平方米</td>
                    <td class="state"><span><?php echo $list_item['JDE_RENTAL_STATUS'] ?></span></td>
                    <td class="state"><span><?php echo $list_item['JDE_RENTAL_TYPE'] ?></span></td>
                    <td class="state"><span><?php echo $list_item['BLOCK_SOURCE'] ?></span></td>
                  </tr>
                    <?php } ?>
                </table>
              <div class="clear"></div>
            </div>

            
          <div  id="page">            
            <?php  echo $pag?>
          
          </div>
          </td>
        </tr>
      </tbody>
    </table>


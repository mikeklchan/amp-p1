
<td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/project/index"><span>项目列表</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><span><?php echo $project_item['PROJECT'] ?></span></td>
                  <td class="right_icon"><a href="index.php/project/project_edit/<?php echo $project_item['PROJECT_ID'] ?>"><i class="fa_edit fa"><!--[if IE 7]><![endif]--></i></a></td>
                </tr>
              </tbody>
            </table>
<?php 
include('./application/views/project/for_pics.php');
?> 
<!--     tab     --><!--
            <table class="navigation project_tab" hidden="hidden">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>项目图片</span></td>
                  <td class="empty"></td>
                  <td class="right_icon"><i class="fa_edit fa">[if IE 7]><![endif]</i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
--><!--    big photo     -->
          	<!--<div class="big_image">
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
              <p class="project_name"><?php echo $project_item['PROJECT'] ?></p>
            </div>
--><!--    info    -->
            <table class="info">
              <tbody>
              
                <tr>
                  <td class="space"></td>
                  <td class="title">项目详细信息</td>
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
                    <td class="attr"><span>公司</span></td>
                    <td class="value"><span><?php $count=count($project_item['COMPANY']);if($count>1){echo mb_substr($project_item['COMPANY'][0],0,10,'utf-8')."等".$count."个";}else{echo $project_item['COMPANY'][0];} ?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span><?php echo $project_item['PROJECT'] ?></span></td>
                  </tr>
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公安局备案地址</span></td>
                    <td class="value"><span><?php echo $project_item['PSB_ADDRESS'] ?></span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>普通地下室备案</span></td>
                   <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(5)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
				 
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>人民防空工程使用许可</span></td>
                   <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(1)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公共停车场经营备案证</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(2)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>停车场收费许可证明</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(4)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>其它权证扫描件</span></td>
                    <td class="value"><span>查看</span></td>
                    <td class="img"><a href="javascript:showdiv(3)"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
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
                  <td class="title">建筑物列表</td>
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
                    <th class="name"><span>建筑物名称</span></td>
                    <th class="level"><span>楼层数</span></td>
                     <th class="level"><span>单元数</span></td>
                    <th class="area"><span>建筑面积</span></td>
                    <th class="state"><span>套内面积</span></td>
                  </tr>
                  <?php  foreach ($building_item as $list_item) {?>
                  <tr>
                    <td class="no"><?php echo $list_item['BUILDING_ID'] ?></td>
                    <td class="name"><span>
					<?php echo "<a href=".'"index.php/building/building_list/'.$list_item['BUILDING_ID'].'/1">'?>
					<?php echo $list_item['BUILDING'] ?></a>
					
					
					</span></td>
                    <td class="level"><span><?php echo $list_item['FLOOR'] ?></span>层</td>
                    <td class="level"><span><?php echo $list_item['BLOCK_NUM'] ?></span></td>
                    <td class="area"><span><?php echo $list_item['SIZE_BUILDING'] ?></span>平方米</td>
                    <td class="area"><span><?php echo $list_item['SIZE_ACTUAL'] ?></span>平方米</td>  
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

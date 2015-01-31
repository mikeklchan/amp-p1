

          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/project/index"><span>项目列表</span></a><i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i><span><?php echo $project_item['PROJECT'] ?></span></td>
                    <td class="right_icon"><a><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
				   </tr>
              </tbody>
            </table>

<!--     tab     --><!--
            <table class="navigation project_tab" hidden="hidden">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>项目图片</span></td>
                  <td class="empty"></td>
                  <td class="right_icon"><i class="fa_edit fa">[if lte IE 7]><![endif]</i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
--><!--    big photo     -->

<form action="index.php/project/edit_data" method="post">
			 <input type="hidden"  name="PROJECT_ID" value="<?php echo $project_item['PROJECT_ID'] ?>"/>			 
          <!--	<div class="big_image">
       	    	<img src="../public/images/SOHO_A01.png" alt="建外SOHO" title="建外SOHO"/>
              <p class="project_name">项目名称:<span><input type="file"></span><input class="btn" type="button" value="上传照片"></p>
            </div>
--><!--    info    -->
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">项目详细信息</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>
            <div class="details_edit">
              <table>
                <tbody>                
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公司</span></td>
                    <td class="value"><span><input type="text" name="COMPANY" value="<?php echo $project_item['COMPANY'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span><input type="text" name="PROJECT" value="<?php echo $project_item['PROJECT'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑面积</span></td>
                    <td class="value"><span><input type="text" name="SIZE_BUILDING" value="<?php echo $project_item['SIZE_BUILDING'] ?>"></span></td>
                  </tr>
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>套内面积</span></td>
                    <td class="value"><span><input type="text" name="SIZE_ACTUAL" value="<?php echo $project_item['SIZE_ACTUAL'] ?>"></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公安局备案地址</span></td>
                    <td class="value"><span><input type="text" name="PSB_ADDRESS" value="<?php echo $project_item['PSB_ADDRESS'] ?>"></span></td>
                  </tr>
                  
                   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>普通地下室备案备案地址</span></td>
                    <td class="value"><span><input type="text" name="ORD_BASEMENT_RECORD" value="<?php echo $project_item['ORD_BASEMENT_RECORD'] ?>"></span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>人民防空工程使用许可</span></td>
                    <td class="value"><span><input type="text" name="AIR_CIVIL_RECORD" value="<?php echo $project_item['AIR_CIVIL_RECORD'] ?>"></span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                    
                    <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公共停车场经营备案证</span></td>
                    <td class="value"><span><input type="text" name="CARPARK_SERVICE_RECORD" value="<?php echo $project_item['CARPARK_SERVICE_RECORD'] ?>"></span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>停车场收费许可证明</span></td>
                    <td class="value"><span><input type="text" name="CARPARK_CHARGE_RECORD" value="<?php echo $project_item['CARPARK_CHARGE_RECORD'] ?>"></span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>其它权证扫描件</span></td>
                    <td class="value"><span><input type="text" name="OTHER_PIC" value="<?php echo $project_item['OTHER_PIC'] ?>"></span></td>
                    <td class="img"><a href="#"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></a></td>
                  </tr>
                  </tr>
                  </tbody>
                </table>
              <div class="clear"></div>
            </div>
           
			 
          <div>
		  <input class="btn" type="submit" value="保存">
		  <a href="index.php/project/project_detail/<?php echo $project_item['PROJECT_ID'] ?>/1">
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


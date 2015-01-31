

          <td class="rightdetails">




<form action="index.php/project_info_maintain/edit_data" method="post">
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
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span><input type="text" name="PROJECT" value="<?php echo $project_item['PROJECT'] ?>"></span></td>
                  </tr>
                  
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公安局备案地址</span></td>
                    <td class="value"><span><input type="text" name="PSB_ADDRESS" value="<?php echo $project_item['PSB_ADDRESS'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>地域</span></td>
                    <td class="value"><span><input type="text" name="DISTRICT" value="<?php echo $project_item['DISTRICT'] ?>"></span></td>
                  </tr>
                  </tbody>
                </table>
              <div class="clear"></div>
            </div>
           
			 
          <div>
		  <input class="btn" type="submit" value="修改">
		  <a href="index.php/project_info_maintain/view/1">
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


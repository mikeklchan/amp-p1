
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
                  <td class="right_icon"><i class="fa_save_fa"><!--[if IE 7]><![endif]--></i></td>
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
<form action="index.php/floor/edit_data" method="post">
<input type="hidden"  name="FLOOR_ID" value="<?php echo $floor_item['FLOOR_ID'] ?>"/>
            <table class="info" hidden="">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">楼层详细信息</td>
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
                    <td class="value"><span><input type="text" name="FLOOR" value="<?php echo $floor_item['FLOOR'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>楼层名称</span></td>
                    <td class="value"><span><input type="text" name="FLOOR_DESC" value="<?php echo $floor_item['FLOOR_DESC'] ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑实际楼层</span></td>
                    <td class="value"><span><input type="text" name="FLOOR_ACT" value="<?php echo $floor_item['FLOOR_ACT'] ?>"></span></td>
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
		   <a href="index.php/floor/floor_list/<?php echo $floor_item['FLOOR_ID'] ?>/1">
		  <input class="btn grey" type="button" value="取消"></a></div>
          <p>&nbsp;</p> 
  
</form>         
          </td></tr></tbody></table>
     


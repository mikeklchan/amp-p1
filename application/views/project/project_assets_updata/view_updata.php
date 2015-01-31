
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><span>无形资产</span>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                 <span>商标</span>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>商标信息修改</span>
                  </td>
                  <td class="right_icon"><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>


<form action="index.php/assetsupdata/view_updata/<?php echo $dbr[0]['BRAND_ID']?>" method="post">
	
            <div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><input type="text" name="AMP_CODE" value="<?php echo $dbr[0]['AMP_CODE']?>"></span></td>
                  </tr>                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>商标注册证号</span></td>
                    <td class="value"><span><input type="text" name="LICENSE_REGCODE" value="<?php echo $dbr[0]['LICENSE_REGCODE']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册商标</span></td>
                    <td class="value"><span><input type="text" name="LICENSE_TRADEMARK" value="<?php echo $dbr[0]['LICENSE_TRADEMARK']?>"></span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>核定服务项目</span></td>
                   <td class="value"><span><input type="text" name="SERVICE_TYPE" value="<?php echo $dbr[0]['SERVICE_TYPE']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册人</span></td>
                   <td class="value"><span><input type="text" name="REG_PERSON" value="<?php echo $dbr[0]['REG_PERSON']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册有效期</span></td>
                   <td class="value"><span><input type="text" name="REG_EXPIRY" value="<?php echo $dbr[0]['REG_EXPIRY']?>"></span></td>
                    <td class="img"></td>
                  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>续展情况</span></td>
                    <td class="value"><span><input type="text" name="CONTINUE_STATUS" value="<?php echo $dbr[0]['CONTINUE_STATUS']?>"></span></td>
                  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>许可情况</span></td>
                    <td class="value"><span><input type="text" name="APPROVAL_STATUS" value="<?php echo $dbr[0]['APPROVAL_STATUS']?>"></span></td>
                  </tr>
                  
                 
                  </tbody>
                </table>
             
              <div class="clear"></div>
            </div>
            
            
         
              <div>
		  <input class="btn" type="submit" value="保存">
		  
		  <a href="index.php/assets/assets_view"><input class="btn grey" type="button" value="取消"></a></div>
          <p>&nbsp;</p> 
  
</form> 
		</td>
		</tr></tbody></table>
<!--
	  <div class="leftmenu">

		</div>
	  <div class="rightdetails">

		</div>
      <div class="clear"></div>
      -->
<!---->

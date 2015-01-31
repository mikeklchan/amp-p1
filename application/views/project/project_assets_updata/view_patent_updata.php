
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><span>无形资产</span>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                 <span>专利</span>
                  <i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>专利信息修改</span>
                  </td>
                  <td class="right_icon"><i class="fa_save fa"><!--[if IE 7]><![endif]--></i></td>
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
<form action="index.php/assetsupdata/view_patent_updata/<?php echo $dbr[0]['PATENT_ID']?>" method="post">
	
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
                    <td class="attr"><span>证书号</span></td>
                    <td class="value"><span><input type="text" name="CERT_CODE" value="<?php echo $dbr[0]['CERT_CODE']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>发明名称</span></td>
                    <td class="value"><span><input type="text" name="INVENTION_NAME" value="<?php echo $dbr[0]['INVENTION_NAME']?>"></span></td>
                  </tr>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>专利权人</span></td>
                   <td class="value"><span><input type="text" name="RIGHTS_PERSON" value="<?php echo $dbr[0]['RIGHTS_PERSON']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>授权人</span></td>
                   <td class="value"><span><input type="text" name="AUTHORIZED_PERSON" value="<?php echo $dbr[0]['AUTHORIZED_PERSON']?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>登记事项</span></td>
                   <td class="value"><span><input type="text" name="REG_REMARKS" value="<?php echo $dbr[0]['REG_REMARKS']?>"></span></td>
                    <td class="img"></td>
                  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>登记号</span></td>
                    <td class="value"><span><input type="text" name="REG_CODE" value="<?php echo $dbr[0]['REG_CODE']?>"></span></td>
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
		  
		 <a href="index.php/assets/assets_view_patent"><input class="btn grey" type="button" value="取消"></a></div>
          <p>&nbsp;</p> 
  
</form> 
		</td>
<!--
	  <div class="leftmenu">

		</div>
	  <div class="rightdetails">

		</div>
      <div class="clear"></div>
      -->
<!---->

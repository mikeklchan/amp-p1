
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><a href="index.php/assets/assets_view_copyright"><span>著作权</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>著作权详细信息</span></td>
                  <td class="right_icon"><a href="index.php/assetsupdata/view_copyright_updata/<?php echo $dbr[0]['COPYRIGHT_ID']?>"><i class="fa_edit fa">
                  <!--[if IE 7]><![endif]-->
                  </i></a></td>
                </tr>
              </tbody>
            </table>
<!--     tab     -->
            
<div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><?php echo $dbr[0]['AMP_CODE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>证书号</span></td>
                    <td class="value"><span><?php echo $dbr[0]['CERT_CODE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>著作权名称</span></td>
                    <td class="value"><span><?php echo $dbr[0]['RIGHTS_NAME']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>著作权人</span></td>
                    <td class="value"><span><?php echo $dbr[0]['RIGHTS_PERSON']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>权利取得方式</span></td>
                    <td class="value"><span><?php echo $dbr[0]['RIGHTS_FROM']?></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>权利范围</span></td>
                    <td class="value"><span><?php echo $dbr[0]['RIGHTS_AREA']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>登记号</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_CODE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>许可情况</span></td>
                    <td class="value"><span><?php echo $dbr[0]['APPROVAL_STATUS']?></span></td>
                   <!--  <td class="img"><i class="fa_photo fa"><!--[if IE 7]><![endif]--></i></td> 
                  </tr>
                  </tbody>
                </table>
           
              <div class="clear"></div>
            </div>            

          
          </td>
        </tr>
      </tbody>
    </table>

 
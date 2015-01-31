
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><a href="index.php/assets/assets_view_patent"><span>专利</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>专利详细信息</span></td>
                  <td class="right_icon"><a href="index.php/assetsupdata/view_patent_updata/<?php echo $dbr[0]['PATENT_ID']?>"><i class="fa_edit fa">
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
                    <td class="attr"><span>发明名称</span></td>
                    <td class="value"><span><?php echo $dbr[0]['INVENTION_NAME']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>专利权人</span></td>
                    <td class="value"><span><?php echo $dbr[0]['RIGHTS_PERSON']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>授权人</span></td>
                    <td class="value"><span><?php echo $dbr[0]['AUTHORIZED_PERSON']?></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>登记事项</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_REMARKS']?></span></td>
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

 
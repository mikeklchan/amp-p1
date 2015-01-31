
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><a href="index.php/assets/assets_view_domain"><span>网址/域名</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>网址/域名详细信息</span></td>
                  <td class="right_icon"><a href="index.php/assetsupdata/view_domain_updata/<?php echo $dbr[0]['SITE_ID']?>"><i class="fa_edit fa">
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
                    <td class="attr"><span>网址/域名名称</span></td>
                    <td class="value"><span><?php echo $dbr[0]['SITE_URL']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>权利人</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_PERSON']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>网站名称</span></td>
                    <td class="value"><span><?php echo $dbr[0]['SITE_NAME']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>主办单位</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_OFFICE']?></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>备案号</span></td>
                    <td class="value"><span><?php echo $dbr[0]['WWW_REMARKS_CODE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>到期日</span></td>
                    <td class="value"><span><?php echo $dbr[0]['WWW_EXPIRY']?></span></td>
                  </tr>
                 
                  </tbody>
                </table>
           
              <div class="clear"></div>
            </div>            

          
          </td>
        </tr>
      </tbody>
    </table>

 

          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><a href="index.php/assets/assets_view/"><span>商标</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i>
                  <span>商标详细信息</span></td>
                  <td class="right_icon"><a href="index.php/assetsupdata/view_updata/<?php echo $dbr[0]['BRAND_ID']?>"><i class="fa_edit fa">
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
                    <td class="attr"><span>商标注册证号</span></td>
                    <td class="value"><span><?php echo $dbr[0]['LICENSE_REGCODE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册商标</span></td>
                    <td class="value"><span><?php echo $dbr[0]['LICENSE_TRADEMARK']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>核定服务项目</span></td>
                    <td class="value"><span><?php echo $dbr[0]['SERVICE_TYPE']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册人</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_PERSON']?></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>注册有效期</span></td>
                    <td class="value"><span><?php echo $dbr[0]['REG_EXPIRY']?></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if IE 7]><![endif]--></i></td>
                    <td class="attr"><span>续展情况</span></td>
                    <td class="value"><span><?php echo $dbr[0]['CONTINUE_STATUS']?></span></td>
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

 

          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if IE 7]><![endif]--></i><span>商标</span></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
<!--     tab     -->
            <table class="navigation project_tab">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location active"><span>商标</span></td>
                  <td class="location"><a href="index.php/assets/assets_view_domain"><span>网址/域名</span></a></td>
                  <td class="location"><a href="index.php/assets/assets_view_patent"><span>专利</span></a></td>
                  <td class="location"><a href="index.php/assets/assets_view_copyright"><span>著作权</span></a></td>
                  <td class="empty"></td>
                </tr>
              </tbody>
            </table>
            
            <div class="details2">
              <table cellspacing="1">
                <tbody>
                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">No:</i></th>
                    <th class="attr"><span>资产基础信息代码</span></th>
                    <th class="attr"><span>商标注册证号</span></th>
                    <th class="attr"><span>注册商标</span></th>
                    <th class="attr"><span>核定服务项目</span></th>
                    <th class="attr"><span>注册人</span></th>
                    <th class="attr"><span>注册有效期</span></th>
                    <th class="attr"><span>续展情况</span></th>
                    <th class="attr"><span>许可情况</span></th>
                  </tr>

                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->
                 
                 <?php foreach ($dbr as $k=>$item):?>
                  <tr>

                    <td class="no"><?php echo ($page-1)*50+$k+1;?></td>

                    <td class="attr"><span><a href="index.php/assets/assets_details/<?php echo $item['BRAND_ID']?>"><?php echo $item['AMP_CODE']?></a></span></td>
                    <td class="attr"><?php echo $item['LICENSE_REGCODE']?></td>
                    <td class="attr"><?php echo $item['LICENSE_TRADEMARK']?></td>
                    <td class="attr"><?php echo $item['SERVICE_TYPE']?></td>
                    <td class="attr"><?php echo $item['REG_PERSON']?></td>
                    <td class="attr"><?php echo $item['REG_EXPIRY']?></td>
                    <td class="attr"><?php echo $item['CONTINUE_STATUS']?></td>
                    <td class="attr"><?php echo $item['APPROVAL_STATUS']?>&nbsp;</td>
                  </tr>
                  <?php endforeach;?>
              
              </table>
              <div class="clear"></div>
            </div>

          <div  id="page">            
            <?php  echo $pag?>
          
          </div>
          </td>
        </tr>
      </tbody>
    </table>



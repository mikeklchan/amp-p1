
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_tags fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/assets/assets_view"><span>无形资产</span></a><i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i><span>专利</span></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
<!--     tab     -->
            <table class="navigation project_tab">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="location"><a href="index.php/assets/assets_view"><span>商标</span></a></td>
                  <td class="location"><a href="index.php/assets/assets_view_domain"><span>网址/域名</span></a></td>
                  <td class="location active"><span>专利</span></td>
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
                    <th class="attr"><span>证书号</span></th>
                    <th class="attr"><span>发明名称</span></th>
                    <th class="attr"><span>专利权人</span></th>
                    <th class="attr"><span>授权人</span></th>
                    <th class="attr"><span>登记事项</span></th>
                    <th class="attr"><span>登记号</span></th>
                    <th class="attr"><span>许可情况</span></th>
                  </tr>

                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->
                  <?php foreach ($dbr as $k=>$item):?>
                  <tr>
                    <td class="no"><?php echo ($page-1)*50+$k+1;?></td>
                    <td class="attr"><span><a href="index.php/assets/assets_patent/<?php echo $item['PATENT_ID']?>"><?php echo $item['AMP_CODE']?></a></span></td>
                    <td class="attr"><?php echo $item['CERT_CODE']?></td>
                    <td class="attr"><?php echo $item['INVENTION_NAME']?></td>
                    <td class="attr"><?php echo $item['RIGHTS_PERSON']?></td>
                    <td class="attr"><?php echo $item['AUTHORIZED_PERSON']?></td>
                    <td class="attr"><?php echo $item['REG_REMARKS']?></td>
                    <td class="attr"><?php echo $item['REG_CODE']?></td>
                    <td class="attr"><?php echo $item['APPROVAL_STATUS']?></td>
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


          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="title"><a href="#">项目列表</a></td>
                  <td class="right_icon"><i class="fa_th fa"><!--[if IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>

<!--     tab     -->
            <table class="navigation project_tab">
              <tbody>
                <tr>
                  <td class="space"></td>
                   <?php if ($district == 'BJ'): ?>
                  <td class="location active"><a href="index.php/project/index"><span>北京</span></a></td>
                  <?php else: ?>
                  <td class="location"><a href="index.php/project/index"><span>北京</span></a></td>
                  <?php endif; ?>
                  
                  <?php if ($district == 'SH'): ?>
                  <td class="location active"><a href="index.php/project/index/SH"><span>上海</span></a></td>
                  <?php else: ?>
                  <td class="location"><a href="index.php/project/index/SH"><span>上海</span></a></td>
                  <?php endif; ?>
                  <td class="other">
                  <span>其他区域</span>
                        <ul>
                          <li>广州</li>
                          <li>深圳</li>
                          <li>苏州</li>
                          <li>青岛</li>
                          <li>天津</li>
                          <li>重庆</li>
                        </ul>
                  </td>
                  <td class="empty"></td>
                </tr>
              </tbody>
            </table>
<!--     photo tile     -->
         <div class="response_box">
         <?php foreach ($project_item as $key=>$list_item):?>
              <div class="response_tile">
                    <div class="project_image">
                    <?php if (empty($list_item['img'])): ?>
                        <img height="120" width="180" src="public/images/soho_headerlogo.png" alt=""/>
                     <?php else: ?> 
                         <img src="public/project/<?php echo $list_item['img']?>" alt=""/>
                     <?php endif; ?>
                        <div class="project_name"><a href="index.php/project/project_detail/<?php echo $list_item['PROJECT_ID']?>/1"><?php echo $list_item['PROJECT'] ?></a></div>
                    </div>
                   <a href="index.php/project/project_detail/<?php echo $list_item['PROJECT_ID']?>/1">
                    <div class="project_info">
                    	<div class="bg"></div>
                        <div class="detailsview">
                            <div class="line">
                              <span class="attr"><span>公司</span></span>
                              <span class="value"><span><?php $count=count($list_item['COMPANY']);if($count>1){echo mb_substr($list_item['COMPANY'][0],0,10,'utf-8')."等".$count."个";}else{echo $list_item['COMPANY'][0];} ?></span></span>
                            </div>
                            <div class="line">
                              <span class="attr"><span>项目</span></span>
                              <span class="value"><span><?php echo $list_item['PROJECT'] ?></span></span>
                            </div>
                            <div class="line">
                              <span class="attr"><span>建筑面积</span></span>
                              <span class="value"><span><?php echo $list_item['SIZE_SUM'] ?>平方米</span></span>
                            </div>
                          
                        </div>
                    </div>
                  </a>  
              </div>
              <?php endforeach;?>
              
              
              <div class="details2">
              <table cellspacing="1">
                <tbody>
                     <tr>
             
                <td class="attr" rowspan="2"><span>项目名称</span></td> 
                <td class="attr" colspan="2"><span>办公</span></td>
                <td class="attr" colspan="2"><span>商业</span></td>
                <td class="attr" colspan="2"><span>公寓</span></td>
                <td class="attr" colspan="2"><span>会所</span></td>
                <td class="attr" colspan="2"><span>仓库</span></td>
                <td class="attr" colspan="2"><span>车位</span></td>
                <td class="attr" colspan="2"><span>其他</span></td>
                <td class="attr" rowspan="2"><span>单元总计</span></td>
                <td class="attr" rowspan="2"><span>建筑面积总计</span></td>
                <
             </tr>

                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->
                 
                  
                   <tr>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
                 <td class="attr"><span>单元数量</span></td>
                 <td class="attr"><span>建筑面积</span></td>
            </tr>
            
             <?php foreach ($AMP_PROJECT_V[0] as $size_list):?>
             <tr style="height:50px;">
                <td class="attr"><a href="index.php/project/project_detail/<?php echo $size_list['PROJECT_ID']?>/1"><?php echo $size_list['PROJECT']?></a></td> 
                <td class="attr"><?php echo $size_list['COUNT_BG']?></td>
                <td class="attr"><?php echo $size_list['SIZE_BG']?></td> 
                <td class="attr"><?php echo $size_list['COUNT_SY']?></td>
                <td class="attr"><?php echo $size_list['SIZE_SY']?></td> 
                <td class="attr"><?php echo $size_list['COUNT_GY']?></td>
                <td class="attr"><?php echo $size_list['SIZE_GY']?></td>
                <td class="attr"><?php echo $size_list['COUNT_HS']?></td>
                <td class="attr"><?php echo $size_list['SIZE_HS']?></td>
                <td class="attr"><?php echo $size_list['COUNT_CK']?></td>
                <td class="attr"><?php echo $size_list['SIZE_CK']?></td>
                <td class="attr"><?php echo $size_list['COUNT_CW']?></td>
                <td class="attr"><?php echo $size_list['SIZE_CW']?></td>
                <td class="attr"><?php echo $size_list['COUNT_QT']?></td>
                <td class="attr"><?php echo $size_list['SIZE_QT']?></td>
                <td class="attr"><?php echo $size_list['COUNT_SUM']?></td>
                <td class="attr"><?php echo $size_list['SIZE_SUM']?></td>
           </tr>
           <?php endforeach;?>
              
              <tr style="height:30px">
                <td class="attr">总计</td> 
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_BG)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_BG)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_SY)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_SY)']?></span></td> 
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_GY)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_GY)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_HS)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_HS)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_CK)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_CK)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_CW)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_CW)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_QT)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_QT)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(COUNT_SUM)']?></span></td>
                <td class="attr"><span><?php echo $AMP_PROJECT_V[1]['SUM(SIZE_SUM)']?></span></td>
           </tr>
              </table>
              <div class="clear"></div>
            </div>
             
        
        
        
        
              <div class="clear"></div>
            </div>
           
          	
           </td></tr></tbody>
            </table>
            
        
           

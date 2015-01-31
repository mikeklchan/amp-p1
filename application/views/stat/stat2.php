 <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_pie_chart fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/stat0/index"><span>数据统计</span></a>
                  <i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i><span>产证统计</span></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
<!--     tab     -->
            
            
            
            <div class="details2 templates">
              <table cellspacing="1">
                <tbody>
                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">No:</i></th>
                    <th class="attr">项目</th>
                    <th class="attr">有交付标准物业数量</th>
                    <th class="attr">无交付标准物业数量</th>
                  
                    
                  </tr>
                  <?php 
				      
				      foreach ($counts as $k=>$list_item):
						$count =$list_item['CH']>$list_item['CE']?$list_item['CH']:$list_item['CE'];
				  ?>	
				  <tr>
                    <td class="attr"><?php echo ($k+1); ?></td>
                    <td class="attr"><a href="index.php/project/project_detail/<?php echo $list_item['PROJECT_ID']?>/1"><?php echo $list_item['PROJECT']?></a></td>
                    <td class="attr"><?php echo $count ?></td>
                    <td class="attr"><?php echo ($list_item['NUM']-$count)?></td>
                  </tr>
				  <?php endforeach ?>
              </table>
              <div class="clear"></div>
            </div>

          
          </td>
        </tr>
      </tbody>
    </table>

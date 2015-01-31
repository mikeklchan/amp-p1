 <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_pie_chart fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/stat0/index"><span>数据统计</span></a>
                  <i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i><span>照片统计</span></td>
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
                    <th class="attr"><span>项目</span></th>
                    <th class="attr"><span>照片数量</span></th>
                  </tr>
                  <?php
                  $i = 1; 
                  foreach($countdata as $c){ ?>
                  <tr>
                    <td class="no"><?php echo $i; ?></td>
                    <td class="attr"><a href="index.php/project/project_detail/<?php echo $c['PROJECT_ID']?>/1"><?php echo $c['PROJECT']; ?></a></td>
                    <td class="attr"><?php  if(isset($c['NUM'])){echo $c['NUM'];}else echo 0; ?></td>
                  </tr>
                  <?php $i++;}?>
              </table>
              <div class="clear"></div>
            </div>
         
          
          </td>
        </tr>
      </tbody>
    </table>

   
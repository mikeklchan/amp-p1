<base href="<?php echo base_url(); ?>" />

          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_download fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="#">图片数据统计</a></td>
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
                    <td class="attr"><?php echo $c['PROJECT']; ?>	</td>
                    <td class="attr"><?php  if(isset($c['NUM'])){echo $c['NUM'];}else echo 0; ?></td>
                  </tr>
                  <?php $i++;}?>
              </table>
              <div class="clear"></div>
            </div>
           <?php if(isset($exceldata)){?>
            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">数据预览</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>

            <div class="details2">
              <table cellspacing="1">
                <tbody>
                <?php 
                	//print_r($exceldata[2]);
                	//echo count($exceldata[2]);
                ?>
                  <tr>
                  <?php foreach($exceldata[2] as $d){?>
                    <th class="attr"><span><?php echo $d;?></span></th>
                    <?php }?>
                  </tr>
                  <?php for($i=3;$i<=count($exceldata);$i++){?>
                  <tr>
                 <?php  for($x=2;$x<=(count($exceldata[2])+1);$x++){ ?>
                    <td class="no">  <?php if(isset($exceldata[$i][$x]))echo $exceldata[$i][$x];?></td>
                 <?php }}?>   
                  </tr>
              </table>
             <?php }?>
              
              <div class="clear"></div>
            </div>
          
          </td>
        </tr>
      </tbody>
    </table>

   
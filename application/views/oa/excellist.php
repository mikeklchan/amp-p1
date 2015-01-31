<base href="<?php echo base_url(); ?>" />

          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_download fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="#">接口数据确认</a></td>
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
                    <th class="attr"><span>操作</span></th>
                    <th class="attr"><span>上传时间</span></th>
                    <th class="attr"><span>流程名</span></th>
                    <th class="attr"><span>节点</span></th>
                    <th class="attr"><span>文件名称</span></th>
                    <th class="attr"><span>上传用户名称</span></th>
                    <th class="attr"><span>上传用户岗位名称</span></th>
                    <th class="attr"><span>状态</span></th>
                  </tr>
                  <?php foreach($excellist as $e){ ?>
                  <tr>
                    <td class="no"><?php echo $e['OACONNECTOR_ID']; ?></td>
                    <td class="attr"><input class="btn grey" type="button" value="预览" onclick="location.href='<?php echo base_url();?>index.php/oa/exceldatalist/?oid=<?php echo $e['OACONNECTOR_ID']?>'">
                    <?php if($e['STATUS']!=1):?>
                    <input class="btn" type="button" value="导入"onclick="location.href='<?php echo base_url();?>index.php/oa/import/?oid=<?php echo $e['OACONNECTOR_ID']?>'"></td>
                    <?php endif?>
                    <td class="attr"><?php echo $e['UDATE']; ?></td>
                    <td class="attr"><?php echo $e['PROCESSNAME']; ?></td>
                    <td class="attr"><?php echo $e['STEPNAME']; ?></td>
                    <td class="attr"><?php echo $e['FNAME']; ?></td>
                    <td class="attr"><?php echo $e['UNAME']; ?></td>
                    <td class="attr"><?php echo $e['STATIONNAME']; ?></td>
                    <td class="attr"><span><?php if($e['STATUS']==1)echo '已确认'; else echo '未确认'; ?></span></td>
                  </tr>
                  <?php }?>
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

   
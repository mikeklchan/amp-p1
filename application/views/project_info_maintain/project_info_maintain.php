
          <td class="rightdetails">


            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">项目信息维护</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>

            <div class="details2 templates">
                <div class="export"><a href="index.php/project_info_maintain/project_add" ><input class="btn" type="button" value="新增"></a></div>
              <table cellspacing="1">
                <tbody>

                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">No:</i></th>                    

                    
                    <th class="attr"><span>公安局备案地址</span></th>
                    <th class="attr"><span>公司</span></th>
                    <th class="attr"><span>地域</span></th>
                    <th class="attr"><span>操作</span></th>
                    
                  </tr>
                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->

                  <?php if(!empty($project_item)) foreach ($project_item as $v=>$list_item) {?>
                  <tr>
                    <td class="no"><?php echo ($page-1)*10+$v+1; ?></td>                    
                    <td class="attr"><span><?php echo $list_item['PROJECT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['PSB_ADDRESS'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['DISTRICT'] ?></span></td>                    
					<td class="attr">
					<span><a href="index.php/project_info_maintain/project_edit/<?php echo $list_item['PROJECT_ID'] ?>">
					<input class="btn grey" type="button" value="修改"></a></span>
					</td>

                  </tr>
                    <?php } ?>

              </table>
              <div class="clear"></div>
            </div>
			<div id="page">
				<?php echo $pag ?>
            </div>

          </td>
        </tr>
      </tbody>

    </table>
<script language="javascript" type="text/javascript">
		function pro_del()
		{
		if (confirm("是否确认"))  {  
		location.href='index.php/project_info_maintain/project_delete/<?php echo $list_item['PROJECT_ID'] ?>';		
		}  else  { 
		location.href='index.php/project_info_maintain/view';
		};
		};
</script>
   


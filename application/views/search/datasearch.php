
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_search fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href=" index.php/datasearch/view">数据查询</a></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
            <!--查询表单-->
           <form action="index.php/datasearch/testsearch" method="post">
            <div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><input type="text" name="AMP_CODE" value="<?php echo  isset($searchdata['AMP_CODE']) ? $searchdata['AMP_CODE'] : ""; ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公司</span></td>
                    <td class="value"><span><select name='COMPANY' style="width:187px" >
                                      
                                      <option value="">——请选择——</option>
                                      <?php foreach($company as $v2):?>
                                      <option <?php  if(isset($searchdata['COMPANY'])&&$searchdata['COMPANY']==$v2) echo "selected=selectde";?> value="<?php echo $v2;?>"><?php echo $v2;?></option>
                                      <?php endforeach?>
                                      
                  </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span>
                    <select name='PROJECT' style="width:187px">
                                 <option value="">——请选择——</option>
                                 <?php foreach($project as $v1):?>
                                 <option <?php  if(isset($searchdata['PROJECT'])&&$searchdata['PROJECT']==$v1) echo "selected=selectde";?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                 <?php endforeach?>
                                  
                                   
                                         </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑物名称</span></td>
                    <td class="value"><span><input type="text" name="BUILDING" value="<?php echo  isset($searchdata['BUILDING']) ? $searchdata['BUILDING'] : ""; ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称楼层</span></td>
                    <td class="value"><span><input type="text" name="FLOOR" value="<?php echo  isset($searchdata['FLOOR']) ? $searchdata['FLOOR'] : ""; ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称单元号</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CODE" value="<?php echo  isset($searchdata['BLOCK_CODE']) ? $searchdata['BLOCK_CODE'] : ""; ?>"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>单元类型</span></td>
                    <td class="value"><span>
                    <select name='PROPERTY_TYPE' style="width:187px">
                                 <option value="">——请选择——</option>
                                      <?php foreach($unitlist as $v):?>
                                      <option <?php  if(isset($searchdata['PROPERTY_TYPE'])&&$searchdata['PROPERTY_TYPE']==$v) echo "selected=selectde";?> value="<?php echo $v;?>"><?php echo $v;?></option>
                                      <?php endforeach?>
                                         </select></span></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>出租状态</span></td>
                    <td class="value"><span>
                    <select name='JDE_RENTAL_STATUS' style="width:187px" >
                                      
                                      <option value="">——请选择——</option>
                                      <?php foreach($rental as $v5):?>
                                      <option <?php  if(isset($searchdata['JDE_RENTAL_STATUS'])&&$searchdata['JDE_RENTAL_STATUS']==$v5) echo "selected=selectde";?> value="<?php echo $v5;?>"><?php echo $v5;?></option>
                                      <?php endforeach?>
                    </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产属性</span></td>
                    <td class="value"><span>
                                     <select name='JDE_RENTAL_TYPE' style="width:187px" >
                                      <option value="">——请选择——</option>
                                      <?php foreach($rental_type as $v6):?>
                                      <option <?php  if(isset($searchdata['JDE_RENTAL_TYPE'])&&$searchdata['JDE_RENTAL_TYPE']==$v6) echo "selected=selectde";?> value="<?php echo $v6;?>"><?php echo $v6;?></option>
                                      <?php endforeach?>                    
                                      </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋来源
                     </span></td>
                    <td class="value"><span>
                                      <select name='BLOCK_SOURCE' style="width:187px" >
                                      <option value="">——请选择——</option>
                                      <?php foreach($block_source as $v7):?>
                                      <option <?php  if(isset($searchdata['BLOCK_SOURCE'])&&$searchdata['BLOCK_SOURCE']==$v7) echo "selected=selectde";?> value="<?php echo $v7;?>"><?php echo $v7;?></option>
                                      <?php endforeach?>                     
                                       </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有产权</span></td>
                    <td class="value"><span>
                    <select name="BLOCK_CERT" style="width:187px">
	                   <option value="" <?php if(isset($searchdata['BLOCK_CERT']) && $searchdata['BLOCK_CERT']!=="1" && $searchdata['BLOCK_CERT']!=="2"){
	                   	 echo "selected='selected'";
	                   }?>>——请选择——</option>
	                   <option value="1" <?php if (isset($searchdata['BLOCK_CERT']) && $searchdata['BLOCK_CERT']==="1"){
	                   	echo "selected='selected'";
	                   }?>>否</option>
	                   <option value="2" <?php if (isset($searchdata['BLOCK_CERT']) && $searchdata['BLOCK_CERT']==="2"){
	                   	echo "selected='selected'";
	                   }?>>是</option>
                   
                   </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有抵押
                    </span></td>
                    <td class="value"><span>
                                <select name="BLOCK_MORTGAGE" style="width:187px">
	                   <option value="" <?php if(isset($searchdata['BLOCK_MORTGAGE']) && $searchdata['BLOCK_MORTGAGE']!=="1" && $searchdata['BLOCK_MORTGAGE']!=="2"){
	                   	 echo "selected='selected'";
	                   }?>>——请选择——</option>
	                   <option value="1" <?php if (isset($searchdata['BLOCK_MORTGAGE']) && $searchdata['BLOCK_MORTGAGE']==="1"){
	                   	echo "selected='selected'";
	                   }?>>否</option>
	                   <option value="2" <?php if (isset($searchdata['BLOCK_MORTGAGE']) && $searchdata['BLOCK_MORTGAGE']==="2"){
	                   	echo "selected='selected'";
	                   }?>>是</option>
                   
                   </select>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否查封</span></td>
                    
                    <td class="value">
                    <span>
                   
                   <select name="BLOCK_CLOSED" style="width:187px">
	                   <option value="" <?php if(isset($searchdata['BLOCK_CLOSED']) && $searchdata['BLOCK_CLOSED']!=="1" && $searchdata['BLOCK_CLOSED']!=="2"){
	                   	 echo "selected='selected'";
	                   }?>>——请选择——</option>
	                   <option value="1" <?php if (isset($searchdata['BLOCK_CLOSED']) && $searchdata['BLOCK_CLOSED']==="1"){
	                   	echo "selected='selected'";
	                   }?>>否</option>
	                   <option value="2" <?php if (isset($searchdata['BLOCK_CLOSED']) && $searchdata['BLOCK_CLOSED']==="2"){
	                   	echo "selected='selected'";
	                   }?>>是</option>
                   
                   </select>
                   
                    
                    </span></td>
                  </tr>
                  </tbody>
                </table>
              <div class="clear"></div>
            </div>
            <div class="submit"><input class="btn" type="submit" value="查询"></div>

            </form>

            <table class="info">
              <tbody>
                <tr>
                  <td class="space"></td>
                  <td class="title">查询结果</td>
                  <td class="right_icon"><i class="fa_angle_down fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="space"></td>
                </tr>
              </tbody>
            </table>

            <div class="details2">
                <div class="export"><a href="index.php/excelexport/export/<?php if(isset($page)){echo $page;}?>" ><input class="btn" type="button" value="Excel导出"></a></div>
              <table cellspacing="1">
                <tbody>

                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">No:</i></th>
                    <th class="attr"><span>资产基础信息代码</span></th>
                    <th class="attr"><span>公司</span></th>
                    <th class="attr"><span>项目</span></th>
                    <th class="attr"><span>建筑物名称</span></th>
                    <th class="attr"><span>标称楼层</span></th>
                    <th class="attr"><span>楼层名称</span></th>
                    <th class="attr"><span>建筑物实际楼层</span></th>
                    <th class="attr"><span>标称单元号</span></th>
                  </tr>
                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->

                  <?php if(!empty($data)) foreach ($data as $k=>$list_item) {?>
                  <tr>
                    <td class="no">
                    <?php 
                    
                      	echo ($page-1)*1000+$k+1;
                    
                    ?>
                    
                    </td>
                    <td class="attr"><span><?php echo "<a href=".'"index.php/cell/cell_list/'.$list_item['UNIT_ID'].'/1">'?><?php echo $list_item['AMP_CODE'] ?></a></span></td>
                    <td class="attr"><span><?php echo $list_item['COMPANY'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['PROJECT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['BUILDING'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR_DESC'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR_ACT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['BLOCK_CODE'] ?></span></td>
                  </tr>
                    <?php } ?>

              </table>
              <div class="clear"></div>
                </div>
           <div  id="page">            
            <?php  if(!empty($pag)) echo $pag?>
          
          </div>
          </td>
        </tr>
      </tbody>

    </table>

   


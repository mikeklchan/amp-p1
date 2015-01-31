
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_search fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href=" index.php/datasearch/view">数据统计</a></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
            <!--查询表单-->
      
           <form id="form1" action=index.php/datestatistics/testproject method="post">
            <div class="details" >
              <table >
              <tr>
                  <td><tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公司</span></td>
                    <td class="value"><span><select name='COMPANY' style="width:187px" >

                                      <option value="">——请选择——</option>
                                      <?php foreach($COMPANY as $v2):?>
                                      <option <?php  if(isset($data['COMPANY_NAME'])&&$data['COMPANY_NAME']==$v2) 
                                      	echo "selected=selectde";?> value="<?php echo $v2;?>"><?php echo $v2;?></option>
                                      <?php endforeach?>
                  </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span><select name='PROJECT' style="width:187px">
                                 <option value="">——请选择——</option>
                                 <?php foreach($PROJECT as $v1):?>
                                 <option <?php  if(isset($searchdata['PROJECT'])&&$searchdata['PROJECT']==$v1) 
                                 	echo "selected=selectde";?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                 <?php endforeach?>                                
                                         </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑物名称</span></td>
                    <td class="value"><span><select name='BUILDING' style="width:187px">
                                 <option value="">——请选择——</option>
                                 <?php foreach($BUILDING as $v3):?>
                                 <option <?php  if(isset($searchdata['BUILDING'])&&$searchdata['BUILDING']==$v3) 
                                 	echo "selected=selectde";?> value="<?php echo $v3;?>"><?php echo $v3;?></option>
                                 <?php endforeach?>
                                  
                                         </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称楼层</span></td>
                    <td class="value"><span><select name='FLOOR' style="width:187px">
                                 <option value="">——请选择——</option>
                                 <?php foreach($FLOOR as $v4):?>
                                 <option <?php  if(isset($searchdata['FLOOR'])&&$searchdata['FLOOR']==$v4) 
                                 	echo "selected=selectde";?> value="<?php echo $v4;?>"><?php echo $v4;?></option>
                                 <?php endforeach?>
                                 
                                         </select></span></td>
                  </tr>      
                  </tbody>
                  </td>
                  
                  </tr>
                </table>
              <div class="clear"></div>
            </div>
            <div class="submit" style="float: left"><input class="btn" type="submit" value="查询"></div>  
            <div class="submit" style="float: left"><input class="btn" type="reset" value="重置"></div>
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
               <!--  <div class="export"><a href="excelexport/export" ><input class="btn" type="button" value="Exceel导出"></a></div> -->
              <table cellspacing="1">
                <tbody>

                  <tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    
                    <th class="attr"><span>建筑物数量</span></th>
                    <th class="attr"><span>楼层数量</span></th>
                    <th class="attr"><span>单元数量</span></th>
                   
                  </tr>
                  <!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->

                  <!--<?php if(!empty($data)) foreach ($data as $list_item) {?>
                  <tr>
                    <td class="attr"><span><?php echo $list_item['COMPANY'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['PROJECT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['BUILDING'] ?></span></td>
                  
                  </tr>
                    <?php } ?>
                    -->
              </table>
              <div class="clear"></div>
            </div>


          </td>
        </tr>
      </tbody>

    </table>

   


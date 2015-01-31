
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_search fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href=" index.php/search/view">数据查询</a></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
            <!--查询表单-->
           <form action="search/testsearch" method="post">
            <div class="details">
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产基础信息代码</span></td>
                    <td class="value"><span><input type="text" name="AMP_CODE"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>公司</span></td>
                    <td class="value"><span><select name='COMPANY' style="width:187px" >
                                      <option value="">——请选择——</option>
                                      <?php foreach($company as $v2):?>
                                      <option value="<?php echo $v2;?>"><?php echo $v2;?></option>
                                      <?php endforeach?>
                  </span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>项目</span></td>
                    <td class="value"><span><select name='PROJECT' style="width:187px">
                                 <option value="">——请选择——</option>
                                 <?php foreach($project as $v1):?>
                                 <option value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                 <?php endforeach?>
                                  
                                   
                                         </select></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>建筑物名称</span></td>
                    <td class="value"><span><input type="text" name="BUILDING"/></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称楼层</span></td>
                    <td class="value"><span><input type="text" name="FLOOR"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>标称单元号</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CODE"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>单元类型</span></td>
                    <td class="value"><span><select name='unit' style="width:187px">
                                 <option value="">——请选择——</option>
                                      <?php foreach($unitlist as $v):?>
                                      <option value="<?php echo $v;?>"><?php echo $v;?></option>
                                      <?php endforeach?>
                                         </select></td>
                  </tr>
                  </tbody>
                </table>
              <table>
                <tbody>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>出租状态</span></td>
                    <td class="value"><span><input type="text" name="JDE_RENTAL_STATUS"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>资产属性</span></td>
                    <td class="value"><span><input type="text" name="JDE_RENTAL_TYPE"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>房屋来源
</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_SOURCE"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有产权</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CERT"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否有抵押
</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_MORTGAGE"></span></td>
                  </tr>
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>是否查封
</span></td>
                    <td class="value"><span><input type="text" name="BLOCK_CLOSED"></span></td>
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
               <!--EXcel <div class="export"><a href="#" ><input class="btn" type="button" value="#"></a></div>-->
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

                  <?php if(!empty($data)) foreach ($data as $list_item) {?>
                  <tr>
                    <td class="no"><?php echo $list_item['UNIT_ID'] ?></td>
                    <td class="attr"><span><a href="#"><?php echo $list_item['AMP_CODE'] ?></a></span></td>
                    <td class="attr"><span><?php echo $list_item['COMPANY'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['PROJECT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['BUILDING'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR_DESC'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR_ACT'] ?></span></td>
                    <td class="attr"><span><?php echo $list_item['FLOOR_ACT'] ?></span></td>
                  </tr>
                    <?php } ?>

              </table>
              <div class="clear"></div>
            </div>


          </td>
        </tr>
      </tbody>

    </table>

   


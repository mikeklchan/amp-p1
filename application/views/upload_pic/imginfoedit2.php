
          <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_search fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><span>资产信息批量维护</span>
                  <i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i>
                  <span>图片信息批量维护</span><i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i>
                  <span>维护范围</span><i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i>
                  <span>上载图片</span></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
                </tr>
              </tbody>
            </table>
           
            <div class="details">
                
              <ul class="level_1" hidden="">
                  <li><i class="fa_minus_square fa"><!--[if lte IE 7]><![endif]--></i>北京索图世纪投资管理有限公司
                      <ul class="level_2">
                      	<li><i class="fa_minus_square fa"><!--[if lte IE 7]><![endif]--></i>朝外SOHO
                        	<ul class="level_3">
                                <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>朝外SOHO A座<i class="fa"><!--[if lte IE 7]><![endif]--></i></li>
                                <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>朝外SOHO B座<i class="fa"><!--[if lte IE 7]><![endif]--></i></li>
                                <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>朝外SOHO C座<i class="fa fa_check"><!--[if lte IE 7]><![endif]--></i></li>
                            </ul>
                        </li>
                      </ul>
                  </li>
                  <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>北京索图世纪投资管理有限公司</li>
                  <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>北京索图世纪投资管理有限公司</li>
                  <li><i class="fa_plus_square fa"><!--[if lte IE 7]><![endif]--></i>北京索图世纪投资管理有限公司</li>
              </ul>
              
              <div class="clear"></div>
            </div>
		<form method="post" action="index.php/upload_pic/get_building"enctype="multipart/form-data">
		
            <input type="hidden"  name="count_num" id="count_num" value="1"/>
            <div class="details">
              <table>
                <tbody>
                  
                  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>选择项目</span></td>
                    <td class="value"><span><select name='project[]' multiple="multiple" style="width:187px" id="pro" onchange="pro_pic();">
                                      
                                      <option value="">——请选择——</option>
                                      <?php foreach($project_item as $v2):?>
                                     <option value="<?php echo $v2['PROJECT_ID'];?>"><?php echo $v2['PROJECT'];?></option>
                                      <?php endforeach?>
                                
                   </select></span></td><input class="btn grey" type="submit" value="下一步">
                  </tr>
				  <tr>
				  <td><br/></td>
				  </tr>
				 <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>图片类型</span></td>
                    <td class="value"><span><select name='pic_style' style="width:187px">
                                 <option value="">——请选择——</option>
                                      <?php foreach($pic_style as $v=>$k):?>
                                      <option value="<?php echo $v;?>"><?php echo $k;?></option>
                                      <?php endforeach?>
                                         </select></td>
                  </tr>
				  <tr>
				  <td><br/></td>
				  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span>文件上传</span></td>
                    <td class="value"><span></span></td>
                  </tr>
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span> </span></td>
                    <td class="value"><span></span></td>
                  </tr>
				  <tr id ="add_file">
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span><input type="file" name="file"></span></td>
                    <td class="value"><span></span></td>
                  </tr>
				 
				  
				  <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span> </span></td>
                    <td class="value"><span></span></td>
                  </tr>
				  	
				  <tr>
				  <td><br/></td>
				  </tr>
				   <tr>
                    <td class="dot"><i class="fa_arrow_right fa"><!--[if lte IE 7]><![endif]--></i></td>
                    <td class="attr"><span><input class="btn" type="submit" value="上传"></span></td>
                    <td class="value"><span></span></td>
                  </tr>	
				  
				  
				   <tr>
				  <td><br/></td>
				  </tr>
				  
					
					
                  </tbody>
                </table>
			
		</form>
				

          </td>
        </tr>
      </tbody>
    </table>

   

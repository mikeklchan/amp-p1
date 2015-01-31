 <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_building fa"><!--[if lte IE 7]><![endif]--></i></td>
                  <td class="title"><a href="index.php/users/user"><span>系统管理</span></a>
                  <i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i><span>用户管理</span></td>
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
                    <th class="attr">用户名</th>
                    <th class="attr">角色</th>
                    
                  </tr>
                  <?php foreach ($users as $k=> $users_item): ?>	
				  <tr>
                    <td class="attr"><?php echo '
					<input type="hidden" name="userid"  value="'.$users_item['USER_ID'].'">
					'.($k+1).'</input>'; ?></td>
                    <td class="attr"><?php echo $users_item['USER_NAME']?></td>
                    <td class="attr"><?php     
						if($users_item['STYLE'] ==1){
							echo '普通用户';
						}else if($users_item['STYLE'] ==2){	 
							echo '图片维护用户';
						}else if($users_item['STYLE'] ==3){	 
							echo '资产信息维护用户';
						}else if($users_item['STYLE'] ==4){
							echo '系统管理员';
						}else{
							echo '普通用户';
						}		 
						?></td>
                  </tr>
				  <?php endforeach ?>
              </table>
              <div class="clear"></div>
            </div>

          
          </td>
        </tr>
      </tbody>
    </table>

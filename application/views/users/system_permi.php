 
 <td class="rightdetails">
<!--     navigation     -->
            <table class="navigation projectlist">
              <tbody>
                <tr>
                  <td class="left_icon"><i class="fa_gear fa"><!--[if lte IE 7]>?<![endif]--></i></td>
                  <td class="title"><a href="index.php/users/permi"><span>系统管理</span></a>
                  <i class="fa_angle_right fa"><!--[if lte IE 7]>?<![endif]--></i><span>角色管理</span></td>
                  <td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]>?<![endif]--></i></td>
                </tr>
              </tbody>
            </table>
<!--     tab     -->
            <div class="details2 templates">
			
              <table cellspacing="1">
                <tbody>
				<tr>
                  <!--第一个class:No:是必须,后面的name/type/area/state等等是非必须,可以根据意义自由定义,作将来调整样式的需要.-->
                    <th class="no">No:</th>
                    <th class="attr">用户名</th>
                    <th class="attr">角色</th>
					<th class="attr">导出权限</th>
                    <th class="attr">操作</th>
                  </tr>
				  
				  <?php foreach ($users as $k=> $users_item): ?>	
				<form action="index.php/users/check_permi" method="post">
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
                    <td class="attr">
					<?php 
					
							if($users_item['STYLE'] ==4){
								echo'<input type="checkbox" name="checkbox" value="1" checked=true disabled=true>';
							}else{
								if($users_item['IS_EXPORT']==0){
									echo'<input type="checkbox" name="checkbox" value="1">';
								}else if($users_item['IS_EXPORT']==1){
									echo'<input type="checkbox" name="checkbox" checked=true  value="1" >';
								}
							
							}
					
					 ?>
					</td> 
			<td class="attr">
			<!-- 下拉框-->
			<select name="select" >
				<?php     
						if($users_item['STYLE'] ==1){
							echo '<option value="1" selected=true >普通用户</option>
								  <option value="2" >图片维护用户</option>
								  <option value="3" >资产信息维护用户</option>
								  <option value="4" >系统管理员</option>';
						}else if($users_item['STYLE'] ==2){	 
							echo '<option value="1"  >普通用户</option>
								  <option value="2" selected=true >图片维护用户</option>
								  <option value="3" >资产信息维护用户</option>
								  <option value="4" >系统管理员</option>';
						}else if($users_item['STYLE'] ==3){	 
							echo '<option value="1" >普通用户</option>
								  <option value="2" >图片维护用户</option>
								  <option value="3" selected=true>资产信息维护用户</option>
								  <option value="4" >系统管理员</option>';
						}else if($users_item['STYLE'] ==4){
							echo '<option value="1" >普通用户</option>
								  <option value="2" >图片维护用户</option>
								  <option value="3" >资产信息维护用户</option>
								  <option value="4" selected=true>系统管理员</option>';
						}else{
							echo '<option value="1" selected=true>普通用户</option>
								  <option value="2" >图片维护用户</option>
								  <option value="3" >资产信息维护用户</option>
								  <option value="4" >系统管理员</option>';
						}	 
						?>
				
			</select>
           
			<span><input class="btn" type="submit" value="更新"></span>
			</td>
                  </tr>
				</form>
				  <?php endforeach ?>
				  </tbody>
				  </table>
               </div>  
       
          </td>
        </tr>
      </tbody>
    </table>

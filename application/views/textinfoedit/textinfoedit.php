
<td class="rightdetails">
<!--     navigation     -->
<table class="navigation projectlist">
<tbody>
<tr>
<td class="left_icon"><i class="fa_gears fa"><!--[if lte IE 7]><![endif]--></i></td>
<td class="title"><span>资产信息批量维护</span></a>
<i class="fa_angle_right fa"><!--[if lte IE 7]><![endif]--></i>
<a class="a" href=" index.php/textinfoedit/view"><span>文字信息批量维护</span></a></td>
<td class="right_icon"><i class="th_list fa"><!--[if lte IE 7]><![endif]--></i></td>
</tr>
</tbody>
</table>    

<form action="index.php/textinfoedit/do_upload" method="post" enctype="multipart/form-data">

 <!-- <input type="submit" name="submit" value="上传" /> -->

 <div class="upload" style="color:#FFFFFF">文件上传:<input class="file_upload" type="file" id="file" name="file" style="color:#FFFFFF"></div>
 <div class="submit"><input class="btn" type="submit" value="预览" ></a>
 <a href="index.php/textinfoedit/import/<?php if(isset($file_name)) echo $file_name;?>">
 <input class="btn" type="button" value="导入"></a></div>
 <input class="btn" type="hidden" value="<?php if(isset($file_name)) echo $file_name;?>">
</form>
<?php if(isset($success)){?>
<table class="info">

<tbody>

<tr>
<td class="space"></td>



<td class="title">导入成功</td>
<td class="right_icon"><i class="fa_angle_down fa"><!--[if lte IE 7]><![endif]--></i></td>


<td class="space"></td>
</tr>

</tbody>
</table>
<?php } else {?>

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

<!--涉及到关键数字的值包含在span标签内,会显示红色.其余值在span外显示白色.-->

  
<?php 
    if(isset($sheet)){
	foreach ($sheet as $key=>$list_item) {
    if(!empty($list_item[6])){
	//var_dump($list_item);exit;
?>

<tr>
<td class="no"><?php echo $key ?></td>

<td class="attr"><span><?php echo isset($list_item['6'])?$list_item['6']:"" ?></span></td>
<td class="attr"><span><?php echo isset($list_item['7'])?$list_item['7']:"" ?></span></td>
<td class="attr"><span><?php echo isset($list_item['8'])?$list_item['8']:"" ?></span></td>
<td class="attr"><span><?php echo isset($list_item['9'])?$list_item['9']:"" ?></span></td>
<td class="attr"><span><?php echo isset($list_item['10'])?$list_item['10']:"" ?></span></td>

</tr>
<?php }} }?>
</table>
<div class="clear"></div>
</div>
<?php }?>
</td>
</tr>
</tbody>
</table>

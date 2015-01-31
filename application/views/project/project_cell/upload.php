<html>
<head>
<meta charset="utf-8">
<title>文件上传</title>
<script type="text/javascript" src="public/js/jquery.min.js"></script>
<script type="text/javascript">
function add()
{
	//document.getElementById('')
	$('#upload').show();
}
</script>
</head>
<body>
<div style="background:#141010;width:100%;height:300px">
<br>
<TABLE style="BORDER-COLLAPSE: collapse;background:#141010;" borderColor=#b6b2b2   background=#141010    cellSpacing=0 width="600px" align=center bgColor=#ffffff border=1>
	<TBODY>
		<TR  style="color:#b6b2b2">
			<TD width=100 >
			<DIV align=center >图片</DIV></TD>
			<TD width=100>
			<DIV align=center>操作 （<a href="javascript:add()" style="color:darkorange">新增 </a>）</DIV></TD>
		</TR>
		<TR style="color:#b6b2b2">
			<TD>
			<DIV align=center>xxx.jpg</DIV></TD>
			<TD>
			<DIV align=center>删除</DIV></TD>

		</TR>
		<TR style="color:#b6b2b2">
			<TD>
			<DIV align=center>yyy.jpg</DIV></TD>
			<TD>
			<DIV align=center>删除</DIV></TD>

		</TR>
		<TR style="color:#b6b2b2">
			<TD>
			<DIV align=center>yyy.jpg</DIV></TD>
			<TD>
			<DIV align=center>删除</DIV></TD>
		</TR>
	</TBODY>
</TABLE>
<br>
<TABLE style="BORDER-COLLAPSE: collapse;background:#141010;display:none;" borderColor=#b6b2b2   background=#141010    cellSpacing=0 width="600px" align=center bgColor=#ffffff border=1 id="upload">
		<TR  style="color:#b6b2b2">
			<TD width=600 >
				<DIV align=center >
					<form action="" method="post" enctype="multipart/form-data">
						<label for="file">文件:</label><input type="file" name="file" id="file" /> 
						<input type="submit" name="submit" value="提交" />
					</form>
				</DIV>
			</TD>
		</TR>
</TABLE>
</div>
</body>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Upload Form</title>
</head>
<body>

<base href="<?php echo base_url(); ?>" />
提示：<?php echo $error;?>
<form method="post" action="index.php/upload_in/do_upload" enctype="multipart/form-data" />
<select name='process'>
   <option style="width:200px" value='' selected="selected">--Choice--</option>
   <option style="width:200px" value='11'>11</option>
   <option style="width:200px" value='12'>12</option>
   <option style="width:200px" value='21'>21</option>
   <option style="width:200px" value='22'>22</option>
   <option style="width:200px" value='3'>3</option>
   <option style="width:200px" value='4'>4</option>
   <option style="width:200px" value='5'>5</option>
   <option style="width:200px" value='61'>61</option>
   <option style="width:200px" value='62'>62</option>
   <option style="width:200px" value='63'>63</option>
   <option style="width:200px" value='64'>64</option>

   
  </select>
<br/>
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

<a href="index.php/upload_in/upload_select">查询</a>
</body>
</html>

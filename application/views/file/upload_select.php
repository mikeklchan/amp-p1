<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<base href="<?php echo base_url(); ?>" />
              <table width=100% height="50" bordercolor="red"  border="1" cellspacing=”0″ cellpadding=”0″">
                <tbody>
                  <tr>
                    <th><span>OACONNECTOR_ID</span></th>
                    <th><span>USER_NAME</span></th>
                    <th><span>FILE_NAME</span></th>
                    <th><span>STATUS</span></th>
                    <th><span>TIME</span></th>
                    <th><span>PROCESS</span></th>
                    <th><span>NODE</span></th>
                    <th><span>POST_NAME</span></th>
                    <th><span>CREATED_DATE</span></th>
                    <th><span>CREATED_BY</span></th>
                    <th><span>MODIFIED_DATE</span></th>
                    <th><span>MODIFIED_BY</span></th>    
                  </tr>
                  <?php foreach ($db as $item):?>
                  <tr>
                    <td><?php echo $item['OACONNECTOR_ID']?></td>
                    <td><?php echo $item['USER_NAME']?></td>
                    <td><?php echo $item['FILE_NAME']?></td>
                    <td><?php echo $item['STATUS']?></td>
                    <td><?php echo $item['TIME']?></td>
                    <td><?php echo $item['PROCESS']?></td>
                    <td><?php echo $item['NODE']?></td>
                    <td><?php echo $item['POST_NAME']?></td>
                    <td><?php echo $item['CREATED_DATE']?></td>
                    <td><?php echo $item['CREATED_BY']?></td>
                    <td><?php echo $item['MODIFIED_DATE']?></td>
                    <td><?php echo $item['MODIFIED_BY']?></td>
                 
                   </tr> 
               <?php endforeach;?>
                  
                 
              </table>
              


<a href="index.php/upload_in/index">返回</a>









</body>
</html>

<?php $islogin=$this->session->userdata('logged_in');
	if(!$islogin){
		redirect('logins/login');
	}
?>
<?php $style = $this->session->userdata('style');?>
<?php $name = $this->session->userdata('name');?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title><?php echo $title; ?></title>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Pragma" content="No-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="public/css/style.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<link href="public/css/IE_style.css" rel="stylesheet" type="text/css">
<![endif]-->
<script type="text/javascript" src="public/js/jquery.min.js"></script>
<script type="text/javascript" src="public/js/css3-mediaqueries.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#extend_tx").click(function(){
		$(".extendarea").toggle(200);
	  });
});
</script>
</head>

<body>
<!---->
    <div class="header">
    	<table>
          <tbody>
            <tr>
              <td class="space"></td>
              <td class="soho_logo"><img src="public/images/soho_headerlogo.png" width="160" height="100" alt=""/></td>
              <td>SOHO中国资产管理平台</td>
              <td class="welcome">
			  <i class="fa_user fa"><!--[if IE 7]><![endif]--></i>
			  <span>Hello</span><span class="username"><?php echo $name ?></span>
			  <a href=" index.php/logins/destroy_sess"><i class="fa_sign_out fa"><!--[if IE 7]><![endif]--></i></a>
			  </td>
			  <td class="space"></td>
            </tr>
          </tbody>
        </table>
    </div>
<!---->
    <table class="content">
      <tbody>
        <tr>
          <td class="leftmenu" >
            <table class="menu">         
              <tbody>
                <tr>
                  <td class="menu_icon"><i class="fa_building fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name"><a href= "index.php/project/index"><div>项目列表</div></a></td>
                </tr>
                <tr>
                  <td class="menu_icon"><i class="fa_search fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name"><a class="a" href="index.php/datasearch/view"><div>数据查询</div></a></td>
                </tr>
                <tr>
                  <td class="menu_icon"><i class="fa_pie_chart fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name"><a class="a" href="index.php/stat0/index"><div>数据统计</div></a></td>
                </tr>
                <tr>
                  <td class="menu_icon"><i class="fa_tags fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name"><a class="a" href="index.php/assets/assets_view"><div>无形资产</div></a></td>
                </tr>
                <?php if($style==2||$style==3||$style==4){?>
                <tr>
                  <td class="menu_icon"><i class="fa_gears fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name">资产信息批量维护</td>
                </tr>
                <?php }?>
                <?php if($style==3||$style==4){?>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a class="a" href=" index.php/textinfoedit/view"><div>文字信息批量维护</div></a></td>
                </tr>
                <?php }?>
                <?php if($style==2||$style==4){?>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/upload_pic/index"><div>图片信息批量维护</div></a></td>
                </tr>
                <?php }?>
                
 				<?php if($style==3||$style==4){?>
                <tr>
                  <td class="menu_icon"><i class="fa_download fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name">明源OA接口</td>
                </tr>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/down/download"><div>模板下载</div></a></td>
                </tr>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/oa/excellist"><div>接口数据确认</div></a></td>
                </tr>
                <?php }?>
                <?php if($style==4){?>
                <tr>
                  <td class="menu_icon"><i class="fa_gear fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name">系统管理</td>
                </tr>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/users/user"><div>用户管理</div></a></td>
                </tr>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/users/permi"><div>角色管理</div></a></td>
                </tr>
                <tr>
                  <td class="sub_menu_icon"></td>
                  <td class="sub_menu_name"><a href=" index.php/project_info_maintain/view"><div>项目信息维护</div></a></td>
                </tr>
                <?php }?>
				<tr>
                  <td class="menu_icon"><i class="fa_sign_out fa"><!--[if IE 7]><![endif]--></i></td>
                  <td class="menu_name"><a href=" index.php/logins/destroy_sess"><div>登出</div></a></td>
                </tr>
              </tbody>
            </table>
          </td>


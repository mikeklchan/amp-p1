<!doctype html>
<html><head>
<base href="<?php echo base_url(); ?>" />

<meta charset="utf-8">
<title>登录</title>
<head>
<meta http-equiv="Pragma" content="No-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<link href="public/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="public/js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#login").click(function(){
		$(".loginbox").show();
	  });
	$("#close").click(function(){
		$(".loginbox").hide();
	  });
});
</script>
<script type="text/javascript" src="public/js/auth.js">
</script>

</head>

<body class="login">
<!---->
    <div class="header">
    	<table>
          <tbody>
            <tr>
              <td class="space"></td>
              <td class="soho_logo"><img src="public/images/soho_headerlogo.png" width="160" height="100" alt=""/></td>
              <td>SOHO中国资产管理平台</td>
              <td class="welcome"><i class="fa_user fa"><!--[if IE 7]><![endif]--></i><a id="login"><span class="username">登录</span><i class="fa_sign_in fa"><!--[if IE 7]><![endif]--></i></a></td>
              <td class="space"></td>
            </tr>
          </tbody>
        </table>
    </div>
<!---->

<!--<div class="content">
</div>-->

    <table class="content">
      <tbody>
        <tr>
        <td>
        
   <table class="loginbox">
        <tbody>
          <tr>
            <td class="title"><i class="fa_user fa"><!--[if IE 7]><![endif]--></i><span>登录</span></td>
            <td class="right_icon" id="close"><i class="fa_close fa"><!--[if IE 7]><![endif]--></i></td>
          </tr>
          <tr>
            <td class="passport" colspan="2">
            <form name="form1" action="index.php/checks/check" method="post">
            	<table cellspacing="0" class="inputbox">
                  <tbody>
                    <tr>
                      <td class="user_icon"><i class="fa_user fa"><!--[if IE 7]><![endif]--></i></td>
                      <td class="name"><input type="text" name="name" id="username" onblur="login('name')"></td>
                      <td class="state_icon">
                      <i class="fa_close fa" id="namestate" style="display:none"/><!--[if IE 7]><![endif]--></i>
                      </td>
                    </tr>
                    <tr>
                      <td class="space" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="pass_icon"><i class="fa_unlock_alt fa"><!--[if IE 7]><![endif]--></i></td>
                      <td class="key"><input type="password" name = "password" id="password" onblur="login('pwd')"></td>
                      <td class="state_icon">
                      <i class="fa_check fa" id="pwdstate" style="display:none"/><!--[if IE 7]><![endif]--></i>
                      </td>
                    </tr>
    				<tr>
    					<td colspan="2" style="display:none;color:red" id="lgerror">用户名或密码错误！</td>
    					<td></td>
    				</tr>
                    <tr>
					
                      <td class="confirm" colspan="2">
                      <input class="btn" align="center"  id="btn" value="确定"  onclick="login('btn')" onfocus=this.blur() style="text-align:center;"/> 
					 </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
        </form>
        </td>
      </tr>
    </tbody>
    </table>

        
        </td>
        </tr>
      </tbody>
    </table>

<!--
	  <div class="leftmenu">

		</div>
	  <div class="rightdetails">

		</div>
      <div class="clear"></div>
      -->
<!---->
<!--footer-->
    <div class="footer">
    	<table>
          <tbody>
            <tr>
              <td class="soho_logo"><img src="public/images/soho_footerlogo.png" alt=""/></td>
              <td class="name">SOHO中国资产管理平台</td>
              <td class="support">技术支持:PCCW solutions电讯盈科企业方案</td>
            </tr>
          </tbody>
        </table>
    </div>
<!---->

</body>
</html>

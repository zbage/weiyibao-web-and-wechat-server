<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body style="background:none">
<div class="content">
<div class="box">
	<h3>【AI9】更新消息</h3>
    <div class="con dcon">
    <div class="update">
    <p>服务器环境：<?php echo $_SERVER[SERVER_SOFTWARE];?></p>
    <p>服务器IP：<?php echo $_SERVER['SERVER_ADDR'];?></p>
    <p>当前网站语言：UTF-8简体中文</p>
    <p>集团网站：<a href="#" class="blue">公司网站</a></p>
    <p>系统版本：<a href="./index.php?g=System&m=Update" class="isub">检查更新</a></p>
    </div>
    <ul class="myinfo">
   <li>
   <p class="red">您的程序版本为：【AI9】 多用户微信营销系统v
       <?php  $version = CONF_PATH . 'version.php'; $ver = include $version; $ver = $ver['ver']; echo $ver; ?>
    </p><span>[ 商业版 (终身使用权) ]</span></li>
  
	</ul>
    </div>
</div>
<!--/box-->
<div class="box">
	<h3>【AI9】官方动态</h3>
    <div class="con dcon">
    <div class="kjnav">
    <a href="http://www.ai9.me">使用帮助</a><a href="http://www.ai9.me">技术售后</a><a href="http://www.ai9.me">安装指导</a><a href="http://www.ai9.me">联系我们</a><a href="http://www.ai9.me">升级咨询</a>
    </div>
    <ul class="myinfo kjinfo">
   <li class="title">售后服务范围</li>
<li>程序第一次安装指导,或第一次协助安装</li>
	</ul>
    </div>
</div>

<!--/box-->
</div>
</body>
</html>
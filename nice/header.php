<?php
/*
Template Name:nice
Description:新的炫酷模版
Version:2.0
Author:叶落山城
Author Url:http://ylsc633.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');?>
<!DOCTYPE html >
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<link href="<?php echo TEMPLATE_URL; ?>style/css/styles.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>style/css/view.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>style/css/animation.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>style/css/main.css" rel="stylesheet" type="text/css" />
<!-- 返回顶部调用 begin -->
<link href="<?php echo TEMPLATE_URL; ?>style/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>style/js/js.js"></script>
<script src="<?php echo BLOG_URL; ?>zgh528/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>

<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
  $.backstretch("<?php echo TEMPLATE_URL; ?>style/images/bg/1.jpg");
  setInterval(function(){
  	var d = Math.ceil(Math.random()*9);
  	$.backstretch("<?php echo TEMPLATE_URL; ?>style/images/bg/"+d+".jpg");
  },15000);
  $(".heart").click(function(){
      alert(23);
  });
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2e60faaf7e7d5fdd6cad9c6527a2ef5a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php doAction('index_head'); ?>

</head>
<body>
<div class="scanlines"></div>

  <header>
  
  	<div id="nav">
	<h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
  	<?php blog_navi();?>
  	</div>
  </header>
    
  
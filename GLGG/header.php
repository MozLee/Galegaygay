<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta content="telephone=no" name="format-detection" />	
        <meta name="keywords" content="web前端技术分享,sy1x,sy1x博客,">
		<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
		<link rel="icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-icon">
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/md.css'); ?>" />

		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/font/iconfont.css'); ?>" />
		<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-3.2.1.min.js'); ?>" ></script>
		<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.goup.min.js'); ?>" ></script>
		
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1afd9377b2393a3ba1f810a8f448d296";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<link href="https://cdn.bootcss.com/highlight.js/9.10.0/styles/atelier-forest-light.min.css" rel="stylesheet">
	</head>
	<body>
		<!--
        	作者：frsy1x@163.com
        	时间：2017-06-25
        	描述：导航栏开始
        -->
        <div class="mark hide"></div>
		<header>
			<div class="header">
				<nav class="navBar">
					<ul>
						<li>
							<a href="<?php $this->options->siteUrl(); ?>">首页</a>
						</li>
						<?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> </li>'); ?>
					</ul>
				</nav>
				<nav class="sr-only">
						<ul>
						<li>
							<a href="<?php $this->options->siteUrl(); ?>">首页</a>
						</li>
						<?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> </li>'); ?>
					</ul>
					<div class="menuIco"><i class="iconfont icon-menu"></i></div>
					<!--<ul>
						<li>
							<a href="<?php $this->options->siteUrl(); ?>">首页</a>
						</li>
						<?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> </li>'); ?>
					</ul>-->
				</nav>
			</div>
		</header>
		<!--头部结束-->
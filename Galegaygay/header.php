<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
		<link rel="icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-icon">
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/md.css'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('css/font/iconfont.css'); ?>" />
		<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-3.2.1.min.js'); ?>" ></script>
		<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.goup.min.js'); ?>" ></script>
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
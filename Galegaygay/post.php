<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
	
<div class="content">
					<div class="article">
						<header>
							<a href="#"><?php $this->title() ?></a>
						</header>
						<footer id="arFoot">
							<span><i class="iconfont icon-shijian"></i><?php $this->date('Y.m.d'); ?></span>
							<span><i class="iconfont icon-fenlei"></i><?php $this->category(','); ?></span>
							<span><i class="iconfont icon-view"></i><?php Views_Plugin::theViews(); ?></span>
							<span><i class="iconfont icon-liuyan"></i><?php $this->commentsNum('%d'); ?></span>
							<span><i class="iconfont icon-open-bookmarks"></i><a href=""><?php $this->tags(', ', true, ''); ?></a><a href="">好玩</a></span>
						</footer>
						<article>
							<?php $this->content(''); ?>
						</article>
				
					</div>
                         <?php $this->need('comments.php'); ?>
					<!--<div class="articlePage">
						<a href="#">上一篇</a>
						<a href="#" class="fr">下一篇</a>
					</div>-->
</div>

</div><!--</div>main-->
</section>
<?php $this->need('footer.php'); ?>
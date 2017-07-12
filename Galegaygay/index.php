<?php
/**
 * 简洁黑白
 * 
 * @package Galegaygay
 * @author sy1x
 * @version 1.0.0
 * @link http://sy1x.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
  <?php $this->need('header.php');?>

 <?php $this->need('sidebar.php'); ?>
	<div class="content">
		<?php while($this->next()): ?>
					<div class="article">
						<header>
							<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
						</header>
						<article>
							<?php $this->excerpt(300, '……'); ?>
						</article>
						<footer>
							<span><i class="iconfont icon-shijian"></i><?php $this->date('Y.m.d'); ?></span>
							<span><i class="iconfont icon-fenlei"></i><?php $this->category(','); ?></span>
							<span><i class="iconfont icon-view"></i><?php Views_Plugin::theViews(); ?></span>
							<span><i class="iconfont icon-liuyan"></i><?php $this->commentsNum('%d Comments'); ?></span>
							<span><i class="iconfont icon-open-bookmarks"></i><a href=""><?php $this->author(); ?></a></span>
						</footer>
					</div>
<?php endwhile; ?>
					<div class="articlePage">
						<?php $this->pageLink('上一页'); ?>
			            <?php $this->pageLink('下一页','next'); ?>
					</div>
	</div>
	
</div><!--</div>main-->
</section>

<?php $this->need('footer.php'); ?>
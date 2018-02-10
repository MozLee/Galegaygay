<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="conments">
	<?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    	<div class="review">
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<input type="text" name="author" id="author" class="text fl" placeholder="昵称" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
    			<input type="email" name="mail" id="mail" class="text fl" placeholder="E-mail" value="<?php $this->remember('mail'); ?>"/>
    		</p>
    		<p>
    			<input type="url" name="url" id="url" class="text fl" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"/>
    		</p>
            <?php endif; ?>
    		<p>
                <textarea  name="text" id="textarea" class="textarea" required  placeholder="叔叔说点什么吧~"><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <input type="submit" class="submit" id="rvbtn" value="来一发">
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    </div>	
    </div>
<div class="conments">
	
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>
</div>

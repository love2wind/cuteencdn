<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>" class="comment-body">
        <div class="comment-author">
            <?php $email=$comments->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="45px" height="45px" style="border-radius: 50%;" >'; ?>
            <cite class="fn"><?php if ($comments->authorId) { if ($comments->authorId == $comments->ownerId) { echo "【站长】 ";}?><?php }?><?php CommentAuthor($comments); ?> <?php autvip($comments->mail);?></cite>
             <span class="comment-ua">  <?php getOs($comments->agent); ?>  <?php getBrowser($comments->agent); ?></span>
            <span class="says"><?php _e('说道：'); ?></span>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
        </div>
        <div class="comment-content">
        <?php $comments->content(); ?>
        </div>
        <div class="reply">
            <span class="comment-reply-link"><?php $comments->reply(); ?></span>
        </div>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>

<div id="comments" class="commpost">
    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
        
        <form id="new_comment_form" method="post" action="<?php $this->commentUrl() ?>" _lpchecked="1">
        
        <div id="showfacenamereplace"></div>
        <div class="new_comment"><textarea name="text" rows="3" class="textarea_box" style="height: auto;" placeholder="人生在世，难免会写点错别字，没事儿~"></textarea></div>
        
        <div class="comment_triggered" style="display: block;">
            <div class="input_body">
                <?php if($this->user->hasLogin()): ?>
					<div class="hasLogin">
							<?php $email=$this->user->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="25px" height="25px" class="avatar hasLogin-author" >'; ?><?php $this->user->screenName(); ?>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">退出 &raquo;</a>
					</div>	
						<?php else: ?>
               <?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
               <div class="hasLogin comm_on" id="comm_on">
						<?php $this->remember('author'); ?>. <a href="javascript:;" onclick="bian()" title="Logout" >编辑资料? &raquo;</a>
<script>function bian()
{ var oBox = document.getElementById("comm_off"); var oBox1 = document.getElementById("comm_on"); oBox.style.display= "block"; oBox1.style.display= "none";}</script>
			   </div>	
               <ul class="ident" id="comm_off">
                    <li>
                        <input type="text" name="author" placeholder="昵称*" value="<?php $this->remember('author'); ?>">
                    </li>
                    <li>
                        <input type="mail" name="mail" placeholder="邮件*" value="<?php $this->remember('mail'); ?>">
                    </li>                   
                </ul>
               <?php else : ?>
                <ul class="ident">
                    <li>
                        <input type="text" name="author" placeholder="昵称*" value="<?php $this->remember('author'); ?>">
                    </li>
                    <li>
                        <input type="mail" name="mail" placeholder="邮件*" value="<?php $this->remember('mail'); ?>">
                    </li>                   
                </ul>
             <?php endif; ?><?php endif ; ?>  
            <input type="submit" value="提交评论" class="comment_submit_button c_button">
            
            </div>
        </div>       
        </form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
	<h4 class="comments-title"><span><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></span></h4>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('←','→','2','...'); ?>
    
    <?php endif; ?>

</div>
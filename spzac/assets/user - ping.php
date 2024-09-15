<div class="col-12 col-md-5 col-lg-4 col-xl-3 fixsidenav ">
<div class="sidebox s_ping" >
<h4 class="sidebox__title">最新评论</h4>
<i class="bg-primary"></i>
<div class="sidebox__content" id="rctrly">

<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=false&pageSize=5')->to($comments); ?>
        <?php while($comments->next()): ?>
<div class="post__comment commentping">
<a href="<?php $comments->permalink(); ?>" class="post__comment-img">
<img src="<?php $email=$comments->mail; $imgUrl = getGravatar($email);echo ''.$imgUrl.''; ?>" alt="">
</a>
<div class="post__comment-title">
<h5><a href="<?php $comments->permalink(); ?>" class="coment_link"><?php $comments->author(); ?></a> <?php autvip($comments->mail);?></h5>
<p><?php $comments->dateWord(); ?></p>
</div>
<div class="post__comment-text" ><?php $cos=($comments->content); echo $cos;?></div>
</div>
<?php endwhile; ?> 

</div>
<a href="#" class="sidebox__more">View more</a>
</div>

	    <!-- 站点信息 -->
<?php $this->need('assets/site.info.php'); ?>
</div>
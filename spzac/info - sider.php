<div class="col-12 col-md-5 col-lg-4 col-xl-3 fixsidenav">
                    <?php if ($this->is('post')): ?>
                    <!-- user -->
					<div class="user">
						<div class="user__head">
							<div class="user__img">
								<img src="<?php $this->options->blogme(); ?>" alt="<?php $this->options->title() ?>">
							</div>
						</div>
						<div class="user__title">
							<h2><?php $this->options->title() ?></h2>
							<p><?php $this->options->description() ?></p>
						</div>
						<div class="user__btns">
							<a href="/" class="user__btn user__btn--blue"><span>主题推荐</span></a>
							<a href="/" class="user__btn user__btn--orange"><span>QQ联系</span></a>
						</div>
						<div class="sidebox__content">
                      <?php
$this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($recent);
if($recent->have()):
while($recent->next()):
?>
					  <div class="sidebox__job"><div class="sidebox__job-title"><a href="<?php $recent->permalink();?>"><?php $recent->title();?></a><span><i class="icon ion-ios-navigate"></i></span></div></div>
<?php endwhile; endif;?>                      
</div>
						<div class="sidebox__more">网站简介</div>
					</div>
					<!-- end user -->
					<?php endif; ?> 
					<!-- sidebox -->
					<div class="sidebox sidebox--desk">
						<h4 class="sidebox__title">热门文章</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">
                            <?php theMostViewed(); ?>							
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->

					<!-- sidebox -->
					<div class="sidebox sidebox--desk">
						<h4 class="sidebox__title">热评文章</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">
						    <?php getHotPosts('10');?>						
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->

					<!-- sidebox -->
					<div class="sidebox sidebox--desk  <?php if ($this->is('index')): ?>fixside<?php endif; ?> " >
						<h4 class="sidebox__title">视频教程</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">

                         
						    <?php $this->widget('Widget_Archive@indextuis', 'pageSize=5&type=category', 'mid=1')->to($categoryPosts); ?>
							<?php while($categoryPosts->next()): ?>
							<div class="sidebox__user">
								<a href="<?php $categoryPosts->permalink(); ?>" class="sidebox__user-img">
									<?php if ($this->fields->img): ?><img src="<?php $categoryPosts->fields->img(); ?>" alt=""><?php else: ?>
									<img src="<?php $this->options->themeUrl(); ?>img/adimg.png" alt=""><?php endif; ?>
								</a>
								<div class="sidebox__user-title">
									<h5><a href="<?php $categoryPosts->permalink(); ?>"><?php $categoryPosts->title(18, '...'); ?></a></h5>
									<p><?php $categoryPosts->tags('，', false, ''); ?></p>
								</div>
								
							</div>
                            <?php endwhile; ?>
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->

<!-- ping -->
<?php if ($this->is('index')): ?>  
<div class="sidebox__ad"><?php $this->options->adimg(); ?></div>  
<?php else: ?>              
<div class="sidebox fixside s_ping">
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
<?php endif; ?>     
<!-- end ping -->
				</div>


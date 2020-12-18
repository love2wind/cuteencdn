<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
	<!-- main content -->
	<main class="main main--breadcrumb">
		<!-- breadcrumb -->
		<?php $this->need('assets/post - link.php'); ?>
		<!-- end breadcrumb -->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 col-lg-8 col-xl-9">
					<!-- post -->
<?php if ($this->options->txtadimg): ?>
<div class="post post-ad"><?php $this->options->txtadimg(); ?></div>
<?php endif; ?>
					<div class="post c_con">
						<div class="post__head c_head">
							<a href="<?php $this->permalink(); ?>" class="post__head-img">
								<?php $email=$this->author->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" srcset="'.$imgUrl.'" class="avatar avatar-140 photo" height="46" width="46">'; ?>
							</a>
							<div class="post__head-title">
								<h5><a href="#"><?php $this->author->screenName(); ?></a></h5>
								<p><span class="autlv aut-4 vs">V</span><?php $this->date('F j, Y'); ?></p>
							</div>
							<div class="post__dropdown">
								<?php if ($this->is('post')) : ?><?php if ($this->fields->img): ?>
								<a class="post__actions-btn post__actions-btn--red comiis_poster_a" href="javascript:;">
									<i class="icon iconfont icon-ic_camera_line"></i>
								</a>
								<?php endif; ?><?php endif; ?>
							</div>
						</div>
      <?php if (($this->fields->videourl)&&($this->options->pdmapi)):?>
      <?php $this->need('dmplay/post - dmplay.php'); ?>
      <?php endif; ?> 
				<h2 class="post__title"><?php $this->title(); ?></h2>
				<div class="post__description conts"> 
				<?php $str=$this->content; echo costcn($this->cid,$this->remember('mail',true),$str,$this->user->hasLogin()); ?>				       <div class="donate-panel" style="text-align:center;margin-top:5px;"><?php Typecho_Plugin::factory('rootvip.cn.Donate')->Donate(); ?></div>               
                </div> 
				<?php if ($this->fields->Copyrightnew =='0'):?>
                <div class="Copyrightnew">原创文章，作者：<?php $this->author->screenName(); ?>，如若转载，请注明出处：<?php $this->permalink() ?></div>
                <?php elseif($this->fields->Copyrightnew =='2') : ?>
                <div class="Copyrightnew">本文经授权后发布，本文观点不代表立场，转载请联系原作者。</div>
                 <?php else : ?>
                <div class="Copyrightnew">本文来自投稿，不代表本站立场，如若转载，请注明出处：<?php $this->permalink() ?></div>               
                <?php endif; ?> 
				        <div class="downmoi"></div>
						<div class="post__tags">
							<?php $this->tags(' ', true, ''); ?>
						</div>
						<div class="post__stats">
							<div>								
								<a class="post__comments" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3"><i class="icon iconfont icon-ic_talk_line"></i> <span><?php $this->commentsNum('0 评论', '1 条评论', '%d 条评论'); ?></span></a>
							</div>
							<div class="post__views">
								<i class="icon iconfont icon-ic_visible"></i> <span><?php Postviews($this); ?></span>
							</div>
						</div>
					</div>
					<!-- end post -->
<?php if ($this->options->txtaddown): ?>
<div class="post post-ad"><?php $this->options->txtaddown(); ?></div>
<?php endif; ?>
					<!-- comments --> 
					<h3 class="main__title"><?php _e('发表评论'); ?></h3>
                    <?php $this->need('comments.php'); ?>
					<!-- end comments -->
				</div>
              
                 <?php if ($this->fields->down): ?>
				 <?php $this->need('down - sider.php'); ?>
                 <?php else: ?>
                 <?php $this->need('info - sider.php'); ?>
                 <?php endif; ?>

			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php $this->need('footer.php'); ?>
	<!-- end footer -->


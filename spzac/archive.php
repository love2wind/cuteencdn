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
				<!-- header -->
	            <?php $this->need('user - sider.php'); ?>
	            <!-- end header -->

				<div class="col-12 col-md-7 col-lg-8 col-xl-6 pagecontent">
					<!-- post -->
					<?php while($this->next()): ?>
					<div class="post pagepost">
						<div class="post__head egg <?php if($this->fields->feiy){echo 'elv1';} ?>">
							<a href="<?php $this->permalink(); ?>" class="post__head-img">
							<?php $email=$this->author->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" srcset="'.$imgUrl.'" class="avatar avatar-140 photo" height="46" width="46">'; ?>
							</a>
							<div class="post__head-title">
								<h5><a href="#"><?php $this->author->screenName(); ?></a></h5>
								<p><?php $this->date('F j, Y'); ?>，<?php $this->category('，', false, 'none'); ?></p>  
							</div>
						</div>

						<h2 class="post__title"><a href="<?php $this->permalink(); ?>"><?php listdeng($this);?><?php if(timeZone($this->date->timeStamp)) echo '<span class="badge arc_v2">最新</span>'; ?><?php $this->sticky(); $this->title() ?></a></h2>						

						<div class="post__description">
						    <div class="post__img"><?php if ($this->fields->img):?><a href="<?php $this->permalink(); ?>"><img class="post__img" src="<?php $this->fields->img(); ?>" alt="" ></a><?php endif; ?>
							<p><?php $this->excerpt(80, '...');?></p>
							<a href="<?php $this->permalink(); ?>">view more</a>
							</div>
						</div>

						<div class="post__tags">							
							<?php $this->tags('', true, ''); ?>
						</div>

						<div class="post__stats">
							<div>								
								<i class="icon ion-ios-text"></i> <span><?php $this->commentsNum('0 评论', '1 条评论', '%d 条评论'); ?></span>
							</div>

							<div class="post__views">
								<i class="icon ion-ios-eye"></i> <span><?php Postviews($this); ?></span>
							</div>
						</div>
                          <div class="deanshadowmd"></div>
					</div>
					<?php endwhile; ?>
					<!-- end post -->
					<!-- view more -->
					<?php $this->pageNav('<', '>', 3, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-navigator', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'nexts',)); ?>				
					<!-- end view more -->
				</div>

				<?php $this->need('info - sider.php'); ?>
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php $this->need('footer.php'); ?>
	<!-- end footer -->


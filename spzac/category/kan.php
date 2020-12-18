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
					<?php while($this->next()): ?>
					<div class="post">	


						<h2 class="post__title"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h2>



						<div class="post__description">
						    <div class="post__img"><?php if ($this->fields->img):?><a href="<?php $this->permalink(); ?>"><img class="post__img" src="<?php $this->fields->img(); ?>" alt="" ></a><?php endif; ?>
							<p><?php $this->excerpt(160, '...');?></p>
							<a href="<?php $this->permalink(); ?>">view more</a>
							</div>
							
							
						</div>

						<div class="post__tags">							
							<?php $this->tags(', ', true, 'none'); ?>
						</div>

						<div class="post__stats">
							<div>
								<a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>15</span></a>
								<a class="post__comments" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1"><i class="icon ion-ios-text"></i> <span><?php $this->commentsNum('0 评论', '1 条评论', '%d 条评论'); ?></span></a>
							</div>

							<div class="post__views">
								<i class="icon ion-ios-eye"></i> <span><?php Postviews($this); ?></span>
							</div>
						</div>
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


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
			<div class="row neipage">
				<!-- header -->
	            <?php $this->need('user - sider.php'); ?>
	            <!-- end header -->

				<div class="col-12 col-md-7 col-lg-8 col-xl-9">
					<div class="row pagecontent">
						
						<?php while($this->next()): ?>
						<!-- profile -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4 pagepost col-lv tran">
<div class="profile">
<div class="profile__logo">
<a href="<?php $this->permalink(); ?>"><img src="<?php $this->fields->img(); ?>" alt=""></a>
</div>
<div class="profile__wrap">
<h2 class="profile__title"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h2>
</div>
<div class="profile__actions">
<div class="post__location">
<i class="icon ion-ios-navigate"></i>
<span><?php $this->fields->leix(); ?></span>
</div>
<div class="post__actions">
<?php if($this->fields->feiy): ?><a href="<?php $this->permalink(); ?>" class="post__actions-btn post__actions-btn--blues"><span><?php $this->fields->feiy(); ?></span></a><?php else : ?><a href="<?php $this->permalink(); ?>" class="post__actions-btn post__actions-btn--blue"><span>√‚∑—</span></a> <?php endif; ?>
</div>
</div>
</div>
</div>
						<!-- end company -->
						<?php endwhile; ?>

					
					</div>

						

						

						

						
					<!-- view more -->
					<?php $this->pageNav('<', '>', 3, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-navigator', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'nexts',)); ?>				
					<!-- end view more -->


				</div>
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php $this->need('footer.php'); ?>
	<!-- end footer -->


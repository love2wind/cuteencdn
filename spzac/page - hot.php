<?php

/**
* 动态页
*
* @package custom
*/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
<?php if($this->category != $this->options->nolist): ?>
<?php endif; ?>	<!-- main content -->
		<main class="main main--breadcrumb">
			<div class="breadcrumb">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<ul class="breadcrumb__wrap">
								<li class="breadcrumb__item">
									<a href="">
										首页
									</a>
								</li>
								<span class="separator">
									/
								</span>
								<li class="breadcrumb__item">
									建站教程
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row neipage">
					<div class="col-12 col-md-7 col-lg-8 col-xl-12">
						<div class="row pagecontent">
						    <?php $this->widget('Widget_Archive@category', 'pageSize=24&type=category', 'mid=23')->to($categoryPosts); ?>
							<?php while($categoryPosts->next()): ?>
							<div class="col-12 col-sm-6 col-md-12 col-lg-3 pagepost col-lv down_img">
								<div class="profile">
									<div class="profile__logo">
										<a href="<?php $categoryPosts->permalink(); ?>">
											<?php if ($categoryPosts->fields->img): ?><img src="<?php $categoryPosts->fields->img(); ?>" alt=""><?php else: ?>
											<img src="<?php $this->options->themeUrl(); ?>img/adimg.png" alt=""><?php endif; ?>
										</a>
									</div>
									<div class="profile__wrap">
										<h2 class="profile__title">
											<a href="<?php $categoryPosts->permalink(); ?>">
												<?php $categoryPosts->title(18, '...'); ?>
											</a>
										</h2>
									</div>
								</div>
							</div>
                            <?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</main>
	<!-- end main content -->


<!-- footer -->
<?php $this->need('footer.php'); ?>
<!-- end footer -->

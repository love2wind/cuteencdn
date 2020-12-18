<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-7 col-md-9 col-lg-8 col-xl-9">
					<div class="header__content">
						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
						<!-- header logo -->
						<a href="<?php $this->options->siteUrl(); ?>" class="header__logo">
							<img src="<?php $this->options->logoUrl();?>" alt="">
						</a>
						<!-- end header logo -->
						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a href="<?php $this->options->siteUrl(); ?>" class="header__nav-link"><?php _e('首页'); ?></a>
							</li>
							<!-- end dropdown -->

	<!-- dropdown -->
<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
<?php while($categorys->next()): ?>						
<?php if ($categorys->levels === 0): ?>
<?php $children = $categorys->getAllChildren($categorys->mid); ?>
<?php if (empty($children)) { ?>
 <li class="header__nav-item">	<a href="<?php $categorys->permalink(); ?>" class="header__nav-link"><?php $categorys->name(); ?></a></li>
<?php } else { ?>
<li class="header__nav-item"><a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuProjects" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php $categorys->name(); ?></a>
<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuProjects">
<li><a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a></li>
<?php foreach ($children as $mid) { ?>
<?php $child = $categorys->getCategory($mid); ?>
<li><a href="<?php echo $child['permalink'] ?>"><?php echo $child['name']; ?></a></li>
<?php } ?>
</ul></li>
<?php } ?>
<?php endif; ?>
<?php endwhile; ?>
<!-- end dropdown -->	
						</ul>
						<!-- end header nav -->
						<!-- header search -->
						<form action="" class="header__search" method="get">
							<input class="header__search-input" type="text" placeholder="Search..." name="s">
							<button class="header__search-button" type="submit">
								<i class="icon ion-ios-search"></i>
							</button>
                            <i class="up-new"></i>
						</form>
						<!-- end header search -->
					</div>
				</div>
				<div class="col-5 col-md-3 col-lg-4 col-xl-3">
					<div class="header__content header__content--end">
                        <?php if($this->user->hasLogin()): ?>                      
                        <?php $currGroup = get_object_vars($this->user) ['row']['group'];if ($currGroup == "administrator"): ?>
						<div class="header__profile">
							<a class="dropdown-toggle header__profile-btn" href="#" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php $email=$this->user->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="25px" height="25px" >'; ?>
								<span><?php $this->user->screenName(); ?></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right header__dropdown-menu header__dropdown-menu--right" aria-labelledby="dropdownMenuProfile">	
								<li><a href="<?php $this->options->siteUrl(); ?>admin/options-theme.php"><i class="icon ion-ios-lock"></i> 后台设置</a></li>
								<li><a href="<?php $this->options->siteUrl(); ?>admin/write-post.php"><i class="icon ion-ios-help-buoy"></i> 发布文章</a></li>
								<li><a href="<?php $this->options->siteUrl(); ?>action/logout"><i class="icon ion-ios-exit"></i> 退出登录</a></li>
							</ul>
						</div>
                        <?php else: ?>
                        <div class="header__profile">
							<a class="dropdown-toggle header__profile-btn" href="#" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-container"> 
								<?php $email=$this->user->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="20px" height="20px">'; ?>
								<span><?php $this->user->screenName(); ?></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right header__dropdown-menu header__dropdown-menu--right" aria-labelledby="dropdownMenuProfile">	
								<li><a href="<?php $this->options->siteUrl(); ?>action/logout"><i class="icon ion-ios-exit"></i> 退出登录</a></li>
							</ul>
						</div>
                        <?php endif;?>                      
                        <?php else: ?>
                      <div class="header__profile"><div class=""><span><a class="signin" href="<?php $this->options->adminUrl('login.php'); ?>">登录</a></span></div></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>
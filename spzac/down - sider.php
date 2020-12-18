<div class="col-12 col-md-5 col-lg-4 col-xl-3 fixsidenav">
                    <?php if ($this->is('post')): ?>
                    <!-- user -->
					<div class="user fixside downon">
						<div class="user__head">
							<div class="user__img">
							<img src="<?php $this->options->blogme(); ?>" alt="<?php $this->options->title() ?>">
							</div>
						</div>
						<div class="user__title">							
							<p>版权申明：本素材由本站发布，用户购买后只有终端使用权，禁止转售和转载</p>
						</div>
                        <?php if ($this->fields->down): ?>
						<div class="user__btns user__nofo">
						<a href="<?php $this->fields->down(); ?>" class="user__btn user__btn--blue user__down"><span>资源下载</span></a>							
						</div>
                        <?php endif;?>                        
                      
						<div class="sidebox__content">
                      <?php $this->widget('Widget_Archive@indextui', 'pageSize=5&type=category', 'mid=1')->to($categoryPosts); ?>
<?php while($categoryPosts->next()): ?>
					  <div class="sidebox__job"><div class="sidebox__job-title"><a href="<?php $categoryPosts->permalink();?>"><?php $categoryPosts->title();?></a><span><i class="icon ion-ios-navigate"></i></span></div></div>
<?php endwhile; ?>                     
</div>
						<div class="sidebox__more">资源介绍</div>
					</div>
					<!-- end user -->
					<?php endif; ?> 



				</div>


<div class="col-12 col-md-5 col-lg-4 col-xl-3">
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
						<div class="user__btns user__nofo">
							<a href="/" class="user__btn user__btn--blue"><span>主题推荐</span></a>
							<a href="/" class="user__btn user__btn--orange"><span>QQ联系</span></a>
						</div>
					<div class="sidebox__content">
                      <?php
$this->widget('Widget_Contents_Post_Recent','pageSize=3')->to($recent);
if($recent->have()):
while($recent->next()):
?>
<div class="sidebox__job"><div class="sidebox__job-title"><a href="<?php $recent->permalink();?>"><?php $recent->title();?></a><span><i class="icon ion-ios-navigate"></i></span></div></div>
<?php endwhile; endif;?>                      
</div>
<div class="sidebox__more">网站简介</div>
</div>
<!-- end user -->                   

 

                    
					                   


				</div>
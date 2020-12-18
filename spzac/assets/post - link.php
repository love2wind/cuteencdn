<div class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="breadcrumb__wrap">
						    <?php if($this->is('index')):?><!-- 页面首页时 -->
							<li class="breadcrumb__item"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
							
							<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
							<li class="breadcrumb__item"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
							<li class="breadcrumb__item"><?php $this->category(); ?></li>
							
							<?php else: ?><!-- 页面为其他页时 -->
                            <li class="breadcrumb__item"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
							<li class="breadcrumb__item"><?php $this->archiveTitle(' &raquo; ','',''); ?></li>							
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
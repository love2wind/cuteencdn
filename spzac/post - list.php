<?php while($this->next()): ?>
<?php if($this->category != $this->options->nolist): ?>
<?php if ($this->options->adimg): ?>
<?php if ($this->sequence == 2): ?>
<div class="post post-ad"><?php $this->options->adimg(); ?></div>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->options->adimgb): ?>
<?php if ($this->sequence == 8): ?>
<div class="post post-ad"><?php $this->options->adimgb(); ?></div>
<?php endif; ?>
<?php endif; ?>


					<div class="post pagepost">
						<div class="post__head egg elv<?php $categories = $this->categories; foreach($categories as $cate) { echo $cate['mid']; } ?>">
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
								<svg t="1608227204673" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="34526" width="16" height="16"><path d="M512 512m-450.56 0a450.56 450.56 0 1 0 901.12 0 450.56 450.56 0 1 0-901.12 0Z" fill="#8599ab" p-id="34527"></path><path d="M276.48 512m-71.68 0a71.68 71.68 0 1 0 143.36 0 71.68 71.68 0 1 0-143.36 0Z" fill="#8599ab" p-id="34528"></path><path d="M512 512m-71.68 0a71.68 71.68 0 1 0 143.36 0 71.68 71.68 0 1 0-143.36 0Z" fill="#8599ab" p-id="34529"></path><path d="M747.52 512m-71.68 0a71.68 71.68 0 1 0 143.36 0 71.68 71.68 0 1 0-143.36 0Z" fill="#8599ab" p-id="34530"></path><path d="M880.64 737.28l39.1168 117.3504a40.96 40.96 0 0 1-46.8992 53.10464L737.28 880.59904 880.64 737.28z" fill="#8599ab" p-id="34531"></path></svg> <span><?php $this->commentsNum('0 评论', '1 条评论', '%d 条评论'); ?></span>
							</div>

							<div class="post__views">
								<svg t="1608227074638" class="icon" viewBox="0 0 1249 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="28573" width="16" height="16"><path d="M619.872274 58.528c99.84 1.024 192.544 31.872 280.224 82.272 118.816 68.32 220.736 159.68 305.248 273.92 45.472 61.504 48.448 127.456 4.192 188.064-108.672 148.736-242.528 261.248-407.072 326.752-150.016 59.712-295.776 42.272-437.568-32.608-125.856-66.368-232.352-160.032-322.464-276.544-2.976-3.872-5.824-7.904-8.672-11.904-44.832-63.36-45.12-129.12-0.224-192.352 37.44-52.672 80.608-99.392 127.104-142.336 93.76-86.432 196.448-155.488 315.36-192.48 47.008-14.624 94.976-22.112 143.84-22.848zM361.504274 512.864c0.224 156.48 116.256 259.168 259.52 258.88 141.984-0.288 257.664-103.808 257.632-259.616 0-156.48-116-259.712-259.008-259.584-142.912 0.096-258.368 103.392-258.144 260.32z" p-id="28574" fill="#8599ab"></path><path d="M668.768274 351.648c-50.848 42.56-63.072 97.088-33.152 145.216 30.72 49.376 81.6 55.968 137.792 17.824 8.576 51.232-33.312 123.488-87.904 151.52-64.352 33.056-140.064 13.952-185.824-46.848-44.288-58.848-46.56-144.192-5.504-206.304 40-60.544 114.432-87.104 174.56-61.408z" p-id="28575" fill="#8599ab"></path></svg> <span><?php Postviews($this); ?></span>
							</div>
						</div>
                        <div class="deanshadowmd"></div>
					</div>
					<?php endif; ?><?php endwhile; ?>
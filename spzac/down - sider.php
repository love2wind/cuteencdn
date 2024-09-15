<div class="col-12 col-md-5 col-lg-4 col-xl-3 fixsidenav">
					<?php //if ($this->is('post')): ?>
                    <!-- user -->
					<div class="user downon">
						<div class="user__head">
							<div class="user__img">
							<img src="<?php $this->options->blogme(); ?>" alt="<?php $this->options->title() ?>">
							</div>
						</div>
						<div class="user__title">							
<!--							<p style="line-height:180%;">版权申明：本素材由本站发布，用户购买后只有终端使用权，禁止转售和转载</p>
						</div>
                        <?php //if ($this->fields->down): ?>
						<div class="user__btns user__nofo">
						<a href="<?php $this->fields->down(); ?>" class="user__btn user__btn--blue user__down"><span>资源下载</span></a>							
						</div>
                        <?php //endif;?>                        
-->                      
							<h2><?php $this->options->title() ?></h2>
							<p style="line-height: 130%;font-size: 13px;">
							<?php //$this->options->description() ?>一个专注分享国内外各种资源的平台，日常分享网络上搜集的各种资源、图片、视频、音乐、工具、软件、APP、网站、电子书等</p>
						</div>
						<div class="user__btns">
							<a href="//niecepub.top" class="user__btn user__btn--blue" alt="一个致力于EPUB电子书排版制作的平台"><span>书苑精排</span></a>
							<a href="//nie.ge" class="user__btn user__btn--orange" alt="一个专注分享国内外各种资源的平台，日常分享网络上搜集的各种资源、图片、视频、音乐、工具、软件、APP、网站、电子书等"><span>涅槃茶馆</span></a>
						</div>

<!--						<div class="sidebox__content">
                      <?php //$this->widget('Widget_Archive@indextui', 'pageSize=5&type=category', 'mid=1')->to($categoryPosts); ?>
						<?php //while($categoryPosts->next()): ?>
					  <div class="sidebox__job"><div class="sidebox__job-title"><a href="<?php //$categoryPosts->permalink();?>"><?php //$categoryPosts->title();?></a><span><svg t="1608209117213" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5166" width="16" height="16"><path d="M474.091 874.771v34.187c0 28.815 23.57 52.25 52.736 52.25 29.166 0 52.736-23.435 52.736-52.25v-34.187H474.09z m168.253 0v34.187c0 63.578-51.76 115.042-115.517 115.042S411.31 972.536 411.31 908.958v-34.187H43.9v-31.396c0-76.635 38.352-146.57 100.172-188.192V457.122c0-158.82 101.451-297.54 247.954-347.983C397.762 47.915 449.286 0 512 0c62.713 0 114.238 47.915 119.974 109.139 146.503 50.443 247.954 189.163 247.954 347.983v198.061C941.748 696.805 980.1 766.74 980.1 843.375v31.396H642.344z m190.877-174.658l-16.074-8.987V457.122c0-138.622-93.21-258.805-225.017-294.577l-26.475-7.185 3.572-27.204c0.33-2.509 0.496-5.055 0.496-7.63 0-31.886-25.844-57.734-57.723-57.734-31.88 0-57.723 25.848-57.723 57.733 0 2.576 0.167 5.122 0.496 7.63l3.572 27.205-26.475 7.185C300.063 198.317 206.853 318.5 206.853 457.122v234.004l-16.074 8.987c-42.363 23.685-71.916 64.644-81.085 111.866h804.612c-9.169-47.222-38.722-88.181-81.085-111.866z m-253.794-426.92c-14.675-9.233-19.087-28.616-9.856-43.293s28.61-19.09 43.285-9.857c68.94 43.375 121.919 108.61 149.952 185.23 5.957 16.283-2.411 34.314-18.692 40.273-16.28 5.958-34.308-2.411-40.266-18.695-23.238-63.514-67.215-117.664-124.423-153.658z" fill="#222222" p-id="5167"></path></svg></span></div></div>
						<?php //endwhile; ?>                     
					</div>-->
					<?php $this->need('assets/user - social.php'); ?>
<!--<div class="sidebox__more">资源简介</div>-->
					</div>
					<!-- end user -->
				<div class="sidebox sidebox--desk" >
					<h4 class="sidebox__title">今日诗词</h4>
					<i class="bg-primary"></i>
					<div style="padding:15px 10px;background-color: #fafafa;">
						<style type="text/css">
						#poem_info{
							font-family: "st","宋体","zw",sans-serif;
							text-indent: 0;
							font-size: 12px;
							font-weigth: 700;
							text-align: right;
							padding-right:2em;
							color: #000;
						}
						#poem_sentence{
							font-family: "kt","楷体","zw",sans-serif;
							font-size: 16px;
							font-weigth: 1200;
							text-indent: 0;
							text-align: center;
							padding:0;
							color: #ff0000;
							margin: 0px 0 5px 0;
						}
						</style>


						<script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
						<div id="poem_sentence"></div>
						<div id="poem_info"></div>
						<script type="text/javascript">
						  jinrishici.load(function(result) {
							var info = document.querySelector("#poem_info")
							var sentence = document.querySelector("#poem_sentence")
							sentence.innerHTML = result.data.content
							info.innerHTML = result.data.origin.dynasty + '·' + result.data.origin.author 
							});
						</script>
					</div>
					</div>
					<?php //endif; ?> 
					<!-- sidebox -->
					<div class="sidebox sidebox--desk">
						<h4 class="sidebox__title">热门文章</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">
                            <?php theMostViewed(); ?>							
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->

					<!-- sidebox -->
					<div class="sidebox sidebox--desk">
						<h4 class="sidebox__title">热评文章</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">
						    <?php getHotPosts('10');?>						
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->
<?php if ($this->is('index')): ?>  

					<!-- sidebox -->
					<div class="sidebox sidebox--desk  <?php if ($this->is('index')): ?>fixside<?php endif; ?> " >
						<h4 class="sidebox__title">最新日志</h4>
                        <i class="bg-primary"></i>
						<div class="sidebox__content">

                         
						    <?php $this->widget('Widget_Archive@indextuis', 'pageSize=5&type=category', 'mid=15')->to($categoryPosts); ?>
							<?php while($categoryPosts->next()): ?>
							<div class="sidebox__user">
								<a href="<?php $categoryPosts->permalink(); ?>" class="sidebox__user-img">
									<?php if ($this->fields->img): ?><img src="<?php $categoryPosts->fields->img(); ?>" alt=""><?php else: ?>
									<img src="<?php $this->options->themeUrl(); ?>img/adimg.png" alt=""><?php endif; ?>
								</a>
								<div class="sidebox__user-title">
									<h5><a href="<?php $categoryPosts->permalink(); ?>"><?php $categoryPosts->title(18, '...'); ?></a></h5>
									<p><?php $categoryPosts->tags('，', false, ''); ?></p>
								</div>
								
							</div>
                            <?php endwhile; ?>
						</div>
						<a href="#" class="sidebox__more">View more</a>
					</div>
					<!-- end sidebox -->

<!-- ping -->
<div class="sidebox__ad"><?php $this->options->adimg(); ?></div>  
<?php else: ?>              
<div class="sidebox fixside s_ping">
<h4 class="sidebox__title">最新评论</h4>
<i class="bg-primary"></i>
<div class="sidebox__content" id="rctrly">
<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=false&pageSize=5')->to($comments); ?>
<?php while($comments->next()): ?>
<div class="post__comment commentping">
<a href="<?php $comments->permalink(); ?>" class="post__comment-img">
<img src="<?php $email=$comments->mail; $imgUrl = getGravatar($email);echo ''.$imgUrl.''; ?>" alt="">
</a>
<div class="post__comment-title">
<h5><a href="<?php $comments->permalink(); ?>" class="coment_link"><?php $comments->author(); ?></a> <?php autvip($comments->mail);?></h5>
<p><?php $comments->dateWord(); ?></p>
</div>
<div class="post__comment-text" ><?php $cos=($comments->content); echo $cos;?></div>
</div>
<?php endwhile; ?> 
</div>
<a href="#" class="sidebox__more">View more</a>
</div>
<?php endif; ?>     
<!-- end ping -->



				</div>


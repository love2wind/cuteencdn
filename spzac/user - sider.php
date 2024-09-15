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
						<div class="user__btns">
							<a href="//niecepub.top" class="user__btn user__btn--blue" tittle="一个致力于EPUB电子书排版制作的平台"><span>书苑精排</span></a>
							<a href="//nie.ge" class="user__btn user__btn--orange" tittle="一个专注分享国内外各种资源的平台，日常分享网络上搜集的各种资源、图片、视频、音乐、工具、软件、APP、网站、电子书等"><span>涅槃茶馆</span></a>
						</div>
					<div class="sidebox__content">
                      <?php
$this->widget('Widget_Contents_Post_Recent','pageSize=6')->to($recent);
if($recent->have()):
while($recent->next()):
?>
<div class="sidebox__job"><div class="sidebox__job-title"><a href="<?php $recent->permalink();?>" style="max-width: 85%;"><?php $recent->title();?></a><span><svg t="1608209117213" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5166" width="16" height="16"><path d="M474.091 874.771v34.187c0 28.815 23.57 52.25 52.736 52.25 29.166 0 52.736-23.435 52.736-52.25v-34.187H474.09z m168.253 0v34.187c0 63.578-51.76 115.042-115.517 115.042S411.31 972.536 411.31 908.958v-34.187H43.9v-31.396c0-76.635 38.352-146.57 100.172-188.192V457.122c0-158.82 101.451-297.54 247.954-347.983C397.762 47.915 449.286 0 512 0c62.713 0 114.238 47.915 119.974 109.139 146.503 50.443 247.954 189.163 247.954 347.983v198.061C941.748 696.805 980.1 766.74 980.1 843.375v31.396H642.344z m190.877-174.658l-16.074-8.987V457.122c0-138.622-93.21-258.805-225.017-294.577l-26.475-7.185 3.572-27.204c0.33-2.509 0.496-5.055 0.496-7.63 0-31.886-25.844-57.734-57.723-57.734-31.88 0-57.723 25.848-57.723 57.733 0 2.576 0.167 5.122 0.496 7.63l3.572 27.205-26.475 7.185C300.063 198.317 206.853 318.5 206.853 457.122v234.004l-16.074 8.987c-42.363 23.685-71.916 64.644-81.085 111.866h804.612c-9.169-47.222-38.722-88.181-81.085-111.866z m-253.794-426.92c-14.675-9.233-19.087-28.616-9.856-43.293s28.61-19.09 43.285-9.857c68.94 43.375 121.919 108.61 149.952 185.23 5.957 16.283-2.411 34.314-18.692 40.273-16.28 5.958-34.308-2.411-40.266-18.695-23.238-63.514-67.215-117.664-124.423-153.658z" fill="#222222" p-id="5167"></path></svg></span></div></div>
<?php endwhile; endif;?>                      
</div>
					<?php $this->need('assets/user - social.php'); ?>
<!--<div class="sidebox__more">网站简介</div>-->
</div>
<!-- end user -->                   
				<div class="sidebox fixside s_ping" >
<h4 class="sidebox__title">小说物语</h4>
<i class="bg-primary"></i>
<div style="padding:30px 20px 20px 20px;background-color: #fafafa;">

<div id="hitokoto" style="color:red;font-size:14px;margin-bottom:5px;font-family:黑体,'ht',微软雅黑">漫漫人生路，来去也匆匆。</div>
<div style="font-size:12px;text-align:right;font-weight:bold;font-family:'kt',楷体;color:#000">——《<span id="from">书名</span>》
</div>
<script type="text/javascript">
  fetch('https://v1.hitokoto.cn/?c=d')
    .then(function (res){
      return res.json();
    })
    .then(function (data) {
      var hitokoto = document.getElementById('hitokoto');
      hitokoto.innerText = data.hitokoto; 
  var from = document.getElementById('from');
      from.innerText = data.from; 
    })

    .catch(function (err) {
      console.error(err);
    })
</script>
</div>
</div>

 

                    
					                   


				</div>

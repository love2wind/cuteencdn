

<!-- faq --><div class="faq">

<div class="row">
<div class="col-12 col-xl-6">
<div class="faq__box">
<h3>相关推荐</h3>
<ul>
<?php $this->related(5)->to($relatedPosts); ?>	
<?php while ($relatedPosts->next()): ?>
<li><svg t="1608184042869" class="icon" viewBox="0 0 1024 1024" version="1.1" style="margin-right:8px;margin-bottom:2px;" xmlns="http://www.w3.org/2000/svg" p-id="15804" width="18" height="18"><path d="M401.92 263.68c-10.24-10.24-25.6-10.24-35.84 0-10.24 10.24-10.24 25.6 0 35.84l212.48 212.48-212.48 212.48c-10.24 10.24-10.24 25.6 0 35.84 10.24 10.24 25.6 10.24 35.84 0l230.4-227.84c5.12-5.12 7.68-12.8 7.68-20.48 0-7.68-2.56-15.36-7.68-20.48l-230.4-227.84zM819.2 102.4H204.8C148.48 102.4 102.4 148.48 102.4 204.8v614.4c0 56.32 46.08 102.4 102.4 102.4h614.4c56.32 0 102.4-46.08 102.4-102.4V204.8c0-56.32-46.08-102.4-102.4-102.4z m51.2 716.8c0 28.16-23.04 51.2-51.2 51.2H204.8c-28.16 0-51.2-23.04-51.2-51.2V204.8c0-28.16 23.04-51.2 51.2-51.2h614.4c28.16 0 51.2 23.04 51.2 51.2v614.4z" p-id="15805" fill="#333333"></path></svg><a href="<?php $relatedPosts->permalink(); ?>"><?php $relatedPosts->title(); ?></a></li>
 <?php endwhile; ?>

</ul>
</div>
</div>

<div class="col-12 col-xl-6">
<div class="faq__box">
<h3>随机推荐</h3>
<ul>
<?php getRandomPosts(5);?> 

</ul>
</div>
</div>

</div>


</div><!-- end faq -->

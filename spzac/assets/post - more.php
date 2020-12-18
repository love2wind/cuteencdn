

<!-- faq --><div class="faq">

<div class="row">
<div class="col-12 col-xl-6">
<div class="faq__box">
<h3>相关推荐</h3>
<ul>
<?php $this->related(5)->to($relatedPosts); ?>	
<?php while ($relatedPosts->next()): ?>
<li><a href="<?php $relatedPosts->permalink(); ?>"><?php $relatedPosts->title(); ?></a></li>
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

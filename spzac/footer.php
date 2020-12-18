<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.html" class="footer__logo">
							<img src="<?php $this->options->footlogo(); ?>" alt="<?php $this->options->title() ?>">
						</a>                       
						<span class="footer__copyright">© 2020 小灯泡设计 <?php if($this->options->footnav){$this->options->footnav();} ?> 页面执行：<?php echo timer_stop();?></span>

						<nav class="footer__nav">
							<a href="/">联系我们</a>
							<a href="/">常见问题</a>
							<a href="/">个人主页</a>
						</nav>

						<button class="footer__back" type="button">
							<i class="icon ion-ios-arrow-round-up"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>

<!-- JS -->
	<script src="<?php $this->options->themeUrl('js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/i.js'); ?>"></script>
   
<?php if ($this->is('post')) : ?>
<?php if ($this->fields->img): ?><nocompress><?php $this->need('assets/poster.php'); ?></nocompress><?php endif; ?>
<?php if ($this->options->baiduappdi): ?>
<script type="application/ld+json">
        {
            "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
            "@id": "<?php $this->permalink() ?>",
            "appid": "<?php $this->options->baiduappdi(); ?>",
            "title": "<?php $this->title() ?>",
            "images": ["<?php $this->fields->img(); ?>"],
            "description": "<?php $this->description() ?>",
            "pubDate": "<?php $this->date('Y-m-d\TH:i:s'); ?>"
        }
</script>
<?php endif; ?><?php endif; ?>
<?php $this->options->zztj(); ?>
<?php if($this->options->foothtml){$this->options->foothtml();} ?>
<?php $this->footer(); ?>
<?php if ($this->options->themecompress == '1'):?>
<?php error_reporting(0); $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>
</body>
</html>
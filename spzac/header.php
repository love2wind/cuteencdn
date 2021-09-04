<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php if($this->options->favicon): ?><link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?>
	<!-- CSS -->
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.3/spzac/css/main.css">-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.3/spzac/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.3/spzac/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">  
	<!--<link rel="stylesheet" href="<?php //$this->options->themeUrl('css/ionicons.min.css'); ?>">-->
	<!--<link rel="stylesheet" href="<?php //$this->options->themeUrl('css/bootstrap-reboot.min.css'); ?>">-->
	<!--<link rel="stylesheet" href="<?php //$this->options->themeUrl('css/bootstrap-grid.min.css'); ?>">-->
	<meta name="author" content="love2wind">
	<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array(
            'category'  =>  _t('%s '),
            'search'    =>  _t('包含关键字 %s 的内容'),
            'tag'       =>  _t('标签 %s 下的内容'),
            'author'    =>  _t('%s-主页')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ( $this->is('post') || $this->is('page')|| $this->is('tag') ) : ?><?php else: ?> - <?php echo $this->getDescription(); ?> <?php endif; ?></title>
<script>themeUrl = "<?php echo $this->options->themeUrl ?>";</script>
<!-- 通过自有函数输出HTML头部信息 -->
<nocompress><?php $this->header(); ?></nocompress>
<?php if ($this->options->webcss): ?>
<style type="text/css"><?php $this->options->webcss(); ?></style>
<?php endif; ?>
<?php if ($this->options->tophtml): ?>
<?php $this->options->tophtml(); ?>
<?php endif; ?> 
<?php if ($this->is('post')) : ?>  
<?php if ($this->options->baiduappdi): ?>
<link rel="canonical" href="<?php $this->permalink() ?>"/>
<script src="//msite.baidu.com/sdk/c.js?appid=<?php $this->options->baiduappdi(); ?>"></script>
<?php endif; ?><?php endif; ?>
<!--<script src="<?php //$this->options->themeUrl('js/highlight.pack.js'); ?>"></script>-->
<script src="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.3/spzac/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
	<!-- header -->
	<?php $this->need('nav.php'); ?>
	<!-- end header -->
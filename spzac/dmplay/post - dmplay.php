<?php if ($this->fields->videourl): ?>
<link rel="stylesheet" href="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/css/yzmplayer.css">

<style> 
.yzmplayer-full-icon span svg,.yzmplayer-fulloff-icon span svg{display: none;}
.yzmplayer-full-icon span,.yzmplayer-fulloff-icon span{background-size:contain!important;float: left;width: 22px;height: 22px;}
.yzmplayer-full-icon span{background: url(<?php $this->options->themeUrl('dmplay/img/full.png'); ?>) center no-repeat;}
.yzmplayer-fulloff-icon span{background: url(<?php $this->options->themeUrl('dmplay/img/fulloff.webp'); ?>) center no-repeat;}
#loading-box {background: #fff!important;}
#vod-title{overflow: unset;width: 285px;white-space: normal;color: #fb7299;}
#vod-title e{padding: 2px;}
.layui-layer-dialog{text-align: center;font-size: 16px;padding-bottom: 10px;}
.layui-layer-btn.layui-layer-btn-{padding: 15px 5px !important;text-align: center;}
.layui-layer-btn a{font-size: 12px;padding: 0 11px !important;}
.layui-layer-btn a:hover{border-color: #00a1d6 !important;background-color:#00a1d6 !important;color: #fff !important;}

</style>
<script src="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/js/yzmplayer.js"></script>
<script src="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/js/md5.min.js"></script>
<script src="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/js/jquery.min.js"></script>
<script src="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/js/hls.min.js"></script>

<script>
var css ='<style type="text/css">';
var d, s ;
d = new Date();
s = d.getHours();
if(s<17 || s>23){ 
css+='#loading-box{background: #fff;}';//白天
}else{
css+='#loading-box{background: #000;}';//晚上
}
css+='</style>';
//$('head').append(css).addClass("");
</script>

<div id="player"></div>
<div class="tj"></div>
<script>
    // 播放器基本设置
    var playlink ="<?php echo($_REQUEST['myurl']);?>",urlpar ='<?php $this->options->title(); ?>';
    var dmapi = '<?php $this->options->pdmapi() ?>',vodurl = '<?php $this->fields->videourl(); ?>',vodid="<?php echo($_REQUEST['name']);?>",vodsid="<?php echo($_REQUEST['sid']);?>",vodpic="<?php echo($_REQUEST['pic']);?>",vodname="<?php echo($_REQUEST['name']);?>",next = "<?php echo($_REQUEST['next']);?>",ym="http://v.8e.gs";
    var pic="";
    var playnext = next ;
    var user = '<?php echo($_REQUEST['user']);?>',group = "<?php echo($_REQUEST['group']);?>",color = '#00a1d6',logo ='<?php $this->options->plogo() ?>',autoplay = false;
    var danmuon = 1,laoding = 1,diyvodid = 0,pause_ad = 1,usernum = "17";
    //试看时间
    var trytime_f= 3;
    //违规词
    var pbgjz = ['草','操','妈','逼','滚','网址','网站','支付宝','企','q','n','o','c','m','e'];
    //弹幕库获取
    if(playlink!=''){ }else {var diyvodid = 1;};
    diyid = md5(vodurl),diysid = 0;
    //弹幕礼仪链接
    var dmrule = ""
    //暂停广告
    var pause_ad_html = '';
    //播放结束
    function video_end() {};
</script>

<script src="<?php if ($this->options->cdnopen == '1'):?><?php echo $str = str_replace($this->options->cdnurla,$this->options->cdnurlb,$this->options->themeUrl);?><?php else : ?><?php $this->options->siteUrl(); ?>usr/themes/spzac<?php endif; ?>/dmplay/js/setting.js"></script>
<script>
</script>

<?php endif; ?>

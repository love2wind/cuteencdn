<style type="text/css">
.shang_content {
	width:80%;
	margin:40px auto 10px auto;
	text-align:center;
    text-indent: 0;
	}
}
.hide_box {
	z-index:999;
	filter:alpha(opacity=50);
	background:#666;
	opacity:0.5;
	-moz-opacity:0.5;
	left:0;
	top:0;
	height:99%;
	width:100%;
	position:fixed;
	display:none;
}
.shang_box {
	color:#fff;
	width:800px;
	height:550px;
	padding:10px;
	background-color:#d8d7d7;
	border-radius:10px;
	position:fixed;
	z-index:1000;
	left:40%;
	top:45%;
	margin-left:-280px;
	margin-top:-280px;
	border: 2px solid #dc5f06;
	display:none;
}
.shang_box img {
	border:none;
	border-width:0;
display: initial;}
.dashang {
	display:block;
	width:100px;
	margin:10px auto;
	height:auto;
	padding:10px 18px;
	text-align:center;
	text-decoration:none;
	font-size:16px;
	transition:all 0.3s;
	font-weight:400;
	outline:0!important;
	color:#fff!important;
	background-color:#f05050;
	border-color:#f05050;
	border-radius:30px;
	margin-bottom:20px;
    text-indent: 0;
}
/*.dashang:hover {
	opacity:0.8;
	padding:15px;
	font-size:16px;
}*/
.shang_close {
	float:right;
	display:inline-block;
}
.shang_logo {
	display:block;
	text-align:center;
	margin:20px auto;
}
.shang_tit {
	width:100%;
	color:#000000;
	margin:10px auto 30px auto;
}
.shang_tit p {
	color:#000;
	text-align:center;
	font-size:18px;
	font-weight:900;
    text-indent: 0;
	}
.shang_payimg {
	width:640px;
	text-align:center;
	margin:10px auto;
	border-radius:3px;
	height:365px;
}
.pay_explain {
	text-align:center;
	margin:10px auto 25px auto;
	font-size:14px;
	color:#333;
}
.radiobox {
	width:16px;
	height:16px;
	background:url('<?php $this->options->themeUrl('img/shang/radio2.jpg'); ?>');
	display:block;
	float:left;
	margin-top:5px;
	margin-right:14px;
}
.checked .radiobox {
	background:url('<?php $this->options->themeUrl('img/shang/radio1.jpg'); ?>');
}
.shang_payselect {
	text-align:center;
	margin:0 auto;
	margin-top:40px;
	cursor:pointer;
	height:60px;
	width:320px;
}
.shang_payselect .pay_item {
	display:inline-block;
	margin-right:10px;
	float:left;
}
.shang_info {
	clear:both;
    text-indent: 0;
}
.shang_info p,.shang_info a {
	color:#ff0000;
	text-align:center;
	font-size:16px;
	text-decoration:none;
	line-height:0em;
    text-indent: 0;
}

</style>

<div class="shang_content">
<p><a href="javascript:void(0)" onClick="dashangToggle()" class="dashang" title="打赏，支持一下"><svg t="1608258227508" class="icon" viewBox="0 0 1024 1024" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="18145" width="18" height="18"><path d="M512 640c0-35.36 28.64-64 64-64s64 28.64 64 64c0 35.36-28.64 64-64 64s-64-28.64-64-64zM928.032 416c-0.032 0-0.032 0 0 0l-0.032-192 0-96c0-53.024-43.008-96-96-96l-656 0c-97.056 0-176 78.976-176 176l0 640c0 97.024 78.944 176 176 176l576 0c97.024 0 176-78.976 176-176l0-48c0 0 0 0 0.032 0 127.936-96.032 127.936-287.968 0-384zM176 96l656 0c17.632 0 32 14.336 32 32l0 197.888c-10.048-3.584-20.736-5.888-32-5.888l-0.032 0 0-160c0-17.696-14.336-32-32-32l-672 0c-17.664 0-32 14.304-32 32l0 126.176c-19.744-20.192-31.968-47.712-31.968-78.176 0-61.856 50.112-112 112-112zM799.968 192l-672 0 0-32 672 0 0 32zM799.968 224l0 32-672 0 0-32 672 0zM799.968 288l0 32-623.968 0c-17.28 0-33.408-4.224-48-11.2l0-20.8 671.968 0zM864 848c0 61.856-50.144 112-112 112l-576 0c-61.888 0-112-50.144-112-112l0-504.352c30.432 25.184 69.472 40.352 112 40.352l656 0c17.632 0 32 14.336 32 32l0 64-288 0c-88.384 0-160 71.616-160 160s71.648 160 160 160l288 0 0 48zM904.864 736l-328.864 0c-52.928 0-96-43.072-96-96s43.072-96 96-96l288 0c19.744-0.256 39.328-9.824 51.264-25.728 3.328-4.48 5.92-9.504 8-14.752 0.288-0.704 0.8-1.248 1.056-1.984 23.008 30.176 35.68 67.168 35.68 106.464 0 49.216-19.872 94.88-55.136 128z" p-id="18146" fill="#ffffff"></path></svg>
		&nbsp;赞&nbsp;&nbsp;赏</a></p>
			<p style="color:#999999;font-size:14px;line-height:110%;"><span>如果觉得我的文章对你有用，请随意赞赏</span></p>
<div class="hide_box"></div>
<div class="shang_box">
	<a class="shang_close" href="javascript:void(0)" onClick="dashangToggle()" title="关闭"><svg t="1608276676282" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="24845" width="20" height="20" alt="取消"><path d="M497 90c246.319 0 446 199.681 446 446S743.319 982 497 982 51 782.319 51 536 250.681 90 497 90z m175.534 270.444c-11.672-11.671-30.595-11.671-42.266 0L496.156 494.556l-133.302-133.3-0.505-0.492c-11.706-11.176-30.257-11.012-41.761 0.493-11.672 11.671-11.672 30.595 0 42.266L453.89 536.822l-132.44 132.44-0.494 0.505c-11.176 11.706-11.012 30.257 0.493 41.762 11.672 11.671 30.595 11.671 42.266 0l132.44-132.441 133.258 133.26 0.505 0.494c11.706 11.176 30.256 11.011 41.761-0.494 11.672-11.671 11.672-30.594 0-42.266l-133.257-133.26L672.534 402.71l0.493-0.504c11.176-11.706 11.011-30.257-0.493-41.762z" fill="#d81e06" p-id="24846"></path></svg></a>
	<div class="shang_tit">
		<p>感谢您的支持，我会继续努力的!</p>
	</div>
	<div class="shang_payimg">
		<img src="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.0/spzac/img/qcode.png" alt="扫码支持" title="扫一扫" width="600" height="345"/>
	</div>
		<div class="pay_explain">扫码打赏，你说多少就多少</div>
<!--	<div class="shang_payselect">
		<div class="pay_item checked" data-id="alipay">
			<span class="radiobox"></span>
			<span class="pay_logo"><img src="<?php $this->options->themeUrl('img/shang/alipay.jpg'); ?>" alt="支付宝" /></span>
		</div>
		<div class="pay_item" data-id="weipay">
			<span class="radiobox"></span>
			<span class="pay_logo"><img src="<?php $this->options->themeUrl('img/shang/wechat.jpg'); ?>" alt="微信" /></span>
		</div>
	</div>-->
	<div class="shang_info">
		<p>打开&nbsp;&nbsp;<span id="shang_pay_txt"><svg t="1608261456118" class="icon" aria-hidden="true" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="20670" width="16" height="16"><path d="M1023.795 853.64v6.348a163.807 163.807 0 0 1-163.807 163.807h-696.18A163.807 163.807 0 0 1 0 859.988v-696.18A163.807 163.807 0 0 1 163.807 0h696.181a163.807 163.807 0 0 1 163.807 163.807V853.64z" fill="#009FE9" p-id="20671"></path><path d="M844.836 648.267c-40.952-14.333-95.623-34.809-156.846-57.128a949.058 949.058 0 0 0 90.094-222.573H573.325V307.14h245.711v-43.41l-245.71 2.458V143.33H472.173c-18.223 0-21.704 20.476-21.704 20.476v102.38H204.759v40.952h245.71v61.427H245.712v40.952h409.518a805.522 805.522 0 0 1-64.909 148.246c-128.384-42.795-266.186-77.604-354.233-55.08a213.564 213.564 0 0 0-112.003 63.27c-95.418 116.917-26.21 294.034 175.274 294.034 119.989 0 236.087-67.366 325.771-177.73 134.322 65.932 398.666 176.297 398.666 176.297V701.3s-32.352-4.095-178.96-53.033z m-563.702 144.97c-158.893 0-204.759-124.699-126.336-194.112a191.86 191.86 0 0 1 90.913-46.276c93.575-10.238 189.811 35.629 293.624 86.614-74.941 94.598-166.674 153.774-258.2 153.774z" fill="#FFFFFF" p-id="20672"></path></svg>&nbsp;或者&nbsp;<svg t="1608261537969" class="icon" viewBox="0 0 1024 1024" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="22879" width="20" height="20"><path d="M395.846 603.585c-3.921 1.98-7.936 2.925-12.81 2.925-10.9 0-19.791-5.85-24.764-14.625l-2.006-3.864-78.106-167.913c-0.956-1.98-0.956-3.865-0.956-5.845 0-7.83 5.928-13.68 13.863-13.68 2.965 0 5.928 0.944 8.893 2.924l91.965 64.43c6.884 3.864 14.82 6.79 23.708 6.79 4.972 0 9.85-0.945 14.822-2.926L861.71 282.479c-77.149-89.804-204.684-148.384-349.135-148.384-235.371 0-427.242 157.158-427.242 351.294 0 105.368 57.361 201.017 147.323 265.447 6.88 4.905 11.852 13.68 11.852 22.45 0 2.925-0.957 5.85-2.006 8.775-6.881 26.318-18.831 69.334-18.831 71.223-0.958 2.92-2.013 6.79-2.013 10.75 0 7.83 5.929 13.68 13.865 13.68 2.963 0 5.928-0.944 7.935-2.925l92.922-53.674c6.885-3.87 14.82-6.794 22.756-6.794 3.916 0 8.889 0.944 12.81 1.98 43.496 12.644 91.012 19.53 139.48 19.53 235.372 0 427.24-157.158 427.24-351.294 0-58.58-17.78-114.143-48.467-163.003l-491.39 280.07-2.963 1.98z" fill="#09BB07" p-id="22880"></path></svg></span>扫一扫，即可进行扫码赞赏哦</p>
	</div>
</div>
</div>
<script type="text/javascript">
/*$(function(){
	$(".pay_item").click(function(){
		$(this).addClass('checked').siblings('.pay_item').removeClass('checked');
		var dataid=$(this).attr('data-id');
		$(".shang_payimg img").attr("src","img/shang/"+dataid+"img.jpg");
		$("#shang_pay_txt").text(dataid=="alipay"?"支付宝":"微信");
	});
});*/
function dashangToggle(){
	$(".hide_box").fadeToggle();
	$(".shang_box").fadeToggle();
}
</script>
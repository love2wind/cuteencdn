<style>
.list-group {
    border-radius: 2px;
    margin-bottom: 20px;
    padding-left: 0;
}
#site_info .list-group-item {
    border: none!important;
    padding: 15px 15px;
}
#site_info .list-group-item {
    border: none!important;
    padding: 15px 15px;
}
.list-group-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.text-second {
    opacity: .8;
}
.list-group-item {
    padding-right: 15px;
    border-color: #e7ecee;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 8px 15px;
	font-size: 14px;
    margin-bottom: -1px;
    background-color: #fff;
}
.site-info-icons svg {
    vertical-align: middle;
    width: 16px;
    height: 16px;
    margin-right: 4px;
	}
.list-group-item>.info_badge {
    margin-right: 0;
}
.list-group-item>.info_badge {
    float: right;
}
.pull-right {
    float: right!important;
}
.info_badge {
    text-shadow: 0 1px 0 rgb(0 0 0 / 20%);
    display: inline-block;
    min-width: 10px;
    padding: 5px 8px 4px 8px;
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #309d9d;
    border-radius: 10px;
}
</style>
            <?php Typecho_Widget::widget('Widget_Stat')->to($quantity); ?>

			<div class="sidebox fixside s_ping" >
			<h4 class="sidebox__title">站点信息</h4><i class="bg-primary"></i>

                <div class="cloud site_info" id="cloud"></div>
                <ul id="list-group">
				   <li class="list-group-item text-second"><span class="site-info-icons"> <svg t="1608022964175" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5206" width="16" height="16"><path d="M324.266667 337.066667h200.533333c25.6 0 46.933333-21.333333 46.933333-46.933334 0-25.6-21.333333-46.933333-46.933333-46.933333H324.266667c-25.6 4.266667-46.933333 25.6-46.933334 46.933333 0 25.6 21.333333 46.933333 46.933334 46.933334zM699.733333 465.066667H324.266667c-25.6 0-46.933333 21.333333-46.933334 46.933333 0 21.333333 21.333333 42.666667 46.933334 42.666667h379.733333c25.6 0 46.933333-21.333333 46.933333-46.933334-4.266667-25.6-25.6-42.666667-51.2-42.666666zM699.733333 678.4H324.266667c-25.6 0-46.933333 21.333333-46.933334 46.933333 0 25.6 21.333333 42.666667 46.933334 42.666667h379.733333c25.6 0 46.933333-21.333333 46.933333-46.933333-4.266667-21.333333-25.6-42.666667-51.2-42.666667zM972.8 217.6V256z" fill="#58666e" p-id="5207"></path><path d="M972.8 256l-268.8-256H217.6C128 0 51.2 72.533333 51.2 166.4v695.466667C51.2 951.466667 128 1024 217.6 1024h588.8c89.6 0 166.4-72.533333 166.4-166.4V256z m-89.6 0h-149.333333c-12.8 0-25.6-12.8-25.6-25.6V89.6L883.2 256z m-76.8 678.4H217.6c-42.666667 0-76.8-34.133333-76.8-76.8V166.4c0-42.666667 34.133333-76.8 76.8-76.8h401.066667v132.266667c0 68.266667 55.466667 123.733333 123.733333 123.733333h140.8v516.266667c0 38.4-34.133333 72.533333-76.8 72.533333z" fill="#58666e" p-id="5208"></path></svg></span> <span

							   class="info_badge

				   pull-right"><?php echo number_format($quantity->publishedPostsNum); ?></span>文章数目</li>

				   <li class="list-group-item text-second"> <span class="site-info-icons"> <svg t="1608023117244" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5479" width="16" height="16"><path d="M512 157.27104c104.35072 0 201.79968 31.89248 274.39616 89.8048 67.89632 54.16448 105.2928 124.75392 105.2928 198.75328s-37.39136 144.5888-105.2928 198.75328c-72.59648 57.91232-170.04544 89.8048-274.39616 89.8048-49.34656 0-98.85696 36.84352-156.18048 79.50848-9.53856 7.09632-21.55008 16.04096-33.5616 24.59136l0.04096-8.35072c0.384-63.60576 0.77824-129.37216-50.2016-161.19808-88.832-55.45472-139.78112-136.77568-139.78112-223.10912 0-74.00448 37.39136-144.5888 105.2928-198.75328 72.59136-57.9072 170.04032-89.8048 274.39104-89.8048m0-70.87104c-248.83712 0-450.56 160.92672-450.56 359.43424 0 115.03104 67.7376 217.44128 173.12768 283.23328 36.55168 22.81472-4.85376 194.55488 39.5008 207.55968 2.25792 0.66048 4.69504 0.97792 7.31136 0.97792 53.52448 0 178.53952-132.33152 230.62528-132.33152 248.83712 0 450.56-160.92672 450.56-359.43424C962.56 247.3216 760.83712 86.4 512 86.4z" fill="#58666e" p-id="5480"></path><path d="M660.48 414.09024H363.52a35.84 35.84 0 1 1 0-71.68h296.96a35.84 35.84 0 1 1 0 71.68zM614.4 577.93024H409.6a35.84 35.84 0 1 1 0-71.68h204.8a35.84 35.84 0 1 1 0 71.68z" fill="#58666e" p-id="5481"></path></svg></span>

					   <span class="info_badge

				   pull-right"><?php echo number_format($quantity->publishedCommentsNum); ?></span>评论数目</li>
				   <li class="list-group-item text-second"><span class="site-info-icons"> <svg t="1608026295608" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11396" width="16" height="16"><path d="M748.306286 814.701714A192.164571 192.164571 0 0 0 566.857143 685.714286h-109.714286a192.128 192.128 0 0 0-181.430857 129.005714A382.354286 382.354286 0 0 0 512 896c89.106286 0 171.154286-30.354286 236.306286-81.298286z m43.227428-39.424A382.665143 382.665143 0 0 0 896 512c0-212.077714-171.922286-384-384-384S128 299.922286 128 512c0 101.906286 39.68 194.541714 104.466286 263.277714A247.003429 247.003429 0 0 1 457.142857 630.857143h109.714286a247.04 247.04 0 0 1 224.676571 144.420571zM512 950.857143C269.622857 950.857143 73.142857 754.377143 73.142857 512S269.622857 73.142857 512 73.142857s438.857143 196.48 438.857143 438.857143-196.48 438.857143-438.857143 438.857143z m0-402.285714a128 128 0 1 0 0-256 128 128 0 0 0 0 256z m0 54.857142c-100.992 0-182.857143-81.865143-182.857143-182.857142s81.865143-182.857143 182.857143-182.857143 182.857143 81.865143 182.857143 182.857143-81.865143 182.857143-182.857143 182.857142z" p-id="11397" fill="#58666e"></path></svg></span> <span 
							   class="info_badge
					pull-right"><?php echo theAllViews();?></span>访客总数</li>
					
		  
					<li class="list-group-item text-second"><span class="site-info-icons"> <svg t="1608026243259" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="10645" width="16" height="16"><path d="M106.469376 843.29472" p-id="10646" fill="#58666e"></path><path d="M255.172608 469.248c5.536768-66.035712 33.354752-121.788416 82.65728-167.634944 49.531904-46.060544 107.597824-67.879936 174.558208-67.879936 59.572224 0 112.211968 18.471936 157.934592 55.877632L532.702208 426.759168l363.889664 0L896.591872 63.330304 761.7536 197.712896l-0.923648 0c-72.502272-61.423616-155.620352-92.11904-249.365504-91.892736-102.980608 0.23552-189.78304 34.648064-265.070592 105.284608-74.330112 69.74976-114.525184 156.087296-120.061952 258.143232L255.172608 469.248z" p-id="10647" fill="#58666e"></path><path d="M261.632 827.137024c73.42592 60.489728 157.006848 90.930176 250.755072 90.930176 101.129216 0 189.134848-35.270656 263.681024-104.818688 75.994112-70.838272 114.525184-154.672128 120.072192-257.65376l-128.83968 0c-5.086208 65.57696-32.330752 120.991744-81.738752 166.714368-49.417216 45.717504-107.136 68.773888-173.17376 68.773888-58.647552 0-111.75424-18.422784-159.318016-55.847936L490.683392 598.086656 126.331904 598.086656l0 363.42784L261.632 827.137024z" p-id="10648" fill="#58666e"></path><path d="M916.916224 843.29472" p-id="10649" fill="#58666e"></path></svg></span> <span 
							   class="info_badge
            pull-right"><?php echo timer_stop();?></span>响应耗时</li>	
			
					<!--<script data-no-instant>
						function show_date_time(){window.setTimeout("show_date_time()",1e3);
						var BirthDay=new Date("2018/11/05 00:00:00"),
						today=new Date,timeold=today.getTime()-BirthDay.getTime(),msPerDay=864e5,
						e_daysold=timeold/msPerDay,daysold=Math.floor(e_daysold),
						e_hrsold=24*(e_daysold-daysold),
						hrsold=Math.floor(e_hrsold),
						e_minsold=60*(e_hrsold-hrsold),
						minsold=Math.floor(60*(e_hrsold-hrsold)),
						seconds=Math.floor(60*(e_minsold-minsold));
						span_dt_dt.innerHTML=""+daysold+"天";} 
						show_date_time();
					</script>-->
					<script  type="text/javascript">
					/*var colorStr="";
					var randomArr=['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
					for(var i=0;i<6;i++){
						colorStr+=randomArr[Math.ceil(Math.random()*(15-0)+0)];
					}*/
					var now =new Date(); 
					function StorageTime() { 
						var grt= new Date("11/27/2011 00:00:00");//时间格式：月/日/年  时/分/秒
						now.setTime(now.getTime()+250); 
						years = Math.floor((now - grt ) / 1000 / 60 / 60 / 24 /365);
						days = Math.floor((now - grt ) / 1000 / 60 / 60 / 24 - (years * 365)); 
						hours = Math.floor((now - grt ) / 1000 / 60 / 60 - (24 * Math.floor((now - grt ) / 1000 / 60 / 60 / 24)));
						if(String(hours).length ==1 ){hours = "0" + hours;} 
						minutes = Math.floor((now - grt ) / 1000 /60 - (24 * 60 * Math.floor((now - grt ) / 1000 / 60 / 60 / 24)) - (60 * hours));
						if(String(minutes).length ==1 ){minutes = "0" + minutes;}
						seconds = Math.floor((now - grt ) / 1000 - (24 * 60 * 60 * Math.floor((now - grt ) / 1000 / 60 / 60 / 24)) - (60 * 60 * hours) - (60 * minutes)); 
						if(String(seconds).length ==1 ){seconds = "0" + seconds;}
					/*	if(years!=0){var outputtime=+years+"年"+days+"天"+hours+"时"+minutes+"分"+seconds+"秒";}else{var outputtime=+days+"天"+hours+"时"+minutes+"分"+seconds+"秒";}*/
						if(years!=0){var outputtime=+years+"年"+days+"天"+hours+"时";}else{var outputtime=+days+"天"+hours+"时"+minutes+"分";}
						/*document.getElementById("span_dt_dt").style.color="#"+colorStr;*/
						document.getElementById("span_dt_dt").innerHTML = outputtime;
					} 
					setInterval("StorageTime()",250);
					</script>

				   <li class="list-group-item text-second"><span class="site-info-icons"> <svg t="1608023578385" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8035" width="16" height="16"><path d="M394.46 268.46h-11.38c-17.67 0-32-14.33-32-32V127c0-17.67 14.33-32 32-32h11.38c17.67 0 32 14.33 32 32v109.46c0 17.67-14.33 32-32 32zM341.49 537.41h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.68-14.32 32-32 32zM551.54 537.41h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.68-14.33 32-32 32zM761.59 537.41h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.68-14.33 32-32 32zM341.49 676.28h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.32 32-32 32zM551.54 676.28h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.33 32-32 32zM761.59 676.28h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.33 32-32 32zM341.49 815.15h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.32 32-32 32zM551.54 815.15h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.33 32-32 32zM761.59 815.15h-79.63c-17.67 0-32-14.33-32-32v-11.64c0-17.67 14.33-32 32-32h79.63c17.67 0 32 14.33 32 32v11.64c0 17.67-14.33 32-32 32zM640.92 268.46h-11.38c-17.67 0-32-14.33-32-32V127c0-17.67 14.33-32 32-32h11.38c17.67 0 32 14.33 32 32v109.46c0 17.67-14.33 32-32 32z" fill="#58666e" p-id="8036"></path><path d="M602.62 219.73H496.45c-17.67 0-32-14.33-32-32s14.33-32 32-32h106.17c17.67 0 32 14.33 32 32s-14.33 32-32 32z" fill="#58666e" p-id="8037"></path><path d="M876 916.11H148c-17.67 0-32-14.33-32-32V180.47c0-17.67 14.33-32 32-32h240.77c17.67 0 32 14.33 32 32s-14.33 32-32 32H180v639.64h664V212.47H743.52c-17.67 0-32-14.33-32-32s14.33-32 32-32H876c17.67 0 32 14.33 32 32v703.64c0 17.67-14.33 32-32 32z" fill="#58666e" p-id="8038"></path><path d="M876 390H148c-17.67 0-32-14.33-32-32v-2.7c0-17.67 14.33-32 32-32h728c17.67 0 32 14.33 32 32v2.7c0 17.67-14.33 32-32 32z" fill="#58666e" p-id="8039"></path></svg></span>

					   <span class="info_badge pull-right" id ="span_dt_dt"></span>运行天数</li>

				   <li class="list-group-item text-second"><span class="site-info-icons"> <svg t="1608025711025" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8919" width="16" height="16"><path d="M512 993.92c-227.84 0-423.68-152.32-476.16-369.92-2.56-10.24 3.84-20.48 14.08-23.04 10.24-2.56 20.48 3.84 23.04 14.08 48.64 200.32 229.12 340.48 439.04 340.48 181.76 0 344.96-106.24 416-271.36 4.48-9.6 15.36-14.08 24.96-10.24 9.6 4.48 14.08 15.36 10.24 24.96C886.4 878.72 709.12 993.92 512 993.92z" p-id="8920" fill="#58666e"></path><path d="M41.6 512 123.52 655.36 56.96 627.84 0 672Z" p-id="8921" fill="#58666e"></path><path d="M969.6 423.68c-8.96 0-16.64-5.76-18.56-14.72C902.4 208.64 721.92 68.48 512 68.48c-181.76 0-344.96 106.24-416 271.36-4.48 9.6-15.36 14.08-24.96 10.24-9.6-4.48-14.08-15.36-10.24-24.96 76.8-178.56 254.08-294.4 451.2-294.4 227.84 0 423.68 152.32 476.16 369.92 2.56 10.24-3.84 20.48-14.08 23.04C972.8 423.04 970.88 423.68 969.6 423.68z" p-id="8922" fill="#58666e"></path><path d="M982.4 512 900.48 368.64 967.04 396.16 1024 352Z" p-id="8923" fill="#58666e"></path><path d="M463.36 816c-3.2 0-6.4-0.64-8.96-2.56-8.32-4.48-12.16-14.08-8.96-22.4l70.4-225.28L410.24 565.76c-10.88 0-19.2-8.32-19.2-19.2l0-49.92c0-3.84 1.28-7.68 3.2-10.88l179.84-268.8c5.12-7.68 14.72-10.24 23.04-7.04 8.32 3.2 13.44 12.16 11.52 21.12l-46.72 246.4 108.16 0c10.88 0 19.2 8.32 19.2 19.2l0 49.92c0 4.48-1.28 8.96-4.48 12.16l-207.36 250.24C474.24 813.44 469.12 816 463.36 816zM429.44 527.36l112 0c6.4 0 12.16 3.2 15.36 7.68 3.84 5.12 4.48 11.52 2.56 17.28l-49.28 157.44 140.8-169.6 0-23.68L539.52 516.48c-5.76 0-10.88-2.56-14.72-7.04-3.84-4.48-5.12-10.24-3.84-16l33.28-176.64L429.44 502.4 429.44 527.36z" p-id="8924" fill="#58666e"></path></svg></span> <span

							   class="info_badge

				   pull-right"><?php echo date('m 月 d 日', $this->modified);?></span>最后活动</li>
                </ul>
        </div>

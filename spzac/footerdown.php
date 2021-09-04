<!-- 好久不见 -->
<div class="chenyuyc">
    <div class="footer-fav">
      <div class="container">
        <div class="fl site-info">
          <h2><a href="https://chenyu.me/" target="_blank">錯愛涅槃</a></h2>
          <div class="site-p">
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
              <p>Love2wind.CN【白茶清欢无别事，我在等风也等你】</p>
              <p>风风雨雨<span id ="span_dt_dt"></span>，你是第<?php echo theAllViews();?>位相遇的小伙伴</p>
          </div>
        </div>
        <div class="fr site-fav">
          <a href="https://love2wind.cn/" class="btn btn-fav btn-orange">Ctrl+D收藏本站</a></div>
        <div class="site-girl">
            <div class="girl fl"> <i class="thumb " style="background-image:url(https://cdn.jsdelivr.net/gh/cy-j/chenyu/img/cyxy.png);"></i> </div>
            <div class="girl-info hide_md">
              <h4>绿水本无忧，因风皱面</h4>
              <h4>青山原不老，为雪白头</h4>
            </div>
        </div>
      </div>
    </div>
</div>
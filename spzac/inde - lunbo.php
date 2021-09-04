 <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/love2wind/blogcdn@v3.0/spzac/css/swiper.min.css">
<style type="text/css">
   .Swiper_bl{
    background-color: white;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid rgba(133,153,171,0.2);
    -webkit-box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
    box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
   
   }
    .swiper-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
		
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
	@media screen and (max-width: 767px){
    .swiper-slide img{object-fit: cover; width: 100%; height: 100%;}
	}

/*轮播图*/

.right,.left {
    margin-top: -20px;
}

#banner {
    width: 100%;
    height: 400px;
    margin:0 auto;
    border-radius: 5px;
    overflow:hidden;
    position: relative;
    z-index: 1;
}
#banner ul {
    width: 100%;
    height: 100%;
}

#banner ul li{
    width: 100%;
    height: 100%;
    opacity:0;
   position: absolute;
   left: 0;
   top: 0;
}
#banner ul li.curr{
    opacity:1;
    /*display:block;*/

}
.icon{
    position:absolute;
    left:0px;
    bottom:8px;
    width:100%;
    text-align:center;
}
.icon ol li{
    display:inline-block;
    list-style:none;
    width:10px;
    height:10px;
    background:#000;
    border-radius:50%;
    color:#fff;
    text-align:center;
    cursor:pointer;
}
.icon ol li.first{

    background:#fff;
}
.btn{
     display:none;
     margin-top: -25px;
}
.btn div{
    position:absolute;
    top:50%;
    width:50px;
    height:50px;
    background:rgba(0,0,0,0.2);
    color:#fff;
    text-align:center;
    line-height: 50px;
    border-radius: 50%;
    cursor:pointer;
}
.btn div.left{
    left:0;
}
.btn div.right{
    right:0;
}
/*轮播图*/



</style>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<div class="col-md-12 Swiper_bl">
    <div class="swiper-container ">
        <div class="swiper-wrapper">
        <div id="banner">
            <div id="banner-move">
            <ul>
                <!-- 演示放图片不太方便，所以div上色呀 -->
<!--
                <li class="curr"><img src="images/1.jpg" width="100%" height="100%" alt="轮播"></li>
                <li><img src="images/2.jpg" width="100%" height="100%" alt="轮播"></li>
                <li><img src="images/3.jpg" width="100%" height="100%" alt="轮播"></li>
                <li><img src="images/4.jpg" width="100%" height="100%" alt="轮播"></li>
                <li><img src="images/5.jpg" width="100%" height="100%" alt="轮播"></li>
                <li><img src="images/6.jpg" width="100%" height="100%" alt="轮播"></li> -->
                <li class="curr"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="icon">
                <ol>
                    <li class="first"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
            <div class="btn">
                <div class="left"> < </div>
                <div class="right"> > </div>
            </div>

            </div>
        </div>
	</div>
	</div>
</div>
<script type="text/javascript">

/*jquery的轮播图*/
    var index=0;
    var $icons=$(".icon ol li");
    var $imgs=$("#banner ul li");
    //右边按钮点击切换
    $(".right").click(function(){
        index++;
        if(index>5)index=0;
        play();
    });

    //左边按钮点击切换
    $(".left").click(function(){
        index--;
        if(index<0)index=5;
        play();
    });

    //页面联动封装
    function play(){
        //选择当前的index然后添加curr类，然后选择同级的元素，移出curr,下面的一句也是一样的道理
        $imgs.eq(index).addClass('curr').siblings().removeClass('curr');
        $icons.eq(index).addClass('first').siblings().removeClass('first');
    }
    //移动到谁的上面，就传入谁的index值
    $icons.hover(function(){
        index=$(this).index();
        play();
    });

    //鼠标移动实现页面停止效果
    $("#banner").hover(function(){
        $(".btn").show();
        clearTimeout(timer);
    },function(){
        $(".btn").hide();
        autoplay();
    });
    //开启自动轮播
    autoplay();
    function autoplay()
    {
        timer=setInterval(function(){
        index++;
        if(index>5)index=0;
            //开启播放
            play();
        },2000);
    }


/*jquery的轮播图*/

</script>
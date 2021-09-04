<style type="text/css">

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

/* 使用图片请删除下列代码 */
li:nth-child(1){
    background: pink;
}
li:nth-child(2){
    background: #ccc;
}
li:nth-child(3){
    background: black;
}
li:nth-child(4){
    background: green;
}
li:nth-child(5){
    background: yellow;
}
li:nth-child(6){
    background: green;
}
/* 使用图片请删除下列代码 */

</style>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
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
<?php
/**
 * Spzac版本,作品文章类 typecho 主题，简约、干净、精致、响应式。   
 *
 * @package Spzac Theme
 * @author 小灯泡设计
 * @version 1.0 (免费版)
 * @link https://www.dpaoz.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

/** 文章置顶 */
$sticky = $this->options->zhiduid; //置顶的文章cid，按照排序输入, 请以半角逗号或空格分隔
if($sticky && $this->is('index') || $this->is('front')){
    $sticky_cids = explode(',', strtr($sticky, ' ', ','));//分割文本 
    $sticky_html = "<span class='badge arc_v5'>置顶</span>"; //置顶标题的 html
    $db = Typecho_Db::get();
    $pageSize = $this->options->pageSize;
    $select1 = $this->select()->where('type = ?', 'post');
    $select2 = $this->select()->where('type = ? && status = ? && created < ?', 'post','publish',time());
    //清空原有文章的列队
    $this->row = [];
    $this->stack = [];
    $this->length = 0;
    $order = '';
    foreach($sticky_cids as $i => $cid) {
        if($i == 0) $select1->where('cid = ?', $cid);
        else $select1->orWhere('cid = ?', $cid);
        $order .= " when $cid then $i";
        $select2->where('table.contents.cid != ?', $cid); //避免重复
    }
    if ($order) $select1->order(null,"(case cid$order end)"); //置顶文章的顺序 按 $sticky 中 文章ID顺序
    if ($this->_currentPage == 1) foreach($db->fetchAll($select1) as $sticky_post){ //首页第一页才显示
        $sticky_post['sticky'] = $sticky_html;
        $this->push($sticky_post); //压入列队
    }
$uid = $this->user->uid; //登录时，显示用户各自的私密文章
    if($uid) $select2->orWhere('authorId = ? && status = ?',$uid,'private');
    $sticky_posts = $db->fetchAll($select2->order('table.contents.created', Typecho_Db::SORT_DESC)->page($this->_currentPage, $this->parameter->pageSize));
    foreach($sticky_posts as $sticky_post) $this->push($sticky_post); //压入列队
    $this->setTotal($this->getTotal()-count($sticky_cids)); //置顶文章不计算在所有文章内
}

 ?>
	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row">
				<!-- header -->
	            <?php $this->need('user - sider.php'); ?>
	            <!-- end header -->
 <?php if($this->is('index') && $this->_currentPage == 1): ?>
<!-- swiper -->
<div class="col-12 col-md-7 col-lg-8 col-xl-9">
		<!--	<?php //$this->need('index - hpian.php'); ?>-->
			<div class="row pagecontent">
						

<?php 
$lunbotop = $this->options->imghdp;
$hang = explode(",", $lunbotop);
$n=count($hang);
$html="";
$j=0;                      
for($i=0;$i<$n;$i++){
$j++;
$this->widget('Widget_Archive@lunbotop'.$i, 'pageSize=1&type=post', 'cid='.$hang[$i])->to($jis);
if($i==0){$no=" sx_no";}else{$no="";}
$str = $jis->fields->img;
if($jis->fields->feiy){
$slei = '<div class="post__actions-btn post__actions-btn--blues"><span>'.$jis->fields->feiy.'</span></div>';
}
else{
$slei = '<div class="post__actions-btn post__actions-btn--blue"><span>免费</span></div>';
}

$html=$html.'<div class="col-12 col-sm-6 col-md-12 col-lg-4 pagepost tran col-lv">
<div class="profile">
<div class="profile__logo">
<a href="'.$jis->permalink.'"><img src="'.$str.'" alt=""></a>
</div>
<div class="profile__wrap">
<h2 class="profile__title"><a href="'.$jis->permalink.'">'.$jis->title.'</a></h2>
</div>
<div class="profile__actions">
<div class="post__location">
<svg t="1608185578366" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3169" width="16" height="16"><path d="M576.20909827 433.29207309L518.2137837 315.23018272l-58.51312987 118.57970567c-3.10689185 5.69596839-8.80286025 9.83849086-15.01664396 10.87412148l-131.00727307 19.15916643 94.76020147 92.17112494c4.66033778 4.66033778 6.73159902 11.3919368 5.6959684 17.60572049l-22.26605828 130.48945777 117.02625976-61.62002172c3.10689185-1.55344592 6.2137837-2.07126124 9.32067555-2.07126125s6.2137837 0.51781531 9.32067555 2.07126125l117.02625977 61.62002172-22.26605827-130.48945777c-1.03563061-6.73159902 1.03563061-12.94538272 5.69596839-17.60572049l94.76020147-92.17112494-131.00727308-19.15916643c-6.73159902-1.03563061-12.42756741-5.17815309-15.53445926-11.39193678z" fill="#45C01A" p-id="3170"></path><path d="M512 17.48638025c-270.29959111 0-489.33546667 219.03587555-489.33546667 489.33546666s219.03587555 489.33546667 489.33546667 489.33546667 489.33546667-219.03587555 489.33546667-489.33546667-219.03587555-489.33546667-489.33546667-489.33546666z m267.19269925 446.35679605l-116.50844443 113.40155259 27.44421135 160.00493036c1.55344592 7.76722963-1.55344592 15.01664395-7.76722964 19.67698173-3.62470717 2.58907653-7.76722963 3.62470717-11.90975208 3.62470717-3.10689185 0-6.2137837-0.51781531-9.32067556-2.07126124L517.69596839 682.87905185l-143.43484049 75.60103506c-6.73159902 3.62470717-15.01664395 3.10689185-21.23042765-1.55344593-6.2137837-4.66033778-9.32067555-11.9097521-7.76722964-19.67698173l27.44421136-160.00493036-115.99062914-113.40155259c-5.69596839-5.17815309-7.24941431-13.46319803-5.17815308-20.71261235 2.58907653-7.24941431 8.80286025-12.42756741 16.05227456-13.46319803l160.52274569-23.30168889 71.9763279-145.50610172c3.62470717-6.73159902 10.35630617-11.3919368 18.1235358-11.39193679s14.49882864 4.14252247 18.1235358 11.39193679l71.97632791 145.50610172 160.52274568 23.30168889c7.76722963 1.03563061 13.98101333 6.2137837 16.05227456 13.46319803 2.07126124 7.24941431 0 15.53445925-5.6959684 20.71261235z" fill="#45C01A" p-id="3171"></path></svg> 
<span> '.$jis->fields->leix.'</span>
</div><div class="post__actions">
'.$slei.'
</div>
</div>
</div>
<div class="top-num top-'.$j.'"><span><i> NO.'.$j.'</i></span></div>
</div>';

}
echo $html;
                      
?>
</div>
</div>
<!-- end swiper -->
<?php endif; ?>


 
			

   
                 <?php if($this->is('index') && $this->_currentPage == 1): ?>
                <!-- user -ping -->
                <?php $this->need('assets/user - ping.php'); ?>
				<!-- end user -ping -->
                <?php endif; ?>                


				<div class="col-12 col-md-7 col-lg-8 col-xl-6">

                   <!-- view big -->
	    
                   <ul class="nav nav-tabs main__nav" id="main__nav" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="btnon" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">最新文章</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="btnoff" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">关于我们</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="btnoff" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">常见问题</a>
						</li>                      
					</ul>
                   
<i class="bg-primary"></i>

                    <div class="tab-content">
					<div class="tab-pane fade show active pagecontent" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<!-- post -->
										<?php $this->need('index - new.php'); ?>

					<?php $this->need('post - list.php'); ?>
					<!-- end post -->
                    </div>


					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
							
							<div class="main__box">
								<h3 class="main__box-title">About</h3>
								<p class="main__box-text">已经忘了什么时候开始用错爱涅槃做网名了，但从一开始就用 love2wind 作为ID，毕竟已经过了很长很长的时间了。本人爱好很多，多到好像什么都会点，又什么都不会（囧）！从很早开始就折腾网站，从论坛到博客，DIscz、wordpress、还有很多换七八糟的，但都没能坚持下来，博客算是时间长的，断断续续也有快十几年了，就这样吧，也不知道要介绍些什么？随便敲点字的样子（捂脸）。</p>
								<p class="main__box-text">I have forgotten when I started using the wrong love Nirvana as my screen name, but I used love2wind as the ID from the beginning. After all, a long, long time has passed. I have a lot of hobbies, so many that seem to be good at everything, but nothing at all (囧)! I’ve been tossing about websites from very early on, from forums to blogs, DIscz, wordpress, and many other things, but they haven’t been able to stick to it. The blog is long, and it’s been on and off for more than ten years, so be it. , Don’t know what to introduce? Just type some words (cover your face), </p>
							</div>
						
                            
							
							<div class="main__box">
								<h3 class="main__box-title">关注我们</h3>
								<div style="align:center;text-align:center;margin:auto;"><table style="text-align:center;border: 0;padding: 0;margin:0 auto;">
                    <tbody style="align:center;text-align:center;border:0;">
                        <tr>
                            <td style="text-align:center;border: 0;padding: 0 5px;">
                                <img src="https://imgsrc.xyz/images/2020/12/15/685b56dbe9a6a6b0252fa03513b39456.png"
                                alt="官方QQ群" style="width:140px;">
                                <p style="text-align:center;">
                                    官方QQ群
                                </p>
                            </td>
                            <td style="text-align:center;border: 0;padding: 0 5px;">
                                <img src="https://imgsrc.xyz/images/2020/12/15/10b245b144c658cd53821082d02dfdc5.png"
                                alt="我的微信号" style="width:140px;">
                                <p style="text-align:center;">
                                    我的微信号
                                </p>
                            </td>
                            <td style="text-align:center;border: 0;padding: 0 5px;">
                                <img src="https://imgsrc.xyz/images/2020/12/15/e61c8fdfb90f4c10a60bd989cccdf06e.png"
                                alt="微信公众号" style="width:140px;">
                                <p style="text-align:center;">
                                    微信公众号
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table></div>
							</div>
							

							
						</div>

						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
<script language='javascript'>
            function checkform(){
            	if(document.forma.username.value==''){
            		alert('请填写您的姓名!!');
            		document.forma.username.focus();
            		return false;
            	}
            	if(document.forma.title.value==''){
            		alert('请填写您的联系电话!!');
            		document.forma.title.focus();
            		return false;
            	}   
			  alert('提交成功!!');             
            	return true;             
            }
</script>
							<!-- form --><!--
                                <form action="" method="post" class="input-form form" name=forma onsubmit='return checkform();'>
							
								<div class="row">
									<div class="col-12">
										<h2 class="form__title">留个小纸条</h2>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group">
											<label for="login" class="form__label">昵称:</label>
											<input name="username" id="login" type="text" class="form__input" placeholder="昵称">
										</div>
									</div>

									<div class="col-12 col-lg-6">
										<div class="form__group">
											<label for="email" class="form__label">联系:</label>
											<input name="title" id="email" type="text" class="form__input" placeholder="联系">
										</div>
									</div>

									

									<div class="col-12 ">
										<div class="form__group">
											<label for="lastname" class="form__label">留言内容:</label>
											<textarea name="content" id="text" class="form__textarea"></textarea>
										</div>
									</div>

									<div class="col-12">
										<button class="form__btn" type="submit" name="dosubmit"><span>Send</span></button>
									</div>
								</div>
							</form>
							 end form -->
							<?php
     
    //留言板的思路：1.先创建一个文件名，方便于存放写入的内容
    // 2.将表单中的内容赋值给一个变量
    //3.判断文件是否存在，将用户输入的值写进变量，打开文件的是时候注意选择对文件访问的操作
    //4.读取文件的内容,关闭文件    
    
    $filename = "message.txt";//创建一个文件的名字     
    //如果用户提交了， 就写入文件， 按一定格式写入
    if(isset($_POST['dosubmit'])) {
    //字段的分隔使用||, 行的分隔使用[n]
    $mess = "姓名：{$_POST['username']}，".time()."，联系电话：{$_POST['title']}，留言内容：{$_POST['content']}[n]";   
      
    $mess = trim($mess);  //清理空格  

    $mess = strip_tags($mess);   //过滤html标签  

    $mess = htmlspecialchars($mess);   //将字符内容转化为html实体  

    $mess = addslashes($mess);  //防止SQL注入   
     
    writemessage($filename, $mess);//向文件写进内容     
    }     
    if(file_exists($filename)) {//判断文件 是否存在
    readmessage($filename);//读取文件的函数
    }
     
    function writemessage($filename, $mess) {
    $fp = fopen($filename, "a");//在尾部执行写的操作，且不删除原来的文件内容
    fwrite($fp, $mess);//写入文件     
    fclose($fp);//关闭文件     
    header('location:/');     
    }     
    function readmessage($filename) {
    $mess = file_get_contents($filename);
    $mess = rtrim($mess, "[n]");     
    $arrmess = explode("[n]", $mess);
     
   // foreach($arrmess as $m) {
   // list($username, $dt ,$title, $content) = explode("，", $m);
   // $time = date("Y-m-d H:i",$dt);
   // echo "<li>".$time."<br/> {$username} {$title} {$content}</li>";
   // }     
    }
     
    ?>
                                                                                               
                                                                                               
                            <div class="main__box">
                                                  
								<h3 class="main__box-title">FAQ</h3>
								<div class="sidebox__faq">
                                <h5>1、问题</h5>
                                <p>......</p>
                                </div>
                                                         
                                <div class="sidebox__faq">
                                <h5>2、咨询</h5>
                                <p>有问题咨询的时候，希望可以一个一个提出，不要一下子说很多，脑子很容易短路跟不上节奏…… </p>
                                </div>
                                                        
                                <div class="sidebox__faq">
                                <h5>3、建议</h5>
                                <p>有好的思路，想法都可以提出来，欢迎一起讨论……</p>
                                </div>
                                                         
							</div>                                                
                                                                                               
                                                                                               
                                                                                               
						</div>
                     </div>

					 <!-- end big -->


					<!-- view more -->
					<?php $this->pageNav('<', '>', 3, '...', array('wrapTag' => 'div', 'wrapClass' => 'page-navigator ', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'nexts',)); ?>				
					<!-- end view more -->
                                                         
                  
                                                         
                                                         
				</div>

				<?php $this->need('info - sider.php'); ?>
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php $this->need('footer.php'); ?>
	<!-- end footer -->

<script>

$(document).ready(function() {
	$("#btnoff").click(function() {
		$(".page-navigator").hide();
	})
    $("#btnon").click(function() {
		$(".page-navigator").show();
	})                       
});

</script>  
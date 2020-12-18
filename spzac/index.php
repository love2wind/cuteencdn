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
<i class="icon ion-ios-navigate"></i>
<span>'.$jis->fields->leix.'</span>
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
							<a class="nav-link active" id="btnon" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">文章推荐</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="btnoff" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">关于我们</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="btnoff" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">联系留言</a>
						</li>                      
					</ul>
                   

                    <div class="tab-content">
					<div class="tab-pane fade show active pagecontent" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<!-- post -->
					<?php $this->need('post - list.php'); ?>
					<!-- end post -->
                    </div>


					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
							
							<div class="main__box">
								<h3 class="main__box-title">About</h3>
								<p class="main__box-text">在浏览设计，运营，优化，建站等资料文章时，感觉到很多新手都碰到各种各样的问题，同时网上真正分享经验比较少。我何不一边学习，一边分享我积累的经验呢。
所以建立了这个网站。
See you in BLOG…
</p>
								<p class="main__box-text">When browsing design, operation, optimization, website building and other materials and articles, I feel that many novices are confronted with various problems, at the same time, there is less real experience sharing online. Why don't I share my experience while learning.

So we set up this website.

See you in BLOG…</p>
							</div>
						
                            
							
							<div class="main__box">
								<h3 class="main__box-title">持续的过程</h3>
								<p class="main__box-text">我认为学习是一个持续的过程 ，不可能一劳永逸，所以总会做出一些新鲜东西给你看。</p>
								<p class="main__box-text">I think learning is a continuous process, it can't be once and for all, so there will always be something new to show you.</p>
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
							<!-- form -->
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
							<!-- end form -->
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
                                                  
								<h3 class="main__box-title">FAQ 常见小问题</h3>
								<div class="sidebox__faq">
                                <h5>主题模板相关问题</h5>
                                <p>本站相关的主题问题都可以随时欢迎咨询，在线咨询or留言咨询都会尽快处理解决，免费的主题因为易用性和完善性都略有欠缺，不一定会及时更新和解决，望请谅解</p>
                                </div>
                                                         
                                <div class="sidebox__faq">
                                <h5>问题咨询类</h5>
                                <p>有问题咨询的时候，希望可以一个一个提出，不要一下子说很多，脑子很容易短路跟不上节奏…… </p>
                                </div>
                                                        
                                <div class="sidebox__faq">
                                <h5>一个好的建议</h5>
                                <p>有好的思路，想法都可以提出来，有能力的话，会尽快完善嵌入到主题程序里面，但……最好是围绕优化推广和极简的访问用户体验上的，欢迎一起讨论……</p>
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
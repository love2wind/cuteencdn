<?php

/**
* 友情链接页
*
* @package custom
*/

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

 $this->need('header.php');
?>



	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row">
              
				<!-- header -->
               <?php $this->need('user - sider.php'); ?>
	            <!-- end header -->

               <div class="col-12 col-md-7 col-lg-8 col-xl-9 author_one">

                   <!-- view big -->

                   

                    <div class="tab-content">
					<div class="tab-pane fade show active pagecontent" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<!-- post --> 
                      
                                          
                    <div class="main__box">								                        
<!--友情链接设置-->
                      
<?php $this->content(); ?>
<script>
(function(){
    let a =document.getElementById("flinks");
    if(a){
        let ns = a.querySelectorAll("li");
        let nsl = ns.length;
        let str ='<div class="post-lists"><div class="post-lists-body" id ="flinksH">';
        let bgid = 0;
         const bgs =["bg-blue","bg-purple","bg-green","bg-yellow","bg-red","bg-orange"];
        for(let i = 0;i<=nsl-4;i+=4){
           bgid = Math.floor(Math.random() * 6);
            str += (`<div class="post-list-item"><div class="post-list-item-container "><div class="item-label ${bgs[bgid]}"><div class="item-title"><a target="_blank" href="${ns[i+1].innerText}">${ns[i].innerText}</a></div><div class="item-meta clearfix"><div class="item-meta-ico bg-ico-book"style="background: url(${ns[i+2].innerText}) no-repeat;background-size: 40px auto;"></div><div class="item-meta-date">${ns[i+3].innerText}</div></div></div></div></div>`);
        }
        str+='</div></div><style></style>';
        let n1 = document.createElement("div");
        n1.innerHTML = str;
        a.parentNode.insertBefore(n1,a);
        a.style="display: none;";
    }else{
        console.log('No such id "flinksH"');
    }
}())
 </script>                      
<!--友情链接设置-->   
                      
                    </div>
							
                                             
                             <!--积分规则-->
                      
								<div class="main__box">
									<h3 class="main__box-title">
										友情申请
									</h3>
									<div class="bg_cl">
										<p class="main__box-text">
											需要添加友情链接请在下方留言。
										</p>
										<p class="main__box-text">
											<b>上榜条件：</b>
										</p>
										<p class="main__box-text">
											1.申请友情链接前，请先在贵站做上本站的友情链接；
										</p>
										<p class="main__box-text">
											2.有一定的内容，且内容健康丰富，并基本建设完成；
										</p>
										<p class="main__box-text">
											3.按照以下格式留言，通过后立即添加。
										</p>
										<p class="main__box-text">格式如下：
										</p> 
										<p class="main__box-text">名称：涅槃博客
										</p> 
										<p class="main__box-text">描述：记录生活、分享世界
										</p> 
										<p class="main__box-text">链接：https://love2wind.cn/
										</p> 
										<p class="main__box-text">头像：https://pic.downk.cc/item/5fdc8dcb3ffa7d37b3985e27.png
										</p>
									</div>
									<br/>
									<h3 class="main__box-title">
										我要申请
									</h3>
									<!-- comments --> 
									<?php $this->need('comments.php'); ?>
									<!-- end comments -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
    <div class="typecho-login" style="display: none;"></div>
	<!-- end main content -->


<!-- footer -->
<?php $this->need('footer.php'); ?>
<!-- end footer -->

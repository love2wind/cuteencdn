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
								<h3 class="main__box-title">友情链接</h3>
								
                              <div class="bg_cl">  
                                 <!--s-->
<p class="main__box-text">本站仅免费提供友情链接交换平台服务（申请联系站长QQ）上榜条件：</p>
                               <p class="main__box-text">1，必须为本站的主题，并且做有本站的友情链接</p>
                               <p class="main__box-text">2，有一定的内容，且内容健康丰富，并基本建设完成</p>
                               <p class="main__box-text">3，申请友情链接前，请先在贵站做上本站的友情链接  </p>
                               <p class="main__box-text">切记必须要本站的主题模板才行，不限行业，优秀的部分主题将在本站进行推荐。</p>
                                  <!--e-->
                                  
                               </div> 
                               
                               <br/><br/>
                               <h3 class="main__box-title">我要留言</h3>
                               <?php $this->need('comments.php'); ?>
                                 
							</div>
                      
                      
                             <!--积分规则-->
                           
                            
                            
                            
                      
                      
					<!-- end post -->
                    </div>


                      
                      
                      
                     </div>

					 <!-- end big -->
              </div>
              
              
              
          </div>
		</div>
	</main>
    <div class="typecho-login" style="display: none;"></div>
	<!-- end main content -->


<!-- footer -->
<?php $this->need('footer.php'); ?>
<!-- end footer -->

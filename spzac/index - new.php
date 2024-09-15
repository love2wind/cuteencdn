<style type="text/css">
.faq {
  position: relative;
  margin-bottom: 20px;
  -webkit-box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
  box-shadow: 0 2px 26px 0 rgba(133,153,171,0.1);
  padding: 0 20px 10px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  background-color: #fff;
  border: 1px solid rgba(133,153,171,0.2);
}
.faq__box {
  margin-bottom: 15px;
}
.faq__box h3 {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -moz-box-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  color: #364e65;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 15px;
  height: 60px;
  border-bottom: 1px solid rgba(133,153,171,0.2);
}
.seoxue .faq__box ul li{
  display: block;
}
.seoxue .post__views{
      float: right;
}

.l_ase{
  transition: all 0.5s ease-in-out;
  cursor: pointer;
}
.l_ase:hover{
  transform: translateX(10px);
}
.faq__box ul li {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -webkit-flex-direction: row;
  -moz-box-direction: row;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  color: #364e65;
  font-size: 14px;
  line-height: 30px;
  height: 30px;
  position: relative;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.faq__box ul li i{
     padding-right: 8px;
}
.faq__box ul li a {
  color: #364e65;
}
.faq__box ul li a:hover {
  color: #fa7268;
}
.faq__box ul li:last-child {
  margin-bottom: 0;
}
.i_fuei{
  color: #f30;
}
.i_free{
  color: #8599ab !important;
}
.web_lis li{ border-bottom: 1px dashed #eee; padding-bottom: 5px; }

.web_lis li span{color:#fff;}

.index_lis li{ display: block !important; }

.index_lis .post__views{ float: right;}

.index_lis .i_fuei{ font-size: 12px;color: #8599ab; }
</style>
<div class="faq">
	<div class="row">
		<div class="col-12">
			<div class="faq__box">
				<h3>
					热门教程
				</h3>
				<ul class="index_lis web_lis">
					<?php $this->widget('Widget_Archive@indexnew', 'pageSize=8&type=category', 'mid=602')->to($categoryPosts); ?>
							<?php while($categoryPosts->next()): ?>
					<li class="l_ase">
						<a href="<?php $categoryPosts->permalink(); ?>">
							<span>
								<svg t="1608867802275" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3043" width="18" height="18"><path d="M686.08 938.666667H337.493333C186.88 938.666667 85.333333 841.770667 85.333333 697.173333V327.253333C85.333333 182.613333 186.88 85.333333 337.493333 85.333333h348.586667C837.12 85.333333 938.666667 182.613333 938.666667 327.253333v369.92c0 144.597333-101.546667 241.493333-252.586667 241.493334z m-77.226667-458.666667H337.92c-17.92 0-32 14.506667-32 32 0 17.92 14.08 32 32 32h270.933333l-105.813333 105.386667c-5.973333 5.973333-9.386667 14.506667-9.386667 22.613333 0 8.064 3.413333 16.213333 9.386667 22.613333 12.373333 12.373333 32.853333 12.373333 45.226667 0l160.853333-160c11.946667-11.946667 11.946667-33.28 0-45.226666l-160.853333-160a32.170667 32.170667 0 0 0-45.226667 0c-12.373333 12.8-12.373333 32.853333 0 45.653333l105.813333 104.96z" fill="#200E32" p-id="3044"></path></svg>
							</span>
							<?php $categoryPosts->title(); ?>
						</a>
						<div class="post__views" style="float: right;">
							<span class="i_fuei">
								<?php Postviews($this); ?> 阅读
							</span>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
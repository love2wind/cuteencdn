<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
$db = Typecho_Db::get();
$sjdq=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:spzac'));
$ysj = $sjdq['value'];
if(isset($_POST['type']))
{ 
if($_POST["type"]=="备份模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:spzacbf'))){
$update = $db->update('table.options')->rows(array('value'=>$ysj))->where('name = ?', 'theme:spzacbf');
$updateRows= $db->query($update);
echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
if($ysj){
     $insert = $db->insert('table.options')
    ->rows(array('name' => 'theme:spzacbf','user' => '0','value' => $ysj));
     $insertId = $db->query($insert);
echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}
}
}
if($_POST["type"]=="还原模板数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:spzacbf'))){
$sjdub=$db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:spzacbf'));
$bsj = $sjdub['value'];
$update = $db->update('table.options')->rows(array('value'=>$bsj))->where('name = ?', 'theme:spzac');
$updateRows= $db->query($update);
echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
<?php
}else{
echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
}
}
if($_POST["type"]=="删除备份数据"){
if($db->fetchRow($db->select()->from ('table.options')->where ('name = ?', 'theme:spzacbf'))){
$delete = $db->delete('table.options')->where ('name = ?', 'theme:spzacbf');
$deletedRows = $db->query($delete);
echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
?>    
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
<script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
<?php
}else{
echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
}
}
    }
 
  
    /**
	 *  设置样式+面板
	 */	 
	echo '<link rel="stylesheet" href="/usr/themes/spzac/assets/css/setting.spzac.css"><link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Noto+Serif+SC:300&display=swap" rel="stylesheet"><script src="//cdn.staticfile.org/jquery/3.4.1/jquery.min.js"></script>';

	echo '<div class="miracles-pannel">
	<h1>Spzac free 设置面板</h1>
	<p>spzac主题为博客、自媒体、资讯类的网站设计开发，自适应兼容手机、平板设备的团队，工作室门户主题，精心打磨的一处处细节。只为让您的站点拥有速度与优雅兼具的极致体验。
</p>
    <hr>
    
   	  <form class="protected" action="?MiraclesBackup" method="post">
        <input type="submit" name="type" class="miracles-backup-button backup" value="备份模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button recover" value="还原模板数据" />&nbsp;&nbsp;
	    <input type="submit" name="type" class="miracles-backup-button delete" value="删除备份数据" />
	  </form>
      
	</div>';

     /**
	 *  留言面板
	 */	   
  
    
          
    $mess = file_exists("./../message.txt") ? file_get_contents("./../message.txt") : NULL;   //把内容读入一个字符串中
    if($mess){
    $mess = rtrim($mess, "[n]");     
    $arrmess = explode("[n]", $mess);   
    echo '<div class="miracles-pannel"><ul>';
    foreach($arrmess as $m) {
    list($username, $dt ,$title, $content) = explode("，", $m);
    $time = date("Y-m-d H:i",$dt);
   
    echo "<li>".$time." {$username} {$title} {$content}</li>";    
    }  
    echo '</ul>';  
    echo '<form class="protected" action="?Miraclesliu" method="post">
        <input type="submit" name="liutype" class="miracles-backup-button backup" value="清空留言" />	   
	  </form></div>';
      }      

          if(isset($_POST['liutype'])){ 
    if($_POST["liutype"]=="清空留言"){
       file_put_contents('./../message.txt','');
      echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
 ?><a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div><script language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script><?php    
    }}
   
  
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('<h2 id="div-1">常规设置 Info</h2><hr>站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个logo,留空则会显示网站文字标题'));
    $form->addInput($logoUrl);	

	$blogme = new Typecho_Widget_Helper_Form_Element_Text('blogme', NULL, NULL, _t('博主头像图片'), _t('在这里填入你的头像图片地址，http://www.yourblog.com/image.png,支持 https:// 或 //'));
    $form->addInput($blogme);

	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon地址'), _t('一般为http://www.yourblog.com/image.png,支持 https:// 或 //,留空则不设置favicon'));
    $form->addInput($favicon);  


    $imghdp = new Typecho_Widget_Helper_Form_Element_Text('imghdp', NULL, NULL, _t('<hr><h2  id="div-2">首页设置 Set</h2><hr>首页6个推荐位置'), _t(''));
    $form->addInput($imghdp);

    $nolist = new Typecho_Widget_Helper_Form_Element_Text('nolist', NULL, NULL, _t('首页不显示某分类'), _t('仅用在首页，首页不显示某分类，填入<b style="color: red;">缩略名</b>'));
    $form->addInput($nolist); 


	$zhiduid = new Typecho_Widget_Helper_Form_Element_Text('zhiduid', NULL, NULL, _t('置顶文章ID'), _t('在这里填入置顶文章ID,输入1~2个文章ID,设置太多,会影响美观，推荐1,2个最为合适'));
    $form->addInput($zhiduid);



    $adimg = new Typecho_Widget_Helper_Form_Element_Text('adimg', NULL, NULL, _t('<h2 id="div-3">广告设置 Info</h2><hr>首页列表广告'), _t('第2个位置,在这里填入你广告图片链接代码：&lt;a rel="nofollow" target="_blank" href=""&gt; &lt;img src="图片链接"&gt;  &lt;/a&gt;'));
    $form->addInput($adimg);
  
    $adimgb = new Typecho_Widget_Helper_Form_Element_Text('adimgb', NULL, NULL, _t('首页列表广告'), _t('第8个位置，在这里填入你广告图片链接代码：&lt;a rel="nofollow" target="_blank" href=""&gt; &lt;img src="图片链接"&gt;  &lt;/a&gt;'));
    $form->addInput($adimgb);


	$txtadimg = new Typecho_Widget_Helper_Form_Element_Text('txtadimg', NULL, NULL, _t('文章上方广告'), _t('在这里填入你广告图片链接代码：&lt;a rel="nofollow" target="_blank" href=""&gt; &lt;img src="图片链接"&gt;  &lt;/a&gt;'));
    $form->addInput($txtadimg);

	$txtaddown = new Typecho_Widget_Helper_Form_Element_Text('txtaddown', NULL, NULL, _t('文章下方底部广告'), _t('在这里填入你广告图片链接代码：&lt;a rel="nofollow" target="_blank" href=""&gt; &lt;img src="图片链接"&gt;  &lt;/a&gt;'));
    $form->addInput($txtaddown);

  


	$webcss = new Typecho_Widget_Helper_Form_Element_Textarea('webcss', NULL, NULL, _t('<h2 id="div-4">风格样式 Info</h2><hr>自定义CSS'), _t('自定义样式'));
    $form->addInput($webcss);

	$tophtml = new Typecho_Widget_Helper_Form_Element_Textarea('tophtml', NULL, NULL, _t('页头代码'), _t('添加在页面</head>前,比如：站长平台HTML验证代码,谷歌分析代码'));
    $form->addInput($tophtml);

	$foothtml = new Typecho_Widget_Helper_Form_Element_Textarea('foothtml', NULL, NULL, _t('页脚代码'), _t('添加在页面</body>前,比如：客服工具等js代码，注意 统计代码不在这里填！！'));
    $form->addInput($foothtml);


  
	$footnav = new Typecho_Widget_Helper_Form_Element_Textarea('footnav', NULL, NULL, _t('<h2 id="div-6">页脚设置 Info</h2><hr>页脚版权设置'), _t('页脚版权/备案信息，比如：版权所有 本站内容未经书面许可,禁止一切形式的转载。粤ICP备17062710号-1. All rights reserved.'));
    $form->addInput($footnav);

	$footlogo = new Typecho_Widget_Helper_Form_Element_Text('footlogo', NULL, NULL, _t('页脚LOGO图片地址'), _t('在这里填入你的页脚LOGO图片地址,http://www.yourblog.com/image.png,支持 https:// 或 //'));
    $form->addInput($footlogo);

    $zztj = new Typecho_Widget_Helper_Form_Element_Text('zztj', NULL, NULL, _t('网站统计代码'), _t('在这里填入你的网站统计代码,这个可以到百度统计或者cnzz上申请。'));
    $form->addInput($zztj);
	  
	
	$baiduappdi = new Typecho_Widget_Helper_Form_Element_Text('baiduappdi', NULL, NULL, _t('<h2 id="div-8">SEO设置 Info</h2><hr>配置熊掌号 APPID'), _t('在这里填入你的个人配置熊掌号 APPID,不填写则为不开启,可以和自动推送有现成的插件：<b style="color: red;">BaiduSubmit</b> 配合推送,此处只是配置熊掌号设置,还需插件配合推送出去,才达到优化效果'));
    $form->addInput($baiduappdi); 

	$themecompress = new Typecho_Widget_Helper_Form_Element_Select('themecompress',array('0'=>'不开启','1'=>'开启'),'0','HTML压缩功能','是否开启HTML压缩功能,缩减页面代码');
    $form->addInput($themecompress);


	
    $pdmapi = new Typecho_Widget_Helper_Form_Element_Text('pdmapi', NULL, NULL, _t('<h2 id="div-9">播放器设置 Play</h2><hr>弹幕地址'), _t('在这里填入你的弹幕地址,弹幕请按教程安装，如未安装会显示弹幕加载不成功，可填入第三方弹幕接口：<b style="color: red;">https://danmu.izhuolin.cn/3.0/</b> ，第三方接口可做测试使用，弹幕安装教程：<a href="https://www.dpaoz.com/153"><b>https://www.dpaoz.com/153</b></a>'));
    $form->addInput($pdmapi);
  
    $plogo = new Typecho_Widget_Helper_Form_Element_Text('plogo', NULL, NULL, _t('播放器logo'), _t('在这里填入你的logo图片地址,不填写则为不显示'));
    $form->addInput($plogo);
  
  
}

//后台编辑器添加功能
function themeFields($layout) {

	
  
    $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('封面图'), _t('在这里填入一个图片 URL 地址, 以添加显示本文的缩略图，留空则显示默认缩略图'));
    $img->input->setAttribute('class', 'w-100 setfb');
    $layout->addItem($img);
 

	$down = new Typecho_Widget_Helper_Form_Element_Text('down', NULL, NULL, _t('下载地址'), _t(''));
    $down->input->setAttribute('class', 'w-100 setfb');
    $layout->addItem($down); 
   
    $pdmapis = Helper::options()->pdmapi;
    if (empty($pdmapis)){       
    $videourl = new Typecho_Widget_Helper_Form_Element_Text('videourl', NULL, NULL, _t('视频链接'), _t('在这里填入一个视频 URL 地址, 以添加显示视频，留空则没有'));
    $videourl->input->setAttribute('class', 'w-100 setfb');
    $layout->addItem($videourl);      
    } 

    $leix = new Typecho_Widget_Helper_Form_Element_Text('leix', NULL, NULL, _t('主题类型'), _t(''));
    $leix->input->setAttribute('class', 'w-100 setfb');
    $layout->addItem($leix);

	$feiy = new Typecho_Widget_Helper_Form_Element_Text('feiy', NULL, NULL, _t('主题费用'), _t(''));
    $feiy->input->setAttribute('class', 'w-100 setfb');
    $layout->addItem($feiy);
  
    $Copyrightnew = new Typecho_Widget_Helper_Form_Element_Radio('Copyrightnew', 
    array('0' => _t('默认版权'),
    '1' => _t('投稿版权'),
    '2' => _t('转载文章')),
    '0', _t('默认版权'), _t('版权类型，默认设置:默认版权，文章版权类型，可以在主题设置里面新增和编辑版权类型，'));
    $layout->addItem($Copyrightnew);

  
  
}

/**
* 阅读统计
* 调用<?php get_post_view($this); ?>
*/
function Postviews($archive) {
    $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `'.$db->getPrefix().'contents` ADD `views` INT(10) DEFAULT 876;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) {
        $cookie = Typecho_Cookie::get('contents_views');
        $cookie = $cookie ? explode(',', $cookie) : array();
        if (!in_array($cid, $cookie)) {
            $db->query($db->update('table.contents')
                ->rows(array('views' => (int)$exist+1))
                ->where('cid = ?', $cid));
            $exist = (int)$exist+1;
            array_push($cookie, $cid);
            $cookie = implode(',', $cookie);
            Typecho_Cookie::set('contents_views', $cookie);
        }
    }
    echo $exist == 0 ? '0' : $exist.' ';
}

/**
* 评论者主页链接新窗口打开
* 调用<?php CommentAuthor($comments); ?>
*/
function CommentAuthor($obj, $autoLink = NULL, $noFollow = NULL) {    //后两个参数是原生函数自带的，为了保持原生属性，我并没有删除，原版保留
    $options = Helper::options();
    $autoLink = $autoLink ? $autoLink : $options->commentsShowUrl;    //原生参数，控制输出链接（开关而已）
    $noFollow = $noFollow ? $noFollow : $options->commentsUrlNofollow;    //原生参数，控制输出链接额外属性（也是开关而已...）
    if ($obj->url && $autoLink) {
        echo '<a href="'.$obj->url.'"'.($noFollow ? ' rel="external nofollow"' : NULL).(strstr($obj->url, $options->index) == $obj->url ? NULL : ' target="_blank"').'>'.$obj->author.'</a>';
    } else {
        echo $obj->author;
    }
}

/** 输出文章缩略图 */
function showThumbnail($widget,$imgnum){ //获取两个参数，文章的ID和需要显示的图片数量
    // 当文章无图片时的默认缩略图
    $rand = rand(1,20); 
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/adimg.png'; // 缩略图路径
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
    $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
    //如果文章内有插图，则调用插图
    if (preg_match_all($pattern, $widget->content, $thumbUrl)) { 
        return $thumbUrl[1][$imgnum];
    }
    
    //如果是内联式markdown格式的图片
    else if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
        return $thumbUrl[1][$imgnum];
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
        return $thumbUrl[1][$imgnum];
    }
    //没有就调用第一个图片附件
    else if ($attach && $attach->isImage) {
        return $attach->url; 
    } 
    //如果真的没有图片，就调用一张随机图片
    else{
        return $random;
    }
}

//获取Gravatar头像 QQ邮箱取用qq头像
function getGravatar($email, $s = 96, $d = 'mp', $r = 'g', $img = false, $atts = array())
{
preg_match_all('/((\d)*)@qq.com/', $email, $vai);
if (empty($vai['1']['0'])) {
    $url = 'https://gravatar.helingqi.com/wavatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($atts as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
}else{
    $url = 'https://q2.qlogo.cn/headimg_dl?dst_uin='.$vai['1']['0'].'&spec=100';
}
return  $url;
}


//博客最后更新时间
function get_last_update(){
    $num   = '1'; //取最近的一笔就好了
    $now = time();
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $create = $db->fetchRow($db->select('created')->from('table.contents')->limit($num)->order('created',Typecho_Db::SORT_DESC));
    $update = $db->fetchRow($db->select('modified')->from('table.contents')->limit($num)->order('modified',Typecho_Db::SORT_DESC));
    if($create>=$update){  //发表时间和更新时间取最近的
      echo Typecho_I18n::dateWord($create['created'], $now); //转换为更通俗易懂的格式
    }else{
      echo Typecho_I18n::dateWord($update['modified'], $now);
    }
}



//热门访问量文章
function theMostViewed($limit = 4, $before = '<br/> - ( views: ', $after = ' times ) ')
    {
        $db = Typecho_Db::get();
        $options = Typecho_Widget::widget('Widget_Options');
        $limit = is_numeric($limit) ? $limit : 5;
        $posts = $db->fetchAll($db->select()->from('table.contents')
                 ->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish')
                 ->order('views', Typecho_Db::SORT_DESC)
                 ->limit($limit)
                 );
        if ($posts) {
            foreach ($posts as $post) {
                $result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($post);
                $post_views = number_format($result['views']);
                $post_title = htmlspecialchars($result['title']);
                $permalink = $result['permalink'];
				$created = date('m-d', $result['created']);            
			   $tdescs =  $db->fetchAll($db->select()->from('table.fields')->where('name = ? AND cid = ?','tdesc',$result['cid']));
			   if(count($tdescs) !=0){
						//var_dump($img);
						$tdesc=$tdescs['0']['str_value'];						
                        if($tdesc){}
						else{     
                          $post_text = preg_replace('/($s*$)|(^s*^)/m', '',strip_tags($result['text'])); //获取内容
$tdesc = mb_strlen($post_text, 'utf-8') > 25 ? mb_substr($post_text, 0, 25, 'utf-8').'....' : $post_text; //格式化内容
						}                        						 
					}
            else{    $post_text = preg_replace('/($s*$)|(^s*^)/m', '',strip_tags($result['text'])); //获取内容
$tdesc = mb_strlen($post_text, 'utf-8') > 25 ? mb_substr($post_text, 0, 25, 'utf-8').'....' : $post_text; //格式化内容
                } 
									
					// var_dump($img);
					// if($img == ""){
					// 	$img = "wu";
					// }
               
			    echo "<div class='sidebox__job'><div class='sidebox__job-title'><a href='$permalink'>$post_title</a><span>$post_views 阅读</span></div><p class='sidebox__job-description'>$tdesc</p></div>";              
      
			   
            }

        } else {
            echo "<li>N/A</li>\n";
        }
}


//热门评论文章
function getHotPosts($limit = 10){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('created <= unix_timestamp(now())', 'post') //添加这一句避免未达到时间的文章提前曝光
        ->limit($limit)
        ->order('commentsNum', Typecho_Db::SORT_DESC)
    );
    if($result){
        foreach($result as $val){            
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
           
			echo '<div class="sidebox__job"><div class="sidebox__job-title"><a href="' .$permalink. '">' .$post_title. '</a><span>' . $val['commentsNum'] . '评论 </span></div></div>'; 
        }
    }
}


/**
* 显示用户等级，按id
*/

function autvip($i){
    $db=Typecho_Db::get();
    $mail=$db->fetchAll($db->select(array('COUNT(cid)'=>'rbq'))->from('table.comments')->where('mail = ?', $i)/**->where('authorId = ?','0')**/);
    foreach ($mail as $sl){
    $rbq=$sl['rbq'];}
    if($rbq<1){
    echo '<span class="autlv aut-0">Lv.0</span>';
    }elseif ($rbq<10 && $rbq>0) {
    echo '<span class="autlv aut-1">Lv.1</span>';
    }elseif ($rbq<20 && $rbq>=10) {
    echo '<span class="autlv aut-2">Lv.2</span>';
    }elseif ($rbq<40 && $rbq>=20) {
    echo '<span class="autlv aut-3">Lv.3</span>';
    }elseif ($rbq<80 && $rbq>=40) {
    echo '<span class="autlv aut-4">Lv.4</span>';
    }elseif ($rbq<100 && $rbq>=80) {
    echo '<span class="autlv aut-5">Lv.5</span>';
    }elseif ($rbq>=100) {
    echo '<span class="autlv aut-6">Lv.6</span>';
    }
}


/**
* 文章访问量等级
*/

function listdeng($archive){
   $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `'.$db->getPrefix().'contents` ADD `views` INT(10) DEFAULT 0;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if($exist<5){
   /** echo '<span class="badge arc_v1"></span>';**/
    }elseif ($exist<20 && $exist>5) {
    echo '<span class="badge arc_v2">新秀</span>';
    }elseif ($exist<50 && $exist>=20) {
    echo '<span class="badge arc_v3">推荐</span>';
    }elseif ($exist<1000 && $exist>=50) {
    echo '<span class="badge arc_v4">热文</span>';
    }elseif ($exist<200 && $exist>=100) {
    echo '<span class="badge arc_v5">头条</span>';
    }elseif ($exist<500 && $exist>=200) {
    echo '<span class="badge arc_v6">火爆</span>';
    }elseif ($exist>=500) {
    echo '<span class="badge arc_v7">神贴</span>';
    }
}

/**
* 获取文章图片数量
*/

function imgNum($content){
$output = preg_match_all('#<img(.*?) src="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#', $content,$s);
$cnt = count( $s[1] );
return $cnt;
}

/**
* 随机文章
*/
function getRandomPosts($random=5){
    $db = Typecho_Db::get();
    $adapterName = $db->getAdapterName();//兼容非MySQL数据库
    if($adapterName == 'pgsql' || $adapterName == 'Pdo_Pgsql' || $adapterName == 'Pdo_SQLite' || $adapterName == 'SQLite'){
        $order_by = 'RANDOM()';
    }else{
        $order_by = 'RAND()';
    }
    $sql = $db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('table.contents.created <= ?', time())
        ->where('type = ?', 'post')
        ->limit($random)
        ->order($order_by);

$result = $db->fetchAll($sql);
if($result){
    foreach($result as $val){
        $obj = Typecho_Widget::widget('Widget_Abstract_Contents');
        $val = $obj->push($val);
        $post_title = htmlspecialchars($val['title']);
        $permalink = $val['permalink'];
		$created = date('m-d', $val['created']);
		$img =  $db->fetchAll($db->select()->from('table.fields')->where('name = ? AND cid = ?','img',$val['cid']));
					if(count($img) !=0){
						//var_dump($img);
						$img=$img['0']['str_value'];						
                        if($img){}
						else{
                         $img="/usr/themes/spzac/img/adimg.png";
						}                        						 
					}
       
            $strimg = $img;   
            if ($strimg){$strimg=$strimg;}else{$strimg = "/usr/themes/spzac/img/adimg.png";}
        echo '<li><svg t="1608184042869" class="icon" viewBox="0 0 1024 1024" version="1.1" style="margin-right:8px;margin-bottom:2px;" xmlns="http://www.w3.org/2000/svg" p-id="15804" width="18" height="18"><path d="M401.92 263.68c-10.24-10.24-25.6-10.24-35.84 0-10.24 10.24-10.24 25.6 0 35.84l212.48 212.48-212.48 212.48c-10.24 10.24-10.24 25.6 0 35.84 10.24 10.24 25.6 10.24 35.84 0l230.4-227.84c5.12-5.12 7.68-12.8 7.68-20.48 0-7.68-2.56-15.36-7.68-20.48l-230.4-227.84zM819.2 102.4H204.8C148.48 102.4 102.4 148.48 102.4 204.8v614.4c0 56.32 46.08 102.4 102.4 102.4h614.4c56.32 0 102.4-46.08 102.4-102.4V204.8c0-56.32-46.08-102.4-102.4-102.4z m51.2 716.8c0 28.16-23.04 51.2-51.2 51.2H204.8c-28.16 0-51.2-23.04-51.2-51.2V204.8c0-28.16 23.04-51.2 51.2-51.2h614.4c28.16 0 51.2 23.04 51.2 51.2v614.4z" p-id="15805" fill="#333333"></path></svg><a href="'.$permalink.'">'.$post_title.'</a></li>';


    
    }
}
}



/**
* 判断时间区间
*
* 使用方法  if(timeZone($this->date->timeStamp)) echo 'ok';
*/
function timeZone($from){
$now = new Typecho_Date(Typecho_Date::gmtTime());
return $now->timeStamp - $from < 24*60*60 ? true : false;
}




/** 输出该作者最近文章列表 */
function authorPosts($authorid){
    if($authorid){ 
        $limit = 5;
        $db = Typecho_Db::get();
        $result = $db->fetchAll($db->select()->from('table.contents')
            ->where('authorId = ?',$authorid)
            ->where('status = ?','publish')
            ->where('type = ?', 'post')
            ->limit($limit)
            ->order('cid', Typecho_Db::SORT_DESC)        
        );
        if($result){
            foreach($result as $val){                
                $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
                $post_title = htmlspecialchars($val['title']);
                $permalink = $val['permalink'];
				$commentsNum = $val['commentsNum'];
                echo '<li><div class="widget-posts-text"><a class="widget-posts-title" href="'.$permalink.'" title="'.$post_title.'">'.$post_title.'</a><div class="widget-posts-meta"><i>' . $commentsNum.' 评论</i></div></div></li>';
            }
        }
    }else{
        echo '请设置要调用的作者ID';
    }
}







/** HTML压缩功能 */
function compressHtml($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key - 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key - 1] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}



/** 后台编辑器文章输出 */
function costcn($cid,$mid,$str,$status){
  
//回复可见
if ( strpos( $str, '[hide')!== false) {//提高效率，避免每篇文章都要解析  
  
$db = Typecho_Db::get();
$sql = $db->select()->from('table.comments')
    ->where('cid = ?',$cid)
    ->where('mail = ?', $mid)
    ->where('status = ?', 'approved')
//只有通过审核的评论才能看回复可见内容
    ->limit(1);
$result = $db->fetchAll($sql);
if($status || $result) {
    $str = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">$1</div>',$str);
}
else{
    $str = preg_replace("/\[hide\](.*?)\[\/hide\]/sm",'<div class="reply2view">此处内容需要评论回复后</div>',$str);
}  
}  
if ( strpos( $str, '[msigle')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace("/\[msigle\](.*?)\[\/msigle\]/sm",'<iframe class="iframe-music" frameborder="no" border="0" width="330" height="86" src="//music.163.com/outchain/player?type=2&id=$1&auto=0&height=66"></iframe>',$str);
}  
if ( strpos( $str, '[mlist')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace("/\[mlist\](.*?)\[\/mlist\]/sm",'<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=450 src="//music.163.com/outchain/player?type=0&id=$1&auto=0&height=430"></iframe>',$str);
}
if ( strpos( $str, '[jline')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace("/\[jline\](.*?)\[\/jline\]/sm",'<div class="j-line"><span>$1</span></div>',$str);
}
if ( strpos( $str, '[vbili')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace("/\[vbili\](.*?)\[\/vbili\]/sm",'<iframe src="https://player.bilibili.com/player.html?aid=76053337&bvid=$1&cid=130096191&page=1&high_quality=1&danmaku=0" allowfullscreen="allowfullscreen" width="100%" height="600" scrolling="no" frameborder="0" sandbox="allow-top-navigation allow-same-origin allow-forms allow-scripts"></iframe>',$str);
}

if ( strpos( $str, '[btn')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace('/\[btn.*?href=\"(.*?)\".*?type=\"(.*?)\".*?\](.*?)\[\/btn\]/sm','<a href="$1" class="j-btn" style="background-color:$2;text-decoration:unset !important;color:#fff;" target="_blank"><svg t="1608871933380"style="vertical-align:middle;margin-bottom:.5px;" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3080" width="14" height="14"><path d="M914.56 110.165333a82.474667 82.474667 0 0 0-82.346667-21.461333L145.408 288.384a81.92 81.92 0 0 0-59.050667 64.938667c-6.058667 32 15.146667 72.704 42.794667 89.685333l214.741333 132.010667a55.637333 55.637333 0 0 0 68.693334-8.277334l245.888-247.424a31.317333 31.317333 0 0 1 45.226666 0c12.373333 12.458667 12.373333 32.64 0 45.525334l-246.314666 247.466666c-18.261333 18.346667-21.674667 46.933333-8.234667 69.12l131.2 216.874667c15.36 25.770667 41.813333 40.362667 70.826667 40.362667 3.413333 0 7.253333 0 10.709333-0.426667 33.28-4.266667 59.733333-27.050667 69.546667-59.306667l203.648-685.866666c8.96-29.226667 0.853333-61.013333-20.48-82.901334z" fill="#ffffff" p-id="3081"></path></svg> $3</a>',$str);
}
if ( strpos( $str, '[btn')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace('/\[btn.*?href=\"(.*?)\".*?type=\"(.*?)\".*?\](.*?)\[\/btn\]/sm','<a href="$1" class="j-btn" style="background-color:$2;color:#fff;" target="_blank"><svg t="1608871933380"style="vertical-align:middle;margin-bottom:.5px;" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3080" width="14" height="14"><path d="M914.56 110.165333a82.474667 82.474667 0 0 0-82.346667-21.461333L145.408 288.384a81.92 81.92 0 0 0-59.050667 64.938667c-6.058667 32 15.146667 72.704 42.794667 89.685333l214.741333 132.010667a55.637333 55.637333 0 0 0 68.693334-8.277334l245.888-247.424a31.317333 31.317333 0 0 1 45.226666 0c12.373333 12.458667 12.373333 32.64 0 45.525334l-246.314666 247.466666c-18.261333 18.346667-21.674667 46.933333-8.234667 69.12l131.2 216.874667c15.36 25.770667 41.813333 40.362667 70.826667 40.362667 3.413333 0 7.253333 0 10.709333-0.426667 33.28-4.266667 59.733333-27.050667 69.546667-59.306667l203.648-685.866666c8.96-29.226667 0.853333-61.013333-20.48-82.901334z" fill="#ffffff" p-id="3081"></path></svg> $3</a>',$str);
}

//提示框短代码<iframe src="//player.bilibili.com/player.html?aid=970721566&bvid=BV12p4y1q742&cid=266892321&page=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"> </iframe>
if ( strpos( $str, '[scode')!== false) {//提高效率，避免每篇文章都要解析
  //[scode class="red"]这里编辑标签内容//[/scode]   
   $str = preg_replace('/\[scode.*?type=\"(.*?)\".*?\](.*?)\[\/scode\]/sm','<div class="j-alt $1">$2</div>',$str);
}  
    /* 图片短代码 */
if ( strpos( $str, '[photo')!== false) {//提高效率，避免每篇文章都要解析
   $str = preg_replace("/\[photo\](.*?)\[\/photo\]/sm",'<div class="photos ">$1</div>',$str);
}

//调用其他文章短代码
if ( strpos( $str, '[post')!== false) {//提高效率，避免每篇文章都要解析  
   preg_match_all("/\[post\](.*?)\[\/post\]/sm",$str,$strcid);

for($i=0;$i<count($strcid[1]);$i++){
    $scid =  $strcid[1][$i];     
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')->where('cid = ?', $scid));
    if($result){
        foreach($result as $val){            
            $val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
            $post_title = htmlspecialchars($val['title']);
            $permalink = $val['permalink'];
            $post_text = preg_replace('/($s*$)|(^s*^)/m', '',strip_tags($val['text'])); //获取内容
            $cont_text = mb_strlen($post_text, 'utf-8') > 85 ? mb_substr($post_text, 0, 85, 'utf-8').'....' : $post_text; //格式化内容
            $post_views = number_format($val['views']);
            $created = date('m-d', $val['created']);
            $pnum = $val['commentsNum'];
            $auinfo =  $db->fetchAll($db->select()->from('table.comments')->where('authorId = ?',$val['authorId']));
					if(count($auinfo) !=0){
						//var_dump($img);
						$mail=$auinfo['0']['mail'];					
                        $imgUrl = getGravatar($mail);
						$author= $auinfo['0']['author'];
					}
            $img =  $db->fetchAll($db->select()->from('table.fields')->where('name = ? AND cid = ?','img',$scid));
					if(count($img) !=0){
						//var_dump($img);
						$img=$img['0']['str_value'];						
                        if($img){}
						else{
                         $img="/usr/themes/spzac/img/adimg.png";
						}                        						 
					}
           
             $strimg = $img;
            
			



              $html='<div class="bid">
<div class="bid__head">
<a href="' .$permalink. '" class="bid__head-img">
<img src="' .$strimg. '" alt="">
</a>
<div class="bid__head-title">
<h5><a href="' .$permalink. '">' .$post_title. '</a></h5>
<p>

<span>' . $cont_text . '</span>
</p>
</div>
</div>
</div>'; 

          
        }
    }
    
   $str = preg_replace("/\[post\](".$scid.")\[\/post\]/sm",$html,$str);
  
  }
  
}    
   return $cosen=$str;
}


// 获取浏览器信息
function getBrowser($agent)
{
    if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs)) {
        $outputer = '<i class="ua-icon icon-ie"></i>&nbsp;&nbsp;Internet Explore';
    } else if (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs)) {
      $str1 = explode('Firefox/', $regs[0]);
$FireFox_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-firefox"></i>&nbsp;&nbsp;FireFox';
    } else if (preg_match('/Maxthon([\d]*)\/([^\s]+)/i', $agent, $regs)) {
      $str1 = explode('Maxthon/', $agent);
$Maxthon_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-edge"></i>&nbsp;&nbsp;MicroSoft Edge';
    } else if (preg_match('#360([a-zA-Z0-9.]+)#i', $agent, $regs)) {
$outputer = '<i class="ua-icon icon-360"></i>&nbsp;&nbsp;360极速浏览器';
    } else if (preg_match('/Edge([\d]*)\/([^\s]+)/i', $agent, $regs)) {
        $str1 = explode('Edge/', $regs[0]);
$Edge_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-edge"></i>&nbsp;&nbsp;MicroSoft Edge';
    } else if (preg_match('/UC/i', $agent)) {
              $str1 = explode('rowser/',  $agent);
$UCBrowser_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-uc"></i>&nbsp;&nbsp;UC浏览器';
    }  else if (preg_match('/QQ/i', $agent, $regs)||preg_match('/QQBrowser\/([^\s]+)/i', $agent, $regs)) {
                  $str1 = explode('rowser/',  $agent);
$QQ_vern = explode('.', $str1[1]);
        $outputer = '<i class= "ua-icon icon-qq"></i>&nbsp;&nbsp;QQ浏览器';
    } else if (preg_match('/UBrowser/i', $agent, $regs)) {
              $str1 = explode('rowser/',  $agent);
$UCBrowser_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-uc"></i>&nbsp;&nbsp;UC浏览器';
    }  else if (preg_match('/Opera[\s|\/]([^\s]+)/i', $agent, $regs)) {
        $outputer = '<i class= "ua-icon icon-opera"></i>&nbsp;&nbsp;Opera';
    } else if (preg_match('/Chrome([\d]*)\/([^\s]+)/i', $agent, $regs)) {
$str1 = explode('Chrome/', $agent);
$chrome_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-chrome"></i>&nbsp;&nbsp;Chrome';
    } else if (preg_match('/safari\/([^\s]+)/i', $agent, $regs)) {
         $str1 = explode('Version/',  $agent);
$safari_vern = explode('.', $str1[1]);
        $outputer = '<i class="ua-icon icon-safari"></i>&nbsp;&nbsp;Safari';
    } else{
        $outputer = '<i class="ua-icon icon-chrome"></i>&nbsp;&nbsp;Google Chrome';
    }
    echo $outputer;
}
// 获取操作系统信息
function getOs($agent)
{
    $os = false;
 
    if (preg_match('/win/i', $agent)) {
        if (preg_match('/nt 6.0/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class= "ua-icon icon-win1"></i>&nbsp;&nbsp;Win Vista&nbsp;/&nbsp;';
        } else if (preg_match('/nt 6.1/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class= "ua-icon icon-win1"></i>&nbsp;&nbsp;Win 7&nbsp;/&nbsp;';
        } else if (preg_match('/nt 6.2/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-win2"></i>&nbsp;&nbsp;Win 8&nbsp;/&nbsp;';
        } else if(preg_match('/nt 6.3/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class= "ua-icon icon-win2"></i>&nbsp;&nbsp;Win 8.1&nbsp;/&nbsp;';
        } else if(preg_match('/nt 5.1/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-win1"></i>&nbsp;&nbsp;Win XP&nbsp;/&nbsp;';
        } else if (preg_match('/nt 10.0/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-win2"></i>&nbsp;&nbsp;Win 10&nbsp;/&nbsp;';
        } else{
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-win2"></i>&nbsp;&nbsp;Win X64&nbsp;/&nbsp;';
        }
    } else if (preg_match('/android/i', $agent)) {
    if (preg_match('/android 9/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-android"></i>&nbsp;&nbsp;Android&nbsp;/&nbsp;';
        }
    else if (preg_match('/android 8/i', $agent)) {
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-android"></i>&nbsp;&nbsp;Android&nbsp;/&nbsp;';
        }
    else{
            $os = '&nbsp;&nbsp;<i class="ua-icon icon-android"></i>&nbsp;&nbsp;Android&nbsp;/&nbsp;';
    }
    }
    else if (preg_match('/ubuntu/i', $agent)) {
        $os = '&nbsp;&nbsp;<i class="ua-icon icon-ubuntu"></i>&nbsp;&nbsp;Ubuntu&nbsp;/&nbsp;';
    } else if (preg_match('/linux/i', $agent)) {
        $os = '&nbsp;&nbsp;<i class= "ua-icon icon-linux"></i>&nbsp;&nbsp;Linux&nbsp;/&nbsp;';
    } else if (preg_match('/iPhone/i', $agent)) {
        $os = '&nbsp;&nbsp;<i class="ua-icon icon-apple"></i>&nbsp;&nbsp;iPhone&nbsp;/&nbsp;';
    } else if (preg_match('/mac/i', $agent)) {
        $os = '&nbsp;&nbsp;<i class="ua-icon icon-mac"></i>&nbsp;&nbsp;MacOS&nbsp;/&nbsp;';
    }else if (preg_match('/fusion/i', $agent)) {
        $os = '&nbsp;&nbsp;<i class="ua-icon icon-android"></i>&nbsp;&nbsp;Android&nbsp;/&nbsp;';
    } else {
        $os = '&nbsp;&nbsp;<i class="ua-icon icon-linux"></i>&nbsp;&nbsp;Linux&nbsp;/&nbsp;';
    }
    echo $os;
}

/**
 * 加载时间
 * @return bool
 */
function timer_start() {
    global $timestart;
    $mtime     = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime     = explode( ' ', microtime() );
    $timeend   = $mtime[1] + $mtime[0];
    $timetotal = number_format( $timeend - $timestart, $precision );
    $r         = $timetotal < 1 ? $timetotal * 1000 . " ms" : $timetotal . " s";
    if ( $display ) {
        echo $r;
    }
    return $r;
}


/**
 * 后台编辑器
 */
Typecho_Plugin::factory('admin/write-post.php')->bottom = array('tagshelper', 'tagslist');
Typecho_Plugin::factory('admin/write-post.php')->bottom = array('myyodu', 'one');
Typecho_Plugin::factory('admin/write-page.php')->bottom = array('myyodu', 'one');

class myyodu {
    public static function one()
    {      
    ?>
<script src="/usr/themes/spzac/assets/css/wmd.js"></script>

<link rel="stylesheet" href="/usr/themes/spzac/assets/css/setting.fb.css">

<?php
    }
}

/**
 * 文章标签
 */

class tagshelper {
    public static function tagslist()
    {      
    ?>
<script> $(document).ready(function(){
    $('#tags').after('<div style="margin-top: 35px;" class="tagshelper"><ul style="list-style: none;border: 1px solid #D9D9D6;padding: 6px 12px; max-height: 240px;overflow: auto;background-color: #FFF;border-radius: 2px;"><?php
$stack = Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->stack;
$i = 0; 
while (isset($stack[$i])) {
  echo "<a id=\"$i\" onclick=\"$(\'#tags\').tokenInput(\'add\', {id: \'".$stack[$i]['name']."\', tags: \'".$stack[$i]['name']."\'});\">",$stack[$i]['name'], "</a>";
  $i++;
  if (isset($stack[$i])) echo "  ";
}
?></ul></div>');
  });</script>
<?php
    }
}

/**     * 访问总量     */
function theAllViews(){	$db = Typecho_Db::get();
	$row = $db->fetchAll('SELECT SUM(VIEWS) FROM `typecho_contents`');
	echo number_format($row[0]['SUM(VIEWS)']);
	}
/*** 文章字数统计*调用<?php art_count($this->cid); ?>*/
	function  art_count ($cid){    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    echo mb_strlen($text,'UTF-8');
	}

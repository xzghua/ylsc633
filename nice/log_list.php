<?php 
/**
 * 站点首页模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="mainbody">
<?php doAction('index_loglist_top'); ?>
 <div class="info">
    <figure> <img src="<?php echo TEMPLATE_URL; ?>style/images/art.jpg"  alt="Panama Hat">
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</figcaption>
    </figure>
    <div class="card">
      <h1>叶落山城秋<wb:follow-button uid="1959615452" type="red_1" width="67" height="24" ></wb:follow-button></h1>
      <p>网名：叶落山城 | 叶落山城秋</p>
      <p>职业：攻城师、程序猿</p>
      <p>爱好: 琢磨一些乱七八糟的东西</p>
      <p>所在地:帝都</p>
      <ul class="linkmore">
        <li><a href="javascript:void(0);" class="talk" title="给我留言"></a></li>
        <li><a href="javascript:void(0);" class="address" title="联系地址"></a></li>
        <li><a href="javascript:void(0);" class="email" title="给我写信"></a></li>
        <li><a href="javascript:void(0);" class="photos" title="生活照片"></a></li>
        <li><a href="javascript:void(0);" class="heart" title="关注我"></a></li>
        
      </ul>
    </div>

 </div>

  <div class="blank"></div>
  <div class="blogs">
  <ul class="bloglist">
<?php 
if (!empty($logs)):
foreach($logs as $key => $value): 
?>
<li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><?php topflg($value['top'], $value['sortop'], isset($sortid)?$sortid:''); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
          <ul class="textinfo">
            <a href="/"><img src="<?php echo TEMPLATE_URL; ?>/style/images/s<?php echo $key+1;?>.jpg"></a>
            		<?php echo $value['log_description']; ?>
		<p class="tag">
			<?php blog_tag($value['logid']); ?>
		</p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="<?php echo $value['log_url']; ?>">浏览(<?php echo $value['views']; ?>)</a></li>
            <li class="comments"><a href="<?php echo $value['log_url']; ?>#comments">评论(<?php echo $value['comnum']; ?>)</a></li>
            <li class="icon-time"><a href="#"><?php echo gmdate('Y-n-j', $value['date']); ?></a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li>
	
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>


<div id="pagenavi">
	<?php echo $page_url;?>
</div>
</ul>
<!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>
<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<footer>
  <div class="footer-mid">
    <div class="links">

      <h2>友情链接</h2>
      <?php widget_link("友情链接");?>
   
    </div>
    <div class="visitors">
      <h2>最新评论</h2>
      <?php widget_newcomm("最新评论")?>
    </div>
    <section class="flickr">
      <h2>(没想好放什么)</h2>
      <ul>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/01.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/02.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/03.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/04.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/05.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/06.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/07.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/08.jpg"></a></li>
        <li><a href="#"><img src="<?php echo TEMPLATE_URL; ?>style/images/09.jpg"></a></li>
      </ul>
    </section>
  </div>
  <div class="footer-bottom" >
    <p style="text-align: center;">Copyright © 2014-2015 <a href="http://ylsc633.com" >叶落山城秋</a> 版权所有
	<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a> <?php echo $footer_info; ?>
	<?php doAction('index_footer'); ?>
	<?php doAction('index_yw_yl');?></p>
  </div>

</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox" > <a id="togbook" href="http://jq.qq.com/?_wv=1027&k=efJir2"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
<script>prettyPrint();</script>
<script type="text/javascript">
// 	var 	
// 	$('.sunnav').css('background',)
 </script>
</body>
</html>
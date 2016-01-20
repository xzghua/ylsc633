<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">


      <h1 class="c_titile"><?php topflg($top); ?><?php echo $log_title; ?></h1>
        
      <p class="box">发布时间：<?php echo gmdate('Y-n-j', $date); ?><span>编辑：<?php blog_author($author); ?></span><?php editflg($logid,$author); ?></p>
      <ul>
        <p> <?php echo $log_content; ?></p>
        <!-- <p><img src="<?php echo BLOG_URL; ?>style/images/post1.jpg"></p> -->
        
        
      </ul>
      <?php blog_tag($logid); ?>
      <div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
<div class="share"> 

        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <a class="shareCount"></a> </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
        <!-- Baidu Button END --> 
       
</div>
<?php doAction('log_related', $logData); ?>
	
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?> 
	<div style="clear:both;"></div>
</div>


 
<?php
 include View::getView('side');
 include View::getView('footer');
?>
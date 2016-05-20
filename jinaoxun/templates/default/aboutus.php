
<div class="ncap-about">
  <div class="left-pic"></div>
  <div class="version">
    <h2>淘福家 电商平台系统</h2>
    <h4><?php echo $output['v_date'];?></h4>
    <hr>
  </div>
  <div class="content">
    <div class="scroll switchbox" >
      <ul class="tema">
        <li>
          <h4>技术支持</h4>
          <p>taofujia.com</p>
        </li>
      </ul>
    </div>
    <!-- 代码结束 -->
    <div class="scrollbar switchbox" style="display: none;">
      <div class="law-notice">
        <p>版权所有 (c) 2015-2016，淘福家www.taofujia.com</p>
      </div>
    </div>

  </div>
  <div class="btns"><a href="javascript:void(0);" onClick="about_change(0)" class="ncap-btn ncap-btn-green">开发团队</a><a href="javascript:void(0);" onClick="about_change(1)" class="ncap-btn">法律声明</a></div>
</div>
<script type="text/javascript" src="<?php echo ADMIN_RESOURCE_URL;?>/js/jquery.scroll.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.mousewheel.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
$(function(){
	$("div.scroll").myScroll({
		speed:30,
		rowHeight:60
	});
	$("div.scrollbar").perfectScrollbar();
});

function about_change(i) {
    $(".switchbox").hide().eq(i).show();
    $(".btns > a").removeClass("ncap-btn-green").eq(i).addClass("ncap-btn-green");
    if (i == 0) {
        $("div.scroll").myScroll({
            speed:30,
            rowHeight:60
        });
    }
}
</script>
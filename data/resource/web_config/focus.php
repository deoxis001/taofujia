<?php defined('ByShopWWI') or exit('Access Invalid!'); ?>
<ul id="fullScreenSlides"
    class="full-screen-slides"><?php if (is_array($output['code_screen_list']['code_info']) && !empty($output['code_screen_list']['code_info'])) { ?><?php foreach ($output['code_screen_list']['code_info'] as $key => $val) { ?><?php if (is_array($val) && $val['ap_id'] > 0) { ?>
        <li ap_id="<?php echo $val['ap_id']; ?>" color="<?php echo $val['color']; ?>"
            style="background: <?php echo $val['color']; ?> url('<?php echo UPLOAD_SITE_URL . '/' . $val['pic_img']; ?>') no-repeat center top">
        <a href="<?php echo $val['pic_url']; ?>" target="_blank" title="<?php echo $val['pic_name']; ?>">&nbsp;</a>
        </li><?php } else { ?>
    <li style="background: <?php echo $val['color']; ?> url('<?php echo UPLOAD_SITE_URL . '/' . $val['pic_img']; ?>') no-repeat center top">
        <a href="<?php echo $val['pic_url']; ?>" target="_blank" title="<?php echo $val['pic_name']; ?>">&nbsp;</a>
        </li><?php }
    }
    } ?></ul>
<div class="wwi-new-slide">
    <div class="jfocus-img"><img src="<?php echo UPLOAD_SITE_URL . '/' .'/shop/activity/act6-1.png'; ?>"> </div>
    <div class="jfocus-trigeminy">
        <ul><?php if (is_array($output['code_focus_list']['code_info']) && !empty($output['code_focus_list']['code_info'])) { ?><?php foreach ($output['code_focus_list']['code_info'] as $key => $val) { ?>
                <li><?php if (is_array($val['pic_list']) && $val['pic_list'][1]['ap_id'] > 0) { ?><?php foreach ($val['pic_list'] as $k => $v) { ?>
                    <a ap_id="<?php echo $v['ap_id']; ?>" href="<?php echo $v['pic_url']; ?>" target="_blank"
                       title="<?php echo $v['pic_name']; ?>"> <img
                            src="<?php echo UPLOAD_SITE_URL . '/' . $v['pic_img']; ?>"
                            alt="<?php echo $v['pic_name']; ?>"></a><?php }
                    } else { ?><?php foreach ($val['pic_list'] as $k => $v) { ?><a href="<?php echo $v['pic_url']; ?>"
                                                                                   target="_blank"
                                                                                   title="<?php echo $v['pic_name']; ?>">
                        <img src="<?php echo UPLOAD_SITE_URL . '/' . $v['pic_img']; ?>"
                             alt="<?php echo $v['pic_name']; ?>"></a> <?php }
                    } ?></li> <?php }
            } ?></ul>
        <script type="text/javascript">update_screen_focus();</script>
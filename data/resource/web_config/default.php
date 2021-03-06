<?php defined('ByShopWWI') or exit('Access Invalid!'); ?>
<div class="home-standard-layout style-<?php echo $output['style_name']; ?>">
    <div class="title floorhd">
        <?php if ($output['code_tit']['code_info']['type'] == 'txt') { ?>
        <a class="wwisp" href="" ref="<?php echo $output['code_tit']['code_info']['floor']; ?>"
           title="<?php echo $output['code_tit']['code_info']['title']; ?>">
            <?php if (!empty($output['code_tit']['code_info']['floor'])) { ?>
                <?php echo $output['code_tit']['code_info']['floor']; ?>&nbsp;&nbsp;&nbsp;
            <?php } ?>

            <?php echo $output['code_tit']['code_info']['title']; ?>
            <i></i></a><?php } else { ?>
            <div class="pic-type"><img
                    shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $output['code_tit']['code_info']['pic']; ?>"
                    rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"/></div>        <?php } ?>
    </div>   <!-- 推荐分类列表 -->
    <div class="left-sidebar">

        <ul class="links"><?php if (is_array($output['code_category_list']['code_info']['goods_class']) && !empty($output['code_category_list']['code_info']['goods_class'])) {
                $i = 0 ?><?php foreach ($output['code_category_list']['code_info']['goods_class'] as $k => $v) {
                    $i++ ?>
                    <li><a href="<?php echo urlShop('search', 'index', array('cate_id' => $v['gc_id'])); ?>" mff="sqde"
                           target="_blank" <?php if ($i == '1' || $i == '4' || $i == '7') { ?> class="on"<?php } ?>><?php echo $v['gc_name']; ?></a>
                    </li><?php }
            } ?></ul>
        <div class="bridge">
            <ul><?php if (!empty($output['code_act']['code_info']['titlea'])) { ?>
                    <li><a href="<?php echo $output['code_act']['code_info']['urla']; ?>"
                           target="_blank"><i>•&nbsp;</i><?php echo $output['code_act']['code_info']['titlea']; ?></a>
                    </li><?php } ?><?php if (!empty($output['code_act']['code_info']['titleb'])) { ?>
                    <li><a href="<?php echo $output['code_act']['code_info']['urlb']; ?>"
                           target="_blank"><i>•&nbsp;</i><?php echo $output['code_act']['code_info']['titleb']; ?></a>
                    </li><?php } ?> <?php if (!empty($output['code_act']['code_info']['icoa'])) { ?>
                    <li><a href="<?php echo $output['code_act']['code_info']['icob']; ?>"
                           target="_blank"><i>•&nbsp;</i><?php echo $output['code_act']['code_info']['icoa']; ?></a>
                    </li><?php } ?></ul>
            <div class="img-box"><?php if (!empty($output['code_act']['code_info']['pic'])) { ?><a
                    href="<?php echo $output['code_act']['code_info']['url']; ?>"
                    title="<?php echo $output['code_act']['code_info']['title']; ?>" target="_blank"><img
                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $output['code_act']['code_info']['pic']; ?>"
                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                        alt="<?php echo $output['code_act']['code_info']['title']; ?>"/></a><?php } ?></div>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="tabs-nav"><?php if (!empty($output['code_recommend_list']['code_info']) && is_array($output['code_recommend_list']['code_info'])) {
                $i = 0; ?><?php foreach ($output['code_recommend_list']['code_info'] as $key => $val) {
                    $i++; ?>
                    <li class="<?php echo $i == 1 ? 'tabs-selected' : ''; ?>">
                        <h3><?php echo $val['recommend']['name']; ?></h3></li> <?php } ?><?php } ?> </ul>
        <div class="right-side-focus">
            <ul> <?php if (is_array($output['code_adv']['code_info']) && !empty($output['code_adv']['code_info'])) { ?><?php foreach ($output['code_adv']['code_info'] as $key => $val) { ?><?php if (is_array($val) && !empty($val)) { ?>
                    <li><a href="<?php echo $val['pic_url']; ?>" title="<?php echo $val['pic_name']; ?>"
                           target="_blank"><img alt="<?php echo $val['pic_name']; ?>"
                                                shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_img']; ?>"
                                                rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                                width="349" height="488"/></a></li><?php }
                }
                } ?></ul>
        </div><?php if (!empty($output['code_recommend_list']['code_info']) && is_array($output['code_recommend_list']['code_info'])) {
            $i = 0; ?><?php foreach ($output['code_recommend_list']['code_info'] as $key => $val) {
                $i++; ?><?php if (!empty($val['goods_list']) && is_array($val['goods_list'])) { ?>
                <div class="tabs-panel middle-goods-list <?php echo $i == 1 ? '' : 'tabs-hide'; ?>">
                    <ul> <?php foreach ($val['goods_list'] as $k => $v) { ?>
                            <li>
                                <dl>
                                    <dt class="goods-name"><a target="_blank"
                                                              href="<?php echo urlShop('goods', 'index', array('goods_id' => $v['goods_id'])); ?>"
                                                              title="<?php echo $v['goods_name']; ?>">    <?php echo $v['goods_name']; ?></a>
                                    </dt>
                                    <dd class="goods-thumb"><a target="_blank"
                                                               href="<?php echo urlShop('goods', 'index', array('goods_id' => $v['goods_id'])); ?>"><img
                                                shopwwi-url="<?php echo strpos($v['goods_pic'], 'http') === 0 ? $v['goods_pic'] : UPLOAD_SITE_URL . "/" . $v['goods_pic']; ?>"
                                                rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                                alt="<?php echo $v['goods_name']; ?>"/></a></dd>
                                    <dd class="goods-price">
                                        <em><?php echo ncPriceFormatForList($v['goods_price']); ?></em><span
                                            class="original"><?php echo ncPriceFormatForList($v['market_price']); ?></span>
                                    </dd>
                                </dl>
                            </li> <?php } ?></ul>
                    </div><?php } elseif (!empty($val['pic_list']) && is_array($val['pic_list'])) { ?>
                    <div class="tabs-panel middle-banner-style01 fade-img <?php echo $i == 1 ? '' : 'tabs-hide'; ?>">
                        <ul class="shopwwi-panel-r">
                            <li class="item tall">
                                <div class="title"><a href="<?php echo $val['pic_list']['11']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['11']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['11']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['11']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['11']['pic_img']; ?>"
                                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['11']['pic_name']; ?>"></a></li>
                            <li class="item tall">
                                <div class="title"><a href="<?php echo $val['pic_list']['12']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['12']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['12']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['12']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['12']['pic_img']; ?>"
                                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['12']['pic_name']; ?>"></a></li>
                            <li class="item ">
                                <div class="title"><a href="<?php echo $val['pic_list']['21']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['21']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['21']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['21']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['21']['pic_img']; ?>"
                                        mff="sqde" rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['21']['pic_name']; ?>"></a></li>
                            <li class="item bm">
                                <div class="title"><a href="<?php echo $val['pic_list']['24']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['24']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['24']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['24']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['24']['pic_img']; ?>"
                                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['24']['pic_name']; ?>"></a></li>
                            <li class="item bm">
                                <div class="title"><a href="<?php echo $val['pic_list']['31']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['31']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['31']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['31']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['31']['pic_img']; ?>"
                                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['31']['pic_name']; ?>"></a></li>
                            <li class="item bm">
                                <div class="title"><a href="<?php echo $val['pic_list']['32']['pic_url']; ?>"
                                                      target="_blank"><?php echo $val['pic_list']['32']['pic_name']; ?></a>
                                </div>
                                <p><?php echo $val['pic_list']['32']['pic_sname']; ?></p> <a
                                    href="<?php echo $val['pic_list']['32']['pic_url']; ?>" class="pic" target="_blank"><img
                                        width="170" height="170" mff="sqde"
                                        shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['pic_list']['32']['pic_img']; ?>"
                                        rel='lazy' src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"
                                        alt="<?php echo $val['pic_list']['32']['pic_name']; ?>"></a></li>
                        </ul>
                    </div> <?php }
            }
        } ?>                   </div>
    </div><?php if (!empty($output['code_brand_list']['code_info']) && is_array($output['code_brand_list']['code_info'])) {
    $k = 0; ?>
    <ul class="shopwwi-brand clearfix"> <?php foreach ($output['code_brand_list']['code_info'] as $key => $val) {
        $k++; ?><?php if ($k < 11) { ?>
        <li class="item<?php echo $k; ?>"><a
                href="<?php echo urlShop('brand', 'list', array('brand' => $val['brand_id'])); ?>" target="_blank"
                title="<?php echo $val['brand_name']; ?>"><img alt=""
                                                               shopwwi-url="<?php echo UPLOAD_SITE_URL . '/' . $val['brand_pic']; ?>"
                                                               rel='lazy'
                                                               src="<?php echo SHOP_SITE_URL; ?>/img/loading.gif"></a>
            </li><?php }
    } ?></ul><?php } ?>
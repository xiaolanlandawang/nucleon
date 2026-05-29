<?php /*a:4:{s:81:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/portal\\product-info.html";i:1779677151;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\head.html";i:1779703611;s:71:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\nav.html";i:1779704984;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\foot.html";i:1779412113;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
    <meta name="description" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
<script>
    // Immediate font-size calculation to prevent layout shifts
    (function() {
        var width = window.innerWidth;
        document.documentElement.style.fontSize = (width / 37.5) + 'px';
    })();
</script>
<link rel="shortcut icon" type="image/x-icon" href="/themes/simpleboot3_mobile/public/assets/images/logo.ico">
<link href="/themes/simpleboot3_mobile/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3_mobile/public/assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3_mobile/public/assets/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/swiper-bundle.min.js" defer></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/common.js" defer></script>

<?php if(!(empty($site_info['google_analytics']) || (($site_info['google_analytics'] instanceof \think\Collection || $site_info['google_analytics'] instanceof \think\Paginator ) && $site_info['google_analytics']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_analytics']); ?>
<?php endif; if(!(empty($site_info['google_head']) || (($site_info['google_head'] instanceof \think\Collection || $site_info['google_head'] instanceof \think\Paginator ) && $site_info['google_head']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_head']); ?>
<?php endif; ?>




<style>
    #zsiq_chat_wrap{
        max-height: 550px !important;
    }
    .zsiq-float{
        bottom: 80px!important;
    }
</style>

    <link href="/themes/simpleboot3_mobile/public/assets/css/product-info.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/product-info.js"></script>
</head>
<body>
<div class="main">
    <?php if(!(empty($site_info['google_body']) || (($site_info['google_body'] instanceof \think\Collection || $site_info['google_body'] instanceof \think\Paginator ) && $site_info['google_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_body']); ?>
<?php endif; ?>
<!--NAV START-->

<div class="header">
    <div class="logo">
        <a href="/">
            <img class="logo-img" src="/themes/simpleboot3_mobile/public/assets/images/logo.png"
                 alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>" title="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
        </a>
    </div>
    <div class="nav">
        <div class="nav-btn fr">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="nav-list">
            <li><a class="nav-title" href="/">HOME</a></li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/product'); ?>">PRODUCTS</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                            <li>
                                <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>">
                                    <div class="nav-sub-title"><?php echo $vo['name']; ?></div>
                                </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/about'); ?>">ABOUT US</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <li>
                            <a href="<?php echo cmf_url('portal/index/about'); ?>">
                                <div class="nav-sub-title">About Nucleon</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/cert'); ?>">
                                <div class="nav-sub-title">Certificates</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/create'); ?>">
                                <div class="nav-sub-title">Innovation&Creation</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/service'); ?>">SERVICE</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <li>
                            <a href="<?php echo cmf_url('portal/index/service'); ?>">
                                <div class="nav-sub-title">Global Market</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/excellent_service'); ?>">
                                <div class="nav-sub-title">Excellent Service</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/download'); ?>">
                                <div class="nav-sub-title">Download</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/industries'); ?>">INDUSTRIES</a>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/news'); ?>">NEWS CENTER</a>
            </li>
            <li><a class="nav-title" href="<?php echo cmf_url('portal/index/quote'); ?>">GET A QUOTE</a></li>
        </ul>
    </div>
</div>
<!--NAV END-->


    <!--PRODUCT DETAIL BANNER START-->
    <section class="mobile-detail-hero">
        <img class="mobile-detail-hero__bg"
             src="<?php echo cmf_get_image_url($banner['image']); ?>"
             alt="<?php echo (isset($banner['title']) && ($banner['title'] !== '')?$banner['title']:$product['title']); ?>"
             fetchpriority="high"
             loading="eager"
             decoding="async">
        <div class="mobile-detail-hero__content">
            <div class="mobile-detail-hero__text"><?php echo (isset($banner['title']) && ($banner['title'] !== '')?$banner['title']:$product['title']); ?></div>
            <div class="mobile-detail-hero__desc"><?php echo $product['industry']; ?></div>
        </div>
    </section>
    <!--PRODUCT DETAIL BANNER END-->

    <div class="mobile-breadcrumb">
        <a href="/">Home</a>
        <span>/</span>
        <a href="<?php echo cmf_url('portal/index/product'); ?>">Products</a>
        <span>/</span>
        <span>Detail</span>
    </div>

    <div class="main-content">

        <div class="product-info clearfix">
            <!-- title -->
            <div class="product-title"><?php echo $product['title']; ?></div>
            <!-- photos -->
            <div class="product-photos">
                <div class="swiper mySwiper2 main-image">
                    <div class="swiper-wrapper">
                        <?php if(is_array($product['photos']) || $product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator): if( count($product['photos'])==0 ) : echo "" ;else: foreach($product['photos'] as $key=>$vo): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>"/>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="swiper mySwiper thumb-image">
                    <div class="swiper-wrapper">
                        <?php if(is_array($product['photos']) || $product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator): if( count($product['photos'])==0 ) : echo "" ;else: foreach($product['photos'] as $key=>$vo): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>"/>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var swiper = new Swiper(".mySwiper", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            watchSlidesProgress: true,
                        });
                        var swiper2 = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            thumbs: {
                                swiper: swiper,
                            },
                        });
                    });
                </script>
            </div>

            <div class="info_middle_box">
                <?php if(!(empty($product['custom_field']['input']) || (($product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator ) && $product['custom_field']['input']->isEmpty()))): if(is_array($product['custom_field']['input']) || $product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator): if( count($product['custom_field']['input'])==0 ) : echo "" ;else: foreach($product['custom_field']['input'] as $key=>$vo): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): ?>
                            <div class="info_middle_line"></div>
                            <div class="info_middle_item">
                                <div class="item_title"><?php echo $vo; ?>:</div>
                                <div class="item_content"><?php echo $product[$key]; ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['lifting_capacity']) || (($product['lifting_capacity'] instanceof \think\Collection || $product['lifting_capacity'] instanceof \think\Paginator ) && $product['lifting_capacity']->isEmpty()))): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title">Capacity:</div>
                            <div class="item_content"><?php echo $product['lifting_capacity']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['lifting_height']) || (($product['lifting_height'] instanceof \think\Collection || $product['lifting_height'] instanceof \think\Paginator ) && $product['lifting_height']->isEmpty()))): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title">Lifting Height:</div>
                            <div class="item_content"><?php echo $product['lifting_height']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['span']) || (($product['span'] instanceof \think\Collection || $product['span'] instanceof \think\Paginator ) && $product['span']->isEmpty()))): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title">Span:</div>
                            <div class="item_content"><?php echo $product['span']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['operating_voltage']) || (($product['operating_voltage'] instanceof \think\Collection || $product['operating_voltage'] instanceof \think\Paginator ) && $product['operating_voltage']->isEmpty()))): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title">Voltage/Hertz:</div>
                            <div class="item_content"><?php echo $product['operating_voltage']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['job_level']) || (($product['job_level'] instanceof \think\Collection || $product['job_level'] instanceof \think\Paginator ) && $product['job_level']->isEmpty()))): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title">Working Class:</div>
                            <div class="item_content"><?php echo $product['job_level']; ?></div>
                        </div>
                    <?php endif; ?>
                <?php endif; if(!(empty($product['parameter']) || (($product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator ) && $product['parameter']->isEmpty()))): if(is_array($product['parameter']) || $product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator): if( count($product['parameter'])==0 ) : echo "" ;else: foreach($product['parameter'] as $key=>$vo): ?>
                        <div class="info_middle_line"></div>
                        <div class="info_middle_item">
                            <div class="item_title"><?php echo $vo['parameter_name']; ?>:</div>
                            <div class="item_content"><?php echo $vo['parameter_val']; ?></div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>

                <div class="info_middle_line"></div>
                <div class="info_middle_apply">
                    <span>Apply:</span> <?php echo $product['industry']; ?>
                </div>
                <?php if(!(empty($product['authentication_mark']) || (($product['authentication_mark'] instanceof \think\Collection || $product['authentication_mark'] instanceof \think\Paginator ) && $product['authentication_mark']->isEmpty()))): ?>
                    <div class="info_middle_mark">
                        <span class="info_middle_mark_title">
                            Authentication mark:
                        </span>
                        <?php if(is_array($product['authentication_mark']) || $product['authentication_mark'] instanceof \think\Collection || $product['authentication_mark'] instanceof \think\Paginator): if( count($product['authentication_mark'])==0 ) : echo "" ;else: foreach($product['authentication_mark'] as $key=>$vo): ?>
                            <div class="info_middle_mark_img">
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <?php endif; ?>
                <div class="info_right_btn info_right_submit" id="inquiry">SUBMIT</div>
            </div>


            <!-- info -->
            <div class="info_content">
                <ul class="info_content_title clearfix">
                    <?php if(!(empty($product['custom_field']['content']) || (($product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator ) && $product['custom_field']['content']->isEmpty()))): if(is_array($product['custom_field']['content']) || $product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator): if( count($product['custom_field']['content'])==0 ) : echo "" ;else: foreach($product['custom_field']['content'] as $key=>$vo): if($key != 'features'): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): ?>
                                    <li class="info_content_item" data-target="<?php echo $key; ?>">
                                        <?php echo $vo; ?>
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['overview']) || (($product['overview'] instanceof \think\Collection || $product['overview'] instanceof \think\Paginator ) && $product['overview']->isEmpty()))): ?>
                            <li class="info_content_item" data-target="overview">Product Overview</li>
                        <?php endif; if(!(empty($product['scenario']) || (($product['scenario'] instanceof \think\Collection || $product['scenario'] instanceof \think\Paginator ) && $product['scenario']->isEmpty()))): ?>
                            <li class="info_content_item" data-target="scenario">Application Scenario</li>
                        <?php endif; if(!(empty($product['certificate']) || (($product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator ) && $product['certificate']->isEmpty()))): ?>
                            <li class="info_content_item" data-target="certificate">Certificate</li>
                        <?php endif; if(!(empty($product['customized']) || (($product['customized'] instanceof \think\Collection || $product['customized'] instanceof \think\Paginator ) && $product['customized']->isEmpty()))): ?>
                            <li class="info_content_item" data-target="customized">Customized</li>
                        <?php endif; ?>
                    <?php endif; if(!(empty($product['custom_content']) || (($product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator ) && $product['custom_content']->isEmpty()))): if(is_array($product['custom_content']) || $product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator): if( count($product['custom_content'])==0 ) : echo "" ;else: foreach($product['custom_content'] as $key=>$vo): ?>
                            <div class="info_content_item" data-target="<?php echo str_replace(' ', '', $vo['param_content_name']); ?>"><?php echo $vo['param_content_name']; ?></div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </ul>
                <div class="info_content_content">
                    <?php if(!(empty($product['custom_field']['content']) || (($product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator ) && $product['custom_field']['content']->isEmpty()))): if(is_array($product['custom_field']['content']) || $product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator): if( count($product['custom_field']['content'])==0 ) : echo "" ;else: foreach($product['custom_field']['content'] as $key=>$vo): if($key != 'features'): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): if($key == 'certificate'): ?>
                                        <div class="info_content_content_item" id="<?php echo $key; ?>">
                                            <div class="info_content_content_item-title"><?php echo $vo; ?></div>
                                            <ul class="info_content_content_certificate">
                                                <?php if(is_array($product['certificate']) || $product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator): if( count($product['certificate'])==0 ) : echo "" ;else: foreach($product['certificate'] as $key=>$v): ?>
                                                    <li class="info_content_content_certificate_item">
                                                        <a href="<?php echo cmf_get_image_url($v['url']); ?>" target="_blank"><div class="certificate_wrap">
                                                            <img src="<?php echo cmf_get_image_url($v['url']); ?>"
                                                                 alt="<?php echo $v['name']; ?>" title="<?php echo $v['name']; ?>"></div>
                                                            <div class="info_content_content_certificate_item_title">
                                                                <?php echo $v['name']; ?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                <div class="clear_both"></div>
                                            </ul>
                                        </div>
                                        <?php else: ?>
                                        <div class="info_content_content_item" id="<?php echo $key; ?>">
                                            <div class="info_content_content_item-title"><?php echo $vo; ?></div>
                                            <?php echo $product[$key]; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['overview']) || (($product['overview'] instanceof \think\Collection || $product['overview'] instanceof \think\Paginator ) && $product['overview']->isEmpty()))): ?>
                            <div class="info_content_content_item" id="overview">
                                <div class="info_content_content_item-title">Product Overview</div>
                                <?php echo $product['overview']; ?>
                            </div>
                        <?php endif; if(!(empty($product['scenario']) || (($product['scenario'] instanceof \think\Collection || $product['scenario'] instanceof \think\Paginator ) && $product['scenario']->isEmpty()))): ?>
                            <div class="info_content_content_item" id="scenario">
                                <div class="info_content_content_item-title">Application Scenario</div>
                                <?php echo $product['scenario']; ?>
                            </div>
                        <?php endif; if(!(empty($product['certificate']) || (($product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator ) && $product['certificate']->isEmpty()))): ?>
                            <div class="info_content_content_item" id="certificate">
                                <div class="info_content_content_item-title">Certificate</div>
                                <ul class="info_content_content_certificate">
                                    <?php if(is_array($product['certificate']) || $product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator): if( count($product['certificate'])==0 ) : echo "" ;else: foreach($product['certificate'] as $key=>$vo): ?>
                                        <li class="info_content_content_certificate_item">
                                            <a href="<?php echo cmf_get_image_url($vo['url']); ?>" target="_blank"><div class="certificate_wrap">
                                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>"
                                                     alt="<?php echo $vo['name']; ?>" title="<?php echo $vo['name']; ?>"></div>
                                                <div class="info_content_content_certificate_item_title">
                                                    <?php echo $vo['name']; ?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <div class="clear_both"></div>
                                </ul>
                            </div>
                        <?php endif; if(!(empty($product['customized']) || (($product['customized'] instanceof \think\Collection || $product['customized'] instanceof \think\Paginator ) && $product['customized']->isEmpty()))): ?>
                            <div class="info_content_content_item" id="customized">
                                <div class="info_content_content_item-title">Customized</div>
                                <?php echo $product['customized']; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; if(!(empty($product['custom_content']) || (($product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator ) && $product['custom_content']->isEmpty()))): if(is_array($product['custom_content']) || $product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator): if( count($product['custom_content'])==0 ) : echo "" ;else: foreach($product['custom_content'] as $key=>$vo): ?>
                            <div class="info_content_content_item" id="<?php echo str_replace(' ', '', $vo['param_content_name']); ?>">
                                <div class="info_content_content_item-title"><?php echo $vo['param_content_name']; ?></div>
                                <?php echo $vo['param_content_val']; ?>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </div>
            </div>




            <!-- PRODUCT RECOMMENDATION -->
            <?php if(!(empty($recommended_list) || (($recommended_list instanceof \think\Collection || $recommended_list instanceof \think\Paginator ) && $recommended_list->isEmpty()))): ?>
                <div class="related_products clearfix">
                    <div class="content-title">
                        HOT PRODUCTS
                    </div>
                    <div class="swiper product-content">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <ul class="product-content-ul">
                                    <?php if(is_array($recommended_list) || $recommended_list instanceof \think\Collection || $recommended_list instanceof \think\Paginator): $_6a17af0919c51 = is_array($recommended_list) ? array_slice($recommended_list,0,4, true) : $recommended_list->slice(0,4, true); if( count($_6a17af0919c51)==0 ) : echo "" ;else: foreach($_6a17af0919c51 as $key=>$vo): ?>
                                        <li class="product-content-li">
                                            <a href="<?php echo cmf_url('portal/index/product_info',array('id'=>$vo['id'])); ?>">
                                                <div class="product-content-li-img">
                                                    <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="product">
                                                </div>
                                                <div class="product-content-li-title"><?php echo $vo['title']; ?></div>
                                            </a>
                                            <div class="product_list_item_btn">
                                                <div class="product_list_item_btn_submit" id="inquiry1">CONSULT</div>
                                            </div>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="product-line"></div>
                    <script>
                        var mySwiper = new Swiper('.product-content', {
                            pagination: {
                                el: '.product-line',
                            },
                        })
                    </script>
                </div>
            <?php endif; ?>

        </div>

    </div>

    <!--FOOT START-->
<div class="footer">
    <div class="footer-logo">
        <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/logo-white.svg" alt="logo">
    </div>
    <div class="footer-line"></div>
    <div class="footer-content">
        <div class="footer-contact clearfix">
            <div class="footer-contact-item">
                <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-email.webp" alt="email">
                <p class="footer-contact-item-content">
                    <a onclick="gtag_report_conversion('mailto:<?php echo $site_info['email']; ?>');"><?php echo $site_info['email']; ?></a>
                </p>
            </div>
            <div class="footer-contact-item">
                <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-location.webp"
                    alt="location">
                <p class="footer-contact-item-content"><?php echo $site_info['address']; ?></p>
            </div>
            <?php 
                $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
                if (strpos($cleanNumber, '0') === 0) {
                $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
                }
             if(!empty($site_info['whatsapp'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/quote-whatsapp.webp"
                        alt="whatsapp">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>');"
                            target="_blank"><?php echo $site_info['whatsapp']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['sale_tel'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-phone.webp"
                        alt="phone">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('tel:<?php echo $site_info['sale_tel']; ?>');"><?php echo $site_info['sale_tel']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['wechat'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-wechat.webp"
                        alt="wechat">
                    <p class="footer-contact-item-content">
                        <a target="_blank"><?php echo $site_info['wechat']; ?></a>
                    </p>
                </div>
            <?php endif; ?>
            <div class="footer-contact-social">
                <a href="<?php echo (isset($site_info['linkedin']) && ($site_info['linkedin'] !== '')?$site_info['linkedin']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/linkedin.webp" alt="linkedin"></a>
                <a href="<?php echo (isset($site_info['facebook']) && ($site_info['facebook'] !== '')?$site_info['facebook']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/facebook.webp" alt="facebook"></a>
                <a href="<?php echo (isset($site_info['youtube']) && ($site_info['youtube'] !== '')?$site_info['youtube']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/youtube.webp" alt="youtube"></a>
                <a class="vk-social" href="<?php echo (isset($site_info['vk']) && ($site_info['vk'] !== '')?$site_info['vk']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/header-vk.png" alt="vk"></a>
            </div>
        </div>

        <div class="footer-feedback">
            <div class="footer-feedback-item">
                <label>NAME:</label>
                <input type="text" name="footer-name" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>EMAIL:</label>
                <input type="text" name="footer-email" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>PHONE:</label>
                <input type="text" class="footer-phone" name="footer-phone" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>MESSAGE:</label>
                <input type="text" name="footer-message" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <button class="footer-feedback-btn">Submit Your Request</button>
        </div>
        <div class="footer-bottom"
            style="text-align: center; color: rgba(255,255,255,0.6); font-size: 1.2rem; margin-top: 2rem; padding-bottom: 2rem;">
            Copyright &copy; HENAN WEIHUA CO.,LTD. All Rights Reserved.
        </div>
    </div>
    <div class="right_fix">
        <div class="right_fix_connect">
            <div class="right_fix_box right_fix_email">
                <a href="mailto:<?php echo $site_info['email']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-email-mobile.webp"
                        alt="email" title="email">
                    <p class="right_fix_box_title">Send Email</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_whatsapp">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-whatsapp-mobile.webp"
                        alt="whatsapp" title="whatsapp">
                    <p class="right_fix_box_title">WhatsApp</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_form">
                <a href="javascript:;">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-form-mobile.webp"
                        alt="form" title="form">
                    <p class="right_fix_box_title">Get A Quote</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_wechat">
                <a href="tel:<?php echo $site_info['sale_tel']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-tel-mobile.webp"
                        alt="sale_tel" title="sale_tel">
                    <p class="right_fix_box_title">Sale Tel</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!--FOOT END-->

<div class="popover_wrap" style="display: none;">
    <div class="popover_container">
        <div class=popover_close>
            <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/close.png" alt="">
        </div>
        <div class="popover_content">
            <div class="popover_title">
                <h2>Develop your lifting solution</h2>
                <p class="popover_title_description">Contact us today by email at :<a
                        onclick="gtag_report_conversion('mailto:<?php echo $site_info['email']; ?>');"><?php echo $site_info['email']; ?></a>, or fill
                    out the form below.</p>
            </div>
            <div class="popover_form">
                <form method="post">
                    <div class="popover_form_name">
                        <input id="popover-name" type="text" name="name" placeholder="Name:">
                    </div>
                    <div class="popover_form_phone">
                        <input id="popover-phone" type="text" name="phone" placeholder="Phone / WhatsApp:">
                    </div>
                    <div class="popover_form_email">
                        <input id="popover-email" type="text" name="email" placeholder="E-mail:">
                    </div>
                    <div class="popover_form_content">
                        <textarea id="popover-content" name="content" placeholder="Message:"></textarea>
                    </div>
                    <div class="popover_form_submit">
                        <input name="product_id" id="product-id" type="hidden" value="<?php echo (isset($product['id']) && ($product['id'] !== '')?$product['id']:''); ?>">
                        <input name="file" id="file" type="hidden" value="">
                        <input type="hidden" name="feedback_type" id="feedback_type" value="2">
                        <input type="hidden" id="file_url" value="">
                        <button id="popover-submit" type="button">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Floating WhatsApp Button (above live chat) -->
<?php if(!empty($site_info['whatsapp'])): 
        $cleanNumberWa = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
     ?>
    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumberWa; ?>" target="_blank" id="mobile-float-whatsapp" title="WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.262 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.965C16.528 1.978 14.057.95 11.433.95c-5.449 0-9.873 4.38-9.877 9.808 0 1.813.499 3.59 1.443 5.161l-1.005 3.67 3.774-.984zm11.085-6.732c-.3-.15-1.774-.875-2.05-.975-.273-.1-.472-.15-.672.15-.2.3-.775.975-.95 1.174-.175.2-.35.225-.65.075-1.127-.566-1.958-1.034-2.738-2.372-.2-.35-.2-.6-.35-.75-.15-.15-.3-.35-.45-.525-.15-.175-.2-.3-.3-.5-.1-.2-.05-.375.025-.525.075-.15.672-.782.75-.95.08-.175.04-.325-.02-.475-.06-.15-.672-1.62-.92-2.21-.242-.58-.487-.5-.672-.51-.173-.008-.371-.01-.57-.01-.2 0-.525.075-.8.375-.273.3-1.042 1.016-1.042 2.479 0 1.462 1.067 2.877 1.217 3.078.15.2 2.1 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.725 2.024-1.425.25-.7.25-1.299.175-1.425-.076-.125-.275-.2-.575-.35z"/>
        </svg>
    </a>
    <style>
        #mobile-float-whatsapp {
            position: fixed;
            bottom: 80px;
            right: 10px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99998;
            box-shadow: 0 4px 14px rgba(37,211,102,0.5);
            opacity: 0;
            transform: scale(0.5);
            pointer-events: none;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        #mobile-float-whatsapp.wa-visible {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
        #mobile-float-whatsapp:active {
            transform: scale(0.92);
        }
        #mobile-float-whatsapp svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
        #mobile-float-whatsapp::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25D366;
            opacity: 0.35;
            z-index: -1;
            animation: wa-pulse 2s ease-out infinite;
        }
        @keyframes wa-pulse {
            0%   { transform: scale(1);   opacity: 0.35; }
            100% { transform: scale(1.7); opacity: 0; }
        }
    </style>
    <script>
        setTimeout(function () {
            var btn = document.getElementById('mobile-float-whatsapp');
            if (btn) btn.classList.add('wa-visible');
        }, 4000);
    </script>
<?php endif; ?>

<!-- Tawk.to position alignment: match WhatsApp button right:6px -->
<script>
    var Tawk_API = Tawk_API || {};
    Tawk_API.customStyle = {
        zIndex: 99997,
        visibility: {
            mobile: {
                position: 'br',
                xOffset: 6,
                yOffset: 160
            }
        }
    };
</script>

<?php if(!(empty($site_info['salesiq']) || (($site_info['salesiq'] instanceof \think\Collection || $site_info['salesiq'] instanceof \think\Paginator ) && $site_info['salesiq']->isEmpty()))): ?>
    <div id="zoho-salesiq-raw-mobile" style="display: none;"><?php echo htmlspecialchars_decode($site_info['salesiq']); ?></div>
    <script>
        $(document).ready(function () {
            var salesiqLoaded = false;
            function loadSalesIQ() {
                if (salesiqLoaded) return;
                salesiqLoaded = true;
                
                var rawContainer = document.getElementById('zoho-salesiq-raw-mobile');
                if (!rawContainer) return;
                
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = rawContainer.innerHTML;
                
                // Inject non-script elements (a, style, div, etc.)
                while (tempDiv.firstChild) {
                    var node = tempDiv.firstChild;
                    if (node.nodeName && node.nodeName.toLowerCase() === 'script') {
                        tempDiv.removeChild(node);
                    } else {
                        document.body.appendChild(node);
                    }
                }
                
                // Re-parse and inject scripts (must recreate to execute)
                var tempDiv2 = document.createElement('div');
                tempDiv2.innerHTML = rawContainer.innerHTML;
                var scripts = tempDiv2.getElementsByTagName('script');
                var scriptArr = [];
                for (var i = 0; i < scripts.length; i++) { scriptArr.push(scripts[i]); }
                for (var i = 0; i < scriptArr.length; i++) {
                    var s = document.createElement('script');
                    for (var j = 0; j < scriptArr[i].attributes.length; j++) {
                        var attr = scriptArr[i].attributes[j];
                        s.setAttribute(attr.name, attr.value);
                    }
                    if (scriptArr[i].src) {
                        s.src = scriptArr[i].src;
                    } else {
                        s.text = scriptArr[i].text || scriptArr[i].textContent || scriptArr[i].innerHTML;
                    }
                    document.body.appendChild(s);
                }
                rawContainer.remove();
            }
            
            setTimeout(function () {
                window.addEventListener('scroll', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('mousemove', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('touchstart', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('click', loadSalesIQ, { passive: true, once: true });
            }, 3000);
            
            setTimeout(loadSalesIQ, 8000);
        });
    </script>
<?php endif; if(!(empty($site_info['google_tag_body']) || (($site_info['google_tag_body'] instanceof \think\Collection || $site_info['google_tag_body'] instanceof \think\Paginator ) && $site_info['google_tag_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_tag_body']); ?>
<?php endif; ?>

<script>
    $(document).ready(function () {
        var itiReady = false;
        var itiLoading = false;
        var itiPromise = null;

        function appendStylesOnce() {
            if (document.getElementById('intl-tel-inline-style')) {
                return;
            }
            var style = document.createElement('style');
            style.id = 'intl-tel-inline-style';
            style.innerHTML = `
                .iti {
                    width: 100%;
                    display: block !important;
                    margin-bottom: 10px;
                }
                .iti__country-list {
                    z-index: 9999;
                    color: #333;
                    text-align: left;
                }
                .iti input {
                    padding-left: 52px !important;
                    width: 100% !important;
                }
                .iti__selected-flag {
                    padding: 0 8px 0 12px !important;
                    background: transparent !important;
                }
                .iti__flag-container {
                    height: 100%;
                    display: flex;
                    align-items: center;
                }
                .iti--container {
                    z-index: 100010 !important;
                }
            `;
            document.head.appendChild(style);
        }

        function loadCss(href) {
            return new Promise(function (resolve) {
                var existed = document.querySelector('link[href="' + href + '"]');
                if (existed) {
                    resolve();
                    return;
                }
                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = href;
                link.onload = resolve;
                link.onerror = resolve;
                document.head.appendChild(link);
            });
        }

        function loadJs(src) {
            return new Promise(function (resolve, reject) {
                var existed = document.querySelector('script[src="' + src + '"]');
                if (existed) {
                    if (window.intlTelInput) {
                        resolve();
                    } else {
                        existed.addEventListener('load', function () { resolve(); }, { once: true });
                        existed.addEventListener('error', function () { reject(new Error('load failed')); }, { once: true });
                    }
                    return;
                }
                var script = document.createElement('script');
                script.src = src;
                script.async = true;
                script.onload = resolve;
                script.onerror = function () { reject(new Error('load failed')); };
                document.body.appendChild(script);
            });
        }

        function initIntlTelInputs() {
            if (!window.intlTelInput) {
                return;
            }
            var phoneInputs = document.querySelectorAll('.quote-phone, .footer-phone, #popover-phone, .home-collect-phone');
            phoneInputs.forEach(function (input) {
                if (input._iti) {
                    return;
                }
                var iti = window.intlTelInput(input, {
                    initialCountry: "auto",
                    dropdownContainer: document.body,
                    useFullscreenPopup: false,
                    geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json")
                            .then(function (res) { return res.json(); })
                            .then(function (data) { callback(data.country_code || "us"); })
                            .catch(function () { callback("us"); });
                    },
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js"
                });
                input._iti = iti;
            });
            itiReady = true;
        }

        function ensureIntlTelInputLoaded() {
            if (itiReady) {
                return Promise.resolve();
            }
            if (itiLoading && itiPromise) {
                return itiPromise;
            }

            itiLoading = true;
            itiPromise = Promise.all([
                loadCss("https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/css/intlTelInput.css"),
                loadJs("https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js")
            ]).then(function () {
                appendStylesOnce();
                initIntlTelInputs();
            }).catch(function () {
                // Keep form available even when CDN/network fails
            }).finally(function () {
                itiLoading = false;
            });

            return itiPromise;
        }

        $(document).on('focus click', '.quote-phone, .footer-phone, #popover-phone, .home-collect-phone, .right_fix_form, .footer-feedback-btn, #popover-submit', function () {
            ensureIntlTelInputLoaded();
        });

        // Listen to interaction to load immediately
        window.addEventListener('scroll', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('mousemove', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('touchstart', ensureIntlTelInputLoaded, { passive: true, once: true });
    });
</script>

</div>

</body>
</html>
<?php /*a:5:{s:76:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/portal\\service.html";i:1781693294;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\head.html";i:1781168941;s:71:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\nav.html";i:1781071832;s:74:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\banner.html";i:1781748681;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\foot.html";i:1781753555;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
    <meta name="description" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="/themes/simpleboot3_mobile/public/assets/css/common.css?v=20260611.9" rel="stylesheet" type="text/css">
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

    <link href="/themes/simpleboot3_mobile/public/assets/css/service.css?v=2.0" rel="stylesheet" type="text/css">
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
                <a class="nav-title" href="<?php echo cmf_url('portal/index/industries'); ?>">CASES</a>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/news'); ?>">NEWS CENTER</a>
            </li>
            <li><a class="nav-title" href="<?php echo cmf_url('portal/index/quote'); ?>">GET A QUOTE</a></li>
        </ul>
    </div>
</div>
<!--NAV END-->

    <!-- BANNER START -->
<div class="banner">
    <img src="<?php echo cmf_get_image_url($banner['image']); ?>" alt="<?php echo $banner['title']; ?>" fetchpriority="high" loading="eager" decoding="async">
    <div class="banner-text">
        <?php echo $banner['title']; ?>
    </div>
</div>
<!-- BANNER END -->


    <div class="mobile-breadcrumb">
        <a href="/">Home</a>
        <span>/</span>
        <span>Services</span>
    </div>

    <!-- Service Cards -->
    <div class="service-section service-cards-section">
        <div class="service-cards-container">
            <div class="service-card">
                <div class="card-header-wrap">
                    <h3 class="card-title">Customization<br>Design</h3>
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5"></circle><circle cx="17.5" cy="10.5" r=".5"></circle><circle cx="8.5" cy="7.5" r=".5"></circle><circle cx="6.5" cy="12.5" r=".5"></circle><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"></path></svg>
                </div>
                <p class="card-text">Nucleon Crane has professional engineer department, offering tailored lifting solution based on your actual requirements.</p>
                <a href="#" class="card-link">&rarr;</a>
            </div>
            
            <div class="service-card">
                <div class="card-header-wrap">
                    <h3 class="card-title">Installation<br>Guidance</h3>
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                </div>
                <p class="card-text">For heavy lifting overhead cranes or gantry cranes, we could offer on-site installation service or guidance to make sure the equipment work smoothly.</p>
                <a href="#" class="card-link">&rarr;</a>
            </div>
            
            <div class="service-card">
                <div class="card-header-wrap">
                    <h3 class="card-title">Free Spare<br>Parts</h3>
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </div>
                <p class="card-text">If your crane equipment needs spare parts to replace, we could provide you with free spare parts for the first year.</p>
                <a href="#" class="card-link">&rarr;</a>
            </div>
            
            <div class="service-card">
                <div class="card-header-wrap">
                    <h3 class="card-title">Warranty<br>Service</h3>
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <p class="card-text">Quality is always the most important concern of the crane equipment. Our overhead cranes and gantry cranes have 5-year warranty service to guarantee safe operation of each product.</p>
                <a href="#" class="card-link">&rarr;</a>
            </div>
            
            <div class="service-card">
                <div class="card-header-wrap">
                    <h3 class="card-title">Online<br>Communication</h3>
                    <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                </div>
                <p class="card-text">We provide 24 Hours online communication service for each client. For more information or product details, feel free to contact us anytime.</p>
                <a href="#" class="card-link">&rarr;</a>
            </div>
        </div>
    </div>



    <!-- After-sales Service -->
    <?php if(!(empty($service_site['aftersales_img_left']) || (($service_site['aftersales_img_left'] instanceof \think\Collection || $service_site['aftersales_img_left'] instanceof \think\Paginator ) && $service_site['aftersales_img_left']->isEmpty()))): ?>
        <div class="service-section">
            <h2 class="section-title"><?php echo (isset($service_site['aftersales_title']) && ($service_site['aftersales_title'] !== '')?$service_site['aftersales_title']:'After-sales Service'); ?></h2>
            <div class="aftersales-grid">
                <div class="aftersales-card">
                    <img src="<?php echo cmf_get_image_url($service_site['aftersales_img_left']); ?>" alt="After-sales Left">
                </div>
                <div class="aftersales-card">
                    <img src="<?php echo cmf_get_image_url($service_site['aftersales_img_mt']); ?>" alt="<?php echo (isset($service_site['aftersales_text_mt']) && ($service_site['aftersales_text_mt'] !== '')?$service_site['aftersales_text_mt']:''); ?>">
                    <div class="aftersales-overlay"></div>
                    <div class="aftersales-text"><?php echo (isset($service_site['aftersales_text_mt']) && ($service_site['aftersales_text_mt'] !== '')?$service_site['aftersales_text_mt']:''); ?></div>
                </div>
                <div class="aftersales-card">
                    <img src="<?php echo cmf_get_image_url($service_site['aftersales_img_mb']); ?>" alt="<?php echo (isset($service_site['aftersales_text_mb']) && ($service_site['aftersales_text_mb'] !== '')?$service_site['aftersales_text_mb']:''); ?>">
                    <div class="aftersales-overlay"></div>
                    <div class="aftersales-text"><?php echo (isset($service_site['aftersales_text_mb']) && ($service_site['aftersales_text_mb'] !== '')?$service_site['aftersales_text_mb']:''); ?></div>
                </div>
                <div class="aftersales-card" style="border: 1px solid #eaeaea; background: #fff;">
                    <img src="<?php echo cmf_get_image_url($service_site['aftersales_img_right']); ?>" alt="After-sales Certificate" style="object-fit: contain; padding: 1.5rem;">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Product Brochures -->
    <?php if(!(empty($download_list) || (($download_list instanceof \think\Collection || $download_list instanceof \think\Paginator ) && $download_list->isEmpty()))): ?>
        <div class="service-section">
            <h2 class="section-title">Product Brochures</h2>
            <ul class="download-list">
                <?php if(is_array($download_list) || $download_list instanceof \think\Collection || $download_list instanceof \think\Paginator): if( count($download_list)==0 ) : echo "" ;else: foreach($download_list as $key=>$vo): ?>
                    <li class="download-item">
                        <a href="<?php echo cmf_get_image_preview_url($vo['more']['file']['url']); ?>" target="_blank" download style="text-decoration: none;">
                            <div class="download-item-title"><?php echo $vo['post_title']; ?></div>
                            <div class="download-item-line"></div>
                            <div class="download-item-bottom">
                                <div class="download-item-bottom-left">
                                    <img src="/themes/simpleboot3_mobile/public/assets/images/pdf.png" alt="pdf" style="height: 2.4rem; width: auto;">
                                    Download PDF
                                </div>
                                <div class="download-item-bottom-right">
                                    <img src="/themes/simpleboot3_mobile/public/assets/images/download.png" alt="download" style="width: 1.6rem; height: 1.6rem;">
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Companies -->
    <div class="service-section">
        <h2 class="section-title">Companies that have established cooperation</h2>
        <ul class="service-partner-list">
            <?php if(is_array($service_site['companies']) || $service_site['companies'] instanceof \think\Collection || $service_site['companies'] instanceof \think\Paginator): if( count($service_site['companies'])==0 ) : echo "" ;else: foreach($service_site['companies'] as $key=>$vo): ?>
                <li class="service-partner-item">
                    <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

</div>

<!--FOOT START-->
<div class="footer">
    <div class="footer-logo">
        <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/logo.png" alt="logo">
    </div>
    <div class="footer-line"></div>
    <div class="footer-content">
        <div class="footer-contact clearfix">
            <div class="footer-contact-item">
                <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-email.png" alt="email">
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
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/quote-whatsapp.png"
                        alt="whatsapp">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>');"
                            target="_blank"><?php echo $site_info['whatsapp']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['sale_tel'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-phone.png"
                        alt="phone">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('tel:<?php echo $site_info['sale_tel']; ?>');"><?php echo $site_info['sale_tel']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['wechat'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-wechat.png"
                        alt="wechat">
                    <p class="footer-contact-item-content">
                        <a target="_blank"><?php echo $site_info['wechat']; ?></a>
                    </p>
                </div>
            <?php endif; ?>
            <div class="footer-contact-social">
                <a href="<?php echo (isset($site_info['linkedin']) && ($site_info['linkedin'] !== '')?$site_info['linkedin']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/linkedin.png" alt="linkedin"></a>
                <a href="<?php echo (isset($site_info['facebook']) && ($site_info['facebook'] !== '')?$site_info['facebook']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/facebook.png" alt="facebook"></a>
                <a href="<?php echo (isset($site_info['youtube']) && ($site_info['youtube'] !== '')?$site_info['youtube']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/youtube.png" alt="youtube"></a>
                <a href="<?php echo (isset($site_info['vk']) && ($site_info['vk'] !== '')?$site_info['vk']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/vk.png" alt="vk"></a>
            </div>
        </div>

        <div class="footer-feedback">
            <div class="footer-feedback-item">
                <label>NAME: <span style="color:#ea222d">*</span></label>
                <input type="text" name="footer-name" value="" placeholder="Please Enter *">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>EMAIL: <span style="color:#ea222d">*</span></label>
                <input type="text" name="footer-email" value="" placeholder="Please Enter *">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>PHONE:</label>
                <input type="text" class="footer-phone" name="footer-phone" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>MESSAGE: <span style="color:#ea222d">*</span></label>
                <input type="text" name="footer-message" value="" placeholder="Please Enter *">
            </div>
            <div class="footer-feedback-line"></div>
            <button class="footer-feedback-btn">Submit Your Request</button>
        </div>
    </div>
    <div class="footer-bottom">
        Copyright &copy; Nucleon (Xinxiang) Crane Co., Ltd. | <a href="<?php echo cmf_url('portal/index/privacy_policy'); ?>" target="_blank">Privacy Policy</a>
    </div>
    <div class="right_fix">
        <div class="right_fix_connect">
            <div class="right_fix_box right_fix_whatsapp">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/whatsapp.webp" alt="whatsapp">
                    <p class="right_fix_box_title">Whatsapp</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_email">
                <a href="mailto:<?php echo $site_info['email']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/email.webp" alt="email">
                    <p class="right_fix_box_title">Email</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_form">
                <a href="javascript:;">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/quote.webp" alt="quote">
                    <p class="right_fix_box_title">Message</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_wechat">
                <a href="tel:<?php echo $site_info['sale_tel']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/tel.webp" alt="tel">
                    <p class="right_fix_box_title">Wechat</p>
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
                        <input id="popover-name" type="text" name="name" placeholder="Name: *">
                    </div>
                    <div class="popover_form_phone">
                        <input id="popover-phone" type="text" name="phone" placeholder="Phone / WhatsApp:">
                    </div>
                    <div class="popover_form_email">
                        <input id="popover-email" type="text" name="email" placeholder="E-mail: *">
                    </div>
                    <div class="popover_form_content">
                        <textarea id="popover-content" name="content" placeholder="Message: *"></textarea>
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



</body>
</html>
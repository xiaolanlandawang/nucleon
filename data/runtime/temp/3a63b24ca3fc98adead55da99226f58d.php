<?php /*a:4:{s:76:"C:\laragon\www\nucleon\public/themes/simpleboot3/portal\\privacy_policy.html";i:1781082570;s:65:"C:\laragon\www\nucleon\public/themes/simpleboot3/public\head.html";i:1781168937;s:64:"C:\laragon\www\nucleon\public/themes/simpleboot3/public\nav.html";i:1781085184;s:65:"C:\laragon\www\nucleon\public/themes/simpleboot3/public\foot.html";i:1781676838;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privacy Policy - <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="privacy policy, <?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>">
    <meta name="description" content="Privacy Policy for <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="/themes/simpleboot3/public/assets/images/logo.ico">
<link href="/themes/simpleboot3/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3/public/assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="/themes/simpleboot3/public/assets/css/common.css?v=20260611.9" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/common.js"></script>

<?php if(!(empty($site_info['google_analytics']) || (($site_info['google_analytics'] instanceof \think\Collection || $site_info['google_analytics'] instanceof \think\Paginator ) && $site_info['google_analytics']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_analytics']); ?>
<?php endif; if(!(empty($site_info['google_head']) || (($site_info['google_head'] instanceof \think\Collection || $site_info['google_head'] instanceof \think\Paginator ) && $site_info['google_head']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_head']); ?>
<?php endif; ?>



<style>
    #zsiq_chat_wrap{
        max-height: 550px !important;
    }
</style>
    <link href="/themes/simpleboot3/public/assets/css/privacy.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php if(!(empty($site_info['google_body']) || (($site_info['google_body'] instanceof \think\Collection || $site_info['google_body'] instanceof \think\Paginator ) && $site_info['google_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_body']); ?>
<?php endif; 
    $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
    if (strpos($cleanNumber, '0') === 0) {
    $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
    }
 ?>
<!--NAV START-->

<div class="header">
    <div class="header-top">
        <div class="header-container">
            <div class="header-contact">
                <div class="header-contact-item">
                    <a href="mailto:<?php echo $site_info['email']; ?>" onclick="return confirm('Ready to get in touch? Click OK to open your email app. 📬');">
                        <img src="/themes/simpleboot3/public/assets/images/header-email.png" alt="email">
                        <span class="contact-label">E-Mail:</span> <?php echo $site_info['email']; ?>
                    </a>
                </div>
                <div class="header-contact-item">
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>">
                        <img src="/themes/simpleboot3/public/assets/images/header-whatsapp.png" alt="whatsapp">
                        <span class="contact-label">WhatsApp:</span> <?php echo $site_info['whatsapp']; ?>
                    </a>
                </div>
            </div>
            <div class="header-link">
                <div class="header-link-item">
                    <a href="<?php echo $site_info['facebook']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-facebook.png" alt="facebook"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['youtube']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-youtube.png" alt="youtube"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['linkedin']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-linkedin.png" alt="linkedin"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['vk']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-vk.svg" alt="vk"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-container">
        <div class="header-logo">
            <a href="/">
                <img src="/themes/simpleboot3/public/assets/images/logo.png" alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
            </a>
        </div>

        <ul class="header-nav">
            <li class="nav-item">
                <a class="nav-title" href="/">Home</a>
            </li>
            <li class="nav-item nav-item-about has-sub">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/about'); ?>">About Us</a>
                <div class="nav-sub about-nav">
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/about'); ?>">About Nucleon</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/cert'); ?>">Certificates</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/create'); ?>">Innovation&Creation</a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-item-product has-sub">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/product'); ?>">Products</a>
                <div class="nav-sub product-nav">
                    <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                        <div class="nav-sub-item">
                            <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>">
                                <?php echo $vo['name']; ?>
                            </a>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/service'); ?>">Service</a>
            </li>
            <li class="nav-item nav-item-about">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/industries'); ?>">Cases</a>
            </li>
            <li class="nav-item nav-item-about has-sub">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/news'); ?>">News Center</a>
                <div class="nav-sub about-nav">
                    <?php if(is_array($news_category) || $news_category instanceof \think\Collection || $news_category instanceof \think\Paginator): if( count($news_category)==0 ) : echo "" ;else: foreach($news_category as $key=>$vo): ?>
                        <div class="nav-sub-item">
                            <a href="<?php echo cmf_url('portal/index/news',array('id'=>$vo['id'])); ?>">
                                <?php echo $vo['name']; ?>
                            </a>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
            
            <li class="nav-item nav-item-contact">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/quote'); ?>">Get A Quote</a>
            </li>
        </ul>

    </div>
</div>
<!--NAV END-->



<div class="privacy-container main-content reveal">
    <div class="privacy-layout">
        <!-- Sidebar Navigation -->
        <aside class="privacy-sidebar">
            <h1 class="privacy-sidebar-title">Privacy Policy</h1>
            <nav class="privacy-nav">
                <ul>
                    <li><a href="#intro" class="active">Introduction</a></li>
                    <li><a href="#collect">Information We Collect</a></li>
                    <li><a href="#use">How We Use Your Information</a></li>
                    <li><a href="#cookies">Cookies and Tracking Technologies</a></li>
                    <li><a href="#sharing">Information Sharing</a></li>
                    <li><a href="#transfer">International Data Transfers</a></li>
                    <li><a href="#security">Data Security</a></li>
                    <li><a href="#retention">Data Retention</a></li>
                    <li><a href="#rights">Your Rights</a></li>
                    <li><a href="#links">Third-Party Links</a></li>
                    <li><a href="#changes">Changes to This Policy</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <main class="privacy-content">
            <div class="privacy-last-updated" style="font-size: 14px; color: #777; margin-bottom: 20px; font-style: italic;">
                Last Updated: June 2026
            </div>

            <section id="intro" class="privacy-section">
                <h2>Introduction</h2>
                <p>Nucleon (Xinxiang) Crane Co., Ltd. ("Nucleon", "we", "our", or "us") respects your privacy and is committed to protecting the personal information you provide when visiting our website.</p>
                <p>This Privacy Policy explains how we collect, use, store, and protect your personal information.</p>
            </section>

            <section id="collect" class="privacy-section">
                <h2>Information We Collect</h2>
                <p>We may collect the following information when you interact with our website:</p>
                
                <h3>Information You Provide</h3>
                <ul>
                    <li>Name</li>
                    <li>Company Name</li>
                    <li>Email Address</li>
                    <li>Phone Number</li>
                    <li>Country/Region</li>
                    <li>Inquiry Details</li>
                    <li>Product Requirements</li>
                    <li>Any information voluntarily submitted through contact forms, quotation requests, email communications, or WhatsApp communications.</li>
                </ul>

                <h3>Automatically Collected Information</h3>
                <p>When you visit our website, we may automatically collect:</p>
                <ul>
                    <li>IP Address</li>
                    <li>Browser Type</li>
                    <li>Device Information</li>
                    <li>Operating System</li>
                    <li>Pages Visited</li>
                    <li>Visit Duration</li>
                    <li>Referral Sources</li>
                    <li>Website Usage Statistics</li>
                </ul>
                <p>This information helps us improve website performance and user experience.</p>
            </section>

            <section id="use" class="privacy-section">
                <h2>How We Use Your Information</h2>
                <p>We use your information to:</p>
                <ul>
                    <li>Respond to inquiries and quotation requests</li>
                    <li>Provide product and service information</li>
                    <li>Communicate regarding crane solutions and technical support</li>
                    <li>Improve website functionality and user experience</li>
                    <li>Analyze website traffic and visitor behavior</li>
                    <li>Comply with applicable legal obligations</li>
                </ul>
            </section>

            <section id="cookies" class="privacy-section">
                <h2>Cookies and Tracking Technologies</h2>
                <p>Our website may use cookies and similar technologies to:</p>
                <ul>
                    <li>Ensure website functionality</li>
                    <li>Analyze website traffic</li>
                    <li>Improve user experience</li>
                    <li>Measure marketing effectiveness</li>
                </ul>
                
                <h3>Third-party services may include:</h3>
                <ul>
                    <li>Google Analytics</li>
                    <li>Google Tag Manager</li>
                    <li>Google Maps</li>
                    <li>Other analytics or marketing tools</li>
                </ul>
                <p>You may disable cookies through your browser settings; however, some website features may not function properly.</p>
            </section>

            <section id="sharing" class="privacy-section">
                <h2>Information Sharing</h2>
                <p>We do not sell, rent, or trade your personal information.</p>
                <p>We may share information only when:</p>
                <ul>
                    <li>Required by law or legal process</li>
                    <li>Necessary to protect our legal rights</li>
                    <li>Required to provide requested services</li>
                    <li>Working with trusted service providers under confidentiality obligations</li>
                </ul>
            </section>

            <section id="transfer" class="privacy-section">
                <h2>International Data Transfers</h2>
                <p>As an international business, information submitted through this website may be processed and stored in countries where we or our service providers operate.</p>
                <p>We take reasonable measures to ensure appropriate protection of personal data.</p>
            </section>

            <section id="security" class="privacy-section">
                <h2>Data Security</h2>
                <p>We implement reasonable technical and organizational measures to protect your information, including:</p>
                <ul>
                    <li>SSL encryption</li>
                    <li>Secure hosting infrastructure</li>
                    <li>Restricted access controls</li>
                    <li>Regular security monitoring</li>
                </ul>
                <p>However, no internet transmission or storage method can be guaranteed to be 100% secure.</p>
            </section>

            <section id="retention" class="privacy-section">
                <h2>Data Retention</h2>
                <p>We retain personal information only as long as necessary for:</p>
                <ul>
                    <li>Business communications</li>
                    <li>Customer service</li>
                    <li>Legal and regulatory requirements</li>
                </ul>
                <p>After this period, information may be securely deleted.</p>
            </section>

            <section id="rights" class="privacy-section">
                <h2>Your Rights</h2>
                <p>Depending on your jurisdiction, you may have the right to:</p>
                <ul>
                    <li>Access your personal data</li>
                    <li>Correct inaccurate information</li>
                    <li>Request deletion of personal data</li>
                    <li>Restrict processing</li>
                    <li>Object to processing</li>
                    <li>Request data portability</li>
                </ul>
                <p>To exercise these rights, please contact us.</p>
            </section>

            <section id="links" class="privacy-section">
                <h2>Third-Party Links</h2>
                <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those websites.</p>
            </section>

            <section id="changes" class="privacy-section">
                <h2>Changes to This Policy</h2>
                <p>We reserve the right to update this Privacy Policy at any time. Any updates will be posted on this page with a revised effective date.</p>
            </section>

            <section id="contact" class="privacy-section">
                <h2>Contact Us</h2>
                <p>Nucleon (Xinxiang) Crane Co., Ltd.</p>
                <p>Email: <a href="mailto:<?php echo $site_info['email']; ?>"><?php echo $site_info['email']; ?></a></p>
                <p>Phone: <?php echo $site_info['sale_tel']; ?></p>
                <p>Address: <?php echo $site_info['address']; ?></p>
                <p>If you have questions regarding this Privacy Policy, please contact us at any time.</p>
            </section>
        </main>
    </div>
</div>

<!--FOOT START-->
<div class="footer">
    <div class="footer-content clearfix">

        <div class="footer-about">
            <div class="footer-logo">
                <img src="/themes/simpleboot3/public/assets/images/logo.webp" alt="logo">
            </div>
            <div class="footer-about-desc">
                Nucleon is a large-scale equipment manufacturing enterprise that provides high-quality customized solutions for key industries such as metallurgy, energy, and power worldwide. Nucleon's products are exported to various countries and regions across Europe, Asia, Africa, the Middle East, and beyond.
            </div>
            <div class="footer-social">
                <a href="<?php echo $site_info['facebook']; ?>" target="_blank" title="Facebook">
                    <img src="/themes/simpleboot3/public/assets/images/header-facebook.png" alt="facebook">
                </a>
                <a href="<?php echo $site_info['linkedin']; ?>" target="_blank" title="LinkedIn">
                    <img src="/themes/simpleboot3/public/assets/images/header-linkedin.png" alt="linkedin">
                </a>
                <a href="<?php echo $site_info['youtube']; ?>" target="_blank" title="YouTube">
                    <img src="/themes/simpleboot3/public/assets/images/header-youtube.png" alt="youtube">
                </a>
                <a href="<?php echo $site_info['vk']; ?>" target="_blank" title="VK">
                    <img src="/themes/simpleboot3/public/assets/images/vk.png" alt="vk">
                </a>
            </div>
        </div>

        <div class="footer-news">
            <div class="footer-title">PRODUCTS</div>
            <div class="footer-news-list">
                <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                    <a href="<?php echo cmf_url('portal/index/product', ['id' => $vo['id']]); ?>"
                        class="footer-news-item"><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="footer-contact">
            <div class="footer-title">Contact Info</div>
            <div class="footer-contact-item footer-contact-email" onclick="location.href='mailto:<?php echo $site_info['email']; ?>';">
                <?php echo $site_info['email']; ?></div>
            <div class="footer-contact-item footer-contact-address"><?php echo $site_info['address']; ?></div>
            <?php 
                $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
                if (strpos($cleanNumber, '0') === 0) {
                    $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
                }
             if(!empty($site_info['whatsapp'])): ?>
                <div class="footer-contact-item footer-contact-whatsapp" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>', '_blank');">
                    <?php echo $site_info['whatsapp']; ?></div>
            <?php endif; ?>
            <div class="footer-contact-item footer-contact-tel" onclick="location.href='tel:<?php echo $site_info['sale_tel']; ?>';">
                <?php echo $site_info['sale_tel']; ?></div>
            <div class="footer-contact-item footer-contact-wechat"><?php echo $site_info['wechat']; ?></div>
        </div>

        <div class="footer-form">
            <div class="footer-title">CONTACT US</div>
            <div class="footer-field">
                <label>Name <span style="color:#ea222d">*</span></label>
                <input type="text" class="footer-name" placeholder="Name *">
            </div>
            <div class="footer-field">
                <label>Email <span style="color:#ea222d">*</span></label>
                <input type="text" class="footer-email" placeholder="Email *">
            </div>
            <div class="footer-field">
                <label>Phone/Whatsapp</label>
                <input type="text" class="footer-phone" placeholder="Phone/Whatsapp">
            </div>
            <div class="footer-field">
                <label>Message <span style="color:#ea222d">*</span></label>
                <textarea class="footer-message"
                    placeholder="Message *"></textarea>
            </div>
            <div class="footer-submit">SUBMIT</div>
        </div>

    </div>

    <div class="footer-bottom">
        Copyright &copy; Nucleon (Xinxiang) Crane Co., Ltd. | <a href="<?php echo cmf_url('portal/index/privacy_policy'); ?>" target="_blank" style="color: #ffffff; text-decoration: none; margin-left: 10px; transition: color 0.2s;" onmouseover="this.style.color='#ea222d';" onmouseout="this.style.color='#ffffff';">Privacy Policy</a>
    </div>
</div>
<!--FOOT END-->

<div class="form-message-modal" aria-hidden="true">
    <div class="form-message-dialog">
        <div class="form-message-icon"></div>
        <div class="form-message-title">Submit Success</div>
        <div class="form-message-text">Thank you for your inquiry. We will contact you soon.</div>
        <button class="form-message-button" type="button">OK</button>
    </div>
</div>


<!-- Floating box -->

<div class="right_fix">
    <div class="right_fix_connect">
        <div class="right_fix_box right_fix_form">
            <img src="/themes/simpleboot3/public/assets/images/fix-form.webp" alt="form" title="form">
        </div>
        <div class="right_fix_box right_fix_whatsapp">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>" target="_blank">
                <img src="/themes/simpleboot3/public/assets/images/fix-whatsapp.webp" alt="whatsapp" title="whatsapp">
                <div class="right_fix_box_connect">
                    <p>WhatsApp:</p>
                    <p class="right_fix_box_connect_text"><?php echo $site_info['whatsapp']; ?></p>
                </div>
            </a>
        </div>
        <div class="right_fix_box right_fix_wechat">
            <img src="/themes/simpleboot3/public/assets/images/fix-wechat.webp" alt="wechat" title="wechat">
            <div class="right_fix_box_connect">
                <p>Wechat:</p>
                <p class="right_fix_box_connect_text"><?php echo $site_info['wechat']; ?></p>
            </div>
        </div>
        <div class="right_fix_box right_fix_email">
            <a href="mailto:<?php echo $site_info['email']; ?>">
                <img src="/themes/simpleboot3/public/assets/images/fix-email.webp" alt="email" title="email">
                <div class="right_fix_box_connect">
                    <p>Email:</p>
                    <p class="right_fix_box_connect_text"><?php echo $site_info['email']; ?></p>
                </div>
            </a>
        </div>
        <div class="right_fix_box right_fix_top" title="Back to top">
            <span class="right_fix_top_icon">&#8679;</span>
        </div>
    </div>
</div>


<!--弹窗-->
<div class="popover_wrap" style="display: none;">
    <div class="popover_container">
        <div class=popover_close>
            <img src="/themes/simpleboot3/public/assets/images/close.png" alt="close">
        </div>
        <h2 class="popover_main_title">DEVELOP YOUR LIFTING SOLUTION</h2>
        <div class="popover_content new_popover_content">
            <div class="popover_left">
                <div class="popover_left_box">
                    <h3>GET A QUOTE</h3>
                    <ul class="popover_contact_list">
                        <?php if(!(empty($site_info['email']) || (($site_info['email'] instanceof \think\Collection || $site_info['email'] instanceof \think\Paginator ) && $site_info['email']->isEmpty()))): ?>
                            <li>
                                <img src="/themes/simpleboot3/public/assets/images/quote-email.webp" alt="Email">
                                <a href="mailto:<?php echo $site_info['email']; ?>"><?php echo $site_info['email']; ?></a>
                            </li>
                        <?php endif; if(!(empty($site_info['address']) || (($site_info['address'] instanceof \think\Collection || $site_info['address'] instanceof \think\Paginator ) && $site_info['address']->isEmpty()))): ?>
                            <li>
                                <img src="/themes/simpleboot3/public/assets/images/quote-location.webp" alt="Address">
                                <span><?php echo $site_info['address']; ?></span>
                            </li>
                        <?php endif; if(!(empty($site_info['sale_tel']) || (($site_info['sale_tel'] instanceof \think\Collection || $site_info['sale_tel'] instanceof \think\Paginator ) && $site_info['sale_tel']->isEmpty()))): ?>
                            <li>
                                <img src="/themes/simpleboot3/public/assets/images/quote-tel.webp" alt="Tel">
                                <a href="tel:<?php echo $site_info['sale_tel']; ?>"><?php echo $site_info['sale_tel']; ?></a>
                            </li>
                        <?php endif; if(!(empty($site_info['wechat']) || (($site_info['wechat'] instanceof \think\Collection || $site_info['wechat'] instanceof \think\Paginator ) && $site_info['wechat']->isEmpty()))): ?>
                            <li>
                                <img src="/themes/simpleboot3/public/assets/images/fix-wechat.webp" alt="WeChat">
                                <span><?php echo $site_info['wechat']; ?></span>
                            </li>
                        <?php endif; if(!(empty($site_info['whatsapp']) || (($site_info['whatsapp'] instanceof \think\Collection || $site_info['whatsapp'] instanceof \think\Paginator ) && $site_info['whatsapp']->isEmpty()))): ?>
                            <li>
                                <img src="/themes/simpleboot3/public/assets/images/quote-whatsapp.webp" alt="WhatsApp">
                                <?php $cleanWhatsapp = preg_replace('/[^0-9]/', '', $site_info['whatsapp']); ?>
                                <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanWhatsapp; ?>" target="_blank"><?php echo $site_info['whatsapp']; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="popover_right">
                <div class="popover_form">
                    <form method="post">
                        <div class="popover_form_row">
                            <div class="popover_form_name">
                                <input id="popover-name" type="text" name="name" placeholder="Name: *">
                            </div>
                            <div class="popover_form_email">
                                <input id="popover-email" type="text" name="email" placeholder="E-mail: *">
                            </div>
                        </div>
                        <div class="popover_form_phone">
                            <input id="popover-phone" type="text" name="phone" placeholder="Phone / WhatsApp:">
                        </div>
                        <div class="popover_form_content">
                            <textarea id="popover-content" name="content" placeholder="Message: *"></textarea>
                        </div>
                        <div class="popover_form_submit">
                            <input name="product_id" id="product-id" type="hidden" value="<?php echo (isset($product['id']) && ($product['id'] !== '')?$product['id']:''); ?>">
                            <input name="file" id="file" type="hidden" value="">
                            <input type="hidden" name="feedback_type" id="feedback_type" value="2">
                            <button id="popover-submit" type="button">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Floating WhatsApp Button (above live chat) - PC -->
<?php if(!empty($site_info['whatsapp'])): 
        $cleanNumberWaPC = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
     ?>
    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumberWaPC; ?>" target="_blank" id="pc-float-whatsapp" title="WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.262 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.965C16.528 1.978 14.057.95 11.433.95c-5.449 0-9.873 4.38-9.877 9.808 0 1.813.499 3.59 1.443 5.161l-1.005 3.67 3.774-.984zm11.085-6.732c-.3-.15-1.774-.875-2.05-.975-.273-.1-.472-.15-.672.15-.2.3-.775.975-.95 1.174-.175.2-.35.225-.65.075-1.127-.566-1.958-1.034-2.738-2.372-.2-.35-.2-.6-.35-.75-.15-.15-.3-.35-.45-.525-.15-.175-.2-.3-.3-.5-.1-.2-.05-.375.025-.525.075-.15.672-.782.75-.95.08-.175.04-.325-.02-.475-.06-.15-.672-1.62-.92-2.21-.242-.58-.487-.5-.672-.51-.173-.008-.371-.01-.57-.01-.2 0-.525.075-.8.375-.273.3-1.042 1.016-1.042 2.479 0 1.462 1.067 2.877 1.217 3.078.15.2 2.1 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.725 2.024-1.425.25-.7.25-1.299.175-1.425-.076-.125-.275-.2-.575-.35z"/>
        </svg>
    </a>
    <style>
        #pc-float-whatsapp {
            position: fixed;
            bottom: 100px;
            right: 28px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99998;
            box-shadow: 0 4px 14px rgba(37,211,102,0.5);
            text-decoration: none;
            opacity: 0;
            transform: scale(0.5);
            pointer-events: none;
            transition: opacity 0.4s ease, transform 0.4s ease, box-shadow 0.2s ease;
        }
        #pc-float-whatsapp.wa-visible {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
        #pc-float-whatsapp:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 22px rgba(37,211,102,0.6);
        }
        #pc-float-whatsapp svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
        #pc-float-whatsapp::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25D366;
            opacity: 0.35;
            z-index: -1;
            animation: wa-pulse-pc 2s ease-out infinite;
        }
        @keyframes wa-pulse-pc {
            0%   { transform: scale(1);   opacity: 0.35; }
            100% { transform: scale(1.7); opacity: 0; }
        }
    </style>
    <script>
        setTimeout(function () {
            var btn = document.getElementById('pc-float-whatsapp');
            if (btn) btn.classList.add('wa-visible');
        }, 4000);
    </script>
<?php endif; ?>

<!-- Tawk.to position alignment: match WhatsApp button right:24px -->
<script>
    var Tawk_API = Tawk_API || {};
    Tawk_API.customStyle = {
        zIndex: 99997,
        visibility: {
            desktop: {
                position: 'br',
                xOffset: 24,
                yOffset: 170
            },
            mobile: {
                position: 'br',
                xOffset: 6,
                yOffset: 15
            }
        }
    };
</script>

<?php if(!(empty($site_info['salesiq']) || (($site_info['salesiq'] instanceof \think\Collection || $site_info['salesiq'] instanceof \think\Paginator ) && $site_info['salesiq']->isEmpty()))): ?>
    <div id="zoho-salesiq-raw" style="display: none;"><?php echo htmlspecialchars_decode($site_info['salesiq']); ?></div>
    <script>
        $(document).ready(function () {
            var salesiqLoaded = false;
            function loadSalesIQ() {
                if (salesiqLoaded) return;
                salesiqLoaded = true;
                
                var rawContainer = document.getElementById('zoho-salesiq-raw');
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







<!-- old -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.privacy-nav a');
    var sections = document.querySelectorAll('.privacy-section');
    
    function changeActiveLink() {
        var scrollPos = window.scrollY || document.documentElement.scrollTop;
        var offset = 150; 
        
        sections.forEach(function(section) {
            var top = section.offsetTop - offset;
            var bottom = top + section.offsetHeight;
            
            if (scrollPos >= top && scrollPos < bottom) {
                links.forEach(function(link) {
                    link.classList.remove('active');
                });
                var activeLink = document.querySelector('.privacy-nav a[href="#' + section.id + '"]');
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }
    
    window.addEventListener('scroll', changeActiveLink);
    
    links.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var targetId = this.getAttribute('href');
            var targetSection = document.querySelector(targetId);
            if (targetSection) {
                var targetTop = targetSection.offsetTop - 100;
                window.scrollTo({
                    top: targetTop,
                    behavior: 'smooth'
                });
                links.forEach(function(l) { l.classList.remove('active'); });
                this.classList.add('active');
            }
        });
    });
});
</script>

</body>
</html>

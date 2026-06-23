<?php /*a:4:{s:74:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/portal\\index.html";i:1781745829;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\head.html";i:1781168941;s:71:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\nav.html";i:1781071832;s:72:"C:\laragon\www\nucleon\public/themes/simpleboot3_mobile/public\foot.html";i:1781753555;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
  <meta name="keywords" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
  <meta name="description" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
  <meta name="google-site-verification" content="xq1U9Wx4JsDxE2JtMVkiWU4bMGKhuJOgiHulcoo4Wy4" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

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

  <link href="/themes/simpleboot3_mobile/public/assets/css/index.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/index.js" defer></script>
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

  <!--BANNER START-->
  <div class="banner">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php if(is_array($slides) || $slides instanceof \think\Collection || $slides instanceof \think\Paginator): if( count($slides)==0 ) : echo "" ;else: foreach($slides as $key=>$vo): ?>
          <div class="swiper-slide">
            <img src="<?php echo cmf_get_image_url($vo['image']); ?>" class="d-block w-100" alt="<?php echo $vo['title']; ?>" fetchpriority="<?php echo $key==0 ? 'high'  :  'auto'; ?>" loading="<?php echo $key==0 ? 'eager'  :  'lazy'; ?>" decoding="async">
            <?php 
              $rawContent = html_entity_decode($vo['content']);
              $cleaned = preg_replace('/<br\s*\/?>/i', '|', $rawContent);
              $cleaned = strip_tags($cleaned);
              if (strpos($cleaned, '|') === false && strpos($cleaned, ':') !== false) {
                  $cleaned = str_replace(':', '|', $cleaned);
              }
              $parts = explode('|', $cleaned);
              $lines = [];
              foreach ($parts as $part) {
                  $trimmed = trim(html_entity_decode($part), " \t\n\r\0\x0B\xc2\xa0");
                  if ($trimmed !== '') {
                      $lines[] = $trimmed;
                  }
              }
              $line1 = isset($lines[0]) ? $lines[0] : '';
              $line2 = isset($lines[1]) ? $lines[1] : '';
             ?>
            <div class="swiper-slide-title">
              <span class="banner-title-line1"><?php echo $line1; ?></span>
              <?php if(!(empty($line2) || (($line2 instanceof \think\Collection || $line2 instanceof \think\Paginator ) && $line2->isEmpty()))): ?>
                <span class="banner-title-line2"><?php echo $line2; ?></span>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <!-- 鍒嗛〉鍣ㄥ鍣?-->
      <div class="swiper-pagination swiper-pagination-bullets"></div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.banner .swiper', {
          autoplay: true,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
              var index_text = index + 1;
              if (index <= 8) {
                index_text = '0' + index_text;
              }
              return '<span class="' + className + '">' + index_text + '</span>';
            },
          },
        });
      });
    </script>
  </div>
  <!--BANNER END-->

  <!-- CATEGORY CARDS -->
  <div class="home-category-grid">
    <?php if(is_array($category_cards) || $category_cards instanceof \think\Collection || $category_cards instanceof \think\Paginator): if( count($category_cards)==0 ) : echo "" ;else: foreach($category_cards as $k=>$vo): ?>
      <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>" class="home-category-item">
        <img src="<?php echo cmf_get_image_url($vo['icon'] ?: $vo['thumbnail']); ?>" alt="<?php echo $vo['name']; ?>" loading="lazy" decoding="async">
        <span><?php echo $vo['name']; ?></span>
      </a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

  <!--HOT PRODUCTS START-->
  <div class="hot-products-header">
    <h2 class="hot-products-title">HOT PRODUCTS</h2>
    <a href="<?php echo cmf_url('portal/index/product'); ?>" class="hot-products-all">All Products &rarr;</a>
  </div>
  
  <div class="hot-products-slider swiper">
    <div class="swiper-wrapper">
      <?php if(is_array($hot_products) || $hot_products instanceof \think\Collection || $hot_products instanceof \think\Paginator): if( count($hot_products)==0 ) : echo "" ;else: foreach($hot_products as $key=>$vo): if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection || $vo['list'] instanceof \think\Paginator): if( count($vo['list'])==0 ) : echo "" ;else: foreach($vo['list'] as $key=>$v): ?>
          <div class="swiper-slide">
             <a href="<?php echo cmf_url('portal/index/product_info', ['id' => $v['id']]); ?>">
               <div class="hot-product-img">
                 <img src="<?php echo cmf_get_image_url($v['thumbnail']); ?>" alt="<?php echo $v['title']; ?>" loading="lazy" decoding="async">
               </div>
               <div class="hot-product-title"><?php echo $v['title']; ?></div>
             </a>
          </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.hot-products-slider.swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
          nextEl: '.hot-products-slider .swiper-button-next',
          prevEl: '.hot-products-slider .swiper-button-prev',
        },
      });
    });
  </script>
  <!--HOT PRODUCTS END-->

  <!--ABOUT US START-->
  <div class="about">
    <div class="about-title">WHO WE ARE?</div>
    <div class="about-img">
      <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($index_site['about_img']); ?>" alt="<?php echo $site_info['site_name']; ?>">
    </div>
    <div class="about-desc"><?php echo $index_site['about_description']; ?></div>
    <div class="about-btn-wrap">
      <a href="/about.html" class="about-btn">LEARN MORE <i class="about-btn-arrow">➔</i></a>
    </div>
  </div>
  <!--ABOUT US END-->

  <!-- STATS START -->
  <div class="home-stats">
    <div class="home-stats-wrap">
      <?php if(!(empty($index_site['engineering']) || (($index_site['engineering'] instanceof \think\Collection || $index_site['engineering'] instanceof \think\Paginator ) && $index_site['engineering']->isEmpty()))): if(is_array($index_site['engineering']) || $index_site['engineering'] instanceof \think\Collection || $index_site['engineering'] instanceof \think\Paginator): if( count($index_site['engineering'])==0 ) : echo "" ;else: foreach($index_site['engineering'] as $key=>$vo): ?>
          <div class="stat-item">
            <div class="stat-num"><span class="counter" data-target="<?php echo $vo['engineering_num']; ?>">0</span><span class="stat-unit"><?php echo $vo['engineering_name']; ?></span></div>
            <div class="stat-text"><?php echo $vo['engineering_desc']; ?></div>
          </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      <?php endif; ?>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll('.counter');
      const speed = 100; // The lower the slower

      const animateCounters = () => {
        counters.forEach(counter => {
          const target = +counter.getAttribute('data-target');

          const updateCount = () => {
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
              counter.innerText = Math.ceil(count + inc);
              setTimeout(updateCount, 15);
            } else {
              counter.innerText = target;
            }
          };
          updateCount();
        });
      };

      const statsSection = document.querySelector('.home-stats');
      if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
          if (entries[0].isIntersecting) {
            animateCounters();
            observer.disconnect();
          }
        }, { threshold: 0.3 });
        observer.observe(statsSection);
      }
    });
  </script>
  <!-- STATS END -->



  <!--CHOOSE START-->
  <div class="choose-warp">
    <div class="choose">
      <div class="choose-title">WHY CHOOSE US</div>
      <div class="choose-desc"><?php echo $index_site['choose_description']; ?></div>
      <div class="choose-grid">
        <?php if(!(empty($index_site['choose']) || (($index_site['choose'] instanceof \think\Collection || $index_site['choose'] instanceof \think\Paginator ) && $index_site['choose']->isEmpty()))): if(is_array($index_site['choose']) || $index_site['choose'] instanceof \think\Collection || $index_site['choose'] instanceof \think\Paginator): if( count($index_site['choose'])==0 ) : echo "" ;else: foreach($index_site['choose'] as $key=>$vo): ?>
            <div class="choose-grid-item">
              <div class="choose-icon-wrap">
                <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['choose_image_active'] ?: $vo['choose_image']); ?>" alt="<?php echo $vo['choose_name']; ?>">
              </div>
              <div class="choose-content-wrap">
                <h3 class="choose-card-title"><?php echo $vo['choose_name']; ?></h3>
                <p class="choose-card-desc"><?php echo $vo['choose_desc']; ?></p>
              </div>
            </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!--CHOOSE END-->

  <?php if(!(empty($about_site['cert']) || (($about_site['cert'] instanceof \think\Collection || $about_site['cert'] instanceof \think\Paginator ) && $about_site['cert']->isEmpty()))): ?>
    <!-- CERTIFICATE START -->
    <div class="certificate">
      <div class="title">CERTIFICATE</div>
      <div class="swiper certificate-swiper">
        <div class="swiper-wrapper">
          <?php if(is_array($about_site['cert']) || $about_site['cert'] instanceof \think\Collection || $about_site['cert'] instanceof \think\Paginator): if( count($about_site['cert'])==0 ) : echo "" ;else: foreach($about_site['cert'] as $key=>$vo): ?>
            <div class="swiper-slide certificate-item">
              <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
            </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="swiper-pagination certificate-pagination"></div>
      </div>
    </div>
    <!-- CERTIFICATE END -->
  <?php endif; if(!(empty($case_list) || (($case_list instanceof \think\Collection || $case_list instanceof \think\Paginator ) && $case_list->isEmpty()))): ?>
    <!-- CASE START -->
    <div class="home-case">
      <div class="title">CASE STUDY</div>
      <ul class="case-list">
        <?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): if( count($case_list)==0 ) : echo "" ;else: foreach($case_list as $k=>$vo): if($k < 4): ?>
            <li class="case-item" title="<?php echo $vo['post_title']; ?>">
              <a href="<?php echo cmf_url('portal/index/industries_info',array('id'=>$vo['id'])); ?>">
                <div class="case-item-img">
                  <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>" alt="<?php echo $vo['post_title']; ?>">
                </div>
                <div class="case-item-title"><?php echo $vo['post_title']; ?></div>
                <div class="case-item-desc"><?php echo $vo['post_excerpt']; ?></div>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <!-- CASE END -->
  <?php endif; ?>



  <div class="news">
    <div class="title">NEWS CENTER</div>
    <div class="news-list">
      <?php if(is_array($news_list) || $news_list instanceof \think\Collection || $news_list instanceof \think\Paginator): if( count($news_list)==0 ) : echo "" ;else: foreach($news_list as $k=>$vo): if($k < 4): ?>
          <div class="news-item" title="<?php echo $vo['title']; ?>">
            <a href="<?php echo cmf_url('portal/index/news_info',array('id'=>$vo['id'],'cid'=>$vo['category_id'])); ?>">
              <div class="news-item-img">
                <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="<?php echo $vo['post_title']; ?>">
              </div>
              <div class="news-item-title"><?php echo $vo['post_title']; ?></div>
              <div class="news-item-desc"><?php echo $vo['post_excerpt']; ?></div>
            </a>
          </div>
        <?php endif; ?>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>

  <?php if(!(empty($index_site['faq']) || (($index_site['faq'] instanceof \think\Collection || $index_site['faq'] instanceof \think\Paginator ) && $index_site['faq']->isEmpty()))): ?>
    <!-- FAQ START -->
    <div class="faq">
      <div class="title"><?php echo (isset($index_site['faq_title']) && ($index_site['faq_title'] !== '')?$index_site['faq_title']:'FAQ'); ?></div>
      <div class="faq-wrap">
        <div class="faq-list">
          <?php if(is_array($index_site['faq']) || $index_site['faq'] instanceof \think\Collection || $index_site['faq'] instanceof \think\Paginator): if( count($index_site['faq'])==0 ) : echo "" ;else: foreach($index_site['faq'] as $key=>$vo): ?>
            <div class="faq-item <?php echo $key==0 ? 'active'  :  ''; ?>">
              <div class="faq-question">
                <span><?php echo $key+1; ?>.<?php echo $vo['question']; ?></span>
                <em>+</em>
              </div>
              <div class="faq-answer"><?php echo nl2br($vo['answer']); ?></div>
            </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
    </div>
    <!-- FAQ END -->
  <?php endif; ?>



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



</div>
</body>
</html>








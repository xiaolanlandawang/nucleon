<?php /*a:2:{s:76:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/admin\quote\site.html";i:1735872142;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }

        .td-actions .btn {
            margin-bottom: 2px;
            min-width: 96px;
            text-align: center;
        }

        .td-actions .btn:last-child {
            margin-bottom: 0;
        }
        a:hover, a:focus{
            text-decoration: none;
        }
    </style>
    <?php 
		$is_mobile=cmf_is_mobile();
        $_static_version='1.0.4';
        $cmf_version=cmf_version();
        if (strpos(cmf_version(), '6.') === 0) {
            $_app=app()->http->getName();
        }else{
            $_app=request()->module();
        }
     ?>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo $_app; ?>'/*当前应用名*/,
            IS_MOBILE: <?php echo !empty($is_mobile) ? 'true'  :  'false'; ?>
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-migrate-1.4.1.min.js"></script>
<!--    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-3.6.0.min.js"></script>-->
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container: 'body',
                html: true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>

</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab">询价设置</a></li>
    </ul>
    <form class="form-horizontal js-ajax-form margin-top-20" role="form" action="<?php echo url('Quote/sitePost'); ?>"
          method="post">
        <div class="tabbable">
            <div class="tab-content">
                <div class="form-group">
                    <label class="col-sm-2 control-label">图片</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="hidden" name="image" id="image"
                               value="<?php echo (isset($site_info['image']) && ($site_info['image'] !== '')?$site_info['image']:''); ?>">
                        <a href="javascript:uploadOneImage('图片上传','#image');">
                            <?php if(empty($site_info['image'])): ?>
                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="image-preview"
                                     width="135" style="cursor: pointer"/>
                                <?php else: ?>
                                <img src="<?php echo cmf_get_image_preview_url($site_info['image']); ?>"
                                     id="image-preview"
                                     width="135" style="cursor: pointer"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm" onclick="$('#image-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#image').val('');return false;"
                               value="取消图片">
                        <p class="help-block">建议尺寸：611*529</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="0">
                            <?php echo lang('SAVE'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
</body>
</html>

<?php /*a:2:{s:78:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/admin\service\site.html";i:1775049956;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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

<style type="text/css">
    .pic-list li {
        margin-bottom: 5px;
    }

    .btn-cancel-thumbnail {
        margin-top: 5px;
    }

    #photos, #files {
        margin-bottom: 0;
    }
</style>
<script type="text/html" id="company-item-tpl">
    <li id="saved-company{id}">
        <input id="company-{id}" type="hidden" name="company_urls[]" value="{filepath}">
        <input class="form-control" id="company-{id}-name" type="text" name="company_names[]" value="{name}"
               style="width: 400px;" title="图片名称">
        <img id="company-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#company-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-company{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-company{id}').before($('#saved-company{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="javascript:;">服务设置</a></li>
        <li><a href="<?php echo url('service/excellent_service'); ?>">优质服务</a></li>
    </ul>
    <form class="form-horizontal js-ajax-form margin-top-20" role="form" action="<?php echo url('Service/sitePost'); ?>"
          method="post">
        <div class="tabbable">
            <div class="tab-content">
                <div class="form-group">
                    <label for="input-internationalization" class="col-sm-2 control-label"><span
                            class="form-required">*</span>国际化描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-internationalization" name="service[internationalization]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['internationalization']) && ($site_info['internationalization'] !== '')?$site_info['internationalization']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">国际化图片</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="hidden" name="service[internationalization_image]" id="internationalization_image"
                               value="<?php echo (isset($site_info['internationalization_image']) && ($site_info['internationalization_image'] !== '')?$site_info['internationalization_image']:''); ?>">
                        <a href="javascript:uploadOneImage('图片上传','#internationalization_image');">
                            <?php if(empty($site_info['internationalization_image'])): ?>
                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="internationalization_image-preview"
                                     width="135" style="cursor: pointer"/>
                                <?php else: ?>
                                <img src="<?php echo cmf_get_image_preview_url($site_info['internationalization_image']); ?>"
                                     id="internationalization_image-preview"
                                     width="135" style="cursor: pointer"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm" onclick="$('#internationalization_image-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#internationalization_image').val('');return false;"
                               value="取消图片">
                        <p class="help-block">建议尺寸：1440*527</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        地区
                    </label>
                    <div class="col-md-8 col-sm-10">
                        <ul id="areas" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['areas']) || (($site_info['areas'] instanceof \think\Collection || $site_info['areas'] instanceof \think\Paginator ) && $site_info['areas']->isEmpty()))): if(is_array($site_info['areas']) || $site_info['areas'] instanceof \think\Collection || $site_info['areas'] instanceof \think\Paginator): if( count($site_info['areas'])==0 ) : echo "" ;else: foreach($site_info['areas'] as $key=>$vo): ?>
                                    <li id="saved-areas<?php echo $key; ?>">
                                        地区名称：<input class="form-control" type="text"
                                                        name="area[]"
                                                        value="<?php echo (isset($vo['area']) && ($vo['area'] !== '')?$vo['area']:''); ?>" style="width: 300px;">
                                        &nbsp;&nbsp;&nbsp;
                                        国家数量：<input class="form-control" type="number"
                                                        name="country[]"
                                                        value="<?php echo (isset($vo['country']) && ($vo['country'] !== '')?$vo['country']:''); ?>" style="width: 100px;" >
                                        &nbsp;&nbsp;&nbsp;
                                        颜色：<input class="form-control" type="text"
                                                    name="color[]"
                                                    value="<?php echo (isset($vo['color']) && ($vo['color'] !== '')?$vo['color']:''); ?>" style="width: 150px;" >
                                        <a class="btn btn-danger" href="javascript:(function(){$('#saved-areas<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:areas_add();" class="btn btn-default">添加地区</a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-left_title" class="col-sm-2 control-label"><span
                            class="form-required">*</span>左侧标题</label>
                    <div class="col-md-6 col-sm-10">
                        <input class="form-control" id="input-left_title" name="service[left_title]" value="<?php echo (isset($site_info['left_title']) && ($site_info['left_title'] !== '')?$site_info['left_title']:''); ?>"
                               placeholder="请填写描述">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-left_desc" class="col-sm-2 control-label"><span
                            class="form-required">*</span>左侧描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-left_desc" name="service[left_desc]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['left_desc']) && ($site_info['left_desc'] !== '')?$site_info['left_desc']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-right_title" class="col-sm-2 control-label"><span
                            class="form-required">*</span>右侧标题</label>
                    <div class="col-md-6 col-sm-10">
                        <input class="form-control" id="input-right_title" name="service[right_title]" value="<?php echo (isset($site_info['right_title']) && ($site_info['right_title'] !== '')?$site_info['right_title']:''); ?>"
                               placeholder="请填写描述">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-right_desc" class="col-sm-2 control-label"><span
                            class="form-required">*</span>右侧描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-right_desc" name="service[right_desc]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['right_desc']) && ($site_info['right_desc'] !== '')?$site_info['right_desc']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        合作公司
                    </label>
                    <div class="col-md-6 col-sm-10">
                        <ul id="company" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['companies']) || (($site_info['companies'] instanceof \think\Collection || $site_info['companies'] instanceof \think\Paginator ) && $site_info['companies']->isEmpty()))): if(is_array($site_info['companies']) || $site_info['companies'] instanceof \think\Collection || $site_info['companies'] instanceof \think\Paginator): if( count($site_info['companies'])==0 ) : echo "" ;else: foreach($site_info['companies'] as $key=>$vo): $img_url=cmf_get_image_preview_url($vo['url']); ?>
                                    <li id="saved-company<?php echo $key; ?>">
                                        <input id="company-<?php echo $key; ?>" type="hidden" name="company_urls[]"
                                               value="<?php echo $vo['url']; ?>">
                                        <input class="form-control" id="company-<?php echo $key; ?>-name" type="text"
                                               name="company_names[]"
                                               value="<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="width: 400px;" title="图片名称">
                                        <img id="company-<?php echo $key; ?>-preview"
                                             src="<?php echo cmf_get_image_preview_url($vo['url']); ?>"
                                             style="height:34px;width: 44px;"
                                             onclick="parent.imagePreviewDialog(this.src);">
                                        <a class="btn btn-default"  href="javascript:uploadOneImage('图片上传','#company-<?php echo $key; ?>');"><i class="fa fa-upload fa-fw"></i></a>
                                        <a class="btn btn-danger"  href="javascript:(function(){$('#saved-company<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-company<?php echo $key; ?>').before($('#saved-company<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:uploadMultiImage('图片上传','#company','company-item-tpl');"
                           class="btn btn-default">选择图片</a>
                        <p class="help-block">建议尺寸：240*240</p>
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
<script type="text/javascript">
    function areas_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        $('#areas').append('<li id="saved-areas'+id+'">地区名称：<input class="form-control" type="text" name="area[]" value="" style="width: 300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国家数量：<input class="form-control" type="number" name="country[]" value="" style="width: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色：<input class="form-control" type="text" name="color[]" value="" style="width: 150px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-areas'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
    }
</script>
</body>
</html>

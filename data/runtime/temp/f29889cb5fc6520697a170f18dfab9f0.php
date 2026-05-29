<?php /*a:2:{s:76:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/admin\about\site.html";i:1779931556;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
<script type="text/html" id="photos-item-tpl">
    <li id="saved-image{id}">
        <input id="photo-{id}" type="hidden" name="photo_urls[]" value="{filepath}">
        <input class="form-control" id="photo-{id}-name" type="text" name="photo_names[]" value="{name}"
               style="width: 200px;" title="图片名称">
        <img id="photo-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#photo-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-image{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-image{id}').before($('#saved-image{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
<script type="text/html" id="cert-item-tpl">
    <li id="saved-cert{id}">
        <input id="cert-{id}" type="hidden" name="cert_urls[]" value="{filepath}">
        <input class="form-control" id="cert-{id}-name" type="text" name="cert_names[]" value="{name}"
               style="width: 150px;" title="图片名称" placeholder="图片名称">
        <input class="form-control" id="cert-{id}-desc" type="text" name="cert_descs[]" value=""
               style="width: 250px;" title="证书描述" placeholder="证书描述">
        <img id="cert-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#cert-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-cert{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-cert{id}').before($('#saved-cert{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab">公司介绍</a></li>
    </ul>
    <form class="form-horizontal js-ajax-form margin-top-20" role="form" action="<?php echo url('About/sitePost'); ?>"
          method="post">
        <div class="tabbable">
            <div class="tab-content">
                <div class="form-group">
                    <label for="input-introduction" class="col-sm-2 control-label">公司简介</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-introduction" name="about[introduction]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['introduction']) && ($site_info['introduction'] !== '')?$site_info['introduction']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">公司简介图片</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="hidden" name="about[left_image]" id="left_image"
                               value="<?php echo (isset($site_info['left_image']) && ($site_info['left_image'] !== '')?$site_info['left_image']:''); ?>">
                        <a href="javascript:uploadOneImage('图片上传','#left_image');">
                            <?php if(empty($site_info['left_image'])): ?>
                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="left_image-preview"
                                     width="135" style="cursor: pointer"/>
                                <?php else: ?>
                                <img src="<?php echo cmf_get_image_preview_url($site_info['left_image']); ?>"
                                     id="left_image-preview"
                                     width="135" style="cursor: pointer"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm" onclick="$('#left_image-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#left_image').val('');return false;"
                               value="取消图片">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-do_desc" class="col-sm-2 control-label">公司介绍</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-do_desc" name="about[do_desc]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['do_desc']) && ($site_info['do_desc'] !== '')?$site_info['do_desc']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-service_desc" class="col-sm-2 control-label">客户服务描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-service_desc" name="about[service_desc]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['service_desc']) && ($site_info['service_desc'] !== '')?$site_info['service_desc']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">客户服务背景图片</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="hidden" name="about[service_bg]" id="service_bg"
                               value="<?php echo (isset($site_info['service_bg']) && ($site_info['service_bg'] !== '')?$site_info['service_bg']:''); ?>">
                        <a href="javascript:uploadOneImage('图片上传','#service_bg');">
                            <?php if(empty($site_info['service_bg'])): ?>
                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="service_bg-preview"
                                     width="135" style="cursor: pointer"/>
                                <?php else: ?>
                                <img src="<?php echo cmf_get_image_preview_url($site_info['service_bg']); ?>"
                                     id="service_bg-preview"
                                     width="135" style="cursor: pointer"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm" onclick="$('#service_bg-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#service_bg').val('');return false;"
                               value="取消图片">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-market_description" class="col-sm-2 control-label">全球市场描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-market_description" name="about[market_description]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['market_description']) && ($site_info['market_description'] !== '')?$site_info['market_description']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">全球市场图片</label>
                    <div class="col-md-6 col-sm-10">
                        <input type="hidden" name="about[market_image]" id="market_image"
                               value="<?php echo (isset($site_info['market_image']) && ($site_info['market_image'] !== '')?$site_info['market_image']:''); ?>">
                        <a href="javascript:uploadOneImage('图片上传','#market_image');">
                            <?php if(empty($site_info['market_image'])): ?>
                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                     id="market_image-preview"
                                     width="135" style="cursor: pointer"/>
                                <?php else: ?>
                                <img src="<?php echo cmf_get_image_preview_url($site_info['market_image']); ?>"
                                     id="market_image-preview"
                                     width="135" style="cursor: pointer"/>
                            <?php endif; ?>
                        </a>
                        <input type="button" class="btn btn-sm" onclick="$('#market_image-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#market_image').val('');return false;"
                               value="取消图片">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        全球市场设置
                    </label>
                    <div class="col-md-8 col-sm-10">
                        <ul id="market" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['market']) || (($site_info['market'] instanceof \think\Collection || $site_info['market'] instanceof \think\Paginator ) && $site_info['market']->isEmpty()))): if(is_array($site_info['market']) || $site_info['market'] instanceof \think\Collection || $site_info['market'] instanceof \think\Paginator): if( count($site_info['market'])==0 ) : echo "" ;else: foreach($site_info['market'] as $key=>$vo): ?>
                                    <li id="saved-market<?php echo $key; ?>">
                                        标题：<input class="form-control" type="text"
                                                        name="market_name[]"
                                                        value="<?php echo (isset($vo['market_name']) && ($vo['market_name'] !== '')?$vo['market_name']:''); ?>" style="width: 200px;">
                                        &nbsp;&nbsp;&nbsp;
                                        描述：<input class="form-control" type="text"
                                                        name="market_num[]"
                                                        value="<?php echo (isset($vo['market_num']) && ($vo['market_num'] !== '')?$vo['market_num']:''); ?>" style="width: 500px;" >
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger" href="javascript:(function(){$('#saved-market<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:market_add();" class="btn btn-default">添加市场</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        优势设置
                    </label>
                    <div class="col-md-8 col-sm-10">
                        <ul id="advantage" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['advantage']) || (($site_info['advantage'] instanceof \think\Collection || $site_info['advantage'] instanceof \think\Paginator ) && $site_info['advantage']->isEmpty()))): if(is_array($site_info['advantage']) || $site_info['advantage'] instanceof \think\Collection || $site_info['advantage'] instanceof \think\Paginator): if( count($site_info['advantage'])==0 ) : echo "" ;else: foreach($site_info['advantage'] as $key=>$vo): ?>
                                    <li id="saved-advantage<?php echo $key; ?>">
                                        名称：<input class="form-control" type="text"
                                                    name="advantage_name[]"
                                                    value="<?php echo (isset($vo['advantage_name']) && ($vo['advantage_name'] !== '')?$vo['advantage_name']:''); ?>" style="width: 400px;">
                                        &nbsp;&nbsp;&nbsp;
                                        数目：<input class="form-control" type="text"
                                                    name="advantage_num[]"
                                                    value="<?php echo (isset($vo['advantage_num']) && ($vo['advantage_num'] !== '')?$vo['advantage_num']:''); ?>" style="width: 100px;" >
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger" href="javascript:(function(){$('#saved-advantage<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:advantage_add();" class="btn btn-default">添加优势</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">企业形象</label>
                    <div class="col-md-6 col-sm-10">
                        <ul id="photos" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['corporate_images']) || (($site_info['corporate_images'] instanceof \think\Collection || $site_info['corporate_images'] instanceof \think\Paginator ) && $site_info['corporate_images']->isEmpty()))): if(is_array($site_info['corporate_images']) || $site_info['corporate_images'] instanceof \think\Collection || $site_info['corporate_images'] instanceof \think\Paginator): if( count($site_info['corporate_images'])==0 ) : echo "" ;else: foreach($site_info['corporate_images'] as $key=>$vo): $img_url=cmf_get_image_preview_url($vo['url']); ?>
                                    <li id="saved-image<?php echo $key; ?>">
                                        <input id="photo-<?php echo $key; ?>" type="hidden" name="photo_urls[]"
                                               value="<?php echo $vo['url']; ?>">
                                        <input class="form-control" id="photo-<?php echo $key; ?>-name" type="text"
                                               name="photo_names[]"
                                               value="<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="width: 200px;" title="图片名称">
                                        <img id="photo-<?php echo $key; ?>-preview"
                                             src="<?php echo cmf_get_image_preview_url($vo['url']); ?>"
                                             style="height:34px;width: 44px;"
                                             onclick="parent.imagePreviewDialog(this.src);">
                                        <a class="btn btn-default"  href="javascript:uploadOneImage('图片上传','#photo-<?php echo $key; ?>');"><i class="fa fa-upload fa-fw"></i></a>
                                        <a class="btn btn-danger"  href="javascript:(function(){$('#saved-image<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-image<?php echo $key; ?>').before($('#saved-image<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:uploadMultiImage('图片上传','#photos','photos-item-tpl');"
                           class="btn btn-default">选择图片</a>
                    </div>
                </div>

                <div class="form-group">
                    <label for="input-cert_description" class="col-sm-2 control-label">证书描述</label>
                    <div class="col-md-6 col-sm-10">
                        <textarea class="form-control" id="input-cert_description" name="about[cert_description]" style="height: 100px;"
                                  placeholder="请填写描述"><?php echo (isset($site_info['cert_description']) && ($site_info['cert_description'] !== '')?$site_info['cert_description']:''); ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">证书</label>
                    <div class="col-md-6 col-sm-10">
                        <ul id="cert" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['cert']) || (($site_info['cert'] instanceof \think\Collection || $site_info['cert'] instanceof \think\Paginator ) && $site_info['cert']->isEmpty()))): if(is_array($site_info['cert']) || $site_info['cert'] instanceof \think\Collection || $site_info['cert'] instanceof \think\Paginator): if( count($site_info['cert'])==0 ) : echo "" ;else: foreach($site_info['cert'] as $key=>$vo): $img_url=cmf_get_image_preview_url($vo['url']); ?>
                                    <li id="saved-cert<?php echo $key; ?>">
                                        <input id="cert-<?php echo $key; ?>" type="hidden" name="cert_urls[]"
                                               value="<?php echo $vo['url']; ?>">
                                        <input class="form-control" id="cert-<?php echo $key; ?>-name" type="text"
                                               name="cert_names[]"
                                               value="<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="width: 150px;" title="图片名称" placeholder="图片名称">
                                        <input class="form-control" id="cert-<?php echo $key; ?>-desc" type="text"
                                               name="cert_descs[]"
                                               value="<?php echo (isset($vo['desc']) && ($vo['desc'] !== '')?$vo['desc']:''); ?>" style="width: 250px;" title="证书描述" placeholder="证书描述">
                                        <img id="cert-<?php echo $key; ?>-preview"
                                             src="<?php echo cmf_get_image_preview_url($vo['url']); ?>"
                                             style="height:34px;width: 44px;"
                                             onclick="parent.imagePreviewDialog(this.src);">
                                        <a class="btn btn-default"  href="javascript:uploadOneImage('图片上传','#cert-<?php echo $key; ?>');"><i class="fa fa-upload fa-fw"></i></a>
                                        <a class="btn btn-danger"  href="javascript:(function(){$('#saved-cert<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-cert<?php echo $key; ?>').before($('#saved-cert<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:uploadMultiImage('图片上传','#cert','cert-item-tpl');"
                           class="btn btn-default">选择图片</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        创新制造设置
                    </label>
                    <div class="col-md-8 col-sm-10">
                        <ul id="create" class="pic-list list-unstyled form-inline">
                            <?php if(!(empty($site_info['create']) || (($site_info['create'] instanceof \think\Collection || $site_info['create'] instanceof \think\Paginator ) && $site_info['create']->isEmpty()))): if(is_array($site_info['create']) || $site_info['create'] instanceof \think\Collection || $site_info['create'] instanceof \think\Paginator): if( count($site_info['create'])==0 ) : echo "" ;else: foreach($site_info['create'] as $key=>$vo): ?>
                                    <li id="saved-create<?php echo $key; ?>">
                                        标题：<input class="form-control" type="text"
                                                    name="create_name[]"
                                                    value="<?php echo (isset($vo['create_name']) && ($vo['create_name'] !== '')?$vo['create_name']:''); ?>" style="width: 100px;">
                                        &nbsp;&nbsp;&nbsp;
                                        描述：<textarea class="form-control" type="text" name="create_desc[]" style="height: 100px;width: 400px"><?php echo (isset($vo['create_desc']) && ($vo['create_desc'] !== '')?$vo['create_desc']:''); ?></textarea>
                                        &nbsp;&nbsp;&nbsp;
                                        图片：<input type="hidden" name="create_image[]" id="create_image<?php echo $key; ?>"
                                                    value="<?php echo $vo['create_image']; ?>">
                                        <a href="javascript:uploadOneImage('图片上传','#create_image<?php echo $key; ?>');">
                                            <?php if(empty($vo['create_image'])): ?>
                                                <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                                     id="createe_image<?php echo $key; ?>-preview"
                                                     width="130" style="cursor: pointer"/>
                                                <?php else: ?>
                                                <img src="<?php echo cmf_get_image_preview_url($vo['create_image']); ?>"
                                                     id="create_image<?php echo $key; ?>-preview"
                                                     width="130" style="cursor: pointer"/>
                                            <?php endif; ?>
                                        </a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger" href="javascript:(function(){$('#saved-create<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </ul>
                        <a href="javascript:create_add();" class="btn btn-default">添加</a>
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
    function create_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-create'+id+'">' +
            '标题：' +
            '<input class="form-control" type="text" name="create_name[]" value="" style="width: 100px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;描述：' +
            '<textarea class="form-control" type="text" name="create_desc[]" style="height: 100px;width: 400px"></textarea>' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图片：' +
            '<input type="hidden" name="create_image[]" id="create_image'+id+'" value="">' +
            '<a href="javascript:uploadOneImage(\'图片上传\',\'#create_image'+id+'\');">' +
            '<img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="create_image'+id+'-preview" width="130" style="cursor: pointer"/>' +
            '</a>' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-create'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#create').append(html);
    }

    function market_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-market'+id+'">' +
            '标题：' +
            '<input class="form-control" type="text" name="market_name[]" value="" style="width: 200px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;描述：' +
            '<input class="form-control" type="text" name="market_num[]" value="" style="width: 500px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-market'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#market').append(html);
    }

    function advantage_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-advantage'+id+'">' +
            '标题：' +
            '<input class="form-control" type="text" name="advantage_name[]" value="" style="width: 400px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;描述：' +
            '<input class="form-control" type="text" name="advantage_num[]" value="" style="width: 100px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-advantage'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#advantage').append(html);
    }
</script>
</body>
</html>

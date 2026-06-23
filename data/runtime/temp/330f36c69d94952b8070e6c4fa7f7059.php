<?php /*a:2:{s:85:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/portal\admin_product\edit.html";i:1776944127;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
<script type="text/html" id="files-item-tpl">
    <li id="saved-file{id}">
        <input id="file-{id}" type="hidden" name="file_urls[]" value="{filepath}">
        <input class="form-control" id="file-{id}-name" type="text" name="file_names[]" value="{name}"
               style="width: 200px;" title="文件名称">
        <a class="btn btn-info" id="file-{id}-preview" href="{preview_url}" target="_blank"><i class="fa fa-download fa-fw"></i></a>
        <a class="btn btn-default" href="javascript:uploadOne('文件上传','#file-{id}','file');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-file{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-file{id}').before($('#saved-file{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>

<script type="text/html" id="certificate-item-tpl">
    <li id="saved-certificate{id}">
        <input id="certificate-{id}" type="hidden" name="certificate_urls[]" value="{filepath}">
        <input class="form-control" id="certificate-{id}-name" type="text" name="certificate_names[]" value=""
               style="width: 200px;" title="图片名称">
        <img id="certificate-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#certificate-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-certificate{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-certificate{id}').before($('#saved-certificate{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('AdminProduct/index'); ?>">产品列表</a></li>
        <li><a href="<?php echo url('AdminProduct/add'); ?>">添加产品</a></li>
        <li class="active"><a href="javascript:">编辑产品</a></li>
    </ul>
    <form action="<?php echo url('AdminProduct/editPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th width="100">分类<span class="form-required">*</span></th>
                        <td>
                            <select class="form-control" name="category_id" id="js-category-select" required>
                                <option value="0">请选择分类</option>
                                <?php echo $category_list; ?>
                            </select>
                            <!--<input class="form-control" type="text" style="width:400px;" required value=""
                                   placeholder="请选择分类" onclick="doSelectCategory();" id="js-categories-name-input"
                                   readonly/>
                            <input class="form-control" type="hidden" value="" name="post[categories]"
                                   id="js-categories-id-input"/>-->
                        </td>
                    </tr>
                    <tr>
                        <th>产品名称<span class="form-required">*</span></th>
                        <td>
                            <input class="form-control" type="text" name="title"
                                   id="title" required value="<?php echo $product['title']; ?>" placeholder="请输入产品名称"/>
                        </td>
                    </tr>
                    <tr>
                        <th>产品别名</th>
                        <td>
                            <input type="text" class="form-control" id="alias" name="alias" value="<?php echo $product['alias']; ?>" placeholder="请输入产品别名">
                            <p class="help-block">用于url美化</p>
                        </td>
                    </tr>
                    <tr>
                        <th>缩略图</th>
                        <td>
                            <div>
                                <input type="hidden" name="thumbnail" id="thumbnail"
                                       value="<?php echo (isset($product['thumbnail']) && ($product['thumbnail'] !== '')?$product['thumbnail']:''); ?>">
                                <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                                    <?php if(empty($product['thumbnail'])): ?>
                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                             id="thumbnail-preview"
                                             width="135" style="cursor: pointer"/>
                                        <?php else: ?>
                                        <img src="<?php echo cmf_get_image_preview_url($product['thumbnail']); ?>"
                                             id="thumbnail-preview"
                                             width="135" style="cursor: pointer"/>
                                    <?php endif; ?>
                                </a>
                                <br>
                                <input type="button" class="btn btn-sm btn-cancel-thumbnail" value="取消图片">
                                <p class="help-block">建议尺寸：350*350</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>相册</th>
                        <td>
                            <ul id="photos" class="pic-list list-unstyled form-inline">
                                <?php if(!(empty($product['photos']) || (($product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator ) && $product['photos']->isEmpty()))): if(is_array($product['photos']) || $product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator): if( count($product['photos'])==0 ) : echo "" ;else: foreach($product['photos'] as $key=>$vo): $img_url=cmf_get_image_preview_url($vo['url']); ?>
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
                            <p class="help-block">建议尺寸：587*587</p>
                        </td>
                    </tr>
                    <tr>
                        <th>认证证书</th>
                        <td>
                            <?php if(is_array($authentication_mark) || $authentication_mark instanceof \think\Collection || $authentication_mark instanceof \think\Paginator): if( count($authentication_mark)==0 ) : echo "" ;else: foreach($authentication_mark as $key=>$vo): 
                                    $checked = "";
                                    $product_mark = $product['authentication_mark'];
                                    if (!empty($product_mark)) {
                                        foreach ($product_mark as $k => $value) {
                                            if ($vo['name'] == $value['name']){
                                                $checked = "checked";
                                                break;
                                            }
                                        }
                                    }
                                 ?>
                                <label>
                                    <input class="js-check" type="checkbox" name="authentication_mark[]" value="<?php echo $key; ?>"
                                           <?php echo $checked; ?>>
                                    <?php echo $vo['name']; ?>
                                </label>
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" width="18" height="18" onclick="imagePreviewDialog(this.src);">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>起重量</th>
                        <td>
                            <input class="form-control" type="text" name="lifting_capacity" value="<?php echo $product['lifting_capacity']; ?>" placeholder="请输入起重量"/>
                        </td>
                    </tr>
                    <tr>
                        <th>起重高度</th>
                        <td>
                            <input class="form-control" type="text" name="lifting_height" value="<?php echo $product['lifting_height']; ?>" placeholder="请输入起重高度"/>
                        </td>
                    </tr>
                    <tr>
                        <th>跨度</th>
                        <td>
                            <input class="form-control" type="text" name="span" value="<?php echo $product['span']; ?>" placeholder="请输入跨度"/>
                        </td>
                    </tr>
                    <tr>
                        <th>电压/频率</th>
                        <td>
                            <input class="form-control" type="text" name="operating_voltage" value="<?php echo $product['operating_voltage']; ?>" placeholder="请输入电压/频率"/>
                        </td>
                    </tr>
                    <tr>
                        <th>工作等级</th>
                        <td>
                            <input class="form-control" type="text" name="job_level" value="<?php echo $product['job_level']; ?>" placeholder="请输入工作等级"/>
                        </td>
                    </tr>
                    <tr>
                        <th>额外参数</th>
                        <td>
                            <ul id="parameter" class="pic-list list-unstyled form-inline">
                                <?php if(!(empty($product['parameter']) || (($product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator ) && $product['parameter']->isEmpty()))): if(is_array($product['parameter']) || $product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator): if( count($product['parameter'])==0 ) : echo "" ;else: foreach($product['parameter'] as $key=>$vo): ?>
                                        <li id="saved-parameter<?php echo $key; ?>">
                                            参数名：<input class="form-control" type="text"
                                                        name="parameter_name[]"
                                                        value="<?php echo (isset($vo['parameter_name']) && ($vo['parameter_name'] !== '')?$vo['parameter_name']:''); ?>" style="width: 200px;">
                                            &nbsp;&nbsp;&nbsp;
                                            参数值：<input class="form-control" type="text"
                                                        name="parameter_val[]"
                                                        value="<?php echo (isset($vo['parameter_val']) && ($vo['parameter_val'] !== '')?$vo['parameter_val']:''); ?>" style="width: 300px;" >
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger" href="javascript:(function(){$('#saved-parameter<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </ul>
                            <a href="javascript:parameter_add();" class="btn btn-default">添加</a>
                        </td>
                    </tr>
                    <tr>
                        <th>应用行业</th>
                        <td>
                            <textarea class="form-control" name="industry" style="height: 50px;"><?php echo $product['industry']; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>产品概述</th>
                        <td>
                            <script type="text/plain" id="content" name="overview"><?php echo $product['overview']; ?></script>
                        </td>
                    </tr>
                    <tr>
                        <th>应用场景</th>
                        <td>
                            <script type="text/plain" id="scenario_content" name="scenario"><?php echo $product['scenario']; ?></script>
                        </td>
                    </tr>
                    <tr>
                        <th>证书</th>
                        <td>
                            <ul id="certificate" class="pic-list list-unstyled form-inline">
                                <?php if(!(empty($product['certificate']) || (($product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator ) && $product['certificate']->isEmpty()))): if(is_array($product['certificate']) || $product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator): if( count($product['certificate'])==0 ) : echo "" ;else: foreach($product['certificate'] as $key=>$vo): $img_url=cmf_get_image_preview_url($vo['url']); ?>
                                        <li id="saved-certificate<?php echo $key; ?>">
                                            <input id="certificate-<?php echo $key; ?>" type="hidden" name="certificate_urls[]"
                                                   value="<?php echo $vo['url']; ?>">
                                            <input class="form-control" id="certificate-<?php echo $key; ?>-name" type="text"
                                                   name="certificate_names[]"
                                                   value="<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="width: 200px;" title="图片名称">
                                            <img id="certificate-<?php echo $key; ?>-preview"
                                                 src="<?php echo cmf_get_image_preview_url($vo['url']); ?>"
                                                 style="height:34px;width: 44px;"
                                                 onclick="parent.imagePreviewDialog(this.src);">
                                            <a class="btn btn-default"  href="javascript:uploadOneImage('图片上传','#certificate-<?php echo $key; ?>');"><i class="fa fa-upload fa-fw"></i></a>
                                            <a class="btn btn-danger"  href="javascript:(function(){$('#saved-certificate<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-certificate<?php echo $key; ?>').before($('#saved-certificate<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </ul>
                            <a href="javascript:uploadMultiImage('图片上传','#certificate','certificate-item-tpl');"
                               class="btn btn-default">选择图片</a>
                            <p class="help-block">建议尺寸：338*476</p>
                        </td>
                    </tr>
                    <tr>
                        <th>特点特征</th>
                        <td>
                            <script type="text/plain" id="features_content" name="features"><?php echo $product['features']; ?></script>
                        </td>
                    </tr>
                    <tr>
                        <th>定制服务</th>
                        <td>
                            <script type="text/plain" id="customized_content" name="customized"><?php echo $product['customized']; ?></script>
                        </td>
                    </tr>
                    <tr>
                        <th>自定义字段名</th>
                        <?php 
                            $custom_field_name=[
                                'lifting_capacity' => '起重量',
                                'lifting_height' => '起重高度',
                                'span' => '跨度',
                                'operating_voltage' => '电压频率',
                                'job_level' => '工作等级',
                                'overview' => '产品概述',
                                'scenario' => '应用场景',
                                'certificate' => '证书',
                                'features' => '特点特征',
                                'customized' => '定制服务',
                            ];
                         ?>
                        <td>
                            <?php if(!(empty($product['custom_field']) || (($product['custom_field'] instanceof \think\Collection || $product['custom_field'] instanceof \think\Paginator ) && $product['custom_field']->isEmpty()))): if(!(empty($product['custom_field']['input']) || (($product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator ) && $product['custom_field']['input']->isEmpty()))): ?>
                                    <ul class="pic-list list-unstyled form-inline">
                                        <?php if(is_array($product['custom_field']['input']) || $product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator): if( count($product['custom_field']['input'])==0 ) : echo "" ;else: foreach($product['custom_field']['input'] as $key=>$vo): ?>
                                            <li id="saved-<?php echo $key; ?>">
                                            <b><?php echo $custom_field_name[$key]; ?></b>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                参数名：<input class="form-control" type="text"
                                                              name="custom_field[input][<?php echo $key; ?>]"
                                                              value="<?php echo (isset($vo) && ($vo !== '')?$vo:'$key'); ?>" style="width: 200px;">
                                                <a class="btn btn-success"  href="javascript:(function(){$('#saved-<?php echo $key; ?>').before($('#saved-<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="pic-list list-unstyled form-inline">
                                        <li id="saved-lifting_capacity">
                                            <b>起重量</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[input][lifting_capacity]"
                                                          value="<?php echo (isset($product['custom_field']['input']['lifting_capacity']) && ($product['custom_field']['input']['lifting_capacity'] !== '')?$product['custom_field']['input']['lifting_capacity']:'Capacity'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-lifting_capacity').before($('#saved-lifting_capacity').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-lifting_height">
                                            <b>起重高度</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[input][lifting_height]"
                                                          value="<?php echo (isset($product['custom_field']['input']['lifting_height']) && ($product['custom_field']['input']['lifting_height'] !== '')?$product['custom_field']['input']['lifting_height']:'Lifting Height'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-lifting_height').before($('#saved-lifting_height').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-span">
                                            <b>跨度</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[input][span]"
                                                          value="<?php echo (isset($product['custom_field']['input']['span']) && ($product['custom_field']['input']['span'] !== '')?$product['custom_field']['input']['span']:'Span'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-span').before($('#saved-span').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-operating_voltage">
                                            <b>电压频率</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[input][operating_voltage]"
                                                          value="<?php echo (isset($product['custom_field']['input']['operating_voltage']) && ($product['custom_field']['input']['operating_voltage'] !== '')?$product['custom_field']['input']['operating_voltage']:'Voltage/Hertz'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-operating_voltage').before($('#saved-operating_voltage').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-job_level">
                                            <b>工作等级</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[input][job_level]"
                                                          value="<?php echo (isset($product['custom_field']['input']['job_level']) && ($product['custom_field']['input']['job_level'] !== '')?$product['custom_field']['input']['job_level']:'Working Class'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-job_level').before($('#saved-job_level').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                                <hr>
                                <?php if(!(empty($product['custom_field']['content']) || (($product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator ) && $product['custom_field']['content']->isEmpty()))): ?>
                                    <ul class="pic-list list-unstyled form-inline">
                                        <?php if(is_array($product['custom_field']['content']) || $product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator): if( count($product['custom_field']['content'])==0 ) : echo "" ;else: foreach($product['custom_field']['content'] as $key=>$vo): ?>
                                            <li id="saved-<?php echo $key; ?>">
                                                <b><?php echo $custom_field_name[$key]; ?></b>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                参数名：<input class="form-control" type="text"
                                                              name="custom_field[content][<?php echo $key; ?>]"
                                                              value="<?php echo (isset($vo) && ($vo !== '')?$vo:'$key'); ?>" style="width: 200px;">
                                                <a class="btn btn-success"  href="javascript:(function(){$('#saved-<?php echo $key; ?>').before($('#saved-<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="pic-list list-unstyled form-inline">
                                        <li id="saved-overview">
                                            <b>产品概述</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[content][overview]"
                                                          value="<?php echo (isset($product['custom_field']['content']['overview']) && ($product['custom_field']['content']['overview'] !== '')?$product['custom_field']['content']['overview']:'Product Overview'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-overview').before($('#saved-overview').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-scenario">
                                            <b>应用场景</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[content][scenario]"
                                                          value="<?php echo (isset($product['custom_field']['content']['scenario']) && ($product['custom_field']['content']['scenario'] !== '')?$product['custom_field']['content']['scenario']:'Application Scenario'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-scenario').before($('#saved-scenario').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-certificate">
                                            <b>证书</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[content][certificate]"
                                                          value="<?php echo (isset($product['custom_field']['content']['certificate']) && ($product['custom_field']['content']['certificate'] !== '')?$product['custom_field']['content']['certificate']:'Certificate'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-certificate').before($('#saved-certificate').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-features">
                                            <b>特点特征</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[content][features]"
                                                          value="<?php echo (isset($product['custom_field']['content']['features']) && ($product['custom_field']['content']['features'] !== '')?$product['custom_field']['content']['features']:'Features'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-features').before($('#saved-features').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                        <li id="saved-customized">
                                            <b>定制服务</b>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            参数名：<input class="form-control" type="text"
                                                          name="custom_field[content][customized]"
                                                          value="<?php echo (isset($product['custom_field']['content']['customized']) && ($product['custom_field']['content']['customized'] !== '')?$product['custom_field']['content']['customized']:'Customized'); ?>" style="width: 200px;">
                                            <a class="btn btn-success"  href="javascript:(function(){$('#saved-customized').before($('#saved-customized').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                        </li>
                                    </ul>
                                <?php endif; else: ?>
                                <ul class="pic-list list-unstyled form-inline">
                                    <li id="saved-lifting_capacity">
                                        <b>起重量</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[input][lifting_capacity]"
                                                      value="<?php echo (isset($product['custom_field']['input']['lifting_capacity']) && ($product['custom_field']['input']['lifting_capacity'] !== '')?$product['custom_field']['input']['lifting_capacity']:'Capacity'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-lifting_capacity').before($('#saved-lifting_capacity').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-lifting_height">
                                        <b>起重高度</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[input][lifting_height]"
                                                      value="<?php echo (isset($product['custom_field']['input']['lifting_height']) && ($product['custom_field']['input']['lifting_height'] !== '')?$product['custom_field']['input']['lifting_height']:'Lifting Height'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-lifting_height').before($('#saved-lifting_height').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-span">
                                        <b>跨度</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[input][span]"
                                                      value="<?php echo (isset($product['custom_field']['input']['span']) && ($product['custom_field']['input']['span'] !== '')?$product['custom_field']['input']['span']:'Span'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-span').before($('#saved-span').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-operating_voltage">
                                        <b>电压频率</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[input][operating_voltage]"
                                                      value="<?php echo (isset($product['custom_field']['input']['operating_voltage']) && ($product['custom_field']['input']['operating_voltage'] !== '')?$product['custom_field']['input']['operating_voltage']:'Voltage/Hertz'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-operating_voltage').before($('#saved-operating_voltage').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-job_level">
                                        <b>工作等级</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[input][job_level]"
                                                      value="<?php echo (isset($product['custom_field']['input']['job_level']) && ($product['custom_field']['input']['job_level'] !== '')?$product['custom_field']['input']['job_level']:'Working Class'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-job_level').before($('#saved-job_level').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                </ul>
                                <hr>
                                <ul class="pic-list list-unstyled form-inline">
                                    <li id="saved-overview">
                                        <b>产品概述</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[content][overview]"
                                                      value="<?php echo (isset($product['custom_field']['content']['overview']) && ($product['custom_field']['content']['overview'] !== '')?$product['custom_field']['content']['overview']:'Product Overview'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-overview').before($('#saved-overview').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-scenario">
                                        <b>应用场景</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[content][scenario]"
                                                      value="<?php echo (isset($product['custom_field']['content']['scenario']) && ($product['custom_field']['content']['scenario'] !== '')?$product['custom_field']['content']['scenario']:'Application Scenario'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-scenario').before($('#saved-scenario').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-certificate">
                                        <b>证书</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[content][certificate]"
                                                      value="<?php echo (isset($product['custom_field']['content']['certificate']) && ($product['custom_field']['content']['certificate'] !== '')?$product['custom_field']['content']['certificate']:'Certificate'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-certificate').before($('#saved-certificate').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-features">
                                        <b>特点特征</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[content][features]"
                                                      value="<?php echo (isset($product['custom_field']['content']['features']) && ($product['custom_field']['content']['features'] !== '')?$product['custom_field']['content']['features']:'Features'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-features').before($('#saved-features').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                    <li id="saved-customized">
                                        <b>定制服务</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        参数名：<input class="form-control" type="text"
                                                      name="custom_field[content][customized]"
                                                      value="<?php echo (isset($product['custom_field']['content']['customized']) && ($product['custom_field']['content']['customized'] !== '')?$product['custom_field']['content']['customized']:'Customized'); ?>" style="width: 200px;">
                                        <a class="btn btn-success"  href="javascript:(function(){$('#saved-customized').before($('#saved-customized').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>自定义内容</th>
                        <td>
                            <ul id="param_content" class="pic-list list-unstyled form-inline">
                                <?php if(!(empty($product['custom_content']) || (($product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator ) && $product['custom_content']->isEmpty()))): if(is_array($product['custom_content']) || $product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator): if( count($product['custom_content'])==0 ) : echo "" ;else: foreach($product['custom_content'] as $key=>$vo): ?>
                                        <li id="saved-param_content<?php echo $key; ?>">
                                            参数名：
                                            <input class="form-control" type="text" name="param_content_name[<?php echo $key; ?>]" value="<?php echo $vo['param_content_name']; ?>" style="width: 200px;">
                                            &nbsp;&nbsp;&nbsp;参数值：
                                            <script type="text/plain" id="param_content<?php echo $key; ?>" name="param_content_val[<?php echo $key; ?>]"><?php echo $vo['param_content_val']; ?></script>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger" href="javascript:(function(){$('#saved-param_content<?php echo $key; ?>').remove();})();">
                                                <i class="fa fa-trash fa-fw"></i>
                                            </a>
                                        </li>
                                        <script type="text/javascript" defer>
                                            $(function(){
                                                editorcontent = new baidu.editor.ui.Editor();
                                                editorcontent.render('param_content<?php echo $key; ?>');
                                                try {
                                                    editorcontent.sync();
                                                } catch (err) {
                                                }
                                            })

                                        </script>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </ul>
                            <a href="javascript:param_content_add();" class="btn btn-default">添加</a>
                        </td>
                    </tr>
                    <tr>
                        <th>排序</th>
                        <td>
                            <input class="form-control" type="number" name="list_order"
                                   id="list_order" value="<?php echo $product['list_order']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>推荐</th>
                        <td>
                            <input class="js-check" type="checkbox" name="is_recommended" value="1" <?php echo !empty($product['is_recommended']) ? 'checked'  :  ''; ?>/>推荐
                        </td>
                    </tr>
                </table>
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <input name="id" type="hidden" value="<?php echo $product['id']; ?>"/>
                        <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('SAVE'); ?></button>
                        <a class="btn btn-default" href="<?php echo url('AdminProduct/index'); ?>"><?php echo lang('BACK'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr>
                        <th><b>SEO标题</b></th>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="seo_title" id="seo_title" value="<?php echo $product['seo_title']; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th><b>SEO关键字</b></th>
                    </tr>
                    <tr>
                        <td>
                            <textarea class="form-control" name="seo_keywords" id="seo_keywords"><?php echo $product['seo_keywords']; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th><b>SEO描述</b></th>
                    </tr>
                    <tr>
                        <td>
                            <textarea class="form-control" name="seo_description" id="seo_description"><?php echo $product['seo_description']; ?></textarea>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
<script type="text/javascript">
    //编辑器路径定义
    var editorURL = GV.WEB_ROOT;
</script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    $(function () {

        editorcontent = new baidu.editor.ui.Editor();
        editorcontent.render('content');
        try {
            editorcontent.sync();
        } catch (err) {
        }

        scenariocontent = new baidu.editor.ui.Editor();
        scenariocontent.render('scenario_content');
        try {
            scenariocontent.sync();
        } catch (err) {
        }

        featurescontent = new baidu.editor.ui.Editor();
        featurescontent.render('features_content');
        try {
            featurescontent.sync();
        } catch (err) {
        }

        customizedcontent = new baidu.editor.ui.Editor();
        customizedcontent.render('customized_content');
        try {
            customizedcontent.sync();
        } catch (err) {
        }

        $('.btn-cancel-thumbnail').click(function () {
            $('#thumbnail-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
            $('#thumbnail').val('');
        });

    });

    function parameter_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-parameter'+id+'">' +
            '参数名：' +
            '<input class="form-control" type="text" name="parameter_name[]" value="" style="width: 200px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;参数值：' +
            '<input class="form-control" type="text" name="parameter_val[]" value="" style="width: 300px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-parameter'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#parameter').append(html);
    }

    function param_content_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-param_content'+id+'">' +
            '参数名：' +
            '<input class="form-control" type="text" name="param_content_name['+id+']" value="" style="width: 200px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;参数值：' +
            '<script type="text/plain" id="param_content' + id + '" name="param_content_val['+id+']"><\/script>' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-param_content'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#param_content').append(html);

        param_content = new baidu.editor.ui.Editor();
        param_content.render('param_content' + id);
        try {
            param_content.sync();
        } catch (err) {
        }
    }

    function checkCapacity(key) {
        openIframeLayer("<?php echo url('AdminProduct/select'); ?>?key="+key+"&ids=" + $('#js-'+key+'-input').val(), '请选择起重量', {
            area: ['700px', '400px'],
            btn: ['确定', '取消'],
            yes: function (index, layero) {
                var iframeWin = window[layero.find('iframe')[0]['name']];
                var selecteds = iframeWin.confirm();

                if (selecteds.selectedIds.length === 0) {
                    layer.msg('请选择分类');
                    return;
                }
                $('#js-'+key+'-input').val(selecteds.selectedIds.join(','));
                for (var i = 0; i < selecteds.selecteds.length; i++) {
                    if ($('#saved-'+key+selecteds.selecteds[i].id).length > 0){
                        continue;
                    }
                    $('#'+key).append('<li id="saved-'+key+selecteds.selecteds[i].id+'"><input class="form-control" type="text" name="'+key+'[]" value="'+selecteds.selecteds[i].name+'" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-'+key+selecteds.selecteds[i].id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
                }
                layer.close(index); //如果设定了yes回调，需进行手工关闭
            }
        });
    }

    function input_add(domid) {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        $('#'+domid).append('<li id="saved-'+domid+id+'"><input class="form-control" type="text" name="'+domid+'[]" value="" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-'+domid+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
    }

    function doSelectTags() {
        var selectedTagsId = $('#js-tags-id-input').val();
        openIframeLayer("<?php echo url('AdminProfession/select'); ?>?ids=" + selectedTagsId, '请选择分类', {
            area: ['700px', '400px'],
            btn: ['确定', '取消'],
            yes: function (index, layero) {
                var iframeWin = window[layero.find('iframe')[0]['name']];
                var selectedTags = iframeWin.confirm();
                if (selectedTags.selectedTagsId.length == 0) {
                    layer.msg('请选择分类');
                    return;
                }
                $('#js-tags-id-input').val(selectedTags.selectedTagsId.join(','));
                $('#js-tags-name-input').val(selectedTags.selectedTagsName.join(' '));
                //console.log(layer.getFrameIndex(index));
                layer.close(index); //如果设定了yes回调，需进行手工关闭
            }
        });
    }
</script>
</body>
</html>

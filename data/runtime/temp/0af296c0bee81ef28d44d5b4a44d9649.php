<?php /*a:2:{s:81:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/admin\slide_item\edit.html";i:1778150929;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
        <li><a href="<?php echo url('SlideItem/index',['slide_id'=>$slide_id]); ?>"><?php echo lang('ADMIN_SLIDEITEM_INDEX'); ?></a></li>
        <li><a href="<?php echo url('SlideItem/add',['slide_id'=>$slide_id]); ?>"><?php echo lang('ADMIN_SLIDEITEM_ADD'); ?></a></li>
        <li class="active"><a><?php echo lang('ADMIN_SLIDEITEM_EDIT'); ?></a></li>
    </ul>
    <form action="<?php echo url('SlideItem/editPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th><span class="form-required">*</span>&#21517;&#31216;</th>
                        <td>
                            <input class="form-control" type="text" style="width:400px;" name="post[title]" id="title"
                                   required value="<?php echo $result['title']; ?>" placeholder="&#35831;&#36755;&#20837;&#21517;&#31216;"/>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo lang('Url'); ?></th>
                        <td>
                            <input class="form-control" type="text" name="post[url]" id="keywords" value="<?php echo $result['url']; ?>"
                                   style="width: 400px" placeholder="<?php echo lang('Url'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo lang('Url Target'); ?></th>
                        <td>
                            <select class="form-control" name="post[target]" id="target" style="width: 400px">
                                <option value="_blank" <?php echo $result['target']==='_blank' ? 'selected="selected"' : ''; ?>>_blank</option>
                                <option value="_self" <?php echo $result['target']==='_self' ? 'selected="selected"' : ''; ?>>_self</option>
                                <option value="_parent" <?php echo $result['target']==='_parent' ? 'selected="selected"' : ''; ?>>_parent</option>
                                <option value="_top" <?php echo $result['target']==='_top' ? 'selected="selected"' : ''; ?>>_top</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>&#25551;&#36848;</th>
                        <td>
                            <textarea class="form-control" name="post[description]" id="description"
                                      style="width: 70%; height: 100px;"
                                      placeholder="&#35831;&#36755;&#20837;&#25551;&#36848;"><?php echo $result['description']; ?></textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr>
                        <th><b>&#32553;&#30053;&#22270;</b></th>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <input type="hidden" name="post[image]" id="thumb" value="<?php echo (isset($result['image']) && ($result['image'] !== '')?$result['image']:''); ?>">
                                <a href="javascript:uploadOneImage('&#22270;&#29255;&#19978;&#20256;','#thumb');">
                                    <?php if(empty($result['image'])): ?>
                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                             id="thumb-preview" width="135" style="cursor: hand"/>
                                        <?php else: ?>
                                        <img src="<?php echo cmf_get_image_preview_url($result['image']); ?>" id="thumb-preview"
                                             width="135" style="cursor: hand"/>
                                    <?php endif; ?>
                                </a>
                                <input type="button" class="btn btn-sm"
                                       onclick="$('#thumb-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#thumb').val('');return false;"
                                       value="&#21462;&#28040;&#22270;&#29255;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="post[id]" value="<?php echo $result['id']; ?>"/>
                <input type="hidden" name="post[slide_id]" value="<?php echo $slide_id; ?>">
                <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('SAVE'); ?></button>
                <a class="btn btn-default" href="<?php echo url('SlideItem/index',['slide_id'=>$slide_id]); ?>"><?php echo lang('BACK'); ?></a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
</body>
</html>
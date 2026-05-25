<?php /*a:2:{s:82:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/admin\slide_item\index.html";i:1778150959;s:73:"C:\laragon\www\nucleon\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
        <li class="active"><a href="<?php echo url('SlideItem/index',['slide_id'=>$slide_id]); ?>"><?php echo lang('ADMIN_SLIDEITEM_INDEX'); ?></a></li>
        <li><a href="<?php echo url('SlideItem/add',['slide_id'=>$slide_id]); ?>"><?php echo lang('ADMIN_SLIDEITEM_ADD'); ?></a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20" action="<?php echo url('SlideItem/listOrder'); ?>">
        <div class="table-actions">
            <button class="btn btn-primary btn-sm js-ajax-submit" type="submit"><?php echo lang('SORT'); ?></button>
        </div>
        <?php 
			$status = [lang('HIDDEN'), lang('DISPLAY')];
			$target = [''=>'','_blank'=>'新窗口', '_self'=>'当前窗口', '_parent'=>'父窗口', '_top'=>'主窗口'];
         ?>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th width="50"><?php echo lang('SORT'); ?></th>
                <th width="50">ID</th>
                <th>&#21517;&#31216;</th>
                <th>&#25551;&#36848;</th>
                <th><?php echo lang('Url'); ?></th>
                <th><?php echo lang('Url Target'); ?></th>
                <th><?php echo lang('Image'); ?></th>
                <th><?php echo lang('Status'); ?></th>
                <th width="160"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $key=>$vo): ?>
                <tr>
                    <td>
                        <input name="list_orders[<?php echo $vo['id']; ?>]" class="input-order" type="text" value="<?php echo $vo['list_order']; ?>">
                    </td>
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['title']; ?></td>
                    <td><?php echo $description = mb_substr($vo['description'], 0, 48,'utf-8'); ?></td>
                    <td><?php echo $vo['url']; ?></td>
                    <td><?php echo $target[$vo['target']]; ?></td>
                    <td>
                        <?php if(!empty($vo['image'])): ?>
                            <a href="javascript:imagePreviewDialog('<?php echo cmf_get_image_preview_url($vo['image']); ?>');">
                                <i class="fa fa-photo fa-fw"></i>
                            </a>

                        <?php endif; ?>
                    </td>
                    <td><?php echo $status[$vo['status']]; ?></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo url('SlideItem/edit',array('id'=>$vo['id'])); ?>"><?php echo lang('EDIT'); ?></a>
                        <a href="<?php echo url('SlideItem/delete',array('id'=>$vo['id'])); ?>"
                           class="btn btn-xs btn-danger js-ajax-delete"><?php echo lang('DELETE'); ?></a>
                        <?php if(empty($vo['status']) == 1): ?>
                            <a href="<?php echo url('SlideItem/cancelban',array('id'=>$vo['id'])); ?>" class="btn btn-xs btn-warning js-ajax-dialog-btn"
                               data-msg="确定显示此幻灯片吗？"><?php echo lang('DISPLAY'); ?></a>
                            <?php else: ?>
                            <a href="<?php echo url('SlideItem/ban',array('id'=>$vo['id'])); ?>" class="btn btn-xs btn-warning js-ajax-dialog-btn"
                               data-msg="确定隐藏此幻灯片吗？"><?php echo lang('HIDE'); ?></a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </form>

</div>
<script src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
</body>
</html>

<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/Album/Public/admin//favicon.ico">
    <LINK rel="Shortcut Icon" href="/Album/Public/admin//favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://lib.h-ui.net/html5.js"></script>
    <script type="text/javascript" src="http://lib.h-ui.net/respond.min.js"></script>
    <script type="text/javascript" src="http://lib.h-ui.net/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/static/h-ui/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/lib/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/static/h-ui/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/static/h-ui/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>添加管理员 - 管理员管理 - H-ui.admin v2.4</title>
    <meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" action="<?php echo U();?>" method="post" id="form-admin-add">
        
        <div class="all-carousel-igure">
            <div class="one-carousel-igure" id="one-carousel-igure-1" jayValue="1">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>选择单张图片：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" placeholder="广告图片" value="" class="input-text picture-text">
                        <input type="hidden" name="picture" value="" class="picture-addr-box">
                    </div>
                    <div class="formControls col-xs-8 col-sm-2">
                        <img src="" style="width: 250px">
                    </div>

                </div>
                
                
                <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">多张图片：</label>
                                <div class="formControls col-xs-8 col-sm-6">
                                    <table class="table table-border table-bordered table-hover">
                                        <caption class="mb-10">
                                            <input class="btn btn-block btn-primary size-L radius addImge" type="button"
                                                   value="添加多张图片">
                                        </caption>
                                        <thead class="text-c">
                                        <tr>
                                            <th>图片</th>
                                            <th>名称</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody id="picture-box">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

            </div>
        </div>

        




       
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Album/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Album/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Album/Public/admin/lib/layer/2.1/extend/layer.ext.js"></script>
<script type="text/javascript" src="/Album/Public/admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Album/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Album/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Album/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    /*亮点图片的选择*/
    $('.all-carousel-igure').on('click','.picture-text',function(){
        var box_id=$(this).parents('.one-carousel-igure').attr('id');
        layer.open({
            type: 2,
            area: ['80%', '700px'],
            fix: false, //不固定
            maxmin: true,
            //需要传入当前的路线的id
            content: '<?php echo U("Album/oneAlbum");?>?box_id='+box_id
        });
    });
    
    
    /*选择图片*/
    $('.addImge').click(function () {
        layer.open({
            type: 2,
            area: ['80%', '700px'],
            fix: false, //不固定
            maxmin: true,
            //需要传入当前的路线的id
            content: '<?php echo U("Album/album");?>'
        });
    });
    
    /*删除轮播图*/
    function delPicture(id) {
        $('#picture_tr_' + id).remove();
        $('#picture_input_' + id).remove();
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
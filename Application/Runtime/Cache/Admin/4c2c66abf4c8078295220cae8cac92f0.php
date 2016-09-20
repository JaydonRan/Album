<?php if (!defined('THINK_PATH')) exit();?>﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Albumsys/Public/admin/lib/html5.js"></script>
    <script type="text/javascript" src="/Albumsys/Public/admin/lib/respond.min.js"></script>
    <script type="text/javascript" src="/Albumsys/Public/admin/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/laydate/laydate/need/laydate.css"/>

    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>租车添加</title>
    <style>
        .add-but {
            font-size: 40px;
            color: #00a0e9;
        }

        .add-but:hover {
            cursor: pointer;
            font-size: 50px;
            color: #0297e9;
        }

    </style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 租车管理 <span
        class="c-gray en">&gt;</span> 租车添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo U('carAdd');?>">
        <div id="tab-system" class="HuiTab">
            <div class="tabBar cl">
                <span>基本信息</span><span>详情图片</span><span>预定须知</span><span>退改规则</span><span>多媒体</span>
            </div>
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="title" placeholder="car标题" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>排序：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="sort" placeholder="排序，值越大产品排名越靠前。" value="0" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>车型：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="models" placeholder="车型" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>车辆品牌：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="brand" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>排挡：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="gear" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>座次：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="seating_order" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>年限：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="car_life" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>天数：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="day" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">是否司机：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="driver" placeholder="如：带司机" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">说明：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="explain" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">昆明价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="kunming_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">大理价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="dali_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">丽江价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="lijiang_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">腾冲价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="tengchong_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">瑞丽价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="ruili_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">香格里拉价格：</label>
                    <div class="formControls col-xs-8 col-sm-4">
                        <input type="text" name="xiangge_price" placeholder="" value="" class="input-text">
                    </div>
                </div>
            </div>
            <!--详情图片-->
            <div class="tabCon">
                <div class="row cl">
                    <div class="panel panel-default">
                        <div class="panel-header ">
                            <div class="col-md-offset-2 ">
                                详情图片
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">详情图片：</label>
                                <div class="formControls col-xs-8 col-sm-6">
                                    <table class="table table-border table-bordered table-hover">
                                        <caption class="mb-10">
                                            <input class="btn btn-block btn-primary size-L radius add-car-details"
                                                   type="button" value="添加详情图">
                                        </caption>
                                        <thead class="text-c">
                                        <tr>
                                            <th>图片</th>
                                            <th>名称</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody id="car-details-box">

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--用来装详情图片地址-->
                <div id="car-details-id-dox">
                </div>
            </div>
            <!--预定须知-->
            <div class="tabCon">
                <div class="car_booking_notice">
                    <div class="one_car_booking_notice_picture" id="one_car_booking_notice_0" jayValue="0">
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片：</label>
                            <div class="formControls col-xs-8 col-sm-4">
                                <input type="text" placeholder="预定须知的图片" value="" class="input-text picture-text">
                                <input type="hidden" name="booking_notice_picture" class="picture-addr-box">
                            </div>
                            <div class="formControls col-xs-8 col-sm-2">
                                <img src="" style="width: 250px">
                            </div>

                        </div>
                        <div class="line mt-10"></div>
                    </div>
                    <div class="one-li-highlights" id="one_car_booking_notice_1" jayValue="1">
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-2">预定须知：</label>
                            <div class="formControls col-xs-8 col-sm-4">
                                <input type="text" name="car_booking_notice[]" placeholder="" value="" class="input-text">
                            </div>
                        </div>
                        <div class="line mt-10"></div>
                    </div>
                </div>
                <div class="row cl">
                    <div class="formControls col-md-offset-2 col-xs-8 col-sm-2">
                        <i class="Hui-iconfont add-one-car-booking-notice add-but">&#xe61f;</i>
                    </div>
                </div>
            </div>
            <!--退改规则-->
            <div class="tabCon">
                <div class="car_back_change">
                    <div class="one_car_back_change">
                        <div class="row cl">
                            <label class="form-label col-xs-4 col-sm-2">退改规则：</label>
                            <div class="formControls col-xs-8 col-sm-4">
                                <input type="text" name="car_back_change[]" placeholder="" value="" class="input-text">
                            </div>
                        </div>
                        <div class="line mt-10"></div>
                    </div>
                </div>
                <div class="row cl">
                    <div class="formControls col-md-offset-2 col-xs-8 col-sm-2">
                        <i class="Hui-iconfont add_one_car_back_change add-but">&#xe61f;</i>
                    </div>
                </div>
            </div>





            <!--多媒体-->
            <div class="tabCon">
                <div class="row cl">
                    <div class="panel panel-default">
                        <div class="panel-header ">
                            <div class="col-md-offset-2 ">
                                缩略图&轮播图
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row cl all-thumbnail" id="one-thumbnail">
                                <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
                                <div class="formControls col-xs-8 col-sm-4">
                                    <input type="text" placeholder="请选择图片" value="" class="input-text picture-text">
                                    <input type="hidden" name="thumbnail" class="picture-addr-box">
                                </div>
                                <div class="formControls col-xs-8 col-sm-2">
                                    <img src="" style="width: 250px">
                                </div>
                            </div>
                            <div class="row cl all-thumbnail" id="one-pk_picture">
                                <label class="form-label col-xs-4 col-sm-2">选择我们（PK）：</label>
                                <div class="formControls col-xs-8 col-sm-4">
                                    <input type="text" placeholder="请选择图片" value="" class="input-text picture-text">
                                    <input type="hidden" name="pk_picture" class="picture-addr-box">
                                </div>
                                <div class="formControls col-xs-8 col-sm-2">
                                    <img src="" style="width: 250px">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">轮播图：</label>
                                <div class="formControls col-xs-8 col-sm-6">
                                    <table class="table table-border table-bordered table-hover">
                                        <caption class="mb-10">
                                            <input class="btn btn-block btn-primary size-L radius addImge" type="button"
                                                   value="添加轮播图">
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
                </div>
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <button  class="btn btn-primary radius" type="submit"><i
                                class="Hui-iconfont">&#xe632;</i> 保存
                        </button>
                        <!--<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>-->
                    </div>
                </div>
            </div>
        </div>

        <!--这里是放图片的id信息-->
        <div id="album-id-box">

        </div>
    </form>

</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Albumsys/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<!--<script type="text/javascript" src="/Albumsys/Public/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>-->
<script type="text/javascript" src="/Albumsys/Public/admin/lib/laydate/laydate/laydate.js"></script>
<!--/_footer /作为公共模版分离出去-->
<!--<script type="text/javascript" src="/Albumsys/Public/admin/lib/webuploader/0.1.5/webuploader.min.js"></script> -->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $.Huitab("#tab-system .tabBar span", "#tab-system .tabCon", "current", "click", "0");


        /*选择详情图片*/
        $('.add-car-details').click(function () {
            layer.open({
                type: 2,
                area: ['80%', '700px'],
                fix: false, //不固定
                maxmin: true,
                //需要传入当前的路线的id
                content: '<?php echo U("add_car_details");?>'
            });
        });

        /*预定须知的图片选择*/
        $('.car_booking_notice').on('click', '.picture-text', function () {
            var box_id = $(this).parents('.one_car_booking_notice_picture').attr('id');
            layer.open({
                type: 2,
                area: ['80%', '700px'],
                fix: false, //不固定
                maxmin: true,
                //需要传入当前的路线的id
                content: '<?php echo U("oneAlbum");?>?box_id=' + box_id
            });
        });
        /*var summary = UE.getEditor('summary');
         var pric_include = UE.getEditor('pric_include');
         var no_pric_include = UE.getEditor('no_pric_include');
         var intended_known = UE.getEditor('intended_known');
         var daycont1= UE.getEditor('daycont1');*/

        /*选择图片*/
        $('.addImge').click(function () {
            layer.open({
                type: 2,
                area: ['80%', '700px'],
                fix: false, //不固定
                maxmin: true,
                //需要传入当前的路线的id
                content: '<?php echo U("album");?>'
            });
        });
        /*添加预定须知*/
        $('.add-one-car-booking-notice').on('click', function () {
            //得到预定须知中的id的最大值
           // var last_highli = $('.car_booking_notice').find('.add-one-car-booking-notice:last').attr('jayValue');
            var li_highlights = '<div class="one_car_booking_notice"><div class="row cl"><label class="form-label col-xs-4 col-sm-2"></label><div class="formControls col-xs-8 col-sm-4"><input type="text"name="car_booking_notice[]"placeholder=""value=""class="input-text"></div><div class="formControls col-xs-8 col-sm-2 del_booking_notice"><input class="btn btn-danger-outline radius "type="button"value="删除"></div></div><div class="line mt-10"></div></div>';
            $('.car_booking_notice').append(li_highlights);
        });
        /*删除预定须知*/
        $('.car_booking_notice').on('click', '.del_booking_notice', function () {
            $(this).parents('.one_car_booking_notice').remove();
        });

        /*添加退改规则*/
        $('.add_one_car_back_change').on('click', function () {

            //得到预定须知中的id的最大值
            //var last_highli = $('.car_back_change').find('.add-one-car-vank-change:last').attr('jayValue');
            var li_highlights = '<div class="one_car_back_change"><div class="row cl"><label class="form-label col-xs-4 col-sm-2"></label><div class="formControls col-xs-8 col-sm-4"><input type="text"name="car_back_change[]"placeholder=""value=""class="input-text"></div><div class="formControls col-xs-8 col-sm-2 del_back_change"><input class="btn btn-danger-outline radius "type="button"value="删除"></div></div><div class="line mt-10"></div></div>';
            $('.car_back_change').append(li_highlights);
        });
        /*删除退改规则*/
        $('.car_back_change').on('click', '.del_back_change', function () {
            $(this).parents('.one_car_back_change').remove();
        });

        /*s缩略图片的选择*/
        $('.all-thumbnail').on('click', '.picture-text', function () {
            var box_id = $(this).parents('.all-thumbnail').attr('id');
            layer.open({
                type: 2,
                area: ['80%', '700px'],
                fix: false, //不固定
                maxmin: true,
                //需要传入当前的路线的id
                content: '<?php echo U("oneAlbum");?>?box_id=' + box_id
            });
        });


    });
    /*删除详情图*/
    function delCarPicture(id) {
        $('#car-details_tr_' + id).remove();
        $('#car-details_input_' + id).remove();
    }
    /*删除轮播图*/
    function delPicture(id) {
        $('#picture_tr_' + id).remove();
        $('#picture_input_' + id).remove();
    }

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
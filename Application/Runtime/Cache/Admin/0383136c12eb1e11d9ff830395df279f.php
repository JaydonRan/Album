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
    <LINK rel="Bookmark" href="/Album/Public/Admin/favicon.ico">
    <LINK rel="Shortcut Icon" href="/Album/Public/Admin/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Album/Public/Adminlib/html5.js"></script>
    <script type="text/javascript" src="/Album/Public/Adminlib/respond.min.js"></script>
    <script type="text/javascript" src="/Album/Public/Adminlib/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/static/h-ui/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/lib/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/lib/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/static/h-ui/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/static/h-ui/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/Admin/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="/Album/Public/admin/lib/webuploader/0.1.5/webuploader.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>相册</title>
    <style>
       /* 相册头*/

       /*相册导航*/
       /*相册操作*/
       .al-caozuo{
           background-color: #f2f6ff;
       }
       /*相册主体*/
        .al-imge{
            width: 240px;
            height: 200px;
        }
       .al-imge:hover{
           cursor: pointer;
       }
        .al-name{
            width: 185px;
        }
        .al-msg{
            width: 200px;
        }
        .al-xiaocaozuo{
            width: 210px;
        }
       .al-xiaocaozuo span{
           width: 33.33%;
       }
       .completeBut{
           background: #00b7ee;
           color: #fff;
           border-color: transparent;
           border: 1px solid #cfcfcf;
           display: inline-block;
           border-radius: 3px;
           margin-left: 10px;
           cursor: pointer;
           padding: 0 18px;
           font-size: 14px;
           float: right;
           line-height: 40px;
       }
       .completeBut:hover{
           background-color: #0295C1;
       }

    </style>
</head>
<body>
<article class="page-container">
    <div class="panel panel-default ">
        <div class="panel-header">
            <div class="row cl">
                <div class="formControls col-xs-12 col-sm-12">
                    上传图片
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row cl">
                <div class="formControls col-xs-12 col-sm-12">
                    <nav class="Hui-breadcrumb">
                        <a class="maincolor" href="<?php echo U('Line/album');?>">根节点</a>
                        <?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$treeData): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Line/album');?>?id=<?php echo ($treeData["id"]); ?>">
                                <span class="c-666">&gt;</span><?php echo ($treeData["title"]); ?>
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </nav>
                </div>
            </div>
            <div class="row cl ">
                <div class="formControls col-xs-12 col-sm-12 mt-10 pd-10 al-caozuo">
                    <input  type="checkbox"  id="checkbox-all" value="">
                    <label for="checkbox-all" >全选</label>
                    <input class="btn   radius" id="addAlbum" type="button" value="确定">

                </div>
            </div>
            <div class="row cl ">
                <div class="album"></div>

                <?php if(is_array($albumData["sone"])): $i = 0; $__LIST__ = $albumData["sone"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div id="album-no-<?php echo ($data["id"]); ?>" class="f-l mt-20 ml-20 <?php if(($data['leaf'] == 0)): ?>album<?php endif; ?>" >

                        <?php if(($data['leaf'] == 0)): ?><a href="<?php echo U('Line/album?id='.$data['id']);?>">
                                <img src="/Album/Public/Admin/imge/6.png"  alt="<?php echo ($data["title"]); ?>" class="al-imge">
                            </a>
                            <?php else: ?>
                            <img  src="/Album/<?php echo ($data["address"]); ?>" alt="<?php echo ($data["title"]); ?>" class="al-imge"><?php endif; ?>

                        <ul class="row cl mt-5 ml-5 al-msg" >
                            <?php if(($data['leaf'] == 1)): ?><li class="f-l">
                                    <input type="checkbox"  class="picture-id" pname="<?php echo ($data["title"]); ?>"  pictureAdd="/Album/<?php echo ($data["address"]); ?>" value="<?php echo ($data["id"]); ?>">
                                </li><?php endif; ?>
                            <li class="f-l">
                                <p class="text-overflow al-name" >&nbsp&nbsp<?php echo ($data["title"]); ?></p>
                            </li>
                        </ul>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>




    </div>

</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Album/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/layer/2.1/extend/layer.ext.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/static/h-ui/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Album/Public/Admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<!--<script type="text/javascript" src="/Album/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Album/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> -->
<!--<script type="text/javascript" src="/Album/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>-->
<script type="text/javascript">
   $('#checkbox-all').on('click',function(){
      // alert($('#checkbox-all').prop("checked"));
       if($(this).prop("checked")==true){
           //全选
           $(".picture-id").prop("checked",true);
       }else {
           //全不选
           $(".picture-id").prop("checked",false);
       }
   });
   $(function(){
       var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
       $('#addAlbum').on('click', function(){
           $(".picture-id").each(function(){
               if ($(this).prop("checked")==true){
                  var picture=($(this).prop("value"));
                   var title=($(this).attr("pname"));
                   var pictureAdd=($(this).attr("pictureAdd"));
                   parent.$('#picture-box').append('<tr id="picture_tr_'+picture+'" class="text-c"><td><img src="'+pictureAdd+'"style="height: 200px"></td><td>'+title+'</td><td><input onclick="delPicture('+picture+')" class="btn btn-danger radius"type="button"value="删除"></td></tr>');
                   parent.$('#album-id-box').append('<input id="picture_input_'+picture+'" type="hidden" name="album[]" value="'+picture+'">');
               }
           });
          // alert('jdjsfj');
          //parent.$('#album-id-box').text('我被改变了');
           parent.layer.close(index);
       });
   });



</script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
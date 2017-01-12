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
                <div class="formControls col-xs-6 col-sm-6">
                    <input class="btn btn-block btn-primary size-L radius upImge" type="button" value="上传图片">
                </div>
                <div class="formControls col-xs-6 col-sm-6">
                    <input class="btn btn-block btn-primary size-L radius createFolder" onclick="createFolder('<?php echo ($albumData['id']); ?>')" type="button" value="创建文件夹">
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row cl">
                <div class="formControls col-xs-12 col-sm-12">
                    <nav class="Hui-breadcrumb">
                        <a class="maincolor" href="<?php echo U('Album/index');?>">根节点</a>
                        <?php if(is_array($tree)): $i = 0; $__LIST__ = $tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$treeData): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Album/index');?>?id=<?php echo ($treeData["id"]); ?>">
                                <span class="c-666">&gt;</span><?php echo ($treeData["title"]); ?>
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </nav>
                </div>
            </div>
            <div class="row cl ">
                <div class="formControls col-xs-12 col-sm-12 mt-10 pd-10 al-caozuo">
                    <input class="" type="checkbox" id="checkbox-all" value="">
                    <label for="checkbox-all">全选</label>
                    <input class="btn   radius" type="button" value="删除">
                    <input class="btn   radius" type="button" value="复制">
                    <input class="btn   radius" type="button" value="移动">
                </div>
            </div>
            <div class="row cl ">
                <div class="album"></div>

                <?php if(is_array($albumData["sone"])): $i = 0; $__LIST__ = $albumData["sone"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div id="album-no-<?php echo ($data["id"]); ?>" class="f-l mt-20 ml-20 <?php if(($data['leaf'] == 0)): ?>album<?php endif; ?>" >

                        <?php if(($data['leaf'] == 0)): ?><a href="<?php echo U('Album/index?id='.$data['id']);?>">
                                <img src="/Album/Public/Admin/imge/6.png"  alt="<?php echo ($data["title"]); ?>" class="al-imge">
                            </a>
                            <?php else: ?>
                            <img  src="/Album/<?php echo ($data["address"]); ?>" alt="<?php echo ($data["title"]); ?>" class="al-imge"><?php endif; ?>

                        <ul class="row cl mt-5 ml-5 al-msg" >
                            <li class="f-l">
                                <input type="checkbox" value="<?php echo ($data["id"]); ?>">
                            </li>
                            <li class="f-l">
                                <p class="text-overflow al-name" >&nbsp&nbsp<?php echo ($data["title"]); ?></p>
                            </li>
                        </ul>
                        <ul class="row cl ml-15 text-c al-xiaocaozuo">
                            <div class="btn-group row text-c">
                                <span class="btn  radius" ><i class="Hui-iconfont">&#xe6df;</i>编辑</span>
                                <span class="btn  radius" onclick="delFolder(<?php echo ($data["id"]); ?>,'<?php echo ($data["title"]); ?>')"><i class="Hui-iconfont">&#xe60b;</i>删除</span>
                                <span class="btn  radius"><i class="Hui-iconfont">&#xe6ab;</i>移动</span>
                            </div>
                        </ul>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>




            </div>
            <div class="row cl text-c mt-20" style="display: none">
                这里是分页呀
            </div>

        </div>

            <div class="uploader-list-container"  >
                <div class="queueList">
                    <div id="dndArea" class="placeholder">
                        <div id="filePicker-2"></div>
                        <p>或将照片拖到这里，单次最多可选300张</p>
                    </div>
                </div>
                <div class="statusBar" style="display:none;">
                    <div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
                    <div class="info"></div>
                    <div class="btns">
                        <div id="filePicker2"></div>

                        <div class="uploadBtn">开始上传</div>

                    </div>
                </div>
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
   $(function(){


   });
   /* 创建文件夹*/
    function createFolder(parent_id){

        var prompt= layer.prompt({
            title: '输入文件夹名，并确认',
            formType: 0 //prompt风格，支持0-2
        },function(name){
            layer.close(prompt);
            $.get("<?php echo U('Album/addAlbum');?>", { title: name, parent_id: parent_id },
                    function(data){
                        var htmlAlbum='<div class="f-l mt-20 ml-20 album"> <a href="<?php echo U("Album/index");?>/id/'+data.id+'"><img src="/Album/Public/Admin/imge/6.png" alt="'+data.title+'" class="al-imge"></a><ul class="row cl mt-5 ml-5 al-msg" ><li class="f-l"><input type="checkbox" value="'+data.id+'"></li><li class="f-l"><p class="text-overflow al-name" >&nbsp&nbsp'+data.title+'</p></li></ul><ul class="row cl ml-15 text-c al-xiaocaozuo"><div class="btn-group row text-c"><span class="btn  radius" ><i class="Hui-iconfont">&#xe6df;</i>编辑</span><span class="btn  radius"><i class="Hui-iconfont">&#xe60b;</i>删除</span><span class="btn  radius"><i class="Hui-iconfont">&#xe6ab;</i>移动</span></div></ul></div>'
                        $('.album').last().after(htmlAlbum);

                    });
        });
    }
    /*删除文件*/
    function delFolder(id,title){
        var del=layer.confirm('您确定要删除'+title+'吗？', {
            btn: ['是','否'] //按钮
        }, function(){
            layer.close(del);
            $.get("<?php echo U('Album/delAlbum');?>", { id: id},
                    function(data){
                        if(data==1){
                            $("#album-no-"+id).remove();
                            layer.msg('成功了！', {icon: 1});
                        }else {
                            layer.alert('出错了！', {icon: 1});

                        }
                    });
        });
    }

</script>
<script type="text/javascript" >

    (function( $ ){
        // 当domReady的时候开始初始化
        var index = parent.layer.getFrameIndex(window.name); //获取窗口索
        //关闭iframe
        $(".completeBut").click(function(){
           /* parent.layer.msg('您将标记 [ ' +soneGetData[0].id + ' ] 成功传送给了父窗口');
            parent.layer.close(index);
*/
            /*var htmlAlbum='<div class="f-l mt-20 ml-20 album"><img src="/Album/Public/Admin/imge/6.png" alt="'+data.title+'" class="al-imge"><ul class="row cl mt-5 ml-5 al-msg" ><li class="f-l"><input type="checkbox" value="<?php echo ($data["id"]); ?>"></li><li class="f-l"><p class="text-overflow al-name" >&nbsp&nbsp'+data.title+'</p></li></ul><ul class="row cl ml-15 text-c al-xiaocaozuo"><div class="btn-group row text-c"><span class="btn  radius" ><i class="Hui-iconfont">&#xe6df;</i>编辑</span><span class="btn  radius"><i class="Hui-iconfont">&#xe60b;</i>删除</span><span class="btn  radius"><i class="Hui-iconfont">&#xe6ab;</i>移动</span></div></ul></div>'
             parent.last().after(htmlAlbum);
             */

        });

        var soneGetData=[];
        $(function() {
            /* 上传图片*/

            $('.upImge').click(function(){

                //iframe层-父子操作
                layer.open({
                    type: 1,
                    area: ['700px', '530px'],
                    fix: false, //不固定
                    maxmin: true,
                    content:  $('.uploader-list-container'),
                });
            });
            var $wrap = $('.uploader-list-container'),

            // 图片容器
                    $queue = $( '<ul class="filelist"></ul>' )
                            .appendTo( $wrap.find( '.queueList' ) ),

            // 状态栏，包括进度和控制按钮
                    $statusBar = $wrap.find( '.statusBar' ),

            // 文件总体选择信息。
                    $info = $statusBar.find( '.info' ),

            // 上传按钮
                    $upload = $wrap.find( '.uploadBtn' ),

            // 没选择文件之前的内容。
                    $placeHolder = $wrap.find( '.placeholder' ),

                    $progress = $statusBar.find( '.progress' ).hide(),

            // $completeBut=$statusBar.find('.completeBut').hide(),

            // 添加的文件数量
                    fileCount = 0,

            // 添加的文件总大小
                    fileSize = 0,

            // 优化retina, 在retina下这个值是2
                    ratio = window.devicePixelRatio || 1,

            // 缩略图大小
                    thumbnailWidth = 110 * ratio,
                    thumbnailHeight = 110 * ratio,

            // 可能有pedding, ready, uploading, confirm, done.
                    state = 'pedding',

            // 所有文件的进度信息，key为file id
                    percentages = {},
            // 判断浏览器是否支持图片的base64
                    isSupportBase64 = ( function() {
                        var data = new Image();
                        var support = true;
                        data.onload = data.onerror = function() {
                            if( this.width != 1 || this.height != 1 ) {
                                support = false;
                            }
                        }
                        data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
                        return support;
                    } )(),

            // 检测是否已经安装flash，检测flash的版本


                    supportTransition = (function(){
                        var s = document.createElement('p').style,
                                r = 'transition' in s ||
                                        'WebkitTransition' in s ||
                                        'MozTransition' in s ||
                                        'msTransition' in s ||
                                        'OTransition' in s;
                        s = null;
                        return r;
                    })(),

            // WebUploader实例
                    uploader;

            //$('.uploader-list-container').hide();

            // 实例化
            uploader = WebUploader.create({
                pick: {
                    id: '#filePicker-2',
                    label: '点击选择图片'
                },

                formData: {
                    uid: 123
                },
                dnd: '#dndArea',
                paste: '#uploader',
                swf: '../Uploader.swf',
                chunked: false,
                chunkSize: 512 * 1024,
                server: '<?php echo U("webup");?>',
                // runtimeOrder: 'flash',

                // accept: {
                //     title: 'Images',
                //     extensions: 'gif,jpg,jpeg,bmp,png',
                //     mimeTypes: 'image/*'
                // },

                // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
                disableGlobalDnd: true,
                fileNumLimit: 300,
                fileSizeLimit: 200 * 1024 * 1024,    // 200 M
                fileSingleSizeLimit: 50 * 1024 * 1024    // 50 M
            });

            // 拖拽时不接受 js, txt 文件。
            uploader.on( 'dndAccept', function( items ) {
                var denied = false,
                        len = items.length,
                        i = 0,
                // 修改js类型
                        unAllowed = 'text/plain;application/javascript ';

                for ( ; i < len; i++ ) {
                    // 如果在列表里面
                    if ( ~unAllowed.indexOf( items[ i ].type ) ) {
                        denied = true;
                        break;
                    }
                }

                return !denied;
            });

            uploader.on('dialogOpen', function() {
                console.log('here');
            });

            /* uploader.on('uploadSuccess',function(data){

             });*/


            // uploader.on('filesQueued', function() {
            //     uploader.sort(function( a, b ) {
            //         if ( a.name < b.name )
            //           return -1;
            //         if ( a.name > b.name )
            //           return 1;
            //         return 0;
            //     });
            // });

            // 添加“添加文件”的按钮，
            uploader.addButton({
                id: '#filePicker2',
                label: '继续添加',

            });



            uploader.on('ready', function() {
                window.uploader = uploader;
            });

            // 当有文件添加进来时执行，负责view的创建
            function addFile( file ) {
                var $li = $( '<li id="' + file.id + '">' +
                                '<p class="title">' + file.name + '</p>' +
                                '<p class="imgWrap"></p>'+
                                '<p class="progress"><span></span></p>' +
                                '</li>' ),

                        $btns = $('<div class="file-panel">' +
                                '<span class="cancel">删除</span>' +
                                '<span class="rotateRight">向右旋转</span>' +
                                '<span class="rotateLeft">向左旋转</span></div>').appendTo( $li ),
                        $prgress = $li.find('p.progress span'),
                        $wrap = $li.find( 'p.imgWrap' ),
                        $info = $('<p class="error"></p>'),

                        showError = function( code ) {
                            switch( code ) {
                                case 'exceed_size':
                                    text = '文件大小超出';
                                    break;

                                case 'interrupt':
                                    text = '上传暂停';
                                    break;

                                default:
                                    text = '上传失败，请重试';
                                    break;
                            }

                            $info.text( text ).appendTo( $li );
                        };

                if ( file.getStatus() === 'invalid' ) {
                    showError( file.statusText );
                } else {
                    // @todo lazyload
                    $wrap.text( '预览中' );
                    uploader.makeThumb( file, function( error, src ) {
                        var img;

                        if ( error ) {
                            $wrap.text( '不能预览' );
                            return;
                        }

                        if( isSupportBase64 ) {
                            img = $('<img src="'+src+'">');
                            $wrap.empty().append( img );
                        } else {
                            $.ajax('../server/preview.php', {
                                method: 'POST',
                                data: src,
                                dataType:'json'
                            }).done(function( response ) {
                                if (response.result) {
                                    img = $('<img src="'+response.result+'">');
                                    $wrap.empty().append( img );
                                } else {
                                    $wrap.text("预览出错");
                                }
                            });
                        }
                    }, thumbnailWidth, thumbnailHeight );

                    percentages[ file.id ] = [ file.size, 0 ];
                    file.rotation = 0;
                }

                file.on('statuschange', function( cur, prev ) {
                    if ( prev === 'progress' ) {
                        $prgress.hide().width(0);
                    } else if ( prev === 'queued' ) {
                        $li.off( 'mouseenter mouseleave' );
                        $btns.remove();
                    }

                    // 成功

                    if ( cur === 'error' || cur === 'invalid' ) {

                        console.log( file.statusText );
                        showError( file.statusText );
                        percentages[ file.id ][ 1 ] = 1;
                    } else if ( cur === 'interrupt' ) {
                        showError( 'interrupt' );
                    } else if ( cur === 'queued' ) {
                        percentages[ file.id ][ 1 ] = 0;
                    } else if ( cur === 'progress' ) {
                        $info.remove();
                        $prgress.css('display', 'block');
                    } else if ( cur === 'complete' ) {
                        $li.append( '<span class="success"></span>' );
                    }

                    $li.removeClass( 'state-' + prev ).addClass( 'state-' + cur );

                });

                $li.on( 'mouseenter', function() {
                    $btns.stop().animate({height: 30});
                });

                $li.on( 'mouseleave', function() {
                    $btns.stop().animate({height: 0});
                });

                $btns.on( 'click', 'span', function() {
                    var index = $(this).index(),
                            deg;

                    switch ( index ) {
                        case 0:
                            uploader.removeFile( file );
                            return;

                        case 1:
                            file.rotation += 90;
                            break;

                        case 2:
                            file.rotation -= 90;
                            break;
                    }

                    if ( supportTransition ) {
                        deg = 'rotate(' + file.rotation + 'deg)';
                        $wrap.css({
                            '-webkit-transform': deg,
                            '-mos-transform': deg,
                            '-o-transform': deg,
                            'transform': deg
                        });
                    } else {
                        $wrap.css( 'filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ (~~((file.rotation/90)%4 + 4)%4) +')');
                        // use jquery animate to rotation
                        // $({
                        //     rotation: rotation
                        // }).animate({
                        //     rotation: file.rotation
                        // }, {
                        //     easing: 'linear',
                        //     step: function( now ) {
                        //         now = now * Math.PI / 180;

                        //         var cos = Math.cos( now ),
                        //             sin = Math.sin( now );

                        //         $wrap.css( 'filter', "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + ",M12=" + (-sin) + ",M21=" + sin + ",M22=" + cos + ",SizingMethod='auto expand')");
                        //     }
                        // });
                    }


                });

                $li.appendTo( $queue );
            }

            // 负责view的销毁
            function removeFile( file ) {
                var $li = $('#'+file.id);

                delete percentages[ file.id ];
                updateTotalProgress();
                $li.off().find('.file-panel').off().end().remove();
            }

            function updateTotalProgress() {
                var loaded = 0,
                        total = 0,
                        spans = $progress.children(),
                        percent;

                $.each( percentages, function( k, v ) {
                    total += v[ 0 ];
                    loaded += v[ 0 ] * v[ 1 ];
                } );

                percent = total ? loaded / total : 0;


                spans.eq( 0 ).text( Math.round( percent * 100 ) + '%' );
                spans.eq( 1 ).css( 'width', Math.round( percent * 100 ) + '%' );
                updateStatus();
            }

            function updateStatus() {
                var text = '', stats;

                if ( state === 'ready' ) {
                    text = '选中' + fileCount + '张图片，共' +
                            WebUploader.formatSize( fileSize ) + '。';
                } else if ( state === 'confirm' ) {
                    stats = uploader.getStats();
                    if ( stats.uploadFailNum ) {
                        text = '已成功上传' + stats.successNum+ '张照片至XX相册，'+
                                stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'
                    }

                } else {
                    stats = uploader.getStats();
                    text = '共' + fileCount + '张（' +
                            WebUploader.formatSize( fileSize )  +
                            '），已上传' + stats.successNum + '张';

                    if ( stats.uploadFailNum ) {
                        text += '，失败' + stats.uploadFailNum + '张';
                    }
                }

                $info.html( text );
            }

            function setState( val ) {
                var file, stats;

                if ( val === state ) {
                    return;
                }

                $upload.removeClass( 'state-' + state );
                $upload.addClass( 'state-' + val );
                state = val;

                switch ( state ) {
                    case 'pedding':
                        $placeHolder.removeClass( 'element-invisible' );
                        $queue.hide();
                        $statusBar.addClass( 'element-invisible' );
                        uploader.refresh();
                        break;

                    case 'ready':
                        $placeHolder.addClass( 'element-invisible' );
                        $( '#filePicker2' ).removeClass( 'element-invisible');
                        $queue.show();
                        $statusBar.removeClass('element-invisible');
                        uploader.refresh();
                        break;

                    case 'uploading':
                        $( '#filePicker2' ).addClass( 'element-invisible' );
                        $progress.show();
                        $upload.text( '暂停上传' );
                        break;

                    case 'paused':
                        $progress.show();
                        $upload.text( '继续上传' );
                        break;

                    case 'confirm':
                        $progress.hide();
                        $( '#filePicker2' ).removeClass( 'element-invisible' );
                        $upload.text( '开始上传' );

                        stats = uploader.getStats();
                        if ( stats.successNum && !stats.uploadFailNum ) {
                            setState( 'finish' );
                            return;
                        }
                        break;
                    case 'finish':
                        stats = uploader.getStats();
                        if ( stats.successNum ) {
                            alert( '上传成功' );
                            window.location.reload();
                           // alert(soneGetData[0].id+'/'+soneGetData[1].id);

                            /* $.each(window.uploader,function(key,val){
                             if($.isPlainObject(val) || $.isArray(val)){
                             subObj(val);
                             }else{
                             alert(key+'='+val);
                             }
                             });*/
                        } else {
                            // 没有成功的图片，重设
                            state = 'done';
                            location.reload();
                        }
                        break;
                }

                updateStatus();
            }

            uploader.onUploadProgress = function( file, percentage ) {
                var $li = $('#'+file.id),
                        $percent = $li.find('.progress span');

                $percent.css( 'width', percentage * 100 + '%' );
                percentages[ file.id ][ 1 ] = percentage;
                updateTotalProgress();
            };
            uploader.onUploadSuccess=function(file,response){


                soneGetData[soneGetData.length]=response;

            }

            uploader.onFileQueued = function( file ) {
                fileCount++;
                fileSize += file.size;

                if ( fileCount === 1 ) {
                    $placeHolder.addClass( 'element-invisible' );
                    $statusBar.show();
                }

                addFile( file );
                setState( 'ready' );
                updateTotalProgress();
            };

            uploader.onFileDequeued = function( file ) {
                fileCount--;
                fileSize -= file.size;

                if ( !fileCount ) {
                    setState( 'pedding' );
                }

                removeFile( file );
                updateTotalProgress();

            };
            uploader.onLoadSuccess = function( file ) {
                //alert(file);
                fileCount--;
                fileSize -= file.size;

                if ( !fileCount ) {
                    setState( 'pedding' );
                }

                removeFile( file );
                updateTotalProgress();

            };

            uploader.on( 'all', function( type ) {
                var stats;
                switch( type ) {
                    case 'uploadFinished':
                        setState( 'confirm' );
                        break;

                    case 'startUpload':
                        setState( 'uploading' );
                        break;

                    case 'stopUpload':
                        setState( 'paused' );
                        break;

                }
            });

            uploader.onError = function( code ) {
                alert( 'Eroor: ' + code );
            };

            $upload.on('click', function() {
                if ( $(this).hasClass( 'disabled' ) ) {
                    return false;
                }

                if ( state === 'ready' ) {
                    uploader.upload();
                } else if ( state === 'paused' ) {
                    uploader.upload();
                } else if ( state === 'uploading' ) {
                    uploader.stop();
                }
            });

            $info.on( 'click', '.retry', function() {
                uploader.retry();
            } );

            $info.on( 'click', '.ignore', function() {
                alert( 'todo' );
            } );

            $upload.addClass( 'state-' + state );
            updateTotalProgress();

        });


    })( jQuery );
</script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
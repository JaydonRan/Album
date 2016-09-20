<?php if (!defined('THINK_PATH')) exit();?>﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/static/h-ui/css/style.css" />
<!-- <link rel="stylesheet" type="text/css" href="/Albumsys/Public/admin/lib/laydate/laydate/need/laydate.css" /> -->

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->
<title> 客服管理</title>
<style>
	.add-but{
		font-size: 40px;
		color: #00a0e9;
	}
	.add-but:hover{
		cursor:pointer;
		font-size: 50px;
		color: #0297e9;
	}

</style>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 客服管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo U();?>">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>首页轮播图</span></div>

			<!--行程亮点-->
			<div class="tabCon">
				<div class="all-carousel-igure">
					<?php if(is_array($custom_service)): $kI = 0; $__LIST__ = $custom_service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voData): $mod = ($kI % 2 );++$kI;?><div class="one-carousel-igure" id="one-carousel-igure-<?php echo ($kI); ?>" jayValue="<?php echo ($kI); ?>" >
						     <input type="hidden" name="customer[<?php echo ($kI); ?>][id]" value="<?php echo ($voData["id"]); ?>">
							<div class="row cl">
								<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>姓名：</label>
								<div class="formControls col-xs-8 col-sm-4">
									<input type="text" name="customer[<?php echo ($kI); ?>][name]"  placeholder="姓名" value="<?php echo ($voData["name"]); ?>" class="input-text">
								</div>
								<div class="formControls col-xs-8 col-sm-2 " >
									<input class="btn btn-danger-outline radius del-highlights" odid="<?php echo ($voData["id"]); ?>" type="button" value="删除">
								</div>
							</div>
							<div class="row cl">
								<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>电话：</label>
								<div class="formControls col-xs-8 col-sm-4">
									<input type="text" name="customer[<?php echo ($kI); ?>][phone]"  placeholder="电话" value="<?php echo ($voData["phone"]); ?>" class="input-text">
								</div>
							</div>
							<div class="row cl" >
								<label class="form-label col-xs-4 col-sm-2">qq：</label>
								<div class="formControls col-xs-8 col-sm-4">
									<textarea name="customer[<?php echo ($kI); ?>][qq]" cols="" rows="" class="textarea"  placeholder="这里是QQ的链接" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" ><?php echo ($voData["qq"]); ?></textarea>
									<p class="textarea-numberbar"><em class="textarea-length">0</em>/1000</p>
								</div>
							</div>
							<div class="line mt-10"></div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
				</div>
				<div class="row cl">
					<div class="formControls col-md-offset-2 col-xs-8 col-sm-2">
						<i class="Hui-iconfont add-one-carousel-igure add-but"  >&#xe61f;</i>
					</div>
				</div>
			</div>

			
             
		
				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
						<!--<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>-->
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
<!-- <script type="text/javascript" src="/Albumsys/Public/admin/lib/laydate/laydate/laydate.js"></script> -->
<!--/_footer /作为公共模版分离出去-->
<!--<script type="text/javascript" src="/Albumsys/Public/admin/lib/webuploader/0.1.5/webuploader.min.js"></script> -->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
 $(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$.Huitab("#tab-system .tabBar span","#tab-system .tabCon","current","click","0");
	/* $("#days").change(addDays);
	
	addDays(); */
	/*var summary = UE.getEditor('summary');
	var pric_include = UE.getEditor('pric_include');
	var no_pric_include = UE.getEditor('no_pric_include');
	var intended_known = UE.getEditor('intended_known');
	var daycont1= UE.getEditor('daycont1');*/

	 

	 /*添加轮播图*/
	 $('.add-one-carousel-igure').on('click',function(){
		 //得到亮点中的id的最大值
		 var last_highli=$('.all-carousel-igure').find('.one-carousel-igure:last').attr('jayValue');
		 if(last_highli){
			 next_highli=parseInt(last_highli)+1;
		 }else{
			 next_highli=1;
		 }
		
		 var li_highlights ='<div class="one-carousel-igure"id="one-carousel-igure-'+next_highli+'"jayValue="'+next_highli+'"><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>姓名：</label><div class="formControls col-xs-8 col-sm-4"><input type="text"name="customer['+next_highli+'][name]"placeholder="姓名"class="input-text"></div><div class="formControls col-xs-8 col-sm-2 "><input class="btn btn-danger-outline radius del-highlights"odid="0"type="button"value="删除"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>电话：</label><div class="formControls col-xs-8 col-sm-4"><input type="text"name="customer['+next_highli+'][phone]"placeholder="电话"value=""class="input-text"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">qq：</label><div class="formControls col-xs-8 col-sm-4"><textarea name="customer['+next_highli+'][qq]"cols=""rows=""class="textarea"placeholder="这里是QQ的链接"datatype="*10-100"dragonfly="true"nullmsg="备注不能为空！"></textarea><p class="textarea-numberbar"><em class="textarea-length">0</em>/1000</p></div></div><div class="line mt-10"></div></div>';
		 $('.all-carousel-igure').append(li_highlights);
		 
	 });

	 /*删除亮点*/
	  $('.all-carousel-igure').on('click','.del-highlights',function(){
		  var odId=$(this).attr('odid');
		  $(this).parents('.one-carousel-igure').remove();
		  if(odId!=0){
			  $.post('ajax_del_custom',{id:odId},
				  function(data){
					  if(data!=1){
						  layer.msg('出现错误！');
					  }
					  
				  });
		  }
			 
		    
		  }); 

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

});


</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
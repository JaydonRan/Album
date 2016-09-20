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
<title>系统设置</title>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 系统基本设置 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo U();?>">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl"><span>基本信息</span></div>
			<div class="tabCon">
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="comp_name" placeholder="网站名称" value="<?php echo ($system["comp_name"]); ?>" class="input-text">
					</div>
				</div>
                <div class="all-carousel-igure">
					<div class="one-carousel-igure" id="one-carousel-igure-1" jayValue="1" >
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站logo：</label>
							<div class="formControls col-xs-8 col-sm-4">
								<input  type="text" placeholder="公司网站logo图片"  value="" class="input-text picture-text">
								<input type="hidden" name="logo" value="<?php echo ($system["logo"]); ?>" class="picture-addr-box">
							</div>
							<div class="formControls col-xs-8 col-sm-2">
								<img src="/Albumsys/<?php echo ($system["logo"]); ?>" style="width: 250px">
							</div>						
						</div>						
					</div>
				</div>
				<div class="row cl" >
					<label class="form-label col-xs-4 col-sm-2">网站关键字：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<textarea name="keyword" cols="" rows="" class="textarea"  placeholder="多个以英文的逗号（,）隔开" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" ><?php echo ($system["keyword"]); ?></textarea>
						<p class="textarea-numberbar"><em class="textarea-length">0</em>/1000</p>
					</div>
				</div>
				<div class="row cl" >
					<label class="form-label col-xs-4 col-sm-2">网站描述：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<textarea name="description" cols="" rows="" class="textarea"  placeholder="网站的描述" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" ><?php echo ($system["description"]); ?></textarea>
						<p class="textarea-numberbar"><em class="textarea-length">0</em>/1000</p>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司电话：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="comp_tel" placeholder="公司电话" value="<?php echo ($system["comp_tel"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司邮箱：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="comp_email" placeholder="公司邮箱" value="<?php echo ($system["comp_email"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司传真：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="comp_fax" placeholder="公司传真" value="<?php echo ($system["comp_fax"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>客服主管：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="charge_phone" placeholder="客服主管电话" value="<?php echo ($system["charge_phone"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>售后电话：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="hasee" placeholder="售后电话" value="<?php echo ($system["hasee"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司地址：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="comp_address" placeholder="公司地址" value="<?php echo ($system["comp_address"]); ?>" class="input-text">
					</div>
				</div>
				
				<div class="all-carousel-igure">
					<div class="one-carousel-igure" id="one-carousel-igure-2" jayValue="2" >
						<div class="row cl">
							<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>二维码：</label>
							<div class="formControls col-xs-8 col-sm-4">
								<input  type="text" placeholder="公司微信二维码"  value="" class="input-text picture-text">
								<input type="hidden" name="wechar_p" value="<?php echo ($system["wechar_p"]); ?>" class="picture-addr-box">
							</div>
							<div class="formControls col-xs-8 col-sm-2">
								<img src="/Albumsys/<?php echo ($system["wechar_p"]); ?>" style="width: 250px">
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>页脚备案信息：</label>
					<div class="formControls col-xs-8 col-sm-4">
						<input type="text" name="record_number" placeholder="页脚备案信息" value="<?php echo ($system["record_number"]); ?>" class="input-text">
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
	/*  $('.add-one-carousel-igure').on('click',function(){
		 //得到亮点中的id的最大值
		 var last_highli=$('.all-carousel-igure').find('.one-carousel-igure:last').attr('jayValue');
		 next_highli=parseInt(last_highli)+1;
		 var li_highlights ='<div class="one-carousel-igure"id="one-carousel-igure-'
		 					+next_highli+'"jayValue="'
		 					+next_highli+'"><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片：</label><div class="formControls col-xs-8 col-sm-4"><input type="text"placeholder="请选择图片"value=""class="input-text picture-text"><input type="hidden"name="carouselFigure['
		 					+next_highli+'][picture_address]"class="picture-addr-box"></div><div class="formControls col-xs-8 col-sm-2"><img src=""style="width: 250px"></div><div class="formControls col-xs-8 col-sm-2 del-highlights"><input class="btn btn-danger-outline radius "type="button"value="删除"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label><div class="formControls col-xs-8 col-sm-4"><input type="text"name="carouselFigure['
		 					+next_highli+'][title]"placeholder="商品名称"value=""class="input-text"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">说明：</label><div class="formControls col-xs-8 col-sm-4"><textarea name="carouselFigure['
		 					+next_highli+'][introduction]"cols=""rows=""class="textarea"placeholder="说点什么...最少输入10个字符"datatype="*10-100"dragonfly="true"nullmsg="备注不能为空！"onKeyUp="textarealength(this,1000)"></textarea><p class="textarea-numberbar"><em class="textarea-length">0</em>/1000</p></div></div><div class="line mt-10"></div></div>';
		 $('.all-carousel-igure').append(li_highlights);
		 
	 }); */

	 /*删除亮点*/
	 $('.all-carousel-igure').on('click','.del-highlights',function(){
		 $(this).parents('.one-carousel-igure').remove();
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
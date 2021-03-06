<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<!--carlist-->
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<link rel="stylesheet" href="/Albumsys/Public/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>租车列表</title>
</head>
<body class="pos-r">

<div >
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 租车管理 <span class="c-gray en">&gt;</span> 租车列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<!--<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 产品名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
		</div>-->
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><!--<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>--> <a class="btn btn-primary radius" onclick="product_add('添加广告','<?php echo U('add_adv');?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加广告</a></span> <span class="r">共有数据：<strong>0</strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<!--<th width="40"><input name="" type="checkbox" value=""></th>-->
						<th width="40">ID</th>
						<th >图片</th>
						<th >名称</th>
						<th >标题</th>
						<th >说明（广告词）</th>
						<th >链接</th>

						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				    <?php if(is_array($advlist)): $i = 0; $__LIST__ = $advlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voAdv): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">

							<td><?php echo ($voAdv["id"]); ?></td>
							<td><img src="/Albumsys/<?php echo ($voAdv["picture"]); ?>" al="" style="width: 200px" /></td>
							<td class="text-l"><?php echo ($voAdv["name"]); ?></td>
							<td class="text-l"><?php echo ($voAdv["title"]); ?></td>
							<td class="text-l"><?php echo ($voAdv["content"]); ?></td>
							<td class="text-l"><?php echo ($voAdv["link"]); ?></td>

							<td class="td-manage">

							   <a style="text-decoration:none" class="ml-5" onClick="product_edit('广告编辑','<?php echo U('save_adv');?>','<?php echo ($voAdv["id"]); ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
							   <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'<?php echo ($voLines["id"]); ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
							</td>
					    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

				</tbody>
			</table>
		</div>
		<div class="bag-page"><?php echo ($page); ?></div>
	</div>
</div>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Albumsys/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<script type="text/javascript">
/*
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
}); */


/*图片-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-查看*/
function product_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-编辑*/
function product_edit(title,url,id){

	var index = layer.open({
		type: 2,
		title: title,
		content: url+"?id="+id,
	});
	layer.full(index);
}
/*图片-删除*/
function product_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.post('lineDel', { uid: id },
				function(data){
					if (data==1){
						$(obj).parents("tr").remove();
						layer.msg('删除成功！');
					}else {
						layer.msg('删除失败！');
					}
				});
	});
}
</script>
</body>
</html>
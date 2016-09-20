<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
	<title>路线列表</title>
</head>
<body class="pos-r">

<div >
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 产品名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="<?php echo U();?>?order_state=1"  class="btn btn-danger radius"> 未付款</a> <a class="btn btn-primary radius" href="<?php echo U();?>?order_state=2"> 已付款</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
				<tr class="text-c">
					<th><input name="" type="checkbox" value=""></th>
					<th width="120px" >缩略图</th>
					<th >订单号</th>
					<th >订单类型</th>
					<th >商品号</th>
					<th >标题</th>
					<th >联系人姓名</th>
					<th >联系人电话</th>
					<th >联系人邮箱</th>
					<th >联系人备注</th>

					<th >出发时间</th>
					<th width="20">状态</th>
					<th width="100">操作</th>
				</tr>
				</thead>
				<tbody>
				<?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voOrder): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">
						<td><input name="" type="checkbox" value="<?php echo ($voOrder["id"]); ?>"></td>

						<td><img  src="/Albumsys/<?php echo ($voOrder["picture_address"]); ?>" alt="" style="width: 50px" /></td>
						<td><?php echo ($voOrder["id"]); ?></td>
						<?php if($voOrder["order_type"] == 1): ?><td>路线订单</td>
						<?php elseif($voOrder["order_type"] == 2): ?>
							<td>租车订单</td>
						<?php else: ?>
							<td>服务订单</td><?php endif; ?>
						<td><?php echo ($voOrder["goods_uniform_number"]); ?></td>

						<td><?php echo ($voOrder["goods_title"]); ?></td>
						<td><?php echo ($voOrder["member_name"]); ?></td>
						<td><?php echo ($voOrder["member_tel"]); ?></td>
						<td><?php echo ($voOrder["member_email"]); ?></td>
						<td><?php echo ($voOrder["member_leaving_message"]); ?></td>
						<td><?php echo ($voOrder["state_time"]); ?></td>
						<td class="td-manage">
							<?php if($voOrder["order_state"] == 1): ?><span class="label label-danger radius">未付款</span><?php endif; ?>
							<?php if($voOrder["order_state"] == 2): ?><span class="label label-success radius">已付款</span><?php endif; ?>
						</td>
						<td class="td-manage">
							<!-- <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','<?php echo U('lineSaveAdd');?>','<?php echo ($voLines["id"]); ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> -->
							<a style="text-decoration:none" class="ml-5" onClick="show_order('查看订单','<?php echo U('order');?>?id=<?php echo ($voOrder["id"]); ?>',800,800)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe665;</i></a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>

				<!--<?php if(is_array($lines)): $i = 0; $__LIST__ = $lines;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voLines): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">
						<td><input name="" type="checkbox" value=""></td>


						<td><?php echo ($voLines["id"]); ?></td>
						<td><img src="/Albumsys/<?php echo ($voLines["thumbnail"]); ?>" alt="" style="width: 200px" /></td>
						<td class="text-l"><?php echo ($voLines["title"]); ?></td>

						<td class="td-manage">

							<a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','<?php echo U('lineSaveAdd');?>','<?php echo ($voLines["id"]); ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a style="text-decoration:none" class="ml-5" onClick="product_del(this,'<?php echo ($voLines["id"]); ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>-->

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
	/*增加-主题*/
	function show_order(title,url,w,h){
		layer_show(title,url,w,h);
	}

</script>
</body>
</html>
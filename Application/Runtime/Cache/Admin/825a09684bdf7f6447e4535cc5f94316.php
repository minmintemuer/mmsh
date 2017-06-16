<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1">
<title>重庆茂名商会后台管理界面</title>
	<script src = "/mmsh/Public/admin/js/jquery-1.11.1.min.js"></script>
	<script src = "/mmsh/Public/admin/js/bootstrap.min.js"></script>
	<script src = "/mmsh/Public/admin/js/chart.min.js"></script>
	<script src = "/mmsh/Public/admin/js/chart-data.js"></script>
	<script src = "/mmsh/Public/admin/js/easypiechart.js"></script>
	<script src = "/mmsh/Public/admin/js/easypiechart-data.js"></script>
	<script src = "/mmsh/Public/admin/js/bootstrap-datepicker.js"></script>
	<script src = "/mmsh/Public/admin/js/admin.js"></script>
<link href = "/mmsh/Public/admin/css/bootstrap.min.css" rel = "stylesheet">
<link href = "/mmsh/Public/admin/css/datepicker3.css" rel = "stylesheet">
<link href = "/mmsh/Public/admin/css/styles.css" rel = "stylesheet">

  <!--[if lt IE 9]>
  <script src = "/mmsh/Public/admin/js/html5shiv.js"></script>
<script src = "/mmsh/Public/admin/js/respond.min.js"></script><![endif]-->

</head>

<body>
	<nav class = "navbar navbar-inverse navbar-fixed-top" role = "navigation">
		<div class = "container-fluid">
			<div class = "navbar-header">
				<button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#sidebar-collapse">
					<span class = "sr-only">Toggle navigation</span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				<a class = "navbar-brand" href = "#"><span>重庆茂名商会</span>ADMIN</a>
				<ul class = "user-menu">
					<li class = "dropdown pull-right">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><span class = "glyphicon glyphicon-user"></span> User <span class = "caret"></span></a>
						<ul class = "dropdown-menu" role = "menu">
							<!--<li><a href = "#"><span class = "glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href = "#"><span class = "glyphicon glyphicon-cog"></span> Settings</a></li>-->
							<li><a href = "<?php echo ($U['logout']); ?>"><span class = "glyphicon glyphicon-log-out"></span> 退出登录</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id = "sidebar-collapse" class = "col-sm-3 col-lg-2 sidebar">
		<!--通过给当前页面标题添加active类来标识当前界面-->
		<ul class = "nav menu">
			<li class = "<?php echo ($nav[1]); ?>"><a href = "<?php echo ($U['index']); ?>"><span class = "glyphicon glyphicon-dashboard"></span>网站概况</a></li>
			<li class = "<?php echo ($nav[2]); ?>"><a href = "<?php echo ($U['gg']); ?>"><span class = "glyphicon glyphicon-bullhorn"></span>公告管理</a></li>
			<li class = "<?php echo ($nav[3]); ?>"><a href = "<?php echo ($U['dt']); ?>"><span class = "glyphicon glyphicon-comment"></span>动态管理</a></li>
			<li class = "<?php echo ($nav[4]); ?>"><a href = "<?php echo ($U['hy']); ?>"><span class = "glyphicon glyphicon-user"></span>会员管理</a></li>
			<li class = "<?php echo ($nav[5]); ?>"><a href = "<?php echo ($U['ly']); ?>"><span class = "glyphicon glyphicon-pencil"></span>留言处理</a></li>
			<li class = "<?php echo ($nav[6]); ?>"><a href = "<?php echo ($U['fl']); ?>"><span class = "glyphicon glyphicon-th-list"></span>分类管理</a></li>
			<li class = "<?php echo ($nav[7]); ?>"><a href = "<?php echo ($U['ym']); ?>"><span class = "glyphicon glyphicon-info-sign"></span>页面设置</a></li>
			<li role = "presentation" class = "divider"></li>
			<li><a href = "<?php echo ($U['logout']); ?>"><span class = "glyphicon glyphicon-user"></span>退出登录</a></li>
		</ul>
		<div class = "attribution"> 技术支持@<a href = "#" title = "焕延科技" target = "_blank">焕延科技</a></div>
	</div><!--/.sidebar-->
	<div class = "col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		 <form action = "<?php echo ($U['content']); ?>" method="post" id="contype">
  <input type = "hidden" name="type" id="type" value="1" style="display: none">
  <input type = "hidden" name="tab" value="<?php echo ($tab); ?>" style="display: none">
</form>
<div class = "row">
  <div class = "col-lg-12 col-md-12 col-xs-12">
    <h1>公告信息</h1><button class="btn btn-primary" onclick="$('#contype').attr('action','<?php echo ($U["content"]); ?>').submit();">+添加公告</button>
  </div>
</div>
<div class = "row text-center">
  <div class = "col-lg-5 col-md-5 col-xs-9"><h4>标题</h4></div>
  <div class = "col-lg-2 col-md-2 col-xs-2"><h4>分类</h4></div>
  <div class = "col-lg-2 col-md-1 col-xs-2"><h4>排序权重</h4></div>
  <div class = "col-lg-2 col-md-4 col-xs-12 text-center">
    <h4>操作</h4>
  </div>
</div>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class = "row rowactive text-center">
  <input type="hidden" value="<?php echo ($val["id"]); ?>" style="display: none" class="listval">
  <div class = "col-lg-5 col-md-5 col-xs-9"><h4><?php echo ($val["name"]); ?></h4></div>
  <div class = "col-lg-2 col-md-2 col-xs-2"><h4><?php echo ($val["type"]); ?></h4></div>
  <div class = "col-lg-2 col-md-1 col-xs-2"><h4><?php echo ($val["seq"]); ?></h4></div>
  <div class = "col-lg-2 col-md-4 col-xs-12 text-center">
    <button class = "btn btn-info" onclick="edit(this)">编辑</button>&nbsp;
    <button class = "btn btn-danger" onclick="del(this);">删除</button>
  </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<div class="row text-center"><?php echo ($page); ?></div>
<script>
  function edit(oThis) {
      cId=$(oThis).parents(".rowactive").find(".listval").val();
      $('#contype').find("#type").val(cId);
   $('#contype').attr('action','<?php echo ($U["editgcont"]); ?>').submit();
  }
  function del(oThis) {
      cId=$(oThis).parents(".rowactive").find(".listval").val();
      $('#contype').find("#type").val(cId);
      $('#contype').attr('action','<?php echo ($U["dc"]); ?>').submit();
      
  }
</script>
	</div>

	<script>
		$('#calendar').datepicker({});

    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
	</script>
</body>

</html>
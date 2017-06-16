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
		 
		<div class = "row">
			<ol class = "breadcrumb">
				<li><a href = "#"><span class = "glyphicon glyphicon-home"></span></a></li>
				<li class = "active">网站概况</li>
			</ol>
		</div><!--/.row-->

		<div class = "row">
			<div class = "col-xs-12 col-md-6 col-lg-3">
				<div class = "panel panel-blue panel-widget ">
					<div class = "row no-padding">
						<div class = "col-sm-3 col-lg-5 widget-left">
							<em class = "glyphicon glyphicon-comment glyphicon-l"></em>
						</div>
						<div class = "col-sm-9 col-lg-7 widget-right">
							<div class = "large"><?php echo ($news); ?></div>
							<div class = "text-muted">动态</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "col-xs-12 col-md-6 col-lg-3">
				<div class = "panel panel-orange panel-widget">
					<div class = "row no-padding">
						<div class = "col-sm-3 col-lg-5 widget-left">
							<em class = "glyphicon glyphicon-bullhorn glyphicon-l"></em>
						</div>
						<div class = "col-sm-9 col-lg-7 widget-right">
							<div class = "large"><?php echo ($gonggao); ?></div>
							<div class = "text-muted">公告</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "col-xs-12 col-md-6 col-lg-3">
				<div class = "panel panel-teal panel-widget">
					<div class = "row no-padding">
						<div class = "col-sm-3 col-lg-5 widget-left">
							<em class = "glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class = "col-sm-9 col-lg-7 widget-right">
							<div class = "large"><?php echo ($insider); ?></div>
							<div class = "text-muted">会员</div>
						</div>
					</div>
				</div>
			</div>
			<div class = "col-xs-12 col-md-6 col-lg-3">
				<div class = "panel panel-red panel-widget">
					<div class = "row no-padding">
						<div class = "col-sm-3 col-lg-5 widget-left">
							<em class = "glyphicon glyphicon-pencil glyphicon-l"></em>
						</div>
						<div class = "col-sm-9 col-lg-7 widget-right">
							<div class = "large"><?php echo ($message); ?></div>
							<div class = "text-muted">留言</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

	
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
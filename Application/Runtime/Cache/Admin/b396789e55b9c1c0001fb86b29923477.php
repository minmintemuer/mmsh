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
	<div class = "col-lg-11 ">
	<h1>网站信息:</h1>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 ">
	<h3>联系方式信息:</h3>
	</div>
</div>
<form id = "infofrom" action = "<?php echo ($U['is']); ?>" method = "post">
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>地址:</h4><input value = "<?php echo ($data->address); ?>" name = "address" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>电话:</h4><input value = "<?php echo ($data->tel); ?>" name = "tel" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>邮箱:</h4><input value = "<?php echo ($data->email); ?>" name = "email" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>传真:</h4><input value = "<?php echo ($data->fax); ?>" name = "fax" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 ">
	<h3>SEO信息:</h3>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>关键字:</h4><input value = "<?php echo ($seo->keywords); ?>" name = "keywords" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>作者:</h4><input value = "<?php echo ($seo->author); ?>" name = "author" type = "text" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>简介:</h4><input value = "<?php echo ($seo->discription); ?>" name = "discription" type = "text" class = "form-control"></label>
	</div>
</div>

<div class = "row">
	<div class = " col-lg-11 col-lg-offset-1">
		<button onclick = "$('#infofrom').submit()" class = "btn-lg btn-primary">修改</button>
	</div>
</div>
</form>
<div class = "row">
	<div class = "col-lg-11 ">
	<h1>修改密码:</h1>
	</div>
</div>
<form action = "<?php echo ($U['rp']); ?>" method="post" id="rpform">
<div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>原密码:</h4><input value = "" name = "pwd" type = "password" class = "form-control"></label>
	</div>
</div><div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>密码:</h4><input value = "" name = "repwd1" type = "password" class = "form-control"></label>
	</div>
</div><div class = "row">
	<div class = "col-lg-11 col-lg-offset-1">
		<label><h4>确认密码</h4><input value = "" name = "repwd2" type = "password" class = "form-control"></label>
	</div>
</div>
<div class = "row">
	<div class = " col-lg-11 col-lg-offset-1">
		<button onclick = "$('#rpform').submit()" class = "btn-lg btn-primary">确认</button>
	</div>
</div>
</form>
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
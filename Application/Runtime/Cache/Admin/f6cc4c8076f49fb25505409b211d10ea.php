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
			<li class = "<?php echo ($nav[7]); ?>"><a href = "<?php echo ($U['ld']); ?>"><span class = "glyphicon glyphicon-info-sign"></span>领导管理</a></li>
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
		 <link href = "/mmsh/Public/umeditor/themes/default/css/umeditor.css" type = "text/css" rel = "stylesheet">
  <script type = "text/javascript" src = "/mmsh/Public/umeditor/third-party/template.min.js"></script>
  <script type = "text/javascript" charset = "utf-8" src = "/mmsh/Public/umeditor/umeditor.config.min.js"></script>
  <script type = "text/javascript" charset = "utf-8" src = "/mmsh/Public/umeditor/umeditor.min.js"></script>
  <script type = "text/javascript" src = "/mmsh/Public/umeditor/lang/zh-cn/zh-cn.min.js"></script>
<br>
<br>
<form action = "<?php echo ($U[cs]); ?>" method = "post">
  <input type = "hidden" name="url" value="<?php echo ($turl); ?>" style="display: none">
  <input type = "hidden" name="tab" value="<?php echo ($tab); ?>" style="display: none">
<div class = "row">
  <div class = "col-xs-12 col-md-12 col-lg-12">
<h1><?php echo ($tname); ?></h1>
  </div>
  <div class = "col-xs-12 col-md-12 col-lg-12">
<label><h4>文章标题:</h4><input type = "text" id = "aname" class = "form-control"  name = "name"></label>
    <br>
<label><h4>文章分类:</h4>
  <select name = "type" class = "form-control">
    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value = "<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</label>&nbsp;
   <a href = "<?php echo ($U['fl']); ?>" class="class = "btn btn-info btn-sm"">+添加分类</a>
    </div>
  <div class = "col-xs-12 col-md-12 col-lg-12">
    <label><h4>排序权重:</h4><input type = "text" id = "seq" name = "seq" value = "1" class = "form-control"></label>
  </div>
  <div class = "col-xs-12 col-md-12 col-lg-12">
    <button class = "btn btn-primary btn-lg" onclick = "editsub(this)">发布</button>
  </div>
</div>
<br>
<div class = "row">
  <div class = "col-xs-12 col-md-12 col-lg-12">
<script type = "text/plain" id = "myEditor" style = "width:100%;">
        <?php echo ($data['content']); ?>
    
</script>
    
<script type = "text/javascript">
    <!--修改配置文件-->
    window.UMEDITOR_CONFIG.imageUrl = "<?php echo U('Admin/caozuo/upload','','');?>";//图片上传地址
    window.UMEDITOR_CONFIG.imagePath = "<?php echo dirname($_SERVER['REQUEST_SCHEME'].':\/\/'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['SCRIPT_NAME']);?>";//图片加载url
    //实例化编辑器
    var um = UM.getEditor('myEditor');
    um.addListener('blur', function () {
        $('#focush2').html('编辑器失去焦点了')
    });
    um.addListener('focus', function () {
        $('#focush2').html('')
    });
    /**
     * 使用UM.getEditor('myEditor').getContent()获取富文本编辑工具的内容
     */
    function editsub(oThis) {
        $(oThis).submit();
        cCont = UM.getEditor('myEditor').getContent();
        cId = $('#articleid').val();
        cSeq = $('#seq').val();
        cName = $('#aname').val();


    }
</script>
    </div>
</div></form>
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
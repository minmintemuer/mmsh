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
		 <script>
   var cSval;
   function edit(th) {
       oTh = $(th);
       oIpt = oTh.parents(".mytypelist").find(".mytypelistval");
       if (oTh.html() == "修改") {
           oTh.html("保存");
           oIpt.removeAttr("readonly");
           cSval = oIpt.val();

       } else {
           oTh.html("修改");
           oIpt.attr("readonly", "readonly");
           cId = oIpt.attr('id');
           cVal = oIpt.val();

           if (cVal != "") {
               if (cSval != cVal) {
                   $.ajax({
                       url: "<?php echo ($U['fl_edit']); ?>", type: "post", data: {id: cId, name: cVal}, success: function (data) {
                           if (data.code == 0) {
                               alert("修改失败");
                           }
                           window.location.href = data.url;
                       }
                   })
               }
           } else {
               alert("分类名不能为空");
               oTh.html("保存");
               oIpt.removeAttr("readonly");
           }
       }
   }
   function add(th) {
       oTh = $(th);
       cVal = oTh.parents(".mytypelist").find(".mytypelistval").val();
       cType = oTh.parents(".mytypelist").find(".mytypelistval").attr("id");
       if (cVal == "") {
           alert("请输入内容");
       }
       else {
           $.ajax({
               url: "<?php echo ($U['fl_add']); ?>", type: "post", data: {name: cVal, type: cType}, success: function (data) {
                   if (data.code == 0) {
                       alert("添加失败");
                   }
                   window.location.href = data.url;
               }
           });
       }
   }
   function del(th) {
       oTh = $(th);
       oIpt = oTh.parents(".mytypelist").find(".mytypelistval");
       cId = oIpt.attr('id');

       $.ajax({
           url: "<?php echo ($U['fl_del']); ?>", type: "post", data: {id: cId}, success: function (data) {
               if (data.code == 0) {
                   alert("删除失败");
               }
               window.location.href = data.url;
           }
       })
   }
</script>
<!--分类名字-->
<div class = "row">
    <div class = "col-lg-12 col-md-12  col-xs-12">
        <h1>&nbsp;&nbsp;&nbsp;公告分类</h1></div>
</div>
<!--分类项-->
<?php if(is_array($type[1])): $i = 0; $__LIST__ = $type[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class = "row mytypelist" style = "margin-bottom: 5px;">
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8 ">
        <input class = "form-control mytypelistval" type = "text" value = "<?php echo ($val["name"]); ?>" id = "<?php echo ($val["id"]); ?>" readonly>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2">
        <button class = "btn btn-info" onclick = "edit(this);">修改</button>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2 text-center">
        <button class = "btn btn-danger" onclick = "del(this)">删除</button>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--添加项-->
<div class = "row mytypelist">
    
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8"><input class = "form-control mytypelistval" type = "text" id = "1"> </div>
    <div class = "col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-xs-2 col-xs-offset-2 text-center "><button class = "btn btn-primary" onclick = "add(this)">+添加</button>
    </div>
</div>
<!--分类名字-->
<div class = "row">
    <div class = "col-lg-12 col-md-12  col-xs-12">
        <h1>&nbsp;&nbsp;&nbsp;动态分类</h1></div>
</div>
<!--分类项-->
<?php if(is_array($type[2])): $i = 0; $__LIST__ = $type[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class = "row mytypelist" style = "margin-bottom: 5px;">
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8 ">
        <input class = "form-control mytypelistval" type = "text" value = "<?php echo ($val["name"]); ?>" id = "<?php echo ($val["id"]); ?>" readonly>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2">
        <button class = "btn btn-info" onclick = "edit(this);">修改</button>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2 text-center">
        <button class = "btn btn-danger" onclick = "del(this)">删除</button>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--添加项-->
<div class = "row mytypelist">
    
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8"><input class = "form-control mytypelistval" type = "text" id = "2"> </div>
    <div class = "col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-xs-2 col-xs-offset-2 text-center "><button class = "btn btn-primary" onclick = "add(this)">+添加</button>
    </div>
</div>
<!--分类名字-->
<div class = "row">
    <div class = "col-lg-12 col-md-12  col-xs-12">
        <h1>&nbsp;&nbsp;&nbsp;会员分类</h1></div>
</div>
<!--分类项-->
<?php if(is_array($type[3])): $i = 0; $__LIST__ = $type[3];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class = "row mytypelist" style = "margin-bottom: 5px;">
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8 ">
        <input class = "form-control mytypelistval" type = "text" value = "<?php echo ($val["name"]); ?>" id = "<?php echo ($val["id"]); ?>" readonly>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2">
        <button class = "btn btn-info" onclick = "edit(this);">修改</button>
    </div>
    <div class = "col-lg-1 col-md-1 col-xs-2 text-center">
        <button class = "btn btn-danger" onclick = "del(this)">删除</button>
    </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--添加项-->
<div class = "row mytypelist">
    
    <div class = "col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-xs-8"><input class = "form-control mytypelistval" type = "text" id = "3"> </div>
    <div class = "col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-xs-2 col-xs-offset-2 text-center "><button class = "btn btn-primary" onclick = "add(this)">+添加</button>
    </div>
</div>
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
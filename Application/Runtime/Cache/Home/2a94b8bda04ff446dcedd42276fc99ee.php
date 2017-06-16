<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <meta name = "keywords" content = "<?php echo ($seo->keywords); ?>">
    <meta name = "author" content = "<?php echo ($seo->author); ?>">
    <meta name = "discription" content = "<?php echo ($seo->discription); ?>">
    <title>重庆茂名商会</title>
    <link rel = "stylesheet" type = "text/css" href = "/mmsh/Public/lib/bootstrap/css/bootstrap.css" media = 'all'>
    <script type = 'text/javascript' src = '/mmsh/Public/lib/bootstrap/js/jquery-2.1.1.min.js'></script>
    <script type = "text/javascript" src = "/mmsh/Public/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src= "/mmsh/Public/js/jquery.js"></script>

    <script type="text/javascript" src= "/mmsh/Public/lib/bootstrap/js/bootstrap.min.js"></script>



    <link rel = "stylesheet" href = "/mmsh/Public/css/app.css" type = "text/css">
    <link rel="stylesheet" href="/mmsh/Public/font-awesome-4.7.0/css/font-awesome.min.css">


    <!--原style已被删除-->
    <style>
        .no-padding{
            padding:0;
        }
    </style>

</head>
<body>
<!--顶部logo图片开始-->
<div class = "section" style = "margin:20px;">
    <div class = "container-fluid">
        <div class = "row">
            <div class = "enwidth">
                <div class = "col-md-4 col-lg-4 col-xs-12">
                    <img src = "/mmsh/Public/images/top_banner.jpg" style="width:100%;height:100%;"/>
                </div>
                <div class = "col-md-4 col-lg-4">
                </div>
            </div>
        </div>
    </div>
</div>
<!--顶部logo图片结束-->
<!--导航开始-->
<div class="navbar navbar-default navbar-static-top" style="background-color:#d60011;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right text-center">
                <li>
                    <a  href="<?php echo ($U['Index_index']); ?>.html">首页</a>
                </li>
                <li>
                    <a href="<?php echo ($U['Index_info']); ?>.html">商会介绍</a>
                </li>
                <li>
                    <a href="<?php echo ($U['Index_insider']); ?>.html">商会会员</a>
                </li>
                <li>
                    <a href="<?php echo ($U['Index_dongtai']); ?>.html">商会动态</a>
                </li>
                <li>
                <a href="<?php echo ($U['Index_gonggao']); ?>.html">商会公告</a>
            </li>
                <li>
                    <a href="<?php echo ($U['Index_contact']); ?>.html">联系方式</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--这是首页导航end-->
<!--banner模块开始-->
<div class="section">
    <div class="container-fluid">
        <div class= "row">
            <div id="fullcarousel-example" data-interval="2000" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/mmsh/Public/images/11.jpg">
                        <div class="carousel-caption">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/mmsh/Public/images/11.jpg">
                        <div class="carousel-caption">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/mmsh/Public/images/11.jpg">
                        <div class="carousel-caption">
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev">
                    <i class="icon-prev fa fa-angle-left"></i>
                </a>
                <i class="icon-next fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--这是首页的banner end-->
<div class="section">
    <div class="container-fluid">
        <div class = "row">
            <div>
                <img src = "/mmsh/Public/images/banners1.jpg" class="img-responsive" width="100%"/>
            </div>
        </div>
    </div>
</div>
<!--这是专题图片结尾-->
<div class="section">
    <div class="container">
        <div class = "row">
            <div class = "col-md-4 col-lg-4 col-xs-12">
                <div class = "page-header">
                    <h4>新闻
                        <span style ="color:#d60011;">NEWS</span>
                    </h4>
                </div>
                <div id = "carousel" class = "carousel slide" data-ride = "carousel" data-interval = "1000">
                    <div class = "carousel-inner" role = "listbox">
                        <div class = "item active img2">
                            <a href = "images/0.jpg">
                                <img src = "/mmsh/Public/images/0.jpg" >
                            </a>
                            <div class = "carousel-caption"><h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class = "item img2"><a href = "images/1.jpg">
                            <img src = "/mmsh/Public/images/1.jpg" style="width:100%;height:200%;"></a>
                            <div class = "carousel-caption">
                                <h3></h3>
                                <p> </p>
                            </div>
                        </div>
                        <div class = "item img2"><a href = "images/2.jpg">
                            <img src = "/mmsh/Public/images/2.jpg" style="width:100%;height:200%;"></a>
                            <div class = "carousel-caption"><h3></h3>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-md-4 col-lg-4 col-xs-12">
                <div class = "newsBoxRight">
                    <div class = "indexTitle">
                        <h4>
                            <strong class="pull-left">
                                <i class="fa fa-shopping-bag" aria-hidden="true" style="color:red;"></i>&nbsp;商会简介
                            </strong>
                        </h4>
                        <span class="pull-right cl">
                            <a href="info.html" style="text-decoration:none;color:orange;">
                                <strong>More&nbsp;</strong>
                            </a>
                        </span>
                    </div>
                    <div class = "slideNotice">
                        <div class = "bd">
                            <ul class = "indexNews">
                                <p style = "line-height:37px;">
                关于联合开展2016年度我省上规模民营企业调研广东省商务厅关于组团参加墨西哥、古巴、美国关于征集《广东省工商业联合会年鉴（2016年）转发全国工商联办公厅关于开展2017年引导民营转发全国工商联办公厅关于组织开展第七次民营转发全国工商联办公厅关于组织开展第.....
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-md-4 col-lg-4 col-xs-12">
                <div class = "newsBoxRight">
                    <div class = "indexTitle">
                        <h4>
                            <strong>
                                <i class="fa fa-shopping-bag" aria-hidden="true" style="color:red;"></i> 商会动态
                            </strong>
                        </h4>
                    </div>
                    <div class = "slideNotice">
                        <div class = "bd">
                            <ul class = "indexNews" style = "margin-bottom:0px;">
                                <?php if(is_array($dongtai)): $i = 0; $__LIST__ = $dongtai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dongtai): $mod = ($i % 2 );++$i;?><li>
                                        <b><?php echo (substr($dongtai["date"],5,5)); ?></b><a href = "<?php echo ($U['Index_dongtaiX']); ?>/id/<?php echo ($dongtai["id"]); ?>.html"><?php echo ($dongtai["name"]); ?></a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--这里是新闻轮播图片-->
<div class="section">
    <div class="container">
        <div class="row">
            <div class = "col-md-4 no-padding">
                <img src = "/mmsh/Public/images/21.jpg" style="width: 100%;">
            </div>
            <div class = "col-md-4 no-padding">
                <img src = "/mmsh/Public/images/22.jpg" style="width: 100%;">
            </div>
            <div class = "col-md-4 no-padding">
                <img src = "/mmsh/Public/images/23.jpg" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class = "col-md-3 no-padding hidden-xs">
                <img src = "/mmsh/Public/images/20170112110448_843.jpg" style="width: 100%;" width="100%"/>
            </div>
            <div class = "col-md-3  no-padding  hidden-xs">
                <img src = "/mmsh/Public/images/20170112110448_843.jpg" style="width: 100%;"/>
            </div>
            <div class = "col-md-3  no-padding  hidden-xs">
                <img src = "/mmsh/Public/images/20170112110448_843.jpg" style="width: 100%;"/>
            </div>
            <div class = "col-md-3  no-padding  hidden-xs">
                <img src = "/mmsh/Public/images/20170112110448_843.jpg" style="width: 100%;"/>
            </div>
        </div>
    </div>
</div>
<!--这是本页第三个模块的内容，里面是两行装饰图片，放在了一个row类 的容器中-->
<div class="section">
    <div class="container">
        <div class="row">
            <div class = "col-md-4 col-xs-12 col-lg-4">
                <img src = "/mmsh/Public/images/erweima.jpg" style = "width:100%;height:260px;margin-top:50px;"/>
            </div>
            <div class = "col-md-4 col-md-4 col-xs-12">
                <div class = "newsBoxRight">
                    <div class = "indexTitle">
                        <h4>
                            <strong>
                                <i class="fa fa-file-text-o" aria-hidden="true" style="color:red;"></i>&nbsp;商会公告
                            </strong>
                        </h4>
                    </div>
                    <div class = "slideNotice">
                        <div class = "bd">
                            <ul class = "indexNews">
                                <?php if(is_array($gonggao)): $i = 0; $__LIST__ = $gonggao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gonggao): $mod = ($i % 2 );++$i;?><li>
                                        <b><?php echo (substr($gonggao["date"],5,5)); ?></b><a href = "<?php echo ($U['Index_content']); ?>/id/<?php echo ($gonggao["id"]); ?>.html"><?php echo ($gonggao["name"]); ?></a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-md-4 col-lg-4 col-xs-12">
                <div class = "newsBoxRight">
                    <div class = "indexTitle">
                        <h4>
                            <strong><i class="fa fa-user-circle" aria-hidden="true" style="color:red;"></i>&nbsp;商会会员</strong>
                        </h4>
                    </div>
                    <div class = "slideNotice">
                        <div class = "bd">
                            <ul class = "indexNews">
                                <?php if(is_array($huiyuan)): $i = 0; $__LIST__ = $huiyuan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$huiyuan): $mod = ($i % 2 );++$i;?><li>
                                        <b><?php echo (substr($huiyuan["date"],5,5)); ?></b><a href = "<?php echo ($U['Index_insider_cont']); ?>/id/<?php echo ($huiyuan["id"]); ?>.html"><?php echo ($huiyuan["name"]); ?></a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <script type = "text/javascript">jQuery(".slideNotice").slide();</script>
                </div>
            </div>
        </div>
    </div>
</div>
<!--让内容，和底部footer空出一点距离-->
<div style="height:15px; width:100%;"></div>

<div class="section" style="background-color:#5a5a5a; ">
    <div class="container">
        <div class = "row">
            <div class = "col-md-6 col-lg-6 col-xs-12">
                <div class = "copyright">
                    <h4>重庆李子坝餐饮有限公司</h4>
                    <p>地址：重庆市渝中区李子坝正街66号附4号(李子坝公园加班狗办公大楼) &nbsp;&nbsp;邮箱：luyin@liziba.com</p>
                    <p>COPYRIGHT@2016 重庆李子坝餐饮有限公司 all rights reserved. 渝ICP备14001415号-1</p>
                </div>
            </div>
            <div class = "col-md-6 col-lg-6 col-xs-12">
                <figure class = "qrcode-wrap">
                    <img src = "/mmsh/Public/images/qrcode.jpg" alt = "">
                    <p>李子坝梁山鸡微信公众号</p>
                </figure>
                <figure class = "qrcode-wrap">
                    <img src = "/mmsh/Public/images/qrcode.jpg" alt = "">
                    <p>招商加盟微信公众号</p>
                </figure>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("ul li").eq(<?php echo ($num); ?>).css({"background-color":"#ffcc00","border-radius":"10px 10px 0 0"});
        $("ul li").eq(<?php echo ($num); ?>).children().css({"color":"#333"});
        $("ul").mouseover(function(){
            $("ul").children().css({"background-color":"","border-radius":""});
            $("ul").children().children().css({"color":""});
        });
        $("ul").mouseleave(function(){
            $("ul li").eq(<?php echo ($num); ?>).css({"background-color":"#ffcc00","border-radius":"10px 10px 0 0"});
            $("ul li").eq(<?php echo ($num); ?>).children().css({"color":"#333"});
        });
    });
</script>
</body>
</html>
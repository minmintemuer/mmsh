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
<div class="section">
    <div class="container-fluid">
        <div class = "row">
            <div class = "banner">
                <div class="bigImg"
                     style="background-image:url(http://www.gdgcc.gov.cn/templates/default/images/bigImg1.jpg);">&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section"  style="background-color:#e6e6fa;">
    <div class="container">
        <div class="col-md-3 padding-none Mp">
            <div class="sideMenu">
                <div class="sideTit">
                    <a style="text-decoration:none;"href="<?php echo ($U['Index_dongtai']); ?>.html">
                        <h3> <i class="fa fa-file-text-o" aria-hidden="true" style="color:#993300;"></i>
                            &nbsp;商会公告分类
                        </h3>
                        <p style="margin-left:23px;">notice</p>
                    </a>
                </div>
                <ul class="sideMenuNav hidden-xs">
                    <?php if(is_array($leibie)): $i = 0; $__LIST__ = $leibie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($data["id"] == $leiming['typeid']): ?><li class="21 on">
                                <?php else: ?><li class="21"><?php endif; ?>
                        <i class="ibg">&nbsp;</i>
                        <a  href="<?php echo ($U['Index_gonggao']); ?>/id/<?php echo ($data["id"]); ?>.html"><?php echo ($data["name"]); ?></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="sideContact hidden-xs">
                <div class="sideContactTit">
                    <a style="text-decoration:none;">
                        <i style="color:#930000;" class="fa fa-comment" aria-hidden="true"></i>
                        联系我们
                    </a>
                </div>
                <div class="sideContactBox">
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-address-book" aria-hidden="true"></i><?php echo ($info->address); ?></li>
                        <li><i class="fa-li fa fa-phone" aria-hidden="true"></i><?php echo ($info->tel); ?></li>
                        <li><i class="fa-li fa fa-envelope" aria-hidden="true"></i><?php echo ($info->email); ?></li>
                        <li><i class="fa-li fa fa-fax" aria-hidden="true"></i><?php echo ($info->fax); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 Mp" style="background-color:#e6e6fa;height:auto;">
            <div class="rightBox Ml">
                <div class="path">
                    <div class="insider" style="margin-left:-40px;">
                        <strong><?php echo ($leiming["name"]); ?></strong>
                    </div>
                    <div class="pathdiv" style="margin-top:20px;">
                        <a href="<?php echo ($U['Index_index']); ?>.html" style="text-decoration: none;">
                            首页
                        </a>
                        <span>&gt;</span>
                        <a href="<?php echo ($U['Index_gonggao']); ?>.html">商会公告</a>
                        <span>&gt;</span>
                        <span class="on"><?php echo ($leiming["name"]); ?></span>
                    </div>
                </div>
                <div class="downLoadTit">
                    <h2><?php echo ($content["name"]); ?></h2>
                    <div class="source">
                        时间：<?php echo ($content["date"]); ?>
                    </div>
                </div>
                <div class="content fixed">
                    <?php echo ($content["content"]); ?>
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
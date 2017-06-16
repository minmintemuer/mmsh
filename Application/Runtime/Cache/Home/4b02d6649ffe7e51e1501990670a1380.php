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
<!--中间导航菜单-->
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
<!--中间装饰图片-->
<div class="section" style="background-color:#e6e6fa;">
    <div class="container">
        <div class="row Mp">
            <div class="col-md-3 padding-none">
                <div class="sideMenu">
                    <!--带箭头的栏目块，开始-->
                    <div class = "sideTit" style="background-color:#d60011;">
                        <a href = "<?php echo ($U['Index_info']); ?>.html" style="display:inline-block;text-decoration:none;">
                            <h3><i class="fa fa-shopping-bag" aria-hidden="true" style="color:#930000;"></i>
                                &nbsp;
                                商会介绍
                            </h3>
                            <p style="margin-left:20px;">introduces</p>
                        </a>
                        <style>
                            @media (max-width: 768px){
                                .c2{
                                    display:inline-block !important;
                                }
                            }
                            @media (min-width: 769px){
                                #navbar-ex-collapse2{
                                    display:none !important;
                                }
                            }
                        </style>
                        <!--按钮，默认隐藏，用来控制下拉菜单的显示；小屏幕显示-->
                        <div class="navbar navbar-default c2" style="background-color:#d60011; border:none; display:block !important; width:100px !important; float:right;padding-top:30px;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse2" style=" background-image:url(/mmsh/Public/images/downArrow.png); width:30px; height:30px; border:none; background-repeat:no-repeat !important;	background-size:100% 100% !important;" >
                            </button>
                        </div>
                <!--下拉菜单-->
                        <div class="collapse navbar-collapse" id="navbar-ex-collapse2" >
                            <ul class="nav navbar-nav navbar-right text-center">
                                <li>
                                    <a href="<?php echo ($U['Index_info']); ?>.html">商会详细介绍</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_info_lingdao']); ?>.html">领导人介绍</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_info_shjg']); ?>.html">商会结构</a>
                                </li>
                                <li>
                                    <a href="#">入会程序</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_zhangcheng']); ?>.html">商会章程</a>
                                </li>
                            </ul>
                        </div>
                    </div>
<!--带箭头的栏目块，结束-->
                    <ul class="sideMenuNav hidden-xs">
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info']); ?>.html">商会详细介绍</a></li>
                        <li class = "on hidden-xs"><a href = "<?php echo ($U['Index_info_lingdao']); ?>.html">领导人介绍</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info_shjg']); ?>.html">商会结构</a></li>
                        <li class = "hidden-xs"><a href = "#">入会程序</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_zhangcheng']); ?>.html">商会章程</a></li>
                    </ul>
                </div>
                <div class="sideContact hidden-xs" style="background-image:url(/mmsh/Public/images/contactBg.jpg);">
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
            <div class="col-md-9" style="background-color:#e6e6fa;height:auto;">
                <div class="Ml">
                    <div class="path">
                        <div class="lingdao">
                            <strong>商会详细介绍</strong>
                        </div>
                        <div class="pathdiv" style="margin-top:20px;">
                            <a href = "<?php echo ($U['Index_index']); ?>.html" style = "text-decoration: none;">
                                首页
                            </a>
                            <span>&gt;</span>
                            <a href = "<?php echo ($U['Index_info']); ?>.html">
                                商会介绍
                            </a>
                            <span>&gt;</span>
                            <a href = "" class = "on">
                                领导人介绍
                            </a>

                        </div>
                    </div>
                    <ul class="organize">
                        <li class="fixed">
                            <a href="javascript:;">
                                <div class="photo"><img src="/mmsh/Public/images/dao.jpg" alt="" title="" /></div>
                                <div class="organzineText">
                                    <h3>刘绍喜 省工商联副主席简介：</h3>
                                    <div class="orInfo">男，汉族，1963年12月生，汕头澄海人，中共党员，研究生学历，助理经济师，宜华企业（集团）有限公司董事长、广东省宜华木业股份有限公司董事长兼总经理。广东省人大代表。</div>
                                </div>
                            </a>
                        </li>
                        <li class="fixed">
                            <a href="javascript:;">
                                <div class="photo"><img src="/mmsh/Public/images/dao.jpg" alt="" title="" /></div>
                                <div class="organzineText">
                                    <h3>许智明 省工商联副主席简介：</h3>
                                    <div class="orInfo">男，汉族，1964年3月生，广东高州人，大专学历，凯富石油集团有限公司董事局主席、香港《镜报》董事长。全国政协委员、全国工商联常委。</div>
                                </div>
                            </a>
                        </li>
                        <li class="fixed">
                            <a href="javascript:;">
                                <div class="photo"><img src="/mmsh/Public/images/dao.jpg" alt="" title="" /></div>
                                <div class="organzineText">
                                    <h3>岑润洪 省工商联副主席简介：</h3>
                                    <div class="orInfo">男，汉族，1957年4月生，广东恩平人，无党派人士，高中学历，广东恒威集团有限公司董事长兼总经理。</div>
                                </div>
                            </a>
                        </li>
                        <li class="fixed">
                            <a href="javascript:;">
                                <div class="photo"><img src="/mmsh/Public/upfile/2016/05/11/20160511160850_858.jpg" alt="" title="" /></div>
                                <div class="organzineText">
                                    <h3>苏志刚 省工商联副主席简介：</h3>
                                    <div class="orInfo">男，汉族，1958年6月生，广东番禺人，无党派人士，广州长隆集团有限公司董事长。全国工商联副主席。</div>
                                </div>
                            </a>
                        </li>
                        <li class="fixed">
                            <a href="javascript:;">
                                <div class="photo"><img src="/mmsh/Public/upfile/2016/05/11/20160511160719_405.jpg" alt="" title="" /></div>
                                <div class="organzineText">
                                    <h3>陈志列 省工商联副主席简介：</h3>
                                    <div class="orInfo">男，汉族，1963年1月生，江苏无锡人，无党派人士，研究生学历，高级工程师，研祥集团董事局主席兼总裁、深圳研祥智能科技股份有限公司董事长。</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="paged">
                        <span class="current disabled">上一页</span><span class="current disabled">1</span>
                        <a title="2" href="">2</a>
                        <a class="p1"
                           title="下一页" href="">下一页</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--让内容，和底部footer空出一点距离-->
<div style="height:15px; width:100%;"></div>
<script src="/mmsh/Public/lib/bootstrap/js/index.js"></script>
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
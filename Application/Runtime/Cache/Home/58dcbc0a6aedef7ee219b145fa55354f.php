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
<!--中间图片部分-->
<div class="section">
    <div class="container-fluid">
        <div class = "row">
            <div class = "banner">
                <div class="bigImg" style="background-image:url(http://www.gdgcc.gov.cn/templates/default/images/bigImg1.jpg);">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
<div class="section" style="background-color:#e6e6fa;">
    <div class="container">
        <div class="row Mp">
            <div class = "col-md-3 padding-none">
                <div class = "sideMenu">
                    <!--带箭头的栏目块，开始-->
                    <div class = "sideTit" style="background-color:#d60011;">
                        <a href = "<?php echo ($U['Index_info']); ?>" style="display:inline-block;text-decoration:none;">
                            <h3>
                                <i class="fa fa-shopping-bag" aria-hidden="true" style="color:#930000;"></i>
                                &nbsp;商会介绍
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
                        <div class="navbar navbar-default c2" style="background-color:#d60011; border:none; display:block !important;width:100px !important;float:right;padding-top:30px;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse2" style=" background-image:url(/mmsh/Public/images/downArrow.png);width:30px; height:30px; border:none; background-repeat:no-repeat !important;background-size:100% 100% !important;" ></button>
                        </div>
                        <!--下拉菜单-->
                        <div class="collapse navbar-collapse" id="navbar-ex-collapse2" >
                            <ul class="nav navbar-nav navbar-right text-center">
                                <li>
                                    <a href="<?php echo ($U['Index_info']); ?>">商会详细介绍</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_info_lingdao']); ?>">领导人介绍</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_info_shjg']); ?>">商会结构</a>
                                </li>
                                <li>
                                    <a href="#">入会程序</a>
                                </li>
                                <li>
                                    <a href="<?php echo ($U['Index_zhangcheng']); ?>">商会章程</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--带箭头的栏目块，结束-->
                    <ul class = "sideMenuNav hidden-xs">
                        <li class = "on hidden-xs"><a href = "<?php echo ($U['Index_info']); ?>">商会详细介绍</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info_lingdao']); ?>">领导人介绍</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info_shjg']); ?>">商会结构</a></li>
                        <li class = "hidden-xs"><a href = "#">入会程序</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_zhangcheng']); ?>">商会章程</a></li>
                    </ul>
                </div>
                <div class = "sideContact hidden-xs">
                    <div class = "sideContactTit">
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
            <div class = "col-md-9" style="background:#e6e6fa;">
                <div class="Ml">
                    <div class = "path">
                        <div class="info">
                            <strong>商会详细介绍</strong>
                        </div>
                        <div class = "pathdiv">
                            <a href = "<?php echo ($U['Index_index']); ?>.html" style = "text-decoration: none;">首页</a>
                            <span>></span>
                            <a href = "<?php echo ($U['Index_info']); ?>.html">商会介绍</a>
                            <span>></span><a class= "on">商会详细介绍</a>
                        </div>
                    </div>
                    <p class="text1">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          广东省工商业联合会成立于1953年，同时称“广东省总商会”，
          是全国工商联的地方组织，中国人民政治协商会议广东省委员会的组成单位之一。
          工商联是以非公有制企业和非公有制经济人士为主体的人民团体和商会组织，政府联系非公有制经济人士的桥梁纽带,
          政府管理和服务非公有制经济的助手。
        </p>
        <p>&nbsp; &nbsp; &nbsp; 广东省工商业联合会成立于1953年，同时称&ldquo;广东省总商会&rdquo;，是全国工商联的地方组织，中国人民政治协商会议广东省委员会的组成单位之一。工商联是以非公有制企业和非公有制经济人士为主体的人民团体和商会组织，政府联系非公有制经济人士的桥梁纽带,政府管理和服务非公有制经济的助手。</p>
        <p>&nbsp;</p>
        <p><strong>主要职能</strong></p>
        <p>&nbsp; &nbsp; &nbsp; 加强非公有制经济人士思想政治工作，指导非公有制企业党建工作。引导非公有制经济人士积极参与国家政治生活和社会事务，政治协商、民主监督、参政议政。发挥政府管理和服务非公有制经济中的助手作用。 联系、指导非公有制经济商会协会。搭建对外经贸交流与合作平台。 引导非公有制经济人士履行社会责任，积极参与社会公益事业。 为会员企业提供法律服务，维护非公有制企业合法权益。</p>
        <p>&nbsp;</p>
        <p><strong>组织概况</strong></p>
        <p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp;截至2015年底，全省工商联会员超过28万名，有141个地方组织，1513个基层组织。全省工商联会员中，有全国人大代表40名，全国政协委员34名，省人大代表168名，省政 协委员121名。</p>
        <p>&nbsp; &nbsp; &nbsp; 省工商联兼职主席（会长）1名，党组书记1名，专职副主席（副会长）4名，兼职副 主席、副会长44名。机关内设办公室（光彩办）、人事教育部、党办（非公经济党委办公室）、会员工作部、联络部、经济科技与信息部、宣传调研部。省民营企业投诉中心也设在省工商联。主办《新粤商》杂志，并设有网站：<a href = "http://www.gdgcc.gov.cn/">www.gdgcc.gov.cn</a>
        </p>
        <p>部室联系电话</p>
        <p>办公室：83332173</p>
        <p>人事部：83352746</p>
        <p>机关党办&nbsp;:83347921</p>
        <p>会员工作部 ：83343395</p>
        <p>联络部：83236799</p>
        <p>经济科技与信息部：83322278</p>
        <p>宣传调研部：83237086</p>
        <p>民营企业投诉中心：83191888</p>
        <p>&nbsp;<img src = "http://gdgccgovcn.s62.uweb.com.cn/upfile/2016/05/05/20160505084324_193.jpg" alt = ""/>
        </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--让内容，和底部footer空出一点距离-->
<div style="height:15px; width:100%;"></div>
<script src = "/mmsh/Public/lib/bootstrap/js/index.js"></script>
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
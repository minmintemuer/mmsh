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
        <div class="bigImg" style="background-image:url(http://www.gdgcc.gov.cn/templates/default/images/bigImg1.jpg);">&nbsp;
        </div>

      </div>
    </div>
    </div>
</div>


<div class="section" style="background-color:#e6e6fa; ">


    <div class="container">
        <div class="row Mp">

            <div class="col-md-3 padding-none">

                <div class="sideMenu">
                
                
                
                

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
     <div class="navbar navbar-default c2" style="background-color:#d60011; border:none; display:block !important; width:100px !important; float:right;padding-top:30px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse2" style=" background-image:url(/mmsh/Public/images/downArrow.png); width:30px; height:30px; border:none; background-repeat:no-repeat !important;	background-size:100% 100% !important;" >

      </button>

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
          <a href="#">商会结构</a>
        </li><li>
        <a href="#">入会程序</a>
      </li>
        <li>
          <a href="<?php echo ($U['Index_zhangcheng']); ?>">商会章程</a>
        </li>

      </ul>
    </div>
</div>
<!--带箭头的栏目块，结束-->
                    <ul class="sideMenuNav hidden-xs">
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info']); ?>">商会详细介绍</a></li>
                        <li class = "hidden-xs"><a href = "<?php echo ($U['Index_info_lingdao']); ?>">领导人介绍</a></li>
                        <li class = "hidden-xs"><a href = "#">商会结构</a></li>
                        <li class = "hidden-xs"><a href = "#">入会程序</a></li>
                        <li class = "on hidden-xs"><a href = "<?php echo ($U['Index_zhangcheng']); ?>">商会章程</a></li>
                    </ul>
                </div>
                <div class="sideContact hidden-xs" style="background-image:url(/mmsh/Public/images/contactBg.jpg);">
                    <div class="sideContactTit">
                        <a href="<?php echo ($U['Index_contact']); ?>" style="text-decoration:none;">
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
            <div class="col-md-9">
                <div class="Ml">
       <div class="path">

       <div class="message">
         <strong>
         商会章程
         </strong>
       </div>
       <div class="pathdiv" style="float:right;">
             <a href = "<?php echo ($U['Index_index']); ?>.html" style = "text-decoration: none;">
                 首页
             </a>
             <span>&gt;</span>
             <a href = "<?php echo ($U['Index_info']); ?>.html">
                 商会介绍
             </a>
             <span>&gt;</span>
             <a href="" class="on">
                 商会章程
             </a>
         </div>
 </div>
                    <div class="rightBox">
                        <div class="content fixed">
                            <p style="text-align: center;">
                                <span style="font-size: x-large;">
                                    <strong>中国工商业联合会章程</strong>
                                </span>
                            </p>
                            <p style="text-align: center;">
                                （中华全国工商业联合会第十一次会员代表大会部分修改，2012年12月9日通过）
                            </p>
                            <p>
                                总&nbsp; 则
                            </p>
                            <p>&nbsp;&nbsp;&nbsp; 中国工商业联合会（简称工商联）是中国共产党领导的面向工商界、
                                以非公有制企业和非公有制经济人士为主体的人民团体和商会组织，是党和政府联系非公有制经济人士的桥梁纽带，是政府管理和服务非公有制经济的助手。工商联工作是党的统一战线工作和经济工作的重要内容。工商联事业是中国特色社会主义事业的重要组成部分。
                            </p>
                            <p>&nbsp;&nbsp;&nbsp; 工商联以中华人民共和国宪法为根本准则，按照章程开展工作。</p>
                            <p>&nbsp;&nbsp;&nbsp; 工商联高举中国特色社会主义伟大旗帜，以邓小平理论、&ldquo;三个代表&rdquo;重要思想、科学发展观为指导，坚持党的领导，坚持公有制为主体、多种所有制经济共同发展的基本经济制度，围绕经济建设中心，服务党和国家工作大局，继续解放思想，坚持改革开放，推动科学发展，促进社会和谐。</p>
                            <p>&nbsp;&nbsp;&nbsp; 工商联具有统战性、经济性、民间性有机统一的基本特征，以非公有制经济健康发展和非公有制经济人士健康成长为工作主题。充分发挥在非公有制经济人士思想政治工作中的引导作用，在非公有制经济人士参与国家政治生活和社会事务中的重要作用，在政府管理和服务非公有制经济中的助手作用，在行业协会商会改革发展中的促进作用，在构建和谐劳动关系、加强和创新社会管理中的协同作用，是工商联的主要职能。</p>
                            <p>&nbsp;&nbsp;&nbsp; 工商联以建设政治坚定、特色鲜明、机制健全、服务高效、作风优良的人民团体和商会组织为目标，全面加强思想建设、组织建设、作风建设、反腐倡廉建设、制度建设，不断增强凝聚力、影响力、执行力；坚持团结、服务、引导、教育的方针，引导非公有制经济人士坚决拥护中国共产党的领导、坚定不移走中国特色社会主义道路，积极投身社会主义经济建设、政治建设、文化建设、社会建设和生态文明建设，为把我国建设成为富强民主文明和谐的社会主义现代化国家，为实现祖国完全统一和中华民族伟大复兴而奋斗。</p>
                            <p>第一章&nbsp; 职能与任务</p>




                           </div>
                    </div>

                </div>

        </div>


    </div>
</div>
</div>
      <!--让内容，和底部footer空出一点距离-->
      <div style="height:15px; width:100%;"></div>




    <script src="lib/bootstrap/js/index.js"></script>

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
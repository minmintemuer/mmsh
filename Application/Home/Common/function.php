<?php
/**
 * Created by PhpStorm.
 * User: 金戋
 * Date: 2017/3/20
 * Time: 16:45
 */
function url(){
    $U["Index_index"] = U("Home/Index/index",'','');//主页
    $U["Index_info"] = U("Home/Index/info",'','');//商会介绍
    $U["Index_insider"] = U("Home/Index/insider",'','');//商会会员
    $U["Index_insider_cont"] = U("Home/Index/insider_cont",'','');//会员介绍
    $U["Index_dongtai"] = U("Home/Index/dongtai",'','');//动态列表
    $U["Index_gonggao"] = U("Home/Index/gonggao",'','');//公告列表
    $U["Index_contact"] = U("Home/Index/contact",'','');//联系我们
    $U["Index_dongtaiX"] = U("Home/Index/dongtaiX",'','');//动态详情
    $U["Index_content"] = U("Home/Index/content",'','');//公告详情
    $U["Index_info_lingdao"] = U("Home/Index/info_lingdao",'','');//领导
    $U["Index_info_shjg"] = U("Home/Index/info_shjg",'','');//商会结构
    $U["Index_news"] = U("Home/Index/info_news",'','');//新闻
    $U["Index_zhangcheng"] = U("Home/Index/zhangcheng",'','');//章程
    $U["Index_message"] = U("Home/Index/message",'','');//留言
    return $U;
}
function page($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
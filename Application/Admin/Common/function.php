<?php
function nav($index,$count=7){
	for($i=1;$i<=$count;$i++){
		$class[$i]="";
	}
	$class[$index]='active';
	return $class;
}
function myu(){
	$u["fl_edit"]=U('Admin/Caozuo/fenlei_edit',"",".html");
	$u["fl_add"]=U('Admin/Caozuo/fenlei_add',"",".html");
	$u["fl_del"]=U('Admin/Caozuo/fenlei_del',"",".html");
	$u["es"]=U('Admin/Caozuo/editsubmit',"",".html");
	$u["dc"]=U('Admin/Caozuo/del',"",".html");
	$u["cs"]=U('Admin/Caozuo/contentsubmit',"",".html");
	$u["ly_bj"]=U('Admin/Caozuo/message_biaoji',"",".html");
	$u["dm"]=U('Admin/Caozuo/del_message',"",".html");
	$u["rem"]=U('Admin/Caozuo/message_reply',"",".html");
	$u["is"]=U('Admin/Caozuo/infosub',"",".html");
	$u["login"]=U('Admin/Caozuo/login',"",".html");
	$u["logout"]=U('Admin/Caozuo/logout',"",".html");
	$u["rp"]=U('Admin/Caozuo/reset_pwd',"",".html");

	$u["fl"]=U('Admin/Index/fenlei',"",".html");
	$u["gg"]=U('Admin/Index/gonggao',"",".html");
	$u["dt"]=U('Admin/Index/news',"",".html");
	$u["index"]=U('Admin/Index/index',"",".html");
	$u["hy"]=U('Admin/Index/insider',"",".html");
	$u['ly']=U('Admin/Index/message');
	$u["content"]=U('Admin/Index/content',"",".html");
	$u["editgcont"]=U('Admin/Index/editgcontent',"",".html");
	$u["ym"]=U('Admin/Index/info',"",".html");
	return $u;
}

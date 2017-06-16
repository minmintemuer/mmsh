<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
	public function _initialize()
	{ session('name',null);
		$U = myu();
		$this->assign('U', $U);
		if($_SESSION['active']<time()){
		$this->display('login');
		exit(0);}

	}

	public function index()
	{
		$news=D('news')->count();
		$message=D('message')->where('flag=1')->count();
		$insider=D('insider')->count();
		$gonggao=D('gonggao')->count();
		$this->assign("news", $news);//处理数据数量
		$this->assign("message", $message);//处理数据数量
		$this->assign("insider", $insider);//处理数据数量
		$this->assign("gonggao", $gonggao);//处理数据数量

		$nav = nav(1);
		$this->assign("nav", $nav);//处理导航活动状态
		$this->display();
	}

	public function gonggao()
	{
		$nav = nav(2);
		$this->assign("nav", $nav);//处理导航活动状态
		$User = D('gonggao'); // 实例化数据表对象
		$count = $User->join('type ON gonggao.typeid=type.id')->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->field('gonggao.id,gonggao.name,type.name as type,gonggao.seq')->join('left join type ON gonggao.typeid=type.id')->order('seq desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);// 赋值数据集
		$this->assign('page', $show);// 赋值分页输出
		$this->assign('tab', "gonggao");//输出表名

		$this->display();

	}

	public function news()
	{
		$nav = nav(3);
		$this->assign("nav", $nav);//处理导航活动状态
		$User = D('news'); // 实例化数据表对象
		$count = $User->join('type ON news.typeid=type.id')->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->field('news.id,news.name,type.name as type,news.seq')->join('left join  type ON news.typeid=type.id')->order('seq desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);// 赋值数据集
		$this->assign('page', $show);// 赋值分页输出
		$this->assign('tab', "news");//输出表名
		//		dump($list);
		$this->display();

	}
	public function info()
	{
		$nav = nav(7);
		$this->assign("nav", $nav);//处理导航活动状态

		$list=D('info')->where('id=1')->select();
		$lx=json_decode($list[0]['lx']);
		$seo=json_decode($list[0]['seo']);
		$this->assign('data', $lx);//输出数据
		$this->assign('seo', $seo);//输出数据
		$this->display();

	}
public function message(){
	$nav = nav(5);
	$this->assign("nav", $nav);//处理导航活动状态
	$User = D('message'); // 实例化数据表对象
	$count = $User->count();// 查询满足要求的总记录数
	$Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	$show = $Page->show();// 分页显示输出
	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	$list = $User->join('left join reply ON reply.id=message.id')->field('message.id,message.name,message.flag,message.phone,message.email,message.date as cdate,reply.date as rdate,message.content as cont,reply.content as recont')->order('flag')->limit($Page->firstRow . ',' . $Page->listRows)->select();
	$this->assign('list', $list);// 赋值数据集
	$this->assign('page', $show);// 赋值分页输出
	$this->assign('tab', "insider");//输出表名
//echo 	$User->_sql();
	$this->display();
//			var_dump($list[0]['recont']);
}
	public function insider()
	{

		$nav = nav(4);
		$this->assign("nav", $nav);//处理导航活动状态
		$User = D('insider'); // 实例化数据表对象
		$count = $User->join('type ON insider.typeid=type.id')->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->field('insider.id,insider.name,type.name as type,insider.seq')->join('left join type ON insider.typeid=type.id')->order('seq desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list);// 赋值数据集
		$this->assign('page', $show);// 赋值分页输出
		$this->assign('tab', "insider");//输出表名
		//		dump($list);
		$this->display();
//		var_dump($list);
	}

	public function fenlei()
	{//处理导航活动状态
		$nav = nav(6);
		$this->assign("nav", $nav);
		//查询分类数据
		$z = D("type")->where("type = '1'")->select();
		$type[1] = $z;
		$z = D("type")->where("type = '2'")->select();
		$type[2] = $z;
		$z = D("type")->where("type = '3'")->select();
		$type[3] = $z;
		$this->assign("type", $type);

		$this->display();
	}public function login()
	{//处理导航活动状态
				$this->display();
	}

	public function content()
	{
		$u = myu();
		$type = $_POST['type'];
		switch($type) {
			case 3:
				$nav = nav(4);
				$tname = "添加新会员";
				$turl = $u['hy'];
				$tab = "insider";
				break;
			case 2:
				$nav = nav(3);
				$tname = "添加新动态";
				$turl = $u['dt'];
				$tab = "news";
				break;
			default :
				$nav = nav(2);
				$tname = "添加新公告";
				$turl = $u['gg'];
				$tab = "gonggao";
				$type = 1;
		}
		$this->assign("tab", $tab);
		$this->assign('turl', $turl);//传递跳转url
		$this->assign('nav', $nav);//传递导航位置
		$this->assign('tname', $tname);//传递标题
		$z = D("type")->where("type = '$type'")->select();
		$this->assign("type", $z);//传递分类
		$this->display();
	}

	public function editgcontent()
	{
		//		var_dump($_POST);
		$u = myu();
		$id = $_POST['type'];
		$tab = $_POST['tab'];
		$D = D($tab)->field("$tab.id,$tab.name,type.id as type,$tab.seq,$tab.content")->join("left join type ON $tab.typeid=type.id")->where("$tab.id=$id")->select();

		$data = $D[0];
		$type = D('type')->where("id=" . $data['type'])->select();
		//		var_dump($type);

		switch($tab) {
			case 'insider':
				$nav = nav(4);
				$tname = "编辑会员";
				$turl = $u['hy'];
				break;
			case 'news':
				$nav = nav(3);
				$tname = "编辑动态";
				$turl = $u['dt'];
				break;
			default :
				$nav = nav(2);
				$tname = "编辑公告";
				$turl = $u['gg'];

		}

		//		$data['content']=htmlentities($data['content']);
		$this->assign('turl', $turl);//传递跳转url
		$this->assign('tab', $tab);//传递跳转url
		$this->assign('data', $data);//传递数据
		$this->assign('nav', $nav);//传递导航位置
		$this->assign('tname', $tname);//传递标题
		$t = D("type")->where("type = " . $type[0]['type'])->select();
		$this->assign("type", $t);//传递分类
		$this->display();
	}
}

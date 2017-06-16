<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function _initialize(){
        $u=url();
        $this -> assign('U',$u);
        $mata = D('info') -> where(1) -> select();
        $seo = json_decode($mata[0]['seo']);//获取seo信息
        $info = json_decode($mata[0]['lx']);
        //dump($info);
        $this -> assign('info',$info);
        $this -> assign('seo',$seo);
    }
	public function index()
	{/*主页*/
        $this -> assign('num',0);
        $this -> assign('dongtai',D('news') -> field('id,name,seq,date') ->order('seq desc,date desc') -> limit(0,7) -> select());
        //公告
        $this -> assign('gonggao',D('gonggao') -> field('id,name,seq,date') ->order('seq desc,date desc') -> limit(0,6) -> select());
        //会员
        $this -> assign('huiyuan',D('insider') -> field('id,name,seq,date') ->order('seq desc,date desc') -> limit(0,6) -> select());
		$this -> display();
	}

	public function insider()
	{/*会员*/
        $this -> assign('num',2);
        if(empty($_GET['id'])){
            $id = D('type') -> where('type = 3') -> field('id') -> find()['id'];
        }else{
            $id = $_GET['id'];
        }
        $count = D('insider') -> where("typeid = " .$id) -> count();//计算记录总数
        $Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = D('insider') -> field('id,name,seq,date') ->order('seq desc,date desc') -> where("typeid = " .$id) -> select();
        //dump($list);
        $this -> assign('leibie',D('type') -> where('type = 3') -> select());//左侧导航栏
        $this -> assign('leiming',D('type') -> where("id = " . $id) -> find());//当前动态类别
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this -> display();
	}

	public function insider_cont()
	{/*会员内容页*/
        $this -> assign('num',2);
        if(!empty($_GET["id"])){
            $content = D('insider') -> where('id = '.$_GET['id']) -> find();//查找当前页面内容
            $this -> assign('leibie',D('type') -> where('type = 3') -> select());//左侧导航栏
            $this -> assign('leiming',D('insider') ->field('typeid,name') -> where("id = " . $_GET['id']) -> find());//当前动态类别
            $this -> assign('content',$content);
        }
		$this->display();
	}

	public function gonggao()
	{/*公告*/
        $this -> assign('num',4);
        if(empty($_GET['id'])){
            $id = D('type') -> where('type = 1') -> field('id') -> find()['id'];
        }else{
            $id = $_GET['id'];
        }
        $count = D('gonggao') -> where("typeid = " .$id) -> count();//计算记录总数
        $Page = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = D('gonggao') -> field('id,name,seq,date') ->order('seq desc,date desc') -> where("typeid = " .$id) -> select();
        //dump($list);
        $this -> assign('leibie',D('type') -> where('type = 1') -> select());//左侧导航栏
        $this -> assign('leiming',D('type') -> where("id = " . $id) -> find());//当前动态类别
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this -> display();
	}

	public function content()
	{/*公告内容*/
        $this -> assign('num',4);
        if(!empty($_GET["id"])){
        $content = D('gonggao') -> where('id = '.$_GET['id']) -> find();
        $this -> assign('leibie',D('type') -> where('type = 1') -> select());//左侧导航栏
        $this -> assign('leiming',D('gonggao') ->field('typeid,name') -> where("id = " . $_GET['id']) -> find());//当前动态类别
        $this -> assign('content',$content);
    }
        $this->display();
	}


	public function dongtai()
	{/*动态*/
        $this -> assign('num',3);
	    //当前动态类别id
	    if(empty($_GET['id'])){
	        $id = D('type') -> where('type = 2') -> field('id') -> find()['id'];
        }else{
	        $id = $_GET['id'];
        }
        $count = D('news') -> where("typeid = " .$id) -> count();//计算记录总数
        $Page = page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = D('news') -> field('id,name,seq,date') ->order('seq desc,date desc') -> limit($Page->firstRow . ',' . $Page->listRows) -> where("typeid = " .$id) -> select();
        $this -> assign('leibie',D('type') -> where('type = 2') -> select());//左侧导航栏
        $this -> assign('leiming',D('type') -> where("id = " . $id) -> find());//当前动态类别
        $this->assign('list', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this -> display();
	}

	public function dongtaiX()
	{/*动态详情*/
        $this -> assign('num',3);
        if(!empty($_GET["id"])){
            $content = D('news') -> where('id = '.$_GET['id']) -> find();
            $this -> assign('leibie',D('type') -> where('type = 2') -> select());//左侧导航栏
            $this -> assign('leiming',D('news') ->field('typeid,name') -> where("id = " . $_GET['id']) -> find());//当前动态类别
            $this -> assign('content',$content);
        }
		$this->display();
	}

    public function info()
    {/*商会信息*/
        $this -> assign('num',1);
        $this->display();
    }

    public function info_lingdao()
    {/*领导介绍*/
        $this -> assign('num',1);
        $this->display();
    }
    public function message()
    {/*留言*/
        $this -> assign('num',5);
        if(!empty($_POST)){
            $_POST['date'] = date("Y-m-d H:i:s");
            $num = D('message') -> add($_POST);
            if($num){
                $this -> success('留言成功','','');
            }else{
                $this -> error('留言失败','','');
            }
        }else{
            $count = D('message') -> where("flag = 1" ) -> count();//计算记录总数
            $Page = page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(10)
            //$show = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $page_count = ceil($Page -> totalRows/$Page -> listRows);//计算总页数
            $list = D('message') -> field('name,content,date') -> order('date desc') -> limit($Page->firstRow . ',' . $Page->listRows) -> where("flag = 1" ) -> select();
            $this -> assign('list', $list);// 赋值数据集
            $this -> assign('page', $Page);// 赋值分页输出
            $this -> assign('count',$count);//记录总数
            $this -> assign('page_count',$page_count);
            $this -> display();
        }
    }
	public function zhangcheng()
	{/*商会章程*/
        $this -> assign('num',1);
		$this -> display();
	}
	public function info_shjg()
	{/*商会章程*/
        $this -> assign('num',1);
		$this -> display();
	}
	public function contact(){
        $this -> assign('num',5);
        $this -> display();
    }
}

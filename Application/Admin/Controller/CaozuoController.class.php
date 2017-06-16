<?php

namespace Admin\Controller;

use Admin\Common\php\Uploader;
use Think\Controller;

class CaozuoController extends Controller

{
	public function _initialize()
	{
		session('[start]');
		$U = myu();
		$this->assign('U', $U);
		if($_SESSION['active'] < time()) {
			$this->login();
			exit(0);
		}

	}

	/*分类添加 */
	public function fenlei_add()
	{
		$data["url"] = U('admin/index/fenlei');
		$z = D("type")->add($_POST);
		if($z) {
			$data["code"] = 1;
		}
		else {
			$data["code"] = 0;
		}
		$this->ajaxReturn($data);
	}

	/*分类修改*/
	public function fenlei_edit()
	{
		$z = D("type")->save($_POST);
		$data["url"] = U('admin/index/fenlei');
		if($z) {
			$data["code"] = 1;
		}
		else {
			$data["code"] = 0;
		}
		$this->ajaxReturn($data);
	}

	public function message_biaoji()
	{
		$adata['id'] = $_POST["id"];
		$adata['flag'] = 1;
		D("message")->save($adata);
		$this->ajaxReturn("1");
	}

	/*分类删除*/
	public function fenlei_del()
	{
		$id = $_POST['id'];
		$data["url"] = U('admin/index/fenlei');
		$z = D("type")->where("id=$id")->delete($_POST);
		if($z) {
			$data["code"] = 1;
		}
		else {
			$data["code"] = 0;
		}
		$this->ajaxReturn($data);
	}

	/*提交新内容*/
	public function contentsubmit()
	{
		$tab = $_POST['tab'];
		$adata['date'] = date('Y-m-d H:i:s');
		$adata['name'] = $_POST['name'];
		$adata['typeid'] = $_POST['type'];
		$adata['seq'] = $_POST['seq'];
		$adata['content'] = $_POST['editorValue'];
		$res = D($tab)->add($adata);
		echo D($tab)->_sql();
		if($res) {

			$this->success("提交成功", $_POST['url'], 3);
		}
		else {
			$this->error('系统错误', '', 3);
		}

	}

	function del()
	{
		//		var_dump($_POST);
		$tab = $_POST['tab'];
		$id = $_POST['type'];
		$res = D($tab)->where('id=' . $id)->delete();
		if($res) {

			$this->success("删除成功", '', 3);
		}
		else {
			$this->error('系统错误', '', 3);
		}

	}

	/*提交修改*/
	public function editsubmit()
	{
		$tab = $_POST['tab'];
		$adata['id'] = $_POST['id'];
		$adata['name'] = $_POST['name'];
		$adata['typeid'] = $_POST['type'];
		$adata['seq'] = $_POST['seq'];
		$adata['content'] = $_POST['editorValue'];
		$res = D($tab)->save($adata);
		//	echo D('article')->_sql();
		if($res) {

			$this->success("修改成功", $_POST['url'], 3);
		}
		else {
			$this->error('没有修改内容无需保存', '', 3);
		}

	}

	public function infosub()
	{

		$lx['address'] = $_POST['address'];
		$lx['tel'] = $_POST['tel'];
		$lx['email'] = $_POST['email'];
		$lx['fax'] = $_POST['fax'];
		$seo['keywords'] = $_POST['keywords'];
		$seo['author'] = $_POST['author'];
		$seo['discription'] = $_POST['discription'];
		//var_dump($seo);
		$json['lx'] = json_encode($lx);
		$json['seo'] = json_encode($seo);
		$json['id'] = '1';
		D('info')->save($json);
		$this->success("修改成功", $_POST['url'], 3);

	}

	public function login()
	{
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];
		isset($_POST['remember']) ? $time = 60 * 15 : $time = 60 * 60 * 24 * 3;
		$r = D('tb_user')->where("name='$user'")->select();
		$r = $r[0];
		if(hash("sha256", $r['salt'] . $pwd) == $r['password']) {
			session('user', $user);
			session('id', $r['id']);
			session('active', time() + $time);
			$this->success("登录成功", U('Admin/Index/index'), 3);

		}
		else {
			session('user', $user);
			session('active', null);
			$this->error("登录失败", "", 3);
		}

	}

	public function reset_pwd()
	{
		if($_POST['repwd1'] == $_POST['repwd2']) {
			$user = $_SESSION['user'];
			$pwd = $_POST['pwd'];
			$npwd = $_POST['repwd1'];
			isset($_POST['remember']) ? $time = 60 * 15 : $time = 60 * 60 * 24 * 3;
			$r = D('tb_user')->where("name='$user'")->select();
			$r = $r[0];
			if(hash("sha256", $r['salt'] . $pwd) == $r['password']) {
				$data['password'] = hash("sha256", $r['salt'] . $npwd);
				$data['id'] = $_SESSION['id'];
				D('tb_user')->save($data);
				$this->success("修改成功", "", 3);

			}
			else {
				session('user', $user);
				session('active', null);
				$this->error("原密码错误", "", 3);
			}

		}
		else {
			$this->error("密码输入不一致", "", 3);
		}

	}

	public function logout()
	{
		session('active', null);
		$this->success("退出成功", U('Admin/Index/login'), 3);

	}

	public function message_reply()
	{
		$adata['id'] = $_POST['id'];
		$adata['content'] = $_POST['cont'];
		$adata['date'] = date('Y-m-d H:i:s');
		$flag['id'] = $adata['id'];
		$flag['flag'] = 1;
		if(D("reply")->where("id=" . $adata['id'])->count() == 0) {
			$res = D("reply")->add($adata);
			if($res) {
				D("message")->save($flag);
				$this->success("回复成功", U('Admin/Index/message'), 3);
			}
			else {
				$this->error("回复失败", U('Admin/Index/message'), 3);
			}
		}
		else {
			$this->error("这条留言已经回复过.", U('Admin/Index/message'), 3);

		}

	}

	public function del_message()
	{
		//		var_dump($_POST);
		$id = $_POST['id'];
		D("message")->where('id=' . $id)->delete();
		D("reply")->where('id=' . $id)->delete();
		$this->ajaxReturn();

	}

	/*图片上传*/
	public function upload()
	{
		header("Content-Type:text/html;charset=utf-8");
		error_reporting(E_ERROR | E_WARNING);
		date_default_timezone_set("Asia/chongqing");

		//上传配置
		$config = array("savePath" => "./Public/upload/",             //存储文件夹
			"maxSize" => 1000,                   //允许的文件最大尺寸，单位KB
			"allowFiles" => array(".gif", ".png", ".jpg", ".jpeg", ".bmp")  //允许的文件格式
		);
		//上传文件目录
		$Path = "./Public/upload/";

		//背景保存在临时目录中
		$config["savePath"] = $Path;
		$up = new Uploader("upfile", $config);
		$type = $_REQUEST['type'];
		$callback = $_GET['callback'];

		$info = $up->getFileInfo();
		/**
		 * 返回数据
		 */
		if($callback) {
			echo '<script>' . $callback . '(' . json_encode($info) . ')</script>';
		}
		else {
			echo json_encode($info);
		}
	}
}
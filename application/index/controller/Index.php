<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
    	$sites['title']="百宝单车-首页";
    	$sites['dashboard']="active";
		$this->assign("sites",$sites);
		return view();  
    }
	
	public function product()
    {
    	$sites['title']="产品介绍-百宝单车";
    	$sites['product']="active";
		$this->assign("sites",$sites);
		return view();  
    }
	
	public function download()
    {
    	$sites['title']="APP下载-百宝单车";
    	$sites['download']="active";
		$this->assign("sites",$sites);
		return view();  
    }
	
	public function about()
    {
    	$sites['title']="关于我们-百宝单车";
    	$sites['about']="active";
		$this->assign("sites",$sites);
		return view();  
    }
	
	public function contact()
    {
    	$sites['title']="联系我们-百宝单车";
    	$sites['contact']="active";
		$this->assign("sites",$sites);
		return view();  
    }
	
	public function save()
    {
		$_POST['ip'] = $_SERVER['REMOTE_ADDR'];
		$_POST['createtime'] = date('Y-m-d H:i:s',time());
		$rs = saveData('comment',$_POST);
		if ($rs) {
			$msg['status']="true";
			$msg['message']="留言成功";
		} else {
			$msg['status']="false";
			$msg['message']="留言失败";
		}
		echo json_encode($msg);
		die();
    }
}

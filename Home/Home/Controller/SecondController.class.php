<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class SecondController extends Controller {
    public function second(){
    	    $message=M('Que');
			$arr=$message->select();
			$this->assign('list',$arr);
			$this->display();
	}
	public function check(){
		$ad=I('get.id');
		echo $ad;
	}

}
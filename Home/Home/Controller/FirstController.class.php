<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class FirstController extends Controller {
    public function first(){
		$this->display();
	}
	public function add(){
		$m=M('User');
		$m->college=$_POST['college'];
		$m->snum=$_POST['snum'];
		$m->sname=$_POST['sname'];
		$m->pnum=$_POST['pnum'];
		$id=$m->add();
		if($id){
				$this->success('',U('Second/second'));
			}
		else{
					$this->error('注册失败');
			}
	}
}
?>
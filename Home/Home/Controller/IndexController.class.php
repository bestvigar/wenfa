<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $user=D('Que');
        $count=$que->count();//获取数据的总数
        $page=new \Think\Page($count,5);//每页显示2条数据
        $page->setConfig('header','条信息');
        $show=$page->show();//返回分页信息
        $arr=$que->limit($page->firstRow.','.$page->listRows)->relation(true)->select();
        $this->assign('list',$arr);
        $this->assign('show',$show);
    	$this->display();
    }
	}
}
?>
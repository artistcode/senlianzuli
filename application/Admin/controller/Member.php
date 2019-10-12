<?php
namespace app\Admin\controller;

use think\Loader;
use think\Request;
use think\View;

class  Member extends  Common{

    public function index(){
        $Member =    Loader::model('Member');
        if (Request::instance()->isAjax()){
            $this->api_format(200,'数据返回成功',$Member->lists(),$Member->count());
        }
        $view =new View();
        return $view->fetch();
    }

    public function  add(){
        $Member = Loader::model('Member');
        $add_num  =$Member->add();
        if ($add_num){
            $this->api_format(200,'添加成功');
        }else{
            $this->api_format(404,$Member->error);
        }

    }

    public function  delete(){
        $Member= Loader::model('Member');
        $res = $Member->where(sprintf('Member_id in(%s)',input('get.id')))->delete();
        if ($res){
            $this->api_format(200,'删除成功');

        }else{
            $this->api_format(404,'删除失败');

        }
    }

    public function  edit(){
        $Member = Loader::model('Member');
        $edit_num = $Member->edit();
        if ($edit_num){
            $this->api_format(200,'更新成功');
        }else{
            $this->api_format(404,$Member->error);
        }
    }
}





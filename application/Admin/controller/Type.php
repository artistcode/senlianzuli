<?php
namespace app\Admin\controller;

use think\Loader;
use think\Request;
use think\View;

class  Type extends  Common{

    public function index(){
        $type =    Loader::model('Type');
        if (Request::instance()->isAjax()){
            $this->api_format(200,'数据返回成功',$type->lists(),$type->count());
        }
        $view =new View();
        return $view->fetch();
    }

    public function  add(){
        $type = Loader::model('Type');
        $add_num  =$type->add();
        if ($add_num){
            $this->api_format(200,'添加成功');
        }else{
            $this->api_format(404,$type->error);
        }

    }

    public function  delete(){
        $type= Loader::model('type');
        $res = $type->where(sprintf('type_id in(%s)',input('get.id')))->delete();
        if ($res){
            $this->api_format(200,'删除成功');

        }else{
            $this->api_format(404,'删除失败');

        }
    }

    public function  edit(){
        $type = Loader::model('type');
        $edit_num = $type->edit();
        if ($edit_num){
            $this->api_format(200,'更新成功');
        }else{
            $this->api_format(404,$type->error);
        }
    }
}





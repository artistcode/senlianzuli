<?php
namespace app\Admin\controller;

use think\Db;
use think\Loader;
use think\Request;
use think\View;
class  Attribute extends  Common{

    public function index(){
        $Attribute =    Loader::model('Attribute');
        if (Request::instance()->isAjax()){
            $this->api_format(200,'数据返回成功',$Attribute->lists(),$Attribute->count());
        }
        $view =new View();
        $type = Db::name('type')->select();
        $attr_type  = Db::name('attribute_type')->select();

        $view->assign('type',$type);
        $view->assign('attr_type',$attr_type);
        return $view->fetch();
    }

    public function  add(){
        $Attribute = Loader::model('Attribute');
        $add_num  =$Attribute->add();
        if ($add_num){
            $this->api_format(200,'添加成功');
        }else{
            $this->api_format(404,$Attribute->error);
        }

    }

    public function  delete(){
        $Attribute= Loader::model('Attribute');
        $res = $Attribute->where(sprintf('Attribute_id in(%s)',input('get.id')))->delete();
        if ($res){
            $this->api_format(200,'删除成功');

        }else{
            $this->api_format(404,'删除失败');
        }
    }

    public function  edit(){
        $Attribute = Loader::model('Attribute');
        $edit_num = $Attribute->edit();
        if ($edit_num){
            $this->api_format(200,'更新成功');
        }else{
            $this->api_format(404,$Attribute->error);
        }
    }
}





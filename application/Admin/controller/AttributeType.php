<?php
namespace app\Admin\controller;

use think\Loader;
use think\Request;
use think\View;

class  AttributeType extends  Common{

    public function index(){
        $AttributeType =    Loader::model('Attribute_type');
        if (Request::instance()->isAjax()){
            $this->api_format(200,'数据返回成功',$AttributeType->lists(),$AttributeType->count());
        }
        $view =new View();
        return $view->fetch();
    }

    public function  add(){
        $AttributeType = Loader::model('Attribute_type');
        $add_num  =$AttributeType->add();
        if ($add_num){
            $this->api_format(200,'添加成功');
        }else{
            $this->api_format(404,$AttributeType->error);
        }

    }

    public function  delete(){
        $AttributeType= Loader::model('Attribute_type');
        $res = $AttributeType->where(sprintf('AttributeType_id in(%s)',input('get.id')))->delete();
        if ($res){
            $this->api_format(200,'删除成功');

        }else{
            $this->api_format(404,'删除失败');

        }
    }

    public function  edit(){
        $AttributeType = Loader::model('Attribute_type');
        $edit_num = $AttributeType->edit();
        if ($edit_num){
            $this->api_format(200,'更新成功');
        }else{
            $this->api_format(404,$AttributeType->error);
        }
    }
}





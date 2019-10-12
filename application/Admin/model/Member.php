<?php
namespace app\Admin\model;

use think\Loader;
use think\Model;

class Member  extends  Model{
    public $error;

    public function lists(){
        $list = $this->page(input('get.page').','.input('get.limit'))->select();
      return $list;
    }

    public function  add($data=''){
        if (empty($data)){
            $data= input('post.');
        }
            /*数据验证*/
        $validate  = Loader::validate('Type');
        if (!$validate->check($data)) {
            $this->error=  $validate->getError();
            return false;
        }else{
            return $this->save($data);
        }

    }

    public function  edit($data=''){
        if (empty($data)){
            $data = input('post.');
        }

        $validate  = Loader::validate('Type');
        if (!$validate->check($data)) {
            $this->error=  $validate->getError();
            return false;
        }else{
            return $this->update($data);
        }
    }

}
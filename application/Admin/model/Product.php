<?php
namespace app\Admin\model;

use think\Model;

class Product  extends  Model{
    protected  $table = 'tpt_goods';
    public function lists(){
        $this->select();

    }

    public function  port_format($data){

    }

}
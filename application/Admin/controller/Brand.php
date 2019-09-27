<?php
namespace app\Admin\controller;

use think\Loader;
use think\View;

class  Brand extends  Common{

    public function index(){
        $product =    Loader::model('product');
        $product->lists();
        $view =new View();
        return $view->fetch();
    }
}

<?php
namespace app\Admin\controller;

use think\Loader;
use think\View;

class  Category extends  Common{

    public function index(){
        $product =    Loader::model('product');
        $product->lists();
        $view =new View();
        return $view->fetch();
    }
}

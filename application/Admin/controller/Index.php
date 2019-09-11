<?php
namespace app\Admin\controller;

use think\Request;
use think\View;

class Index extends  Common
{
    public function index()
    {
        $view = new View();
        if (Request::instance()->isAjax()){
            if (session('?admin_menu')){
                $admin_menu = session('admin_menu');
                $tree_structure =    $this->build_tree($admin_menu);
                return json($tree_structure);
            }
        }

        return $view->fetch();
    }

    private   function  build_tree($menu){
        $original =array();
        foreach ($menu as $item) {
            $item['url'] = url(sprintf('admin/%s/%s',$item['control'],$item['method']));
            $original[$item['menu_id']] = $item;

        }

        $tree_structure  = array();
        foreach ($original as $k=>$item) {
            if (isset($original[$item['menu_parent_id']])){
                $original[$item['menu_parent_id']]['list'][] =$item;
            }else{
                $tree_structure[]  = &$original[$k];
            }
       }
        return  $tree_structure;

    }

    public  function introduction(){
        $view = new  View();
        return $view->fetch();

    }

}

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
                $menus = array();
                $operation = array();
                foreach ($admin_menu as $k=>$menu) {
                    if ($menu['is_menu']){
                        $operation[$k]['url'] = url(sprintf('/admin/%s/%s',$menu['control'],$menu['method']));
                        $operation[$k]['name'] = $menu['menu_name'];
                        $operation[$k]['id'] = $menu['menu_id'];
                        $operation[$k]['control'] = $menu['control'];
                        $operation[$k]['click'] = $menu['method'];
                        $operation[$k]['icon'] =sprintf('layui-icon %s',$menu['icon']) ;
                        $operation[$k]['pid'] = $menu['menu_parent_id'];
                        continue;
                    }
                    $menus[$k]['url'] = url(sprintf('/admin/%s/%s',$menu['control'],$menu['method']));
                    $menus[$k]['name'] = $menu['menu_name'];
                    $menus[$k]['id'] = $menu['menu_id'];
                    $menus[$k]['icon'] =sprintf('layui-icon %s',$menu['icon']) ;
                    $menus[$k]['pid'] = $menu['menu_parent_id'];
                }
                 $tree_structure =$this->build_tree($menus);
                 $operation =$this->build_tree($operation);

                return json(array('code'=>200,'msg'=>'菜单返回成功','operation'=>$operation,'data'=>$tree_structure));
            }

        }


        return $view->fetch();
    }

    private   function  build_tree($menu){
        $original =array();
        foreach ($menu as $item) {

           // $item['url'] = url(sprintf('admin/%s/%s',$item['control'],$item['method']));
            $original[$item['id']] = $item;
        }
        $tree_structure  = array();
        foreach ($original as $k=>$item) {
            if (isset($original[$item['pid']])){
                $original[$item['pid']]['url']='javascript:;';
                $original[$item['pid']]['subMenus'][] =&$original[$k];
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

    public function theme(){
        $view =new View();
        return $view->fetch();
    }
    public function note(){
        $view =new View();
        return $view->fetch();
    }
}

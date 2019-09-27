<?php


namespace app\Admin\controller;

use think\View;
use \think\Request;
use \think\Db;
use \think\Loader;

class Column extends Common
{
    Public function index()
    {
        if (Request::instance()->isAjax()) {

            if (Request::instance()->isGet()) {
                $data = Db::name('column')->order('sort asc ')->select();
                $interface = array('code' => 0, 'msg' => '数据返回成功', 'data' => $data);
                echo json_encode($interface);
                return; //退出
            }
        }
        $view = new View;
        return $view->fetch();
    }

    Public function add()
    {
        if (Request::instance()->isAjax()) {

            if (Request::instance()->isPost()) {
                $res = Db::name('column')->insert(input('post.'));

                if ($res) {
                    $code = 200;
                    $massage = '添加成功';
                } else {
                    $code = 500;
                    $massage = '添加失败';
                }
            }
            if (Request::instance()->isGet()) {
                $menu = Db::name('column')
                    ->field('menu_id as id,menu_name as name ,menu_parent_id as pid ')
                    ->select();
                $interface = $this->getTree($menu);
                array_unshift($interface, array('id' => 0, 'name' => '顶级菜单', 'pid' => 0));
                echo json_encode($interface);
                return;
            }
        }

        $interface = array('code' => $code, 'msg' => $massage);
        echo json_encode($interface);
    }

    private function getTree($array = [], $id = 'id', $pid = 'pid', $children = 'children')
    {
        $items = array();
        foreach ($array as $v) {
            $items[$v[$id]] = $v;
        }
        $tree = array();
        foreach ($items as $k => $item) {
            if (isset($items[$item[$pid]])) {
                $items[$item[$pid]][$children][] = &$items[$k];
            } else {
                $tree[] = &$items[$k];
            }
        }
        return $tree;
    }

    public function del()
    {
        $res = Db::name('admin_menu')->delete(input('get.authorityId'));
        $code = 404;
        $msg = '操作失败';
        if ($res) {
            $code = 200;
            $msg = '删除成功';
        } else {
            $code = 500;
            $msg = '出现异常';
        }
        $interface = array('code' => $code, 'msg' => $msg);
        echo json_encode($interface);
        return;
    }
    public function upd()
    {
        if (Request::instance()->isAjax()) {
            /* 处理ajax 请求 */
            $code = 500;
            $msg = '错误';
            $param = Request::instance()->param();
            $upd_res = Db::name('admin_menu')->update($param);
            if ($upd_res) {
                $code = 200;
                $msg = '修改成功';
            }
            if (!$upd_res) {
                $code = 404;
                $msg = '修改失败';
            }
            $interface = array('code' => $code, 'msg' => $msg);
            echo json_encode($interface);
            return;  /*处理完成退出函数*/
        }
    }

}


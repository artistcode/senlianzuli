<?php

namespace app\Admin\controller;

use think\View;

use \think\Request;
use \think\Db;
use \think\Loader;

class Admin extends Common
{

    /*用户列表*/
    public function index()
    {
        $view = new View();
      if (Request::instance()->isAjax()) {
            $data = Db::name('admin')->page(sprintf('%s,%s',input('get.page'),input('get.limit')))->select();
            $count = Db::name('admin')->count();
            $interface =  array('code'=>0,'count'=>$count,'msg'=>'数据返回成功','data'=>$data);
            echo json_encode($interface);
            return;
      }
        $group_list =  Db::name('admin_group')->select();
        $view->assign('group_list',$group_list);
        return $view->fetch();
    }

             /* 用户添加*/
    public function  add(){
           $code = 404;
           $massage = '操作失败';
        if(Request::instance()->isAjax()){

          if(Request::instance()->isPost()){
            //$user = Loader::model("User");

              $res = Db::name('admin')->insert(input('post.'));

             if($res){
               $code = 200;
               $massage = '添加成功';
            }else{

                $code  = 500;
                $massage = '添加失败';
            }
          }
         if(Request::instance()->isGet()){


         }
        }
        $return_interface = array('code'=>$code,'msg'=>$massage);
        exit(json_encode($return_interface));
        return;
    }
      /*用户更新*/
    public function  upd(){
       if(Request::instance()->isAjax()){
         /* 处理ajax 请求 */
         $code=500;
         $msg ='错误';
          $param = Request::instance()->param();

            $upd_res = Db::name('admin')->update($param);
            if($upd_res){
                $code = 200;
                $msg  = '修改成功';
             }
             if(!$upd_res){
                $code =404;
                $msg = '修改失败';
             }


         $interface =  array('code'=>$code,'msg'=>$msg);
                        echo json_encode($interface);
          return;  /*处理完成退出函数*/
       }
    }

   public function  del(){


        $res = Db::name('admin')->delete(input('get.admin_id'));
        $code  = 404;
        $msg = '操作失败';
        if($res){
            $code = 200;
            $msg = '删除成功';
        }else{
            $code = 500;
            $msg = '出现异常';
        }
        $interface =  array('code'=>$code,'msg'=>$msg);
        echo json_encode($interface);
        return;

   }

}

<?php
namespace app\Admin\controller;


use app\index\model\UserModel;
use think\Controller;
use think\Loader;
use think\Request;
use think\View;
class Free extends  Controller
{
    /*公共控制器*/
    public function  login(){
        $view =  new View();
        if (Request::instance()->isAjax()){
            $Model  = Loader::model('UserModel');
            /*检查用户名密码是否正确  正确 返回  true  错误  返回 false  */
            $login_status  = $Model->checkUser(input('post.username'),input('post.password'));
            if ($login_status){
                $status  = array('code'=>200, 'msg'=>"登录成功");
            }else{
                $status  = array('code'=>500,'msg'=>'登录失败');
            }
            return  $status;
        }
       return   $view->fetch();
    }
    public function  logout(){
        //清除登录时候设置的session
        session(null);
        //重定向到登录页
        $this->redirect('admin/Free/login');
    }

}



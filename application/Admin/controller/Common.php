<?php
namespace app\Admin\controller;


use think\Controller;
use think\View;
class Common extends  Controller
{
    /*公共控制器*/

    public function __construct()
    {
        parent::__construct();
        /* 公共控制器做一些  验证 登录 验证码 等操作*/
        if (!session('?uid')){
            $this->redirect('Admin/Free/login');
        }
    }

    protected  function api_format($code,$msg,$data=array(),$count='')
    {
        $interface = [
            'code'=>$code,
            'msg'=>$msg,

        ];

        if (!empty($count)){
            $interface['count'] =$count;
        }
        if (!empty($data)){
            $interface['data'] = $data;
        }

        exit(json_encode($interface));
    }





}



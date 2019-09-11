<?php
namespace app\Admin\controller;
use think\View;
use \think\Request;
use \think\Db;
use \think\Loader;
class Module extends Common
{
    Public function  index(){
        if(Request::instance()->isAjax()){
            if(Request::instance()->isGet()){
                $data =  Db::name('Module')->order('sort asc ')->select();
                $interface = array('code'=>0,'msg'=>'数据返回成功','count'=>1000,'data'=>$data);
                echo json_encode($interface);
                return; //退出
            }
        }


        $view = new View;
        return $view->fetch();
    }
    public function  add(){
        $msg = '';
        if (Request::instance()->isAjax()){
            if (Request::instance()->isPost()){
                /*数据入库*/
                $template = \request()->file('template');
                // 移动到框架应用根目录/public/uploads/ 目录下

                if($template){
                    $interface = array('code'=>'' ,'msg'=>'');
                    $info = $template->validate(['size'=>15678,'ext'=>'html'])->move(APP_PATH .'Home/view',input('post.template_file'),false);
                    if($info){
                        // 成功上传后 获取上传信息
                        $data = input('post.');
                        $data['template_file']  = $info->getFilename();
                        $insert_res = Db::name('Module')->insert($data);
                        if ($insert_res){
                            $interface['msg'] = '添加成功';
                            $interface['code'] =200;
                        }

                    }else{
                        // 上传失败获取错误信息
                        $interface['msg'] = $template->getError();
                        $interface['code'] = 204;
                    }

                }else{
                    $interface['msg'] ='模板文件必须上传';
                    $interface['code'] = 500;
                }
            }
            if (Request::instance()->isGet()){
                /*回显数据*/
                $data  = Db::name('Module')->field('module_id as id , module_name as name ,module_parent as pid ')->select();
                $interface =   $this->getTree($data);
                array_unshift($interface,array('id'=>0,'name'=>'顶级菜单','pid'=>0));
                echo  json_encode($interface);
            }
        }

        exit(json_encode($interface));
    }

    private  function getTree($array=[],$id='id',$pid='pid',$children ='children'){
        $items = array();
        foreach($array as $v){
            $items[$v[$id]] = $v;
        }
        $tree = array();
        foreach($items as $k => $item){
            if(isset($items[$item[$pid]])){
                $items[$item[$pid]][$children][] = &$items[$k];
            }else{
                $tree[] = &$items[$k];
            }
        }
        return $tree;
    }


    public function  del(){
        $res = Db::name('admin_group')->delete(input('get.admin_group_id'));
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


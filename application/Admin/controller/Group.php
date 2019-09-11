<?php
namespace app\Admin\controller;
use think\View;
use \think\Db;
use \think\Request;


class Group extends  Common
{
    public function index()
    {
        $view = new View();


        if(Request::instance()->isAjax()){
             $data  =   Db::name('admin_group')->page(sprintf('%s,%s',input('get.page'),input('get.limit')))->select();
                 $count = Db::name('admin_group')->count();
                         $interface =  array('code'=>0,'count'=>$count,'msg'=>'数据返回成功','data'=>$data);

                         echo json_encode($interface);
                         return;
        }


        return     $view->fetch();

    }

       /*更新*/
 public function  upd(){
       if(Request::instance()->isAjax()){
         /* 处理ajax 请求 */
         $code=500;
         $msg ='错误';
          $param = Request::instance()->param();


            $upd_res = Db::name('admin_group')->update($param);

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

    /*角色添加*/
    public function  add(){

                   $code = 404;
                $massage = '操作失败';
             if(Request::instance()->isAjax()){

               if(Request::instance()->isPost()){
                 //$user = Loader::model("User");

                   $res = Db::name('admin_group')->insert(input('post.'));

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

                 $return_interface = array('code'=>$code,'msg'=>$massage);
                      exit(json_encode($return_interface));
                      return;
             }
    }
       /*权限分配*/
    public function  assign_auth(){

       $have_auth =   Db::name('admin_group')->field('menu_id_list as menu_id')->find(input('get.admin_group_id'));
        $have_auth  =    $have_auth['menu_id'];

      $menus =Db::name('admin_menu')
            ->field('menu_id as id, menu_name as title ,menu_parent_id as pId')
            ->select();
      /*保留原始下标*/
       $tree_auth = $this->getTree($menus,'id','pId','children');
       $interface  =array('code'=>200,'have_auth'=>$have_auth,'menu_list'=>$tree_auth);

       echo  json_encode($interface);
       return;
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
            $res = Db::name('Module')->delete(input('get.id'));
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

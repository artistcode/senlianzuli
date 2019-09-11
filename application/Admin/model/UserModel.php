<?php


namespace app\Admin\model;


use think\Db;
use  think\Model;

class  UserModel extends Model
{
    protected $table = 'tpt_admin';

    /*����¼*/
    public function checkUser($username, $password)
    {
        $condition = array(
            'admin_account' => $username,
            'admin_passwd' => md5($password . config("salt"))
        );
        $find_status = parent::get($condition);
        if ($find_status) {
            /*��¼�ɹ�*/
            session('username', $find_status['admin_nickname']);
            session('uid', $find_status['admin_id']);
            $this->getMenu($find_status['admin_group']);
            return true;
        } else {
            /*��¼ʧ��*/
            return false;
        }
    }
    /*��ȡȨ��*/
    /**
     * @param $group_id
     */
    private function getMenu($group_id)
    {
        $user_group =Db::name('admin_group')->find($group_id);
        $auth = $user_group['menu_id_list'];
        if ($auth == '*'){
            /*��������Ա*/
            $admin_menu =  Db::name('admin_menu')->where(1)->order('sort asc ')->select();
        }else{
            /*��ͨ����Ա*/
            $admin_menu =  Db::name('admin_menu')->where(sprintf('menu_id in(%s)',$auth))->order('sort asc ')->select();
        }
        session('admin_menu',$admin_menu);
    }


    /*��¼��־*/
    public function record()
    {

    }

}
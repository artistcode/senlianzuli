<?php
namespace app\Admin\validate;

use think\Validate;

class Attribute extends Validate
{
    protected $rule = [
        'attr_name'  =>  'require|max:7',
        'type_id' =>  'require',
    ];
    protected $message  =   [
        'attr_name.require' => '属性组名称必填',
        'attr_name.max'     => '名称最多不能超过7个字符',
        'type_id.require'     => '类型必填',
    ];
}

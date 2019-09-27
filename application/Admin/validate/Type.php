<?php
namespace app\Admin\validate;

use think\Validate;

class Type extends Validate
{
    protected $rule = [
        'type_name'  =>  'require|max:7|unique:type',
        'mark' =>  'require',
    ];
    protected $message  =   [
        'type_name.require' => '名称必须',
        'type_name.max'     => '名称最多不能超过7个字符',
        'type_name.unique'     => '类型已经存在',
        'mark.require'   => '描述字段必填',
    ];
}

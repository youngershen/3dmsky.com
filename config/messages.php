<?php
/*
 * 3dmsky
 * messages.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-9
 * Time: 下午5:44
 */

return [

    category => [
        'required' => '分类名字不能为空',
        'unique' => '分类名字重复',
        'max'=> '分类名字必须小于255个字符',
        'only_english_and_chinese_validator' => '分类名不允许特殊字符'
    ]
];
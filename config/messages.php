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
        'name.required' => '分类名不能为空',
        'name.unique' => '分类名重复',
        'name.max'=> '分类名必须小于255个字符',
        'name.only_english_and_chinese_validator' => '分类名不允许特殊字符'
    ],

    tag => [
        'name.required' => '标签名不能为空',
        'name.unique' => '标签名不能重复',
        'name.max' => '标签名必须小于255个字符',
        'name.only_english_and_chinese_validator' => '标签名不允许特殊字符'
    ],

    article => [
        'category.article_category_id_validator' =>'不存在的分类',
        'category.numeric' => '非法的分类ID',

        'title.required' => '文章标题不能为空',
        'title.max' => '文章标题必须小于255字符',
        'title.only_english_and_chinese_validator' => '文章标题不能为特殊字符',

        'digest.max' => '摘要内容必须小于255个字符',

        'content.required' => '内容不能为空',

        'tag.article_tag_id_validator' => '非法的标签'
    ]
];
<?php
/*
 * 3dmsky
 * Validators.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-10
 * Time: 上午10:29
 */

namespace App\Http;

use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Log;

class Validators
{
    public function onlyEnglishAndChineseValidator($attribute, $value, $parameters)
    {
        return preg_match("/^[a-zA-Z0-9\x7f-\xff]+$/", $value);
    }

    public function articleTagIdValidator($attribute, $value, $parameters)
    {

        foreach( $value as $id)
        {
            $tag = Tag::find($id);

            if($tag == null)
            {
                return false;
            }
        }

        return true;
    }

    public function articleCategoryIdValidator($attribute, $value, $parameters)
    {
        $category = Category::find($value);

        if ($category)
        {

            return true;
        }
        else
        {
            if($value == 0 || $value =='0')
            {
                return true;
            }

            return false;

        }
    }

    public function slugValidator($attribute, $value, $parameters)
    {
        return preg_match("/^[a-zA-Z0-9-]+$/", $value);
    }

}

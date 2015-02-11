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

use Illuminate\Support\Facades\Log;

class Validators
{
    public function onlyEnglishAndChineseValidator($attribute, $value, $parameters)
    {
        return preg_match("/^[a-zA-Z0-9\x7f-\xff]+$/", $value);
    }

    public function articleTagIdValidator($attribute, $value, $parameters)
    {

        return false;
    }

    public function articleCategoryIdValidator($attribute, $value, $parameters)
    {
        return false;
    }
}
<?php
/*
 * 3dmsky
 * ArticleController.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-7
 * Time: 下午4:16
 */

namespace App\Http\Controllers\Cms;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function getIndex(Request $request)
    {
        return 'article add';
    }
}


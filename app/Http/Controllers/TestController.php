<?php
/*
 * 3dmsky
 * TestController.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-5
 * Time: 下午2:53
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class TestController extends BaseController
{
    function getIndex()
    {
        Log::info('sdf');
        return json_encode(Config::get('database'));
    }
}
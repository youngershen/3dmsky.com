<?php
/*
 * 3dmsky
 * IndexController.php
 * author : younger shen
 * email  : younger.x.shen@gmail.com
 * Date: 15-2-5
 * Time: 下午4:42
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function getIndex(Request $request)
    {
        $ret = array();
        $ret['all_menu'] = 'active';

        return view('admin/index', $ret);
    }

    public function getArticles(Request $request)
    {

        $data = array();
        $data['article_menu'] = 'active';
        return view('admin/articles', $data);
    }

    public function getTags(Request $request)
    {
        $data = array();
        $data['tag_menu'] = 'active';
        return view('admin/tags', $data);
    }

    public function getCategories(Request $request)
    {
        $data = array();
        $data['category_menu'] = 'active';
        return view('admin/categories', $data);
    }

    public  function getComments(Request $request)
    {

        $data = array();
        $data['comment_menu'] = 'active';
        return view('admin/comments', $data);
    }

    public function getUsers(Request $request)
    {
        $data = array();
        $data['user_menu'] = 'active';
        return view('admin/users', $data);
    }

    public function getSystems(Request $request)
    {
        $data = array();
        $data['system_menu'] = 'active';
        return view('admin/systems', $data);
    }

    public function postTag(Request $request)
    {
    }
}

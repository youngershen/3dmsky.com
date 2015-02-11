<?php namespace App\Http\Controllers\Cms;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller {

	public function __construct()
	{
		Validator::extend('onlyEnglishAndChineseValidator', 'App\Http\Validators@onlyEnglishAndChineseValidator');
		Validator::extend('articleTagIdValidator', 'App\Http\Validators@articleTagIdValidator');
		Validator::extend('articleCategoryIdValidator', 'App\Http\Validators@articleCategoryIdValidator');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = array('title' => 'required|max:255|onlyEnglishAndChineseValidator', 'category' => 'numeric|articleCategoryIdValidator', 'digest' => 'max:255', 'content' => 'required', 'tag' => 'articleTagIdValidator');

		$messages = Config::get('messages.article');

		$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails())
		{
			return response()->json(array('state' => false, 'message' => $validator->messages()));
		}
		else
		{

			return response()->json('true');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

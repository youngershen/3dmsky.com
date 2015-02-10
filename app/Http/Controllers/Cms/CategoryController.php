<?php namespace App\Http\Controllers\Cms;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		Validator::extend('onlyEnglishAndChineseValidator', 'App\Http\Validators@onlyEnglishAndChineseValidator');
	}

	public function index(Request $request)
	{
		//
		return 'index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return 'create';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = array('name'=>'required|unique:category,name|max:255|onlyEnglishAndChineseValidator');

		$messages = Config::get('messages.category');

		$validator = Validator::make($request->all(), $rules, $messages);


		if($validator->fails())
		{
			return response()->json(array('state'=>false, 'message'=>$validator->messages()));
		}
		else
		{
			$category = Category::create($request->all());

			if($category)
			{
				return response()->json(array('state'=>true, 'category'=>json_encode($category)));
			}
			else
			{
				return abort(500);
			}
		}
	}

	/**
	 * Display the all resource
	 */

	public function all(Request $request)
	{
		$categories = Category::all();
		return response()->json($categories);
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

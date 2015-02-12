<?php namespace App\Http\Controllers\Cms;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller {

	public function __construct()
	{
		Validator::extend('onlyEnglishAndChineseValidator', 'App\Http\Validators@onlyEnglishAndChineseValidator');
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
		$rules = array('name'=>'required|unique:tag,name|max:255|onlyEnglishAndChineseValidator');

		$messages = Config::get('messages.tag');

		$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails())
		{
			return response()->json(array('state' => false, 'message' => $validator->messages()));
		}
		else
		{
			$tag = Tag::create($request->all());

			if($tag)
			{
				return response()->json(array('state' => true, 'tag' => json_encode($tag)));
			}
			else
			{
				abort(500);
			}
		}

	}

	public function all(Request $request)
	{
		$tags = Tag::all();
		return response()->json($tags);
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Admin\Validator;
use Illuminate\Support\Facades\Auth;


class PostController extends BaseController
{
	public function create()
	{
		$categories = Category::all();
		
		return view('admin.post.create', compact('categories'));
	}
	public function store(Request $request)
	{
		$post = $this->validate(request(), $this->rules());
		
		$name = $request->thumb_image->store('images/');
		$thumb_image = $request['thumb_image'];

		$post['user_id'] = Auth::user()->id;
		$post['thumb_image'] = $name;

		Post::create($post);
		return redirect()->route('overview');
	}

	private function rules()
	{
		return [
			'content' => 'required',
			'title' => 'required',
			'sapo' => 'required',
			'category_id' => 'required',
			'thumb_image' => 'required|mimes:png,jpeg,jpg,gif|max:10240'
		];
	}
}

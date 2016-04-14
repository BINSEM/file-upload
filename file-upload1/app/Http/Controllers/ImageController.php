<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ImageController extends Controller
{
	public function main(){
		return views('image.index');
	}

	public function upload(){
		return views('image.create');
	}

	public function store(Request $request)
	{
		$image = new Image();
		$this->validate($request, [
			'title' => 'required',
			'image' => 'required'
			]);
		$image->title = $request->title;
		$image->description = $request->description;
		if($request->hasFile('image')) {
			$file = Input::file('image');
           
			$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

			$name = $timestamp. '-' .$file->getClientOriginalName();

			$image->filePath = $name;

			$file->move(public_path().'/images/', $name);
		}

		return $this->create()->with('success', 'Image Uploaded Successfully');
	}

	public function show($id){
		$images = Image::all();
		return view('image.show', compact('images'));
	}

	public function edit($id){
		$images = Image::all();
		return view('image.edit', compact('images'));
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Image;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        // return Post::with('categorys')->latest()->get();
        return PostCollection::collection(Post::with('categorys')->latest()->get());
    }
    // store post
    public function store(Request $request)
    {
    	
    	$strpos = strpos($request->photo,';');
        $sub = substr($request->photo,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;

        $img = Image::make($request->photo)->resize(200, 200);
        $upload_path = public_path()."/uploadimage/";
        $img->save($upload_path.$name);
        $post = new Post();
        $post->title = $request->title;
        $post->details = $request->details;
        $post->category_id = $request->cat_id;
        $post->user_id = 1;
        $post->photo = $name;
        $post->save();
    	return response(null,Response::HTTP_CREATED);
    }

    // get edit data

    public function edit($id)
    {
        $post =Post::findOrFail($id);
        return New PostResource($post);
    }

    // update

    public function update(Request $request)
    {
      

        $strpos = strpos($request->photo,';');
        $sub = substr($request->photo,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;

        $img = Image::make($request->photo)->resize(200, 200);
        $upload_path = public_path()."/uploadimage/";
        $img->save($upload_path.$name);
        $post = Post::findOrFail($request->id);
        $post->title = $request->title;
        $post->details = $request->details;
        $post->category_id = $request->category_id;
        $post->user_id = 1;
        $post->photo = $name;
        $post->save();
        if ($post) {
              return response([
                    'success' => 'Category Update successfully!'
                ],Response::HTTP_CREATED);
        }
    }

    // deleted

    public function delete($id)
    {
        Post::findOrFail($id)->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}

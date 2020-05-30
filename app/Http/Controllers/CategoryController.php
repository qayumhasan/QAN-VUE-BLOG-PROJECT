<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends Controller
{

	public function index()
	{

		return CategoryCollection::collection(Category::latest()->select('id','cat_name')->get());
	}

	// store 

    public function store(Request $request)
    {
    	return $category =Category::create($request->all());
    }

    // delete

    public function delete($id)
    {
    	Category::findOrFail($id)->delete();
    	return response(null,Response::HTTP_NO_CONTENT);
    }

    // get edit data

    public function editCategory($id)
    {
        
        $category = Category::findOrFail($id);

        return New CategoryResource($category);
    }

    // update category

    public function updateCategory(Request $request)
    {

        $category =Category::findOrFail($request->id)->update($request->all());
        if ($category) {
              return response([
                    'success' => 'Category Update successfully!'
                ],Response::HTTP_CREATED);
        }
    }
}

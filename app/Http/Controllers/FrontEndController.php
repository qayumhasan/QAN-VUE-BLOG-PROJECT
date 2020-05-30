<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\Website\CategoryResoureCollection;
use App\Http\Resources\CategoryResource;

class FrontEndController extends Controller
{
    public function categoryData()
    {
    	return $category =Category::with('posts')->get();

    }
}

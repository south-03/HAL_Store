<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_name)
    {
        $category = Category::where('name',$category_name)->first();
        if ($category) {

            return view('frontend.collections.products.index', compact('category'));
        } else {
            return redirect()->back();
        }
    }
}

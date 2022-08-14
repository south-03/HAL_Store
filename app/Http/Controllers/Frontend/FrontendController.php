<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\WithPagination;


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

    public function productView(string $category_name, string $product_name)
    {
        $category = Category::where('name',$category_name)->first();
        if ($category) {

            $product = $category->products()->where('title', $product_name)->first();
            if($product) {
                return view('frontend.collections.products.view', compact('product','category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function productListAjax()
    {
        $products = Product::select('title')->get();
        $data = [];

        foreach( $products as $item) {
            $data[] = $item['title'];
        }

        return $data;
    }

    public function searchproduct(Request $request)
    {
        $searched_product = $request->product_name;

        if($searched_product !="") {
            $product = Product::where("title", "LIKE", "%$searched_product%")->first();
            if($product) {
                return redirect('collections/'. $product->category->name.'/'.$product->title);
            } else {
                return redirect()->back()->with("status", "No product matched");
            }
        } else {
            return redirect()->back();
        }
    }

    public function pagination()
    {
        $data = Product::paginate(2);
        return view('frontend.collections.products.view', ['products' => $data]);
    }
}

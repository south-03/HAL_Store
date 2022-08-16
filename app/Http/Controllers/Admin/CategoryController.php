<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedDate = $request->validated();
        $category = new Category;
        $category->name = $validatedDate['name'];

        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {
        $category = Category::findOrFail($category);

        $validatedDate = $request->validated();

        $category->name = $validatedDate['name'];

        $category->update();

        return redirect('admin/category')->with('message', 'Category Updated Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact(['categories','products']));
    }
    public function create(Request $request)
    {
        Category::create($request->all());
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        return back();
    }
    public function show($categoryId=null)
    {
        if(!empty($categoryId)){
            $products=Category::find($categoryId)->products;
        }
        $categories=Category::all();

        return view('admin.category.index',compact(['categories','products']));

    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->products()->delete();
        $category->delete();
        return back();
    }
}

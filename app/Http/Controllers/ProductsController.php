<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $formInput=$request->except('image');

        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        Product::create($formInput);
        return redirect()->route('product.index');
    }

    public function show($id)
    {

    }
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::pluck('name','id');
        return view('admin.product.edit',compact(['product','categories']));
    }

    public function update(Request $request, $id)
    {
        $product=Product::find($id);

        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        //        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        $product->update($formInput);
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }

    public function uploadImages($productId,Request $request)
    {
        $product=Product::find($productId);

        //        image upload
        $image=$request->file('file');

        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('images',$imageName);
            $imagePath= "/images/$imageName";
            $product->images()->create(['image_path'=>$imagePath]);
        }

        return "done";
        // Product::create($formInput);
    }

    public function productindex()
    {
        $products=Product::all();

        return view('product.home',compact('products'));
    }

    public function products()
    {
        $products=Product::paginate(8);
        return view('product.products',compact('products'));
    }

    public function product($id)
    {
        $product=Product::whereid($id)->first();
        return view('product.product',compact('product'));
    }
}

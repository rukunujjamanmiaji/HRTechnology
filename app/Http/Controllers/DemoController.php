<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Input;


class DemoController extends Controller
{


    public function autocomplete(){
        $term = Input::get('term');

        $product = Product::wherename($term)->first();
        return view('search.livesearch',compact('product'));

    }
}

@extends('layouts.main')

@section('title','Product')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <div class="col-md-8 small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="/images/{{$product->image}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">{{ $product->price }}<span>$</span></span>
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select>
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>

                            </select>
                        </label>

                        Select Colour
                        <select>
                            <option value="small">
                                Red
                            </option>
                            <option value="medium">
                                Silver
                            </option>
                            <option value="large">
                                Gold
                            </option>
                            <option value="large">
                                Black
                            </option>

                        </select>

                        <h3 class="subheader">
                            <span class="price-tag">{{ $product->description }}<span>$</span></span>
                        </h3>
                        <a href="{{route('cart.addItem',$product->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="#">Rukunujjaman Miaji</a></small>
                </p>

            </div>
        </div>
    </div>

@endsection
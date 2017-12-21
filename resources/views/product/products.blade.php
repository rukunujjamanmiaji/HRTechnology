@extends('layouts.main')

@section('title','Products')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($products as $product)
            <div class="small-3 medium-3 large-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$product->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('product',$product->id)}}">
                        <h3>
                            {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$product->price}}

                    </h5>
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>

        @empty
        <h3>No Products</h3>
       @endforelse
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            {{ $products->links() }}
        </div>
    </div>

@endsection
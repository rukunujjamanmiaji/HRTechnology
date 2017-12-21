@extends('layouts.main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
                Welcome to HR Technology
            </strong>
        </h2>
        <br>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Latest Products
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @forelse($products->chunk(5) as $chunk)
            @foreach($chunk as $product)
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
            @endforeach
        @empty
            <h3>No Products</h3>
        @endforelse
    </div>

    <!-- Footer -->
    <br>
@endsection
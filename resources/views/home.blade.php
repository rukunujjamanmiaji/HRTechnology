@extends('layouts.home')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--$(".row").hover(function(){--}}
                {{--alert("You are logged in!");--}}
            {{--},--}}
            {{--function(){--}}
                {{--alert("Why You are in here man");--}}
            {{--});--}}
    {{--});--}}
{{--</script>--}}

@section('content')
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

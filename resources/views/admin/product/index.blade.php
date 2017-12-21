@extends('admin.layout.admin')

@section('content')

    <h3 class="center-block">All Products</h3>

    <ul class="container">
        @forelse($products as $product)


            <ul class="row">
                <div class="col-md-4">
                    <img src="/images/{{$product->image}}" style="max-height: 130px">
                </div>
                <div class="col-md-4">
                    <h4>Name of product:{{$product->name}}</h4>
                    <h4>Category:{{count($product->category)?$product->category->name:"N/A"}}</h4>
                    <ul>
                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Edit
                            Product</a>
                    </ul>
                    <br>
                    <ul>
                        <form action="{{route('product.destroy',$product->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                        </form>
                    </ul>


                    {{--<div class="col-md-4">--}}

                    {{--<form action="/admin/product/image-upload/{{$product->id}}" method="POST" class="dropzone"--}}
                    {{--id="my-awesome-dropzone-{{$product->id}}">--}}
                    {{--{{csrf_field()}}--}}

                    {{--</form>--}}

                    {{--</div>--}}
                </div>
            </ul>

        @empty

            <h3>No products</h3>

        @endforelse
    </ul>


@endsection
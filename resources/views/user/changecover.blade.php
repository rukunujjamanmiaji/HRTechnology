@extends('layouts.profile')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <form enctype="multipart/form-data" action="/profile/cover/{{$user->username}}" method="post">
                            {{ csrf_field() }}
                            <input type="file" name="coverimage">
                            <button class="btn btn-success">change Cover Photo</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

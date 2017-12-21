@extends('layouts.profile')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="/uploads/covers/{{ $user->coverimage }}">
                        </a>
                        <form enctype="multipart/form-data" action="/profile/cover/{{$user->username}}" method="post">
                            {{ csrf_field() }}
                            <input type="file" name="coverimage">
                            <button class="btn btn-success">change Cover Photo</button>
                        </form>
                    </div>

                </div>
                <div class="panel-body text-center">
                    <img class="profile-img pull-left" src="/uploads/avatars/{{ $user->image }}">
                    <form enctype="multipart/form-data" action="/profile/image/{{$user->username}}" method="post">
                        {{ csrf_field() }}
                        <input type="file" name="image">
                        <button class="btn btn-success">change Image</button>
                    </form>
                    <ul><h1>{{ $user->name }}</h1></ul>
                    <ul><h5>{{ $user->DateofBirth->format('l j F Y') }}({{ $user->DateofBirth->age }} years old)</h5>
                    </ul>
                    <ul>
                        <li>
                            <button class="btn btn-success">Edit Profile</button>
                        </li>
                        <br>
                        <li>
                            <button class="btn btn-success">Follow</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

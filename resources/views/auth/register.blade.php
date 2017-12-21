@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                @if(!empty($name))
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $name }}" required autofocus>
                                @else
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @endif

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('DateofBirth') ? ' has-error' : '' }}">
                            <label for="DateofBirth" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="DateofBirth" type="date" class="form-control" name="DateofBirth" value="{{ old('dateofbirth') }}" required autofocus>

                                @if ($errors->has('DateofBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DateofBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">

                                @if(!empty($email))
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" required autofocus>
                                @else
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @endif

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="status" type="number" class="form-control" name="status" required>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                            <label for="admin" class="col-md-4 control-label">Is Admin</label>

                            <div class="col-md-6">
                                <input id="admin" type="number" class="form-control" name="admin" required>

                                @if ($errors->has('admin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control" name="mobile" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="recapcha" class="col-md-4 control-label">Captcha</label>

                            <div class="col-md-6">
                                {{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
                                {{--<div name="g-recaptcha" class="g-recaptcha" data-sitekey="6LfSbT0UAAAAANfwrBrqnyOeopUnFpfJs7wMtWNe"></div>--}}
                                {{ recaptcha() }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label">or Register With</label>
                            <div class="row">

                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <a href="{{url('login/twitter')}}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                <a href="{{url('login/facebook')}}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i>Facebook</a>
                                <a href="{{url('login/google')}}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i>Google</a>
                                <a href="{{url('login/linkedin')}}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                                <a href="{{url('login/github')}}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i>Github</a>
                            </div>
                        </div>
                    </form>
                    {{ recaptcha_script() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

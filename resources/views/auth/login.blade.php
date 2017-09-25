@extends('main.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-body">
                <div class="panel-heading auth-title">Login</div>
                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label auth-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control auth-input" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Account">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label auth-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control auth-input" name="password" required placeholder="Your PassWord">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="auth-label">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group auth-btn-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary auth-btn">
                                    Login
                                </button>

                                <a class="btn btn-link auth-a" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

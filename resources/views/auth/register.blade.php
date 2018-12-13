@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <a href="">@lang('messages.CreateUserTitle')</a>
    </nav>
    <div class="bg-spacer"></div>
    <div class="container">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                    <i class="fas fa-user-plus"></i>
                    <h1>@lang('messages.CreateUser')</h1>
                    <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-12">
                                    <input placeholder="@lang('messages.inputName')" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-12">
                                    <input placeholder="@lang('messages.inputEmail')" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input placeholder="@lang('messages.inputPassword')" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input placeholder="@lang('messages.inputRepeatPassword')" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="big_button mb-2">
                                            @lang('messages.CreateUser')
                                    </button>
                                    <a href="{{ route('login') }}">@lang('messages.userAlready')</a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection

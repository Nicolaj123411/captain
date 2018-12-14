@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <a href="#">@lang('messages.enterCode')</a>
    </nav>
    <div class="bg-spacer"></div>
    <div class="container">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                <i class="fas fa-anchor"></i>
                <h1>@lang('messages.codeTitle')</h1>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <p class="text-center">@lang('messages.codeBody')</p>
                <p class="font-weight-bold mb-1">@lang('messages.codeQuestion')</p>

                <form action="{{route('code')}}" method="POST">
                    @csrf
                        <input class="mb-2 form-control {{ $errors->has('code') ? ' is-invalid' : '' }}" placeholder="Enter your answer" type="text" name="code" id="name">
                        @if ($errors->has('code'))
                            <span class="invalid-feedback mb-4" role="alert">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                        <input class="big_button box-shadow" type="submit" value="@lang('messages.codeButton')">
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection


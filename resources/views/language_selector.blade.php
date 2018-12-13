@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <a href="#">@lang('messages.language')</a>
    </nav>
    <div class="bg-spacer"></div>
    <div class="container">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                        <i class="fas fa-anchor"></i>
                    <h1>@lang('messages.welcome')</h1>

                        <div class="language_selector">
                            <a href="/set_language/da">
                                    <img src="{{ asset('svg/lang/da.svg')}}" alt="Dansk" height="65" width="65">
                            </a>
                            <a href="/set_language/de">
                                    <img src="{{ asset('svg/lang/de.svg') }}" alt="German" height="65" width="65">
                            </a>
                            <a href="/set_language/en">
                                    <img src="{{ asset('svg/lang/en.svg') }}" alt="English" height="65" width="65">
                            </a>
                        </div>

                {{-- <a href="{{ route('register') }}" class="big_button">Choose language</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


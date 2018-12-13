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
                <form action="/register" method="POST">
                    {{ csrf_field() }}
                        <div class="language_selector">
                            <div>
                                <label for="denmark">
                                    <img src="{{ asset('svg/lang/denmark.svg')}}" alt="Dansk" height="50" width="50">
                                    <input type="radio" name="language" id="denmark" @if(App::getLocale() == 'da') checked @endif value="da">
                                </label>
                            </div>
                            <div>
                                <label for="germany">
                                    <img src="{{ asset('svg/lang/germany.svg') }}" alt="German" height="50" width="50">
                                <input type="radio" name="language" id="germany" @if(App::getLocale() == 'de') checked @endif value="de">
                                </label>
                            </div>
                            <div>
                                <label for="united_kingdom">
                                    <img src="{{ asset('svg/lang/united-kingdom.svg') }}" alt="English" height="50" width="50">
                                    <input type="radio" name="language" id="united_kingdom"  @if(App::getLocale() == 'en') checked @endif value="uk">
                                </label>
                            </div>
                        </div>
                        <input class="big_button" type="submit">
                    </form>
                {{-- <a href="{{ route('register') }}" class="big_button">Choose language</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


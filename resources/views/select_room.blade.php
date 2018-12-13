@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="col-2"></div>
        <div class="col-8 text-white">@lang('messages.chooseMuseumHeaader')</div>
        <div class="col-2"><a href="#menu-toggle" id="menu-toggle"><i class="fas fa-trophy"></i></a></div>
    </nav>
    <div class="bg-spacer"></div>
        {{-- SIDEBAR --}}
        <div id="wrapper">

                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                                <div class="col-lg-12">
                                    <div class="main-container">
                                        <div class="box mt-4">
                                            <h1>@lang('messages.quizStats')</h1>
                                            <div class="trophy">
                                                    <div class=""><i class="fas fa-check-circle"></i></div>
                                                    <div class=""><img src="/svg/icons/livingroom.svg" alt=""></div>
                                                    <div class="">
                                                        <h1 class="text-left">her er overskrift!</h1>
                                                        <p>adipisicing elit. Doloribus, maiores....</p>
                                                </div>
                                            </div>
                                            <div class="trophy not-complete">
                                                    <div class=""><i class="fas fa-check-circle"></i></div>
                                                    <div class=""><img src="/svg/icons/livingroom.svg" alt=""></div>
                                                    <div class="">
                                                        <h1 class="text-left">her er overskrift!</h1>
                                                        <p>adipisicing elit. Doloribus, maiores....</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rope-container">
                                            <div class="rope"></div>
                                            <div class="rope rope-right"></div>
                                        </div>
                                        <div class="box score">
                                           <h1>score</h1>
                                           <span>2/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

    {{-- SIDEBAR --}}
    <div class="container">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box mb-4">
                    <h1>@lang('messages.chooseMuseumTitle')</h1>
                    <p class="text-center">@lang('messages.chooseMuseumBody')</p>
                </div>

                <a href="{{ route('rooms.index', 'heimat') }}">
                    <div class="box mb-2">
                        <h1>Heimatmuseum</h1>
                        <img src="{{ asset('svg/museum/heimat.svg') }}" alt="">

                    </div>
                </a>
                    <a href="{{ route('rooms.index', 'altfriesische') }}">
                    <div class="box">
                        <h1>Altfriesisches Haus</h1>
                        <img src="{{ asset('svg/museum/altfriesische.svg') }}" alt="">
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection

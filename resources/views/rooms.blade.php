@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="col-2"><a href="/houses"><i class="fas fa-arrow-left"></i></a></div>
        <div class="col-8 text-white">@lang('messages.ChooseRoom')</div>
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

            <div class="main-container row">
                @foreach($rooms as $room)
                @foreach($room->content as $content)
                <div class="col-6">
                <a href="{{ route('room.show', $content->room_id ) }}">
                            <div class="box mb-2">

                                <h1>{{ $content->title }}</h1>
                                <img class="mx-auto d-block" src="{{ !empty($room->icon) ? asset('svg/icons/'. $room->icon) : "https://cdn3.iconfinder.com/data/icons/web-development-41/512/17-512.png" }}" alt="" height="73" width="90">
                            </div>
                    </a>
                </div>
                @endforeach
                @endforeach
            </div>

@endsection



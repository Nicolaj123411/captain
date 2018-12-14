@extends('app')
@section('content')




    <nav class="navbar sticky-top navbar-light bg-light">
            <div class="col-2"><a href="{{ route('rooms.index', $house->title) }}"><i class="fas fa-arrow-left"></i></a></div>
            <div class="col-8 text-white">{{ $house->title }}</div>
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
                                        @foreach($quiz_list as $id)

                                        <div class="@if(!$id->score) not-complete @endif trophy">
                                                <div class=""><i class="fas fa-check-circle"></i></div>
                                                <div class="col-4"><img src="{{asset('svg/icons/'. App\Room::where('id', $id->room_id)->first()->icon) }}" alt=""></div>
                                                <div class="col-8">
                                                    <h1 class="text-left">{{ str_limit($id->question, 30)}}</h1>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="rope-container">
                                        <div class="rope"></div>
                                        <div class="rope rope-right"></div>
                                    </div>
                                    <div class="box score">
                                       <h1>score</h1>
                                    <span>{{count(App\quiz_score::where('user_id', Auth::user()->id)->get())}}/{{count($quiz_list)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

{{-- SIDEBAR --}}

    <div class="container" id="body">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                    <h1>{{$room->content->first()->title}}</h1>
                    <img class="mb-4" src="{{asset('svg/header_image/' . $room->img) }}" alt="">
                </div>
                <div class="rope-container">
                    <div class="rope"></div>
                    <div class="rope rope-right"></div>
                </div>
                <div class="box">
                    <p class="text-left mt-2" style="font-weight:700;">

                            {{ $room->content->first()->body }}
                    </p>
                    <p class="bolder primary-color">{{ $room->content->first()->fact }}</p>
                </div>


                @if(!empty($quiz->question))

                    <div class="rope-container">
                            <div class="rope"></div>
                            <div class="rope rope-right"></div>
                        </div>
                            <div class="box">
                                <h1>Quiz</h1>
                                <p class="text-center bolder">{{$quiz->question}}</p>
                                @if(session()->has('success'))
                                <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                                    <div class="icon"><span class="mdi mdi-check"></span></div>
                                    <div class="message">
                                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session()->get('success') }}
                                    </div>
                                    </div>
                            @endif
                            @if(session()->has('fail'))
                            <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                                <div class="icon"><span class="mdi mdi-check"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>fail!</strong> {{ session()->get('fail') }}
                                </div>
                                </div>
                        @endif
                @foreach($questions as $question)
                            <a href="{{route('quiz.save', [$question->correct, $question->room_quiz_id, $question->id]) }}" class="big_button mb-3">{{$question->answers}}</a>
                @endforeach
            </div>
                @endif
            </div>
        </div>
    </div>





@endsection







